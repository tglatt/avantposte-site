<?php snippet('header') ?>

<main class="main">
    <section>
        <div class='section-content'>
            <div class="titre">
                <h1><?= $page->title() ?></h1>
            </div>
        </div>
    </section>

    <!-- Section 2 Carrousel -->
    <section>
        <div class="section-content">
            <div class="sec_carousel">
                <?php snippet('carousel-images', slots: true) ?>
                <?php slot('images') ?>
                <?php endslot() ?>
                <?php endsnippet() ?>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section>
        <div class='section-content'>
            <div class="titre">
                <h2><?= $page->Sec3titre2() ?></h2>
            </div>
            <hr>
            <div class="info">

                <div class="small_p"><?= $page->sec3text1()->kt() ?></div>
            </div>
        </div>

    </section>

    <!-- Section 4 -->
    <section>
        <div class='section-content'>
            <div class="info">
                <h2><?= $page->sec4Titre2() ?></h2>
                <hr>
                <div class="small_p"><?= $page->sec4Text1()->kt() ?></div>
                <div class="two_col">
                    <div class="col1">
                        <div class="small_p"><?= $page->sec4textCol1()->kt() ?></div>
                    </div>
                    <div class="col2">
                        <div class="small_p"><?= $page->sec4textCol2()->kt() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5 -->
    <section>
        <div class='section-centent'>
            <div class="info">
                <h2><?= $page->sec5Titre2() ?></h2>
                <hr>
                <div class="small_p"><?= $page->sec5Text1()->kt() ?></div>
                <hr>
                <div class="small_p">
                    <a class="link_blackToPrimary" href="https://www.instagram.com/hobo_bistrot/"><?= $page->LienInstaHobo()->kt() ?></a>
                </div>
                <hr>
                <div class="small_p">
                    <a class="link_blackToPrimary" href="https://www.facebook.com/profile.php?id=100092677400813&locale=fr_FR"><?= $page->LienFacebookHobo()->kt() ?></a>
                </div>
            </div>
        </div>
    </section>

    <?php snippet('footer') ?>
</main>