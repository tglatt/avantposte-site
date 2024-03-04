<?php snippet('header') ?>

<main class="main">
    <section>
        <div class='section-hero'>
            <div class="mx-auto max-w-4xl">
                <div class="lg:px-20 md:px-10 px-4">
                    <h1 class="mb-1 text-5xl tracking-tight text-gray-900 md:text-5xl lg:text-6xl"><?= $page->title() ?></h1>
                </div>
            </div>
        </div>
    </section>


    <!-- Section 2 -->
    <section>
        <div class="mx-auto max-w-4xl">
            <div class="titre">
                <h2><?= $page->Sec2titre2() ?></h2>
            </div>
            <hr>
            <div class="info">
                <div class="small_p"><?= $page->sec2text1()->kt() ?></div>
            </div>
            <hr>
            <hr>
            <div class="info">
                <div class="small_p"><?= $page->sec2text2()->kt() ?></div>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section>
        <div class="mx-auto max-w-4xl">
            <div class="info">
                <h2><?= $page->sec3Titre2() ?></h2>
                <hr>
                <hr>
                <div class="info">
                    <div class="medium_p"><?= $page->sec3titre3()->kt() ?></div>
                    <hr>
                    <div class="small_p"><?= $page->sec3text2()->kt() ?></div>
                </div>
                <hr>
                <hr>
                <div class="info">
                    <div class="medium_p"><?= $page->sec3titre3bis()->kt() ?></div>
                    <hr>
                    <div class="small_p"><?= $page->sec3text3()->kt() ?></div>
                </div>
                <hr>
                <hr>
                <div class="info">
                    <div class="medium_p"><?= $page->sec3titre3ter()->kt() ?></div>
                    <hr>
                    <div class="small_p"><?= $page->sec3text4()->kt() ?></div>
                </div>
                <hr>
                <hr>
                <div class="info">
                    <div class="medium_p"><?= $page->sec3titre3quar()->kt() ?></div>
                    <hr>
                    <div class="small_p">
                        <a class="link_blackToPrimary" href="/avantposte/le-lieu"><?= $page->LienPageLieu()->kt() ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php snippet('footer') ?>
</main>