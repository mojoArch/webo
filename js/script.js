
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

const timeline = gsap.timeline({
    scrollTrigger: {
        trigger: ".projects-section",
        start : "top top",
        end: "+=2000",
        pin: true,
        scrub: 1,
        

    }
});

const projectButton = document.querySelector(".all-projects-button");

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

const projects = document.querySelectorAll(".project");

projects.forEach((project) => {

    const image = project.querySelector("img");

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