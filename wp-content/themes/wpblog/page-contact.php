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
</main>

<?php get_footer(); ?>
