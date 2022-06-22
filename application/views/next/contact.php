<!-- <?php include('header.php');?>
<?php include('footer.php');?> -->


    <!DOCTYPE html>   
    <html>   
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Contact page</title>  
    <link href="<?php echo base_url();?>assets/img/logo/img.png" type="image/ico" rel="shortcut icon"/>
    <style>   
    Body {  
    font-family: Calibri, Helvetica, sans-serif;  
    background-color: pink;  
    }  
    button {   
        background-color: yellow;   
        width: auto%;  
            color: red;   
            padding: 10px;   
            margin: 20px 20px;   
            border: auto;   
            cursor: pointer;   
            }   
    /* form {   
            border: 1px solid #f1f1f1;   
        }    */
    input[type=text], input[type=password] {   
            width: 60%; 
            margin: 5px 17px;  
            padding: 5px 3px;   
            display: inline-block;   
            border: 2px solid yellow;   
            box-sizing: border-box;
            
        }  
        
    button:hover {   
            opacity: 0.7;   
        }   
    .btn {   
            width: auto;   
            padding: 5px 3px;  
            margin: 5px 5px;
    }

   
    .container {  
     
  align-items: center;
  height: 40vh;
  background: linear-gradient(45deg , dodgerblue);
  font-family: "Sansita Swashed", cursive; 
        width: 40%; 
        margin: 200px 400px;    
        padding: 10px 0px;   
            background-color: lightgreen;  
            align:;
        }   
   
    </style>   
    </head>    
    <body>    


        

    <div class="container">  
        <center> <h1> CONTACT PAGE </h1> </center> 
        <?php echo form_open('Articles/index');?> 

        <div class="row"> 
        <div class="col-lg-6">
                <div  class ="from-group">
                <label for ="Email">Email: </label>   
                <?php echo form_input(['class'=>'from-control','placeholder'=>'Enter Email','name'=>'Ename','value'=>set_value('Ename')]);
                ?>
                </div>
                </div>
                <div class="col-lg-6">
                <!-- <?php echo form_error('Ename',);?> -->
                </div>
                </div>
                
                <label for ="Name">Name: </label>   
                <?php echo form_input(['class'=>'from-control','placeholder'=>'Enter Name','name'=>'uname']);
                ?>
                <!-- <input type="text" placeholder="Enter Username" name="username" required>   -->
                <!-- <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>   -->
                <div class="row"> 
        <div class="col-lg-6">
                <div  class ="from-group">
                <label for ="password">password: </label>   
                <?php echo form_password(['class'=>'from-control','type'=>'password','placeholder'=>'Enter password','name'=>'pass','value'=>set_value('pass')]);
                ?>
                </div>
                </div>
                <div class="col-lg-6">
                <!-- <?php echo form_error('uname',);?> -->
                </div>
                </div>
                <div>

                
			</div>
                <!-- <button type="button">Login</button>    -->
                <input type="checkbox" checked="checked"> Remember me   
                <!-- <button type="button" class="cancelbtn"> Cancel</button>    -->
                
                <?php echo form_submit(['type'=>'submit','class'=>'btn btn-success btn-block btn-flat','value'=>'submit']);
                ?>
;

    </div>
    </div> 
        

    </body>     
    </html>  