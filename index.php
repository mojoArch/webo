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
                    <strong class="project-name">J.VIS PHOTOGRAPHY</strong>
                    <span class="project-type">LARAVEL — WEBSITE</span>
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
                src="./images/signalshark.jpg"
                alt="SignalShark ESP32 wireless scanner"
            >
        </span>

        <span class="project-name">SIGNALSHARK — AIRSPACE EXPLORER</span>
        <span class="project-category">ESP32-S3 | C++ | Arduino IDE | Wi-Fi | nRF24L01</span>
        <span class="project-details-label">
            <?= t('project_details') ?>
        </span>
    </summary>

    <div class="project-description">
        <p><?= t('signalshark_description') ?></p>
    </div>
</details>
    </div>

    <a href="/project.php" class="all-projects-button">
        <?= t('all_projects') ?>
    </a>
</section>


    </div>
<section id="contact" class="contact-section contact-redesign">
    <div class="contact-panel">
        <div class="contact-intro">
            <p class="contact-eyebrow"><?= t('contact') ?></p>

            <h2><?= t('contact_heading') ?></h2>

            <p class="contact-description">
                <?= t('contact_intro') ?>
            </p>
        </div>

        <div class="contact-actions">
            <a
                class="contact-card"
                href="mailto:n.eroglux014@gmail.com"
            >
                <span class="contact-card-content">
                    <span class="contact-card-label">EMAIL</span>
                    <strong>n.eroglux014@gmail.com</strong>
                </span>

                <span class="contact-arrow" aria-hidden="true">↗</span>
            </a>

            <a
                class="contact-card"
                href="https://linkedin.com/in/nazli-eroglu-191baa370"
                target="_blank"
                rel="noopener noreferrer"
            >
                <span class="contact-card-content">
                    <span class="contact-card-label">LINKEDIN</span>
                    <strong><?= t('contact_profile') ?></strong>
                </span>

                <span class="contact-arrow" aria-hidden="true">↗</span>
            </a>
        </div>
    </div>
</section>

</main>

<?php require 'footer.php' ; ?>
