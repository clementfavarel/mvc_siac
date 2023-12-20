# SIAC

## Description

## Technologies

-   Ubuntu
-   Apache
-   MariaDB
-   PHP
-   JavaScript
-   HTML
-   CSS

## Fonctionnement

**User Accesses the Application:**
The user opens the application by navigating to the index.php file.

**Routing:**
The index.php file initializes the application and routes the request to the appropriate controller based on the URL and user actions.

**Authentication Controller:**
The authentication controller (AuthController.php) handles actions related to user authentication, such as login and registration.
It includes methods to display login and registration forms (login.php and register.php views) and to process form submissions.

**User and Admin Controllers:**
UserController.php and AdminController.php handle actions specific to regular users and admins, respectively.
They include methods for displaying user/admin dashboards and performing user/admin-related tasks.

**Models:**
The User.php and Admin.php models handle interactions with the database. They include methods for user and admin authentication, as well as any other data-related operations.

**Views:**
The views/ directory contains subdirectories for different user types (auth/, user/, admin/) and their respective views.
Views are responsible for rendering HTML content and presenting information to the user.

**Assets:**
The assets/ directory holds publicly accessible assets like CSS and JavaScript files, which are used to style and enhance the user interface.

**Form Submission:**
When a user submits a form (e.g., login or registration), the corresponding controller processes the form data. For example, the AuthController.php validates login credentials and authenticates the user.

**Authentication and Authorization:**
The authentication controller communicates with the appropriate model (User.php or Admin.php) to authenticate the user or admin based on the submitted credentials.
Authorization checks ensure that users or admins can only access pages and perform actions they are allowed to.

**Display Dashboard:**
Upon successful authentication, the user is redirected to their respective dashboard (user/dashboard.php or admin/dashboard.php).

**Logging Out:**
The system provides a mechanism for users and admins to log out, which involves destroying the session and redirecting to a logout confirmation page or the login page.

## TODO

-   Refactor Model Db queries because they use sample naming for tables and columns <!--!error-->
-   Modify the admin model because it is found in the session with the role but the models work with the db.admins table <!--!error-->

## Tests

### Functional Tests :

**Guest Access:**

-   Verify that a guest can access the landing page.
-   Verify that a guest can access the registration form.
-   Verify that a guest can access the login form.

**User Authentication:**

-   Test user login with valid credentials.
-   Test user login with invalid credentials.
-   Test user registration with valid input.
-   Test user registration with invalid input.

**User Dashboard:**

-   Test access to the user dashboard after successful login.
-   Test access to different sections of the user dashboard.

**Admin Authentication:**

-   Test admin login with valid credentials.
-   Test admin login with invalid credentials.

**Admin Dashboard:**

-   Test access to the admin dashboard after successful login.
-   Test access to different sections of the admin dashboard.

### Unit Tests :

**User Model:**

-   Test the authenticateUser method with valid credentials.
-   Test the authenticateUser method with invalid credentials.
-   Test the createUser method with valid input.
-   Test the createUser method with invalid input.

**Admin Model:**

-   Test the authenticateAdmin method with valid credentials.
-   Test the authenticateAdmin method with invalid credentials.

**Database Connection:**

-   Test the database connection by connecting and disconnecting.
-   Test database queries using mock data.

**Controller Methods:**

-   Test each method in the AuthController, UserController, and AdminController.
-   Ensure proper redirections, session handling, and view rendering.

**Error Handling:**

-   Test error handling mechanisms for invalid actions or unexpected scenarios.

**Session Handling:**

-   Test session creation and destruction during login and logout.
