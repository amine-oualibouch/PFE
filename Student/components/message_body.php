<?php 
 
 if(isset($_POST['submit']))
 {
   
   $content = $_POST['content'];
   $user_id = $_POST['user_id'];
   $sender_id = $_POST['sender_id'];
   
   if($content=="" or $user_id=="" or $sender_id=="")
   {
     echo "<script>alert('Please fill form !');</script>";
   }
   else
   {
     
     $add_message_done = $ravi->add_message($content,$user_id,$sender_id);
     
     echo "<script>alert('Message sent');</script>";
     
     
   }
   
 }


?>
<!--/tabs-inner-->
<div class="main col-11">
  <div class="row first-row">
    <div class="col-8">
      
        <div class="card" style="width: 60rem;margin:0 auto;">
          <div class="card-header">
            <center><h2>Contact a user</h2></center>
          </div>
          <div calss="card-body" style="width: 50rem;margin: 0 auto;float: none;margin-bottom: 10px;">
           
              <form action="" method="post">
                <br>
                <label>To:</label><br>
                <input type="text" name="user_id" style="margin: 10px;"/>
                <br>
                <label>username:</label><br>
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
                <center><button type="submit" class="btn btn-primary btn-lg " name="submit" href="">
                  Send
                </button></center>
                
              </form>
            
</div>
                    
</div>
</div>
</div>