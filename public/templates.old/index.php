<?php
   include_once('include/header.php');
   ?>
<div class="container-fluid">
   <!-- start page title -->
   <h2 class="mt-3">Dashboard</h2>
   <!-- end page title -->
   <div class="row">
      <div class="col-xl-12">
         <div class="row mt-3">
            <div class="col-md-4">
              <a href="client_form.php">
               <div class="card mini-stats-wid">
                  <div class="card-body">
                     <div class="d-flex">
                        <div class="flex-grow-1 mt-3 mb-3">
                           <h2 class="text-muted fw-medium">Procedure IQ</h2>
                           <a href="home.php"><p class="mb-0">Client Form |  <a href="provider_form.php">Provider Form</a></p></a>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                           <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                              <span class="avatar-title">
                              <i class="bx bx-copy-alt font-size-24"></i>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              </a>
            </div>

            <div class="col-md-4">
            <a href="equipment_edit.php">
               <div class="card mini-stats-wid">
                  <div class="card-body">
                     <div class="d-flex">
                        <div class="flex-grow-1 mt-3 mb-3">
                           <h2 class="text-muted fw-medium">Equipment IQ</h2>
                           <!-- <h4 class="mb-0">8</h4> -->
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                           <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                              <span class="avatar-title">
                              <i class="bx bx-copy-alt font-size-24"></i>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </a>
            </div>
            <div class="col-md-4">
               <div class="card mini-stats-wid">
                  <div class="card-body">
                     <div class="d-flex">
                        <div class="flex-grow-1 mt-3 mb-3">
                           <h2 class="text-muted fw-medium">Market Place</h2>
                           <!-- <h4 class="mb-0">8</h4> -->
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                           <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                              <span class="avatar-title">
                              <i class="bx bx-copy-alt font-size-24"></i>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
              <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                      <div class="flex-grow-1 mt-3 mb-3">
                          <h2 class="text-muted fw-medium">Equipment/Product Add</h2>
                          <!-- <h4 class="mb-0">8</h4> -->
                      </div>
                      <div class="flex-shrink-0 align-self-center">
                          <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                            <span class="avatar-title">
                            <i class="bx bx-copy-alt font-size-24"></i>
                            </span>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
         </div>
         <!-- end row -->
      </div>
   </div>
   <!-- end row -->
</div>
<?php 
   include_once('include/footer.php');
   ?>
<script src="css/js/jquery.min.js"></script>
<script src="css/js/popper.min.js"></script>
<script src="css/js/bootstrap.min.js"></script>
<script src="css/js/cleave.min.js"></script>
<script src="css/js/main.js"></script>

</body>
</html>