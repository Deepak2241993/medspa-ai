<?php
   include_once('include/header.php');
   ?>
    <div class="container">
    <h3>Modality Add Form</h3>
    
    <form id="equipmentForm">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 mt-2">
                <label for="companySelect">Select Company:</label>
                <select id="companySelect" onchange="populatePlatform()" class="form-control">
                    <option value="">Select a Company</option>
                    <!-- Add company options here -->
                    <option value="company1">Company 1</option>
                    <option value="company2">Company 2</option>
                    <option value="company3">Company 3</option>
                </select>
            </div>
                
            <div class="col-md-6 col-sm-12 col-lg-6 mt-2">
                <label for="platformSelect">Select Platform:</label>
                <select id="platformSelect" onchange="populateHandpiece()" class="form-control">
                    <option value="">Select a Platform</option>
                    <!-- Platform options will be dynamically populated based on the selected company -->
                </select>
            </div>
                
            <div class="col-md-12 col-sm-12 col-lg-12 mt-2">
                <label for="handpieceSelect">Select Handpiece:</label>
                <div id="handpieceOptions">           
                <!-- Handpiece options will be dynamically populated as checkboxes based on the selected platform -->
                </div>
            </div>
                
            <div class="col-md-6 col-sm-12 col-lg-6 mt-2">
                <label for="modalitySelect">Add Modality:</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 mt-2">
                <input type="button" value="submit" class="btn btn-primary mt-3">
            </div>
        </div>
    </form>
</div>
<hr class="mb-2 mt-5">
<main class="card-body p-6">
                     <div class="md:flex justify-between items-center mb-6">
                        <h4 class="card-title">Added Modality </h4>
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
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Company Name<span></span></th>
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Platform Name <span></span></th>
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Handpiece <span></span></th>
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Modility <span></span></th>
                                      
                                       <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">action<span></span></th>
                                    </tr>
                                 </thead>
                                 <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                   
                                    <tr role="row">
                                       <td role="cell" class="table-td">
                                          <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                       </td>
                                       <td role="cell" class="table-td"><span>1</span></td>
                                       <td role="cell" class="table-td"><span>Xyz Pvt.ltd</span></td>
                                       <td role="cell" class="table-td">Botytite</td>
                                       <td role="cell" class="table-td">FaceTite</td>
                                       <td role="cell" class="table-td">skin texture,photodamage.</td>
                                       

                                       <td role="cell" class="table-td">
                                       <div class="custom-tippy">
                                                <button class="action-btn" type="button">
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                                   </svg>
                                                </button>
                                        </div>
                                        <div class="custom-tippy">
                                                <button class="action-btn" type="button">
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                                                   </svg>
                                                </button>
                                             </div>
                                        
                                       </td>
                                    </tr>
                                    <tr role="row">
                                       <td role="cell" class="table-td">
                                          <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                       </td>
                                       <td role="cell" class="table-td"><span>2</span></td>
                                       <td role="cell" class="table-td"><span>Xyz Pvt.ltd</span></td>
                                       <td role="cell" class="table-td">Botytite</td>
                                       <td role="cell" class="table-td">FaceTite</td>
                                       <td role="cell" class="table-td">skin texture,photodamage.</td>
                                       

                                       <td role="cell" class="table-td">
                                       <div class="custom-tippy">
                                                <button class="action-btn" type="button">
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"></path>
                                                   </svg>
                                                </button>
                                        </div>
                                        <div class="custom-tippy">
                                                <button class="action-btn" type="button">
                                                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                                                   </svg>
                                                </button>
                                             </div>
                                        
                                       </td>
                                    </tr>
                        
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
    <?php 
   include_once('include/footer.php');
   ?>

<script src="css/js/jquery.min.js"></script>
<script src="css/js/popper.min.js"></script>
<script src="css/js/bootstrap.min.js"></script>
<script src="css/js/cleave.min.js"></script>
<script src="css/js/main.js"></script>
    <script>
        // Sample data for platforms, handpieces, and modalities (Replace these with your actual data)
        const platformOptions = {
            company1: ["BODYTITE", "EmbraceRF", "EmpowerRF"],
            company2: ["Platform 2A", "Platform 2B", "Platform 2C"],
            company3: ["Platform 3A", "Platform 3B", "Platform 3C"]
        };

        const handpieceOptions = {
            "BODYTITE": ["AccuTite","BodyTite","FaceTite","Morpheus8","Morpheus8 Body"],
            "EmbraceRF": ["AccuTite","FaceTite","Morpheus8"],
            "EmpowerRF": ["VTone","FormaV","Morpheus8","Morpheus8 Body","Tone"],
            "Platform 2A": ["Handpiece 2A1", "Handpiece 2A2", "Handpiece 2A3"],
            "Platform 2B": ["Handpiece 2B1", "Handpiece 2B2", "Handpiece 2B3"],
            "Platform 2C": ["Handpiece 2C1", "Handpiece 2C2", "Handpiece 2C3"],
            "Platform 3A": ["Handpiece 3A1", "Handpiece 3A2", "Handpiece 3A3"],
            "Platform 3B": ["Handpiece 3B1", "Handpiece 3B2", "Handpiece 3B3"],
            "Platform 3C": ["Handpiece 3C1", "Handpiece 3C2", "Handpiece 3C3"]
        };

        function populatePlatform() {
            const companySelect = document.getElementById("companySelect");
            const platformSelect = document.getElementById("platformSelect");
            const selectedCompany = companySelect.value;

            // Clear existing options
            platformSelect.innerHTML = "<option value=''>Select a Platform</option>";

            if (selectedCompany in platformOptions) {
                // Populate platform options based on the selected company
                platformOptions[selectedCompany].forEach(platform => {
                    const option = document.createElement("option");
                    option.text = platform;
                    option.value = platform;
                    platformSelect.appendChild(option);
                });
            }
        }

        function populateHandpiece() {
            const platformSelect = document.getElementById("platformSelect");
            const selectedPlatform = platformSelect.value;

            const handpieceOptionsDiv = document.getElementById("handpieceOptions");
            handpieceOptionsDiv.innerHTML = ""; // Clear previous checkboxes

            if (selectedPlatform in handpieceOptions) {
                // Populate handpiece options as checkboxes based on the selected platform
                handpieceOptions[selectedPlatform].forEach(handpiece => {
                    const checkbox = document.createElement("input");
                    checkbox.type = "checkbox";
                    checkbox.name = handpiece;
                    checkbox.value = handpiece;

                    const label = document.createElement("label");
                    label.textContent = handpiece;
                    label.className = "label_checkbox";
                    label.insertBefore(checkbox, label.firstChild);
                    handpieceOptionsDiv.appendChild(label);

                });
            }
        }

       
    </script>
</body>
</html>
