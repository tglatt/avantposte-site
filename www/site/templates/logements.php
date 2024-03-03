<?php snippet('header') ?>

<main class="main">
    <section>
        <div class="section-content">
            <div class="titre">
                <h1><?= $page->title() ?></h1>
            </div>
        </div>
    </section>


    <!-- Section 2 -->
    <section>
        <div class="section-content">
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
        <div class="section-content">
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