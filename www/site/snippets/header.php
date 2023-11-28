<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//webfonts3.radimpesko.com/RP-W-eeaadf78-9027-46dc-b0dc-378558cb6cf0" rel="stylesheet">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/index.css') ?>
    <?= css('assets/css/style.css') ?>
    <?= css('@auto') ?>

</head>

<body>

    <header class="header">

        <a href="<?= $site->url() ?>" class="logo">
            <img src="<?= $site->image('logo.svg')->url() ?>" />
        </a>

        <nav class="menu">
            <ul>
                <?php foreach ($site->children()->listed() as $item) : ?>
                    <li>
                    <a href="<?= $item->url() ?>">
                        <div class="menu_item">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" />
                            <?= $item->title() ?>
                        </div></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>