<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <title><?=siteName;?></title>
</head>
<body>
    <h1><?=siteName;?></h1>
    <nav>
        <ul>
            <?php foreach ($nav as $href => $title):?>
                <li><a href="http://www.<?=$href;?>.lt"><?=$title;?></a></li>
            <?php endforeach;?>
        </ul>
        <table>
            <thead>
            <tr>
                <th>Klasė</th>
                <th>Kodas</th>
                <th>Vardas Pavardė</th>
                <th>Kontrolinių darbų</th>
                <th>Vidurkis</th>
                <th>Duomenų formavimo data</th>
            </tr>
            </thead>
            <ul>
                <?php
                // set the default timezone to use. Available since PHP 5.1
                date_default_timezone_set('UTC');

                $today = date("Y-m-d H:i:s");
                echo $today
                ?>
                <?php foreach ($mokiniai as $id => $duomenys): ?>
                    <?php foreach ($duomenys as $visi => $pazymiai): ?>
                        <?php if(is_array($pazymiai)):?>

                            <?php foreach ($pazymiai as $data => $duom): ?>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><?=$data;?></th>
                                <th><?=$duom;?></th>
                                <th><?=$today;?></th>
                            </tr>
                            <?php endforeach;?>
                        <?php else :?>
                        <tr>
                            <th>5b</th>
                            <th><?=$id;?></th>
                            <th><?=$pazymiai;?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php endif; ?>
                    <?php endforeach;?>
                <?php endforeach;?>
            </ul>
        </table>
    </nav>
</body>
</html>
