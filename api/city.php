<?php
	require_once "conn.php";
    require_once "validate.php";
	
	if(isset($_GET['country_name'])){
		$sql = "select city_id, city_name from city where country_id=(select country_id from country where country_name='".$_GET['country_name']."')";
		if(!$conn->query($sql)){
		 echo "Error in executing query.";
    }
	else{
        $result =$conn->query($sql);
		if($result ->num_rows > 0){
			$return_arr['city'] = array();
			while($row = $result -> fetch_array()){
				array_push($return_arr['city'], array(
				'city_id' => $row['city_id'],
				'city_name' => $row['city_name']
			));
		}
		echo json_encode($return_arr);		
    }
	}
	}
?>