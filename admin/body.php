

  <div class="page-header gradient">
      <div class="container pt-5">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5">
            <div class="error_page">
  <!--/login-top-->
  <div class="error-top">
  <h2 class="inner-tittle page" align="center">Admin Login</h2>
  <div class="login">
          </div>
      </div>
  </div>
</div>
</div>
</div>
  <div class="container pt-3">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5">
  <form method="post">
    <!--Username -->
    <div class="form-outline mb-4">
      <input type="text" class="form-control" name="admin_username" placeholder="Username" 
      value="<?php if(isset($_POST['admin_signin'])){ echo $_POST['admin_username']; } ?>">
    </div>
    <div class="form-outline mb-4">
      <input type="password" class="form-control" placeholder="Password" name="admin_password" value="<?php if(isset($_POST['admin_signin'])){ echo $_POST['admin_password']; } ?>">
    </div>
  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="form1Example3"
          checked
        />
        <label class="form-check-label" for="form1Example3"> Remember me </label>
      </div>
    </div>

    
  </div>

  <!-- Submit button -->
  <div class="col-md-12 text-center">
  <button type="submit" class="btn btn-primary btn-lg " name="admin_signin" style="background-color:#b224e5">Login</button>
</div>
</form>
</div>
</div >
</div class="col-md-5">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,128L48,117.3C96,107,192,85,288,80C384,75,480,85,576,112C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
</div>








