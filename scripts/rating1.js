<script>
document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.fa-star');

    stars.forEach(function(star) {
        star.addEventListener('mouseover', function() {
            const index = parseInt(star.getAttribute('data-index'));
            highlightStars(index);
        });

        star.addEventListener('mouseout', function() {
            const ratingValue = document.getElementById('ratingValue').value;
            if (!ratingValue) {
                highlightStars(0);
            } else {
                highlightStars(parseInt(ratingValue));
            }
        });

        star.addEventListener('click', function() {
            const index = parseInt(star.getAttribute('data-index'));
            document.getElementById('ratingValue').value = index;
        });
    });

    function highlightStars(index) {
        stars.forEach(function(star) {
            const starIndex = parseInt(star.getAttribute('data-index'));
            if (starIndex <= index) {
                star.classList.remove('far');
                star.classList.add('fas');
                star.style.color = '#FFD700'; // Couleur jaune pour les étoiles sélectionnées
            } else {
                star.classList.remove('fas');
                star.classList.add('far');
                star.style.color = ''; // Réinitialiser la couleur par défaut des étoiles non sélectionnées
            }
        });
    }
});
</script>