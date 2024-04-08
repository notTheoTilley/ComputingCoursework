<form action="addtofixture.php" method = "post">

	<!-- creates drop down list for swimmers -->
	<select name = "Username">
	<?php
	include_once('connection.php');
	$stmt = $conn->prepare("SELECT * FROM tblusers WHERE Role = 0 ORDER BY Surname ASC");
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo('<option value='.$row["Username"].'>'.$row["Surname"].', '.$row["Forename"].'</option>');
	}
	?>
	</select>

	<!-- creates drop down list for fixtures -->
	<select name = "Location">
	<?php
	include_once('connection.php');
	$stmt = $conn->prepare("SELECT * FROM tblfixtures ORDER BY Date ASC");
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo('<option value='.$row["Location"].'>'.$row["Location"].'</option>');
	}
	?>
	</select>

	<!-- creates drop down list for events -->
	<select name = "EventName">
	<?php
	include_once('connection.php');
	$stmt = $conn->prepare("SELECT * FROM tblevents ORDER BY Distance ASC");
	$stmt->execute();
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo('<option value='.$row["EventName"].'>'.$row["EventName"].', '.$row["Distance"].', '.$row["Gender"].'</option>');
	}
	?>
	</select>

	<input type="submit" value="Add Swimmer">

