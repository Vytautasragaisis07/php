<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?=siteTitle;?></title>
<body>
<?php
$skrydziaiis = ['Roma','Briuselis','Londonas', 'Oslas', 'Ženeva'];
$skrydziaii = ['Berlynas','Miunchenas','Jeruzalė', 'Michiganas', 'Vilnius'];
$skrydzioNr = ['1000', '1001', '1002', '1003', '1004', '1005', '1006', '1007', '1008'];
$bagazas = [10, 15, 20, 25, 30];
$validation_errors=[];
if(isset($_POST['submit'])) {
    if (!isset($_POST['flyNr'])) {
        $validation_errors[] = "Skrydžio numeris turi būti įvestas!";
    }
    if (!isset($_POST['nameId'])) {
        $validation_errors[] = "Asmens kodas turi būti įvestas!";
    }
}
$flyNr = $_POST['flyNr'];
$nameId = $_POST['nameId'];
$firstName = $_POST['firstName'];
$isKur = $_POST['isKur'];
$iKur = $_POST['iKur'];
$kaina = $_POST['kaina'];
$svoris = intval($_POST['bagazas']);

$bagazoKaina = intval($_POST['kaina']);
if ($svoris >= 20) {
    $bagKaina = 30;
    $kainuoja = $kaina + 30;
} else {
    $bagKaina = 0;
    $kainuoja = $kaina;
}

?>
<?php if($validation_errors) :?>
    <div class="errors">
        <ul>
            <?php foreach($validation_errors as $error) :?>
                <li><?=$error;?></li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif; ?>
<div class="container">
    <h1><?=siteName;?></h1>
    <form method="POST">
        <div class="form-group">
            <label for="formGroupExampleInput2">Skrydžio nr:</label>
            <select name="flyNr" class="form-control">
                <option selected disabled>--Pasirinkite--</option>
                <?php foreach ($skrydzioNr as $skrydzioId):?>
                    <option value="<?=$skrydzioId;?>"><?=$skrydzioId;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Asmens kodas</label>
            <input type="number" class="form-control" name="nameId" placeholder="...">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Vardas ir pavardė</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="...">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Skrydis iš:</label>
            <select name="isKur" id="isKur" class="form-control">
                <option selected disabled>--Pasirinkite--</option>
                <?php foreach ($skrydziaiis as $flyFrom):?>
                    <option value="<?=$flyFrom;?>"><?=$flyFrom;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Skrydis į:</label>
            <select name="iKur" id="iKur" class="form-control">
                <option selected disabled>--Pasirinkite--</option>
                <?php foreach ($skrydziaii as $flyIn):?>
                    <option value="<?=$flyIn;?>"><?=$flyIn;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Kaina:</label>
            <input type="text" class="form-control" id="kaina" name="kaina" placeholder="€">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Bagažas:</label>
            <select name="bagazas" class="form-control">
                <option selected disabled>--Pasirinkite--</option>
                <?php foreach ($bagazas as $bagazai):?>
                    <option value="<?=$bagazai;?>"><?=$bagazai;?></option>
                <?php endforeach;?>
            </select>
        </div>
    <div class="form-group">
            <label for="formGroupExampleInput2">Pastabos</label>
            <input type="text" class="form-control" id="pastabos" name="pastabos" placeholder="...">
        </div><input type="submit" value="Submit" class="btn btn-primary mb-2" name="submit">
    </form>
    <div class="container ticket">
        <div class="row Head">
            <h3>Bilietas</h3>
        </div>
        <div class="row ticket">
            <div class="row ticket mainInfo">
                <div class="col-sm-3">Skrydžio Numeris<p><?=$flyNr;?></p></div>
                <div class="col-sm-3">Skrydis pirmyn<p><?=$isKur?></p></div>
                <div class="col-sm-3">Skrydis atgal<p><?=$iKur?></p></div>
            </div>

            <div class="row personal">
                <div class="row personal mainInfo">
                    <div class="col-lg-8">Vardas ir Pavardė<p><?=$firstName;?></p></div>
                    <div class="col-lg-8">Asmens kodas<p><?=$nameId;?></p></div>
                </div>
            </div>

            <div class="col price">
                <div class="row price mainInfo">
                    <div class="col-sm-3">Bilieto kaina<p><?=$kaina?>€‎</p></div>
                    <div class="col-sm-3">Bagažo kaina<p><?=$bagKaina; ?>€‎</p></div>
                    <div class="col-sm-3">Galutinė kaina<p><?=$kainuoja; ?>€‎</p></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>