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
            <ul>
                <?php foreach($mokiniai as $numeris => $vardas):?>
                    <ul><?=$vardas;?><span></span><?=$pavarde;?></ul>
                    <?php foreach($vardas as $pavarde => $pazymys):?>
                        <li><span><?=$pazymys;?></span></li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        </table>
    </nav>
</body>
</html>
