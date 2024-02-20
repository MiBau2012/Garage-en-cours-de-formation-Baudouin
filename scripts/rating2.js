'use strict';

document.addEventListener("DOMContentLoaded", function() {
    const stars = document.querySelectorAll(".rating i");

    stars.forEach(function(star) {
        star.addEventListener("click", function() {
            const ratingValue = parseInt(star.getAttribute("data-index"));
            document.getElementById("ratingValue").value = ratingValue;
            for (let i = 0; i < stars.length; i++) {
                if (i < ratingValue) {
                    stars[i].classList.add("fas");
                    stars[i].classList.remove("far");
                } else {
                    stars[i].classList.add("far");
                    stars[i].classList.remove("fas");
                }
            }
        });
    });
});


