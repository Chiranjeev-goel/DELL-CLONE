<?php include('header.php');?>




         <div class="wrapper">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-9">
                    <div class="page-title-box">
                       
                       <h4 class="page-title">Merchant</h4>
                   </div>
                    </div>

                    <div class="col-3 text-right align-self-center">
                    <button class="btn btn-secondary my-2 my-sm-0"  type="submit">Next</button>

                        <a href="<?php echo base_url('users/download'); ?>"><button class="btn btn-primary waves-effect waves-light" type="button"><i class="fas fa-download"></i> Download</button></a>
                    	
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
                                                <th>Merchant ID</th>
                                                <th>Merchant Name</th>
                                                <th>Reseller Name</th>
                                                <th>Company Name</th>
                                                <th>Website</th>
                                                <th>Industry</th>
                                                <th>Country</th>
                                                <th>Payment Getway</th>
                                                <th>Date</th>
                                                <th>Action <?php echo ('complete');?></th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php  //echo "<pre>"; print_r($merchant); ?>
                                         <?php $ii=1; 
                                         if(count($merchant) > 0) {
                                         foreach($merchant as $merchant_row)  {?>
                                         <tr>
                                        <td><?php echo $ii; ?></td>
                                        <td><?php echo $merchant_row['Merchant Name']; ?></td>
                                        <td><?php echo $merchant_row['Reseller Name']; ?></td>
                                        <td><?php echo $merchant_row['Company Name']; ?></td>
                                        <td><?php echo $merchant_row['Website']; ?></td>
                                        <td><?php echo $merchant_row['Industry']; ?></td>
                                        <td><?php echo $merchant_row['Country']; ?></td>
                                        <td><?php echo $merchant_row['Payment Gateway']; ?></td>
                                        <td><?php echo $merchant_row['Date']; ?></td>
                                        <td><?php echo $merchant_row['Action 1']; ?></td>
                                         </tr>
                                        <?php $ii++; }  } ?>

                                        </tbody>

                                        
                                   
                                
                                    </table>

                                  
                    </div>
                </div>
                
                                        
                 <?php include('footer.php');?>                       