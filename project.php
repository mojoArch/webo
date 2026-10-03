<?php
require_once __DIR__ . '/language.php';
require __DIR__ . '/header.php';
?>
  <main class="projects-page">
      <section id="projects" class="projects-section">
          <h1 class="projects-title">PROJECTS</h1>

          <div class="projects-container">

                        <details class="project">
                  <summary>
                      <span class="project-image">
                          <img
                              src="./images/fotograaf.jpg"
                              alt="Preview van de fotografiewebsite"
                          >
                      </span>

                      <span class="project-name">J.VIS PHOTOGRAPHY</span>
                      <span class="project-category">bekijk</span>
                      <span class="project-toggle"></span>
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
                              alt="Preview van de advocatenwebsite"
                          >
                      </span>

                      <span class="project-name">NevaNexis</span>
                      <span class="project-category">PHP - WEBSITE</span>
                      <span class="project-toggle"></span>
                  </summary>

<div class="project-description">
    <p><?= t('lawyer_description') ?></p>
</div>
              </details>

              <details class="project">
                  <summary>
                      <span class="project-image">
                          <img
                              src="./images/image.jpg"
                              alt="Cyberdeck-project"
                          >
                      </span>

                      <span class="project-name">CYBERDECK</span>
                      <span class="project-category">HARDWARE</span>
                      <span class="project-toggle"></span>
                  </summary>

                  <div class="project-description">
                      <p>
                          Een hardwareproject waarin ik mijn interesse
                          in elektronica en software samenbreng.
                      </p>
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

        <span class="project-name">SIGNALSHARK</span>
        <span class="project-category">ESP32 — WIRELESS SCANNER</span>
        <span class="project-details-label">
            <?= t('project_details') ?>
        </span>
    </summary>

    <div class="project-description">
        <p><?= t('signalshark_description') ?></p>
    </div>
</details>



          </div>
      </section>
  </main>

  <?php require 'footer.php'; ?>