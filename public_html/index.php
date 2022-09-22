
<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
$mustache = new Mustache_Engine([
        'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/../mustache/')
    ]
);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?
        $cards = [
            [
                'title' => 'Карточка 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi iste perferendis officia commodi cum quos numquam cumque modi enim fuga ratione, labore, quidem provident nam exercitationem? Est blanditiis inventore corrupti?',
                'date' => '14 января 2021'
            ],
            [
                'title' => 'Карточка 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi iste perferendis officia commodi cum quos numquam cumque modi enim fuga ratione, labore, quidem provident nam exercitationem? Est blanditiis inventore corrupti?',
                'date' => '18 января 2021'
            ],
            [
                'title' => 'Карточка 3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi iste perferendis officia commodi cum quos numquam cumque modi enim fuga ratione, labore, quidem provident nam exercitationem? Est blanditiis inventore corrupti?',
                'date' => '20 января 2021'
            ],
        ];
    ?>

    <div class="cards-list">
    <?foreach ($cards as $card):?>
        <div class="card">
            <div class="card__title"><?=$card['title']?></div>
            <div class="card__description"><?=$card['description']?></div>
            <div class="card__date"><?=$card['date']?></div>
        </div>
    <?endforeach?>
    </div>
</body>
</html>
