<?php include('header.php');?>
<?php include('footer.php');?>


         <div class="wrapper">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-9">
                        <div class="page-title-box">
                            <h4 class="page-title">Transactions History</h4>
                        </div>
                    </div>

                    <div class="col-3 text-right align-self-center">
                        
                        <a href="<?php echo base_url('users/transactiondownload'); ?>"><button class="btn btn-primary waves-effect waves-light" type="button"><i class="fas fa-download"></i> Download</button></a>
                    	
                        <!--<button type="button" class="btn btn-primary waves-effect waves-light"><i class="fas fa-filter mr-1"></i>Filter</button>-->
                        
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#filter-model"><i class="fas fa-filter mr-1"></i> Filter</button>
                         
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="basic-datatable1" class="table dt-responsive nowrap server-side dataTable ">
                                    <thead>
                                        <tr>
                                            <th>Serial no.</th>
                                            <th>Order ID</th>
                                            <th>Serial No</th>
                                            <th>Total pages</th>
                                            <th>Type of Job</th>
                                            <th>Amount</th>
                                            <th>Paper Size</th>
                                            <th>Color</th>
                                            <th>Date</th>
                                            <th>Status</th>

                                        </tr>
                                    
                                    </thead>
                                    <tbody>
                                         <?php $ii=1; 
                                         if(count($transaction) > 0) {
                                         foreach($transaction as $transaction_row)  {?>
                                         <tr>
                                        <td><?php echo $ii; ?></td>
                                        <td><?php echo $transaction_row['Order ID']; ?></td>
                                        <td><?php echo $transaction_row['Serial No']; ?></td>
                                        <td><?php echo $transaction_row['Total pages']; ?></td>
                                        <td><?php echo $transaction_row['Type of job']; ?></td>
                                        <td><?php echo $transaction_row['Amount']; ?></td>
                                        <td><?php echo $transaction_row['Paper Size']; ?></td>
                                        <td><?php echo $transaction_row['Color']; ?></td>
                                        <td><?php echo $transaction_row['Date']; ?></td>
                                        <td><?php echo $transaction_row['Status']; ?></td>
                                        </tr>
                                        <?php $ii++; }  } ?>
                                     </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>

            </div> <!-- end container -->
        </div>
