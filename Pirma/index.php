<?php
//1 uzduotis
$duomenys = array('Jonas', 12, true);
$prekes = ['Kompas', 'Telefonas', 'PHP strom'];
$prekes[] = "Pienas";
$prekes[12544] = "Duona";
$kiekis = count($prekes); // suskaiciuoja masyva

foreach($prekes as $id => $preke) {
    echo "$id : $preke</br>";
}
//2 uzduotis
$prekes = [
    'PRK-12' => "MacBook",
    'IP-4589' => "Telefonas labai geras",
    'GR-897' => "Gramafonas"
];
//3 uzduotis
$knygos = [
    'GROZINE' => [
        'KN-1' => "Grazi knyga",
        'KN-2' => "Labai grazi knyga",
        'KN-3' => "Nuostabi knyga"
    ],
    'PSICHOLOGIJA' => [
        'KN-4' => "Kaip ******",
        'KN-5' => "Padek sau",
        'KN-6' => "Ateitis"
    ],
    'INFORMACINES TECHNOLOGIJOS' => [
        'KN-7' => "PHP",
        'KN-8' => "JS",
        'KN-9' => "WEB DEV 2020"
    ],
];
?>
<br>
//2 Uzduotis

<ul>
<?php foreach($prekes as $id => $preke):?>
    <?php if($id === 'IP-4589'):?>
    <li><?=$id;?><span><?=$preke;?></span>(sandelyje nera)</li>
    <?php else:?>
        <li><?=$id;?><span><?=$preke;?></span></li>
    <?php endif;?>
<?php endforeach; ?>
</ul>
//3 Uzduotis
<ul>
    <?php foreach($knygos as $kategorija => $id):?>
            <ul><?=$kategorija;?><span></span></ul>
        <?php foreach($id as $info => $numeris):?>
            <li><span><?=$numeris;?></span></li>
        <?php endforeach; ?>
    <?php endforeach; ?>
</ul>