<!DOCTYPE html>
<html>
<head>
	<title>tes CRUD</title>
</head>
<body>
<h2>Menambah Anggota Keluarga</h2>
<form action="<?php echo base_url().'simpan'; ?>" method="POST">
	<div>
		<label>nama : <input type="text" name="nama"></label>
	</div>
	<div>
		<label>Jenis Kelamin :</label>
		
		 <input type="radio" name="jengkel" value="1">
		 <label>laki-laki</label>
		 	<input type="radio" name="jengkel" value="2">
		 	<label>Perempuan</label>
	</div>
	<div>
		<label>Status :</label>
			 <select class="form-control"  name="status" >
			 	<option>--</option>
                 <option value="1">Anak</option>
                 <option value="2">Cucu</option>
             </select>
	</div>
	<div>
		<label>Orang Tua :</label>
			 <select class="form-control"  name="ortu" >
			 	<option>--</option>
			 	<?php foreach ($ortu->result_array() as $x):
			 		$id=$x['id'];
			 		$nama=$x['nama'];

			 		?>
			 		
                 <option value="<?php echo $id; ?>"><?php echo $nama; ?></option>
                <?php endforeach; ?>
             </select>
	</div>

	<br>
	<div><input type="submit" name="Tambah"></div>
</form>
<br>
<table border="1">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Status</th>
		<th>Orang Tua</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<?php
	$no=0;
    foreach ($data->result_array() as $i) :
    $no++;
    $id=$i['id'];
    $nama=$i['nama'];
    $jenkel=$i['jenis_kelamin'];
    $status=$i['status'];
    $ortu=$i['ortu_nama']
    ?>
	<tbody>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $nama; ?></td>
		<?php if ($jenkel==1):?>
			<td>Laki-laki</td>
			<?php else: ?>
			<td>Perempuan</td>
		<?php endif; ?>
		<?php if($status==1): ?>
			<td>Anak</td>
			<?php elseif ($status==2): ?>
				<td>Cucu</td>
			<?php else: ?>
			<td>Ayah</td>
		<?php endif; ?>
		<td><?php echo $ortu; ?></td>
		<td><button ><a href="<?php echo base_url().'silsilah/hapus/'.$id ?>" >Hapus</a></button>
			<button ><a href="<?php echo base_url().'silsilah/edit/'.$id ?>" >Update</a></button>
			
		</td>
		</tr>
	</tbody>
<?php endforeach; ?>
</table>

<h3><a href="<?php echo base_url().'task1' ?>">Jawaban lainnya</a> </h3>
</body>
</html>