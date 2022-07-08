<?php include_once "common/header.php";?>

<h2><b>Update Users</b></h2>
<br>
<form  method="POST" action="<?php echo base_url().'CiCRUD/edit/'.$updtRow['empId']; ?>">

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Name</span>
  <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" name="name" value="<?php echo set_value('name', $updtRow['ename']); ?>">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" name="email" value="<?php echo set_value('email', $updtRow['email']); ?>">
  <span class="input-group-text" id="basic-addon2">@email.com</span>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Designation</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="Designation"value="<?php echo set_value('Designation', $updtRow['designation']); ?>">
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Contact No.</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="phone_number" value="<?php echo set_value('phone_number', $updtRow['contactNo']); ?>">
 
</div>

<div class="input-group mb-3">
  
  <span class="input-group-text">Emp No:</span>
  <input type="text" class="form-control" placeholder="VTS/R/" aria-label="VTS/R/" name="Emp_No" value="<?php echo set_value('Emp_No', $updtRow['empno']); ?>">
</div>

<div class="input-group">
  <span class="input-group-text">Remark</span>
  <textarea class="form-control" aria-label="With textarea" name="Remark" ><?php echo set_value('Remark', $updtRow['remark']); ?></textarea>
</div>
<br>
<button type="submit" class="btn btn-success">Update</button>
<a href="<?php echo base_url('overview');?>" type="button" class="btn btn-dark">Cancel</a>
<?php include_once "common/footer.php";?>