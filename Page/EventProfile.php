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
                    <div class="col-lg-4">
                        <h2><b> Nama Event</b><h2>
                        <img class="img-thumbnail" src="http://placehold.it/400x400" alt="">      
                    </div>
                    <div class="col-lg-5">
                        <h3><b>Nama partner</b></h3>
                        <div class="row">
                        <div class="col-lg-6">
                            <h4>Tanggal Start</h4>
                            <input class="form-control" type="date" disabled="">
                            <h4>Tanggal Selesai</h4>
                            <input class="form-control" type="date" disabled="">
                            <h4>Start</h4><input class="form-control" type="time" disabled="">
                            <h4>end</h4><input class="form-control" type="time" disabled="">
                        </div>
                        <div class="col-lg-6">
                            <h4> Alamat Acara </h4>
                             <textarea class="form-control" rows="3" disabled></textarea>
                             
                             <br>
                             <h4> Kota </h4>
                             <input class="form-control" type="text" disabled="">
                             
                               <br>
                            
                         
                           
                            <a class="btn bg-primary btn-sm btn-block">List Pict</a> 
                            <br>
                            
                            
                            
                         
                        </div>
                        </div>
                        <div class="table table-striped">
                            <table class="table">
                                <thead>
                                    <tr>
                                <th>jenis ticket</th>
                                <th>Harga</th>
                                <th>Kuota</th>
                                <th>status</th>
                                <th>terjual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <th>Regular</th>
                                <th>30000</th>
                                <th>30</th>
                                <th>pre-sale</th>
                                <th>10</th>
                                </tbody>
                            </table>
                            
                        </div>
                        <h4><b>EventNote</b></h4>
                        <textarea class="form-control" rows="3" disable></textarea>
                    </div>
                        
                    <div class="col-lg-3">
                        <h3><b>data Valid</b></h3>
                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Tanggal Start
                                    </label>
                                </div>
                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Tanggal Selesai
                                    </label>
                                </div>
                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value=""> Start
                                    </label>
                                </div>
                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">end
                                    </label>
                                </div>
                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Alamat Acara
                                    </label>
                                </div>
                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">List Pict
                                    </label>
                                </div>
                        
                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Ticket 
                                    </label>
                                </div>
                        <h4><b>Note</b></h4>
                        <textarea class="form-control" rows="3" ></textarea>
                        <h4><b>Status</b></h4>
                        <select name="filter_status">
                                                <option value="*"></option>
                                                <option value="1">OK</option>
                                                <option value="2">pending</option>
                                                <option value="3">Tolak</option>
                                            </select>
                         <h4><b>last check</b></h4>
                         <input type="text" value="" disabled=""><br><br>
                         <a class="btn btn-primary">Save</a> <a class="btn btn-primary">Cancel</a>
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




