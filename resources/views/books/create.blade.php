<html>
	<title>Address Book | Adding</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<body>
	<h2 style='color:lightgray;'>&nbspAdd a new entry:</h2>
	<div class="container">
<!--		<?php echo '<br> User_id=' . $usrid . '<br>'; ?>-->
		<form action="{{ url('insert/') }}" method="POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		<input type = "hidden" name = "adr_userid" value = "<?php echo $usrid; ?>">
			<table class='table'>
				<tr>
					<td>Name ( *required ): </td>
					<td><input type='text' name='adr_name'/></td>
				</tr>
				<tr>
					<td>E-mail: </td>
					<td><input type='text' name='adr_mail'/></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td><input type='text' name='adr_adr'/></td>
				</tr>
				<tr>
					<td>Country: </td>
					<td>
						<select name="adr_country">
							<option value="Australia">Australia</option>
							<option value="Belgium">Belgium</option>
							<option value="Canada">Canada</option>
							<option value="China">China</option>
							<option value="England">England</option>
							<option value="France">France</option>
							<option value="Germany">Germany</option>
							<option value="USA">USA</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Phone No: </td>
					<td><input type='text' name='adr_phone'/></td>
				</tr>
				<tr><td class='alert alert-success' colspan=2>
					<input class='btn btn-success' type='submit' name='Store'/></td>
				</tr>
				<tr><td class='alert alert-danger' colspan=2>
					<a class='btn btn-danger' href='/home'>Cancel</a></td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>
