<!DOCTYPE html>
<html>
<head>
	<title>form nambahin artikel</title>
</head>
<body>

<form action="<?php echo site_url('artikel/post'); ?>" method="POST" >
	<input type='text' name='judul' placeholder='isi judulnya' ><br>
	<textarea name='isi' placeholder='ini isinya bro!'></textarea><br>
	<input type='submit'>
</form>
<br><br>
<table>
	<tr>
		<td>ID</td>
		<td>Judul</td>
		<td>Isi</td>
		<td>Aksi</td>
	</tr>
	<?php
	foreach ($artikel as $nilai) {
		echo "<tr>";
		echo "<td><a href=".site_url('artikel/read/').'/'.$nilai->id.">$nilai->id</td>";
		echo "<td>$nilai->judul</td>";
		echo "<td>$nilai->isi</td></a>";
		echo "<td><a href=".site_url('artikel/delete/').'/'.$nilai->id.">DELETE</a> <a href=".site_url('artikel/edit/').'/'.$nilai->id.">EDIT</a></td>";
		echo "</tr>";
	}


	?>

</table>
</body>
</html>