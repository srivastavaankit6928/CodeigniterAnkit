<?php include "Header.php"
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">

              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= form_open('Registration_Action'); ?>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      

                      <?php
                      $name =array(
                      'type' => "text",
                      'name'  => 'name',
                      'class' =>"form-control",
                      'value'=>   set_value('name'),
                      'id'=> "inputname",
                      'placeholder' => "Your Name",
                      'required' =>'required'
                      );

                      echo form_input($name);
                      ?>
                       <?php echo form_error('name'); ?>
                    </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputnumber" class="col-sm-2 col-form-label">Phone No</label>
                    <div class="col-sm-10">                     
                      <?php
                      $phone = array(
                        'type' => 'number',
                        'name'  => 'phone',
                        'class' =>"form-control" ,
                        'value'=>   set_value('phone'),
                        'id' => "inputnumber",
                        'placeholder' => "Enter Number",
                        'required' =>'required' 
                       );
                       echo form_input($phone);
                      ?>
                      <?php echo form_error('phone'); ?>
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      
                      <?php
                       $email = array(
                        'type' => 'email',
                        'name'  => 'email',
                        'class' => 'form-control' ,
                        'value'=>   set_value('email'),
                        'id' => 'inputemail' ,
                        'placeholder' => 'Your email' ,
                        'Required' => 'Required'
                      );
                      echo form_input($email);
                      ?>
                      <?php echo form_error('email'); ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class=" col-sm-3">
                      <?php
                      $Password = array(
                        'type' => 'password',
                        'name'  => 'password',
                        'class' => 'form-control', 
                        'id' => 'inputPassword3', 
                        'placeholder' => 'Password' , 
                        'required' => 'Required' 
                      );
                      echo form_input($Password);
                        ?>
                        <?php echo form_error('password'); ?>
                    </div>
                    
                    <label for="inputPassword3" class="col-sm-3 col-form-label"> Confirm Password</label>    
                    <div class=" col-sm-3">
                    
                      <?php
                      $CPassword = array(
                        'type' => 'password',
                        'name'  => 'cpassword',
                        'class' => 'form-control', 
                        'id' => 'inputPassword3', 
                        'placeholder' => 'Confirm Password' , 
                        'required' => 'Required' 
                      );
                      echo form_input($CPassword);
                        ?>
                        <?php echo form_error('password'); ?>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputadd" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                    
                    <?php
                    $Address = array(
                      'type' => 'textarea' ,
                      'name'  => 'address',
                      'class' => 'form-control',
                      'rows' => '5',
                      'id' =>'address' ,
                      'placeholder' => 'Your Address' ,
                      'Required' =>'Required' 
                   );
                    echo form_textarea($Address)
                    ?>
                    <?php echo form_error('Address'); ?>  
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">I hereby , confirming that all the above mentioned details are valid.</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div>
      </div>
    </div>
</section>

<?php include "Footer.php"; ?>