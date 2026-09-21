gsap.registerPlugin(ScrollTrigger);

const timeline = gsap.timeline({
    scrollTrigger: {
        trigger: ".projects-section",
        start : "top top",
        end: "+=2000",
        pin: true,
        scrub: 1,
        markers: true

    }
});