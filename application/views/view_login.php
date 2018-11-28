<!DOCTYPE html>
<html>
<head>
	<title>Login dengan Session</title>
</head>
<body>
	<h1>Login dengan Session</h1>
	<p><b>Note:</b> 
	<br>Dalam login ini tidak ada proses pengecekan ke database, hanya berfokus pada penggunaan session dengan menggunakan framework CodeIgniter. 
	<br><b>Hint:</b>
	<br>Username "taka" dan password "1234".</p>
	<p style="color: red"> <?php echo $this->session->flashdata("pesan_gagal_login") ?> </p>
	<?php echo form_open_multipart('login');?>
		<label>Username:</label>
		<input type="text" name="username">
		<br>
		<label>Password:</label>
		<input type="password" name="password">
		<br>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>