<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?=siteName;?></title>
<body>
<div class="container">
    <h1><?=siteName;?></h1>
    <table>
    <?php
    $skrydziaiis = ['Roma','Briuselis','Londonas', 'Oslas', 'Ženeva'];
    $skrydziaii = ['Berlynas','Miunchenas','Jeruzalė', 'Michiganas', 'Vilnius'];
    $skrydzionr = ['1000', '1001', '1002', '1003', '1004', '1005', '1006', '1007', '1008'];
    $bagazas = ['<20kg', '>20kg'];
    if(isset($_GET['submit'])){
        foreach ($_GET as $value){
            echo "<table><tr>$value</tr></table><br>";
        }
    }
    echo intval("price");
    ?>
    </table>

        <form>

            <div class="form-group">
                <label for="formGroupExampleInput2">Skrydžio nr:</label>
                <select name="flynr" id="flynr" class="form-control">
                    <option selected disabled>--Pasirinkite--</option>
                    <?php foreach ($skrydzionr as $skrydzioid):?>
                        <option value="<?=$skrydzioid?>"><?=$skrydzioid?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Asmens kodas</label>
                <input type="number" class="form-control" id="nameid" name="nameid" placeholder="...">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Vardas ir pavardė</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="...">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Skrydis iš:</label>
                <select name="skrydisis" id="skrydisis" class="form-control">
                    <option selected disabled>--Pasirinkite--</option>
                    <?php foreach ($skrydziaiis as $fromfly):?>
                        <option value="<?=$fromfly?>"><?=$fromfly?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Skrydis į:</label>
                <select name="skrydisi" id="skrydisi" class="form-control">
                    <option selected disabled>--Pasirinkite--</option>
                    <?php foreach ($skrydziaii as $flyin):?>
                        <option value="<?=$flyin?>"><?=$flyin?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Kaina:</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="€">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Bagažas:</label>
                <select name="bagazas" id="bagazas" class="form-control">
                    <option selected disabled>--Pasirinkite--</option>
                    <?php foreach ($bagazas as $bagazai):?>
                        <option value="<?=$bagazai?>"><?=$bagazai?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Pastabos</label>
                <input type="text" class="form-control" id="pastabos" name="pastabos" placeholder="...">
            </div>
        <button type="submit" class="btn btn-primary mb-2" name="submit">Send</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>