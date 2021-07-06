<!--/tabs-inner-->
<div class="main col-11">
  <div class="row first-row">
    <div class="col-8">
      <section id="recently-posted">
        <div class="card">
          <div class="card-header">
            Change password
          </div>
          

          <div class="col-md-12">
                        <?php 
                        if(isset($_POST['change_password']))
                        {
                          
                          $prev_password = $parent_name_display['pr_pass'];
                          $old_password = $_POST['old_password'];
                          
                          if($prev_password!=$old_password)
                          { 
                            echo "<script>alert('Old Password Does not Matched');</script>";  
                          }
                          else
                          {
                            $pr_username = $parent_name_display['pr_username'];
                          $pr_password_update = $_POST['new_password'];
                            $update_success = $ravi->parent_password_change($pr_password_update,$pr_username);
                            print_r($update_success);
                          
                          if($update_success==true)
                          {
                          echo "<script>window.location = 'home.php?success';</script>";
                          }
                            else
                            {
                              echo "<script>alert('cant update password');</script>";
                            }
                          }
                          
                        }
                    
                        ?>
                        <form method="post">
                          <ul class="list-group list-group-flush">
              <li class="list-group-item">
              <div class="row g-0">
                <div class="input-group input-icon">
                          <span class="input-group-addon">
                        <i class="fa fa-key"></i> </span>
                          <input type="password" class="form-control" name="old_password" placeholder="Old Password">
                          
                        </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="input-group input-icon">
                          <span class="input-group-addon">
                        <i class="fa fa-key"></i> </span>
                          <input type="password" class="form-control" placeholder="New Password" name="new_password">
                          
                        </div>  
              </div>
            </li>
                        
                        
                            <div class="col-md-12 text-center">
                           <button type="submit" class="btn btn-primary btn-lg " 
                           name="change_password" >Change password</button>
                        </div>
                          </form>
                      </div>  


        </div>
      </section>
    </div>