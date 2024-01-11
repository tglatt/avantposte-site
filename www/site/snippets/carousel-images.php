<ul class="gallery">

	<?php foreach ($page->images() as $img) : ?>
		<li>
		<?= $img ?>
	</li>

	<?php endforeach ?>

	<!-- <li style="background: #f6bd60;"></li>
	<li style="background: #f7ede2;"></li>
	<li style="background: #f5cac3;"></li>
	<li style="background: #84a59d;"></li>
	<li style="background: #f28482;"></li> -->
</ul>

<script>
	const slider = document.querySelector('.gallery');
	let isDown = false;
	let startX;
	let scrollLeft;

	slider.addEventListener('mousedown', e => {
		isDown = true;
		slider.classList.add('active');
		startX = e.pageX - slider.offsetLeft;
		scrollLeft = slider.scrollLeft;
	});
	slider.addEventListener('mouseleave', _ => {
		isDown = false;
		slider.classList.remove('active');
	});
	slider.addEventListener('mouseup', _ => {
		isDown = false;
		slider.classList.remove('active');
	});
	slider.addEventListener('mousemove', e => {
		if (!isDown) return;
		e.preventDefault();
		const x = e.pageX - slider.offsetLeft;
		const SCROLL_SPEED = 3;
		const walk = (x - startX) * SCROLL_SPEED;
		slider.scrollLeft = scrollLeft - walk;
	});
</script>









