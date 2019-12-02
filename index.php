<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>测试</title>
    </head>
    <body>
        <ul>
            <li><a href="hello.php?name=test&age=1">Test</a></li>
            <li><a href="hello.php?name=test2&age=2">Test2</a></li>
            <li><a href="hello.php?name=test3&age=3">Test3</a></li>
            <li><a href="hello.php?name=test4&age=4">Test4</a></li>
        </ul>
        <form action="handle_form.php" method="post">
            <p>Name:
                <select name="title">

                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                </select>
                <input type="text" name="name" size="20" />
            </p>   

            <p>Email Address:<input type="text" name="email" size="20"></p>

            <p>
                Response:This is...
                <input type="radio" name="response" value="excellent" />excellent
                <input type="radio" name="response" value="okey" />okey
                <input type="radio" name="response" value="boring" />boring
            </p>
            <p>Comments:<textarea name="comments" rows="5" cols="30"></textarea></p>

            <input type="submit" name="submit" value="Send My Feedback" />
        </form>


        <form action="handle_calc.php" method="post">

            <p>Price:<input type="text" name="price" size="5"/></p>
            <p>Quantity:<input type="text" name="quantity" size="5"/></p>
            <p>Discount:<input type="text" name="discount" size="5"/></p>
            <p>Tax:<input type="text" name="tax" size="3"/>(%)</p>

            <p>Shipping method:<select name="shipping">
                    <option  value="5.00">Slow and steady</option>
                    <option  value="8.95">Put a move on it.</option>  
                    <option  value="19.36">I need it yesterday!</option>  
                </select></p>

            <p>Number of payments to make:<input type="text" name="payments" size="3"/></p>
            <input type="submit" name="submit" value="Calculate！" />
        </form>

        <form action="handle_reg.php" method="post">
            <p>
                Email Address:<input type="text" name="email" size="30"/>
            </p>
            <p>Password:<input type="password" name="password" size="20"/></p>
            <p>Confirm Password:<input type="password" name="confirm" size="20"/></p>

            <p>
                Year You Were Born:<input type="text" name="year" value="YYYY" size="4"/>
            </p>
            <p>
                Favorite Color:
                <select name="color">
                    <option value="">Pick One</option>
                    <option value="red">Red</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="blue">Blue</option>
                </select>
            </p>

            <p>
                Date Of Birth:
                <select name="month">
                    <option value="">Select One</option>
                    <?php
                        for($i=1;$i<13;$i++){
                            print "<option value='$i'>$i</option>";
                        }
                    ?>
                    
                </select>
                
            </p>
            
            <p>
             <input
                    type="checkbox" value="Yes" name="terms"
                    />
                I agree to the terms
            </p>
            <input type="submit" name="submit" value="Reigster"/>


        </form>


        <?php
        $n1 = rand(1, 3);
        $n2 = rand(1, 3);
        $n3 = rand(1, 3);
        print "Your lucky numbers are:<br/>$n1<br/>$n2<br/>$n3<br/>";

        print abs(-10);
        print "<br/>";
        print ceil(18.1);
        print "<br/>";
        print floor(18.1);

        $ccc = "\nabc\n\tdef\r\tdkfjakdsf";
        print $ccc;
        print nl2br($ccc);

        $name = "12345 6789";

        $last = strtok($name, ' '); //拆分字符串
        $string = "1234567891";

        $sub = substr($string, -3); //按索引切割字符串
        print "-----------<br/>";
        print $last;
        print "-----------<br/>";
        print $sub;

        print "-----------<br/>";
        print str_word_count($string, 0, "8");

        print "-----------<br/>" . strcmp("1", "2");
        print "-----------<br/>" . strcasecmp("A", "a");

        print "-----------<br/>" . strstr("AaaaaabbbA", "b", true);

        print "-----------<br/>" . strpos("AaaaaabbbA", "b");

        print "-----------<br/>" . str_replace("AaaaaabbbA", "b");

        $varfff = 'something';
        if (isset($varfff, $varfff2)) {
            print "-----------已定义<br/>";
        } else {
            print "-----------没定义<br/>";
        }
        ?>

    </body>
</html>
