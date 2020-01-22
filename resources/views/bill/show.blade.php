@extends('layouts.app', ['title' => __('Payment')])

@section('content')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white ">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Payment') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('type.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="post" action="{{ route('bill.update', $bill->id) }}" autocomplete="off">
                            @csrf    
                            @method('put')     
                            <div class="pl-lg-4">   
                            <div class="table-responsive">
                                <table class="table align-items-center table-flush" id="user-table">
                                    <tbody>
                                        <tr>
                                            <th scope="col" width="200px">Amount</th>
                                            <td scope="col">{{$bill->amount}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col" >User</th>
                                            <td scope="col">{{$bill->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col" >Type</th>
                                            <td scope="col">{{$bill->type}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col" >Month</th>
                                            <td scope="col">{{$bill->month}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col" >Due date</th>
                                            <td scope="col">{{$bill->due_date}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col" >Payments Method</th>
                                            <td scope="col">Dana : 085727888771</td>
                                        </tr>
                                        <tr>
                                            <th scope="col" ></th>
                                            <td scope="col">OVO : 085727888771</td>
                                        </tr>
                                        <tr>
                                            <th scope="col" ></th>
                                            <td scope="col">BRI : 091213242324231233</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                              <div class="text-center">
                                  <button type="submit" class="btn btn-success mt-4">{{ __('Confirmation') }}</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection