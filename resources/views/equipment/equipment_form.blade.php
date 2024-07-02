@extends('layouts.master')
@push('css')
<style>
   .label_checkbox {
       display: inline-flex;
       align-items: center;
       margin-right: 10px;
   }

   .label_checkbox input[type="checkbox"] {
       margin-right: 5px;
   }
</style>  
@endpush

@section('body')

<div class="container-fluid">
    

   <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-header justify-content-between d-flex align-items-center">
                  <h4 class="card-title">Add Modality</h4>
              </div><!-- end card header -->
              <div class="card-body">
                  <form method="post" action="{{url('/addmodality')}}">
                    @csrf
                      <div class="row">
                                  <div class="col-lg-6 mt-4">
                                      <label for="regexp-mask" class="form-label">Select Company:</label>
                                      <select id="company" onchange="populatePlatform()" class="form-control" name="company_name">
                                       <option value="">Select a Company</option>
                                       <!-- Add company options here -->
                                       @foreach($company as $key=>$value)
                                       <option value="{{$value}}">{{$value}}</option>
                                       @endforeach
                                   </select>
                                  </div>

                                  <div class=" col-lg-6 mt-4" >
                                      <label for="phone-mask" class="form-label">Select Platform:</label>
                                      <select id="platform" onchange="populateHandpiece()" class="form-control"name="platform">
                                       <option value="">Select a Platform</option>
                                      
                                       <!-- Platform options will be dynamically populated based on the selected company -->
                                   </select>
                                   <input type="hidden" name="clinic_id" value="@if(Session::has('result')){{ucfirst(Session::get('result')['content']['clinic_id'])}} @endif">
                                  </div>

                                  <div class=" col-lg-6 mt-4" >
                                    <label for="phone-mask" class="form-label">Select Handpiece:</label>
                                    <select id="handpiece" onchange="populateModality()" class="form-control" name="handpiece">
                                     <option value="">Select Handpiece</option>
                                    
                                     <!-- Platform options will be dynamically populated based on the selected company -->
                                 </select>
                                </div>

                                  <div class="col-md-12 col-sm-12 col-lg-12 mt-4">
                                    <label for="handpieceSelect">Select Modality:</label>
                                    <div id="modality"> 
                                       <p>No Data</p>          
                                    <!-- Handpiece options will be dynamically populated as checkboxes based on the selected platform -->
                                    </div>
                                </div>
                          
                             <!-- end col -->
                           </div>
                           <button type="submit" class="btn btn-primary mt-4">Add Modality</button>
                      <!-- end row -->
                  </form>
                  <!-- end form -->
              </div>
              <!-- end card body -->
          </div>
          <!-- end card -->
      </div>
      <!-- end col -->
  </div>
  
</div>

@endsection
@push('script')

<script>
 function populatePlatform() {
        var selectedCompany = $('#company').val();
        var platformDropdown = $('#platform');
        
        // Clear existing options
        platformDropdown.empty();
        
        // If no company selected, reset the platform dropdown
        if (!selectedCompany) {
            platformDropdown.append('<option value="">Select a Platform</option>');
            return;
        }
        
        // Perform AJAX request to fetch platforms for the selected company
        $.ajax({
                  url: "{{url('/platforms')}}",
                  method: "post",
                  dataType:"json",
                  data: {
                        _token: "{{ csrf_token() }}",
                        company_name:selectedCompany 
                  },
                  success: function (response) {
                // Add retrieved platform options to the platform dropdown
                platformDropdown.append('<option value="">Select a Platform</option>');
                $.each(response.platforms.platform, function(key, value) {
                  platformDropdown.append('<option value="' + value + '">' + value + '</option>');
                });
            },
            error: function() {
                console.log('Error fetching platforms.');
            }
        });
    }

    function populateHandpiece() {
        var selectedCompany = $('#company').val();
        var platform = $('#platform').val();
        var handpieceDropdown = $('#handpiece');
        
        // Clear existing options
        handpieceDropdown.empty();
        
        // If no company selected, reset the handpiece dropdown
        if (!selectedCompany) {
            handpieceDropdown.append('<p>Choose First Platform</p>');
            return;
        }
        
        // Perform AJAX request to fetch handpieces for the selected company and platform
        $.ajax({
            url: "{{ url('/handpieces') }}", // Replace with your actual URL
            method: "post",
            dataType: "json",
            data: {
                _token: "{{ csrf_token() }}",
                company_name: selectedCompany,
                platform_name: platform,
            },
            success: function (response) {
                // Add retrieved handpiece options to the handpiece dropdown
                handpieceDropdown.append('<option value="">Select a handpieces</option>');
                $.each(response.handpieces.handpiece, function(key, value) {
                    handpieceDropdown.append('<option value="' + value + '">' + value + '</option>');
                });
            },
            error: function() {
                console.log('Error fetching handpieces.');
            }
        });
    }

    function populateModality() {
        var selectedCompany = $('#company').val();
        var platform = $('#platform').val();
        var handpieceValues = $('#handpiece').val();
        var modalityDropdown = $('#modality');
        
        // Clear existing options
        modalityDropdown.empty();
        
        // If no company selected, reset the modality dropdown
        if (!selectedCompany) {
            modalityDropdown.append('<option value="">Select a Modality</option>');
            return;
        }
        
        // Perform AJAX request to fetch modalities for the selected company, platform, and handpieces
        $.ajax({
            url: "{{ url('/modality') }}",
            method: "post",
            dataType: "json",
            data: {
                _token: "{{ csrf_token() }}",
                company_name: selectedCompany,
                platform_name: platform,
                handpiece_name: handpieceValues,
            },
            success: function (response) {
                // Add retrieved handpiece options to the handpiece dropdown
                $.each(response.modality.modality, function(key, value) {
                    modalityDropdown.append('<label class="label_checkbox mr-2"> <input type="checkbox" name="modality[]" value="'+value+'">'+value+'</label>');
                });
            },
            error: function() {
                console.log('Error fetching handpieces.');
            }
           
        });
    }


    
   
</script>
@endpush