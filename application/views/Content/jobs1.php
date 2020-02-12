<!-- start drop cv page -->

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <!-- <h3 class="mb-30 title_color">Silahkan masukkan CV mu</h3> -->
                        <form action="<?php echo base_url(). 'Jobs/add'; ?>"  method="post" enctype="multipart/form-data">
                            
                            <div class="mt-10">
                                <div>
									<label>Nama Perusahaan</label>
								</div>
                                <input type="text" name="namaperusahaan" placeholder="....." onfocus="this.placeholder = ''" onblur="this.placeholder = '.....'" required class="single-input">
                            </div>

                            <div class="chosen-select-single mt-10">
                                <div>
									<label>Kualifikasi</label>
								</div>
                                <select class="chosen-select" id="lowongan" name="kualifikasi" required>
									<!-- <option selected>Kualifikasi</option> -->
									<option value="informatika">Teknik Informatika</option>
									<option value="sipil">Teknik Sipil</option>
									<option value="mesin">Teknik Mesin</option>
                                    <option value="other">Other..</option>
								</select>
                            </div>

                            <div class="mt-10">
                                <div>
									<label>Bidang Pekerjaan</label>
								</div>
                                <input type="text" name="bidang_pekerjaan" placeholder="....." onfocus="this.placeholder = ''" onblur="this.placeholder = '.....'" required class="single-input">
                            </div>

                            <div class="mt-10">
                                <div>
									<label>Deskripsi Pekerjaan</label>
								</div>
                               <textarea type="deskripsi" name="deskripsi" placeholder="....." onfocus="this.placeholder = ''" onblur="this.placeholder = '.....'" required class="single-input"></textarea>
                            </div>
                        
                            <div class="button-group-area mt-10">
                                <button name="add" class="genric-btn primary-border">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->

<!-- end drop cv page