export function serviceEffect() {
const serviceOfferEffect = gsap.timeline({ paused: true });
serviceOfferEffect.from(".service-offer", {opacity: 0,  y: 100,  duration: 1, ease: "circ.out", });
ScrollTrigger.create({start: "top bottom",   end: "bottom top",    trigger: ".service-offer",onEnter: () => serviceOfferEffect.play(), markers: false,         once: true            
});
  const rotateEffect = gsap.timeline({ paused: true });
  rotateEffect.from("#service-icon", {y: -200,  opacity: 0,  scale: 0.1,  ease: "power3.out",   duration: 1.2,    onComplete: () => rotateBox()  });
  function rotateBox() {gsap.to("#service-icon", {rotation: 360, duration: 1.5, ease: "none",  repeat: -1, duration: 5  });}
  ScrollTrigger.create({trigger: "#service-icon",   start: "top center",   end: "bottom center",  onEnter: () => rotateEffect.restart(),  onLeaveBack: () => rotateEffect.restart(),  markers: false,            once: false                     
  });

  gsap.from(".list-help", {x: 40, duration: 1.5, ease: "power2.out", scrollTrigger: {trigger: ".list-help",  start: "center center", scrub: 0.5, }
});
  
  const rotatebladeEffect = gsap.timeline({ paused: true });

  rotatebladeEffect.from(".tool", {y: -100, opacity: 0,scale: 0.1,   ease: "power3.out",  duration: 1.2, onComplete: () => rotateBox()  
  });
  
  
  function rotateBox() { gsap.to(".tool", {rotation: 360,  duration: 0.5,  ease: "none", repeat: -1,duration: 5                    
    });
  }

  ScrollTrigger.create({trigger: ".tool",start: "top center", end: "bottom center", onEnter: () => rotatebladeEffect.restart(), onLeaveBack: () => rotatebladeEffect.restart(), markers: false, once: false                     
  });
gsap.from("#cubeIcon", {scale: 0.1, scrollTrigger: {trigger: "#cubeIcon",  start: "top 80%",  end: "top 20%",scrub: 1, }, ease: "power3.out"});

}