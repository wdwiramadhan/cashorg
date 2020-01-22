@extends('layouts.app', ['title' => __('Montog')])
@push('css')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
@endpush
@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col">
            <div class="card shadow ">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('Money Together') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('income.create') }}" class="btn btn-sm btn-primary">{{ __('Add income') }}</a>
                        </div>
                    </div>
                </div>  
                <div class="card-body">   
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="user-table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Amount</th>
                                   <th scope="col">From</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Month</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>      
    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $('#user-table').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    oPaginate: {
                        sNext: '<i class="fa fa-forward"></i>',
                        sPrevious: '<i class="fa fa-backward"></i>',
                        // sFirst: '<i class="fa fa-step-backward"></i>',
                        // sLast: '<i class="fa fa-step-forward"></i>'
                    }
                }  ,
                ajax: '{!! route('income.dataincome') !!}',
                columns: [
                    { name: 'amount', data: 'amount', },
                    { name: 'from', data: 'user.name'},
                    { name: 'type', data: 'type'},
                    { name: 'month', data: 'month'},
                    // { data: 'id',
                    //     render: function(data) { 
                    //         const link = "{{route('user.index')}}"+"/"+data
                    //         return `
                    //             <a class="btn btn-primary btn-sm btn-xs" stlye="margin: 0 3px" href="${link}/edit">Edit</a>
                    //             <form role="form" action="${link}" style="margin: 0 3px;display:inline" method="POST">{{ csrf_field()}}{{method_field('delete ')}}<button class="btn btn-sm btn-danger btn-xs">Delete</button></form>
                    //         `
                    //     }
                    // },
                ]
            });
        });
    </script>
@endpush