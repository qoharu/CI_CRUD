<!DOCTYPE html>
<html>
<head>
	<title>form ngedit artikel</title>
</head>
<body>

<form action="<?php echo site_url("artikel/editlah")."/$id"; ?>" method="POST" >
	<input type='text' name='judul' placeholder='isi judulnya' value="<?php echo $judul ?>" ><br>
	<textarea name='isi' placeholder='ini isinya bro!'><?php echo $isi ?></textarea><br>
	<input type='submit'>
</form>

</body>
</html>