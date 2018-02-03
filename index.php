<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Interview followup</title>
	<style>
		body {font: normal 14px/1.5 sans-serif;}
	</style>
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($people as $person): ?>
				<tr>
					<td><?=$person['first_name'];?></td>
					<td><?=$person['last_name'];?></td>
					<td><?=$person['email'];?></td>
					<td><button class="info-popup" data-name="<?=$person['first_name'];?> <?=$person['last_name'];?>" data-email="<?=$person['email'];?>">alert info</button></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<script>
		(function() {
			var buttons = document.querySelectorAll('.info-popup');
			for(var i=0; i<buttons.length; i++) {
				buttons[i].addEventListener('click', function(e) {
					alert('name: ' + e.currentTarget.dataset.name + '\n' 
						+ 'email: ' + e.currentTarget.dataset.email);
				});
			}
			console.log(buttons);
		})()
	</script>

</body>
</html>