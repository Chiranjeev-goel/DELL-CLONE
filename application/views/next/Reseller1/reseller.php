<?php include('header.php');?>



         <div class="wrapper">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-9">
                        <div class="page-title-box">
                       
                            <h4 class="page-title">Reseller</h4>
                        </div>
                    </div>
                        </div>
                    </div>

                    <div class="col-3 text-right align-self-center">
                    <button class="btn btn-secondary my-2 my-sm-0"  type="submit">Next</button>

                        <!-- <a href="<?php// echo base_url('users/download'); ?>"><button class="btn btn-primary waves-effect waves-light" type="button"><i class="fas fa-download"></i> Download</button></a>
                    	 -->
                        <!--<button type="button" class="btn btn-primary waves-effect waves-light"><i class="fas fa-filter mr-1"></i>Filter</button>-->
                        
                        <!--<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#filter-model"><i class="fas fa-filter mr-1"></i> Filter</button>-->
                         
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-md-12 table-responsive">
                                    <table id="basic-datatable1" class="table dt-responsive nowrap server-side dataTable ">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Username</th>
                                                <th>Reseller Name</th>
                                                <th>Company</th>
                                                <th>PAN</th>
                                                <th>GST</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody><?php  //echo "<pre>"; print_r($reseller); die()  ?>
                                         <?php $ii=1; 
                                         if(count($reseller) > 0) {
                                         foreach($reseller as $reseller_row)  {?>
                                         <tr>
                                        <td><?php echo $ii; ?></td>
                                        <td><?php echo $reseller_row['User_ID']; ?></td>
                                        <td><?php echo $reseller_row['Username']; ?></td>
                                        <td><?php echo $reseller_row['Company']; ?></td>
                                        <td><?php echo $reseller_row['PAN']; ?></td>
                                        <td><?php echo $reseller_row['GST']; ?></td>
                                        <td><?php echo $reseller_row['Mobile']; ?></td>
                                        <td><?php echo $reseller_row['Email']; ?></td>
                                        <td><?php echo $reseller_row['Status']; ?></td>
                                        <td><?php echo $reseller_row['User_ID']; ?></td>

                                         </tr>

                                        <?php $ii++; }  } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>

            </div> <!-- end container -->
        </div>
        <?php include('footer.php');?>
