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
    <h1><?=siteName;?></h1>
    <nav>
<!--        <ul>-->
<!--        --><?php //foreach($nav as $href => $title):?>
<!--            <li><a href='http://--><?//=$href;?><!--.lt'>--><?//=$title;?><!--</a></li>-->
<!--            --><?php //endforeach;?>
<!--        </ul>-->
        <?php
            $padaliniai = ['IT','FIN','ADMIN'];

            if(isset($_GET['submit'])){
                foreach ($_GET as $value){
                    echo "$value<br>";
                }
            }
        ?>
        <form>
            <div class="form-group">
                <select name="" id="" class="form-control">
                    <option selected disabled>--Pasirinkite--</option>
                    <?php foreach ($padaliniai as $padalinys):?>
                    <option value="<?=$padalinys?>"><?=$padalinys?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Pavardė</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="...">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">El. Paštas</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="...">
            </div>
        <button type="submit" class="btn btn-primary mb-2" name="submit">Send</button>
        </form>
    </nav>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>