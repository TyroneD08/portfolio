<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tyrone Offei — Portfolio</title>

    <meta name="description" content="Portfolio van Tyrone Offei">

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


    <!-- =========================
         HEADER
    ========================== -->

    <header class="header">

        <a href="#" class="logo">
            Tyrone Offei
        </a>


        <nav>

            <a href="#werk">
                Projecten
            </a>

            <a href="#over">
                Over mij
            </a>

            <a href="#contact">
                Contact
            </a>

        </nav>


    

    </header>

    <main>

        <section class="about-grid">

            <div id="over" class="intro">

                <p class="small-title">
                    Hallo, ik ben Tyrone Offei.
                </p>

                <h1>
                  Creatieve developer met oog voor detail
                </h1>

               

                <p>
                   Ik ontwikkel front-end en back-end websites
                    met een helder idee en een eigen karakter.
                     Met kennis van HTML, CSS, JavaScript, React,
                      PHP, Laravel en GitHub combineer ik techniek
                       met creativiteit om digitale ervaringen te 
                       creëren die passen bij het doel van een project.
                </p>

                <p>
                    Voor mij draait een goed
                     ontwerp niet alleen om hoe iets
                      eruitziet. Het moet duidelijk,
                       functioneel en gebruiksvriendelijk zijn
                        én aansluiten bij het verhaal achter het project.
                </p>

                <a href="#contact" class="contact-link">
                    Neem contact op ↗
                </a>

            </div>

            <article class="project project-four">
                <div class="image-placeholder">
                    <!-- Afbeelding van project 4 komt hier -->
                </div>
                <div class="project-info">
                    <span>Foto van mij</span>
                    
                </div>
            </article>

        </section>

        <section class="middle-section" aria-labelledby="aanpak-titel">
            <div class="middle-heading">
                <p class="small-title">Mijn manier van werken</p>
                <h2 id="aanpak-titel">Van idee naar een helder digitaal resultaat.</h2>
            </div>

            <div class="middle-items">
                <div>
                    <span>01</span>
                    <h3>Concept</h3>
                    <p>We beginnen met een duidelijk idee, een doel en een verhaal dat bij het project past.</p>
                </div>
                <div>
                    <span>02</span>
                    <h3>Ontwerp</h3>
                    <p>Ik vertaal dat idee naar een rustige en herkenbare visuele stijl.</p>
                </div>
                <div>
                    <span>03</span>
                    <h3>Uitvoering</h3>
                    <p>Daarna bouw ik een functionele ervaring die prettig werkt op ieder scherm.</p>
                </div>
            </div>
        </section>

        <section id="werk" class="projects project-row">


            <article class="project project-large">

                <div class="image-placeholder">
                    <!-- Afbeelding van project 1 komt hier -->
                </div>


                <div class="project-info">

                    <span>
                        Project
                    </span>

                    <h2>
                        01
                    </h2>

                </div>

            </article>



            <article class="project">

                <div class="image-placeholder">
                    <!-- Afbeelding van project 2 komt hier -->
                </div>


                <div class="project-info">

                    <span>
                        Project
                    </span>

                    <h2>
                        02
                    </h2>

                </div>

            </article>



            <article class="project">

                <div class="image-placeholder">
                    <!-- Afbeelding van project 3 komt hier -->
                </div>


                <div class="project-info">

                    <span>
                        Project
                    </span>

                    <h2>
                        03
                    </h2>

                </div>

            </article>


            <article class="project project-five">
                <div class="image-placeholder">
                    <!-- Afbeelding van project 5 komt hier -->
                </div>
                <div class="project-info">
                    <span>Project</span>
                    <h2>04x</h2>
                </div>
            </article>

        </section>

    </main>



    <!-- =========================
         FOOTER
    ========================== -->

    <footer id="contact">


        <p>
            © 2026 Tyrone Offei
        </p>


        <a href="mailto:hello@tyroneoffei.nl">
            Tyronedoffei@gmail.com
        </a>


        <a href="#">
           Github ↗
        </a>


    </footer>



    <?php wp_footer(); ?>

</body>

</html>