<?php
    require_once './scripts/connect.php';

    $sql = "SELECT id,symbol,nazwa,cena,obrazek_url,stan,waga,kategoria,producent,znacznik AS wartosc FROM produkty ORDER BY id;

    $result = mysqli_query($conn, $sql);

    echo <<<TAB
    <table class="table table-striped table-light ">
    <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Miniatura</th>
                <th scope="col">symbol</th>
                <th scope="col">nazwa</th>
                <th scope="col">cena</th>
                <th scope="col">stan</th>
                <th scope="col">waga</th>
                <th scope="col">kategoria</th>
                <th scope="col">producent</th>
                
                
            </tr>
    </thead>
       
TAB;
    
?>