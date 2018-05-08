<?php
	include("login1.php");
?>
<html>
    <head>
    <title>login</title>
        <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
    	<?php
    	if(isset($pesan_error)) echo $pesan_error;
    	?>
        <form method="POST">
		<div class="log">
			<h1 align="center">Sistem Informasi Perpustakaan</h1>
			<label for="username">Username : </label>
			<input type="text" name="username">
			<br />
			<label for="password">Password :</label>
			<input type="password" name="password">
			<br />
			<input type="submit" value="LOGIN">
			
		</div>
		</form>
    </body>
</html>