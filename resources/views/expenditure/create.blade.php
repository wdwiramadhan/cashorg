@extends('layouts.app', ['title' => __('User Management')])

@section('content')

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white ">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Expenditure</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('expenditure.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="post" action="{{ route('expenditure.store') }}" autocomplete="off">
                            @csrf
                            
                            <h6 class="heading-small text-muted mb-4">{{ __('Add Expenditure') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-amount">{{ __('Amount') }}</label>
                                    <input type="text" name="amount" id="input-amount" class="form-control {{ $errors->has('amount') ? ' is-invalid' : '' }}" placeholder="{{ __('Amount') }}" value="{{ old('amount') }}" required autofocus>

                                    @if ($errors->has('amount'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('amount') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('for') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-for">{{ __('For') }}</label>
                                    <input type="text" name="for" id="input-for" class="form-control {{ $errors->has('for') ? ' is-invalid' : '' }}" placeholder="{{ __('For') }}" value="{{ old('for') }}" required autofocus>

                                    @if ($errors->has('for'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('for') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
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