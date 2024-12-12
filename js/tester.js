(() => {
  const projectSections = document.querySelectorAll('.project-header');

  projectSections.forEach((section) => {
    const iconPlusMinus = section.querySelector('.exp-icon');
    const projectImage = section.querySelector('.project-image');
    const shortDetail = section.querySelector('.text-short-detail');
    const linkBtns = section.querySelectorAll('.buttons .hidden');

    iconPlusMinus.addEventListener('click', function() {
      projectImage.classList.toggle('hidden');
      shortDetail.classList.toggle('hidden');

      linkBtns.forEach(button => {
        button.classList.toggle('hidden');
      });

      if (projectImage.classList.contains('hidden')) {
        iconPlusMinus.textContent = '+'; 
      } else {
        iconPlusMinus.textContent = '-';
      }
    });
  });
})();


