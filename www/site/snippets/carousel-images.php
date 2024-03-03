<!--OLD CARROUSEL

<section >
	<div class='section-content'>
		<div class="slider-wrapper">
			<button class="slide-arrow" id="slide-arrow-prev">
				&#8249;
			</button>
			<button class="slide-arrow" id="slide-arrow-next">
				&#8250;
			</button>
			<ul class="slides-container" id="slides-container">
			<?php foreach ($page->images() as $img) : ?>
				<?php if (!str_contains($img->name(), 'NOTONCAROUSEL')) : ?>
					<?= $img ?>
				<?php endif ?>

			<?php endforeach ?>
			</ul>
		</div>	
	</div>
</section>-->



<section>
	<div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true,   "prevNextButtons": false }'>
		<?php foreach ($page->images() as $img) : ?>
			<?php if (!str_contains($img->name(), 'NOTONCAROUSEL')) : ?>
				<div class="gallery-cell"><?= $img ?></div>
			<?php endif ?>
		<?php endforeach ?>
	</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>

<script>
	const slidesContainer = document.getElementById("slides-container");
	const slide = document.querySelector(".slide");
	const prevButton = document.getElementById("slide-arrow-prev");
	const nextButton = document.getElementById("slide-arrow-next");

	nextButton.addEventListener("click", () => {
		const slideWidth = slide.clientWidth;
		slidesContainer.scrollLeft += slideWidth;
	});

	prevButton.addEventListener("click", () => {
		const slideWidth = slide.clientWidth;
		slidesContainer.scrollLeft -= slideWidth;
	});
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