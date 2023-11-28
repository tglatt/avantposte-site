<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="//webfonts3.radimpesko.com/RP-W-eeaadf78-9027-46dc-b0dc-378558cb6cf0" rel="stylesheet">
    <?= css('assets/css/index.css') ?>
    <?= css('assets/css/styles.css') ?>
    <?= css('@auto') ?>

</head>

<body class="mx-auto max-w-6xl agipo-regular">

    <header class="px-4 pt-4 pb-8 bg-primary">

        <a href="<?= $site->url() ?>" class="logo">
            <img src="<?= $site->image('logo.svg')->url() ?>" />
        </a>

        <nav>
            <ul class="flex flex-wrap justify-between items-center text-xl">
                <?php foreach ($site->children()->listed() as $item) : ?>
                    <li class="hover:text-white">
                        <a href="<?= $item->url() ?>">
                            <div class="relative">
                                <img class="absolute opacity-0 hover:opacity-100" src="<?= $site->image('entoure.svg')->url() ?>" style="width: 250%;  height: 200%;  left: -75%;  top: -50%; max-width: none;" />
                                <?= $item->title() ?>
                            </div>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>