<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>




        <?php 


         if(isset($_GET['msg'])){
            echo $_GET['msg'];
         }
            
           

        ?>

    </h1>
    
        <form action="invoice.php" method="post"> 

            <label for="price">Product Price:</label>
            <input type="text" id="price" name="price" required> </br></br>

            <label for="quantity">Product Quantity:</label>
            <input type="text" id="quantity" name="quantity" required> </br></br>

        <input type="submit" value="Save">

        </form>

        <h1>  Total price

<?php 

    echo $_GET['totalprice'];

?>

</h1>


</body>
</html>