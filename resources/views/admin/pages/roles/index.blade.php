@extends('layouts.app')

@section('title',$title)

@push('styles')
    
 
@endpush

@section('action')
    @can('role-create', Auth::user())
      <a href="{{ route('app.roles.create') }}" class="btn btn-sm btn-primary">Add Roles</a>
    @endcan
@endsection

@section('content')


<div class="row"> 
   <div class="col-12"> 
      <span class="alert-message mb-3"></span>
       <div class="card"> 
           <div class="card-head"> 
             <h4 class="card-title p-2 m-1"> {{$title}} </h4>
           </div>
           <div class="card-body px-0">
              <table class="table table-sm" id="role-datatables"> 
                <thead> 
                   <tr> 
                     <th> SL </th>
                     <th> Role Name</th>
                     <th> Note </th>
                     <th> Permissions </th>
                     <th> Created_at </th>
                     <th> Operation </th>
                   </tr>
                </thead>
                <tbody> 
                  
                </tbody>
              </table>
           </div>
       </div>
   </div>
</div>


@endsection

@push('scripts')
    


    <script>
        $('#role-datatables').DataTable({
            processing: true,
            serverSide: true,
            order: [], //Initial no order
            bInfo: true, //TO show the total number of data
            bFilter: false, //For datatable default search box show/hide
            responsive: true,
            ordering: false,
            lengthMenu: [
                [5, 10, 15, 25, 50, 100, 1000, 10000, -1],
                [5, 10, 15, 25, 50, 100, 1000, 10000, "All"]
            ],
            pageLength: 25, //number of data show per page
            ajax: {
                url: "{{ route('app.roles.getData') }}",
                type: "POST",
                dataType: "JSON",
                data: function(d) {
                    d._token = _token
                },
            },
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'note'},
                {data: 'permission'},
                {data: 'created_at'},
                {data: 'operation'},
            ],
            language: {
                processing: '<img src="{{ asset("table-loading.svg") }}">',
                emptyTable: '<strong class="text-danger">No Data Found</strong>',
                infoEmpty: '',
                zeroRecords: '<strong class="text-danger">No Data Found</strong>',
                oPaginate: {
                    sPrevious: "Previous", // This is the link to the previous page
                    sNext: "Next", // This is the link to the next page
                },
                lengthMenu: "_MENU_"
            },
            dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6' <'float-right pr-15'B>>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'<'float-right pr-15'p>>>",
            buttons: {
                buttons: [
                    {
                        text: '<i class="fa fa-refresh" aria-hidden="true"></i> Reload',
                        className: 'btn btn-sm btn-primary',
                        action: function (e, dt, node, config) {
                            dt.ajax.reload(null, false);
                        }
                    },
                    {
                        extend: 'pdf',
                        title: 'Role List',
                        filename: 'roles_{{ date("d-m-Y") }}',
                        text: '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF',
                        className: 'pdfButton btn btn-sm btn-primary',
                        orientation: "landscape",
                        pageSize: "A3",
                        exportOptions: {
                            columns: '0,1,2,3,4'
                        },
                        customize: function(doc) {
                            doc.defaultStyle.alignment = 'center';
                        }
                    },
                    {
                        extend: 'excel',
                        title: 'Role List',
                        filename: 'roles_{{ date("d-m-Y") }}',
                        text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel',
                        className: 'excelButton btn btn-sm btn-primary',
                        exportOptions: {
                            columns: '0,1,2,3,4'
                        },
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print" aria-hidden="true"></i> Print',
                        className: 'printButton btn btn-sm btn-primary',
                        orientation: "landscape",
                        pageSize: "A3",
                        exportOptions: {
                            columns: '0,1,2,3,4'
                        }
                    }
                ]
            }
        });

        $(document).on('click','.deleteBtn', function(){
            let row_id = $(this).data('id');
            let url="{{ route('app.roles.destroy') }}";
            datetable(row_id,url);
        });
    </script>

@endpush