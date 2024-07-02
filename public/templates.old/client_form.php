<?php
   include_once('include/header.php');
   ?>
<div class="container">
   <div class="form">
      <h2>Client Forms</h2>
      <form>
         <div class="form-row">
            <div class="form-group col-md-6">
               <label for="inputEmail4">Email</label>
               <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
               <label for="inputPassword4">Password</label>
               <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
         </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
         <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
               <label for="inputCity">City</label>
               <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
               <label for="inputState">State</label>
               <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
               </select>
            </div>
            <div class="form-group col-md-2">
               <label for="inputZip">Zip</label>
               <input type="text" class="form-control" id="inputZip">
            </div>
         </div>
         <div class="form-group">
            <div class="form-check">
               <input class="form-check-input" type="checkbox" id="gridCheck">
               <label class="form-check-label" for="gridCheck">
               Check me out
               </label>
            </div>
         </div>
         <button type="submit" formaction="client_form_list.php" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>
<?php 
   include_once('include/footer.php');
   ?>
<script src="css/js/jquery.min.js"></script>
<script src="css/js/popper.min.js"></script>
<script src="css/js/bootstrap.min.js"></script>
<script src="css/js/cleave.min.js"></script>
<script src="css/js/main.js"></script>
<script>
   // credit card 
   var cleaveCreditCard = new Cleave(".input-credit-card", {
     creditCard: true,
     onCreditCardTypeChanged: function(type) {
       type = type.split("15")[0];
       $('.input-with-ccicon #ccicon').removeClass();
       if(type!="unknown"){
           if(type=="diners"){
               $('.input-with-ccicon #ccicon').addClass('fab fa-cc-diners-club');
           }else{
               $('.input-with-ccicon #ccicon').addClass('fab fa-cc-'+type);
           }
       }
     }
   });
</script>
</body>
</html>