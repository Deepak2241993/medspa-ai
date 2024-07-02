<?php
   include_once('include/header.php');

   $reco=array();

   $reco= [
      [
        "Id"=> 1,
        "Procedure Name"=> "Procedure A",
        "Score"=> 85,
        "Recommendation"=> "Recommendation for Procedure A"
      ],
      [
        "Id"=> 2,
        "Procedure Name"=> "Procedure B",
        "Score"=> 92,
        "Recommendation"=> "Recommendation for Procedure B"
      ],
      [
        "Id"=> 3,
        "Procedure Name"=> "Procedure C",
        "Score"=> 15,
        "Recommendation"=> "Recommendation for Procedure C"
      ],
      [
        "Id"=> 4,
        "Procedure Name"=> "Procedure D",
        "Score"=> 65,
        "Recommendation"=> "Recommendation for Procedure D"
      ],
      [
        "Id"=> 5,
        "Procedure Name"=> "Procedure E",
        "Score"=> 20,
        "Recommendation"=> "Recommendation for Procedure E"
      ],
      [
        "Id"=> 6,
        "Procedure Name"=> "Procedure F",
        "Score"=> 88,
        "Recommendation"=> "Recommendation for Procedure F"
      ],
      [
        "Id"=> 7,
        "Procedure Name"=> "Procedure G",
        "Score"=> 30,
        "Recommendation"=> "Recommendation for Procedure G"
      ],
      [
        "Id"=> 8,
        "Procedure Name"=> "Procedure H",
        "Score"=> 72,
        "Recommendation"=> "Recommendation for Procedure H"
      ],
      [
        "Id"=> 9,
        "Procedure Name"=> "Procedure I",
        "Score"=> 82,
        "Recommendation"=> "Recommendation for Procedure I"
      ],
      [
        "Id"=> 10,
        "Procedure Name"=> "Procedure J",
        "Score"=> 90,
        "Recommendation"=> "Recommendation for Procedure J"
      ]
   ];

   ?>
<div class="containder">
   <div class="page-content   page-min-height  ">
      <div class="container-fluid">
         <div style="opacity: 1; transform: none;">
            
            <div class=" space-y-5">

              <div class="
                  card rounded-md bg-white dark:bg-slate-800   shadow-base
                  custom-class
                  ">
                  <main class="p-6">
                     <div class="mb-3">
                        <h3>Result as per collecting data</h3>
                     </div>
                     <hr>
                     <div class="row mb-3 mt-3">
                        <div class="col-md-2 mb-3">
                           <lable for="sun_sensitivity" class="client_score_lable">Sun Sensitivity :</lable>
                        </div>
                        <div class="col-md-2 mb-3">
                           <select class="form-control" id="sun_sensitivity">
                              <option>Black</option>
                              <option>Dark Brown</option>
                              <option>Light Brown</option>
                              <option>Lighter Brown</option>
                              <option>Sensitive/Pale</option>
                           </select>
                        </div>
                        
                        <div class="col-md-2 mb-3">
                           <lable for="hq_prep" class="client_score_lable">HQ% Prep :</lable>
                        </div>
                         <div class="col-md-2 mb-3">
                           <select class="form-control" id="hq_prep">
                              <option>1 Week</option>
                              <option>2 Week</option>
                              <option>3 Week</option>
                              <option>4 Week</option>
                              <option>5 Week</option>
                              <option>6 Week</option>
                           </select>
                        </div>
                        
                        <div class="col-md-2 mb-3">
                           <lable for="retinol_adequate" class="client_score_lable">Retinol Adequate :</lable>
                        </div>
                         <div class="col-md-2 mb-3">
                           <select class="form-control" if="retinol_adequate">
                           <option>1 Week</option>
                              <option>2 Week</option>
                              <option>3 Week</option>
                              <option>4 Week</option>
                              <option>5 Week</option>
                              <option>6 Week</option>
                           </select>
                        </div>
                        
                        <div class="col-md-2 mb-3">
                           <lable for="retinol_inadequate" class="client_score_lable">Retinol Inadequate :</lable>
                        </div>
                         <div class="col-md-2 mb-3">
                           <select class="form-control" id="retinol_inadequate">
                           <option>1 Week</option>
                              <option>2 Week</option>
                              <option>3 Week</option>
                              <option>4 Week</option>
                              <option>5 Week</option>
                              <option>6 Week</option>
                           </select>
                        </div>
                        
                        <div class="col-md-2 mb-3">
                           <lable for="sun_protection" class="client_score_lable">Sun Protection :</lable>
                        </div>
                         <div class="col-md-2 mb-3">
                           <select class="form-control" id="sun_protection">
                           <option>1 Week</option>
                              <option>2 Week</option>
                              <option>3 Week</option>
                              <option>4 Week</option>
                              <option>5 Week</option>
                              <option>6 Week</option>
                           </select>
                        </div>
                        
                        <div class="col-md-2 mb-3">
                           <lable for="client_score" class="client_score_lable">Patient Skin Score :</lable>
                        </div>
                         <div class="col-md-2 mb-3">
                           <input type="text" id="client_score" class="form-control">
                        </div>

                        <div class="col-md-2 mb-3">
                           <lable for="client_score" class="client_score_lable">Concern :</lable>
                        </div>
                         <div class="col-md-2 mb-3">
                           <input type="text" id="client_score" class="form-control">
                        </div>
                     </div>
                     <hr>

