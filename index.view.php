<!doctype html>
<html lange="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="view/css/styles.css">
    <title>Forma</title>
</head>
<body>

<?php

    $padaliniai = ['IT', 'Fin', 'Admin'];

    if(isset($_POST['submit'])){
        foreach($_POST as $value){
            echo "$value<br>";
        }
        // var_dump($_GET);
    }
?>

<div class = "container">
    <h3>
        Duomenu forma
    </h3>
<form method = "post">
    <div class="form-group">
        <select name = "padaliniai" class = "form-control">
            <option selected disabled>--Pasirinkite--</option>
            <?php foreach ($padaliniai as $padalinys):?>
            <option value = "<?=$padalinys?>"><?=$padalinys?></option>
            <?php endforeach;?>
        </select>
    </div>
    <div class="form-group">
        <label>Vardas</label>
        <input class="form-control" id="name" name = "name">
    </div>
    <div class="form-group">
        <label>Pavarde</label>
        <input class="form-control" id="lastName" name = "lastName">
    </div>
    <div class="form-group">
        <label>El. pastas</label>
        <input class="form-control" id="email" name = "email">
    </div>
    <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>