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
        <?php
        include "../GenericPage/PageCss.php";
        ?>
    </head>
    <body>
        <?php
         include "../GenericPage/Header.php";  
        ?>
        
        <?php
         include "../GenericPage/PageJs.php";  
        ?>
         <script>
        var Logintype="0";
        
        if(Logintype == "1"){
            $("#1").hide();
            $("#3").hide();
            
            
        }else if(Logintype == "2"){
            
            $("#4").hide();
            $("#5").hide();
            
            
        }
        
        
        </script>
    </body>
</html>
