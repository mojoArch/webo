

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

  if (aboutSection) {
      const media = gsap.matchMedia();

      media.add("(prefers-reduced-motion: no-preference)", () => {
          const lines = aboutSection.querySelectorAll(".about-line");

          gsap.from(lines, {
              x: () => -aboutSection.clientWidth,
              opacity: 0,
              stagger: 0.15,
              ease: "none",

              scrollTrigger: {
                  trigger: aboutSection,
                  start: "top 85%",
                  end: "top 15%",
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