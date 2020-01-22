@extends('layouts.app', ['title' => __('Income')])
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
                            <h3 class="mb-0">{{ __('Payment Confirmation') }}</h3>
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
                                    <th scope="col">Type</th>
                                    <th scope="col">Month</th>
                                    <th scope="col">Over Due</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
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
                ajax: '{!! route('bill.databill') !!}',
                columns: [
                    { name: 'amount', data: 'amount', },
                    { name: 'type', data: 'type'},
                    { name: 'month', data: 'month'},
                    { name: 'due_date', data: 'due_date'}, 
                    { name: 'status', data: 'status'}, 
                    { data: 'id',
                        render: function(data) { 
                            const link = "{{route('bill.index')}}"+"/update2/"+data
                            return `
                            <form role="form" action="${link}" style="margin: 0 3px;display:inline" method="POST">{{ csrf_field()}}{{method_field('put')}}<button class="btn btn-sm btn-primary btn-xs">Confirm</button></form>
                            `
                        }
                    },
                ]
            });
        });
    </script>
@endpush