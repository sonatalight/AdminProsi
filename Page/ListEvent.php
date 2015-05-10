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
        	include "../GenericPage/Header.php";
			include "../GenericPage/PageCss.php";
			include "../GenericPage/Query.php";
        ?>   
    </head>
    <body>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Event</h1>
                   
                </div>
                 <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Id Event</th>
                                            <th>Nama Event</th>
                                            <th>Nama Partner</th>
											<th>Tanggal</th>
											<th>Waktu</th>
                                            <th>Kota</th>
                                            <th>Status</th>												
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										$row = get("event","select * from Event");
										for($i = 0; $i < sizeof($row) ; $i++){
										echo "<tr>";
											$id = $row[$i]["Id_Event"];
											echo "<td>" .$row[$i]["Id_Event"]. "</td>";
											echo "<td>" .$row[$i]["Nama_Event"]. "</td>";		
											echo "<td>" .$row[$i]["Id_Partner"]. "</td>";
											echo "<td>" .$row[$i]["Tanggal_Mulai"]. "-".$row[$i]["Tanggal_Selesai"]." </td>";
											echo "<td>" .$row[$i]["Jam_Mulai"]. "-".$row[$i]["Jam_Selesai"]." </td>";
											echo "<td>" .$row[$i]["Id_Kota"]. "</td>";
											echo "<td>"; 
											if($row[$i]["Status"]==0){echo "PENDING";}else{echo "APPROVED";} 
											echo "</td>";
											echo"</tr>";
										}
										?>
                                    </tbody>
                                </table>
                            </div>
            </div>
        </div>
        <?php
         include "../GenericPage/PageJs.php";  
        ?>
           <!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>


        <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable();
    });
   
    </script>
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
