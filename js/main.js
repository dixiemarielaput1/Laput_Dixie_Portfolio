<<<<<<< Updated upstream
const menuIcon = document.querySelector('#menu-icon');
const mobileMenu = document.querySelector('#navbar-mobile');

menuIcon.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});
=======
(() => {
  const menuIcon = document.querySelector('#menu-icon');
  const mobileMenu = document.querySelector('#navbar-mobile');
  if (menuIcon && mobileMenu) {
    menuIcon.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  }

  const textDrops = document.querySelectorAll("#titleEffect1 p");
  const titleEffect1 = document.querySelector("#titleEffect1");

  const onCompleteAnimation = (textDrop) => {
    gsap.to(textDrop, {
      scale: 1,
      rotation: 0,
      opacity: 1,
      color: "#00FFDC",
      duration: 0.3,
      ease: "power1.out"
    });
  };

  const triggerAnimation = () => {
    gsap.to(titleEffect1, {
      opacity: 1,
      delay: 0.3,
      duration: 0.5
    });
    textDrops.forEach((textDrop, index) => {
      gsap.to(textDrop, {
        delay: index * 0.1 + Math.random() * 0.1,
        y: 0,
        rotation: -13,
        duration: 0.6,
        scale: 0.3,
        color: "#02D4B8",
        ease: "bounce.out",
        opacity: 0.8,
        onComplete: () => onCompleteAnimation(textDrop)
      });
    });
  };

  if (titleEffect1) {
    ScrollTrigger.create({
      trigger: titleEffect1,
      start: "top 50%",
      onEnter: triggerAnimation
    });
  }

  let currentIndex = 0;
  const galleryItems = document.querySelectorAll('.gallery-item');
  const totalItems = galleryItems.length;
  const gallery = document.querySelector('.gallery');
  const leftArrow = document.querySelector('.gallery-arrow-left');
  const rightArrow = document.querySelector('.gallery-arrow-right');

  const galleryTimeline = gsap.timeline({
    paused: true,
  });

  function moveRight() {
    currentIndex = (currentIndex + 1) % totalItems;
    const offset = -currentIndex * 100;

    galleryTimeline.clear();
    galleryTimeline.to(gallery, {
      x: `${offset}%`,
      duration: 0.5,
      ease: 'linear'
    });

    galleryTimeline.play();
  }

  function moveLeft() {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    const offset = -currentIndex * 100;

    galleryTimeline.clear();
    galleryTimeline.to(gallery, {
      x: `${offset}%`,
      duration: 0.5,
      ease: 'linear'
    });

    galleryTimeline.play();
  }

  if (rightArrow) rightArrow.addEventListener('click', moveRight);
  if (leftArrow) leftArrow.addEventListener('click', moveLeft);

  const player = document.querySelector('#video-player');
  const videoControls = document.querySelector('#video-controls');
  const playButton = document.querySelector('#play-button');
  const pauseButton = document.querySelector('#pause-button');
  const stopButton = document.querySelector('#stop-button');
  const volumeControl = document.querySelector('#change-vol');

  if (player && videoControls) {
    player.controls = false;
    videoControls.classList.remove('hidden');

    function playVideo() {
      console.log('play video');
      player.play();
    }

    function pauseVideo() {
      console.log('pause video');
      player.pause();
    }

    function stopVideo() {
      player.pause();
      player.currentTime = 0;
    }

    if (playButton) playButton.addEventListener("click", playVideo);
    if (pauseButton) pauseButton.addEventListener("click", pauseVideo);
    if (stopButton) stopButton.addEventListener("click", stopVideo);

    if (volumeControl) {
      volumeControl.addEventListener('input', () => {
        player.volume = volumeControl.value;
      });
    }
  }
})();

const tools = document.querySelectorAll('.tools-border');

function animateTools() {
  tools.forEach((tool) => {
    gsap.fromTo(
      tool,
      {
        x: window.innerWidth,
        opacity: 0,
        boxShadow: '0px 0px 20px rgba(255, 255, 255, 0.6)',
        scale: 0.8,
        rotation: gsap.utils.random(-155, -280),
      },
      {
        x: -50,
        opacity: 1,
        scale: 1,
        rotation: 0,
        boxShadow: '0px 0px 30px rgba(255, 255, 255, 0)',
        stagger: 0.3,
        ease: 'power3.out',
        duration: 6,
        scrollTrigger: {
          trigger: tool,
          start: 'top bottom',
          end: 'center center',
          scrub: true,
          markers: false,
          onEnter: () => {
            gsap.set(tool, { 
              x: window.innerWidth, 
              opacity: 0, 
              scale: 0.8, 
              rotation: 0,  
              boxShadow: '0px 0px 20px rgba(255, 255, 255, 0.6)'  
            });
          },
          onLeave: () => {
            gsap.set(tool, { 
              boxShadow: '0px 0px 10px rgba(255, 255, 255, 0.4)',  
              rotation: 0,   
            });
          }
        }
      }
    );
  });
}

animateTools();

(() => {
  let currentId = 1;
  let totalProjects = 0;

  function fetchProject(id) {
    fetch(`grab_project.php?id=${id}`)
      .then(response => response.json())
      .then(data => {
        if (data.project) {
          document.querySelector('#project-title').innerText = `${data.project.name} - Case Study`;
          document.querySelector('#project-img').src = `images/${data.project.image}`;

          totalProjects = data.totalProjects;
        } else {
          console.error('Project not found.');
        }
      })
      .catch(error => {
        console.error('Error fetching project:', error);
      });
  }

  document.querySelector('#next-arrow').addEventListener('click', () => {
    if (currentId < totalProjects) {
      currentId++;
    } else {
      currentId = 1;
    }
    fetchProject(currentId);
  });

  document.querySelector('#prev-arrow').addEventListener('click', () => {
    if (currentId > 1) {
      currentId--;
    } else {
      currentId = totalProjects;
    }
    fetchProject(currentId);
  });

  fetchProject(currentId);
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



})();
>>>>>>> Stashed changes
