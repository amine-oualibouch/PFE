<!--/tabs-inner-->
<div class="main col-11">
  <div class="row first-row">
    <div class="col-8">
      <section id="recently-posted">
        <div class="card">
          <div class="card-header">
            <center><h2>Votre message</h2></center>
          </div>
          <div class="graph">
                              <div class="tables">
                              
                                <table class="table table-hover"> 
                                  <thead>
                                    <tr> 
                                      <th>id</th>  
                                      <th>Message from</th> 
                                      <th>To</th>
                                      <th>Message</th> 
                                      
                                    </tr> 
                                  </thead> 
                                  <tbody>
                              <?php 
                              $st_username = $parent_name_display['pr_username'];
                              $sn = 1;
                              $message_info_in_student = $ravi->message_info($st_username);
                                while($message_info = $message_info_in_student->fetch_assoc())    { 
                                    ?>
                                    
                                    <tr>
                                      <th scope="row"><?php echo $sn; ?></th>
                                      <td><?php echo ucwords($message_info['sender_id']); ?></td>
                                      <td><?php echo ucwords($message_info['user_id']); ?></td> 
                                      <td><?php echo ucwords($message_info['content']); ?></td> 
                                    </tr> 
                                    <?php $sn++; } ?>
                                  </tbody> 
                                </table>
                              </div>
                        
                          </div>
                      
                    
                    
                    
      </section>
</div>
</div>
</div>