<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<main>
    <h1>Contact Us</h1>
    <form>
        <!-- Add your contact form fields here -->
        <label>Name: <input type="text" name="name"></label><br>
        <label>Email: <input type="email" name="email"></label><br>
        <label>Message: <textarea name="message"></textarea></label><br>
        <button type="submit">Send</button>
    </form>
</main>

<?php get_footer(); ?>