<?php snippet('header') ?>

<main class="main">
    <section class='py-16 md:py-18'>
        <div class='mt-12 mb-32 md:mt-72' id='section-hero'>
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <div class="lg:px-6 md:px-6 px-4">
                    <h1 class="mb-1 text-5xl leading-12 md:text-5xl lg:text-7xl">
                        <?= $page->Sec1titre1() ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <?php if ($image = $page->image()) : ?>
            <div class="image-activity">
                <img class='w-full max-w-full md:max-w-none' src="<?= $image->url() ?>"
                    alt="<?= $image->alt()->esc() ?>">
            </div>
            <?php endif ?>
            <div class="text-justify text-2xl mt-8 mb-12"><?= $page->Sec1text1()->kt() ?></div>

        </div>


    </section>
    <section class="py-16 md:py-16  section-border-top section-border-bottom">
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="bouton py-12">
                <a
                    href="https://7508c924.sibforms.com/serve/MUIFABrpteFNJ6oIAGBmr4stiuKfpwS49lF3Atic-7zZhZm2XOlXp_K5VQA4Xx7yRcUKPfrE9Vfr7AraUCXT3GaVPe1DUJ-lOXX2ZtiZ-3N5Lvw42AUccxGVYilNyJSM9TDfUvzT7M3Zc8t00qojgjJAr_u95evWIBwcl6k-WqrbOpEAlEjqRPuKgTuCX_ykExrteIy4YbJ1IkpE">
                    <button class="px-6 py-4 border-1 ">
                        <div class="px-6 text-2xl md:text-2xl lg:text-5xl bg-white">
                            <?= $page->Sec1textLinkTo() ?>
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </section>
    <section class="py-16 md:py-16">
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="mx-auto max-w-4xl lg:max-w-5xl">
                <h1 class="mb-8 mt-20 text-5xl leading-12 md:text-5xl lg:text-7xl">
                    <?= $page->Sec2titre1() ?>
                </h1>
            </div>
            <div class="gallery-container">

                <h2 class="mb-4 mt-12 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    Lundi
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-4">

                    <?php
                    $events = $page->children()->listed();
                    $mondayEvents = $events->filterBy('day_of_week', 'monday')->sortBy('from', 'asc'); 

                    if ($mondayEvents->count() > 0): 
                        foreach ($mondayEvents as $event): ?>
                    <div class="card-container">
                        <div class="card max-w-sm border rounded-lg shadow hover:shadow-md  mb-10 "
                            style="border: 1px solid rgb(229 231 235);">
                            <a href="/regular_events/<?= $event->slug() ?>">
                                <div class="card-image card-event-image rounded-t-lg">
                                    <?php if ($image = $event->image()): ?>
                                    <img src="<?= $image->url() ?>" alt="<?= $event->title()->html() ?>" class="w-full">
                                    <?php endif ?>
                                </div>
                                <div class="p-5 h-32">
                                    <div class="text-center xl:text-base">
                                        <?php
                                        $startDate = $event->from()->toDate('H:i');
                                        $endDate = $event->to()->toDate('H:i');

                                        if ($startDate === $endDate) {
                                            echo $startDate; // Affiche uniquement la première date si elles sont égales
                                        } else {
                                            echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                                        }
                                        ?>
                                    </div>

                                    <div class="text-center text-xl md:text-2xl truncate"><?= $event->title()->html() ?>
                                    </div>
                                    <div class="text-center text-lg md:text-xl truncate">
                                        <?= $event->intervenant()->html() ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; 
                    endif; ?>
                </div>
            </div>
            <div class="gallery-container">
                <h2 class="mb-4 mt-12 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    Mardi
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-4">

                    <?php
                    $events = $page->children()->listed();
                    $tuesdayEvents = $events->filterBy('day_of_week', 'tuesday')->sortBy('from', 'asc'); 

                    // Affiche les événements futurs s'il y en a
                    if ($tuesdayEvents->count() > 0): 
                        foreach ($tuesdayEvents as $event): ?>
                    <div class="card-container">
                        <div class="card max-w-sm border rounded-lg shadow hover:shadow-md  mb-10 "
                            style="border: 1px solid rgb(229 231 235);">
                            <a href="/regular_events/<?= $event->slug() ?>">
                                <div class="card-image card-event-image rounded-t-lg">
                                    <?php if ($image = $event->image()): ?>

                                    <img src="<?= $image->url() ?>" alt="<?= $event->title()->html() ?>" class="w-full">
                                    <?php endif ?>
                                </div>
                                <div class="p-5 h-32">
                                    <div class="text-center xl:text-base">
                                        <?php
                                        $startDate = $event->from()->toDate('H:i');
                                        $endDate = $event->to()->toDate('H:i');

                                        if ($startDate === $endDate) {
                                            echo $startDate; // Affiche uniquement la première date si elles sont égales
                                        } else {
                                            echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                                        }
                                        ?>
                                    </div>

                                    <div class="text-center text-xl md:text-2xl truncate"><?= $event->title()->html() ?>
                                    </div>
                                    <div class="text-center text-lg md:text-xl truncate">
                                        <?= $event->intervenant()->html() ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; 
                    endif; ?>
                </div>
            </div>
            <div class="gallery-container">
                <h2 class="mb-4 mt-12 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    Mercredi
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-4">

                    <?php
                    $events = $page->children()->listed();
                    $wednesdayEvents = $events->filterBy('day_of_week', 'wednesday')->sortBy('from', 'asc'); 

                    if ($wednesdayEvents->count() > 0): 
                        foreach ($wednesdayEvents as $event): ?>
                    <div class="card-container">
                        <div class="card max-w-sm border rounded-lg shadow hover:shadow-md  mb-10 "
                            style="border: 1px solid rgb(229 231 235);">
                            <a href="/regular_events/<?= $event->slug() ?>">
                                <div class="card-image card-event-image rounded-t-lg">
                                    <?php if ($image = $event->image()): ?>

                                    <img src="<?= $image->url() ?>" alt="<?= $event->title()->html() ?>" class="w-full">
                                    <?php endif ?>
                                </div>
                                <div class="p-5 h-32">
                                    <div class="text-center xl:text-base">
                                        <?php
                                        $startDate = $event->from()->toDate('H:i');
                                        $endDate = $event->to()->toDate('H:i');

                                        if ($startDate === $endDate) {
                                            echo $startDate; // Affiche uniquement la première date si elles sont égales
                                        } else {
                                            echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                                        }
                                        ?>
                                    </div>

                                    <div class="text-center text-xl md:text-2xl truncate"><?= $event->title()->html() ?>
                                    </div>
                                    <div class="text-center text-lg md:text-xl truncate">
                                        <?= $event->intervenant()->html() ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; 
                    endif; ?>
                </div>
            </div>
            <div class="gallery-container">
                <h2 class="mb-4 mt-12 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    Jeudi
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-4">

                    <?php
                    $events = $page->children()->listed();
                    $thursdayEvents = $events->filterBy('day_of_week', 'thursday')->sortBy('from', 'asc'); 

                    if ($thursdayEvents->count() > 0): 
                        foreach ($thursdayEvents as $event): ?>
                    <div class="card-container">
                        <div class="card max-w-sm border rounded-lg shadow hover:shadow-md  mb-10 "
                            style="border: 1px solid rgb(229 231 235);">
                            <a href="/regular_events/<?= $event->slug() ?>">
                                <div class="card-image card-event-image rounded-t-lg">
                                    <?php if ($image = $event->image()): ?>

                                    <img src="<?= $image->url() ?>" alt="<?= $event->title()->html() ?>" class="w-full">
                                    <?php endif ?>
                                </div>
                                <div class="p-5 h-32">
                                    <div class="text-center xl:text-base">
                                        <?php
                                        $startDate = $event->from()->toDate('H:i');
                                        $endDate = $event->to()->toDate('H:i');

                                        if ($startDate === $endDate) {
                                            echo $startDate; // Affiche uniquement la première date si elles sont égales
                                        } else {
                                            echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                                        }
                                        ?>
                                    </div>

                                    <div class="text-center text-xl md:text-2xl truncate"><?= $event->title()->html() ?>
                                    </div>
                                    <div class="text-center text-lg md:text-xl truncate">
                                        <?= $event->intervenant()->html() ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; 
                    endif; ?>
                </div>
            </div>
            <div class="gallery-container">
                <h2 class="mb-4 mt-12 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    Vendredi
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-4">

                    <?php
                    $events = $page->children()->listed();
                    $fridayEvents = $events->filterBy('day_of_week', 'friday')->sortBy('from', 'asc'); 

                    if ($fridayEvents->count() > 0): 
                        foreach ($fridayEvents as $event): ?>
                    <div class="card-container">
                        <div class="card max-w-sm border rounded-lg shadow hover:shadow-md  mb-10 "
                            style="border: 1px solid rgb(229 231 235);">
                            <a href="/regular_events/<?= $event->slug() ?>">
                                <div class="card-image card-event-image rounded-t-lg">
                                    <?php if ($image = $event->image()): ?>

                                    <img src="<?= $image->url() ?>" alt="<?= $event->title()->html() ?>" class="w-full">
                                    <?php endif ?>
                                </div>
                                <div class="p-5 h-32">
                                    <div class="text-center xl:text-base">
                                        <?php
                                        $startDate = $event->from()->toDate('H:i');
                                        $endDate = $event->to()->toDate('H:i');

                                        if ($startDate === $endDate) {
                                            echo $startDate; // Affiche uniquement la première date si elles sont égales
                                        } else {
                                            echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                                        }
                                        ?>
                                    </div>

                                    <div class="text-center text-xl md:text-2xl truncate"><?= $event->title()->html() ?>
                                    </div>
                                    <div class="text-center text-lg md:text-xl truncate">
                                        <?= $event->intervenant()->html() ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; 
                    endif; ?>
                </div>
            </div>
            <div class="gallery-container">
                <h2 class="mb-4 mt-12 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    Samedi
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-4">

                    <?php
                    $events = $page->children()->listed();
                    $saturdayEvents = $events->filterBy('day_of_week', 'saturday')->sortBy('from', 'asc'); 

                    if ($saturdayEvents->count() > 0): 
                        foreach ($saturdayEvents as $event): ?>
                    <div class="card-container">
                        <div class="card max-w-sm border rounded-lg shadow hover:shadow-md  mb-10 "
                            style="border: 1px solid rgb(229 231 235);">
                            <a href="/regular_events/<?= $event->slug() ?>">
                                <div class="card-image card-event-image rounded-t-lg">
                                    <?php if ($image = $event->image()): ?>

                                    <img src="<?= $image->url() ?>" alt="<?= $event->title()->html() ?>" class="w-full">
                                    <?php endif ?>
                                </div>
                                <div class="p-5 h-32">
                                    <div class="text-center xl:text-base">
                                        <?php
                                        $startDate = $event->from()->toDate('H:i');
                                        $endDate = $event->to()->toDate('H:i');

                                        if ($startDate === $endDate) {
                                            echo $startDate; // Affiche uniquement la première date si elles sont égales
                                        } else {
                                            echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                                        }
                                        ?>
                                    </div>

                                    <div class="text-center text-xl md:text-2xl truncate"><?= $event->title()->html() ?>
                                    </div>
                                    <div class="text-center text-lg md:text-xl truncate">
                                        <?= $event->intervenant()->html() ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; 
                    endif; ?>
                </div>
            </div>
            <div class="gallery-container">
                <h2 class="mb-4 mt-12 xl:mb-12 text-4xl tracking-normal text-gray-900 md:text-4xl lg:text-5xl">
                    Dimanche
                </h2>
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 md:gap-4">

                    <?php
                    $events = $page->children()->listed();
                    $sundayEvents = $events->filterBy('day_of_week', 'sunday')->sortBy('from', 'asc'); 

                    if ($sundayEvents->count() > 0): 
                        foreach ($sundayEvents as $event): ?>
                    <div class="card-container">
                        <div class="card max-w-sm border rounded-lg shadow hover:shadow-md  mb-10 "
                            style="border: 1px solid rgb(229 231 235);">
                            <a href="/regular_events/<?= $event->slug() ?>">
                                <div class="card-image card-event-image rounded-t-lg">
                                    <?php if ($image = $event->image()): ?>

                                    <img src="<?= $image->url() ?>" alt="<?= $event->title()->html() ?>" class="w-full">
                                    <?php endif ?>
                                </div>
                                <div class="p-5 h-32">
                                    <div class="text-center xl:text-base">
                                        <?php
                                        $startDate = $event->from()->toDate('H:i');
                                        $endDate = $event->to()->toDate('H:i');

                                        if ($startDate === $endDate) {
                                            echo $startDate; // Affiche uniquement la première date si elles sont égales
                                        } else {
                                            echo "$startDate - $endDate"; // Affiche les deux dates si elles sont différentes
                                        }
                                        ?>
                                    </div>

                                    <div class="text-center text-xl md:text-2xl truncate"><?= $event->title()->html() ?>
                                    </div>
                                    <div class="text-center text-lg md:text-xl truncate">
                                        <?= $event->intervenant()->html() ?>
                                    </div>
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
    <?php snippet('footer') ?>
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