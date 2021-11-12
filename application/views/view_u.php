<!DOCTYPE html>
<html>
    <head>
        <title>View User</title>
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
                        <h4> <i class="fas fa-user"></i> User Record</h4>
                </div>
                <div class="col-sm-12 col-md-6">
                    <a href="<?php echo base_url('welcome');?>" class="btn btn-info" style="float:right;">
                        <i class="fas fa-arrow-left"></i>    Back
                    </a>
                </div>
            </div>
            <hr class="bg-dark">

            <table class="table table-striped table-bordered">
                <thead style="background:black; color: white;font-family:lucida sans; text-align:center;">
                    <tr>
                        <td>NAME</td>
                        <td>PHONE</td>
                        <td>EMAIL</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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
                    </tr>
                </tbody>
            </table>

        </div>

    <!-- script -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    </body>
</html>