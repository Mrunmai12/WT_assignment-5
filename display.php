<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php include 'links.php'  ?>
</head>
<body>

<div class="main-div">
	<h1>LIST</h1>
	
</div>

<div class="center-div">
	<div class="table-responsive">
		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>prn</th>
					<th>mobile</th>
					<th>email</th>
					<th>password</th>
					<th colspan="3">operation</th>
				</tr>
			</thead>
			<tbody>
				<?php

					include 'connection.php';

					$selectquery = " SELECT * FROM form_registration" ;
					$query=mysqli_query($con,$selectquery);

					$nums=mysqli_num_rows($query);
					//echo $nums;




					while ($res=mysqli_fetch_array($query)) {
						?>
						<tr>
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['name']; ?></td>
						<td><?php echo $res['prn']; ?></td>
						<td><?php echo $res['mobile']; ?></td>
						<td><?php echo $res['email']; ?></td>
						<td><?php echo $res['password']; ?></td>

						
						<td><a href="updates.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></a></i></td>
						<td><i class="fa fa-trash" aria-hidden="true"></i></td>

						</tr>
						<?php
					}

				?>
				
			</tbody>


		</table>

	</div>
</div>


</body>
</html>