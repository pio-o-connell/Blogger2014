# Blogger

A simple PHP/MySQL blogging application developed as part of the **Higher Diploma in Cloud Computing, 2014**.

The project is an early web application demonstrating server-side PHP programming, MySQL database interaction, user registration and authentication, blog posts, comments, and basic administration.

## Project Overview

The Blogger application allows users to:

* Register as a blogger
* Log in and out
* Create blog posts
* View blog posts
* Comment on posts
* Delete their own blog posts
* Browse other bloggers
* Manage users and blogs through an administrator account
* Suspend users

The application uses a traditional PHP MVC-like structure, with a central controller routing requests to different view classes and a database manager handling MySQL operations.

## Architecture

The basic application flow is:

```text
Browser
   |
   v
controller.php
   |
   +-- command (GET/POST)
   |
   v
View classes
   |
   v
DBManager
   |
   v
MySQL database
```

The main components are:

### `controller.php`

The main entry point for the application.

It reads the `cmd` parameter from either `$_POST` or `$_GET` and uses a `switch` statement to determine what operation should be performed.

Examples include:

```text
login
register
loginRequest
addBlogger
addPost
openblog
openblog1
addComment
delete1
deleteUser
Suspend
logout
```

### `library.php`

Contains the application's view classes and database manager.

The view classes include:

* `View1` – home/welcome page
* `View2` – login
* `View3` – public blog view
* `View31` – blog/post view
* `View4` – registration
* `View5` / `View51` – blogger interface
* `View6` – delete blogs
* `View7` – administrator blog management
* `View8` – administrator user suspension
* `View9` – administrator user deletion

The file also contains the `DBManager` class, which performs database operations.

> **Note:** Despite the name `library.php`, the supplied project code contains both PHP application logic and HTML output. It is not a CSS library.

### CSS

Two stylesheets are used:

* `mystyles.css` – public pages
* `insidestyles.css` – logged-in/inside pages

The original layout uses a simple fixed-width, float-based CSS design.

## Database

The application connects to a MySQL database named:

```text
blogger
```

The original connection configuration is:

```php
mysql:host=localhost:3306;dbname=blogger
```

with the MySQL `root` account and an empty password in the original code.

The application expects three principal tables:

```text
user
post
comments
```

### `user`

Stores blogger and administrator information, including:

* `id`
* `username`
* `password`
* `blogtitle`
* `email`
* `suspend`

### `post`

Stores blog posts:

* `id`
* `bloggerid`
* `title`
* `body`

`bloggerid` associates a post with a user.

### `comments`

Stores comments associated with posts:

* `id`
* `postid`
* `body`
* `author`

The basic relationship is:

```text
user
  |
  | id
  v
post
  |
  | id
  v
comments.postid
```

## Authentication

The original application uses a simple cookie-based login mechanism.

After successful login, the username is stored in a cookie:

```text
username
```

The administrator account is identified by the username:

```text
rmiller
```

The original application therefore distinguishes between the administrator and ordinary bloggers through application logic rather than a modern role/permission framework.

## Main User Flows

### Registration

```text
Register
   |
   v
View4
   |
   v
addBlogger
   |
   v
DBManager::addBlogger()
   |
   v
user table
```

### Login

```text
Login
   |
   v
View2
   |
   v
loginRequest
   |
   v
handleLogin()
   |
   v
DBManager::processLogin()
```

### Creating a Post

```text
Add Post
   |
   v
View51
   |
   v
addPost
   |
   v
handleAddpost()
   |
   v
DBManager::processBlog()
   |
   v
post table
```

### Comments

Comments are submitted through:

```text
addComment
```

or:

```text
addComment1
```

depending on whether the post is being viewed through the public or logged-in interface.

## Administrator Functions

The original administrator interface provides functionality for:

* Viewing all blogs
* Deleting blogs
* Viewing users
* Deleting users
* Suspending users
* Restoring users

The administrator interface is reached when the username `rmiller` successfully authenticates.

## Technology

The project represents the web development technology and programming style used during the **2014 Higher Diploma in Cloud Computing** course.

Primary technologies include:

* PHP
* MySQL
* HTML
* CSS
* Apache/PHP web hosting environment
* SQL
* PDO

The application predates modern PHP frameworks and uses direct PHP classes, HTML generation and SQL queries.

## Historical Context

This project was created in **2014 as part of a Higher Diploma in Cloud Computing**.

It is preserved as a snapshot of an earlier stage of web development and of the programming techniques used during the course.

The intention of preserving the project is to document and understand the original implementation rather than retrospectively rewrite it as a modern application.

## Modernisation Considerations

The application is an educational/historical project and should **not be considered production-ready software**.

The original implementation contains practices that would normally be changed in a modern PHP application, including:

* Plain-text password handling
* SQL constructed using string interpolation
* Limited input validation
* Cookie-based authentication rather than modern session/authentication mechanisms
* No prepared SQL statements
* Minimal error handling
* HTML generated directly from PHP classes
* Older CSS layout techniques
* Some duplicated and unused code
* Some inconsistent naming and legacy code

These characteristics are retained in the source because they form part of the original 2014 implementation.

If the application is modernised, the preferred approach would be to first preserve the original behaviour and then make changes incrementally.

## Project Structure

The original project follows a structure broadly similar to:

```text
Blogger/
│
├── controller.php
├── library.php
│
├── mystyles.css
├── insidestyles.css
│
└── database/
    └── ...
```

Additional files may be present in the original project, including database setup scripts and supporting resources.

## Status

**Historical / educational project – 2014**

The project is being reconstructed and documented from its original source code.

The priority is to understand and preserve the original application behaviour before making any significant changes or modernisation.

---

**Author:** Pio O'Connell
**Course:** Higher Diploma in Cloud Computing
**Year:** 2014
