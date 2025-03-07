
export function heroEffect() {
    const leftswiftEffect1 = gsap.timeline({ paused: true });
    leftswiftEffect1.from(".name-hero, .services-title", {opacity: 0,x: 300,stagger: {amount: 1.5,ease: "power4.out",from: "start"},duration: 0.7});
    leftswiftEffect1.play();
    ScrollTrigger.create({start: "top top",trigger: ".name-hero, .services-title",onEnter: (e) => leftswiftEffect1.restart(),onLeaveBack: (e) => leftswiftEffect1.restart(),markers: false,once: false});
    const leftswiftEffect2 = gsap.timeline({ paused: true });
    leftswiftEffect2 .from(".web-dev-intro", {opacity: 0, x: 400,stagger: { amount: 0.7, ease: "expo.inOut", from: "start" },duration: 0.9 }) .from("#gallery-slide", {opacity: 0, x:-120, y: -100,stagger: { amount: 0.7, ease: "expo.inOut", from: "start" },duration: 0.9}, "-=0.7"); 
    ScrollTrigger.create({ start: "top bottom",  end: "bottom top",    trigger: ".web-dev-intro", onEnter: () => leftswiftEffect2.restart(),  onLeaveBack: () => leftswiftEffect2.restart(),   markers: false,     once: false          
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

createRobotBlinkEffect("#craft");
createRobotBlinkEffect("#phone");
ScrollTrigger.create({trigger: ".robot-text",  start: "top 80%", onEnter: () => {createRobotBlinkEffect("#craft");createRobotBlinkEffect("#phone");},once: true                     
});

gsap.to("#rotating-image", { rotation: 360,  scale: -1,   repeat: -1,  duration: 5,  ease: "none", transformOrigin: "center", yoyo: true                
});
  const section = document.querySelector('.hero');
  const images = document.querySelectorAll('.hero img');
  const text = document.querySelectorAll('.hero p, .hero h1, .hero h2');
  
  function parallaxEffect(e) {
    const mouseX = e.clientX / window.innerWidth - 0.5;
    const mouseY = e.clientY / window.innerHeight - 0.5;


    gsap.to(section, {
        backgroundPosition: `${mouseX * 40}px ${mouseY * 0}px`,  
        duration: 1,
    });

    gsap.to(images, {
        x: mouseX * 20,  
        y: mouseY * 15,  
        duration: 1,
        ease: 'power2.out',
    });


    gsap.to(text, {
        x: mouseX * 15,  
        y: mouseY * 10,  
        duration: 1,
        ease: 'power2.out',
    });
}

  window.addEventListener('mousemove', parallaxEffect);
  const rotatedBorder = document.querySelector('#rotated-border');
  gsap.fromTo(rotatedBorder,{scale: 1,  x: 0,  y: 0, rotation: 0, },{scale: 1.1,  x: "+=2",   y: "+=10", rotation: () => Math.floor(Math.random() * -80),repeat: -1,   yoyo: true,  duration: 1.5, ease: 'sine.inOut', }
  );
}