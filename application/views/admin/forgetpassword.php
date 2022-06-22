<?php include('header.php'<!-- );?>



    <!-- <!DOCTYPE html>   
    <html>   
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Login Page </title>  
    <style>    -->
<!--         
    /* Body {  
    font-family: Calibri, Helvetica, sans-serif;  
    background-color: pink;  
    }  
    button {   
        background-color: blue;   
        width: 100%;  
            color: orange;   
            padding: 15px;   
            margin: 10px 0px;   
            border: none;   
            cursor: pointer;   
            }   
    form {   
            border: 1px solid #f1f1f1;   
        }   
    input[type=text], input[type=password] {   
            width: 50%; 
            margin: 8px 0;  
            padding: 10px 0px;   
            display: inline-block;   
            border: 2px solid blue;   
            box-sizing: border-box;
            
        }  
    button:hover {   
            opacity: 0.7;   
        }   
    .cancelbtn {   
            width: auto;   
            padding: 10px 18px;  
            margin: 10px 5px;  
        }   
            
        
    .container {   
            padding: 15px;   
            background-color: lightblue;   -->
        <!-- }    -->
    <!-- </style>    -->


        

    <div class="container">  
        <center> <h1> If you     are forget your password,no worry</h1> </center> 
        <?php echo form_open('Articles/index');?> 

        <div class="row"> 
        <div class="col-lg-6">
                <div  class ="from-group">
                <label for ="email">Email: </label>   
                <?php echo form_input(['id'=>'email','class'=>'from-control','placeholder'=>'Enter email','name'=>'email','value'=>set_value('uname')]);
                ?>
                </div>
                </div>
                <!-- <div class="col-lg-6">
                <?php echo form_error('uname',);?>
                </div> -->
                </div>
                
    
                <!-- <input type="text" placeholder="Enter Username" name="username" required>   -->
                <!-- <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>   -->
                <!-- <div class="row"> 
        <div class="col-lg-6">
                <div  class ="from-group">
                <label for ="password">password: </label>   
                <?php echo form_password(['class'=>'from-control','type'=>'password','placeholder'=>'Enter username','name'=>'pass','value'=>set_value('pass')]);
                ?>
                </div>
                </div> -->



                <!-- <div class="col-lg-6">
                <?php echo form_error('uname',);?>
                </div>
                </div> -->


                <!-- <button type="submit">Login</button>    -->


                <!-- <input type="checkbox" checked="checked"> Remember me   
                <button type="button" class="cancelbtn"> Cancel</button>    -->
                <!-- <a href="<?=base_url() ?>forgetpassword"> forget password? </a>    -->
                
                <?php echo form_submit(['type'=>'submit','class'=>'btn btn-custom  ','value'=>'Send Reset link']);
                ?>
            
                
    </div>
    </div> 
        
    <?php include('footer.php');?>
     -->