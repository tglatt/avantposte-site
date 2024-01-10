<div class="carousel-wrap">
	<span id="back-btn">
		< </span>
			<div class="carousel-images">
				<?php $i = 0; ?>


				<?php foreach ($page->images() as $img) : ?>
					<div class="carousel-inner">
						<span class="
							<?php
							if ($i % 2 == 0) echo "carousel-image-top ";
							else echo "carousel-image-bottom ";
							$i++; ?>">
							<?= $img->crop(1000, 600); ?>

						</span>
					</div>
				<?php endforeach ?>

				<?php foreach ($page->images() as $img) : ?>
					<div class="carousel-inner">
						<span class="
							<?php
							if ($i % 2 == 0) echo "carousel-image-top ";
							else echo "carousel-image-bottom ";
							$i++; ?>">
							<?= $img->crop(1000, 600); ?>
						</span>
					</div>
				<?php endforeach ?>


			</div>
			<span id="next-btn">></span>

</div>

<script>
	let scrollContainer = document.querySelector(".carousel-images");
	let backBtn = document.querySelector("#back-btn");
	let nextBtn = document.querySelector("#next-btn");

	// scrollContainer.addEventListener("wheel", (evt) => {
	// 	evt.preventDefault();
	// 	console.log(evt);
	// 	scrollContainer.scrollLeft += evt.deltaY ;

	// });

	nextBtn.addEventListener("click", (evt) => {
		scrollContainer.style.scrollBehavior = "smooth";
		scrollContainer.scrollLeft += 1000;
	});
	backBtn.addEventListener("click", (evt) => {
		scrollContainer.style.scrollBehavior = "smooth";
		scrollContainer.scrollLeft -= 1000
	});
</script>