# Laravel V12 Messages Application

This is a Laravel-based web application that I built as part of my Andersen task. The original task required creating contact form to submit messages, but I extended it by adding full CRUD functionality so users can add, view, edit, and delete messages easily.

---

## Table of Contents

- [Project Overview](#project-overview)  
- [Features I Added](#features-i-added)  
- [How It Works](#how-it-works)  
- [Screenshots](#screenshots)  
- [Installation](#installation)  

---

## Project Overview

The main goal of this project was to create a page with a form where users can submit their name, email, and message, which would be stored in a MySQL database. The messages should also be displayed below the form.

After completing the base requirements, I implemented additional CRUD operations to improve the application’s functionality, allowing users to edit and delete messages as well.

---

## Features I Added

- Full **CRUD (Create, Read, Update, Delete)** functionality for contact messages.  
- **Server-side validation** for all inputs:  
  - Name: required 
  - Email: required and must be a valid email address  
  - Message: required and must be at least 10 character
- Display all submitted messages on the same page with clear formatting.  
- Edit feature that pre-fills the form with existing message data for easy updates.  
- Delete feature to remove messages from the database instantly.  
- Real-time feedback and notifications for validation errors and successful operations.  

---

## How It Works

1. Users enter their name, email, and message in the form.  
2. When submitting, the data is validated and saved to the database.  
3. All messages are shown below the form with details and action buttons.  
4. Users can edit any message — the form will update with that message’s data.  
5. Users can delete any message, which removes it from the database immediately.  
6. Validation errors are shown clearly if any input is invalid.

---

## Screenshots

### Contact Form  
![Contact Form](./docs/form%20itself.png)  
*The form where users submit their contact messages.*

### Validation Errors  
![Validation Errors](./docs/validation.PNG)  
*Shows errors when inputs don’t meet validation rules.*

### Messages List  
![Messages List](./docs/show%20list.png)  
*All messages displayed with Edit and Delete buttons.*

### Edit Message  
![Edit Message](./docs/edit%20page.png)  
*Editing an existing message with the form pre-filled.*

### Notification  
![Edit Message](./docs/notifications.PNG)  
*Show user real time notification after operations*

---

## Installation

1. Clone the repository:  
   ```bash
   git clone https://github.com/yourusername/your-laravel-contact-app.git

2. configure your database in .env file

3. Run migrations:
   ```bash
   php artisan migrate 

4. Run the application:  
   ```bash
   php artisan serve
