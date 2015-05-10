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
                <div class="col-lg-12">
                    <h1 class="page-header">Register Partner</h1>
                    <form role="form">
                        <div class="form-group">
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <th>
                                        <label>Name Partner</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="NamaPartner" type="text" placeholder="" >
                                    </th>
                                   
                                </tr>
                                <tr>
                                    <th>
                                        <label>No Rekening</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="RekeningID" type="text" placeholder="" >
                                    </th>                                   
                                </tr>
								<tr>
                                    <th>
                                        <label>Password</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="RekeningID" type="password" placeholder="" >
                                    </th>                                   
                                </tr>                                         
                                <tr>
                                    <th>
                                        <label>Alamat</label>
                                    </th>
                                    <th>
                                       <textarea class="form-control" rows="3"></textarea>
                                    </th>                                   
                                </tr>
								 <tr>
                                    <th>
                                        <label>Email</label>
                                    </th>
                                    <th>
                                       <input class="form-control" id="RekeningID" type="text" placeholder="">
                                    </th>                                   
                                </tr>
                                <tr>
                                    <th>
                                        <label>Telepon</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="TelpPartner" type="text" placeholder="" >
                                    </th>                                   
                                </tr>                               
                                <tr>
                                    <th>
                                        <label>Kota Partner</label>
                                    </th>
                                    <th>
                                       <select class="form-control">                                                
                                                <option>Bandung</option>
                                                <option>Jakarta</option>
                                                <option>Jogja</option>
                                                <option>Semarang</option>
                                            </select>
                                    </th>                                   
                                </tr>
                                 <tr>
                                    <th>                                        
                                    </th>
                                    <th>                                        
                                        <button type="submit" class="btn btn-default pull-right">Register Partner</button>
                                    </th>                                   
                                </tr>                       
                            </table>
                            </div>
                        </div>            
                    </form>
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
