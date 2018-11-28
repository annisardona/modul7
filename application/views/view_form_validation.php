<html>
<head>
<title>Form Validation CodeIgniter</title>
</head>
<body>

<h1>Form Validation CodeIgniter</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('form_validation'); ?>
<table>
	<tr>
		<td>Username</td>
		<td>
			<input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
			<span style="color: red"> <?php echo form_error('username'); ?> </span>
		</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>
			<input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
			<span style="color: red"> <?php echo form_error('password'); ?> </span>
		</td>
	</tr>
	<tr>
		<td>Password Confirm</td>
		<td>
			<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>"/>
			<span style="color: red"> <?php echo form_error('passconf'); ?> </span>
		</td>
	</tr>
	<tr>
		<td>Email Address</td>
		<td>
			<input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
			<span style="color: red"> <?php echo form_error('email'); ?> </span>
		</td>
	</tr>
	<tr>
		<td></td><td><br><input type="submit" value="Submit" /></td>
	</tr>
</table>
<?php echo form_close() ?>
</body>
</html>