
    
                        <div class='row'>

                        <div class='col-lg-12'>
                            <div id='table_detail'></div>
                                Showing <span class='fw-semibold'>{{$masterlists->firstItem()}}</span> to <span class='fw-semibold'>{{$masterlists->lastItem()}}</span> of
                                <span class='fw-semibold'>{{number_format($masterlists->total(), 0,'', ',')}}</span> results
                                <table id='table_masterlists' class='table table-stripped table-bordered table-hover' >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class='sorting text-center' data-sorting_type='asc' data-column_name='emp_num'
                            style='cursor: pointer'>Emp Num <span id='emp_num_icon'></span></th><th class='sorting text-center' data-sorting_type='asc' data-column_name='lname'
                            style='cursor: pointer'>Lname <span id='lname_icon'></span></th><th class='sorting text-center' data-sorting_type='asc' data-column_name='fname'
                            style='cursor: pointer'>Fname <span id='fname_icon'></span></th><th class='sorting text-center' data-sorting_type='asc' data-column_name='mname'
                            style='cursor: pointer'>Mname <span id='mname_icon'></span></th><th class='sorting text-center' data-sorting_type='asc' data-column_name='position'
                            style='cursor: pointer'>Position <span id='position_icon'></span></th><th class='sorting text-center' data-sorting_type='asc' data-column_name='salarygrade'
                            style='cursor: pointer'>Salarygrade <span id='salarygrade_icon'></span></th><th class='sorting text-center' data-sorting_type='asc' data-column_name='office'
                            style='cursor: pointer'>Office <span id='office_icon'></span></th>
                                            
                                            <th style='min-width: 60px;text-align:center'><i class='bi bi-pencil text-success'></i> <i class='bi bi-trash text-danger'></i></th>
                                        </tr>
                                    </thead>
                                    <tbody id='tbody_masterlists'>
                                        @php
                                        $count=$masterlists->firstItem() - 1;
                                        @endphp
                                        @if(!empty($masterlists) && $masterlists->count())
                        
                                        @foreach($masterlists as $masterlist)
                                        @php
                                        $count++;
                                        @endphp
                                        <tr onmouseover='show_hiddens({{$masterlist->id}})' onmouseout='hide_hiddens({{$masterlist->id}})'>
                                            <td style='vertical-align: middle'>{{$count}}</td>
                        
                                            <td>{{$masterlist->emp_num }}</td><td>{{$masterlist->lname }}</td><td>{{$masterlist->fname }}</td><td>{{$masterlist->mname }}</td><td>{{$masterlist->position }}</td><td>{{$masterlist->salarygrade }}</td><td>{{$masterlist->office }}</td>
                                            
                                            <td onclick=event.stopPropagation() style='font-size: 15px;text-align:center'>
                                                <div id='div_actions_{{$masterlist->id}}' style='display: none'>
                                                    @if(Auth::user() || $masterlist->created_by == Auth::user()->id)
                                                    <a href='#' style=''
                                                    onclick="edit_masterlist('{{Crypt::encrypt($masterlist->id)}}','{{$masterlist->emp_num}}','{{$masterlist->lname}}','{{$masterlist->fname}}','{{$masterlist->mname}}','{{$masterlist->position}}','{{$masterlist->salarygrade}}','{{$masterlist->office}}')"
                                                        class='text-success' title='Edit This Document'><i class='bi bi-pencil'></i></a>
                                                    <a href='#' style='margin: 1px' onclick="delete_masterlist('{{Crypt::encrypt($masterlist->id)}}')"
                                                        class='text-danger' title='Delete This Document'> <i class='bi bi-trash'></i></a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan='4'>No data found.</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-12'>
                                {!! $masterlists->links('pagination::bootstrap-5') !!}
                            </div>
                        </div>

                    