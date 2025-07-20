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