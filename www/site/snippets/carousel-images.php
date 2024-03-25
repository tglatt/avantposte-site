<section class='py-16 md:py-16'>
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true,   "prevNextButtons": false }'>
        <?php foreach ($page->images() as $img) : ?>
        <?php if (!str_contains(strtolower($img->name()), 'notoncarousel')) : ?>
        <div class="gallery-cell"><?php if ($img): ?>
            <img alt="<?= $img->alt() ?>" src="<?= $img->resize(900)->url() ?>" srcset="<?= $img->srcset(
            [
                '300w'  => ['width' => 300],
                '600w'  => ['width' => 600],
                '900w'  => ['width' => 900],
                '1200w' => ['width' => 1200],
                '1800w' => ['width' => 1800],
            ]
        )?>" width="<?= $img->resize(1800)->width() ?>" height="<?= $img->resize(1800)->height() ?>">
            <?php endif ?>
        </div>
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
document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.querySelector('.gallery');
    const flickity = new Flickity(gallery);
    flickity.resize();
});
</script>

<script>

</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const screenWidth = window.innerWidth;
    const largeScreenSize = 1024;

    const galleryCells = document.querySelectorAll('.gallery-cell');
    galleryCells.forEach(function(cell, index) {
        // Supprimez les classes existantes pour éviter des conflits
        cell.classList.remove('image-container-yellow', 'image-container-blue',
            'image-container-orange', 'image-container-green');

        // Vérifiez si l'écran est considéré comme grand avant d'ajouter des classes
        if (screenWidth >= largeScreenSize) {
            if (index % 4 === 0) {
                cell.classList.add('image-container-yellow');
            } else if (index % 4 === 1) {
                cell.classList.add('image-container-blue');
            } else if (index % 4 === 2) {
                cell.classList.add('image-container-orange');
            } else {
                cell.classList.add('image-container-green');
            }
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

document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.querySelector('.gallery');
    const flickity = new Flickity(gallery);

    // Mettre à jour la taille du carrousel après le chargement de la page
    flickity.resize();
});

window.onload = function() {
    const gallery = document.querySelector('.gallery');
    const flickity = new Flickity(gallery);

    // Mettre à jour la taille du carrousel après le chargement complet de la page
    flickity.resize();
};
</script>