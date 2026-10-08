<?php get_header(); ?>

<main class="page-content">
    <section class="contact-page" aria-labelledby="contact-title">
        <p class="small-title">Neem contact op</p>
        <h1 id="contact-title">Laten we kennismaken.</h1>
        <p>Heb je een vraag? Stuur me gerust een bericht.</p>
        <p class="contact-form-note">Je naam, e-mailadres, onderwerp en bericht gebruik ik alleen om op je bericht te reageren.</p>

        <?php
        $contact_status = isset($_GET['contact_status'])
            ? sanitize_key(wp_unslash($_GET['contact_status']))
            : '';
        ?>
        <?php if ('sent' === $contact_status) : ?>
            <p class="contact-notice contact-notice--success" role="status">Bedankt voor je bericht. Het is verzonden.</p>
        <?php elseif ('error' === $contact_status) : ?>
            <p class="contact-notice contact-notice--error" role="alert">Er ging iets mis bij het verzenden. Probeer het later nog eens.</p>
        <?php endif; ?>

        <p class="contact-form-note">Alle velden zijn verplicht.</p>

        <form class="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
            <input type="hidden" name="action" value="tryone_send_contact">
            <?php wp_nonce_field('tryone_send_contact', 'tryone_contact_nonce'); ?>

            <div class="contact-form-field contact-form-field--half">
                <label for="contact-name">Naam</label>
                <input id="contact-name" name="contact_name" type="text" autocomplete="name" maxlength="120" required>
            </div>

            <div class="contact-form-field contact-form-field--half">
                <label for="contact-email">E-mailadres</label>
                <input id="contact-email" name="contact_email" type="email" autocomplete="email" maxlength="254" required>
            </div>

            <div class="contact-form-field contact-form-field--full">
                <label for="contact-subject">Onderwerp</label>
                <input id="contact-subject" name="contact_subject" type="text" maxlength="150" required>
            </div>

            <div class="contact-form-field contact-form-field--full">
                <label for="contact-message">Bericht</label>
                <textarea id="contact-message" name="contact_message" rows="6" maxlength="5000" required></textarea>
            </div>

            <button class="contact-submit" type="submit">Verstuur bericht</button>
        </form>

        <p class="contact-email-option">Liever mailen? <a href="mailto:tyrone.developer@outlook.com">tyrone.developer@outlook.com</a></p>
    </section>
</main>

<?php get_footer(); ?>
