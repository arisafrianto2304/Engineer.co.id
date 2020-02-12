<!-- Data table area Start-->
<div class="admin-dashone-data-table-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset">
                    
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Data Company</h1>
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
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Name</th>
                                        <th data-field="email" data-editable="true">Email</th>
                                        <th data-field="phone" data-editable="true">Contact</th>
                                        <th data-field="company" data-editable="true">City</th>
                                        <th data-field="province" data-editable="true">Province</th>
                                        <th data-field="country" data-editable="true">Country</th>
                                        <th data-field="logo" data-editable="true">Logo</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=1;
                                    foreach ($company as $value) {
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $value->name_company;?></td>
                                        <td><?php echo $value->email_company;?></td>
                                        <td><?php echo $value->contact_company;?></td>
                                        <td><?php echo $value->address_company;?></td>
                                        <td><?php echo $value->city_company;?></td>
                                        <td><?php echo $value->province_company;?></td>
                                        <td><?php echo $value->country_company;?></td>
                                        <td><?php echo $value->logo_company;?></td>
                                        <td><?php echo $value->description_company;?></td>
                                        <td><?php echo $value->date_added;?></td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i></td>
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