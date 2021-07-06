<!--/tabs-inner-->
<div class="main col-11">
  <div class="row first-row">
    <div class="col-4">
      <section id="recently-posted">
        <div class="card text-left">
          <div class="card-body ">
        <div class="img-container mb-4">
          <img src="img/1.png" class="card-img-top" alt="User">
        </div>
          <div class="card-header text-center">
            Personal Information
          </div>
          <ul class="list-group list-group-flush ">
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>father name :</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($parent_name_display['dad_name']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>mother name :</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($parent_name_display['mom_name']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Student full name: </strong>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($parent_name_display['st_fullname']); ?></p>
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
                    <p class="card-text"><?php echo ucfirst($parent_name_display['st_address']); ?></p>
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
            Child informations :
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>Students name:</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($parent_name_display['st_fullname']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>student class:</strong></p> 
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($parent_name_display['st_grade']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row g-0">
                <div class="col-md-3">
                  <p><strong>roll number: </strong>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <p class="card-text"><?php echo ucfirst($parent_name_display['roll_no']); ?></p>
                  </div>
                </div>
              </div>
            </li>
            
          </ul>
        </div>
      </section>

</div>
