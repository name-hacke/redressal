<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title></title>

  </head>
  <body>
    <img src="<?php echo base_url(); ?>images/book1.jpg" alt="" class="img-fluid img_size responsive">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <h3 class="card-title main-heading"><strong>Grievance and Redressal</strong></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
          <div class="container container-secondary">
            <div class="row">
              <div class="col-lg-6 col-md-7 col-sm-12" style="padding-left:30px;">
                <h4 id="faq">FAQ's</h4>
                <h5 class="questions">What is Grievances and Redressal?</h5>
                <p>Answer here...</p>
                <hr>
                <h5 class="questions">Why I have to fill the form?</h5>
                <p>Answer here...</p>
                <hr>
                <h5 class="questions">Another question?</h5>
                <p>Answer here...</p>
                <hr>
                <h5 class="questions">Yet another question?</h5>
                <p>Answer here...</p>
                <hr>
              </div>
              <div class="col-lg-1 vertical-line">
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12">
                <div class="card card_custom">
                  <div class="card-title formtitle">
                    <strong>Fill out the form</strong>
                  </div>
                  <!-- <form action="<?php  ?>grievance/gform" method="POST" name="proceed"> -->
                    <form action="" method="POST">
                    <div class="form-group">
                      <h5 class="center-align">Affiliation</h5>
                      <select class="custom-select" name="aff" id="aff">
                        <option label=" "></option>
                        <option value="1">Student</option>
                        <option value="2">Staff</option>
                        <option value="3">Alumni</option>
                        <option value="4">Worker</option>
                        <option value="5">Parent</option>
                      </select>
                        <?php echo form_error('aff','<div class="text-danger">','</div>'); ?>
                      <hr>
                      <label class="col-form-label" for="inputDefault">Roll number</label>
                      <input type="text" class="form-control" placeholder="16us31" id="id_rollno" name="rollno"value="<?php echo set_value('rollno');?>">
                        <?php echo form_error('rollno','<div class="text-danger">','</div>'); ?>
                      <label class="col-form-label" for="inputDefault">Name</label>
                      <input type="text" class="form-control" placeholder="John Doe" id="id_name" name="name" value="<?php echo set_value('name');?>">

                        <?php echo form_error('name','<div class="text-danger">','</div>'); ?>
                      <label class="col-form-label" for="inputDefault">Father's Name</label>
                      <input type="text" class="form-control" placeholder="Doe" id="id_fname" name="fname" value="<?php echo set_value('fname');?>">
                        <?php echo form_error('fname','<div class="text-danger">','</div>'); ?>
                      <label class="col-form-label" for="inputDefault">Date of birth</label>
                      <input type="date" class="form-control" placeholder="DD/MM/YYYY" id="id_dob" name="dob" value="<?php echo set_value('dob');?>">
                        <?php echo form_error('dob','<div class="text-danger">','</div>'); ?>
                      <br>
                      <div style="text-align:center;">
                        <input type="submit" style="text-align:center;"class="btn btn-info" value="Proceed" name="proceed">
                      </div>
                    </div>
                  </form>
              </div>
            </div>
            </div>
          </div>
        </div>

    </div>
  </div>

  </body>
</html>
