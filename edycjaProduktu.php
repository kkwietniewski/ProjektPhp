<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .img-fluid{
            width:70px; 
            height:70px; 
        }

        input{
            width:250px; 
        }

        .input-group-text{
            width:100px; 
          
        }

        .opt{
            font-size:15px; 
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
  
<div class="container">
<div class="card my-4 col-6 offset-3 p-4 bg-light">
        <div class="row">
            <div class="col-3">
                <img class="img-thumbnail" src="./images/a.jpg">
            </div>
            <div class="col-9 d-flex align-items-center">
                <h5 class="display-4">Gitara basowa</h5>
            </div>
        </div>
<form action="#" method="post">
        
<div class="row mt-4">
    <div class="col">
        
    <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Miniatura</span>
                </div>
                <input type="file" class="form-control " name="obrazek-url" id="obrazek-url" >
                </div>
  </div>
    </div>

    <div class="row">
    <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Symbol</span>
                </div>
                <input type="text" class="form-control" value="BA1" name="symbol" id="symbol">
            </div>
        </div>
    </div>

   <div class="row">
   <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nazwa</span>
                </div>
                <input type="text" class="form-control" value="Gitara basowa" name="nazwa" id="nazwa">
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Kategoria</span>
                </div>
                <input type="text" class="form-control" value="Gitara" name="kategoria" id="kategoria">
            </div>
        </div>
    </div>

   <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Producent</span>
                </div>
                <input type="text" class="form-control" value="Fender" name="producent" id="producent">
            </div>
        </div>
    </div>

   
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Cena</span>
                </div>
                <input type="text" class="form-control" value="2000.00" name="cena" id="cena">
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Stan</span>
                </div>
                <input type="text" class="form-control" value="Dostępny" name="stan" id="stan">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Waga</span>
                </div>
                <input type="text" class="form-control" value="15kg" name="waga" id="waga">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3 d-flex justify-content-start align-items-baseline">
            <input type="radio" id="bestseller" name="bestseller">
        <label for="bestseller">Bestseller</label>
        </div>
        <div class="col-3 d-flex justfy-content-start align-items-baseline">
        <input type="radio" id="nowosc" name="nowosc" >
        <label for="nowosc">Nowość</label>
        </div>
        <div class="col-3 d-flex justify-content-end align-items-baseline">
        <input type="radio" id="promocja" name="promocja" >
        <label for="bestseller">Promocja</label>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-success">Potwiedź</button>
            </div>
        </div>
    
  </form>      

</div>  


</div>

</body>
</html>