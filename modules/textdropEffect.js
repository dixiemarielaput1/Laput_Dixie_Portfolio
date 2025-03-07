export function textdropEffect(){



    
    const textDrops = document.querySelectorAll("#titleEffect1 p");
    const titleEffect1 = document.querySelector("#titleEffect1");
  
    const onCompleteAnimation = (textDrop) => { gsap.to(textDrop, { scale: 1, rotation: 0,  opacity: 1,color: "#00FFDC", duration: 0.3, ease: "power1.out"
      });
    };
  
    const triggerAnimation = () => {gsap.to(titleEffect1, { opacity: 1,delay: 0.3,duration: 0.5
      });textDrops.forEach((textDrop, index) => { gsap.to(textDrop, {delay: index * 0.1 + Math.random() * 0.1,y: 0,rotation: -13,duration: 0.6,scale: 0.3,color: "#02D4B8",ease: "bounce.out",opacity: 0.8,onComplete: () => onCompleteAnimation(textDrop)});});};
    if (titleEffect1) {ScrollTrigger.create({ trigger: titleEffect1, start: "top 50%", onEnter: triggerAnimation});
    }
    
  
  
}