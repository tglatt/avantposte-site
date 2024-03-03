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
						<li class="slide">
							<?= $img ?>
						</li>
						<?php endif ?>

				<?php endforeach ?>
			</ul>
		</div>	
	</div>
</section>

<!-- <div class="carousel_footer">
  Pen by <a href="https://www.jemimaabu.com" target="_blank" rel="noopener">Jemima Abu</a> <span class="heart">&hearts;</span>
	</div> -->

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