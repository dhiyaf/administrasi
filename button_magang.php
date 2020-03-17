<!-- detail data magang -->
<div class="modal fade" id="detail<?php echo $row['id_magang']; ?>">
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
							$edit=mysqli_query($connect, "select * from data_magang where id_magang = '".$row['id_magang']."'")or die (mysqli_error($connect));
							$erow=mysqli_fetch_array($edit);
						?>
					<table>
						<tbody>
							<tr>
								<th width="150">Nama</th>
								<td> : </td>
								<td style="text-transform: capitalize;"> <?php echo $erow['nama']; ?></td>
							</tr>
							<tr>
								<th>Jenis Kelamin</th>
								<td> : </td>
								<td style="text-transform: capitalize;"><?php echo $erow['jenis_kelamin']; ?></td>
							</tr>
							<tr>
								<th>Asal Sekolah</th>
								<td> : </td>
								<td style="text-transform: capitalize;"> <?php echo $erow['asal_sekolah']; ?></td>
							</tr>
							<tr>
								<th>NIS / NIM</th>
								<td> : </td>
								<td style="text-transform: capitalize;"> <?php echo $erow['nis']; ?></td>
							</tr>
							<tr>
								<th>No. HP</th>
								<td> : </td>
								<td><?php echo $erow['no_hp']; ?></td>
							</tr>
							<tr>
								<th>Kelas / Semester</th>
								<td> : </td>
								<td> <?php echo $erow['kelas']; ?></td>
							</tr>
							<tr>
								<th>Penempatan</th>
								<td> : </td>
								<td style="text-transform: capitalize;"> <?php echo $erow['penempatan']; ?></td>
							</tr>
							<tr>
								<th>Tanggal Pelaksanaan</th>
								<td> : </td>
								<td> <?php echo date('d F Y', strtotime($erow['tgl_masuk']));  ?></td>
							</tr>
							<tr>
								<th>Tanggal Berakhir </th>
								<td> : </td>
								<td> <?php echo date('d F Y', strtotime($erow['tgl_keluar']));  ?></td>
							</tr>
							<tr>
								<th>Tanggal Tenor </th>
								<td> : </td>
								<?php 
								$masuk = strtotime($erow['tgl_masuk']);
								$keluar = strtotime($erow['tgl_keluar']); 
								?>
								<td> <?php include "tenor.php" ?> Hari   </td>
							</tr>
							<tr>
								<th>Nilai Kinerja</th>
								<td> : </td>
								<td style="text-transform: capitalize; text-align: justify;"> <?php echo $erow['nilai_kinerja']; ?></td>
							</tr>
							<tr>
								<th>Nilai Perilaku</th>
								<td> : </td>
								<td style="text-transform: capitalize; text-align: justify;"> <?php echo $erow['nilai_perilaku']; ?></td>
							</tr>
							<tr>
								<th>No. Sertifikat</th>
								<td> : </td>
								<td style="text-transform: capitalize;"> <?php echo $erow['sertifikat']; ?></td>
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
	</div>
<!-- delete data -->
<div class="modal fade" id="delete<?php echo $row['id_magang']; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times; </button>
						<h4 class="modal-title" id="myModalLabel"> Delete Data</h4>
					</div>
					<!-- Modal Body -->
					<div class="modal-body">
						<form method="POST" id="insert_form" action="proses_deletemagang.php?id_magang=<?php echo $row['id_magang']; ?>">
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
<div class="modal fade" id="edit<?php echo $row['id_magang']; ?>">
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
							$edit=mysqli_query($connect, "select * from data_magang where id_magang = '".$row['id_magang']."'")or die (mysqli_error($connect));
							$erow=mysqli_fetch_array($edit);
						?>
						<form method="POST" id="insert_form" action="proses_editmagang.php?id_magang=<?php echo $row['id_magang']; ?>">
							<div class="form-group">
								<label> Tanggal </label>
								<input class="form-control" type="date" value="<?php echo $erow['tgl_data']; ?>" name="tgl_data" placeholder="Masukkan Tanggal" required="" />
							</div>
							<div class="form-group">
								<label> Kategori </label>
								<select class="form-control" name="jenis" id="jenis" required="">
									<option value="sarjana" <?php $erow['jenis']=='sarjana' ? print "selected":"";?> >Sarjana (S1)</option>
									<option value="diploma" <?php $erow['jenis']=='diploma' ? print "selected":"";?> > Diploma (D3)</option>
									<option value="sma" <?php $erow['jenis']=='sma' ? print "selected":"";?>>SMA</option>
								</select>
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
								<label> Asal Sekolah </label>
								<input class="form-control" type="text" value="<?php echo $erow['asal_sekolah'];?>" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" required="">
							</div>
							<div class="form-group">
								<label> NIS /NIM</label>
								<input class="form-control" type="text" value="<?php echo $erow['nis'];?>" name="nis" placeholder="Masukkan NIS / NIM" />
							</div>
							<div class="form-group">
								<label> No. HP </label>
								<input class="form-control" type="text" value="<?php echo $erow['no_hp'];?>" name="no_hp" placeholder="Masukkan No. HP" />
							</div>
							<div class="form-group">
								<label> Kelas / Semester </label>
								<input class="form-control" type="text" value="<?php echo $erow['kelas'];?>" name="kelas" placeholder="Masukkan Kelas / Semester"  />
							</div>
							<div class="form-group">
								<label> Program</label>
								<input class="form-control" type="text" value="<?php echo $erow['program'];?>" name="program" placeholder="Masukkan Program"  />
							</div>
							<div class="form-group">
								<label> Penempatan </label>
								<input class="form-control" type="text" value="<?php echo $erow['penempatan'];?>" name="penempatan" placeholder="Masukkan Penempatan"  />
							</div>
							<div class="form-group">
								<label> Tanggal Pelaksanaan </label>
								<input class="form-control" type="date" value="<?php echo $erow['tgl_masuk'];?>" name="tgl_masuk" placeholder="Masukkan Tanggal Pelaksanaan"  />
							</div>
							<div class="form-group">
								<label> Tanggal Berakhir </label>
								<input class="form-control" type="date" value="<?php echo $erow['tgl_keluar'];?>" name="tgl_keluar" placeholder="Masukkan Tanggal Berakhir" />
							</div>
							<div class="form-group">
								<label> Nilai Kinerja </label>
								<textarea class="form-control" style="resize: none; height: 120px;" rows="3" type="text" name="nilai_kinerja" placeholder="Masukkan Nilai Kinerja" > <?php echo $erow['nilai_kinerja'];?></textarea>
							</div>
							<div class="form-group">
								<label> Nilai Perilaku </label>
								<textarea class="form-control" style="resize: none; height: 120px;" rows="3" type="text" name="nilai_perilaku" placeholder="Masukkan Nilai Perilaku" > <?php echo $erow['nilai_perilaku'];?> </textarea>
							</div>
							<div class="form-group">
								<label> No. Sertifikat</label>
								<input class="form-control" type="text" value="<?php echo $erow['sertifikat'];?>" name="sertifikat" placeholder="Masukkan No. Sertifikat"s />
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
