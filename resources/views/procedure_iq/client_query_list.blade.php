@extends('layouts.master')
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
                   <main class="card-body p-6">
                      <div class="md:flex justify-between items-center mb-6">
                         <h4 class="card-title">Query List</h4>
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
                                        <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Order<span></span></th>
                                        <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">customer<span></span></th>
                                        <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">date<span></span></th>
                                        <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">quantity<span></span></th>
                                        <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">amount<span></span></th>
                                        <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">Form status<span></span></th>
                                        <th colspan="1" role="columnheader" title="Toggle SortBy" scope="col" class=" table-th " style="cursor: pointer;">action<span></span></th>
                                     </tr>
                                  </thead>
                                  <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>1</span></td>
                                        <td role="cell" class="table-td"><span>#951</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,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" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>3/26/2022</span></td>
                                        <td role="cell" class="table-td"><span>13</span></td>
                                        <td role="cell" class="table-td"><span>$1779.53</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500 
                                           "><a href="recommondation.php">Approve</a></span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                                           </div>
                                        </td>
                                     </tr>
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>2</span></td>
                                        <td role="cell" class="table-td"><span>#238</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,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" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>2/6/2022</span></td>
                                        <td role="cell" class="table-td"><span>13</span></td>
                                        <td role="cell" class="table-td"><span>$2215.78</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25  
                                           text-warning-500 bg-warning-500
                                           ">Process</span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                                           </div>
                                        </td>
                                     </tr>
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>3</span></td>
                                        <td role="cell" class="table-td"><span>#339</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,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" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>9/6/2021</span></td>
                                        <td role="cell" class="table-td"><span>1</span></td>
                                        <td role="cell" class="table-td"><span>$3183.60</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25  
                                           text-warning-500 bg-warning-500
                                           ">Process</span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                                           </div>
                                        </td>
                                     </tr>
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>4</span></td>
                                        <td role="cell" class="table-td"><span>#365</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,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" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>11/7/2021</span></td>
                                        <td role="cell" class="table-td"><span>13</span></td>
                                        <td role="cell" class="table-td"><span>$2587.86</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25  
                                           text-danger-500 bg-danger-500
                                           ">Reject</span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                                           </div>
                                        </td>
                                     </tr>
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>5</span></td>
                                        <td role="cell" class="table-td"><span>#513</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,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" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>5/6/2022</span></td>
                                        <td role="cell" class="table-td"><span>12</span></td>
                                        <td role="cell" class="table-td"><span>$3840.73</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500 
                                           "><a href="recommondation.php">Approve</a></span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                                           </div>
                                        </td>
                                     </tr>
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>6</span></td>
                                        <td role="cell" class="table-td"><span>#534</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,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" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>2/14/2022</span></td>
                                        <td role="cell" class="table-td"><span>12</span></td>
                                        <td role="cell" class="table-td"><span>$4764.18</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25  
                                           text-danger-500 bg-danger-500
                                           ">Reject</span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                                           </div>
                                        </td>
                                     </tr>
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>7</span></td>
                                        <td role="cell" class="table-td"><span>#77</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,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" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>7/30/2022</span></td>
                                        <td role="cell" class="table-td"><span>6</span></td>
                                        <td role="cell" class="table-td"><span>$2875.05</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500 
                                           "><a href="recommondation.php">Approve</a></span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                                           </div>
                                        </td>
                                     </tr>
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>8</span></td>
                                        <td role="cell" class="table-td"><span>#238</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,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" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>6/30/2022</span></td>
                                        <td role="cell" class="table-td"><span>9</span></td>
                                        <td role="cell" class="table-td"><span>$2491.02</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25  
                                           text-warning-500 bg-warning-500
                                           ">Process</span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                                           </div>
                                        </td>
                                     </tr>
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>9</span></td>
                                        <td role="cell" class="table-td"><span>#886</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAaZSURBVHgBhVVbbBzlGT1zn93Zq29rx3GyJHaVkkQkElYbHlpHraCK2iZRVFVVS8GPVYvSvFSirYStviD1xS+V+lDJREKKqqo1TlNCRAIJacGCB7sKJGAMu77trne9uzM7s3O/8M1KQYAIzD7Mv7sz3+V855yPwVdcC/PzuZAVz4dhOGV7TjEhiUWO5YAwUuWkvKKp2qJl1F+avvBs+UExmC/78fWrV4tcgPndVmvK9TxIoghBFBDQmZLRSxFYjodudGDZJvrz+RcQRLNnp6fLX5vg+sLieY7jZoIwzBmGgdLmNjS6K0kFCUnA3uECBIG6iBg027t0FpFOpWBalspxwuy5X/5i7oEJbiz+5zmGxUxEVdq2jcs3bqHaaKHW2gXnueASKdSbu5h69BgeO34ULMuA5wRKLoPjeQrGwvf8mdNP/nz2fkzu/uHNV66fZ1jmecPQezC8evstbNdbSCspcASHbWoYEEK4poHljzYhMiH27RmBJCVoJgGS9JzvBbBdZ+r0qR9r/7pyeenTDq5eWijqlrYcMshxLA9D1/HiwmVk+wbpCRY71Q2cmzyMM48/gcgzMfuXv+K11S388aenkB9/BAlZ6hURd2FZDsEXqQiY42enf1Zm4wSWa8z4YZBjCNe4+q3KFqxuB/XGDu5+vIajfQmc+c4JyEoSib4h/G76SQwqCaz//200S/dg2k4MDWzHRRD4lIzJBYw/H8dmr166VIwiPOU6DgSqQBYlbJbWsFfhkYw82F0d8G2YfoR2owarVcM/Xr6GE+OjWG9qKC2/RR2rUAnaOElIcEUU2PO9qXmiORtEwRkGPkSegyjwYAlbc7eCw6NDmMjJ2CPT6AIXV65cxuv//iciy8C3jzyM3/zkLAKlH++U63Cp8lQyQXTme0XyHIco8OB3Or/lo5A9nVTShJ/TG7Zer0L0HHjdLjjHxrcGM3i0OIiR8UMY3jMGUcnikcl9iBwDR8aLuP3BBkzXRSaThe/7iHWjE639mHUs813ecuxjAQXmeQGmaaK2UUK146CiVzBAvOeou30jD2Ni8gR8ElZ7aw2ddhOcIMMgHRQG8nho7xgcojUvCBTYiQNDTiikDaPI+76Xi6cfY+e7Nlo7FTQDDlzoYV01MJaRUalUkF95A6Rs8IkRwM4g2Z9Hlf4vSCy6lIjtH+zpIplM0bBtGjRH53SR1ToatI4Kg6rzSfZt+s579EDkwqahrbYtvPlRBXqnCVmIMFCQUZgYgsUzaOsORhUZG3fvoGt1wTAMOYYPj7qI7SSKQvCSJJVFUSoalCTBsgQJqTGMcKyQBU90Xt61sfB+HYP8O8ilk+jfqICVFfztf/fg+MCB/gLpZBujqgovlYFIvhXJQY/uXuCpLJGqbFkmtcfBpSqaehcnDgzBI4FVTKIdVWEFEYYIqpFcgoaroV0t9yjqEue3NZqLYaFdq8LsGj3riK0mrj4KoxWeZbhbvMROOV2TbMCkzD6ufbAD1Q7h00MxARSJh5RKYoCMLn450dII4xaxJsB7tTYOFfpQpTml+/JIZXMkfhaWGUOGRZb1/Tnd6MInoTVqFazVO6hZPswgAEOseGxyEg2fx5+W6nj1wyaxTUQu34cxRUDHDXte9F61hfV6A12ip97cocBEGlIvFzIvcYvXrtk/fPz7U4HZLd7brEGDhAx50MTBg8jkB/Cr6aex02iiVGtgecfE4moLrpCmoE1IBEeLOmeI4oFLu4KG4hATh0ZGCC7zhaeeeeZiz4sSfji9cmdVXdpokpoFDCclDOay+NHJk1ShiHOnnkA+29fDN2bW39++i/7RMbQIIpbg8Klbm2j+37US1jcr5GOmqqva7Kd2vXjjhupmh520JP+ApEIyD7BRb0LJ9iOREFDcM4zyVpWoaJNzyrRrGDQ0UitBwVBg8hfoND/bDzGQy+HA/v3P/voPv3/lc/ugsV1aOjj+DYZjMOXFFCMMNWr/oX1jyGbStDJF3F1dQ0hVxwUcPjQBUZJ7DCObx34qQiE/2mzUZy9eevH5+3HZz260N157ecbzgwthxKg2UVDrtNElTwqp4m9OHKSVKfXOcUCGPg55UEghGF5CoTiu/vm52Qtr778789mYn0sQX7dvX5/zPe+4YdgXa43deKGjoxtESxZHjxzu7SiefOjD0gZi9sUbizR0c/nO6vGTp74398V4PL7kWlq6Wabb07nioRk5qZyJgvC0rhvHCn25XEpRoGqdMmmkTCv2Fgt2rrxyU8UDrk8AtD1mNvX+nk8AAAAASUVORK5CYII=" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>8/9/2022</span></td>
                                        <td role="cell" class="table-td"><span>8</span></td>
                                        <td role="cell" class="table-td"><span>$3006.95</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25  
                                           text-warning-500 bg-warning-500
                                           ">Process</span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                                           </div>
                                        </td>
                                     </tr>
                                     <tr role="row">
                                        <td role="cell" class="table-td">
                                           <div><input type="checkbox" title="Toggle Row Selected" class="table-checkbox" style="cursor: pointer;"></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>10</span></td>
                                        <td role="cell" class="table-td"><span>#3</span></td>
                                        <td role="cell" class="table-td">
                                           <div><span class="inline-flex items-center"><span class="w-7 h-7 rounded-full ltr:mr-3 rtl:ml-3 flex-none bg-slate-600"><img src="data:image/png;base64,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" alt="" class="object-cover w-full h-full rounded-full"></span><span class="text-sm text-slate-600 dark:text-slate-300 capitalize">Jenny Wilson</span></span></div>
                                        </td>
                                        <td role="cell" class="table-td"><span>8/4/2022</span></td>
                                        <td role="cell" class="table-td"><span>12</span></td>
                                        <td role="cell" class="table-td"><span>$2160.32</span></td>
                                        <td role="cell" class="table-td"><span class="block w-full"><span class=" inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500 bg-success-500 
                                           "><a href="recommondation.php">Approve</a></span></span></td>
                                        <td role="cell" class="table-td">
                                           <div class="flex space-x-3 rtl:space-x-reverse">
                                              <div class="custom-tippy">
                                                 <button class="action-btn" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--heroicons" width="1em" height="1em" viewBox="0 0 24 24">
                                                       <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                          <path d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178c.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"></path>
                                                          <path d="M15 12a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"></path>
                                                       </g>
                                                    </svg>
                                                 </button>
                                              </div>
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
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
@push('script')
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
@endpush