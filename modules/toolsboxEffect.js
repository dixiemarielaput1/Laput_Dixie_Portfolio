
export function toolsboxEffect() {
const tools = document.querySelectorAll('.tools-border');
function animateTools() {
  gsap.to("#glasses-icon", {y: -15,  repeat: -1, yoyo: true,duration: 0.5, ease: "ease.inOut", 
  });
  
  tools.forEach((tool) => {gsap.fromTo(tool,{ x: window.innerWidth * 1.1, opacity: 0,boxShadow: '0px 0px 20px rgba(255, 255, 255, 0.6)', scale: 0.8,rotation: gsap.utils.random(-155, -280),}, {x: -50, opacity: 1,scale: 1, rotation: 0,boxShadow: '0px 0px 30px rgba(255, 255, 255, 0)',stagger: 0.3,ease: 'power3.out',duration: 6, scrollTrigger: {trigger: tool,start: 'top bottom', end: 'center center', scrub: true,markers: false,onEnter: () => {gsap.set(tool, { 
x: window.innerWidth * 1.1, opacity: 0, scale: 0.8, rotation: 0,  boxShadow: '0px 0px 20px rgba(255, 255, 255, 0.6)'  });}, onLeave: () => {gsap.set(tool, { boxShadow: '0px 0px 10px rgba(255, 255, 255, 0.4)',  rotation: 0,   
            });
          }
        }
      }
    );
  });
}

animateTools();
}