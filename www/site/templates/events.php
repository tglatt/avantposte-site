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
    <section class='py-16 md:py-32'>
        <div class="mx-auto max-w-4xl lg:max-w-5xl">
            <div class="lg:px-20 md:px-12 px-12">
                <?php
  $events = $page->children()->listed();
  if ($events->count() > 0): ?>
                <ul>
                    <?php foreach ($events as $event): ?>
                    <li class="event">
                        <a href="<?= $event->link() ?>">
                            <header>
                                <h3><?= $event->title()->html() ?></h3>
                                <time><?= $event->from()->toDate('d.m.Y') ?> -
                                    <?= $event->to()->toDate('d.m.Y') ?></time>
                            </header>
                            <main>
                                <?= $event->text()->kirbytext() ?>
                                <!--<?php if ($image = $event->image()): ?>
                        <figure><?= $event->image() ?></figure>
                        <?php endif ?>-->
                            </main>
                            <footer><?= $event->location()->html() ?></footer>
                        </a>
                    </li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            </div>
        </div>
    </section>

</main>