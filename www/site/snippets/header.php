<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <div class="menu_item">
                            <img class="menu_item_img" src="<?= $site->image('entoure.svg')->url() ?>" />
                            <a href="<?= $item->url() ?>"><?= $item->title() ?></a>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </nav>
    </header>