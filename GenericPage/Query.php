<?php
	include "connection.php";	
	
	$PARTNER_ARRAY = array("Id_Partner","Rekening","Nama_Partner","Password","Alamat","Email","Id_Kota");
	
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
		
		$i = 0;
		$result = array();
				
		if($type == "partner"){
<<<<<<< HEAD
			$id = "Id_Partner";
			$array = $PARTNER_ARRAY;
		}else if($type == "telpPartner"){
			$id = "Id_Partner";
			$array = array("Id_Partner","No_Telepon");
=======
			$id = "id_partner";
			$array = $PARTNER_ARRAY;
>>>>>>> origin/master
		}
		
		$arrayres = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($arrayres)){
				$curr = $row[$id];
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
			$id = getSingleValue("SELECT max(`Id_Partner`) as maxid FROM Partner");
			$id++;
			
			$sql = "INSERT INTO `partner`(`Id_Partner`, `Rekening`, `Nama_Partner`, `Password`, `Alamat`, `Email`, `Id_Kota`) VALUES ('".$id."','" .$data[0]. "','" .$data[1]. "', password ('" .$data[2]. "'),'" .$data[3]. "','" .$data[4]. "','" .$data[5]. "')";
			mysqli_query($conn,$sql);
			return true;
			 
		}		
	}
	
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
		
		global $conn;	
		$result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
		return $result[$field];
	}	
<<<<<<< HEAD
	
	function runSQL($sql) {
		
		global $conn;	
		mysqli_query($conn,$sql);
		return true;
	}	
=======
>>>>>>> origin/master
?>