<html>
	<title>Address Book | Editing</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<body>
	<h2 style='color:lightgray;'>&nbspEdit the selected entry:</h2>
	<div class="container">
<!--		<?php echo '<br> User_id=' . $old_data[0]->id . '<br>'; ?>-->
		<form action="{{ url('edit/' . $old_data[0]->id) }}" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<table class='table'>
				<tr>
					<td>Name: </td>
					<td><input type='text' name='edt_name'
						value='<?php echo $old_data[0]->name; ?>'/></td>
				</tr>
				<tr>
					<td>E-mail: </td>
					<td><input type='text' name='edt_mail'
						value='<?php echo $old_data[0]->email; ?>'/></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td><input type='text' name='edt_adr'
						value='<?php echo $old_data[0]->address; ?>'/></td>
				</tr>
				<tr>
					<td>Country: </td>
					<td><input type='text' name='edt_country'
						value='<?php echo $old_data[0]->country; ?>'/></td>
				</tr>
				<tr>
					<td>Phone No: </td>
					<td><input type='text' name='edt_phone'
						value='<?php echo $old_data[0]->phone; ?>'/></td>
				</tr>
				<tr><td class='alert alert-success' colspan=2>
					<input class='btn btn-success' type='submit' name='Update'/></td>
				</tr>
				<tr><td class='alert alert-danger' colspan=2>
					<a class='btn btn-danger' href='/home'>Cancel</a></td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>
