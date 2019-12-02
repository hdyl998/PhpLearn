<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <title>Your Feedback</title>
    </head>
    <body>

        <p >

            <?php
            ini_set('display_errors', 1);
//            error_reporting(0);//全部错误不报告
//            error_reporting(E_ALL);//报告全部错误
//            error_reporting(E_ALL&~E_NOTICE);//全部错误除了通知类型
//            
//            error_reporting(E_ALL|E_STRICT);//显示有有可能出现的问题！
            ?>
            <?php
            $title = $_POST['title'];
            $name = $_POST['name'];
            $response = $_POST['response'];
            $comments = nl2br(wordwrap($_POST['comments'],10));

            //htmlentities  htmlspecialchars
            //strip_tags
            
            $nameEncode= urlencode($name);
            print "<p>Click <a href=\"thanks.php?name=$nameEncode\">here $nameEncode <br/>$name </a> to continue.</p>";
            
            printf("Thank you,$title $name,for you comment.<br/> You stated that you found this example to be '$response' and added</br> $comments")
            ?>


        </p>
    </body>
</html>