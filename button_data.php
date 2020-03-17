<!-- delete data -->
<div class="modal fade" id="delete<?php echo $row['id_data']; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times; </button>
						<h4 class="modal-title" id="myModalLabel"> Delete Data</h4>
					</div>
					<!-- Modal Body -->
					<div class="modal-body">
						<form method="POST" id="insert_form" action="proses_deletedata.php?id_data=<?php echo $row['id_data']; ?>">
							<h3>Apakah anda yakin ingin menghapus?</h3>
					</div>
					<!-- Modal Footer -->
					<div class="modal-footer">
						<input type="submit" name="delete" value="Delete" id="delete" class="btn btn-danger"/>
						<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
							</form>
					</div>	
				</div>
			</div>
		</div>

<!-- edit data -->
<div class="modal fade" id="edit<?php echo $row['id_data']; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times; </button>
						<h4 class="modal-title" id="myModalLabel"> Form Edit Data</h4>
					</div>
					<!-- Modal Body -->
					<div class="modal-body">
						<?php  
							$edit=mysqli_query($connect, "select * from data where id_data = '".$row['id_data']."'")or die (mysqli_error($connect));
							$erow=mysqli_fetch_array($edit);
						?>
						<form method="POST" id="insert_form" action="proses_editdata.php?id_data=<?php echo $row['id_data']; ?>">
							<div class="form-group">
								<label> Tanggal </label>
								<input class="form-control" type="date" value="<?php echo $erow['tanggal']; ?>" name="tanggal" placeholder="Masukkan Tanggal" required="" />
							</div>
							<div class="form-group">
								<label> Nama </label>
								<input class="form-control" type="text" value="<?php echo $erow['nama']; ?>" name="nama" placeholder="Masukkan Nama" required="" />
							</div>
							<div class="form-group">
								<label> Gender </label>
								<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required="">
									<option value="laki-laki" <?php $erow['jenis_kelamin']=='laki-laki' ? print "selected":"";?>> Laki-laki</option>
									<option value="perempuan" <?php $erow['jenis_kelamin']=='perempuan' ? print "selected":"";?>> Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label> Umur </label>
								<div class="input-group">
									<input class="form-control" min="16" type="number" name="umur" placeholder="Masukkan Umur" required="" value="<?php echo $erow['umur'];?>" /><span class="input-group-addon">Tahun</span>
								</div>
							</div>
							<div class="form-group">
								<label> Alamat </label>
								<textarea class="form-control" rows="2" name="alamat" placeholder="Masukkan Alamat" required=""><?php echo $erow['alamat']; ?></textarea>
							</div>
							<div class="form-group">
								<label> No. HP </label>
								<input class="form-control" type="text" name="no_hp" value="<?php echo $erow['no_hp']; ?>" placeholder="Masukkan No. HP"  />
							</div>
							<div class="form-group">
								<label> Email </label>
								<input class="form-control" type="text" name="email" value="<?php echo $erow['email']; ?>" placeholder="Masukkan Email" />
							</div>
							<div class="form-group">
								<label> Pendidikan Terakhir </label>
								<input class="form-control" type="text" name="pendidikan" value="<?php echo $erow['pendidikan']; ?>" placeholder="Masukkan Pendidikan Terkahir" required="" />
							</div>
							<div class="form-group">
								<label> Jurusan</label>
								<input class="form-control" type="text" name="jurusan" value="<?php echo $erow['jurusan']; ?>" placeholder="Masukkan Jurusan" required="" />
							</div>
							<div class="form-group">
								<label> IPK </label>
								<input class="form-control" type="text" name="ipk" value="<?php echo $erow['ipk']; ?>" placeholder="Masukkan IPK"  />
							</div>
							<div class="form-group">
								<label> PIC </label>
								<input class="form-control" type="text" name="pic" value="<?php echo $erow['pic']; ?>" placeholder="Masukkan PIC"  />
							</div>
							<div class="form-group">
								<label> Kategori </label>
								<select class="form-control" name="jenis" id="jenis" required="">
									<option value="sarjana" <?php $erow['jenis']=='sarjana' ? print "selected":"";?> >Sarjana (S1)</option>
									<option value="diploma" <?php $erow['jenis']=='diploma' ? print "selected":"";?> > Diploma (D3)</option>
									<option value="sma" <?php $erow['jenis']=='sma' ? print "selected":"";?>>SMA</option>
								</select>
							</div>
							<div class="form-group">
								<label> Keterangan </label>
								<select class="form-control" name="keterangan" id="keterangan" >
									<option value="diproses" <?php $erow['keterangan']=='diproses' ? print "selected":"";?>> Diproses </option>
									<option value="diterima" <?php $erow['keterangan']=='diterima' ? print "selected":"";?>> Diterima </option>
								</select>
							</div>	
					</div>
					<!-- Modal Footer -->
					<div class="modal-footer">
						<input type="submit" name="simpan" value="Simpan" id="simpan" class="btn btn-primary"/ >
						</form>
						<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
					</div>	
				</div>
			</div>
		</div>
<!-- detail data -->
<div class="modal fade" id="detail<?php echo $row['id_data']; ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times; </button>
						<h4 class="modal-title" id="myModalLabel"> Detail Data</h4>
					</div>
					<!-- Modal Body -->
					<div class="modal-body">
						<?php  
							$edit=mysqli_query($connect, "select * from data where id_data = '".$row['id_data']."'")or die (mysqli_error($connect));
							$erow=mysqli_fetch_array($edit);
						?>
					<table>
						<tbody>
							<tr>
								<th>Nama</th>
								<td style="text-transform: capitalize;"> : <?php echo $erow['nama']; ?></td>
							</tr>
							<tr>
								<th>Jenis Kelamin</th>
								<td style="text-transform: capitalize;"> : <?php echo $erow['jenis_kelamin']; ?></td>
							</tr>
							<tr>
								<th>Umur</th>
								<td style="text-transform: capitalize;"> : <?php echo $erow['umur']; ?> Tahun</td>
							</tr>
							<tr>
								<th>Alamat</th>
								<td style="text-transform: capitalize;"> : <?php echo $erow['alamat']; ?></td>
							</tr>
							<tr>
								<th>No. HP</th>
								<td> : <?php echo $erow['no_hp']; ?></td>
							</tr>
							<tr>
								<th>Email</th>
								<td> : <?php echo $erow['email']; ?></td>
							</tr>
							<tr>
								<th>Pendidikan</th>
								<td style="text-transform: capitalize;"> : <?php echo $erow['pendidikan']; ?></td>
							</tr>
							<tr>
								<th>Jurusan</th>
								<td style="text-transform: capitalize;"> : <?php echo $erow['jurusan']; ?></td>
							</tr>
							<tr>
								<th>IPK </th>
								<td> : <?php echo $erow['ipk']; ?></td>
							</tr>
							<tr>
								<th>PIC</th>
								<td style="text-transform: capitalize;"> : <?php echo $erow['pic']; ?></td>
							</tr>
							<tr>
								<th>Keterangan</th>
								<td style="text-transform: capitalize;"> : <?php echo $erow['keterangan']; ?></td>
							</tr>

						</tbody>
					</table>
						
					<!-- Modal Footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
					</div>	
				</div>
			</div>
		</div>