# 🎓 Laravel Student CRUD – Web2 Final Exam Project

This is a simple Student Management System built with Laravel as part of the final exam for the Web 2 course.
The project implements full CRUD operations (Create, Read, Update, Delete) for managing student data.

---

## 🛠️ Tech Stack

- **⚙️ Laravel (PHP Framework)**
- **🐬 MySQL**
- **🧱 Blade (Laravel Templating Engine)**
- **💡 HTML / CSS**
- **🛠️ XAMPP / phpMyAdmin (for local development)**

---

## 📋 Features

- **Add a new student with name, email, and other fields.**
- **Display a list of all registered students.**
- **Edit student details.**
- **Delete a student from the system.**
- **Simple, clean UI using Blade templates.**
- **Follows MVC architecture.**

---

## 🚀 How to Run the Project Locally

1. Clone the repository:
```
git clone https://github.com/AbdallahF44/web2_laravel_final_exam.git
```
2. Navigate to the project folder:
```
cd web2_laravel_final_exam
```
3. Install dependencies:
```
composer install
```
4. Create a copy of .env:
```
cp .env.example .env
```
5. Configure your .env file:
    - *Set your database name, username, and password:*
```
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```
6. Generate application key:
```
php artisan key:generate
```
7. Run migrations:
```
php artisan migrate
```
8. Start the local development server:
```
php artisan serve
```
9. Visit the app in your browser:
```
http://localhost:8000
```

---

## 📌 Notes

This is a basic Laravel project created for learning purposes.

You can extend it by adding authentication, validation, pagination, or soft deletes.

