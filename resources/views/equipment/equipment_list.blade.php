@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="{{url('/')}}/assets/libs/gridjs/theme/mermaid.min.css">
@endpush
@section('body')
<div class="containder">
   <div class="page-content   page-min-height  ">
      <div class="container-fluid">
         <div style="opacity: 1; transform: none;">
            <div class=" space-y-5">
               <div class="
                  card rounded-md bg-white dark:bg-slate-800   shadow-base
                  custom-class
                  ">
                  <div class="card">
                     @if(session('msg')){!!session('msg')!!}@endif
                     <div class="card-header justify-content-between d-flex align-items-center">
                        <h4 class="card-title">Equipment List</h4>
                     </div>
                     <!-- end card header -->
                     <div class="card-body">
                        <div id="table-search">
                           <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                              <div class="row mb-4">
                                 <div class="col-md-2">
                                    <a href="{{url('/add_equipment')}}" class="btn btn-primary" name="">Add More</a>
                                 </div>
                              </div>
                              <div class="gridjs-wrapper" style="height: auto;">
                                 <table role="grid" class="gridjs-table" style="height: auto;">
                                    <thead class="gridjs-thead">
                                       <tr class="gridjs-tr">
                                          <th data-column-id="name" class="gridjs-th" style="min-width: 83px; width: 125px;">
                                             <div class="gridjs-th-content">SL.no</div>
                                          </th>
                                          <th data-column-id="name" class="gridjs-th" style="min-width: 83px; width: 125px;">
                                             <div class="gridjs-th-content">Company</div>
                                          </th>
                                          <th data-column-id="email" class="gridjs-th" style="min-width: 180px; width: 269px;">
                                             <div class="gridjs-th-content">Handpiece</div>
                                          </th>
                                          <th data-column-id="position" class="gridjs-th" style="min-width: 226px; width: 338px;">
                                             <div class="gridjs-th-content">Modality</div>
                                          </th>
                                          <th data-column-id="company" class="gridjs-th" style="min-width: 120px; width: 180px;">
                                             <div class="gridjs-th-content">Platform</div>
                                          </th>
                                          <th data-column-id="action" class="gridjs-th" style="min-width: 120px; width: 180px;">
                                             <div class="gridjs-th-content">Action</div>
                                          </th>
                                          
                                       </tr>
                                    </thead>
                                    <tbody class="gridjs-tbody">
                                       @foreach($result['content'] as $value)
                                       <tr class="gridjs-tr">
                                          <td data-column-id="name" class="gridjs-td">{{ $loop->iteration}}</td>
                                          <td data-column-id="name" class="gridjs-td">{{$value['Company']}}</td>
                                          <td data-column-id="email" class="gridjs-td">{{$value['Handpiece']}}</td>
                                          <td data-column-id="position" class="gridjs-td">{{$value['Modality']}}</td>
                                          <td data-column-id="company" class="gridjs-td">{{$value['Platform']}}</td>
                                          <td data-column-id="company" class="gridjs-td"><a href="{{url('/equip_delete/'.$value['equip_id'])}}" class="btn btn-danger" name="">Delete</a></td>
                                          
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                              
                              <div id="gridjs-temp" class="gridjs-temp"></div>
                           </div>
                        </div>
                     </div>
                     <!-- end card body -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@push('script')
<!-- gridjs js -->
<script src="{{url('/')}}/assets/libs/gridjs/gridjs.umd.js"></script>
<script src="{{url('/')}}/assets/js/pages/gridjs.init.js"></script>
<script src="{{url('/')}}/assets/js/app.js"></script>
@endpush