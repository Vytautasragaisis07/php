<?php

//echo "Sveiki,";

$vardas = "Vytautas";
$pavarde = "Ragaišis";
$elpastas = "VytautasRagaisis07@gmail.com";

//echo ' mano vardas yra '.$vardas.', o pavardė '.$pavarde.'. Man galite parašyti: '.$elpastas;

//var_dump($vardas);

$output = '<div>';
$output .= $vardas;
$output .= '</div>';

//echo "man labai patiko filmas \"Labai geras filmas\"";


$eilute = " labas rytas, Lietuva! ";
$ilgis = strlen($eilute);
$eilute_be_tarpu = trim($eilute);
$didziosios_raides = strtoupper($eilute);
$mazosios_raides = strtolower($eilute);
$pavadinimas = ucfirst($eilute);
$tekstas = str_replace("Lietuva", "Latvija", $eilute);
$zodis = substr($eilute, 1, 5);

echo $eilute;
echo $ilgis;
echo $eilute_be_tarpu;
echo $didziosios_raides;
echo $mazosios_raides;
echo $pavadinimas;
echo $tekstas;
echo $zodis;


?>

<div>
    <div>
        <?php if($vardas):?>
        <p>Labas: <?=$vardas;?></p>
        <?php else:?>
        <p>Nera vardo</p>
        <?php endif;?>
    </div>
</div>
