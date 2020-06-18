<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        a{
            color: #343a40d1;
        }
        a:hover{
            text-decoration:none; 
            color:#000000;            

        }


    .topnav {
    overflow: hidden;
    background-color: #f0f0f1; 
    position: relative;
}

.topnav #filter {
  display: none;
}

.topnav a {
  color: #000000;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

    </style>
</head>
<body>

<nav class="navbar-expand-xl navbar-dark bg-dark p-2" >
                    <div class="collapse navbar-collapse " >
                    <div class="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./panelStartowy.php">Panel startowy</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link">Asortyment</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="./dodajProdukt.php">Dodaj produkty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./zamowienia.php">Zamówienia</a>
                        </li>
                        </div>
                        </div> 
                    </ul>
</nav>

<div class="container">

    <div class="row" >
        <div class="col-12">
            <div class="d-flex my-4" style="justify-content:space-between; align-items:center">

                <div class="newProd">
                    <a href="./dodajProdukt.php">
                        <span class="badge badge-success p-2 mr-2" style="font-size:17px;">+ Dodaj produkt</span>
                    </a>
                </div>

                <div class="md-form active-cyan" style="width:300px">
                    <input class="form-control" type="text" placeholder="Wyszukaj produkt..." aria-label="Search">
                </div>

            </div>
        </div>
        
        
    </div>

    <div class="row">
        <div class="col-12 mt-3 mb-4">
        
        <div class="topnav">
        <a href="javascript:void(0);" onclick="myFunction()">Filtry</a>
        
  <div id="filter">

    <div class="custom-select" style="width:200px;">
        <select>
        <option value="0">Data rosnąco</option>
        <option value="1">Data malejąco</option>
        <option value="2">Cena rosnąco</option>
        <option value="3">Cena malejąco</option>
        <option value="4">Nazwa a-z</option>
        <option value="5">Nazwa z-a</option>
        </select>
    </div>
  </div>
  
</div>

    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h4>Produkty</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
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
                        <tr> 
                            <td scope="row">1</td>
                            <td scope="col"><img class="img-fluid" style="width:40px; height:40px;" src="a.jpg"></td>
                            <td scope="row"><a href="produkt.php">GIT1</a></td>
                            <td scope="row">Gitara akustyczna</td>
                            <td scope="row">2000</td>
                            <td scope="row">5</td>
                            <td scope="row">15kg</td>
                            <td scope="row">Gitary akustyczne</td>
                            <td scope="row">Fender</td>

                        </tr>
                        </tbody>
                        <table>
        </div>
    </div>
                



</div>

<script>
    function myFunction() {
  var x = document.getElementById("filter");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
    </script>
    
</body>
</html>