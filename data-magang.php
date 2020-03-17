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
				<h2><b>TAMBAH DATA MAGANG</b></h2>
				<hr>
			</div>
			<div class="row" style="margin-bottom: 5%;">
				<div class="col-sm-6">
					<form method="POST" id="insert_form" action="tambah_magang.php">
							<div class="form-group">
								<label> Tanggal </label>
								<input class="form-control" type="date" name="tgl_data" placeholder="Masukkan Tanggal" required="" />
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
								<label> Asal Sekolah </label>
								<input class="form-control" type="text" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" required="">
							</div>
							<div class="form-group">
								<label> NIS /NIM</label>
								<input class="form-control" type="text" name="nis" placeholder="Masukkan NIS / NIM" />
							</div>
							<div class="form-group">
								<label> No. HP </label>
								<input class="form-control" type="text" name="no_hp" placeholder="Masukkan No. HP" />
							</div>
							<div class="form-group">
								<label> Kelas / Semester </label>
								<input class="form-control" type="text" name="kelas" placeholder="Masukkan Kelas / Semester"  />
							</div>
							<div class="form-group">
								<label> Program</label>
								<input class="form-control" type="text" name="program" placeholder="Masukkan Program"  />
							</div>
				</div>
				<div class="col-sm-6" style="">
							
							<div class="form-group">
								<label> Penempatan </label>
								<input class="form-control" type="text" name="penempatan" placeholder="Masukkan Penempatan"  />
							</div>
							<div class="form-group">
								<label> Tanggal Pelaksanaan </label>
								<input class="form-control" type="date" name="tgl_masuk" placeholder="Masukkan Tanggal Pelaksanaan"  />
							</div>
							<div class="form-group">
								<label> Tanggal Berakhir </label>
								<input class="form-control" type="date" name="tgl_keluar" placeholder="Masukkan Tanggal Berakhir"  />
							</div>
							<div class="form-group">
								<label> Nilai Kinerja </label>
								<textarea class="form-control" style="resize: none; height: 120px;" rows="3" type="text" name="nilai_kinerja" placeholder="Masukkan Nilai Kinerja" > </textarea>
							</div>
							<div class="form-group">
								<label> Nilai Perilaku </label>
								<textarea class="form-control" style="resize: none; height: 120px;" rows="3" type="text" name="nilai_perilaku" placeholder="Masukkan Nilai Perilaku" > </textarea>
							</div>
							<div class="form-group">
								<label> No. Sertifikat</label>
								<input class="form-control" type="text" name="sertifikat" placeholder="Masukkan No. Sertifikat" />
							</div>	
				
				
				
					<input type="submit" name="simpan" value="Simpan" id="simpan" class="btn btn-primary" style="" / >
					<input type="reset" name="reset" value="Reset"  class="btn btn-default" />
						</form>
					</form>
					
				</div>
			</div>
				
</body>
</html>