<?php

	//connect to DB
	$dbmenu = mysqli_connect("127.0.0.1", "root", "root", "menu");
	if (!$db) {
		exit("Failled connect with Database");
	$dbtasty = mysqli_connect("127.0.0.1", "root", "root", "tasty");
	if (!$db) {
		exit("Failled connect with Database");
	}

	//Variables
	$sql =$menunaam = $menubeschrijving =  $menuitemimage = "";

	//Delete menu
	if (isset($_POST['deleteid'])) {
		//echo $_POST['deletemenu'];
		$deleteid = $_POST['deleteid'];
		echo $deleteid;


		//mysqli_query($db, "DELETE FROM menu WHERE id = '$menuid");
	}

	//check submitted + insert data in DB
	if (isset($_POST['status']) 
		and isset($_POST['menunaam'])
			and isset($_POST['menubeschrijving'])) {
		
		$menunaam = $_POST['menunaam'];
		$menubeschrijving = $_POST['menubeschrijving'];

		mysqli_query($dbmenu,
			"INSERT INTO menu VALUES (0, '$menunaam', '$menubeschrijving')");
		mysqli_query($dbtasty,
			"INSERT INTO hc4nmefvpmenu 
			VALUES (
			0, 
			'$menunaam', 
			'$menubeschrijving',
			0,
			'$menuimage',
			0,0,0,0,0)");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Menu's</title>
</head>
<body>
<h1>Menu's</h1>
* Click on the menu-id to see the menu-items
<table border="">
<form action="menuitem.php" method="get">
	<thead>
		<tr>
			<th>Menu ID</th>
			<th>Menu naam</th>
			<th>Menu beschrijving</th>
		</tr>
	</thead>
	<tbody id="tbl">
<?php
	//Select Menu's from Database
	$sql = mysqli_query($db, "SELECT * FROM menu");
	while ($row = mysqli_fetch_array($sql)) {
		# code...
		?>
		<tr>
			<td>
			<input type="submit" name="menuid" value="<?php echo $row['id']; ?>"></input>
			</td>
			<td><?php echo $row['naam']; ?></td>
			<td><?php echo $row['beschrijving']; ?></td>
			<td>
			<input 
			type="submit" 
			name="deleteid" 
			value="delete"
			id="<?php echo $row['id']; ?>"
			/>
			</td>
		</tr>
		<?php
	}
?>
	</tbody>
</form>
</table>


<h2>Voeg menu toe</h2>
<form action="" method="post">
<input type="hidden" name="status" value="submitted"/>
	<label for="menunaam">menu naam: </label>
	<input type="text" name="menunaam"></input>
	</br>
	<label for="menubeschrijving">menu beschrijving: </label>
	</br>
	<textarea name="menubeschrijving"></textarea>
	</br>
	<input type="submit" value="ADD"></input>
</form>


</body>
</html>