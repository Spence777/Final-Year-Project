<?php include('includes/header.php'); ?>

<section class=" p-5 text-center text-md-start mt-5">


<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h1>Power <span class="text-primary">Back to the Public</span> </h1>
       <p class="lead my-4">
        CCMES Has Given Its Commitment To The Implementation Of A Performance Monitoring And Evaluation System (PMES), Which Is Comprised Of An Improved System For The Setting Of Performance Goals; Selecting Useful Performance Indicators And Targets; Reporting On Results; And Implementing The Core Components Of The Managing For Results Programme.
       </p>
       <?php if(empty($_SESSION['userid'])){ ?>
       <button class="btn btn-outline-primary mb-4" data-bs-toggle="modal" id="join-us"  data-bs-target="#join">Join us</button>
       <?php  }?>
    </div>
     <div class="col-md-6">
      <img class="img-fluid" src="images/undraw_tasting_re_fv9d.svg" alt="">
     </div>
   <!-- </div> -->
  </div>
</div>
</section>

<!-- user-login -->
<section>
  <div class="modal fade" id="login" data-bs-backdrop="static" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="">
        <div class="modal-body">
          
            <div class="form-group">
              <label for="name">Email:</label>
              <input type="text" name="email" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="password" class="form-control" id="pwd" required>
            </div>
          <!-- </form> -->
        </div>
        <div class="modal-footer">
          <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
       </form>
      </div>
    </div>
  </div>
</section>
<!-- end user-login -->



<!-- user-sign-up section -->
<section>
  <div class="modal fade" id="join" data-bs-backdrop="static" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Create Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="#">
        <div class="modal-body">
          
            <div class="form-group">
              <label for="name">Names:</label>
              <input type="text" name="names" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="password" class="form-control" id="pwd" required>
            </div>
            <div class="form-group">
              <label for="tele">Phone Number:</label>
              <input type="tel" name="phone" class="form-control" id="tele" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" required> Accept Terms and conditions</label>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="register" class="btn btn-primary">Sign-Up</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--end user-sign-up section -->






<!-- cards -->
<h3 class="text-center" id="trending">Monitored Projects</h3>
<section class="p-5">
  <div class="container">
    <div class="row g-3 text-center">
       <div class="col-md col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="h4 mb-3">  <i class="fas fa-hand-holding-water"></i> </div>
                <h5 class="card-title mb-3">Water and Waste Management</h5>
                <p class="card-text px-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, voluptas cum deserunt dolorum ex iste.
                </p>
                <h5>Baseline</h5>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h5>Target</h5>
                <div class="progress">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h5>Actual</h5>
                <div class="progress">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <a href="#" class="bruh">Read More</a>
              </div>
          </div>
       </div>

       <div class="col-md col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="h4 mb-3">  <i class="fas fa-hospital-alt"></i> </div> 
            <h5 class="card-title mb-3">Health</h5>
            <p class="card-text px-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, voluptas cum deserunt dolorum ex iste.
            </p>
            <div class="progress">
              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="bruh">Read More</a>
        </div>
        </div>
      </div>

      <div class="col-md col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="h4 mb-3"> <i class="fas fa-university"></i> </div> 
            <h5 class="card-title mb-3">Education</h5>
            <p class="card-text px-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, voluptas cum deserunt dolorum ex iste.
            </p>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="bruh">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-md col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="h4 mb-3"> <i class="fas fa-road"></i> </div> 
            <h5 class="card-title mb-3">Roads and Transportation</h5>
            <p class="card-text px-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, voluptas cum deserunt dolorum ex iste.
            </p>
            <div class="progress">
              <div class="progress-bar bg-dark" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="bruh">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-md col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="h4 mb-3"> <i class="fas fa-plane-departure"></i> </div> 
            <h5 class="card-title mb-3">Air Transport</h5>
            <p class="card-text px-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, voluptas cum deserunt dolorum ex iste.
            </p>
            <div class="progress">
              <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="bruh">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-md col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="h4 mb-3"> <i class="fas fa-subway"></i> </div> 
            <h5 class="card-title mb-3">Railway</h5>
            <p class="card-text px-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, voluptas cum deserunt dolorum ex iste.
            </p>
            <div class="progress">
              <div class="progress-bar bg-secondary" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="#" class="bruh">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- end cards -->

<!-- about-us -->
<section id="aboutus" class="p-5">
  <div class="container">
    <div class="row align-items-center justify-content-between">
       <div class="col-md">
         <img src="images/opinion.svg" class="img-fluid" alt="">
       </div>
       <div class="col-md p-5">
          <h2>About CCMES</h2>
          <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Laborum eveniet soluta iusto hic nobis!
          </p>
          <p class="lead">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Modi obcaecati deserunt, harum debitis voluptatem velit iusto, facere eaque maxime dolore dolores.
            Quisquam cum recusandae odit. Ullam pariatu
            neque eveniet perspiciatis natus error iste numquam explicabo a quam laborum eius nihil totam similique illum incidunt! Necessitatibus tempora ipsa dolore quasi consectetur?
          </p>
          <a href="aboutus.php" class="btn btn-light mt-3">
            <i class="fas fa-chevron-circle-right"></i> Read More
          </a>
       </div>
    </div>
  </div>
</section>

<!-- end about-us -->

<!-- accordion -->
<section class="p-5">
  <div class="container">
    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
    <div class="accordion accordion-flush" id="questions">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Why CCMES
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#questions">
          <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Omnis nostrum sequi molestias, ut repellat exercitationem quam eveniet nemo. Atque, neque. 
            Asperiores dicta numquam fugiat quibusdam sint facilis, molestias sed. Nihil! body.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
            Why your Opinion Matters
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#questions">
          <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cupiditate vero mollitia, quia ipsa aliquam autem perspiciatis error nisi odit eligendi 
            laudantium nesciunt sunt ab blanditiis, perferendis provident iusto, corporis quos!</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree">
            How to use CCMES
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#questions">
          <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Expedita reprehenderit itaque voluptatum vitae incidunt 
            repellat illo laboriosam facere voluptatibus minima, ipsa ad fuga alias eum eligendi doloremque aliquid. Illo, iusto!</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end accordion -->




<!-- monitor-form -->

<!-- end footer -->
<?php include('includes/footer.php'); ?>