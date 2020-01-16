<?php
$prekes = [
    'PRK-12' => ' MacBook',
    'IP-4589' => ' Telefonas labai geras',
    'GR-897' => ' Gramafonas'
];
?>
<ul>
    <?php foreach($prekes as $id => $preke):?>
        <?php if($id === 'IP-4589'):?>
            <li><?=$id;?><span><?=$preke;?></span> (sandelyje nera)</li>
        <?php else:?>
            <li><?=$id;?><span><?=$preke;?></span></li>
        <?php endif;?>
    <?php endforeach; ?>
</ul>

<?php
$knygos = [
    'GROZ' => [
        'KN-1' => 'Graži knyga',
        'KN-2' => 'Laba graži knyga',
        'KN-3' => 'Nuostabi knyga'
    ],
    'PS' => [
        'KN-4' => 'Kaip *****',
        'KN-5' => 'Padėk sau',
        'KN-6' => 'Ateitis'
    ],
    'IT' => [
        'KN-7' => 'PHP',
        'KN-8' => 'JS',
        'KN-9' => 'WEB DEV 2020'
    ]
];
?>
<ul>
    <?php foreach($knygos as $kategorija => $knyga):?>
        <ul><?=$kategorija;?></ul>
        <?php foreach($kategorija as $id => $kn):?>
            <li><?=$id;?><span><?=$kn;?>></span></li>
        <?php endforeach; ?>
    <?php endforeach;?>
</ul>