</main>
                  <main class="card-body p-6">
                     <div class="md:flex justify-between items-center mb-6">
                        <h4 class="card-title">Our Recommendation as per Concern</h4>
                        <div>
                           <div>
                              <div class="fromGroup">
                                 <div class="relative">
                                    <input class="form-control py-2" placeholder="search..." value="" spellcheck="false" data-ms-editor="true">
                                    <div class="flex text-xl absolute ltr:right-[14px] rtl:left-[14px] top-1/2 -translate-y-1/2  space-x-1 rtl:space-x-reverse"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="overflow-x-auto -mx-6">
                        <div class="inline-block min-w-full align-middle">
                           <div class="overflow-hidden ">
                              <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                                 <thead class="bg-slate-200 dark:bg-slate-700">
                                    <tr role="row">
                                       <th colspan="1" role="columnheader" scope="col" class=" table-th ">
                                          <div><input type="checkbox" title="Toggle All Rows Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                          <span></span>
                                       </th>
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Id<span></span></th>
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Procedure Name<span></span></th>
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Score <span></span></th>
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Recommendation<span></span></th>
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">action<span></span></th>
                                    </tr>
                                 </thead>
                                 <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                    <?php

                                       foreach($reco as $value)
                                       {
                                       
                                    ?>
                                    <tr role="row">
                                       <td role="cell" class="table-td">
                                          <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                       </td>
                                       <td role="cell" class="table-td"><span><?= $value['Id'] ?></span></td>
                                       <td role="cell" class="table-td"><span><?= $value['Procedure Name'] ?></span></td>
                                       <td role="cell" class="table-td">
                                       <?= $value['Score'] ?>
                                       </td>
                                       <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-<?php if( $value['Score'] > 70)
                                             {
                                                echo "success";
                                             }
                                             else if($value['Score'] > 40)
                                             {
                                                echo "primary";
                                             }
                                             else if($value['Score'] >= 30)
                                             {
                                                echo "info";
                                             }
                                             else
                                             {
                                                echo "secondary";
                                             }
                                             ?>-500 bg-<?php if( $value['Score'] > 70)
                                             {
                                                echo "success";
                                             }
                                             else if($value['Score'] > 40)
                                             {
                                                echo "primary";
                                             }
                                             else if($value['Score'] >= 30)
                                             {
                                                echo "info";
                                             }
                                             else
                                             {
                                                echo "secondary";
                                             }
                                             ?>-500 
                                          "><a href="recommondation.php">
                                             <?php if( $value['Score'] > 70)
                                             {
                                                echo "Highly recommended";
                                             }
                                             else if($value['Score'] > 40)
                                             {
                                                echo "Average recommended";
                                             }
                                             else if($value['Score'] >= 30)
                                             {
                                                echo "Less Recommended";
                                             }
                                             else
                                             {
                                                echo "Note Usefull";
                                             }
                                             ?>
                                          
                                       </a></span></span></td>

                                       <td role="cell" class="table-td">
                                                <a class="btn btn-primary" href="timeline.php">
                                                  View Time Line
                                                </a>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="md:flex md:space-y-0 space-y-5 justify-between mt-6 items-center">
                        <div class=" flex items-center space-x-3 rtl:space-x-reverse">
                           <select class="form-control py-2 w-max">
                              <option value="10">Show 10</option>
                              <option value="25">Show 25</option>
                              <option value="50">Show 50</option>
                           </select>
                           <span class="text-sm font-medium text-slate-600 dark:text-slate-300">Page <span>1 of 5</span></span>
                        </div>
                        <ul class="flex items-center  space-x-3  rtl:space-x-reverse">
                           <li class="text-xl leading-4 text-slate-900 dark:text-white rtl:rotate-180">
                              <button class=" opacity-50 cursor-not-allowed" disabled="">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd" d="M13.28 3.97a.75.75 0 0 1 0 1.06L6.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Zm6 0a.75.75 0 0 1 0 1.06L12.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
                                 </svg>
                              </button>
                           </li>
                           <li class="text-sm leading-4 text-slate-900 dark:text-white rtl:rotate-180"><button class=" opacity-50 cursor-not-allowed" disabled="">Prev</button></li>
                           <li><button href="#" aria-current="page" class=" bg-slate-900 dark:bg-slate-600  dark:text-slate-200 text-white font-medium     text-sm rounded leading-[16px] flex h-6 w-6 items-center justify-center transition-all duration-150">1</button></li>
                           <li><button href="#" aria-current="page" class=" bg-slate-100 dark:bg-slate-700 dark:text-slate-400 text-slate-900  font-normal      text-sm rounded leading-[16px] flex h-6 w-6 items-center justify-center transition-all duration-150">2</button></li>
                           <li><button href="#" aria-current="page" class=" bg-slate-100 dark:bg-slate-700 dark:text-slate-400 text-slate-900  font-normal      text-sm rounded leading-[16px] flex h-6 w-6 items-center justify-center transition-all duration-150">3</button></li>
                           <li><button href="#" aria-current="page" class=" bg-slate-100 dark:bg-slate-700 dark:text-slate-400 text-slate-900  font-normal      text-sm rounded leading-[16px] flex h-6 w-6 items-center justify-center transition-all duration-150">4</button></li>
                           <li><button href="#" aria-current="page" class=" bg-slate-100 dark:bg-slate-700 dark:text-slate-400 text-slate-900  font-normal      text-sm rounded leading-[16px] flex h-6 w-6 items-center justify-center transition-all duration-150">5</button></li>
                           <li class="text-sm leading-4 text-slate-900 dark:text-white rtl:rotate-180"><button class=" ">Next</button></li>
                           <li class="text-xl leading-4 text-slate-900 dark:text-white rtl:rotate-180">
                              <button class=" ">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd" d="M4.72 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12L4.72 5.03a.75.75 0 0 1 0-1.06Zm6 0a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path>
                                 </svg>
                              </button>
                           </li>
                        </ul>
                     </div>
                  </main>
               </div>
            </div>
         </div>
      </div>
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