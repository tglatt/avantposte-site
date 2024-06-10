<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-18'>
        <div class='mt-12 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-20 md:px-12 px-12">
                    <h1 class="mb-1 text-5xl leading-12 md:text-5xl lg:text-7xl">
                        <?= $page->title()->html() ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class=''>
    </section>
    <section class="py-16 md:py-16">
        <div class="mx-auto max-w-4xl lg:max-w-5xl">

            <!-- Événements à venir -->
            <div class="gallery-container">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-4">
                    <?php
                // Récupère tous les événements listés
                $events = $page->children()->listed();

                // Sépare les événements passés et futurs
                $currentDate = date('Y-m-d');
                $futureEvents = $events->filterBy('to', '>=', $currentDate)->sortBy('from', 'asc');
                $pastEvents = $events->filterBy('to', '<', $currentDate)->sortBy('from', 'asc');

                // Affiche les événements futurs s'il y en a
                if ($futureEvents->count() > 0): 
                    foreach ($futureEvents as $event): ?>
                    <div class="card-container">
                        <div class="card max-w-sm bg-white rounded-lg shadow mb-10">
                            <a href="/events/<?= $event->slug() ?>">
                                <div class="card-image card-event-image rounded-t-lg">
                                    <?php if ($image = $event->image()): ?>
                                    <!-- Force landscape mode -->
                                    <img src="<?= $image->url() ?>" alt="<?= $event->title()->html() ?>" class="w-full">
                                    <?php endif ?>
                                </div>
                                <div class="p-5 h-64">
                                    <div class="text-center xl:text-base">
                                        <?php
                                        $startDate = $event->from()->toDate('d.m.Y');
                                        $endDate = $event->to()->toDate('d.m.Y');

                                        if ($startDate === $endDate) {
                                            echo $startDate; // Affiche uniquement la première date si elles sont égales
                                        } else {
                                            echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                                        }
                                        ?>
                                    </div>

                                    <div class="text-center text-xl md:text-2xl"><?= $event->title()->html() ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; 
                endif; ?>
                </div>
            </div>

            <!-- Événements passés -->
            <div class="gallery-container">
                <h2 class="my-4 xl:my-12 text-4xl tracking-normal md:text-4xl lg:text-5xl">Événements passés</h2>
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-4">
                    <?php
                // Affiche les événements passés s'il y en a
                if ($pastEvents->count() > 0): 
                    foreach ($pastEvents as $event): ?>
                    <div class="card-container">
                        <div class="card max-w-sm bg-white rounded-lg shadow mb-10">
                            <a href="/events/<?= $event->slug() ?>">
                                <div class="card-image card-event-image rounded-t-lg">
                                    <?php if ($image = $event->image()): ?>
                                    <!-- Force landscape mode -->
                                    <img src="<?= $image->url() ?>" alt="<?= $event->title()->html() ?>" class="w-full">
                                    <?php endif ?>
                                </div>
                                <div class="p-5 h-64">
                                    <div class="text-center xl:text-base">
                                        <?php
                                        $startDate = $event->from()->toDate('d.m.Y');
                                        $endDate = $event->to()->toDate('d.m.Y');

                                        if ($startDate === $endDate) {
                                            echo $startDate; // Affiche uniquement la première date si elles sont égales
                                        } else {
                                            echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                                        }
                                        ?>
                                    </div>

                                    <div class="text-center text-xl md:text-2xl"><?= $event->title()->html() ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; 
                endif; ?>
                </div>
            </div>

        </div>
    </section>


</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const screenWidth = window.innerWidth;
    const largeScreenSize = 1024;

    const galleryCells = document.querySelectorAll('.card-image');
    galleryCells.forEach(function(cell, index) {
        // Supprimez les classes existantes pour éviter des conflits
        cell.classList.remove('image-container-yellow', 'image-container-blue',
            'image-container-orange', 'image-container-green');

        // Vérifiez si l'écran est considéré comme grand avant d'ajouter des classes
        //if (screenWidth >= largeScreenSize) {
        if (index % 4 === 0) {
            cell.classList.add('image-container-yellow');
        } else if (index % 4 === 1) {
            cell.classList.add('image-container-blue');
        } else if (index % 4 === 2) {
            cell.classList.add('image-container-green');
        } else {
            cell.classList.add('image-container-orange');
        }
        //}
    });
});
</script>