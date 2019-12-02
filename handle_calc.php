<html>
    <head>
        <meta charset="UTF-8">
        <title>测试</title>
        <style type="text/css" media="screen">
            .number{font-weight: bold;}
        </style>
    </head>
    <body>
        <?php

        
            $price=$_POST['price'];
            $quantity = $_POST['quantity'];
            $discount = $_POST['discount'];
            $tax = $_POST['tax'];
            $shipping = $_POST['shipping'];
            $payments = $_POST['payments'];
            
            //计算总额
            $total=($price *$quantity+$shipping)-$discount;
            
            $taxrate=$tax/100;
            $taxrate++;
            //纳入税率后的总成本
            $total=$total*$taxrate;
            //计算月付款数
            $monthly=$total/$payments;
            
            //格式化数值，保留2位小数
            $total= number_format($total,2);
            $monthly= number_format($monthly,2);
            
            
            print "<p>You have selected to purchase:<br/>"
            . "<span class=\"number\">$quantity</span>widget(s) at<br/>
                $<span class=\"number\">$price</span>price each plus a<br/>
                $<span class=\"number\">$shipping</span>shipping cost and a<br/>
                <span class=\"number\">$tax</span>percent tax rate.<br/> 
                After your$<span class=\"number\">$discount</span>discount,the total cost is$<span class=\"number\">$total</span>.<br/>
                Divided over<span class=\"number\"$payments</span>monthly payments,that woujfdfalkdf...result=$monthly
                $</p>";
        ?>
        
    </body>
    </html>


