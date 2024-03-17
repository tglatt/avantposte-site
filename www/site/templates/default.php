<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-10 px-4 xl:  pt-40">
                <h1><?= $page->title() ?></h1>
                <p><?= $page->text()->kt() ?></p>
            </div>
        </div>
    </section>
</main>

<?php snippet('footer') ?>