(() => {
  const imageSections = document.querySelectorAll('.image-section');
  const rightArrow = document.querySelector('.arrow-right');
  const leftArrow = document.querySelector('.arrow-left');

  let currentImageIndex = 0;

  function hideAllImages() {
    imageSections.forEach(section => {
      section.classList.add('hidden');
    });
  }

  function showCurrentImage() {
    hideAllImages();
    imageSections[currentImageIndex].classList.remove('hidden');
  }

  function changeImage(direction) {
    if (direction === 'next') {
      currentImageIndex = (currentImageIndex + 1) % imageSections.length;
    } else if (direction === 'prev') {
      currentImageIndex = (currentImageIndex - 1 + imageSections.length) % imageSections.length;
    }
    showCurrentImage();
  }

  showCurrentImage();

  if (rightArrow) {
    rightArrow.addEventListener('click', function() {
      changeImage('next');
    });
  }

  if (leftArrow) {
    leftArrow.addEventListener('click', function() {
      changeImage('prev');
    });
  }
})();

(() => {
  const imageSections = document.querySelectorAll('.image-section');
  const rightArrow = document.querySelector('.arrow-right');
  const leftArrow = document.querySelector('.arrow-left');

  let currentImageIndex = 0;

  function hideAllImages() {
    imageSections.forEach(section => {
      section.classList.add('hidden');
    });
  }

  function showCurrentImage() {
    hideAllImages();
    imageSections[currentImageIndex].classList.remove('hidden');
  }

  function changeImage(direction) {
    if (direction === 'next') {
      currentImageIndex = (currentImageIndex + 1) % imageSections.length;
    } else if (direction === 'prev') {
      currentImageIndex = (currentImageIndex - 1 + imageSections.length) % imageSections.length;
    }
    showCurrentImage();
  }

  const goalSection = document.querySelector('.goal-section');
  const toolSection = document.querySelector('.tool-section');
  const conclusionSection = document.querySelector('.conclusion-section');
  
  const sections = [goalSection, toolSection, conclusionSection];
  let currentSectionIndex = 0;

  function hideAllSections() {
    sections.forEach(section => section.classList.add('hidden'));
  }

  function showCurrentSection() {
    hideAllSections();
    sections[currentSectionIndex].classList.remove('hidden');
  }

  function changeSection(direction) {
    if (direction === 'next') {
      currentSectionIndex = (currentSectionIndex + 1) % sections.length;
    } else if (direction === 'prev') {
      currentSectionIndex = (currentSectionIndex - 1 + sections.length) % sections.length;
    }
    showCurrentSection();
  }

  showCurrentImage();
  showCurrentSection();

  if (rightArrow) {
    rightArrow.addEventListener('click', function() {
      changeImage('next');
    });
  }

  if (leftArrow) {
    leftArrow.addEventListener('click', function() {
      changeImage('prev');
    });
  }

  if (rightArrow) {
    rightArrow.addEventListener('click', function() {
      changeSection('next');
    });
  }

  if (leftArrow) {
    leftArrow.addEventListener('click', function() {
      changeSection('prev');
    });
  }
})();
