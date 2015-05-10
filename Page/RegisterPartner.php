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
			include "../GenericPage/Query.php";
			include "../GenericPage/Header.php"; 
			
			if(isset($_POST["REGISTER"])){
				$data[0] = $_POST["REKENING"];
				$data[1] = $_POST["NAMA"];
				$data[2] = $_POST["PASSWORD"];
				$data[3] = $_POST["ALAMAT"];
				$data[4] = $_POST["EMAIL"];
				$data[5] = $_POST["KOTA"];			
				insert("partner",$data);	
				$id = getSingleValue("SELECT max(`Id_Partner`) as res FROM Partner");
				runSQL("INSERT INTO `telppartner`(`Id_Partner`, `No_Telepon`) VALUES ('" .$id. "','" .$_POST["TELEPON"]. "')");
			}
			?>			
    </head>
    <body>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Register Partner</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="table-responsive">
                                <table class="table">
                                <tr>
                                    <th>
                                        <label>Name Partner</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="NamaPartner" name="NAMA" required="required" type="text" placeholder="" >
                                    </th>
                                   
                                </tr>
                                <tr>
                                    <th>
                                        <label>No Rekening</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="RekeningID" name="REKENING" required="required" type="text" placeholder="" >
                                    </th>                                   
                                </tr>
								<tr>
                                    <th>
                                        <label>Password</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="RekeningID" name="PASSWORD" required="required" type="password" placeholder="" >
                                    </th>                                   
                                </tr>                                         
                                <tr>
                                    <th>
                                        <label>Alamat</label>
                                    </th>
                                    <th>
                                       <textarea class="form-control" name="ALAMAT" required="required" rows="3"></textarea>
                                    </th>                                   
                                </tr>
								 <tr>
                                    <th>
                                        <label>Email</label>
                                    </th>
                                    <th>
                                       <input class="form-control" id="RekeningID" name="EMAIL" required="required" type="text" placeholder="">
                                    </th>                                   
                                </tr>
                                <tr>
                                    <th>
                                        <label>Telepon</label>
                                    </th>
                                    <th>
                                        <input class="form-control" id="TelpPartner" name="TELEPON" required="required" type="text" placeholder="" >
                                    </th>                                   
                                </tr>                               
                                <tr>
                                    <th>
                                        <label>Kota Partner</label>
                                    </th>
                                    <th>
                                       <select class="form-control" name="KOTA">                                                
                                                <option value=1>Bandung</option>
                                                <option value=2>Jakarta</option>
                                                <option value=3>Jogja</option>
                                                <option value=4>Semarang</option>
                                            </select>
                                    </th>                                   
                                </tr>
                                 <tr>
                                    <th>                                        
                                    </th>
                                    <th>                                        
                                        <button type="submit" class="btn btn-default pull-right" name="REGISTER">Register Partner</button>
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
