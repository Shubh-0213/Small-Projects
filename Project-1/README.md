# Login System Project 🚀

![PHP Version](https://img.shields.io/badge/php-%5E7.4%7C%5E8.0-blue.svg?style=for-the-badge)
![MySQL Version](https://img.shields.io/badge/mysql-%5E5.7%7C%5E8.0-orange.svg?style=for-the-badge)
![License](https://img.shields.io/badge/license-MIT-green.svg?style=for-the-badge)

This project is a simple login system implemented in PHP 🐘. It includes a form where users can submit their name, date of birth, email, and create a password. The form data is then saved to a MySQL database 🛢️.

## Directory Structure 📁

```shell
/login.php
/includes/config.php
/callback/form_callback.php
/database/login_page.sql
```

## Key Files 🔑

- `login.php`: The main file containing the HTML form for user input.
- `includes/config.php`: Establishes a connection to the MySQL database.
- `callback/form_callback.php`: Handles the form submission and inserts data into the database.
- `database/login_page.sql`: Contains SQL commands to create the `login_page` table with some sample data.

## Installation Steps 🛠️

1. **Database Setup:**
   - Create a MySQL database named `small_projects`.
   - Import `login_page.sql` to your database.

2. **Configuration:**
   - Adjust `includes/config.php` with your database credentials.

3. **Running the Application:**
   - Place all files in your web server's document root or a subdirectory.
   - Access `login.php` via your web browser.

## Important Note 🚨

- Passwords are stored unencrypted, which is not secure. Use PHP's `password_hash()` for storage and `password_verify()` for authentication in real applications.

## Possible Improvements 🌟

- Implement user input validation and sanitization.
- Use prepared statements to prevent SQL injection.
- Add user registration, login functionalities, and password encryption for enhanced security.

This project is basic and intended as a foundation. For production use, further security and functionality improvements are recommended.

--- 

Made with ❤ in India
