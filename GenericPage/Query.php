<?php
	include "connection.php";	
	
	$PARTNER_ARRAY = array("Id_Partner","Rekening","Nama_Partner","Password","Alamat","Email","Id_Kota");
<<<<<<< HEAD
	$EVENT_ARRAY = array("Id_Event","Id_Partner","Nama_Event","Alamat","Tanggal_Mulai","Tanggal_Selesai","Jam_Mulai","Jam_Selesai","Waktu_Approve","Waktu_Upload","Status","Id_Kota");
	$TIKET_ARRAY = array("Id_JenisTiket","Tipe", "Id_Event", "Kuota", "Harga");
=======
>>>>>>> origin/master
	
	function login($type,$username,$passw){
		
		global $conn;	
		if($type == "pegawai"){
			$sql = "Select * from Pegawai where Username = '" .$username. "' and Password = Password('" .$passw. "')"; 
		}else{
			$sql = "Select * from Member where Username = '" .$username. "' and Password = Password('" .$passw. "')";
		}
		
		if(mysqli_num_rows(mysqli_query($conn,$sql)) > 0){
			$arrayres = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($arrayres);
			if($type == "pegawai"){
				return $row["Id_Pegawai"];
			}else{
				return $row["Id_Member"];
			}
		}
		return 0;		
	}
	
	function get($type,$sql){
	
		global $conn;
		global $PARTNER_ARRAY;
<<<<<<< HEAD
		global $EVENT_ARRAY;
		global $TIKET_ARRAY;
=======
>>>>>>> origin/master
		
		$i = 0;
		$result = array();
				
		if($type == "partner"){
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
			$id = "Id_Partner";
			$array = $PARTNER_ARRAY;
		}else if($type == "telpPartner"){
			$id = "Id_Partner";
			$array = array("Id_Partner","No_Telepon");
<<<<<<< HEAD
		}else if($type == "event"){
			$id = "Id_Event";
			$array = $EVENT_ARRAY;
		}else if($type == "tiket"){
			$id = "Id_JenisTiket";
			$array = $TIKET_ARRAY;
=======
=======
			$id = "id_partner";
			$array = $PARTNER_ARRAY;
>>>>>>> origin/master
>>>>>>> origin/master
		}
		
		$arrayres = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($arrayres)){
				$curr = $row[$id];
<<<<<<< HEAD
				for($j = 0; $j< sizeof($array); $j++){
					if($array[$j] == "Id_Partner" && $type == "event"){
						$result[$i][$array[$j]]=mysqli_fetch_row(mysqli_query($conn,"select Nama_Partner from `Partner` where Id_Partner = '".$row[$array[$j]]."'"))[0];
					}
					else if($array[$j] == "Id_Event" && $type == "tiket"){
						$result[$i][$array[$j]]=mysqli_fetch_row(mysqli_query($conn,"select Nama_Event from `Event` where Id_Event = '".$row[$array[$j]]."'"))[0];
					}
					else if($array[$j] == "Id_Kota"){
						$result[$i][$array[$j]]=mysqli_fetch_row(mysqli_query($conn,"select Nama_Kota from `Kota` where Id_Kota = '".$row[$array[$j]]."'"))[0];
					}
					else{
						$result[$i][$array[$j]] = $row[$array[$j]];
=======
<<<<<<< HEAD
				for($j = 0; $j< sizeof($array); $j++){
					if($array[$j] == "id_kota"){
						$result[$i][$array[$j]] = mysqli_fetch_row(mysqli_query($conn,"select Nama_Kota from `Kota` where Id_Kota = '".$row[$array[$j]]."'"));
					}
					else{
						$result[$i][$array[$j]] = $row[$array[$j]];
=======
				for($j = 0; $i< sizeof($array); $j++){
					if($array[$j] == "id_kota"){
						$result[$i][$array[$j]] = mysqli_fetch_row(mysqli_query($conn,"select Nama_Kota from `Kota` where Id_Kota = '".$row[$j]."'"));
					}
					else{
						$result[$i][$array[$j]] = $row[$j];
>>>>>>> origin/master
>>>>>>> origin/master
					}
				}
				$i++;		
			}	
		
		return $result;
	}
	
	function insert($type,$data){
	
		global $conn;
		global $PARTNER_ARRAY;
		
		if($type == "partner"){
			
<<<<<<< HEAD
			$id = getSingleValue("SELECT max(`Id_Partner`) as res FROM Partner");
=======
<<<<<<< HEAD
			$id = getSingleValue("SELECT max(`Id_Partner`) as maxid FROM Partner");
>>>>>>> origin/master
			$id++;
			
			$sql = "INSERT INTO `partner`(`Id_Partner`, `Rekening`, `Nama_Partner`, `Password`, `Alamat`, `Email`, `Id_Kota`) VALUES ('".$id."','" .$data[0]. "','" .$data[1]. "', password ('" .$data[2]. "'),'" .$data[3]. "','" .$data[4]. "','" .$data[5]. "')";
			mysqli_query($conn,$sql);
			return true;
			 
		}		
	}
	
<<<<<<< HEAD
	function getSingleValue($sql, $field="res") {
=======
	function getSingleValue($sql, $field="maxid") {
=======
			$id = getSingleValue($conn,"SELECT max(`Id_Partner`) as maxid FROM Partner");
			$id++;
			
			$sql = "INSERT INTO `partner`(`Id_Partner`, `Rekening`, `Nama_Partner`, `Password`, `Alamat`, `Email`, `Id_Kota`) VALUES ('".$id."','" .$data[0]. "','" .$data[1]. "','" .$data[2]. "','" .$data[3]. "','" .$data[4]. "','" .$data[5]. "')";
			mysqli_query($conn,$sql);
			return true;
			 
		}
	}
	
	function getSingleValue($conn, $sql, $field="maxid") {
>>>>>>> origin/master
>>>>>>> origin/master
		
		global $conn;	
		$result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
		return $result[$field];
	}	
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
	
	function runSQL($sql) {
		
		global $conn;	
		mysqli_query($conn,$sql);
		return true;
	}	
<<<<<<< HEAD
=======
=======
>>>>>>> origin/master
>>>>>>> origin/master
?>