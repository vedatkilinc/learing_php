<?php
echo "<p>Get</p>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<p>Post</p>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

$color = 'black';
if(isset($_GET['color'])) {
	$color = $_GET['color'];	
}

?>
<style>
	td {
		border: 2px solid <?=$color ?>;
		padding: 2px 4px;
	}
</style>
<table>
	<tr>
		<td>Name</td><td><?=$_GET['name']; ?></td>
	</tr>
	<tr>
		<td>Aktion</td><td><?=$_GET['action']; ?></td>
	</tr>
</table>

<table>
	<tr>
		<td>Name</td><td><?php echo $_GET['name']; ?></td>
	</tr>
	<tr>
		<td>Aktion</td><td><?php echo $_GET['action']; ?></td>
	</tr>
</table>

<a href='?name=Foo&action=show_pics'>Klick mal hier, <?=$_GET['name']; ?></a>

<form method='post'>
	<label for="vorname">Vorname</label>
	<input name="vorname" type="text" />
	<label for="nachname">Nachname</label>
	<input name="nachname" type="text" />
	<label for="beruf">Beruf</label>
	<input name="beruf" type="text" />
	<input name="entscheidung" type="checkbox" value="Ja" />
	<input type="submit" value="Absenden" />
</form>
