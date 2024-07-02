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
                  <h4 class="card-title">Patient Form</h4>
              </div><!-- end card header -->
              <div class="card-body">
                  <form action="{{url('/sendpatientinfo')}}" method="post">
                    @csrf
                      <div class="row">
                                  <div class="col-lg-6 mt-4">
                                      <label for="regexp-mask" class="form-label">Patient Name<span class="text-danger">*</span></label>
                                      <input type="text" id="name"class="form-control"  name="name" required >
                                      <input type="hidden" id="name"class="form-control"  name="clinic_id" value="{{Session::get('result')['content']['clinic_id']}}">
                                  </div>

                                  <div class="col-lg-6 mt-4" >
                                      <label for="phone-mask" class="form-label">Email Address<span class="text-danger">*</span></label>
                                      <input type="email" id="email"class="form-control"  name="email" required >
                                  </div>
                                  <div class="col-lg-6 mt-4">
                                    <label for="handpieceSelect">Phone<span class="text-danger">*</span></label>
                                    <input type="tel" id="tel" class="form-control" name="tel" required >
                                </div>
                                <div class=" col-lg-6 mt-4" >
                                 <label for="phone-mask" class="form-label">Sun Sensitivity</label>
                                 <select id="modality" name="sun_sensitivity" class="form-control form-select">
                                    <option value="">Select Sun Sensitivity</option>
                                    <option value="Sensitive/Pale">Sensitive/Pale</option>
                                    <option value="Lighter Brown">Lighter Brown</option>
                                    <option value="Light Brown">Light Brown</option>
                                    <option value="Dark Brown">Dark Brown</option>
                                    <option value="Black">Black</option>
                                 
                                  <!-- Platform options will be dynamically populated based on the selected company -->
                                </select>
                                </div>
                                <div class=" col-lg-6 mt-4" >
                                    <label for="phone-mask" class="form-label">HQ% Prep</label>
                                    <select id="modality" name="hq" class="form-control form-select">
                                        <option value="1 wk">1 wk</option>
                                        <option value="2 wk">2 wk</option>
                                        <option value="4 wk">4 wk</option>
                                        <option value="none">None</option>
                                    
                                     <!-- Platform options will be dynamically populated based on the selected company -->
                                   </select>
                                </div>
                                <div class=" col-lg-6 mt-4" >
                                    <label for="phone-mask" class="form-label">Retinol Adequate</label>
                                    <select id="modality" name="retinol_adequate" class="form-control form-select">
                                        <option value="2 wk">2 wk</option>
                                        <option value="3 wk">3 wk</option>
                                        <option value="4 wk">4 wk</option>
                                        <option value="none">None</option>
                                    
                                     <!-- Platform options will be dynamically populated based on the selected company -->
                                   </select>
                                </div>
                                <div class=" col-lg-6 mt-4" >
                                    <label for="phone-mask" class="form-label">Retinol Inadequate</label>
                                    <select id="modality" name="retinol_inadequate" class="form-control form-select">
                                        <option value="2 wk">2 wk</option>
                                        <option value="3 wk">3 wk</option>
                                        <option value="4 wk">4 wk</option>
                                        <option value="none">None</option>
                                    
                                     <!-- Platform options will be dynamically populated based on the selected company -->
                                   </select>
                                </div>
                                <div class=" col-lg-6 mt-4" >
                                    <label for="phone-mask" class="form-label">Sun Protection</label>
                                    <select id="modality" name="sun_protection" class="form-control form-select">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    
                                     <!-- Platform options will be dynamically populated based on the selected company -->
                                   </select>
                                </div>
                                <div class=" col-lg-6 mt-4" >
                                    <label for="phone-mask" class="form-label">Concern<span class="text-danger">*</span></label>
                                    <select id="modality" name="key" class="form-control form-select" required>
                                        <option value="">Select Concern</option>
                                        <option value="pih_risk">PIH Risk</option>
                                        <option value="pih_procedure_risk">PIH & Procedure Risk</option>
                                        <option value="frekles">Frekles</option>
                                        <option value="lhr">LHR</option>
                                        <option value="cit_of_procedure">CIT of Procedure</option>
                                        <option value="melasma">Melasma</option>
                                    
                                     <!-- Platform options will be dynamically populated based on the selected company -->
                                   </select>
                                </div>

                           </div>
                           <button type="submit" class="btn btn-primary mt-4">Submit</button>
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
                $.each(response.handpieces.handpiece, function(key, value) {
                    handpieceDropdown.append('<label class="label_checkbox mr-2"> <input type="checkbox" name="handpiece[]" value="'+value+'">'+value+'</label>');
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
        var handpieceValues = $('input[name="handpiece[]"]:checked').map(function() {
            return this.value;
        }).get();
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
                // Add retrieved modality options to the modality dropdown
                modalityDropdown.empty();
                modalityDropdown.append('<option value="">Select a Modality</option>');
                
                $.each(response.modalities, function(key, value) {
                    modalityDropdown.append('<option value="' + value + '">' + value + '</option>');
                });
            },
            error: function() {
                console.log('Error fetching modalities.');
            }
        });
    }
   
</script>
@endpush