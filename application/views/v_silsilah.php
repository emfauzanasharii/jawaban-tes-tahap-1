<!DOCTYPE html>
<html>
<head>
	<title>Silsilah</title>
</head>
<body>
	<h2>Anak Pak Budi</h2>
<table border="1">
	<thead>
	<tr>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Status</th>
	</tr>
	</thead>
	<?php
    foreach ($data->result_array() as $i) :
    $id=$i['id'];
    $nama=$i['nama'];
    $jenkel=$i['jenis_kelamin'];
    $status=$i['status'];
    ?>
	<tbody>
		<tr>
			<td><?php echo $nama; ?></td>
		<?php if ($jenkel==1):?>
			<td>Laki-laki</td>
			<?php else: ?>
			<td>Perempuan</td>
		<?php endif; ?>
		<?php if($status==1): ?>
			<td>Anak</td>
			<?php else: ?>
			<td>Cucu</td>
		<?php endif; ?>
		</tr>
	</tbody>
<?php endforeach; ?>
</table>

<h3>Cucu Pak Budi</h3>
<table border="1">
	<thead>
	<tr>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Status</th>
	</tr>
	</thead>
	<?php
    foreach ($cucu->result_array() as $i) :
    $id=$i['id'];
    $nama=$i['nama'];
    $jenkel=$i['jenis_kelamin'];
    $status=$i['status'];
    ?>
	<tbody>
		<tr>
			<td><?php echo $nama; ?></td>
		<?php if ($jenkel==1):?>
			<td>Laki-laki</td>
			<?php else: ?>
			<td>Perempuan</td>
		<?php endif; ?>
		<?php if($status==1): ?>
			<td>Anak</td>
			<?php else: ?>
			<td>Cucu</td>
		<?php endif; ?>
		</tr>
	</tbody>
<?php endforeach; ?>
</table>

<h3>Cucu Perempuan Budi</h3>
<table border="1">
	<thead>
	<tr>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Status</th>
	</tr>
	</thead>
	<?php
    foreach ($cucupr->result_array() as $i) :
    $id=$i['id'];
    $nama=$i['nama'];
    $jenkel=$i['jenis_kelamin'];
    $status=$i['status'];
    ?>
	<tbody>
		<tr>
			<td><?php echo $nama; ?></td>
		<?php if ($jenkel==1):?>
			<td>Laki-laki</td>
			<?php else: ?>
			<td>Perempuan</td>
		<?php endif; ?>
		<?php if($status==1): ?>
			<td>Anak</td>
			<?php else: ?>
			<td>Cucu</td>
		<?php endif; ?>
		</tr>
	</tbody>
<?php endforeach; ?>
</table>

<h4>Bibi Farah</h4>
<table border="1">
	<thead>
	<tr>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
	</tr>
	</thead>
	<?php
    foreach ($bibi->result_array() as $i) :
    $nama=$i['nama'];
    $jenkel=$i['jenis_kelamin']
    ?>
	<tbody>
		<tr>
			<td><?php echo $nama; ?></td>
		<?php if ($jenkel==1):?>
			<td>Laki-laki</td>
			<?php else: ?>
			<td>Perempuan</td>
		<?php endif; ?>
		</tr>
	</tbody>
<?php endforeach; ?>
</table>

<h4>Sepupu Laki-laki Hani</h4>
<table border="1">
	<thead>
	<tr>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
	</tr>
	</thead>
	<?php
    foreach ($sepupu->result_array() as $i) :
    $nama=$i['nama'];
    $jenkel=$i['jenis_kelamin'];
    ?>
	<tbody>
		<tr>
			<td><?php echo $nama; ?></td>
		<?php if ($jenkel==1):?>
			<td>Laki-laki</td>
			<?php else: ?>
			<td>Perempuan</td>
		<?php endif; ?>
		</tr>
	</tbody>
<?php endforeach; ?>
</table>


</body>
</html>