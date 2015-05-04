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
                    <h1 class="page-header">Register Patner</h1>
                    <form role="form">
                        <div class="form-group">
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <th>
                                        <label>ID Partner </label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="RegisterID" type="text" placeholder="" disabled>
                                    </th>
                                    <th>
                                        <button class="btn btn-default">Generate ID</button>
                                    </th>
                                    
                                </tr>
                                <tr>
                                    <th>
                                        <label>ID Rekening</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="RekeningID" type="text" placeholder="" >
                                    </th>
                                   
                                </tr>
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
                                        <label>Alamat Partner</label>
                                    </th>
                                    <th>
                                       <textarea class="form-control" rows="3"></textarea>
                                    </th>
                                   
                                </tr>
                                <tr>
                                    <th>
                                        <label>NO Cp Partner</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="NamaPartner" type="text" placeholder="" >
                                    </th>
                                   
                                </tr>
                                <tr>
                                    <th>
                                        <label>Email Partner</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="EmailPartner" type="email" placeholder="" >
                                    </th>
                                   
                                </tr>
                                <tr>
                                    <th>
                                        <label>Kota Partner</label>
                                    </th>
                                    <th>
                                       <select class="form-control">
                                                
                                                <option>bandung</option>
                                                <option>jakarta</option>
                                                <option>jogja</option>
                                                <option>Semarang</option>
                                                <option>bali</option>
                                            </select>
                                    </th>
                                   
                                </tr>
                                 <tr>
                                    <th>
                                        
                                    </th>
                                    <th>
                                        
                                        <button type="submit" class="btn btn-default pull-right">Register Patner</button>
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
