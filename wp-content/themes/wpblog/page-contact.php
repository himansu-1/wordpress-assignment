<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<main class="max-w-xl mx-auto p-6">
    <section>
        <h1 class="text-2xl font-bold mb-4">Contact Us</h1>
        <?php if (isset($_GET['submitted']) && $_GET['submitted'] === 'true'): ?>
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">Thank you! Your message has been submitted.</div>
        <?php endif; ?>

        <form method="post" action="<?php echo esc_url(get_permalink()); ?>" class="space-y-4">
            <input type="hidden" name="contact_form_submitted" value="1">

            <label class="block">
                <span class="block text-sm font-medium">Name:</span>
                <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded p-2">
            </label>

            <label class="block">
                <span class="block text-sm font-medium">Email:</span>
                <input type="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded p-2">
            </label>

            <label class="block">
                <span class="block text-sm font-medium">Phone:</span>
                <input type="text" name="phone" class="mt-1 block w-full border border-gray-300 rounded p-2">
            </label>

            <label class="block">
                <span class="block text-sm font-medium">Address:</span>
                <textarea name="address" rows="2" class="mt-1 block w-full border border-gray-300 rounded p-2"></textarea>
            </label>

            <label class="block">
                <span class="block text-sm font-medium">Messages:</span>
                <textarea name="requirement" rows="4" class="mt-1 block w-full border border-gray-300 rounded p-2"></textarea>
            </label>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Send</button>
        </form>
    </section>

    <section class="mt-12 border-t pt-10">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">👨‍💻 About the Developer</h2>
    <div class="bg-white rounded-lg shadow p-6 text-gray-700 leading-relaxed">
        <h3 class="text-xl font-bold text-gray-800 mb-2">Himansu Sekhar Sahu</h3>
        <p>
            I'm a Software Engineer with 2+ years of experience in building scalable full-stack applications using technologies like React, Next.js, Laravel, and Node.js. I focus on writing clean, production-ready code with a deep understanding of backend automation, WordPress plugin development, and RESTful API design.
        </p>
        <p class="mt-4">
            Currently exploring mobile app development with AI integration to create seamless cross-platform experiences.
        </p>
    </div>
</section>

<section class="mt-10">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">🛠️ Technologies I Work With</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 text-center text-sm text-gray-600">
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-10 h-10 mb-2">
            React.js
        </div>
        <div class="flex flex-col items-center">
            <img src="https://www.drupal.org/files/project-images/nextjs-icon-dark-background.png" alt="Next.js" class="w-10 h-10 mb-2 invert">
            Next.js
        </div>
        <div class="flex flex-col items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png" alt="Laravel" class="w-10 h-10 mb-2">
            Laravel
        </div>
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="w-10 h-10 mb-2">
            Node.js
        </div>
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python" class="w-10 h-10 mb-2">
            Python
        </div>
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="w-10 h-10 mb-2">
            PHP 8
        </div>
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-10 h-10 mb-2">
            JavaScript
        </div>
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript" class="w-10 h-10 mb-2">
            TypeScript
        </div>
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-10 h-10 mb-2">
            MySQL
        </div>
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB" class="w-10 h-10 mb-2">
            MongoDB
        </div>
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" alt="WordPress" class="w-10 h-10 mb-2">
            WordPress
        </div>
        <div class="flex flex-col items-center">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" class="w-10 h-10 mb-2">
            Docker
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
