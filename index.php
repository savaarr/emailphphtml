<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="text/css" href="photo.png">
	<title>Email PHP HTML</title>
	<style>
body {font-family: Arial, Helvetica, sans-serif;}

.container {
  display: block;
  padding: 15px;
  background-color: #f1f1f1;
  margin: auto;
  width: 50%;
  border: 3px solid #f1f1f1;
  margin-top: 40px;
  border-radius: 10px;
}

h2
{
    text-align: center;
    font-size:35px;
}

input[type=text], input[type=submit], textarea {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=checkbox] {
  margin-top: 16px;
}

input[type=submit] {
  background-color: steelblue;
  color: white;
  border: none;
  cursor: pointer;
  font-size: 18px;
  border-radius:15px;
}

input[type=submit]:hover {
  background-color: crimson;
}
</style>
</head>
<body>
<div class="container">
<h2>Email PHP HTML</h2>
</div>
<form action="" method="POST">
    <div class="container" style="background-color:white">
	<label>Email</label>
	<input type="text" name="alamat" autocomplete="off" placeholder="Username@gmail.com" required><p>
	<label>Judul</label>
	<input type="text" name="judul" autocomplete="off" placeholder="Surat lamaran kerja bagian IT" required><p>
	<label>Pesan</label>
	<textarea name="pesan" required></textarea><p>
	</div>
	<div class="container">
	<input type="submit" name="kirim" value="KIRIM EMAIL">
	</div>
</form>
<?php 
if(isset($_POST['kirim'])){
$alamat = $_POST['alamat'];
$judul = $_POST['judul'];
$pesan = $_POST['pesan'];
$pesan = wordwrap($pesan,70);
$headers = 'From: savaarr@webhost.com' . "\r\n" .
    'Reply-To: savaarr@webhost.com' . "\r\n";
$proses = mail("$alamat","$judul","$pesan","$headers");
}
?>
</body>
</html>
