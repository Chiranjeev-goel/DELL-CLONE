


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <title>Login</title>
  </head>
  <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

body {
    background: #ecf0f3
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
}

.logo {
    width: 80px;
    margin: auto
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
}

.wrapper .form-field .fas {
    color: #555
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
    letter-spacing: 1.3px
}

.wrapper .btn:hover {
    background-color: #039BE5
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4
}

.wrapper a:hover {
    color: #039BE5
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px
    }
}
  </style>
          <?php echo form_open('Articles/index');?> 

  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
  <div class="wrapper">
    
    <div class="text-center mt-4 name"> Login Page </div>

    <form class="p-3 mt-3" method="POST" action="<?= base_url('login/index')?>">
    <input type="hidden" name="<?= $this->security->get_csrf_token_name()?>" value="<?=$this->security->get_csrf_hash();?>" />
        <div class="form-field d-flex align-items-center">
             <span class="far fa-user"></span>
             
                <div  class ="from-group">
             <label for ="Username">Username: </label>   
                <?php echo form_input(['class'=>'from-control','placeholder'=>'Enter username','name'=>'uname','value'=>set_value('uname')]);
                ?>
            </div>      
             
     </div>
     <?php
                           echo form_error('uname',);
                        // echo validation_errors();
                    ?>
                
        <div class="form-field d-flex align-items-center">
             <span class="fas fa-key"></span>
             <div  class ="from-group">
             <label for ="password">password: </label>   
                <?php echo form_password(['class'=>'from-control','type'=>'password','placeholder'=>'Enter password','name'=>'pass','value'=>set_value('pass')]);
                ?>
                </div>      
                
        </div>
        <?php
                        //   echo validation_errors();
                           echo form_error('pass',);
                    ?>
                      
   
         <button class="btn mt-3">Login</button>
   
    <!-- <button type="button">Login</button>    -->
    
    <?php echo form_submit(['type'=>'reset','class'=>'btn btn-primary','value'=>'reset']);
                ?>
    <input type="checkbox" checked="checked"> Remember me  
    <div> 
    <a href="<?=base_url('users/fogetpassword') ?>"> Forget password </a>

    

</div>
<div>
    <a href="<?php echo base_url();?>Register"> Don't have an account? Sign Up</a>
    </div>
    </form>
</div>
  </body>
</html>
