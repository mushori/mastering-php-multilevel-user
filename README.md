# 🔐 Multi-Level Login & Inventory System

A web-based application built with **Native PHP** to demonstrate **Role-Based Access Control (RBAC)**. This system differentiates access rights between Admins, Employees (Pegawai), and Staff (Pengurus), complete with a CRUD module for inventory management.

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-Style-1572B6?style=for-the-badge&logo=css3&logoColor=white)

## 📸 Screenshots

| Login Page | Admin Dashboard |
|:--:|:--:|
| ![Login Page](screenshots/login.png) | ![Admin Dashboard](screenshots/admin_dashboard.png) |
| **Add Item Form** | **Employee View** |
| ![Add Item](screenshots/tambah_barang.png) | ![Employee Page](screenshots/pegawai_view.png) |

*(Note: Don't forget to upload your screenshots to a `screenshots` folder)*

## ✨ Key Features

* **Multi-Level Authentication**:
    * **Admin**: Full access, including CRUD operations for inventory.
    * **Pegawai (Employee)**: Restricted view access.
    * **Pengurus (Staff)**: Specific view access.
* **Session Management**: Protects pages from unauthorized access (users cannot jump to dashboard without logging in).
* **CRUD System**: Create, Read, Update, and Delete data for the "Barang" (Items) table.
* **Data Validation**: Login error handling and empty field checks.

## 🛠️ Tech Stack

* **Backend**: Native PHP
* **Frontend**: HTML5, Custom CSS (`style.css`)
* **Database**: MySQL

## 🚀 How to Run

1.  **Clone the Repository**
    ```bash
    git clone [https://github.com/yourusername/tugas10-php.git](https://github.com/yourusername/tugas10-php.git)
    ```

2.  **Setup Database**
    * Open **phpMyAdmin**.
    * Create a new database named **`tugas10_db`**.
    * Import the provided SQL file or run this query:
    ```sql
    -- Create User Table
    CREATE TABLE user (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(255),
        username VARCHAR(255),
        password VARCHAR(255),
        level VARCHAR(20)
    );

    -- Create Items Table
    CREATE TABLE barang (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama_barang VARCHAR(100),
        kode_barang VARCHAR(20),
        qty INT,
        kategori VARCHAR(50)
    );
    ```

3.  **Configure Connection**
    Check `koneksi.php`:
    ```php
    $koneksi = mysqli_connect("localhost","root","","tugas10_db");
    ```

4.  **Default Accounts (Password: 123)**

| Role | Username | Password | Access Rights |
| :--- | :--- | :--- | :--- |
| **Admin** | `admin` | `123` | Full Access + CRUD |
| **Pegawai** | `pegawai` | `123` | View Only |
| **Pengurus** | `pengurus`| `123` | View Only |

## 👨‍💻 Author

**Muhammad Sholihuddin Rizky**
* Student at Institut Teknologi Sepuluh Nopember (ITS)
* Department of Informatics Engineering

---
*Created for Web Programming Assignment (Tugas 10)*
