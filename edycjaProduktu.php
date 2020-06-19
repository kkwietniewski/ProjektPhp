<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .img-fluid{
            width:100px; 
            height:100px; 
        }

        input{
            width:250px; 
        }

    </style>
</head>
<body>

<nav class="navbar-expand-xl navbar-dark bg-dark p-2" >
                    <div class="collapse navbar-collapse" >
                    <div class="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./panelStartowy.php">Panel startowy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./asortyment.php">Asortyment</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="./dodajProdukt.php">Dodaj produkty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./zamowienia.php">Zamówienia</a>
                        </li>
                    </ul>
                        </div>
                        </div> 
</nav>

<div class="container bg-light">
    <div class="row mt-4">
        <div class="col-12">
            <div class="d-flex justify-content-center align-items-center mb-4 mt-4">
                <img class="img-fluid mr-2" src="./a.jpg">
                <h5 class="display-4">Gitara Ibanez </h5>
            </div>
        </div>
    </div>

        <div class="row my-4">
            <div class="col-12 d-flex justify-content-center">
                <!-- <div class="d-flex d-block justify-content-center my-4"> -->
                    <div class="d-inline-block mr-4">
                        <label for="obrazek-url">Nazwa: </label>
                        <input type="text" name="nazwa" id="nazwa">
                    </div>
                    <div class="d-inline-block ml-4">
                        <label for="obrazek-url">Cena: </label>
                        <input type="text" name="cena" id="cena">
                    </div>
            
            </div>
         </div>
        

         <div class="row my-4">
            <div class="col-12 d-flex justify-content-center">
                <!-- <div class="d-flex d-block justify-content-center my-4"> -->
                    <div class="d-inline-block mr-4">
                        <label for="obrazek-url">Symbol: </label>
                        <input type="text" name="symbol" id="symbol">
                    </div>
                    <div class="d-inline-block ml-4">
                        <label for="obrazek-url">Stan: </label>
                        <input type="text" name="stan" id="stan">
                    </div>
            
            </div>
        </div>
        

         


</div>
</body>
</html>