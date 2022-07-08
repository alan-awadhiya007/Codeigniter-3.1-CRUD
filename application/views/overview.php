<?php include_once "common/header.php";?>
<div class="row">
        <div class="col-md-12">
          <?php 
            $success = $this->session->flashdata('delSucc');
            $failure = $this->session->flashdata('delFail');
            if($success !="")
            { ?>
                <div class="alert alert-success"><?php echo $success ;?></div>
          <?php
              $this->session->set_flashdata('delSucc' , '');
            }else{
          ?>
            <div class="alert alert-failure"><?php echo $failure ;?></div>
          <?php 
            $this->session->set_flashdata('delFail' , '');
           }

          ?>
         
        </div>
        <div class="col-md-12">
          <?php 
            $success= $this->session->flashdata('succes');
            if($success !="")
            { ?>
                <div class="alert alert-success"><?php echo $success ;?></div>
          <?php
              $this->session->set_flashdata('succes' , '');
            }
//echo "view";
          ?>
      </div>
    </div>
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Designation</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Emp No.</th>
      <th scope="col">Remark</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php   //view mei likhna hai 
           if(!empty($users))
      {
        $i=1;
    foreach($users as $single)  //single is variable 
       {
                    
                 ?>
    <tr>
        
      <!--<th scope="row"><?php echo $single['empId']; ?></th>-->   
      <td><?php echo $i++; ?></td>
      <td><?php echo $single['ename']; ?></td>
      <td><?php echo $single['email']; ?></td>
      <td><?php echo $single['designation']; ?></td>
      <td><?php echo $single['contactNo']; ?></td>
      <td><?php echo $single['empno']; ?></td>
      <td><?php echo $single['remark']; ?></td>
      <td>

        <a href="<?php echo base_url(). 'CiCRUD/edit/'.$single['empId'] ?>" style="color:blue; padding: 8px;">
          <i class="fas fa-pencil-alt"></i>
        </a>
        <a href="<?php echo base_url(). 'CiCRUD/delete/'.$single['empId']; ?>" style="color:red; padding: 8px;">
          <i class="fas fa-trash-alt"></i>
        </a>

      </td>
    
    </tr>
      <?php
    }
           } 
    ?>
  </tbody>
</table>

<?php include_once "common/footer.php";?>