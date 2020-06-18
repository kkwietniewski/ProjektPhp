<!DOCTYPE html>
<html lang=pl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Aplikacja do zarządzania sklepem internetowym</title>
</head>
<body>
<?php
    require_once './scripts/connect.php';

    $sql= "SELECT * FROM klienci";
    // $stmt=$conn->prepare($sql);
    // $stmt->execute();
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['id'].'<br>';
        echo $row['zamowienie_id'].'<br>';
        echo $row['nazwa'].'<br>';
        echo $row['email'].'<br>';
        echo $row['haslo'].'<br>';
        echo $row['imie'].'<br>';
        echo $row['nazwisko'].'<br>';
        echo $row['data_utworzenia'].'<br>';

    }
    $sql2 = "SELECT k.nazwa, k.email, z.data, z.typ_platnosci FROM zamowienia z JOIN klienci k ON k.id = z.klient_id WHERE z.klient_id = 2";

    $result = mysqli_query($conn, $sql2);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['nazwa'];
        echo $row['email'];
        echo $row['data'];
        echo $row['typ_platnosci'];
    }

?>
                <nav class="navbar-expand-xl navbar-light bg-light p-2">
                    <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-2">
                        <li class="nav-item">
                            <a class="nav-link">Panel startowy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Asortyment</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link">Dodaj produkty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Zamówienia</a>
                        </li>
                        </div> 
                    </ul>
                </nav>

        
  


<div class="container-fluid mt-5">
        <div class="row">

            <div class="col-8">
                
            <div class="md-form active-blue-2 mb-3">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </div>
            

        </div>

    </div>
    
</body>
</html>