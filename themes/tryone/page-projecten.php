<?php get_header(); ?>

<main class="page-content">
    <section class="projects-page" aria-labelledby="projects-title">
        <p class="small-title">Mijn werk</p>
        <h1 id="projects-title">Projecten</h1>

        <div class="projects project-row">
            <article class="project project-large">
                <div class="flip-card flip-card--korio" tabindex="0" role="group" aria-label="Webshop Korio projectkaart">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/gogogo.png')); ?>" alt="Webshop Korio">
                        </div>
                        <div class="flip-card-back">
                            <h2>Webshop Korio</h2>
                    
                            <a href="https://38696.hosts2.ma-cloud.nl/Korio/" target="_blank" rel="noopener noreferrer">Bekijk project ↗</a>
                            <a href="https://github.com/TyroneD08/Korio" target="_blank" rel="noopener noreferrer">GitHub↗</a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <span>Webshop Korio</span>

                </div>
            </article>

            <article class="project">
                <div class="flip-card flip-card--coming-yellow" tabindex="0" role="group" aria-label="Roomus projectkaart">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/Roomuss.png')); ?>" alt="Project Roomus">
                        </div>
                        <div class="flip-card-back">
                            <h2> Discover Roomus</h2>
                                <h2><a href="https://38696.hosts2.ma-cloud.nl/RoomusRemodel/" target="_blank" rel="noopener noreferrer">Bekijk project ↗</a></h2>
                                <a href="https://github.com/TyroneD08/RoomusRemodel" target="_blank" rel="noopener noreferrer">GitHub↗</a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <span>Project Roomus</span>
                </div>
            </article>

            <article class="project">
                <div class="flip-card flip-card--roomus" tabindex="0" role="group" aria-label="Project 3, komt binnenkort">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/generated.jpg')); ?>" alt="KairoAnime">
                        </div>
                        <div class="flip-card-back">
                            <h2>KairoAnime</h2>
                           <h2><a href="https://38696.hosts2.ma-cloud.nl/KiaroAnime/" target="_blank" rel="noopener noreferrer">Bekijk project ↗</a></h2>
                             <a href="https://github.com/TyroneD08/KairoAnime" target="_blank" rel="noopener noreferrer">GitHub↗</a>
                        </div>
                    </div>
                </div>
                <div class="project-info">
                    <span>KairoAnime</span>
                   
                </div>
            </article>

        </div>
    </section>
</main>

<?php get_footer(); ?>
