<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-18'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-12 px-12">
                    <h2 class="mb-4 text-3xl leading-12 md:text-3xl lg:text-5xl">
                        <?php
                            $startDate = $page->from()->toDate('H:i');
                            $endDate = $page->to()->toDate('H:i');

                            if ($startDate === $endDate) {
                                echo $startDate; // Affiche uniquement la première date si elles sont égales
                            } else {
                                echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                            }
                        ?>
                    </h2>
                    <h1 class="mb-1 text-5xl leading-12 md:text-5xl lg:text-7xl">
                        <?= $page->title()->html() ?>
                    </h1>
                    <h2 class="my-5 text-3xl leading-12 md:text-3xl lg:text-5xl">
                        <?= $page->intervenant()->html() ?>
                    </h2>
                </div>


                <div class="lg:flex justify-start items-start my-24">
                    <?php if ($image = $page->image()): ?>
                    <div class="lg:w-1/3 px-8 lg:px-0 lg:mr-2">
                        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" class="w-full">
                    </div>
                    <?php endif ?>

                    <div class="lg:flex-1 px-8 lg:px-0 pt-12 lg:pt-0 lg:ml-8" style="align-self: flex-start;">
                        <div class="event-content text-justify text-2xl"><?= $page->text()->kirbytext() ?></div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <?php snippet('footer') ?>

</main>