<!--/tabs-inner-->
<div class="main col-11">
  <div class="row first-row">
    <div class="col-8">
        <div class="card">
          <div class="card-header">
            <center><h2>Contact a user</h2></center>
          </div>
          <div calss="card-body" style="width: 50rem;">
           
              <form method="post" action="message1.php">
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