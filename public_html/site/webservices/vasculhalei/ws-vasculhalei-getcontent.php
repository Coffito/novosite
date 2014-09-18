<?php 
	
	header('content-type: application/json; charset=iso-8859-1');
	
	$callback = $_GET["callback"];
	$articleid = $_GET["articleid"];
		
	$mysqli = new mysqli('mysql01.coffito2.hospedagemdesites.ws', 'coffito21', 'crefitonet@', 'coffito21');	
	
	// check connection 
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = $mysqli->prepare("SELECT concat(content.introtext,content.fulltext) FROM  coffito21.ghtpa_content as content WHERE content.id = ?");
	
	$stmt->bind_param('s', $articleid);
	
	// execute prepared statement 
	if (!$stmt->execute()) {
		echo "Execução falhou: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	$out_content = NULL;
	if (!$stmt->bind_result($out_content)) {
		echo "A ligação com os parâmetros de saída falhou: (" . $stmt->errno . ") " . $stmt->error;
	}

    $cont = 0;
	$json = "{";
	while ($stmt->fetch()) {				
		$out_content = str_replace("\"", "\\\"", $out_content);	
		$out_content = str_replace("\r\n", "", $out_content);	
		
		$json = $json . "\"content\":\"$out_content\"";		
		//$json = $json . "\"content\":\"\"";
	}
	$json = $json . "}";
	
	// close statement and connection 
	$stmt->close();
	
	// close connection 
	$mysqli->close();
	echo $callback . "(" . $json . ")";
?>