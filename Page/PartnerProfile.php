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
            <class="row">
                <div class="col-lg-4">
                    <h2><b> Nama Partner</b><h2>
                            <img class="img-thumbnail" src="http://placehold.it/400x400" alt="">      
                            </div>
                            <div class="col-lg-5">
                                <h3><b>ID Partner</b></h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4>No cp</h4>
                                        <input class="form-control" type="text" disabled="">
                                        <h4>Tanggal mendaftar</h4>
                                        <input class="form-control" type="date" disabled="">
                                        <h4>ID</h4><input class="form-control" type="text" disabled="">
                                        <h4>Password</h4><input class="form-control" type="text" disabled="">
                                    </div>
                                    <div class="col-lg-6">
                                        <h4> Alamat  </h4>
                                        <textarea class="form-control" rows="3" disabled></textarea>

                                        <h4>Alamat email</h4>
                                        <input class="form-control" type="text" disabled="">
                                        <h4>Billing addres </h4>
                                        <input class="form-control" type="text" disabled="">
                                        <h4>Kota </h4>
                                        <select class="form-control" disabled="">
                                                
                                                <option>bandung</option>
                                                <option>jakarta</option>
                                                <option>jogja</option>
                                                <option>Semarang</option>
                                                <option>bali</option>
                                            </select>




                                    </div>
                                </div>

                                <div class="row">

                                    <div class="table table-striped">


                                        <table class="table">

                                            <thead>
                                                <tr>
                                                    <th>Nama event</th>
                                                    <th>tanggal mulai</th>
                                                    <th>tanggal selesai</th>
                                                    <th>tempat</th>
                                                    <th>status</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                            <th>pensi sma 3</th>
                                            <th>12/15/2014</th>
                                            <th>12/16/2014</th>
                                            <th>sabugga</th>
                                            <th>on sale</th>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <button class="pull-right button  btn-primary">edit</button> 
                                <button class="pull-right button btn-danger">disable</button>
                                <button class="pull-right button btn-primary">back</button>
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




