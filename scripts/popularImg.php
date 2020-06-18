<?php
require_once './scripts/connect.php';

$sql = "SELECT obrazek_url, nazwa, stan, waga, producent FROM produkty LIMIT 3";

$result = mysqli_query($conn, $sql);

echo <<<IMG
<h5 class="display-5 mt-0">Najpopularniejsze produkty</h5>
<div class="d-flex p-4 mt-4" style="justify-content:space-between">

IMG;
while ($row = mysqli_fetch_assoc($result)) {
    echo <<<IMG
    
    <div class="card" style="width: 27%; ">
        <img class="card-img-top mx-5" src="$row[obrazek_url]" alt="$row[nazwa]" style="width: 150px; height: 150px;" >
        <div class="card-body m-5">
            <h5 class="card-title">$row[nazwa]</h5>
            <p class="card-text">Na stanie: $row[stan]<br>Waga: $row[waga]<br>Producent: $row[producent]</p>
            <a href="#" class="btn btn-primary">Edytuj produkt</a>
        </div>
    </div>
    IMG;
}

echo "</div>";
?>