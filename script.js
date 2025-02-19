document.addEventListener("DOMContentLoaded", () => {
    const slider = document.querySelector(".testimonial-slider");
    const leftBtn = document.querySelector(".left-btn");
    const rightBtn = document.querySelector(".right-btn");
    
    let index = 0;
    const totalSlides = document.querySelectorAll(".testimonial").length;
    const visibleSlides = 3; // Show 3 slides at a time
    const slideWidth = document.querySelector(".testimonial").offsetWidth + 20; // Add margin

    function slideNext() {
        if (index < totalSlides - visibleSlides) {
            index++;
        } else {
            index = 0; // Loop back to the start
        }
        updateSlider();
    }

    function slidePrev() {
        if (index > 0) {
            index--;
        } else {
            index = totalSlides - visibleSlides;
        }
        updateSlider();
    }

    function updateSlider() {
        slider.style.transform = `translateX(-${index * slideWidth}px)`;
    }

    rightBtn.addEventListener("click", () => {
        slideNext();
        resetAutoSlide();
    });

    leftBtn.addEventListener("click", () => {
        slidePrev();
        resetAutoSlide();
    });

    // Auto-slide every 3 seconds
    let autoSlide = setInterval(slideNext, 3000);

    function resetAutoSlide() {
        clearInterval(autoSlide);
        autoSlide = setInterval(slideNext, 3000);
    }
});

/*----------------------------------------------------------------------------------*/

function showPremium() {
    document.getElementById("basicPlans").style.display = "none";
    document.getElementById("premiumPlans").classList.add("active");
}

function showBasic() {
    document.getElementById("basicPlans").style.display = "flex";
    document.getElementById("premiumPlans").classList.remove("active");
}
