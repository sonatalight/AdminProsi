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
        <div id="page-wrapper">
        <div class="row">
                    <div class="col-lg-6">
                        <h4>Nama Patner</h4>
                        <h5>Email</h5>
                        <h4>Judul</h4>
                        <input type="text" class="form-control" rows="5"><br>
                        <h4>Keluhan dan saran</h4>
                        <textarea rows="7" class="form-control" ></textarea>
                        <br>
                        
                        <a class="btn btn-primary " >read</a> 
                        
                        <a class="btn btn-primary ">resolve</a>
                     </div>
                    </div>
        </div>
        <?php
         include "../GenericPage/PageJs.php";  
        ?>
        <script>
        var Logintype="1";
        
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
