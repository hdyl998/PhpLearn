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
        // put your code here
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(move_uploaded_file($_FILES['the_file']['tmp_name'],"../{$_FILES['the_file']['name']}")){
              print "the file has been uploaded upload";
            }
             else {
              print 'error' . $_FILES['the_file']['error'];
            }
        }
        ?>
        
        <form action="upload_file.php" enctype="multipart/form-data" method="post">
            Upload a file using this form:
            <br/>
            <input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
            <br/>
            <input type="file" name="the_file"/>
            <br/>
            <input type="submit" name="submit" value="Upload This File" />
        </form>
    </body>
</html>
