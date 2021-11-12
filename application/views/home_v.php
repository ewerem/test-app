<!DOCTYPE html>
<html>
    <head>
        <title>Crud Home Page</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    </head>
    <body>
        
        <div class="bg-dark pt-2 pb-2 text-white text-center">
            <h2 style="text-family:lucida sans">CRUD APP WITH CODEIGNITER</h2>
        </div>
        <br>

        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-6">
                        <h4> <i class="fas fa-user"></i> User Records</h4>
                </div>
                <div class="col-sm-12 col-md-6">
                    <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-info" style="float:right;">
                        <i class="fas fa-user-plus"></i>    Add User
                    </a>
                </div>
            </div>
            <hr class="bg-dark">

            <?php
                if($this->session->flashdata('success_msg')){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?=$this->session->flashdata('success_msg')?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                }
            ?>

            <table class="table table-striped table-bordered">
                <thead style="background:black; color: white;font-family:lucida sans; text-align:center;">
                    <tr>
                        <td>S/N</td>
                        <td>NAME</td>
                        <td>PHONE</td>
                        <td>EMAIL</td>
                        <td>VIEW</td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if($users){
                        $count = 1;
                        foreach($users as $user){

                ?>
                    <tr>
                        <td style="text-align:center;">
                            <p>
                                <?=$count++?>
                            </p>
                        </td>
                        <td style="text-align:center;">
                            <p>
                                <?=$user->name?>
                            </p>
                        </td>
                        <td style="text-align:center;">
                            <p>
                                <?=$user->phone?>
                            </p>
                        </td>
                        <td style="text-align:center;">
                            <p>
                                <?=$user->email?>
                            </p>
                        </td>
                        <td style="text-align:center;">
                            <center>
                                <a href="<?php echo base_url('home/view/'.$user->id);?>"> View User</a>
                            </center>
                        </td>
                        <td>
                            <center>
                                <a href="#" data-toggle="modal" data-target="#exampleModaledit<?=$user->id?>" class="btn btn-secondary"><i class="fas fa-edit"></i> Edit</a>
                            </center>
                            <!-- modal edit user -->
                            <div class="modal fade" id="exampleModaledit<?=$user->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="<?php echo base_url('home/update');?>" method="post">
                                        <input type="text" name="uname" class="form-control" value="<?=$user->name?>" required>
                                        <p></p>
                                        <input type="number" name="uphone" class="form-control" value="<?=$user->phone?>" required>
                                        <p></p>
                                        <input type="email" name="uemail" class="form-control" value="<?=$user->email?>" required>
                                        <p></p>
                                        <input type="hidden" name="dtime" class="form-control" value="<?=date("Y-M-D H:i:s")?>" required>
                                        <input type="hidden" name="user_id" class="form-control" value="<?=$user->id?>" required>

                                        <button type="submit" class="btn btn-info">Submit Changes</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></p>
                                    </form>

                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- end of edit modal -->
                        </td>
                        <td>
                            <center>
                                <a href="" data-toggle="modal" data-target="#exampleModaldelete<?=$user->id?>" class="btn btn-danger"><i class="fas fa-times"></i> Delete</a>
                            </center>
                            <!-- modal delete user -->
                            <div class="modal fade" id="exampleModaldelete<?=$user->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="<?php echo base_url('home/delete');?>" method="post">
                                        <h5>
                                         Are You Sure You Want To Delete User <?=strtoupper($user->name)?>
                                        </h5>

                                        <input type="hidden" name="user_id" value="<?=$user->id?>">
                                        <p></p>
                                        <button type="submit" class="btn btn-danger">Yes</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">No</button></p>
                                    </form>

                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- end of delete modal -->
                        </td>
                    </tr>
                <?php
                     }
                     $count++;
                    }
                ?>
                </tbody>
            </table>

        </div>
       
        

<!-- modal add user -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?php echo base_url('home/submit');?>" method="post">
            <input type="text" name="uname" class="form-control" placeholder="Name" required>
            <p></p>
            <input type="number" name="uphone" class="form-control" placeholder="Phone Number" required>
            <p></p>
            <input type="email" name="uemail" class="form-control" placeholder="Email" required>
            <p></p>
            <input type="hidden" name="dtime" class="form-control" value="<?=date("Y-M-D H:i:s")?>" required>

            <button type="submit" class="btn btn-info">Submit New User</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></p>
        </form>

      </div>
    </div>
  </div>
</div>

    <!-- script -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    </body>
</html>