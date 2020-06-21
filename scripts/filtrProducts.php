<?php
    session_start();
    // echo $_POST['sort'];
    $sortType = $_POST['sort'];

    switch ($sortType) {
        case 'Cena rosnąco':
            $_SESSION['sortType']="cena";
            break;
        case 'Cena malejąco':
            $_SESSION['sortType']="cena DESC";
            break;
        case 'Nazwa a-z':
            $_SESSION['sortType']="nazwa";
            break;
        case 'Nazwa z-a':
            $_SESSION['sortType']="nazwa DESC";
            break;
        
        
    }
    header('location: ../asortyment.php');
?>