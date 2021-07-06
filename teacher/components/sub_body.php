<!--/tabs-inner-->
<div class="main col-11">
  <div class="row first-row">
    <div class="col-8">
      <section id="recently-posted">
        <div class="card">
          <div class="card-header">
            Classes And teachers informations
          </div>
          <div class="graph">
                              <div class="tables">
                              
                                <table class="table table-hover"> 
                                  <thead>
                                    <tr> 
                                      <th>#</th> 
                                      <th>Photo</th> 
                                      <th>Teacher Name</th> 
                                      <th>Subject</th>
                                      <th>Email</th> 
                                      <th>Time</th>
                                    </tr> 
                                  </thead> 
                                  <tbody>
                              <?php 
                              $st_grade = $student_name_display['st_grade'];
                              $sn = 1;
                              $teacher_info_in_student = $ravi->teacher_info_instudent($st_grade);
                                while($t_info = $teacher_info_in_student->fetch_assoc())    { 
                                    ?>
                                    
                                    <tr>
                                      <th scope="row"><?php echo $sn; ?></th>
                                      <td></td>
                                      <td><?php echo ucwords($t_info['t_fullname']); ?></td> 
                                      <td><?php echo ucwords($t_info['subject_name']); ?></td> 
                                      <td><?php echo strtolower($t_info['t_email']); ?></td> 
                                      <td><?php echo $t_info['time']; ?></td>
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