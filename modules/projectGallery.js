

export function projectGallery() {
 
    let slides = document.querySelectorAll('.gallery-slide');
    let cIndex = 0;  
    
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('hidden', i !== index); 
        });
    }
    
    document.querySelector('#next-btn').addEventListener('click', () => {
        cIndex = (cIndex + 1) % slides.length; 
        showSlide(cIndex);
    });
    
    document.querySelector('#prev-btn').addEventListener('click', () => {
        cIndex = (cIndex - 1 + slides.length) % slides.length; 
        showSlide(cIndex);
    });
    
    console.log('Project Gallery Initialized');
    showSlide(cIndex);
    
    
  
}
