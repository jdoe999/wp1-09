<?php 

$items = $_POST['items'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		if((in_array("Krumpac", $items)) 
			&& in_array("Pytel", $items)
			&& in_array("Mrtvola", $items)
			&& in_array("Dodavka", $items)  ){

			echo "Dokonala vrazda";
	}
	elseif((in_array("Dodavka", $items))
			&& in_array("Mrtvola", $items) ) {

	echo "Mas dodavku a mrtvolu";	

	}

	elseif((in_array("Dodavka", $items))
			&& in_array("Mrtvola", $items) ) {

	echo "Mas peknou kombinaci ale budes muset hrabat rukama.";	

	}

	elseif((in_array("Pytel", $items))
			&& in_array("Mrtvola", $items) ) {

	echo "Mas mrtvolu a pytel, sezen si dodavku";	

	}


	elseif((in_array("Krumpac", $items))
			&& in_array("Pytel", $items) ) {

	echo "Mas jen krumpac a pytel";	

	}

	elseif((in_array("Krumpac", $items)))
	{

	 	echo "Mas jen krumpac";
	}
	else {

		echo "Kombinace nedává smysl";
	}

	?>

</body>
</html>