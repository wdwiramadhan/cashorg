@extends('layouts.app')

@section('content')
    
<div class="container-fluid mt-5">
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-primary border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col pb-3">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Balance</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">Rp. {{$balance}}</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-info border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col pb-3">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total Income</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">Rp. {{$income}}</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-danger border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col pb-3">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total Expenditur</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">Rp. {{$expenditure}}</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-default border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col pb-3">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Member</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">{{$user}}</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-deck flex-column flex-xl-row">
        <div class="card">
          <div class="card-header bg-transparent">
            <h2 class="h3 mb-0">Monthly Income</h2>
          </div>
          <div class="card-body">
            <!-- Chart -->
            <div class="chart">
              <!-- Chart wrapper -->
              <canvas id="chart-sales" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header bg-transparent">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="h3 mb-0">Average Borower</h2>
              </div>
            </div>
          </div>
          <div class="card-body">
            <!-- Chart -->
            <div class="chart">
              <canvas id="chart-bars" class="chart-canvas"></canvas>
            </div>
          </div>
        </div>
      </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush