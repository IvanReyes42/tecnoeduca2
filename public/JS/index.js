$(function(){
    $('[data-toggle="tooltip"]').tooltip()  

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {

        anchor.addEventListener("click", function (e) {
    
            e.preventDefault();
    
    
    
            document.querySelector(this.getAttribute("href")).scrollIntoView({
    
                behavior: "smooth",
    
            });
    
        });
    
    });

})
    //Smooth scrolling

