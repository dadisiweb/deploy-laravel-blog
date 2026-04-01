# 📝 Laravel Mini Blog

A clean, minimal blog application built with Laravel, featuring full CRUD functionality and a polished UI — designed for simplicity, speed, and storytelling.

---

##  Features

* Create, edit, and delete posts
* View all posts with clean previews
* Dedicated full-post page
* Unified form for create & edit
* Inline CSS for fast, dependency-free styling
* Subtle “eerie journal” UI theme

---

##  Tech Stack

* Laravel (PHP)
* Blade Templates
* SQLite (zero-config database)

---

##  Why SQLite?

This project uses SQLite for:

* **Zero setup** – no database server required
* **Portability** – works instantly after cloning
* **Perfect for demos & marketing**

Just clone and run. No headaches.

---

##  Getting Started

### 1. Clone the repo

```bash
git clone https://github.com/dadisiweb/deploy-laravel-blog.git
cd deploy-laravel-blog
```

### 2. Install dependencies

```bash
composer install
```

### 3. Setup environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Create SQLite database

```bash
touch database/database.sqlite
```

Then update `.env`:

```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### 5. Run migrations

```bash
php artisan migrate
```

### 6. Start server

```bash
php artisan serve
```

Visit: http://127.0.0.1:8000

---

