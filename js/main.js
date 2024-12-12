const menuIcon = document.querySelector('#menu-icon');
const mobileMenu = document.querySelector('#navbar-mobile');
const textDrops = document.querySelectorAll("#titleEffect1 p"),
titleEffect1 = document.querySelector("#titleEffect1"),
navLinks = document.querySelectorAll("#main-header nav ul li a");
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

menuIcon.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

<<<<<<< Updated upstream
=======
function rotateAsterisk() {gsap.to(".projects-main-title img", {rotation: 360,         duration: 1.5,                ease: "none",                 repeat: -1,                 duration: 5                    
  });
}


ScrollTrigger.create({trigger: ".projects-main-title",   start: "top center",              end: "bottom center",            onEnter: () => titleEffect.restart(),  onLeaveBack: () => titleEffect.restart(), markers: false,             once: false                     
});

  })();


  
(() => {
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
 
  })();

  (() => {
    const leftswiftEffect1 = gsap.timeline({ paused: true });
    leftswiftEffect1.from(".name-hero, .services-title", {opacity: 0,x: 300,stagger: {amount: 1.5,ease: "power4.out",from: "start"},duration: 0.7});
    leftswiftEffect1.play();
    ScrollTrigger.create({start: "top top",trigger: ".name-hero, .services-title",onEnter: (e) => leftswiftEffect1.restart(),onLeaveBack: (e) => leftswiftEffect1.restart(),markers: false,once: false});
    const leftswiftEffect2 = gsap.timeline({ paused: true });
    leftswiftEffect2 .from(".web-dev-intro", {opacity: 0, x: 400,stagger: { amount: 0.7, ease: "expo.inOut", from: "start" },duration: 0.9 }) .from("#project-title", {opacity: 0, x:-120, y: -100,stagger: { amount: 0.7, ease: "expo.inOut", from: "start" },duration: 0.9}, "-=0.7"); 
    ScrollTrigger.create({ start: "top bottom",  end: "bottom top",    trigger: ".web-dev-intro, #project-title", onEnter: () => leftswiftEffect2.restart(),  onLeaveBack: () => leftswiftEffect2.restart(),   markers: false,     once: false          
    });

    gsap.registerPlugin(Physics2DPlugin);  

    const lineEffect = gsap.timeline({ paused: true });
    
    lineEffect.from("hr", {opacity: 0,       x: 300,     stagger: { amount: 1.5,    ease: "power4.out",     from: "start"      },duration: 0.7,physics2D: {velocityX: 500,               velocityY: 500,                gravity: 300,                  angle: 45,                    friction: 0.1,                 bounce: 0.9                    
      }
    });
    
    lineEffect.play();ScrollTrigger.create({start: "top top", trigger: ".line",  onEnter: () => { console.log("Animation started");lineEffect.restart();   }, onLeaveBack: () => {console.log("Animation restarted");lineEffect.restart();  },  markers: false, once: false                    });

    gsap.registerPlugin(ScrollTrigger);

function createRobotBlinkEffect(selector) {const chars = document.querySelector(selector).textContent.split('');document.querySelector(selector).innerHTML = chars.map(char => `<span>${char}</span>`).join(''); gsap.fromTo(`${selector} span`, {opacity: 0,  y: 5,  },  {opacity: 1,  y: 0, stagger: {amount: 0.8,  from: "start" }, duration: 1.5,  ease: "power4.out",    repeat: -1, yoyo: true                        }
  );
}

createRobotBlinkEffect("#email");
createRobotBlinkEffect("#phone");
ScrollTrigger.create({trigger: ".robot-text",  start: "top 80%", onEnter: () => {createRobotBlinkEffect("#email");createRobotBlinkEffect("#phone");},once: true                     
});

gsap.to("#rotating-image", { rotation: 360,  scale: -1,   repeat: -1,  duration: 5,  ease: "none", transformOrigin: "center", yoyo: true                
});
  const section = document.querySelector('.hero');
  const images = document.querySelectorAll('.hero img');
  const text = document.querySelectorAll('.hero p, .hero h1, .hero h2');
  
  function parallaxEffect(e) { const mouseX = e.clientX / window.innerWidth - 0.5;  const mouseY = e.clientY / window.innerHeight - 0.5;gsap.to(section, { backgroundPosition: `${mouseX * 100}px ${mouseY * 100}px`,duration: 1,
    });gsap.to(images, {x: mouseX * 50, y: mouseY * 30, duration: 1,ease: 'power2.out',
    }); gsap.to(text, {x: mouseX * 30,  y: mouseY * 20,  duration: 1,ease: 'power2.out',});
  }
  window.addEventListener('mousemove', parallaxEffect);
  const rotatedBorder = document.querySelector('#rotated-border');
  gsap.fromTo(rotatedBorder,{scale: 1,  x: 0,  y: 0, rotation: 0, },{scale: 1.1,  x: "+=2",   y: "+=10", rotation: () => Math.floor(Math.random() * -80),repeat: -1,   yoyo: true,  duration: 1.5, ease: 'sine.inOut', }
  );
  })();


  function animateProjectImage() { const projectImg = document.querySelector("#project-img");if (projectImg) {gsap.fromTo(projectImg,   { scale: 1.05 },  {  scale: 1,  duration: 0.5,  ease: "power1.out",  yoyo: true,     repeat: 1       
        }
      );
    }
  }
  
  
  document.querySelector("#prev-arrow").addEventListener("click", function() {
    animateProjectImage();  
  });
  
  document.querySelector("#next-arrow").addEventListener("click", function() {
    animateProjectImage();  
  });

(() => {


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


  })();



>>>>>>> Stashed changes

// header title effect below
const onCompleteAnimation = textDrop => gsap.to(textDrop, { scale: 1, rotation: 0, opacity: 1, color: "#00FFDC", duration: 0.3, ease: "power1.out" });   
const triggerAnimation = () => {gsap.to(titleEffect1, { opacity: 1, delay: 0.3 , duration: 0.5});textDrops.forEach((textDrop, index) => gsap.to(textDrop, {delay: index * 0.1 + Math.random() * 0.1,y: 0, rotation: -13, duration: 0.6, scale: 0.3,color: "#02D4B8", ease: "bounce.out", opacity: 0.8,onComplete: () => onCompleteAnimation(textDrop)}));};
ScrollTrigger.create({ trigger: titleEffect1, start: "top 50%", onEnter: triggerAnimation });

