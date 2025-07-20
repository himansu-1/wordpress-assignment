# WordPress Product Showcase: Theme & Plugin

A comprehensive solution for showcasing and managing products in WordPress, featuring a modern Tailwind-based theme and a powerful custom product management plugin. This repository contains both the **Product Showcase Theme** and the **Product Plugin** for seamless integration and extensibility.

---

## 📦 Contents

- [Product Showcase Theme](#product-showcase-theme)
- [Product Plugin](#product-plugin)

---

# Product Showcase Theme

A modern, lightweight, and responsive WordPress theme built for showcasing products using Tailwind CSS. Ideal for businesses, portfolios, or shops that need a fast and elegant product display system.

---

## 📦 Features

- 🔧 **Custom Product Layouts** – Beautiful product cards and detail pages.
- 🛒 **Cart System (LocalStorage)** – Add products to a dynamic client-side cart with remove functionality.
- 📬 **Contact Form** – Collect inquiries and save them as custom post types in the WordPress dashboard.
- 📄 **Dynamic Pages** – Includes custom templates for front page, about, cart, contact, and individual product pages.
- 🎨 **Tailwind CSS** – Rapid UI development using Tailwind for clean, consistent design.
- 🧩 **Modular Codebase** – Organized with template parts (header, footer, slider, etc.) for better maintainability.
- 📱 **Responsive Design** – Optimized for all screen sizes and devices.

---

## 🗂️ Theme Structure

```
product-showcase-theme/
│
├── front-page.php              # Home page layout
├── functions.php               # Theme setup, enqueue scripts, custom post types
├── index.php                   # Fallback template
├── page-about.php              # Static About page
├── page-cart.php               # Cart page with localStorage integration
├── page-contact.php            # Contact form storing messages in WP dashboard
├── page-product.php            # Product listing page
├── page-product-details.php    # Single product details
├── product-card.php            # Component for rendering product cards
├── style.css                   # Theme metadata and base styles
├── tailwind.config.js          # Tailwind configuration
├── tree.txt                    # Directory structure snapshot
│
├── assets/
│   ├── css/
│   │   └── tailwind.css        # Tailwind-generated CSS
│   └── images/
│       └── image-{1,2,3}.png   # Sample product images
│
└── template-parts/
    ├── header.php              # Site header
    ├── footer.php              # Site footer with watermark
    └── slider.php              # Homepage hero slider
```

---

## ⚙️ Setup Instructions

1. **Install WordPress** and place this theme folder inside `/wp-content/themes/`.
2. **Activate the theme** from the WordPress admin dashboard.
3. **Create sample products** using your custom database tables or extend with Custom Post Types (CPTs).
4. **Configure menus and homepage** under `Settings > Reading` in the WordPress admin.

---

## ✨ Custom Post Type

- The contact form submissions are saved as a custom post type called `contact_message` and are visible in the admin menu as “Contact Messages.”

### 📬 Contact Form Fields

- Name
- Email
- Phone
- Address
- Requirement

_All fields (except Name) are stored as JSON in `post_content`._

---

## 🛒 Cart System (Client-Side)

- Cart data is stored in `localStorage`. Each product stores:
  - `product_id`
  - `product_type_id`
  - `product_image_id`
  - `product_name`
  - `added_at`
- On the Cart page, data is fetched from the server using an AJAX-like pattern to display full product info.

---

## 👨‍🎨 Designed By

Designed by **Himansu Sekhar Sahu**

---

## 🧪 TODO / Enhancements

- Add pagination and filtering to the product list
- Admin UI for products (or convert to Custom Post Type)
- Validation and spam protection for the contact form
- Persistent cart using sessions or user meta

---

## 📄 License

This theme is licensed under the **MIT License**. Free to use, modify, and distribute with attribution.

---

Let me know if you'd like this turned into a downloadable `README.md` file or need badges, screenshots, or installation automation.

---

If you want this as a downloadable file or need further enhancements (badges, screenshots, automation), just let me know!

---

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
