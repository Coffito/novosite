<?php

	header('content-type: application/json; charset=iso-8859-1');
	
	$callback = $_GET["callback"];
	$searchTerm = '%'.$_GET["param"].'%';
		
	$con=mysqli_connect('mysql01.coffito2.hospedagemdesites.ws', 'coffito21', 'crefitonet@', 'coffito21');
	
	/* check connection */
	if (mysqli_connect_errno()) {
		error_log("Connect failed: %s\n" + mysqli_connect_error(), 0);
		exit();
	}
	
	if ($searchTerm) {
			
			$sql = "SELECT SQL_CALC_FOUND_ROWS content.title, content.id FROM coffito21.ghtpa_categories as cat INNER JOIN 
			coffito21.ghtpa_content as content ON cat.id = content.catid WHERE cat.id in (16,17,18,19,20) and (content.title like '%$searchTerm%' or content.fulltext like '%$searchTerm%' or content.introtext like '%$searchTerm%' )";
						
			
	} else {
	
			$sql = "SELECT SQL_CALC_FOUND_ROWS content.title, content.id FROM coffito21.ghtpa_categories as cat INNER JOIN 
			coffito21.ghtpa_content as content ON cat.id = content.catid WHERE cat.id in (16,17,18,19,20)";
	}
		
	$result = mysqli_query($con, $sql);
	
	// If you are using MySQL use SQL_CALC_FOUND_ROWS in your main queries (above)
	// Now to get the total records available use the FOUND_ROWS() function (below)
	$resultNumRows = mysqli_query($con, 'SELECT FOUND_ROWS() as foundRows');
	$rowFoundRows = mysqli_fetch_array($resultNumRows);
	$iFoundRows = $rowFoundRows['foundRows'];
    error_log("$access --> Found rows: $iFoundRows", 0);		
		
    $cont = 0;	
	$json = "{articles: [ ";
	while($row = mysqli_fetch_array($result)) {
		$cont = $cont + 1;
		$rowid = $row['id'];
		$rowtitle = $row['title'];
		if ($cont == 1) {			
			$json = $json . "{\"id\":\"$rowid\",\"title\":\"$rowtitle\"}";
		} else {
		 	$json = $json . ",{\"id\":\"$rowid\",\"title\":\"$rowtitle\"}";
		}		
	}
	$json = $json . "]}";
	
	
	/* close connection */
	$con->close();
	
	error_log("$access --> $callback($json)", 0);
	echo $callback . "(" . $json . ")";
?>