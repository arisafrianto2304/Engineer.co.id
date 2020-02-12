<!-- start contact page -->
    <!-- Map Area Starts -->
    <section class="map-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="mapBox" class="mapBox" 
                        data-lat="-6.930160" 
                        data-lon="107.617027" 
                        data-zoom="13" 
                        data-info="Jl. Telekomunikasi, Jl. Terusan Buah Batu No.01"
                        data-mlat="40.701083"
                        data-mlon="74.1522848">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h4>Bandung, Jawa Barat</h4>
                            <p>Jl. Telekomunikasi, Jl. Terusan Buah Batu No.01</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h4>+62 822 8200 2190</h4>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-text">
                            <h4>helper@engineer.co.id   </h4>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form action="<?php echo base_url(). 'Contact/pesan'; ?>" method="post" >
                        <div class="left">
                            <input type="text" name="name" placeholder="Masukan Nama Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="email" name="email" placeholder="Masukan Email Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                            <input type="text" name="subject" placeholder="Masukan Subjek" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required>
                        </div>
                        <div class="right">
                            <textarea name="message" cols="20" rows="7"  placeholder="Pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea>
                        </div>
                        <button type="submit" name="pesan" class="template-btn">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->


<!-- end contact page -->