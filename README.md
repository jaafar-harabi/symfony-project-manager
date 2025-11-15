# Symfony Project Manager

A monolithic **Project & Task Management System** built with **Symfony** to showcase clean architecture, modern PHP practices, and professional tooling (conventional commits, semantic-release, Husky, Renovate).

> Built by **Jaafar Harabi**  
> 🔗 [LinkedIn](https://www.linkedin.com/in/jaafar-harabi/) • ✍️ [Medium](https://medium.com/@jaafar-harabi)

---

## 🚀 Features

- **Authentication & Security**
  - Email + password login
  - User registration
  - Role-based access control (e.g. `ROLE_USER`, `ROLE_ADMIN`)
- **Project Management**
  - Create, list, edit, delete projects
  - Each project has owner, description, creation date
- **Task Management**
  - Tasks linked to projects
  - Status: `TODO`, `IN_PROGRESS`, `DONE`
  - Optional due date
  - Optional assignee (user)
- **Dashboard**
  - High-level stats:
    - total projects
    - total tasks
    - open tasks
- **Developer Tooling**
  - Conventional commits via **commitlint + Husky**
  - Automatic releases via **semantic-release**
  - Dependency updates via **Renovate**
  - MIT licensed

---

## 🧱 Tech Stack

- **Backend**
  - PHP 8.2+
  - Symfony (FrameworkBundle, Security, Twig, Doctrine ORM)
- **Database**
  - MySQL (or compatible; adjust `DATABASE_URL` as needed)
- **Frontend**
  - Twig templates
  - Bootstrap 5 via CDN
- **Tooling**
  - Composer
  - Node.js + npm (Husky, commitlint, semantic-release)
  - Optional CI (GitHub Actions can be added)

---

## 🗂 Project Structure

```text
.
├─ config/
├─ migrations/
├─ public/
├─ src/
│  ├─ Controller/
│  │  ├─ DashboardController.php
│  │  ├─ ProjectController.php
│  │  ├─ TaskController.php
│  │  ├─ SecurityController.php
│  │  └─ RegistrationController.php
│  ├─ Entity/
│  │  ├─ User.php
│  │  ├─ Project.php
│  │  └─ Task.php
│  ├─ Form/
│  │  ├─ ProjectType.php
│  │  ├─ TaskType.php
│  │  └─ RegistrationType.php
│  └─ Security/
│     └─ LoginFormAuthenticator.php
├─ templates/
│  ├─ base.html.twig
│  ├─ dashboard/
│  │  └─ index.html.twig
│  ├─ project/
│  │  ├─ index.html.twig
│  │  ├─ show.html.twig
│  │  ├─ new.html.twig
│  │  ├─ edit.html.twig
│  │  └─ _delete_form.html.twig
│  ├─ task/
│  │  ├─ index.html.twig
│  │  ├─ show.html.twig
│  │  ├─ new.html.twig
│  │  ├─ edit.html.twig
│  │  └─ _delete_form.html.twig
│  ├─ security/
│  │  └─ login.html.twig
│  └─ registration/
│     └─ register.html.twig
├─ tests/
├─ composer.json
├─ package.json
├─ .releaserc.json
├─ renovate.json
├─ LICENSE
└─ README.md
