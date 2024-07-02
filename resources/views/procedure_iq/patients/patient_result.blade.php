@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{url('/')}}/assets/libs/gridjs/theme/mermaid.min.css">
@endpush
@section('body')
@php
$sun_sensitivity=['']
@endphp
<div class="container-fluid">
   <div class="card">
      <div class="row p-4">
         <div class="col-md-4">
            <p>Name : {{$data_arr['name']}}</p>
         </div>
         <div class="col-md-4">
            <p>Email : {{$data_arr['email']}}</p>
         </div>
         <div class="col-md-4">
            <p>Phone : {{$data_arr['tel']}}</p>
         </div>
         <div class="col-md-2 mb-3">
            <lable for="sun_sensitivity" class="client_score_lable">Sun Sensitivity :</lable>
         </div>
         <div class="col-md-2 mb-3">
            <input type="text" id="client_score" class="form-control" value="{{$data_arr['sun_sensitivity']}}"readonly>
            {{-- <select id="modality" name="sun_sensitivity" class="form-select form-control">
               <option value="">Select Sun Sensitivity</option>
               <option value="Sensitive/Pale">Sensitive/Pale</option>
               <option value="Lighter Brown">Lighter Brown</option>
               <option value="Light Brown">Light Brown</option>
               <option value="Dark Brown">Dark Brown</option>
               <option value="Black">Black</option>
               <!-- Platform options will be dynamically populated based on the selected company -->
            </select> --}}
         </div>
         <div class="col-md-2 mb-3">
            <lable for="hq_prep" class="client_score_lable">HQ% Prep :</lable>
         </div>
         <div class="col-md-2 mb-3">
            <select id="modality" name="hq" class="form-select form-control">
               <option value="1 wk">1 wk</option>
               <option value="2 wk">2 wk</option>
               <option value="4 wk">4 wk</option>
               <option value="none">None</option>
               <!-- Platform options will be dynamically populated based on the selected company -->
            </select>
         </div>
         <div class="col-md-2 mb-3">
            <lable for="retinol_adequate" class="client_score_lable">Retinol Adequate :</lable>
         </div>
         <div class="col-md-2 mb-3">
            <select id="modality" name="retinol_adequate" class="form-select form-control">
               <option value="2 wk">2 wk</option>
               <option value="3 wk">3 wk</option>
               <option value="4 wk">4 wk</option>
               <option value="none">None</option>
               <!-- Platform options will be dynamically populated based on the selected company -->
            </select>
         </div>
         <div class="col-md-2 mb-3">
            <lable for="retinol_inadequate" class="client_score_lable">Retinol Inadequate :</lable>
         </div>
         <div class="col-md-2 mb-3">
            <select id="modality" name="retinol_inadequate" class="form-select form-control">
               <option value="2 wk">2 wk</option>
               <option value="3 wk">3 wk</option>
               <option value="4 wk">4 wk</option>
               <option value="none">None</option>
               <!-- Platform options will be dynamically populated based on the selected company -->
            </select>
         </div>
         <div class="col-md-2 mb-3">
            <lable for="sun_protection" class="client_score_lable">Sun Protection :</lable>
         </div>
         <div class="col-md-2 mb-3">
            <select id="modality" name="sun_protection" class="form-select form-control">
               <option value="Yes">Yes</option>
               <option value="No">No</option>
               <!-- Platform options will be dynamically populated based on the selected company -->
            </select>
         </div>
         <div class="col-md-2 mb-3">
            <lable for="client_score" class="client_score_lable">Patient Skin Score :</lable>
         </div>
         <div class="col-md-2 mb-3">
            <input type="text" readonly id="client_score" class="form-control" value="{{isset($result['client-score'])?$result['client-score']:''}}">
         </div>
         <div class="col-md-2 mb-3">
            <lable for="client_score" class="client_score_lable">Concern :</lable>
         </div>
         <div class="col-md-2 mb-3">
            <input type="text" id="client_score" class="form-control" value="{{ucFirst(str_replace ('_',' ',$data_arr['key']))}}"readonly>
         </div>
      </div>
   </div>
   <div class="card">
      <div class="card-header justify-content-between d-flex align-items-center">
         <h4 class="card-title">Patient Result</h4>
      </div>
      <!-- end card header -->
      <div class="card-body">
         <div id="table-gridjs">
            <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
               <div class="gridjs-head">
                  <div class="gridjs-search"><input type="search" placeholder="Type a keyword..." aria-label="Type a keyword..." class="gridjs-input gridjs-search-input"></div>
               </div>
               <div class="gridjs-wrapper" style="height: auto;">
                  <table role="grid" class="gridjs-table" style="height: auto;">
                     <thead class="gridjs-thead">
                        <tr class="gridjs-tr">
                           <th data-column-id="name" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 83px; width: 269px;">
                              <div class="gridjs-th-content">Procedure Name</div>
                              <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                           </th>
                           <th data-column-id="email" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 180px; width: 269px;">
                              <div class="gridjs-th-content">Score</div>
                              <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                           </th>
                           <th data-column-id="position" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 226px; width: 338px;">
                              <div class="gridjs-th-content">Price</div>
                              <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                           </th>
                           <th data-column-id="company" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 120px; width: 180px;">
                              <div class="gridjs-th-content">Down time</div>
                              <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-desc"></button>
                           </th>
                           <th data-column-id="country" class="gridjs-th gridjs-th-sort" tabindex="0" style="min-width: 117px; width: 174px;">
                              <div class="gridjs-th-content">Timeline</div>
                              <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending" class="gridjs-sort gridjs-sort-neutral"></button>
                           </th>
                        </tr>
                     </thead>
                     <tbody class="gridjs-tbody">
                        {{-- {{dd($result['data'])}} --}}
                        @if(count($result['data'])>0)
                        @foreach($result['data'] as $key=>$value)
                        <tr class="gridjs-tr">
                           <td data-column-id="name" class="gridjs-td">{{$value['procedure']}}</td>
                           <td data-column-id="email" class="gridjs-td">{{$value[$data_arr['key']]}}</td>
                           <td data-column-id="position" class="gridjs-td">Price</td>
                           <td data-column-id="company" class="gridjs-td">{{$value['down_time']}} Days</td>
                           <td data-column-id="country" class="gridjs-td"><a class="btn btn-primary" href="{{url('/timeline/?maintenance="'.$value['maintain'].'"&&treatment='.$value['treatment'])}}">
                            View Time Line
                          </a></td>
                        </tr>
                        @endforeach
                        @else
                        <tr class="gridjs-tr">
                           <td colspan="5">
                           <h2 class="text-center">No machine available related to Concern </h2>
                           </td>
                        </tr>
                        @endif
                        
                     </tbody>
                  </table>
               </div>
               <div class="gridjs-footer">
                 
               </div>
               <div id="gridjs-temp" class="gridjs-temp"></div>
            </div>
         </div>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered border-primary mb-0">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Procedure</th>
                     <th>Down time</th>
                     <th>Frekles</th>
                     <th>LHR</th>
                     <th>MDBTW</th>
                     <th>Maintain</th>
                     <th>Melasma</th>
                     <th>Rec in Summer</th>
                     <th>Treatment</th>
                     <th>CIT of Procedure</th>
                     <th>PIH & Procedure Risk</th>
                     <th>PIH Risk</th>
                  </tr>
               </thead>
               <!-- end thead -->
               <tbody>
                  {{-- {{dd($result['client-score'])}} --}}
                  @foreach($result['data'] as $key=>$value)
                  <tr>
                     <th scope="row">{{$loop->iteration}}</th>
                     <td>{{$value['procedure']}}</td>
                     <td>{{$value['down_time']}}</td>
                     <td>{{$value['frekles']}}</td>
                     <td>{{$value['lhr']}}</td>
                     <td>{{$value['mdbtw']}}</td>
                     <td>{{$value['maintain']}}</td>
                     <td>{{$value['melasma']}}</td>
                     <td>{{$value['rec_in_summer']}}</td>
                     <td>{{$value['treatment']}}</td>
                     <td>{{$value['cit_of_procedure']}}</td>
                     <td>{{$value['pih_procedure_risk']}}</td>
                     <td>{{$value['pih_risk']}}</td>
                  </tr>
                  @endforeach
               </tbody>
               <!-- end tbody -->
            </table>
            <!-- end table -->
         </div>
         <!-- end table responsive -->
         {{-- 
         <div class="print-button">
            <center>
            <button type="button" class="btn btn-primary mt-4" onclick="window.print(print)">Print</button>
            <center>
         </div>
      </div>
      --}}
      <!-- end card body -->
   </div>
</div>
@endsection
@push('script')
          <!-- gridjs js -->
          <script src="{{url('/')}}/assets/libs/gridjs/gridjs.umd.js"></script>

          <script src="{{url('/')}}/assets/js/pages/gridjs.init.js"></script>
  
          <script src="{{url('/')}}/assets/js/app.js"></script>
@endpush