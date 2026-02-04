


# 🎓 Student Management System (Laravel CRUD)

A simple and clean **Student Management System** built using **Laravel** that demonstrates core backend concepts such as CRUD operations, MVC architecture, database integration, validation, and authentication-ready structure.

This project is suitable for **freshers / entry-level backend developers** and showcases practical Laravel development skills.

---

## 🚀 Features

- Add new students
- View student list
- Edit student details
- Delete students
- Server-side validation
- Flash success messages
- Clean MVC architecture
- Database integration using Eloquent ORM

---

## 🛠️ Tech Stack

- **Backend:** PHP, Laravel  
- **Database:** MySQL  
- **Frontend:** Blade Templates, Bootstrap  
- **ORM:** Eloquent  
- **Tools:** Git, GitHub, XAMPP  

---

## 📁 Project Structure

```

student-management/
├── app/
│   ├── Http/Controllers/StudentController.php
│   └── Models/Student.php
├── database/
│   └── migrations/
│       └── create_students_table.php
├── resources/
│   └── views/
│       └── students/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
├── routes/
│   └── web.php
├── .env
└── README.md

````

---

## ⚙️ Installation & Setup

Follow these steps to run the project locally:

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/your-username/student-management-laravel.git
cd student-management-laravel
````

### 2️⃣ Install Dependencies

```bash
composer install
```

### 3️⃣ Configure Environment

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` file with your database credentials:

```
DB_DATABASE=student_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Run Migrations

```bash
php artisan migrate
```

### 5️⃣ Start the Server

```bash
php artisan serve
```

Open in browser:

```
http://127.0.0.1:8000/students
```

---

## 🧪 Screens / Functionalities

* Students List Page
* Add Student Form
* Edit Student Form
* Delete Student Action
* Success Alerts

---

## 📌 Learning Outcomes

* Laravel MVC Architecture
* CRUD Operations
* Routing & Controllers
* Blade Templating
* Database Migrations
* Eloquent ORM
* Git & GitHub Workflow

---

## 👤 Author

**Somanshu Srivastava**

* GitHub: [https://github.com/somanshusrivastava](https://github.com/somanshusrivastava)
* LinkedIn: [https://www.linkedin.com/in/somanshu-srivastava](https://www.linkedin.com/in/somanshu-srivastava)

---

## 📄 License

This project is open-source and free to use for learning and educational purposes.

