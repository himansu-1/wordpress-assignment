# Product Plugin

A custom WordPress plugin for managing and uploading products, their types, and images from the WordPress admin. Products added via this plugin are displayed on the frontend, making it ideal for e-commerce, catalogs, or any site needing a flexible product management system.

---

## 📦 Features

- 📝 **Product Management** – Add, edit, and delete products from a custom admin UI.
- 🗂️ **Product Types** – Each product can have multiple types, each with its own details and images.
- 🖼️ **Image Uploads** – Upload multiple images for each product type, with custom names and descriptions.
- 🛠️ **Custom Database Tables** – Products, types, and images are stored in dedicated tables for performance and flexibility.
- ⚡ **AJAX & Modern UI** – Uses Bootstrap and jQuery for a responsive, user-friendly admin experience.
- 🔒 **Secure & Modular** – Follows WordPress best practices for security and extensibility.

---

## 🗂️ Plugin Structure

```
product-plugin/
│
├── product-plugin.php           # Main plugin file, hooks, and loader
├── uninstall.php                # Clean uninstall script (removes custom tables)
├── readme.txt                   # WordPress.org readme (optional)
├── tree.txt                     # Directory structure snapshot
│
├── assets/
│   ├── css/                     # (Reserved for custom admin styles)
│   └── js/                      # (Reserved for custom admin scripts)
│
├── includes/
│   ├── class-product-admin-ui.php   # Admin menu, UI rendering, asset loading
│   ├── class-product-db.php         # Database table creation and management
│   ├── class-product-handler.php    # Form handling, file uploads, CRUD logic
│   ├── class-product-post-type.php  # Registers custom post type (hidden, for backend use)
│   └── helpers.php                  # Utility functions
│
└── templates/
    ├── admin-form.php           # Product add/edit form (admin)
    └── product-list.php         # Product list table (admin)
```

---

## ⚙️ Setup & Usage

1. **Install the Plugin**
   - Place the `product-plugin` folder inside `/wp-content/plugins/`.
   - Activate the plugin from the WordPress admin dashboard.

2. **Access Product Management**
   - A new "Products" menu will appear in the WordPress admin sidebar.
   - Use "Add New" to create products, define types, and upload images.

3. **Product Fields**
   - **Product**: Name, Description, Rating
   - **Types**: Each product can have multiple types (name, description, item JSON)
   - **Images**: Upload up to 8 images per type, with custom names and descriptions

4. **Frontend Display**
   - Products added via this plugin are available for display on the frontend (integration with your theme required).

---

## 🗃️ Database Structure

- **Products Table**: Stores product name, description, rating, timestamps
- **Product Types Table**: Stores type name, description, item JSON, linked to product
- **Product Images Table**: Stores image path, name, description, linked to product type

All tables are created automatically on plugin activation and removed on uninstall.

---

## 🧩 Extending & Customizing

- **Templates**: Modify files in the `templates/` directory to change admin UI.
- **Assets**: Add custom CSS/JS in the `assets/` directory and enqueue as needed.
- **Frontend Integration**: Use custom queries or shortcodes to display products on your site.

---

## 🧪 TODO / Enhancements

- Add bulk import/export for products
- REST API endpoints for headless or AJAX use
- Frontend shortcodes/widgets for product display
- Advanced filtering and search in admin UI
- User role permissions for product management

---

## 📄 License

This plugin is licensed under the **MIT License**. Free to use, modify, and distribute with attribution.

---

If you need a downloadable version, badges, screenshots, or installation automation, just let me know!