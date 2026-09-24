

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

  const aboutSection = document.querySelector(".about-section");
  const statement = document.querySelector(".about-statement");

  if (aboutSection && statement) {
      const text = statement.textContent.trim();

      // Houd de volledige zin leesbaar voor screenreaders.
      statement.setAttribute("aria-label", text);
      statement.replaceChildren();

      // Maak losse letters, maar houd woorden bij elkaar.
      text.split(/\s+/).forEach((word, index) => {
          if (index > 0) {
              statement.append(document.createTextNode(" "));
          }

          const wordSpan = document.createElement("span");
          wordSpan.className = "about-word";
          wordSpan.setAttribute("aria-hidden", "true");

          Array.from(word).forEach((letter) => {
              const letterSpan = document.createElement("span");
              letterSpan.className = "about-letter";
              letterSpan.textContent = letter;
              wordSpan.append(letterSpan);
          });

          statement.append(wordSpan);
      });

      const media = gsap.matchMedia();

      media.add("(prefers-reduced-motion: no-preference)", () => {
          gsap.from(statement.querySelectorAll(".about-letter"), {
              x: () => aboutSection.clientWidth,
              opacity: 0,
              duration: 1,
              stagger: 0.06,
              ease: "none",

              scrollTrigger: {
                  trigger: aboutSection,
                  start: "top 85%",
                  end: "top 10%",
                  scrub: 1,
                  invalidateOnRefresh: true
              }
          });
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