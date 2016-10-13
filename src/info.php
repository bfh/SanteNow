<!DOCTYPE=html>
<html>
	<head>
		<title>Sant&eacute;Now</title>
		<link type="text/css" rel="stylesheet" href="css.css"/>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	</head>
	<body>
		<div id="alles">
			<div id="headbar">
				<div class="head" style="float:left"><h1><div id="clockbox"></div></h1></div>
				<div class="head" style="float:right"><h3>Zimmer: 503<br>Bett: 3</h3></div>
			</div>
			<div id="body-bar">

<?php
$servername = "localhost";
$username = "root";
$password = "sommer2016";
$dbname = "santenow";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `screen`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Titel: " . $row["titel"]. " Beschreibung:" . $row["beschreibung"] . " Farbe " . $row["farbe"]. "<br>";
        echo "<div class='beduerfnis' style='background-color:red'>";
        echo "<i class='fa fa-glass fa-5x' aria-hidden='true'></i><h2>" . $row["beschreibung"]  . "</h2>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
			</div>
		</div>

<!-- JS-CODE FUER AKTUELLE ZEIT: -->
<script type="text/javascript">
	function GetClock(){
	var d=new Date();
	var nhour=d.getHours(),nmin=d.getMinutes();
	if(nmin<=9) nmin="0"+nmin
	
	document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+"";
	}

	window.onload=function(){
	GetClock();
	setInterval(GetClock,1000);
	}
</script>
	</body>
</html>
