<?php
// photos.php — server-side proxy for Pexels (keeps your key secret)
header('Content-Type: application/json');

include __DIR__ . '/config.php';
$API_KEY = PEXELS_API_KEY;

$q = $_GET['q'] ?? 'barber haircut';
$per = (int)($_GET['per_page'] ?? 9);
$per = max(1, min(12, $per)); // clamp 1..12

$params = http_build_query([
  'query'       => $q,
  'per_page'    => $per,
  'orientation' => 'landscape',
  'size'        => 'large',
]);

$url = 'https://api.pexels.com/v1/search?' . $params;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: $API_KEY"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$urls = [];
if ($code >= 200 && $code < 300 && $response) {
  $data = json_decode($response, true);
  foreach (($data['photos'] ?? []) as $p) {
    $urls[] = $p['src']['large'] ?? $p['src']['landscape'] ?? $p['src']['medium'] ?? null;
  }
  $urls = array_values(array_filter($urls));
}

echo json_encode(['urls' => $urls]);
