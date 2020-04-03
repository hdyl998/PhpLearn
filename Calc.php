<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function calculate_total($quantity, $price) {
            $total = $quantity * $price;
            $total = number_format($total, 2);
            return $total;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            if (is_numeric($quantity) AND is_numeric($price)) {
                $total = calculate_total($quantity, $price);
                print "<br/>Your total comes to " . $total;
            } else {
                print "输入的数值不对";
            }
        }
        ?>

        <form
            action="Calc.php" method="post">
            <p> Quantity:<input type="text" name="quantity" size="3" /></p>
            <p> Price:<input type="text" name="price" size="5"/></p>
            <input type="submit" name ="submit" value="Calculate!"/>
        </form>



    </body>
</html>
