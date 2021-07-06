<!--/tabs-inner-->
<div class="main col-11">
  <div class="row first-row">
    <div class="col-4">
      <section id="recently-posted">
        <div class="card text-left">
          <div class="card-body ">
        <div class="img-container mb-4">
          <img src="img/1.jpg" class="card-img-top" alt="User">
        </div>
          <div class="card-header text-center">
            Personal Information
          </div>
          <ul class="list-group list-group-flush ">
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Name :</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($teacher_name_display['t_fullname']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>qualification :</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($teacher_name_display['t_qualification']); ?></p>
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
                    <p class="card-text"><?php echo ucfirst($teacher_name_display['t_dob']); ?></p>
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
                    <p class="card-text"><?php echo ucfirst($teacher_name_display['t_gender']); ?></p>
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
            Contact details :
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>E-mail:</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($teacher_name_display['t_email']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>phone number:</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($teacher_name_display['t_contact']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Address: </strong>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($teacher_name_display['t_address']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            
          </ul>
        </div>
      </section>

</div>
