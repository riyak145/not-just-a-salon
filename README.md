# Not just a salon
**not just salon, but experience**

Simple PHP + Bootstrap 5 site for a salon/barbershop. It uses a small PHP proxy (`photos.php`) to fetch royalty-free haircut images from Pexels and swaps them into the page on load. A basic contact form posts to `userinfo.php` and stores entries in MySQL.

## Features
- Bootstrap 5 layout (no build step)
- Carousel + sections (Services, Gallery, Contact)
- Pexels API images via server proxy (`photos.php`) — keeps your API key private
- CLS-safe image loading (transparent placeholders + `width`/`height`)
- Simple PHP form (`userinfo.php`) that inserts into MySQL

## Stack
- **Frontend:** HTML, Bootstrap 5, a bit of vanilla JS
- **Backend:** PHP (XAMPP/Apache)
- **DB:** MySQL/MariaDB
- **Images:** Pexels API (server-side fetch)

## Project structure
/ (repo root)
├─ index.php
├─ service.php
├─ about.php
├─ userinfo.php
├─ photos.php
├─ img/ # local images 
├─ css/style.css # optional styles
├─ .gitignore # ignores config.php (API key)
└─ README.md
