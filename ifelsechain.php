<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <?php
    
    // 100 >= 10%; 500>=15%; 1000>=20%

    $product_total_price = 500;


    if( $product_total_price >=1000){
        $discount =  $product_total_price * 20/100; 

        $total_after_discount= $product_total_price - $discount;



        echo    "Product Total Price: $product_total_price </br>";
        echo "Discount: $discount </br>";
        echo "Total After Discount:  $total_after_discount";
    }

    elseif($product_total_price >=500){

        $discount =  $product_total_price * 15/100; 

        $total_after_discount= $product_total_price - $discount;


        echo    "Product Total Price: $product_total_price </br>";
        echo "Discount: $discount </br>";
        echo "Total After Discount:  $total_after_discount";
    }
    
    elseif($product_total_price >=100){

        $discount =  $product_total_price * 10/100; 

        $total_after_discount= $product_total_price - $discount;



        echo    "Product Total Price: $product_total_price </br>";
        echo "Discount: $discount </br>";
        echo "Total After Discount:  $total_after_discount";
    }
    else{
        echo "Product Total Price: $product_total_price </br>";
        echo "No discount";
    }
    
    
    
    ?>
</body>
</html>