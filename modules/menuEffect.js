export function menuEffect(){

const menuEffect = gsap.timeline({ paused: true });
menuEffect.from("#menu li", {y: 20,ease: "circ.out",duration: 0.8,stagger: 0.1,opacity: 0});
menuEffect.play();
ScrollTrigger.create({trigger:"#menu",start:"top top",onEnter: (e) => menuEffect.restart(),onLeaveBack:(e) => menuEffect.restart(),markers: false,once: false});

const heroEffect = gsap.timeline({ paused: true });
  heroEffect.from(".hero-text-1, .greet",{autoAlpha: 0,duration: 0.5,ease: "roughEase",y: -150,stagger: 0.1});
  heroEffect.play();
  ScrollTrigger.create({start:"top top",trigger: ".greet",onEnter: (e) => heroEffect.restart(),onLeaveBack: (e) => heroEffect.restart(),once: false,markers: false,});

  const sideEffect = gsap.timeline({ paused: true });
  sideEffect.from(".smallest",{autoAlpha: 0,duration: 0.8,ease: "roughEase",x: 70, y:-80,stagger: 0.4});
  sideEffect.play();
  ScrollTrigger.create({start:"top top",trigger: ".smallest",onEnter: (e) => sideEffect.restart(),onLeaveBack: (e) => sideEffect.restart(),once: false,markers: false,});
  gsap.to(".hero", {duration: 10, backgroundPosition: "400% 400%", repeat: -1, yoyo: true, ease: "power1.inOut", 
  });

}