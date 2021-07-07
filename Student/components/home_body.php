<!--/tabs-inner-->
<div class="main col-11">
  <div class="row first-row">
    <div class="col-4">
      <section id="recently-posted">
        <div class="card">
          <div class="card-body text-center">
        <div class="img-container mb-4">
          <img src="img/1.png" class="card-img-top" alt="User">
        </div>
          <div class="card-header">
            Personal Information :
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Full name :</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($student_name_display['st_fullname']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Class :</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($student_name_display['st_grade']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Roll No: </strong>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($student_name_display['roll_no']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Date of Birth: </strong>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($student_name_display['st_dob']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Gender: </strong>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($student_name_display['st_gender']); ?></p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>


<div class="col-8">
  <section id="recently-posted">
        <div class="card">
          <div class="card-header">
            Parents Detail :
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Father Name:</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($student_name_display['st_father']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Mother Name:</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($student_name_display['st_mother']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Parents Address: </strong>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($student_name_display['st_address']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Parents Contact: </strong>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($student_name_display['st_parents_contact']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            
          </ul>
        </div>
      </section>
</div>
