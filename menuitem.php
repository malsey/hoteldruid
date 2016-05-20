<?php

	//Variables
	$menuid = $_GET['menuid'];
	$menunaam =
	$menuitemid =
	$menuitemnaam = 
	$menuitemcategorie = 
	$menuitemtype = 
	$menuitembeschrijving = 
	$menuitemimage = "";

	//connect to DB
	$db = mysqli_connect("127.0.0.1", "root", "", "menu");
	if (!$db) {
		# code...
		exit("Failled connect with Database");
	}

	//check menu-link
	if (isset($_GET['menuid'])) {
		$sql = mysqli_query($db, "SELECT naam FROM menu WHERE id = $menuid");
		$row = mysqli_fetch_array($sql);

		$menunaam = $row['naam'];
	}



	//check REMOVE + delete from DB
	if (isset($_POST['delete'])) {
		$menuitemid = $_POST['delete'];
		mysqli_query($db,"DELETE FROM menuitem WHERE id = '$menuitemid'");
	}

	//check ADD + insert data in DB
	if (isset($_POST['status1']) 
		and isset($_POST['menuitemnaam'])
		and isset($_POST['menuitembeschrijving'])
		and isset($_POST['menuitemimage'])	) {
		
		$menuitemnaam = $_POST['menuitemnaam'];
		$menuitemcategorie = $_POST['menuitemcategorie'];
		$menuitemtype = $_POST['menuitemtype'];
		$menuitembeschrijving = $_POST['menuitembeschrijving'];
		$menuitemimage = $_POST['menuitemimage'];
		mysqli_query($db,"INSERT INTO menuitem VALUES (
			0, 
			'$menuitemnaam',
			'$menuitemcategorie',
			'$menuitemtype', 
			'$menuitembeschrijving',
			'$menuid',
			'$menuitemimage')");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hotel Menuitems</title>
</head>
<body>
<a href="menu.php">BACK</a>
<h1><?php echo $menunaam; ?> </h1>
* Click on the menu-item-id to delete the menu-item
<form action="" method="POST">
<input type="hidden" name="status2" />
<table border="">
	<thead>
		<tr>
			<th>Menuitem ID</th>
			<th>Menuitem naam</th>
			<th>Menuitem categorie</th>
			<th>Menuitem type</th>
			<th>Menu beschrijving</th>
		</tr>
	</thead>
	<tbody id="tbl">
<?php
	//connect to DB
	$db = mysqli_connect("127.0.0.1", "root", "", "menu");
	if (!$db) {
		# code...
		exit("Failled connect with Database");
	}

	//Select Menu's from Database
	$sql = mysqli_query($db, "SELECT * FROM menuitem WHERE menuid = '$menuid'");
	while ($row = mysqli_fetch_array($sql)) {
		# code...
		?>
		<tr>
			<td>
			<input type="submit" name="delete" value="<?php echo $row['id']; ?>"></input></td>
			<td><?php echo $row['naam']; ?></td>
			<td><?php echo $row['categorie']; ?></td>
			<td><?php echo $row['type']; ?></td>
			<td><?php echo $row['beschrijving']; ?></td>
		</tr>
		<?php
	}
?>
	</tbody>
</table>
</form>
<form action="menu.php" method="POST">
	<input type="submit" name="deletemenu" value="DELETE MENU"></input>
	<input type="hidden" name="menuid" value="<?php echo $menuid;?>"/>
</form>

<h2>Voeg menu toe</h2>
<?php
if (isset($_GET['menuitemnaam'])) {
	# code...
	echo "OK G";
}

?>
<form action="" method="post">
<input type="hidden" name="status1" />
	<label for="menuitemnaam">menu-item naam: </label>
	<input type="text" name="menuitemnaam" value=""></input>
	</br>
	<label for="menuitemcategorie">menu-item categorie: </label>
	<select name="menuitemcategorie" value="$menuitemcategorie">
	  <option value="Onbijt">Onbijt</option>
	  <option value="Aperitief">Aperitief</option>
	  <option value="Voorgerecht">Voorgerecht</option>
	  <option value="Gerecht">Gerecht</option>
	  <option value="Dessert">Dessert</option>
	  <option value="Extra">Extra</option>
	</select>
	</br>
	<label for="menuitemtype">menu-item type: </label>
	<select name="menuitemtype" value="$menuitemtype">
	  <option value="Drank">Drank</option>
	  <option value="Eten">Eten</option>
	  <option value="Apart">Apart</option>
	</select>
	</br>
	<label for="menuitembeschrijving">menu-item  beschrijving: </label>
	</br>
	<textarea name="menuitembeschrijving" value="$menuitembeschrijving"></textarea>
	</br>
	<label for="menuitemimage">menu-item image: </label>
	</br>
	<input type="file" name="menuitemimage" value="$menuitemimage"></input>
	</br>
	<input type="submit" value="ADD"></input>
</form>

</body>
</html>

<?php
	//delete
	if (isset($_GET['delete'])) {
		# code...
		echo "Try to delete";
	}

?>