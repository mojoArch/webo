
<?php require 'header.php' ;?>


<main class="home-page">
    <section id="home" class="hero">
        <div class="hero-name">
            NAZLI 
        </div>

        <div class="hero-title">
        SOFTWARE DEVELOPER
            
        </div>

        <div class="hero-description">
     Custom Websites | Databases | Backend | Hardware
        </div>
    </section>

  <section id="about" class="about-section">
      <div class="about-stage">
          <h2 class="about-label">ABOUT ME</h2>

          <p class="about-statement">Creative thinking | Practical solutions</p>
          <p class="about-description">
              I'm a software developer focused on creative applications,
              backend development, databases and hardware.
          </p>
          <div>
            <nav>
                <a class="cv" href="./cv.php">You can take a look at my CV to learn more about my experience</a>
            </nav>
          </div>
      </div>
  </section>


<section id="projects" class="projects-section">
    <h2 class="projects-title">PROJECTS</h2>

    <div class="projects-container">
        <details class="project">
            <summary>
                <span class="project-image">
                    <img
                        src="./images/fotograaf.jpg"
                        alt="Photography website preview"
                    >
                </span>

                <span class="project-info">
                    <strong class="project-name">PHOTOGRAPHY WEBSITE</strong>
                    <span class="project-type">LARAVEL — WEBSITE</span>
                    <span class="project-toggle">Project details</span>
                </span>
            </summary>

            <div class="project-description">
                <p>
                    A photography portfolio built with Laravel,
                    with a clean layout that puts the photos first.
                </p>
            </div>
        </details>

        <details class="project">
            <summary>
                <span class="project-image">
                    <img
                        src="./images/justitie.jpg"
                        alt="Custom lawyer website preview"
                    >
                </span>

                <span class="project-info">
                    <strong class="project-name">CUSTOM LAWYER WEBSITE</strong>
                    <span class="project-type">PHP — WEBSITE</span>
                    <span class="project-toggle">Project details</span>
                </span>
            </summary>

            <div class="project-description">
                <p>
                    A custom website built with PHP for a lawyer,
                    focused on clear information and a professional look.
                </p>
            </div>
        </details>
    </div>

    <a href="/project.php" class="all-projects-button">
        VIEW ALL PROJECTS
    </a>
</section>


    </div>
    </section>
    <section id="contact" class="contact-section">
        <div class="contact-box">
            <h1>CONTACT</h1>
            <p>INTERESSED? GET IN TOUCH</p>
            <div class="contact-links">
                <a href="mailto:n.eroglux014@gmail.com">EMAIL
                </a>
                <a href="https://linkedin.com/in/nazli-eroglu-191baa370" target="_blank">LINKEDIN</a>
            </div>
        </div>
    </section>

</main>

<?php require 'footer.php' ; ?>
