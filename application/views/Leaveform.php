<?php include_once "common/header.php";?>
<div class="row">
        <div class="col-md-12">
          <?php 
            $success= $this->session->flashdata('success');
            if($success !="")
            { ?>
                <div class="alert alert-success"><?php echo $success ;?></div>
          <?php
              $this->session->set_flashdata('success' , '');
            }
//echo "view";
          ?>
         
        </div>
      </div>
<h2><b>Employee Details</b></h2>
<br>
<form  method="POST" action="<?php echo base_url('CiCRUD/LeaveForm');?>">

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Name</span>
  <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" name="name">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" name="email">
  <span class="input-group-text" id="basic-addon2">@email.com</span>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Designation</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="Designation">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Contact No.</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="phone_number">
 
</div>

<div class="input-group mb-3">
  
  <span class="input-group-text">Emp No:</span>
  <input type="text" class="form-control" placeholder="VTS/R/" aria-label="VTS/R/" name="Emp_No">
</div>

<div class="input-group">
  <span class="input-group-text">Remark</span>
  <textarea class="form-control" aria-label="With textarea" name="Remark"></textarea>
</div>
<br>
<button type="submit" class="btn btn-success">SUBMIT</button>
<a href="<?php echo base_url('overview');?>" type="button" class="btn btn-dark">VIEW</a>
<?php include_once "common/footer.php";?>