<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body> 
<form action="Calculator.php" method="post">
     
     <input type="number" name="num1" require>
     <input type="number" name="num2" require >
    
   <button type="submit" name="Addition">Addition</button>
   <button type="submit" name="Subtraction">Subtraction</button>
   <button type="submit" name="Multiplication">Multiplication</button>
   <button type="submit" name="Division">Division</button>  
</form>

<?php
     if(isset($_POST["Addition"])){
          $total = $num1 = $_POST['num1'] + $num2 =$_POST['num2'];

      if($total >= 0){ echo $total ; } else{echo"Null";}

     }

   if(isset($_POST["Subtraction"])){
         
     $total = $num1 = $_POST['num1'] - $num2 =$_POST['num2'];
      if($total >= 0){ echo $total ; } else{echo "Null" ;}

    }
     if(isset($_POST["Multiplication"])){
     
      $total = $num1 = $_POST['num1'] * $num2 =$_POST['num2'];
       if($total >= 0){ echo $total ;} else{echo "Null";}

     }
     if(isset($_POST["Division"])){
     
          $total = $num1 = $_POST['num1'] / $num2 =$_POST['num2'];
       if( $total >= 0 ){ echo $total ;} else{echo "Null";}

     }
?>
</body>
</html>