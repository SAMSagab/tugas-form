<html>
	<head>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>
<style>
    
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
    background-color: #f9004d;
    color: white;
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
    padding: 10px 25px;
    border-radius: 30px;
    transition: transform .4s;
}
input[type=submit]:hover {
    transform: scale(1.3);
}

div {
  border-radius: 20px;
  background-color: #ccc;
  padding: 20px;
}

.hero{
	height: 10vh;
    width: 100%;
}
.logo{
	text-align: center;
	color: black;
    font-size: 35px;
    letter-spacing: 1px;
    cursor: pointer;
}
span{
	color: red;
}
label{
	font-family: 'Josefin Sans' sans-serif;
}

</style>
<body>

<form action="tampil.php" method="post">

<div class="hero">
	<div class="logo">Form Data <span>Siswa</span></div>
</div>

	<div class="row">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
    <div class="row">
		<label>Umur</label>
		<input type="text" name="Umur" value="<?=isset($_POST['Umur']) ? $_POST['Umur'] : ''?>"/>
	</div>
    <div class="row">
		<label>Jenis Kelamin</label>
		<div class="options">
			<?php
			$jenis_kelamin = array('L' => 'Laki Laki', 'P' => 'Perempuan');
			foreach ($jenis_kelamin as $kode => $detail) {
				$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
				echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';
			}
			?>
		</div>
	</div>
    <div class="row">
		<label>Agama</label>
		<select name="area">
			<?php $options = array('Islam', 'Kristen', 'Buddha', 'Konghucu', 'Hindu','Katholik');
			foreach ($options as $area) {
				$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
				echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
			}?>
		</select>
	</div>
	
	<div class="row">
		<label>Alamat</label>
		<input type="text" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"/>
	</div>
    <div class="row">
		<label>tempat lahir</label>
		<input type="text" name="tempat" value="<?=isset($_POST['tempat']) ? $_POST['tempat'] : ''?>"/>
	</div>
	<div class="row">
    <form action="/action_page.php">
  <label for="TTL">tanggal lahir:</label>
  <input type="date" name="TL" value="<?=isset($_POST['TL']) ? $_POST['TL'] : ''?>"/>
		</div>	
  <div class="row">
	<div class="row">
		<label>Hobby</label>
		<input type="text" name="Hobby" value="<?=isset($_POST['Hobby']) ? $_POST['Hobby'] : ''?>"/>
	</div>
    <div class="row">
		<label>Cita-cita</label>
		<input type="text" name="cita-cita" value="<?=isset($_POST['cita-cita']) ? $_POST['cita-cita'] : ''?>"/>
	</div>
    <div class="row">
		<label>asal sekolah</label>
		<input type="text" name="asal" value="<?=isset($_POST['asal']) ? $_POST['asal'] : ''?>"/>
	</div>
    
		
		<div class="row">
	<input type="submit" name="submit" value="Submit"/>
	</div>
</form>

</html>