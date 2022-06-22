<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <title>User Registation</title>
</head>
<style>
.card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
}

.card-registration .select-arrow {
    top: 13px;
}
</style>

<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">

                            <div class="col-xl-12">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">User registration form</h3>
                                    <?php

echo validation_errors('<div class="error">', '</div>');
?>
                                    <form class="row g-3 needs-validation" method="post"
                                        action="<?php echo base_url('register/send_mail');?>" novalidate>
                                        <div class="col-md-4">
                                            <label for="input1" class="form-label">First name</label>
                                            <input type="text" class="form-control" name="f_name" id="input1"
                                                value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="input2" class="form-label">Last name</label>
                                            <input type="text" class="form-control" name="l_name" id="input2"
                                                value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="input3" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" 
                                                    id="inputGroupPrepend">@</span>
                                                <input type="email" class="form-control"  name="email" id="input3"
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="input4" class="form-label">City</label>
                                            <input type="text" class="form-control" name="city" id="input4" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="select1" class="form-label">State</label>
                                            <select class="form-select" name="state" id="select1" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option value="DELHI">DELHI</option>
                                                <option value="RAJASHTHAN">RAJASHTHAN</option>
                                                <option value="MP">MP</option>
                                                <option value="UTTARPRADESH">UTTARPRADESH</option>
                                                <option value="JAMMU&KASHMIR">JAMMU&KASHMIR</option>
                                                <option value="AP">AP</option>
                                                <option value="MUMBAI">MUMBAI</option>

                                                
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="input5" class="form-label">Pin code</label>
                                            <input type="text" name="pincode" class="form-control" id="input5"
                                                required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="input4" class="form-label">Address</label>
                                            <input type="text" id="form3Example8" required="required" name="address"
                                                class="form-control form-control-lg" />
                                            <div class="invalid-feedback">
                                                Please provide a valid Address.
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" required="required" type="radio" name="gander"
                                                    id="femaleGender" value="option1" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div><br>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gander"
                                                    id="maleGender" value="option2" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div><br>

                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="gander"
                                                    id="otherGender" value="option3" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>

                                            <div class="invalid-feedback">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="input5" class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control" id="input5"
                                                required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                        
                                          
                                            <div class="col-md-4">
                                            <label for="input2" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="input2"
                                                value="" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        <!-- </div> -->
                                        <?php 
      //   echo $this->session->flashdata('email_sent'); 
       //  echo form_open('/Register/send_mail'); 
      ?>
                                        <script>

 

                                        (function() {
                                            'use strict'


                                            var forms = document.querySelectorAll('.needs-validation')

                                            // Loop over them and prevent submission
                                            Array.prototype.slice.call(forms)
                                                .forEach(function(form) {
                                                    form.addEventListener('submit', function(event) {
                                                        if (!form.checkValidity()) {
                                                            event.preventDefault()
                                                            event.stopPropagation()
                                                        }

                                                        form.classList.add('was-validated')
                                                    }, false)
                                                })
                                        })()
                                        </script>
                                        <div class="d-flex justify-content-end pt-3">
                                        <?php echo form_submit(['type'=>'reset','class'=>'btn btn-primary','value'=>'reset']);
                ?>
                                            <button type="submit" name="submit" class="btn btn-warning btn-lg ms-2">Submit
                                                form</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>