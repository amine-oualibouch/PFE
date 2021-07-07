<?php 
 
 if(isset($_POST['submit']))
 {
   // $std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact
   $content = $_POST['content'];
   $user_id = $_POST['user_id'];
   $sender_id = $_POST['sender_id'];
   
   if($content=="" or $user_id=="" or $sender_id=="")
   {
     echo "<script>alert('please fill form and Add Student');</script>";
   }
   else
   {
     
     $add_message_done = $ravi->add_message($content,$user_id,$sender_id);
     if($add_message_done==true)
     {
       echo "message sent";
     }
     else
     {
       echo "error";
     }
     
   }
   
 }


?>
<!--/tabs-inner-->
<div class="main col-11">
  <div class="row first-row">
    <div class="col-8">
        <div class="card">
          <div class="card-header">
            <center><h2>Contact a user</h2></center>
          </div>
          <div calss="card-body" style="width: 50rem;margin: 0 auto;float: none;margin-bottom: 10px;">
           
              <form action="" method="post">
                <br>
                <label>To:</label><br>
                <input type="text" name="user_id" style="margin: 10px;"/>
                <br>
                <label>Votre nom:</label><br>
                <input type="text" name="sender_id" style="margin: 10px;"/>
                <br>
                <label>Message :</label><br>
                <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                name="content"
                rows="3"
                style="margin: 10px;"
               >
                  
                </textarea>
                <center><button type="submit" class="btn btn-primary btn-lg " name="submit" >Send</button></center>
                
              </form>
            
</div>                    
</div>
</div>
</div>