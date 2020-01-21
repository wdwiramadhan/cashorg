@extends('layouts.app', ['title' => __('Type Management')])
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
                            <h3 class="mb-0">{{ __('Types') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('type.create') }}" class="btn btn-sm btn-primary">{{ __('Add type') }}</a>
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
                        <table class="table align-items-center table-flush" id="type-table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($types as $type)
                            <tr>
                                <td>{{$type->name}}</td>
                                <td>
                                <a href="{{route('type.edit', $type->id)}}" class="btn btn-primary btn-sm d-inline-block">Edit</a>
                                <form action="{{route('type.destroy', $type->id)}}" method="post" class="d-inline-block">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>      
    @include('layouts.footers.auth')
</div>
@endsection

