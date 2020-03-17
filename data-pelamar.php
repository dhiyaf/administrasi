<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/icon.ico">
	<title>SISTEM INFORMASI ADMINISTRASI</title>
</head>
<body>
	<!-- <?php include "menu.php"; ?> -->
	<div class="col-sm-10 col-sm-offset-2" id="content">
		<div class="col-sm-10">
			<div class="row">
				<h2><b>TAMBAH DATA PELAMAR</b></h2>
				<hr>
			</div>
			<div class="row" style="margin-bottom: 5%;">
					<div class="col-sm-6">
						<form method="POST" id="insert_form" action="tambah_pelamar.php">
							<div class="form-group">
								<label> Tanggal </label>
								<input class="form-control" value="<?php echo date('Y-m-d'); ?>" type="date" name="tanggal" placeholder="Masukkan Tanggal" required="" />
							</div>
							<div class="form-group">
								<label> Nama </label>
								<input class="form-control" type="text" name="nama" placeholder="Masukkan Nama" required="" />
							</div>
							<div class="form-group">
								<label> Gender </label>
								<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required="">
									<option value="laki-laki"> Laki-laki</option>
									<option value="perempuan"> Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label> Umur </label>
								<div class="input-group">
									<input class="form-control" min="16" type="number" name="umur" placeholder="Masukkan Umur" required="" /><span class="input-group-addon">Tahun</span>
								</div>
							</div>
							<div class="form-group">
								<label> Alamat </label>
								<textarea class="form-control" rows="2" name="alamat" placeholder="Masukkan Alamat" required=""></textarea>
							</div>

							<div class="form-group">
								<label> No. HP </label>
								<input class="form-control" type="text" name="no_hp" placeholder="Masukkan No. HP" />
							</div>
							<div class="form-group">
								<label> Email </label>
								<input class="form-control" type="text" name="email" placeholder="Masukkan Email" />
							</div>
						</div>
						<div class="col-sm-6" style="">
							<div class="form-group">
								<label> Pendidikan Terakhir </label>
								<input class="form-control" type="text" name="pendidikan" placeholder="Masukkan Pendidikan Terkahir" required="" />
							</div>
							<div class="form-group">
								<label> Jurusan</label>
								<input class="form-control" type="text" name="jurusan" placeholder="Masukkan Jurusan" required="" />
							</div>
							<div class="form-group">
								<label> IPK </label>
								<input class="form-control" type="text" name="ipk" placeholder="Masukkan IPK"  />
							</div>
							<div class="form-group">
								<label> PIC </label>
								<input class="form-control" type="text" name="pic" placeholder="Masukkan PIC"  />
							</div>
							<div class="form-group">
								<label> Kategori </label>
								<select class="form-control" name="jenis" id="jenis" required="">
									<option value="sarjana">Sarjana (S1)</option>
									<option value="diploma"> Diploma (D3)</option>
									<option value="sma">SMA</option>
								</select>
							</div>
							<div class="form-group">
								<label> Keterangan </label>
								<input class="form-control" value="Diproses" type="text" name="pic" disabled="" required="" />
							</div>	
					
					<!-- Modal Footer -->
					
						<input type="submit" name="simpan" value="Simpan" id="simpan" class="btn btn-primary" style="margin-top: 45px;" / >
						<input type="reset" name="reset" value="Reset"  class="btn btn-default" style="margin-top: 45px;" / >
						</form>
						
					</div>
				</div>
				
</body>
</html>