

const projectButton = document.querySelector(".all-projects-button");

if (projectButton) {
    projectButton.addEventListener("mouseenter", () => {
        gsap.to(projectButton, {
            backgroundColor: "white",
            color: "black",
            duration: 0.3
        });
    });

    projectButton.addEventListener("mouseleave", () => {
        gsap.to(projectButton, {
            backgroundColor: "transparent",
            color: "white",
            duration: 0.3
        });
    });
}

const projects = document.querySelectorAll(".project");

projects.forEach((project) => {
    const image = project.querySelector("img");

    if (!image) return;

    project.addEventListener("mouseenter", () => {
        gsap.to(image, {
            filter: "brightness(100%)",
            duration: 0.4
        });
    });

    project.addEventListener("mouseleave", () => {
        gsap.to(image, {
            filter: "brightness(35%)",
            duration: 0.4
        });
    });
});

  gsap.registerPlugin(ScrollTrigger);

  const aboutStage = document.querySelector(".about-stage");
  const aboutStatement = document.querySelector(".about-statement");

  if (aboutStage && aboutStatement) {
      const originalText = aboutStatement.textContent.trim();
      const media = gsap.matchMedia();

      media.add("(prefers-reduced-motion: no-preference)", () => {
          aboutStage.classList.add("is-animated");

          aboutStatement.setAttribute("aria-label", originalText);
          aboutStatement.replaceChildren();

          // Elke letter krijgt een vaste plek met een beweegbare letter erin.
          Array.from(originalText).forEach((character) => {
              const slot = document.createElement("span");
              slot.setAttribute("aria-hidden", "true");

              if (character === " ") {
                  slot.className = "about-space";
                  slot.textContent = "\u00A0";
              } else {
                  slot.className = "about-char";

                  const letter = document.createElement("span");
                  letter.className = "about-letter";
                  letter.textContent = character;

                  slot.append(letter);
              }

              aboutStatement.append(slot);
          });

          const distance = () =>
              aboutStatement.scrollWidth - aboutStage.clientWidth;

          // De sectie blijft staan terwijl de zin voorbij schuift.
          const horizontalScroll = gsap.fromTo(
              aboutStatement,
              { x: 0 },
              {
                  x: () => -distance(),
                  ease: "none",

                  scrollTrigger: {
                      trigger: aboutStage,
                      start: "top top",
                      end: () => `+=${distance()}`,
                      pin: true,
                      scrub: 1,
                      invalidateOnRefresh: true
                  }
              }
          );

          // Letters bewegen afzonderlijk terwijl ze door beeld schuiven.
          aboutStatement.querySelectorAll(".about-char").forEach((slot, index) => {
              const letter = slot.querySelector(".about-letter");

              gsap.fromTo(
                  letter,
                  {
                      yPercent: index % 2 === 0 ? -110 : 110,
                      rotation: index % 3 === 0 ? -22 : 18
                  },
                  {
                      yPercent: 0,
                      rotation: 0,
                      ease: "elastic.out(1, 0.65)",

                      scrollTrigger: {
                          trigger: slot,
                          containerAnimation: horizontalScroll,
                          start: "left 100%",
                          end: "left 35%",
                          scrub: 0.5
                      }
                  }
              );
          });

          // Herstel gewone tekst als minder beweging wordt ingeschakeld.
          return () => {
              aboutStage.classList.remove("is-animated");
              aboutStatement.textContent = originalText;
              aboutStatement.removeAttribute("aria-label");
          };
      });
  }
const contactButtons = document.querySelectorAll(".contact-links a");

contactButtons.forEach((button) => {

    button.addEventListener("mouseenter", () => {
        gsap.to(button, {
            backgroundColor: "white",
            color: "black",
            duration: 0.3
        });
    });

    button.addEventListener("mouseleave", () => {
        gsap.to(button, {
            backgroundColor: "transparent",
            color: "white",
            duration: 0.3
        });
    });

});