

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

const timeline = gsap.timeline({
    scrollTrigger: {
        trigger: ".projects-section",
        start: "top top",
        end: "+=2000",
        pin: true,
        scrub: 1,
    }
});
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