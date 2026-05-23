# AI Assisted Task Management System

## Overview

This project is a production-ready AI Assisted Task Management System built using Laravel 10 following clean architecture principles.

The application includes:

- Repository Pattern
- Service Layer Architecture
- REST APIs
- Role-based access control
- AI summary generation
- Responsive UI using Tailwind CSS

---

## Tech Stack

- Laravel 10
- PHP 8+
- MySQL
- Blade
- Tailwind CSS
- Vite
- REST API

---

## Authentication

Authentication is implemented using Laravel Breeze with Blade.

Features:

- User Registration
- User Login
- Session Authentication
- Tailwind-based authentication UI

---

## Roles

The application supports two roles:

| Role  | Access                        |
| ----- | ----------------------------- |
| Admin | Full access to all tasks      |
| User  | Access only to assigned tasks |

Role management is implemented using a `role` column in the `users` table.

---

## Database Structure

### Users Table

Additional field:

- `role`

### Tasks Table

| Field       | Type        |
| ----------- | ----------- |
| title       | string      |
| description | text        |
| priority    | enum        |
| status      | enum        |
| due_date    | date        |
| assigned_to | foreign key |
| ai_summary  | text        |
| ai_priority | enum        |

---

## Project Architecture

The project follows clean architecture principles.

### Folder Structure

```text
app/
├── Http/
│   ├── Controllers/
│   ├── Middleware/
│   ├── Requests/
│   └── Resources/
├── Console/
├── Exceptions/
├── Models/
├── Repositories/
│   ├── Contracts/
│   └── Eloquent/
├── Services/
├── Policies/
├── Enums/
├── View/
└── Providers/
```

---

## Development Progress

- [x] Laravel 10 project setup
- [x] Git repository setup
- [x] Authentication using Breeze
- [x] User role implementation
- [x] Task database structure
- [ ] Repository Pattern
- [ ] Service Layer
- [ ] AI Integration
- [ ] Task CRUD
- [ ] Policies & Authorization
- [ ] Dashboard Analytics
- [ ] REST APIs
- [ ] Responsive UI

---

## Setup Instructions

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Configure database credentials in `.env`

```bash
php artisan migrate
npm install
npm run build
php artisan serve
```

## Test Credentials

### Admin User

Email: admin@example.com  
Password: password
