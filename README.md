<!-- README for Plant Nest by Anas Furqan -->

<h1 align="center">🪴 Plant Nest</h1>
<p align="center">An elegant Laravel-powered eCommerce platform focused on plants and green living.</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-Framework-red?style=flat-square&logo=laravel" />
  <img src="https://img.shields.io/badge/Status-Active-brightgreen?style=flat-square" />
  <img src="https://img.shields.io/badge/License-MIT-blue?style=flat-square" />
</p>

---

## 🌟 Features

- 🪴 Modern eCommerce platform for plants & accessories  
- 🛒 Product catalog with categories & filters  
- 📦 Shopping cart and checkout functionality  
- 👨‍💼 Admin panel for managing products and orders  
- 📈 Order history and invoice tracking  
- 🔐 Secure authentication (Laravel Auth)  
- 📱 Responsive, mobile-friendly design  

---

## 🚀 Tech Stack

| Tech               | Description                        |
|--------------------|------------------------------------|
| 🧠 **Laravel**      | PHP framework for backend logic    |
| 🎨 **Blade**        | Laravel's templating engine        |
| 💾 **MySQL**        | Relational database system         |
| 🌐 **HTML/CSS/JS**  | Core frontend technologies         |
| 🎯 **Bootstrap**    | Utility-first CSS for design       |

---

## 📂 Installation

```bash
# Clone the repository
git clone https://github.com/anas-furqan/plant-nest.git

# Navigate to the project directory
cd plant-nest

# Install PHP dependencies
composer install

# Copy .env and generate app key
cp .env.example .env
php artisan key:generate

# Configure your database in .env file

# Run database migrations
php artisan migrate

# Start the local development server
php artisan serve
