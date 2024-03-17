<section class='py-16 md:py-16'>
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true,   "prevNextButtons": false }'>
        <?php foreach ($page->images() as $img) : ?>
        <?php if (!str_contains($img->name(), 'NOTONCAROUSEL')) : ?>
        <div class="gallery-cell"><?= $img ?></div>
        <?php endif ?>
        <?php endforeach ?>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
<style>
.flickity-viewport {
    overflow: visible;
    position: relative;
    height: 100%;
}
</style>
<script>
const slidesContainer = document.getElementById("slides-container");
const slide = document.querySelector(".slide");
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const galleryCells = document.querySelectorAll('.gallery-cell');
    galleryCells.forEach(function(cell, index) {
        if (index % 4 === 0) {
            cell.classList.add('yellow-filter');
        } else if (index % 4 === 1) {
            cell.classList.add('blue-filter');
        } else if (index % 4 === 2) {
            cell.classList.add('orange-filter');
        } else {
            cell.classList.add('green-filter');
        }
    });
});
var cells = document.querySelectorAll('.gallery-cell');

// Pour chaque cellule, ajoutez des écouteurs d'événements pour détecter le survol de la souris
cells.forEach(function(cell) {
    cell.addEventListener('mouseover', function() {
        // Ajoutez la classe .hovered lors du survol de la souris
        this.classList.add('hovered');
    });

    cell.addEventListener('mouseout', function() {
        // Supprimez la classe .hovered lorsque la souris quitte la cellule
        this.classList.remove('hovered');
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.querySelector('.gallery');
    const flickity = new Flickity(gallery);

    // Fonction pour appliquer le décalage aux diapositives qui ne sont pas au centre
    function applyOffsetToNonCenteredSlides() {
        const cells = gallery.querySelectorAll('.gallery-cell');
        const centerIndex = flickity.selectedIndex;

        // Parcours de toutes les diapositives
        cells.forEach((cell, index) => {
            if (index !== centerIndex) {
                cell.style.transform =
                    'translateY(-40px)'; // Appliquer le décalage de 40px vers le haut
            } else {
                cell.style.transform =
                    'none'; // Réinitialiser le décalage pour la diapositive au centre
            }
        });
    }

    // Écouter l'événement lorsque le carrousel change de diapositive
    flickity.on('change', applyOffsetToNonCenteredSlides);

    // Appliquer le décalage initial
    applyOffsetToNonCenteredSlides();
});
</script>