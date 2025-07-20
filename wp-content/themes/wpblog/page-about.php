<?php
/*
Template Name: About Page
*/
get_header();
?>

<main class="max-w-5xl mx-auto px-4 py-12">
    <section class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">About This Project</h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            This WordPress-based solution combines a modern theme and a powerful plugin to deliver a seamless product showcase experience. Built with performance and extensibility in mind, it serves as a robust foundation for businesses, portfolios, or personal shops wanting complete control over product display, management, and UI styling.
        </p>
    </section>

    <section class="mb-16">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">🧩 Project Overview</h2>
        <ul class="list-disc pl-6 text-gray-700 space-y-2">
            <li>Tailwind CSS–powered WordPress theme with responsive design and modular layout</li>
            <li>Custom-built WordPress plugin for full product lifecycle management in the admin panel</li>
            <li>Client-side cart system using LocalStorage for a fast, serverless checkout experience</li>
            <li>Contact form that saves submissions to a custom post type</li>
            <li>Product image gallery per type with flexible data modeling</li>
        </ul>
    </section>

    <section class="mb-16">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">📂 Theme Highlights</h2>
        <ul class="list-disc pl-6 text-gray-700 space-y-2">
            <li>Custom front page, cart, contact, product listing, and detail templates</li>
            <li>Dynamic product rendering with reusable card components</li>
            <li>Built-in slider, responsive grid layout, and elegant UI elements</li>
            <li>Fully mobile-friendly with semantic HTML and accessibility considerations</li>
        </ul>
    </section>

    <section class="mb-16">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">🔌 Plugin Features</h2>
        <ul class="list-disc pl-6 text-gray-700 space-y-2">
            <li>Admin UI for managing products, their types, and image galleries</li>
            <li>Custom database tables for performance and structured data</li>
            <li>Secure image uploads and dynamic image associations per product type</li>
            <li>Modular, extensible architecture for adding APIs, filters, or roles</li>
        </ul>
    </section>

    <section class="mb-16">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">🎯 Project Goals</h2>
        <ul class="list-disc pl-6 text-gray-700 space-y-2">
            <li>Create a fast, modern WordPress product listing experience using Tailwind CSS</li>
            <li>Allow admins to manage complex product data using a user-friendly plugin UI</li>
            <li>Demonstrate modular code practices with scalable architecture</li>
            <li>Offer open-source licensing (MIT) to encourage reuse and learning</li>
        </ul>
    </section>

    <section class="text-center mt-20">
        <p class="text-gray-600">
            Want to collaborate or provide feedback? Feel free to connect via the contact page.
        </p>
        <a href="<?php echo home_url('/contact'); ?>" class="mt-4 inline-block text-blue-600 hover:underline">Go to Contact Page →</a>
    </section>
</main>

<?php
get_footer();
?>