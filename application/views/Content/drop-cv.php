<!-- start drop cv page -->

	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30 title_color">Silahkan masukkan CV mu</h3>
						<form action="<?php echo base_url(). 'DropCV/add'; ?>"  method="post" enctype="multipart/form-data">
							<div class="mt-10">
								<div>
									<label>Nomor Kontak</label>
								</div>
								<input type="text" name="contact" placeholder="contoh : 081231231234 " onfocus="this.placeholder = ''" onblur="this.placeholder = 'contoh : 081231231234'" required class="single-input">
                            </div>
                            <div class="mt-10">
								<div>
									<label>Alamat Email</label>
								</div>
								<input type="email" name="email" placeholder="contoh : example@example.com" onfocus="this.placeholder = ''" onblur="this.placeholder = 'conto : example@example.com'" required class="single-input">
							</div>
							<div class="chosen-select-single mt-10">
								<div>
									<label>Klasifikasi</label>
								</div>
								<select data-placeholder="Kualifikasi" class="chosen-select" tabindex="-1" id="lowongan" name="kualifikasi" required>
									<option value="informatika">Teknik Informatika</option>
									<option value="sipil">Teknik Sipil</option>
									<option value="mesin">Teknik Mesin</option>
								</select>
							</div>
							<div class="chosen-select-single mt-10">
								<label>Bidang</label>
								<select class="chosen-select" data-placeholder="Pilih Bidang Yang Diinginkan" id="bidang" name="bidang" tabindex="-1" required>
									<!-- <option value="">Select</option> -->
									<option value="PRO">Programmer</option>
									<option value="SA">Sistem Analisis</option>
									<option value="NA">Network Administrator</option>
									<option value="KERP">Konsultan ERP</option>
									<option value="GD">Game Developer</option>
									<option value="KONS">Konsultan</option>
									<option value="ProyekPembangunan">Proyek/Pembangunan</option>
									<option value="IK">Insinyur Konstruksi</option>
									<option value="PB">Pemeliharaan Bangunan</option>
									<option value="SKP">Senior Kontrol Pembangunan</option>
									<option value="ISD">Insinyur Sumber Daya</option>
									<option value="PM">Pengawasan Mesin</option>
									<option value="PengoperasianMesin">Pengoperasian Mesin</option>
									<option value="PKM">Perancangan dan Kontruksi Mesin</option>
									<option value="ProsesManufaktur">Proses Manufaktur</option>
									<option value="STMM">Staff Teknik Mesin / Maintenance</option>

								</select>
							</div>
							<div class="chosen-select-single mt-10">
								<div>
									<label>Gaji Yang diinginkan!</label>
								</div>
								<select select data-placeholder="Gaji Yang Diinginkan!" class="chosen-select" tabindex="-1" id="gaji" name="gaji" required>
									<option value="1juta">< Rp. 1.500.000  </option>
									<option value="3juta">Rp. 1.500.000 - Rp. 3.000.000 </option>
									<option value="5juta">Rp. 3.000.000 - Rp. 5.000.000 </option>
									<option value="10juta">Rp. 5.000.000 - Rp. 10.000.000 </option>
									<option value="10jutaup">Rp. 10.000.00 > </option>
								</select>
							</div>
							<div class="mt-10">
								<div>
									<label class="">Upload Curriculum Vitae <strong style="color:red;">pdf* Max 10MB</strong></label>
								</div>
								<input type="file" name="cv" required >
								<a style="color:red;"><?php echo $error?></a>
							</div>
						
							<div class="button-group-area mt-10">
                                <button name="add" type='submit' class="genric-btn primary-border">Submit</button>
                            </div>

						</form>
					</div>
					<!-- Buat Tampilin Bidang Apa Saja -->
					<!-- <div class="col-lg-4 col-md-4"></div>   -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

<!-- end drop cv page -->