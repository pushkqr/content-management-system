#Content Management System (CMS)

## Overview
This is a comprehensive Content Management System (CMS) built with PHP, designed to be both simple and functional. It features two distinct interfaces:
- **User Interface:** Displays content dynamically from the database across multiple pages, with intuitive navigation.
- **Admin Interface:** Provides a secure interface for administrators to manage content, with options to create, edit, and delete entries.

## Features
- **Dynamic Content Display:** Automatically loads and displays content from the database.
- **Secure Authentication System:** Ensures that only authorized users can access the admin interface.
- **Admin Management:** Admins can manage content with full CRUD (Create, Read, Update, Delete) capabilities.
- **Responsive Navigation:** Easy-to-use navigation for both users and admins, ensuring a smooth experience on various devices.

## Installation
1. **Clone the Repository:**
    ```bash
    git clone https://github.com/pushkqr/content-management-system.git
    cd content-management-system
    ```

2. **Setup Database:**
    - Create a database and import the provided SQL schema located in the `database` directory.
    - Update the database connection details in the `config.php` file.

3. **Configure Environment:**
    - Ensure the `config.php` file has the correct paths and settings.
    - Configure your web server (Apache, Nginx, etc.) to point to the public directory of the project.

4. **Run the Project:**
    - Deploy on a local server (e.g., XAMPP, WAMP) or an online server.
    - Access the user interface via `http://localhost/your-project-path/` and the admin interface via `http://localhost/your-project-path/admin`.

## Usage
- **User Interface:** Browse through the available content pages, using the navigation menu.
- **Admin Interface:** Log in as an admin to manage content entries. You can add new content, edit existing entries, or delete those no longer needed.

## Contribution
Contributions are welcome! If you have suggestions for new features or enhancements, feel free to fork the repository and submit a pull request or create an issue.

## Future Enhancements
- **User Role Management:** Implement different levels of access within the admin interface.
- **Content Versioning:** Keep track of changes made to content with version control.

