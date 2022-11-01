<?
include "../lib/php/function.php";

$notes_objects = file_get_json("./notes.json");
$user_array = file_get_json("../data/user.json");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reading Data</title>
	<? include "../parts/meta.php"; ?>
</head>
<body>
	<?php include "../parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Note 1</h2>


			<? for($i=0;$i<count($notes_objects->notes);$i++){
				   echo "<li>{$notes_objects->notes[$i]}</li>";
				}

			?>
		</div>
		<div class="card soft">
			<h2>Users</h2>
			<?
				for($i=0;$i<count($user_array);$i++){
					echo "<li>
					<strong>{$user_array[$i]->name}</strong>
					<span>{$user_array[$i]->type}</span>
					</li>";
				}

			?>
	</div>
</body>