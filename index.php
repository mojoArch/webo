<?php
require_once __DIR__ . '/language.php';
require __DIR__ . '/header.php';
?>

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
          <h2 class="about-label"><?= t('about_title') ?></h2>

<p class="about-statement"><?= t('about_statement') ?></p>

<p class="about-description">
    <?= t('about_description') ?>
</p>
          <div>
<nav>
    <a class="cv" href="./cv.php">
        <?= t('about_cv_text') ?>
    </a>
</nav>
          </div>
      </div>
  </section>


<section id="projects" class="projects-section">
    <h2 class="projects-title"><?= t('projects_title') ?></h2>

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
                    <strong class="project-name">JAMIE VIS WEBSITE</strong>
                    <span class="project-type">PHOTOGRAPHY WEBSITE</span>
                    <span class="project-toggle">
                        <?= t('project_details') ?>
                    </span>
                </span>
            </summary>

            <div class="project-description">
                <p><?= t('photography_description') ?></p>
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
                    <span class="project-toggle">
                        <?= t('project_details') ?>
                    </span>
                </span>
            </summary>

            <div class="project-description">
                <p><?= t('lawyer_description') ?></p>
            </div>
        </details>
    </div>

    <a href="/project.php" class="all-projects-button">
        <?= t('all_projects') ?>
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
