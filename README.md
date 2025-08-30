# Login & Registration System

A simple PHP-based user authentication system with registration, login, and logout functionality. User data is stored in a MySQL database. The UI is styled with CSS and includes basic client-side validation.

## Features

- User registration with unique username and email
- Passwords are securely hashed
- Login and logout functionality
- Session-based authentication
- Simple, responsive UI

## Project Structure

```
database.sql
db.php
login.php
logout.php
register.php
script.js
style.css
welcome.php
```

## Setup Instructions

1. **Clone or Download the Project**

2. **Database Setup**
   - Import [`database.sql`](database.sql) into your MySQL server to create the `user_system` database and `users` table.

3. **Configure Database Connection**
   - Edit [`db.php`](db.php) if your MySQL credentials differ from the defaults.

4. **Run the Application**
   - Place all files in your web server directory (e.g., `htdocs` for XAMPP).
   - Access `register.php` or `login.php` via your browser.

## File Descriptions

- [`database.sql`](database.sql): SQL script to set up the database and users table.
- [`db.php`](db.php): Database connection logic.
- [`register.php`](register.php): User registration form and logic.
- [`login.php`](login.php): User login form and logic.
- [`logout.php`](logout.php): Logs out the user and destroys the session.
- [`welcome.php`](welcome.php): Welcome page for logged-in users.
- [`script.js`](script.js): Client-side validation for registration.
- [`style.css`](style.css): Styles for the forms and layout.

## Security Notes

- Passwords are hashed using PHP's `password_hash`.
- Prepared statements are used to prevent SQL injection.
- Sessions are used for authentication.

## License

This project is for Education Purpose Only
