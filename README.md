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

## Running the Application

```bash
php artisan serve
```

---

## AI Summary Implementation

The AI summary feature is implemented using a dedicated `AIService`.

Current implementation uses a mocked AI approach:

- Generates summary from task description
- Generates AI priority
- Supports AI summary refresh flow

This architecture allows easy replacement with real AI providers such as:

- OpenAI
- Gemini
- Claude

---

## Authorization Rules

### Admin

- View all tasks
- Create tasks
- Edit all tasks
- Refresh AI summaries

### User

- View assigned tasks only
- Edit assigned tasks only

---

## Filters

Implemented using Eloquent Scopes:

- Search Scope
- Status Scope
- Priority Scope

---

## UI Features

- Responsive layout
- Reusable Blade components
- Tailwind CSS styling
- Sidebar dashboard
- Dynamic task statistics

---
