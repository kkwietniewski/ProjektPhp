<?php
    require_once './scripts/connect.php';

        $sql = "SELECT id,symbol,nazwa,cena,obrazek_url,stan,waga,kategoria,producent,znacznik AS wartosc FROM produkty ORDER BY id";
        $result = mysqli_query($conn, $sql);
    echo <<<TAB
    <table class="table table-striped table-light ">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Miniatura</th>
                <th scope="col">Symbol</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Cena</th>
                <th scope="col">Stan</th>
                <th scope="col">Waga</th>
                <th scope="col">Kategoria</th>
                <th scope="col">Producent</th>
            </tr>
        </thead>
        <tbody>
TAB;
    while ($row = mysqli_fetch_assoc($result)) {
    echo <<<TAB
        
            <tr> 
                <td scope="row">$row[id]</td>
                <div class="card d-flex justify-content-center" style="width:50px;">
                <img class="card-img-top mx-auto mt-3 mb-0" src="$row[obrazek_url]">
                <td scope="row">$row[symbol] </td>
                <td scope="row">$row[nazwa]</td>
                <td scope="row">$row[cena]</td>
                <td scope="row">$row[stan]</td>
                <td scope="row">$row[waga]</td>
                <td scope="row">$row[kategoria]</td>
                <td scope="row">$row[producent]</td>
            </tr>

TAB;
    }
    echo <<<TABLE
            
    </tbody>
    </table>
TABLE;
?>