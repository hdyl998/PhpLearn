<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" charset="utf-8"/>
        <title>哈哈</title>
        <style type="text/css" media="screen">
            .error{color:red;}
        </style>
    </head>

    <body

        >

        <h1>Registeration Results</h1>
        <?php

        function pintText($text) {
            print "<p class=\"error\">$text</p>";
        }

        $okay = true;
        if (empty($_POST['email'])) {
            pintText("Enter your email address");
            $okay = false;
        }

        if (empty($_POST['password'])) {
            pintText("Enter your password");
            $okay = false;
        }

     

        $aaa = strcmp($_POST['password'], $_POST['confirm']);
        
  
        if ($aaa) {
            pintText("两次密码输入不一致");
            $okay = false;
        }
        

        if((!isset($_POST['terms']))){
            pintText("You must accept the terms.");
        }
        
        print $aaa . "text";
        
        switch($_POST['color']){
        case 'red':
            $color_type='primary';
            break;
        case 'green':
            $color_type = 'primary';
            break;
        default :
            pintText("Select your favorite color");
            $okay=false;
            break;
        }
        

        if ($okay) {
            print "<br/>you have been successfully registered!".$color_type;
        }
        ?>
    </body>

</html>