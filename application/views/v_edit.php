<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Data Silsilah Keluarga</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($data as $u){ ?>
	<form action="<?php echo base_url(). 'Silsilah/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<?php if ( $u->jenis_kelamin==1):?>
				<td>
			<input type="radio" name="jengkel" value="1" checked>
		 	<label>laki-laki</label>
		 	<input type="radio" name="jengkel" value="2">
		 	<label>Perempuan</label>
		 </td>
				<?php else: ?>
				<td>
			<input type="radio" name="jengkel" value="1">
		 	<label>laki-laki</label>
		 	<input type="radio" name="jengkel" value="2" checked>
		 	<label>Perempuan</label>
				</td>
			<?php endif; ?>
			</tr>
			<tr>
				<td>Status</td>
				<?php if ($u->status==1): ?>
				<td> <select class="form-control" id="xlevel" name="status" required>
                 <option value="1" selected>Anak</option>
                 <option value="2">Cucu</option>
             </select></td>
             <?php else: ?>
             	<td> <select class="form-control" id="xlevel" name="status" required>
                 <option value="1" >Anak</option>
                 <option value="2" selected>Cucu</option>
             </select></td>
             <?php endif ?>
			</tr>
			<tr>
				<td>Orang Tua</td>
				<td>
					 <select class="form-control"  name="ortu" >
			 	<option value="<?php echo $u->ortu_id; ?>"><?php echo $u->ortu_id; ?></option>
			 	<?php foreach ($ortu->result_array() as $x):
			 		$id=$x['id'];
			 		$nama=$x['nama'];

			 		?>
			 		
                 <option value="<?php echo $id; ?>"><?php echo $nama; ?></option>
                <?php endforeach; ?>
             </select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>