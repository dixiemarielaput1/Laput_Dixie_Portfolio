
export function iconPlusMinus(){


    document.querySelectorAll(".exp-icon").forEach(icon => {
        icon.addEventListener("click", function () {
            let projectId = this.dataset.projectId; 
            let detail = document.querySelector(`#extra-detail-${projectId}`);
            let iconSymbol = this;


            if (detail.style.display === "none" || detail.style.display === "") {
                detail.style.display = "block";
                iconSymbol.textContent = "−"; 
            } else {
                detail.style.display = "none";
                iconSymbol.textContent = "+"; 
            }
        });
    });


      
      
}