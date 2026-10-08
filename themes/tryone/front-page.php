<?php get_header(); ?>

<main class="home-main">
    <section class="about-grid">
        <div id="over" class="intro" data-reveal>
            <p class="small-title">Hallo, ik ben <span class="intro-highlight">Tyrone Offei</span></p>
            <h1>Creatieve developer met oog voor detail</h1>
            <p>Ik ontwikkel front-end en back-end websites met een helder idee en een eigen karakter. Met kennis van HTML, CSS, JavaScript, React, PHP, Laravel en GitHub combineer ik techniek met creativiteit om digitale ervaringen te creëren die passen bij het doel van een project.</p>
        </div>

        <article class="project project-four" data-reveal data-reveal-delay="120">
            <div class="image-placeholder">
                <img src="<?php echo esc_url(get_theme_file_uri('img/tyrone.jpg')); ?>" alt="Tyrone Offei">
            </div>
            <div class="profile-links">
                <a class="cv-link" href="<?php echo esc_url(get_theme_file_uri('img/BossCV.pdf')); ?>" target="_blank" rel="noopener noreferrer">mijn CV</a>
                <a class="cv-link" href="https://www.linkedin.com/in/tyrone-offei-a99621439/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
            </div>
        </article>
    </section>

    <section class="projects-page home-projects" aria-labelledby="home-projects-title">
        <p class="small-title">projecten</p>
        <h2 id="home-projects-title">Mijn Beste Werk</h2>
        <?php get_template_part('template-parts/project-cards'); ?>
    </section>

</main>

<?php get_footer(); ?>
