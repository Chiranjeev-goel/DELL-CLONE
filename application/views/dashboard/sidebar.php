 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i> Clone Dell</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo base_url();?>Assest/s/img/book.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Chiranjeev Goel</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div> -->
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php  echo base_url('users/Transactionhistory'); ?>" class="dropdown-item">Transaction history</a>
                            <a href="<?php  echo base_url('users/Reseller'); ?>" class="dropdown-item">Reseller</a>
                            <a href="<?php  echo base_url('users/Merchent'); ?>" class="dropdown-item">Merchent</a>  
                            <!-- <a href="blank.html" class="dropdown-item">Blank Page</a> -->
                        </div>
                    </div>
                    <!-- <a href="contact.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i></a> -->
                    <a href="<?php  echo base_url('users/contact'); ?>" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>contact</a>
                    <!-- <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>

                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
          -->
                 
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
