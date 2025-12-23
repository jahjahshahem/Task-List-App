# Task List Application

A modern **task management web application** built with **Laravel (PHP)**.  
It features a clean user interface styled with **Tailwind CSS**, interactive behavior powered by **Alpine.js**, and a **Dockerized MySQL** database for seamless local development.

---

## 🚀 Features

- Create, view, update, and delete tasks
- Mark tasks as completed or not completed
- Server-side validation using Laravel Form Requests
- Flash success messages with Alpine.js interactivity
- Pagination for task lists
- Clean, responsive UI with Tailwind CSS
- RESTful routes for all CRUD operations
- MySQL database integration via Docker

---

## 🛠️ Tech Stack

- **Backend:** Laravel (PHP)
- **Frontend:** Blade templates, Alpine.js
- **Styling:** Tailwind CSS
- **Database:** MySQL
- **Containerization:** Docker & Docker Compose

---

## 📦 Architecture Highlights

- Uses Laravel’s MVC pattern
- Eloquent ORM for database interactions
- Form Request classes for validation
- Route model binding for clean and readable routes
- Dockerized environment for consistent development setup

---

## 🐳 Docker Setup

The application uses Docker to run MySQL in a containerized environment, ensuring:

- Easy setup with no local MySQL installation required
- Consistent configuration across development environments
- Simple database management using Docker Compose

---

## 🎨 UI & UX

- Minimalist, responsive design using Tailwind CSS
- Interactive elements like flash messages and toggles with Alpine.js
- User-friendly task management experience

---

## ⚡ RESTful Web App

This project follows **RESTful routing conventions**:

| HTTP Verb | URI | Action |
|-----------|-----|--------|
| GET | `/tasks` | List tasks |
| GET | `/tasks/create` | Show create task form |
| POST | `/tasks` | Store new task |
| GET | `/tasks/{task}` | Show single task |
| GET | `/tasks/{task}/edit` | Show edit form |
| PUT | `/tasks/{task}` | Update task |
| DELETE | `/tasks/{task}` | Delete task |
| PUT | `/tasks/{task}/toggle-complete` | Toggle task completion |

---

## 🎯 Purpose

This project demonstrates:

- Practical usage of Laravel for CRUD applications
- Clean routing and resource management
- Also served as personal practice for exam
