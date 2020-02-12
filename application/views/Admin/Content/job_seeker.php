<!-- Job Seeker Page -->

<!-- Data table area Start-->
<div class="admin-dashone-data-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Data Job Seeker</h1>
                            <div class="sparkline8-outline-icon">
                                <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                                
                    <div class="sparkline8-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">ID</th>
                                        <th data-field="email" data-editable="true">Email</th>
                                        <th data-field="contact" data-editable="true">Contact</th>
                                        <th data-field="klasifikasi">Klasifikasi</th>
                                        <th data-field="bidang">Bidang</th>
                                        <th data-field="gaji">Gaji</th>
                                        <th data-field="company">Curriculum Vitae</th>
                                    </tr>
                                </thead>
                                <tbody>    
                                    <?php
                                    $no=1;
                                    foreach ($jobseeker as $value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value->email;?></td>
                                        <td><?php echo $value->kontak;?></td>
                                        <td><?php echo $value->kualifikasi; ?></td>
                                        <td><?php echo $value->Bidang; ?></td>
                                        <td><?php echo $value->gaji; ?></td>
                                        <td><u><a href="<?php echo base_url(),"uploads/cv/",$value->curriculum_vitae,".pdf"; ?>"><?php echo $value->curriculum_vitae;?>.pdf</a></u></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data table area End-->