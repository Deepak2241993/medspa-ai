<header id="page-topbar">
   <div class="navbar-header">
       <div class="d-flex">
           <!-- LOGO -->
           <div class="navbar-brand-box">
               <a href="{{url('/')}}" class="logo logo-dark">
                   <span class="logo-sm">
                       <img src="{{url('/')}}/assets/images/forever-logo.png" alt="" height="26">
                   </span>
                   <span class="logo-lg">
                       <img src="{{url('/')}}/assets/images/forever-logo.png" alt="" height="26"> 
                   </span>
               </a>

               <a href="{{url('/')}}" class="logo logo-light">
                   <span class="logo-sm">
                       <img src="{{url('/')}}/assets/images/forever-logo.png" alt="" height="26">
                   </span>
                   <span class="logo-lg">
                       <img src="{{url('/')}}/assets/images/forever-logo.png" alt="" height="56"> 
                   </span>
               </a>
           </div>

           <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse" id="horimenu-btn" data-bs-target="#topnav-menu-content">
               <i class="fa fa-fw fa-bars"></i>
           </button>

           <div class="topnav">
               <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                   <div class="collapse navbar-collapse" id="topnav-menu-content">
                       <ul class="navbar-nav">
                           <li class="nav-item">
                               <a class="nav-link dropdown-toggle arrow-none" href="{{url('/dashboard')}}" id="topnav-dashboard" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="bx bx-home-circle icon"></i>
                                   <span data-key="t-dashboard">Dashboard</span>
                               </a>
                           </li>
                           <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-tone icon"></i>
                            <span data-key="t-elements">Equipment IQ </span> <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-pages">

                              <a href="{{url('/add_equipment')}}" class="dropdown-item" data-key="t-calendar">Add Equipment</a>
                              <a href="{{url('/modalitylist')}}" class="dropdown-item" data-key="t-calendar">View Equipment</a>

                              <div class="dropdown">
                                  <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                      role="button">
                                      <span data-key="t-ecommerce">Ecommerce</span> <div class="arrow-down"></div>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                      <a href="ecommerce-products.html" class="dropdown-item" data-key="t-products">Products</a>
                                      <a href="ecommerce-product-detail.html" class="dropdown-item" data-key="t-product-detail">Product Detail</a>
                                      <a href="ecommerce-orders.html" class="dropdown-item" data-key="t-orders">Orders</a>
                                      <a href="ecommerce-customers.html" class="dropdown-item" data-key="t-customers">Customers</a>
                                      <a href="ecommerce-cart.html" class="dropdown-item" data-key="t-cart">Cart</a>
                                      <a href="ecommerce-checkout.html" class="dropdown-item" data-key="t-checkout">Checkout</a>
                                      <a href="ecommerce-shops.html" class="dropdown-item" data-key="t-shops">Shops</a>
                                      <a href="ecommerce-add-product.html" class="dropdown-item" data-key="t-add-product">Add Product</a>
                                  </div>
                              </div>
                          </div>
                            
                        </li>
                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="bx bx-tone icon"></i>
                               <span data-key="t-elements">Procedure IQ </span> <div class="arrow-down"></div>
                               </a>
                               <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                 <a href="{{url('/patient')}}" class="dropdown-item" data-key="t-calendar">Patient</a>
                                 
                                </div>
                               
                           </li>

                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                   <i class="bx bx-customize icon"></i>
                                   <span data-key="t-apps">Market Place </span> <div class="arrow-down"></div>
                               </a>
                               <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                <a href="{{url('/patient')}}" class="dropdown-item" data-key="t-calendar">Patient</a>
                                
                               </div>

                           </li>

                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                               >
                                   <i class="bx bx-layer icon"></i>
                                   <span data-key="t-components">Equipment/Product Add </span> <div class="arrow-down"></div>
                               </a>
                               <div class="dropdown-menu" aria-labelledby="topnav-components">
                                   <div class="dropdown">
                                       <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                           role="button">
                                           <span data-key="t-forms">Forms</span> <div class="arrow-down"></div>
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="topnav-form">
                                           <a href="form-elements.html" class="dropdown-item" data-key="t-basic-elements">Basic Elements</a>
                                           <a href="form-validation.html" class="dropdown-item" data-key="t-validation">Validation</a>
                                           <a href="form-advanced.html" class="dropdown-item" data-key="t-advanced-plugins">Advanced Plugins</a>
                                           <a href="form-editors.html" class="dropdown-item" data-key="t-editors">Editors</a>
                                           <a href="form-uploads.html" class="dropdown-item" data-key="t-file-upload">File Upload</a>
                                           <a href="form-wizard.html" class="dropdown-item" data-key="t-wizard">Wizard</a>
                                           <a href="form-mask.html" class="dropdown-item" data-key="t-mask">Mask</a>
                                       </div>
                                   </div>
                                   <div class="dropdown">
                                       <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                           role="button">
                                           <span data-key="t-tables">Tables</span> <div class="arrow-down"></div>
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="topnav-table">
                                           <a href="tables-basic.html" class="dropdown-item" data-key="t-bootstrap-basic">Bootstrap Basic</a>
                                           <a href="tables-advanced.html" class="dropdown-item" data-key="t-advanced-tables">Advance Tables</a>
                                       </div>
                                   </div>
                                   <div class="dropdown">
                                       <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                           role="button">
                                           <span data-key="t-apex-charts">Apex Charts</span> <div class="arrow-down"></div>
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                           <a href="charts-line.html" class="dropdown-item" data-key="t-line">Line</a>
                                           <a href="charts-area.html" class="dropdown-item" data-key="t-area">Area</a>
                                           <a href="charts-column.html" class="dropdown-item" data-key="t-column">Column</a>
                                           <a href="charts-bar.html" class="dropdown-item" data-key="t-bar">Bar</a>
                                           <a href="charts-mixed.html" class="dropdown-item" data-key="t-mixed">Mixed</a>
                                           <a href="charts-timeline.html" class="dropdown-item" data-key="t-timeline">Timeline</a>
                                           <a href="charts-candlestick.html" class="dropdown-item" data-key="t-candlestick">Candlestick</a>
                                           <a href="charts-boxplot.html" class="dropdown-item" data-key="t-boxplot">Boxplot</a>
                                           <a href="charts-bubble.html" class="dropdown-item" data-key="t-bubble">Bubble</a>
                                           <a href="charts-scatter.html" class="dropdown-item" data-key="t-scatter">Scatter</a>
                                           <a href="charts-heatmap.html" class="dropdown-item" data-key="t-heatmap">Heatmap</a>
                                           <a href="charts-treemap.html" class="dropdown-item" data-key="t-treemap">Treemap</a>
                                           <a href="charts-pie.html" class="dropdown-item" data-key="t-pie">Pie</a>
                                           <a href="charts-radialbar.html" class="dropdown-item" data-key="t-radialbar">Radialbar</a>
                                           <a href="charts-radar.html" class="dropdown-item" data-key="t-radar">Radar</a>
                                           <a href="charts-polararea.html" class="dropdown-item" data-key="t-polararea">Polararea</a>
                                       </div>
                                   </div>
                                   <div class="dropdown">
                                       <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                           role="button">
                                           <span data-key="t-icons">Icons</span> <div class="arrow-down"></div>
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                           <a href="icons-unicons.html" class="dropdown-item" data-key="t-unicons">Unicons</a>
                                           <a href="icons-feathericons.html" class="dropdown-item" data-key="t-feather-icons">Feather icons</a>
                                           <a href="icons-boxicons.html" class="dropdown-item" data-key="t-boxicons">Boxicons</a>
                                           <a href="icons-materialdesign.html" class="dropdown-item" data-key="t-material-design">Material Design</a>
                                           <a href="icons-fontawesome.html" class="dropdown-item" data-key="t-font-awesome">Font Awesome 5</a>
                                       </div>
                                   </div>
                                   <div class="dropdown">
                                       <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                           role="button">
                                           <span data-key="t-maps">Maps</span> <div class="arrow-down"></div>
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="topnav-map">
                                           <a href="maps-google.html" class="dropdown-item" data-key="t-google">Google</a>
                                           <a href="maps-vector.html" class="dropdown-item" data-key="t-vector">Vector</a>
                                           <a href="maps-leaflet.html" class="dropdown-item" data-key="t-leaflet">Leaflet</a>
                                       </div>
                                   </div>
                               </div>
                           </li>
                       </ul>
                   </div>
               </nav>
           </div>

       </div>

       <div class="d-flex">
   
           
           

           <div class="dropdown d-inline-block">
               <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <img class="rounded-circle header-profile-user" src="{{url('/')}}/assets/images/users/avatar-3.jpg"
                   alt="Header Avatar">
                   <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                       <span class="user-name">@if(Session::has('result')){{ucfirst(Session::get('result')['content']['first_name'])}}@else Guest @endif <div class="arrow-down"></div></span>
                   </span>
               </button>
               <div class="dropdown-menu dropdown-menu-end pt-0">
                   <h6 class="dropdown-header">Welcome @if(Session::has('result')){{ucfirst(Session::get('result')['content']['first_name'])}}@endif</h6>
                   <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                   <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                   <a class="dropdown-item" href="apps-kanban-board.html"><i class="mdi mdi-calendar-check-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                   <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$6951.02</b></span></a>
                   <a class="dropdown-item d-flex align-items-center" href="contacts-settings.html"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span><span class="badgebg-success-subtle text-success ms-auto">New</span></a>
                   <a class="dropdown-item" href="auth-lockscreen-cover.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                   <a class="dropdown-item" href="{{url('/logout')}}"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
               </div>
           </div>
       </div>
   </div>

   {{-- <div class="collapse show dash-content" id="dashtoggle">
       <div class="container-fluid">
           <!-- start page title -->
           <div class="row">
               <div class="col-12">
                   <div class="page-title-box d-flex align-items-center justify-content-between">
                       <h4 class="mb-0 sub-title">Welcome !</h4>

                       <div class="page-title-right">
                           <ol class="breadcrumb m-0">
                               <li class="breadcrumb-item page-head"><a href="javascript: void(0);">Dashboard</a></li>
                               <li class="breadcrumb-item page-head active">Welcome !</li>
                           </ol>
                       </div>

                   </div>
               </div>
           </div>
           <!-- end page title -->

           <!-- start dash info -->
           <div class="row">
               <div class="col-xl-12">
                   <div class="card dash-header-box shadow-none border-0">
                       <div class="card-body p-0">
                           <div class="row row-cols-xxl-6 row-cols-md-3 row-cols-1 g-0">
                               <div class="col">
                                   <div class="mt-md-0 py-3 px-4 mx-2">
                                       <p class="text-white-50 mb-2 text-truncate">Campaign Sent </p>
                                       <h3 class="text-white mb-0">197</h3>
                                   </div>
                               </div><!-- end col -->

                               <div class="col">
                                   <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                       <p class="text-white-50 mb-2 text-truncate">Annual Profit</p>
                                       <h3 class="text-white mb-0">$489.4k</h3>
                                   </div>
                               </div><!-- end col -->

                               <div class="col">
                                   <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                       <p class="text-white-50 mb-2 text-truncate">Lead Coversation</p>
                                       <h3 class="text-white mb-0">32.89%</h3>
                                   </div>
                               </div><!-- end col -->

                               <div class="col">
                                   <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                       <p class="text-white-50 mb-2 text-truncate">Sales Forecast</p>
                                       <h3 class="text-white mb-0">75.35%</h3>
                                   </div>
                               </div><!-- end col -->

                               <div class="col">
                                   <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                       <p class="text-white-50 mb-2 text-truncate">Daily Average Income</p>
                                       <h3 class="text-white mb-0">$1,596.5</h3>
                                   </div>
                               </div><!-- end col -->

                               <div class="col">
                                   <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                       <p class="text-white-50 mb-2 text-truncate">Annual Deals</p>
                                       <h3 class="text-white mb-0">2,659</h3>
                                   </div>
                               </div><!-- end col -->

                           </div><!-- end row -->
                       </div><!-- end card body -->
                   </div><!-- end card -->
               </div><!-- end col -->
           </div>
           <!-- end dash info -->
       </div>
   </div> --}}

     <!-- start dash troggle-icon -->
     {{-- <div>
       <a class="dash-troggle-icon" id="dash-troggle-icon" data-bs-toggle="collapse" href="#dashtoggle" aria-expanded="true" aria-controls="dashtoggle">
           <i class="bx bx-up-arrow-alt"></i>
       </a>
   </div> --}}
 <!-- end dash troggle-icon -->

</header>
