
    
                    <x-app-layout>
                        <x-slot name='page_title'>
                            <title>Masterlist</title>
                        </x-slot>

                        <x-slot name='my_css'>
                            
                        </x-slot>

                        <x-slot name="page_breadcrumb">
                            <div class="pagetitle">
                                <h1> Masterlist </h1>
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="url('')">Home</a></li>
                                        <li class="breadcrumb-item active">Masterlist</li>
                                    </ol>
                                </nav>
                            </div><!-- End Page Title -->
                        </x-slot>


                        <div class="card">
                            <div class="card-header">
                                <form id="form_filter" name="form_filter" method="POST" action="">
                                    <div class="row">
                                        <div class="col-md-12" id="div_filters">
                                            {{-- for Advance Filter--}}
                                            {{--
                                            <div id="advance_filter" style="display: none">
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>Category</label>
                                                        <input type="text" class="form-control" name="search_quantity" id="search_quantity" />
                                                    </div>
                                                </div>
                                            </div>
                                            --}}
                                            <div class='row'>
                                                
                            <div class="col-md-3">
                                <label>Emp Num</label><input type="text" class="form-control" name="search_emp_num" id="search_emp_num" /></div>
                            
                            <div class="col-md-3">
                                <label>Lname</label><input type="text" class="form-control" name="search_lname" id="search_lname" /></div>
                            
                            <div class="col-md-3">
                                <label>Fname</label><input type="text" class="form-control" name="search_fname" id="search_fname" /></div>
                            
                            <div class="col-md-3">
                                <label>Mname</label><input type="text" class="form-control" name="search_mname" id="search_mname" /></div>
                            
                            <div class="col-md-3">
                                <label>Position</label><input type="text" class="form-control" name="search_position" id="search_position" /></div>
                            
                            <div class="col-md-3">
                                <label>Salarygrade</label><input type="text" class="form-control" name="search_salarygrade" id="search_salarygrade" /></div>
                            
                            <div class="col-md-3">
                                <label>Office</label><input type="text" class="form-control" name="search_office" id="search_office" /></div>
                            
                                            </div>
                                        </div>
                                    <input type="submit" style="display:none" />
                                    </div>
                                </form>
                            </div>

                            <div class="card-body" style="overflow-x: auto">
                                <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                                <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="created_at" />
                                <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />

                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        @if(Auth::user())
                                        <button type="button" onclick="add_masterlist()" class="btn btn-success"><i class="bi bi-plus-circle"></i> New Masterlist</button>
                                        @endif
                                        <button id="btn_filter" class="btn btn-info"><i class="bi bi-funnel"></i> Filter Search
                                        </button>
                                        <!--<button id="btn_filter_advanced" class="btn btn-primary"><i class="fa fa-search"></i> Show
                                            Advanced
                                            Filter
                                        </button>-->
                                    </div>
                                </div>
                                <br>
                                <div id="table_data_masterlist">

                                </div>
                            </div>

                        </div>


                        <div class="modal fade" id="modal_masterlist" tabindex="-1" data-bs-backdrop="static" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal_masterlist_head"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-2">
                            <label for="emp_num" id="label_emp_num" class="form-label">Emp Num</label><input onkeyup="color_empty('emp_num')" type="text" class="form-control" id="emp_num" name="emp_num"></div><div class="mb-2">
                            <label for="lname" id="label_lname" class="form-label">Lname</label><input onkeyup="color_empty('lname')" type="text" class="form-control" id="lname" name="lname"></div><div class="mb-2">
                            <label for="fname" id="label_fname" class="form-label">Fname</label><input onkeyup="color_empty('fname')" type="text" class="form-control" id="fname" name="fname"></div><div class="mb-2">
                            <label for="mname" id="label_mname" class="form-label">Mname</label><input onkeyup="color_empty('mname')" type="text" class="form-control" id="mname" name="mname"></div><div class="mb-2">
                            <label for="position" id="label_position" class="form-label">Position</label><input onkeyup="color_empty('position')" type="text" class="form-control" id="position" name="position"></div><div class="mb-2">
                            <label for="salarygrade" id="label_salarygrade" class="form-label">Salarygrade</label><input onkeyup="color_empty('salarygrade')" type="text" class="form-control" id="salarygrade" name="salarygrade"></div><div class="mb-2">
                            <label for="office" id="label_office" class="form-label">Office</label><input onkeyup="color_empty('office')" type="text" class="form-control" id="office" name="office"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class='bi bi-x'></i>Close</button>
                                        <button type="button" class="btn btn-success" id="btn_save_masterlist"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <x-slot name="my_js">
                            <script>
                                var baseUrl = "{{url('/')}}";
                                var _token = "{{ csrf_token() }}";
                                var transaction='add';
                                var selected_id;
                                var page=1, sort_type='desc', column_name='created_at', show_advance=0;
                                var max_sub_category=0;
                                var current_page=0;

                                $(document).ready(function() {           
                                    fetch_data(page, sort_type, column_name);

                                    $(document).on('click', '.sorting', function() {
                                        column_name = $(this).data('column_name');
                                        var reverse_order = '';
                                        if (sort_type == 'asc') {
                                            $(this).data('sorting_type', 'desc');
                                            reverse_order = 'desc';
                                        } else if (sort_type == 'desc') {
                                            $(this).data('sorting_type', 'asc');
                                            reverse_order = 'asc';
                                        }
                                        clear_icon();
                                        sort_type = reverse_order;
                                        fetch_data(page, reverse_order, column_name);
                                    });

                                    $(document).on('click', '.pagination a', function(event) {
                                        event.preventDefault();
                                        page = $(this).attr('href').split('page=')[1];
                                        $('li').removeClass('active');
                                        $(this).parent().addClass('active');
                                        fetch_data(page, sort_type, column_name);
                                    });

                                });


                                function fetch_data(page, sort_type, sort_by) {
                                    show_loading('Populating Table');
                                    var filter = $('#form_filter').serialize();
                                    $.ajax({
                                        url: "/masterlist/get_ajax_data_masterlist?sortby="  + sort_by + "&page=" + page + "&sorttype=" + sort_type + "&" + filter,
                                        success: function(data) {
                                            $('#table_data_masterlist').html(data);
                                            clear_icon();
                                            if (sort_type == "desc") {
                                                $('#' + sort_by + '_icon').html('<span class="bi bi-sort-alpha-down"></span>');
                                            } else {
                                                $('#' + sort_by + '_icon').html('<span class="bi bi-sort-alpha-up"></span>');
                                            }
                                            hide_loading();
                                        }
                                    });
                                }

                                function clear_icon() {
                                    $('#id_icon').html('');
                                    $('#post_title_icon').html('');
                                }

                                function show_hiddens(id) {
                                    $('#div_actions_' + id).show();
                                }
                    
                                function hide_hiddens(id) {
                                    $('#div_actions_' + id).hide();
                                }

                                $('#btn_filter').on('click', function() {
                                    fetch_data(page, sort_type, column_name);
                                })
                    
                                $('#form_filter').on('submit', function() {
                                    fetch_data(page, sort_type, column_name);
                                    return false;
                                })

                                $('#btn_filter_advanced').on('click', function() {
                                    if (show_advance == 0) {
                                        $(this).html("<i class='fa fa-filter'></i>Hide Advanced Filter");
                                        $('#advance_filter').toggle(500);
                                        show_advance = 1;
                                    } else {
                                        $(this).html("<i class='fa fa-filter'></i>Show Advanced Filter");
                                        $('#advance_filter').toggle(500);
                                        show_advance = 0;
                                    }
                                })




                                $('#btn_save_masterlist').on('click',function(){
                                    var error_count=0;
                                    error_count += check_empty('emp_num');
error_count += check_empty('lname');
error_count += check_empty('fname');
error_count += check_empty('mname');
error_count += check_empty('position');
error_count += check_empty('salarygrade');
error_count += check_empty('office');

                                    if(error_count>0){
                                        swal_error('There is an empty required field.');
                                    }
                                    else{
                                        var emp_num=$.trim($('#emp_num').val());
var lname=$.trim($('#lname').val());
var fname=$.trim($('#fname').val());
var mname=$.trim($('#mname').val());
var position=$.trim($('#position').val());
var salarygrade=$.trim($('#salarygrade').val());
var office=$.trim($('#office').val());

                                        Swal.fire({
                                            title: 'Are you sure?',
                                            text: "",
                                            icon: 'question',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $('#btn_save_masterlist').prop('disabled', true);

                                                $.post(baseUrl + '/masterlist/save_masterlist',{'_token':_token,'transaction':transaction,'selected_id':selected_id,
                                                    'emp_num':emp_num,'lname':lname,'fname':fname,'mname':mname,'position':position,'salarygrade':salarygrade,'office':office,}
                                                    ,function(data){
                                                    if(data=='ok'){
                                                        if(transaction=='add'){
                                                            notify_success('', 'New Masterlist saved Successfully.');
                                                        }else{
                                                            notify_success('', 'Masterlist updated Successfully.');
                                                        }
                                                        
                                                        fetch_data(page, sort_type, column_name);
                                                        $('#modal_masterlist').modal('hide');
                                                    }else{
                                                        swal_error(data);
                                                    }
                                                    $('#btn_save_masterlist').prop('disabled', false);
                                                })
                                            }
                                        })


                                    }
                                })

                            
                                function add_masterlist(){
                                    transaction='add';
                                    $('#modal_masterlist_head').html('<i class="bi bi-plus-circle"></i> New Masterlist');
                                    $('#btn_save_masterlist').html('<i class="bi bi-save"></i> Save Masterlist');
                                    $('#modal_masterlist').modal('show');
                                }

                                function edit_masterlist(id,emp_num,lname,fname,mname,position,salarygrade,office){
                                    $('#modal_masterlist_head').html('<i class="bi bi-pencil-circle"></i> Update Masterlist');
                                    $('#btn_save_masterlist').html('<i class="bi bi-save"></i> Save Changes');
                                    transaction='edit';
                                    selected_id=id;
                                    $('#emp_num').val(emp_num);
$('#lname').val(lname);
$('#fname').val(fname);
$('#mname').val(mname);
$('#position').val(position);
$('#salarygrade').val(salarygrade);
$('#office').val(office);

                                    $('#modal_masterlist').modal('show');
                                }
                                //STOPEDD HERE
                                function delete_masterlist(id){
                                    Swal.fire({
                                            title: 'Are you sure?',
                                            text: "This action cannot be reverted.",
                                            icon: 'question',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                show_loading();
                                                $.post(baseUrl + '/masterlist/delete_masterlist',{'_token':_token,'id':id},function(data){
                                                    if(data=='ok'){
                                                        notify_success('', 'Masterlist removed Successfully.');
                                                        fetch_data(page, sort_type, column_name);
                                                    }else{
                                                        swal_error(data);
                                                    }
                                                    hide_loading();
                                                })
                                            }
                                        })
                                }
                            </script>
                        </x-slot>

                    </x-app-layout>


                    