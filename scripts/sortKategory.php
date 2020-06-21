<?php
<<<<<<< HEAD
    require_once './scripts/connect.php';
    $sql="SELECT kategoria_id, kategoria FROM kategoria"; 
    $result = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)) {
        echo<<<OPTIONS
        <option value="$row[kategoria_id]">$row[kategoria]</option>
OPTIONS; 
    }
=======
   require_once './scripts/connect.php';
  $sql="SELECT kategoria_id, kategoria FROM kategoria"; 
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
echo<<<OPTIONS
    <option value="$row[kategoria_id]">$row[kategoria]</option>
OPTIONS;
}
>>>>>>> 4b30422d652f3aae52f7bb9efc385064977b8bfa
?>