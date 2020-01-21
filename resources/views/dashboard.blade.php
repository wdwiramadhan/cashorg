@extends('layouts.app')

@section('content')
    
<div class="container-fluid mt-5">
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-primary border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Balance</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">8/24</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-info border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Income</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">123/267</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-danger border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Expenditur</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">200/300</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-gradient-default border-0">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0 text-white">Member</h5>
                  <span class="h2 font-weight-bold mb-0 text-white">50/62</span>
                  <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                  </div>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-h"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card-deck flex-column flex-xl-row">
        <div class="card">
          <div class="card-header bg-transparent">
            <h6 class="text-muted text-uppercase ls-1 mb-1">Overview</h6>
            <h2 class="h3 mb-0">Sales value</h2>
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
                <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                <h2 class="h3 mb-0">Total orders</h2>
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
        <!-- Progress track -->
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <!-- Surtitle -->
                <h6 class="surtitle">5/23 projects</h6>
                <!-- Title -->
                <h5 class="h3 mb-0">Progress track</h5>
              </div>
              <div class="col-4 text-right">
                <a href="#!" class="btn btn-sm btn-neutral">Action</a>
              </div>
            </div>
          </div>
          <!-- Card body -->
          <div class="card-body">
            <!-- List group -->
            <ul class="list-group list-group-flush list my--3">
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/bootstrap.jpg">
                    </a>
                  </div>
                  <div class="col">
                    <h5>Argon Design System</h5>
                    <div class="progress progress-xs mb-0">
                      <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/angular.jpg">
                    </a>
                  </div>
                  <div class="col">
                    <h5>Angular Now UI Kit PRO</h5>
                    <div class="progress progress-xs mb-0">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item px-0">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#" class="avatar rounded-circle">
                      <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/sketch.jpg">
                    </a>
                  </div>
                  <div class="col">
                    <h5>Black Dashboard</h5>
                    <div class="progress progress-xs mb-0">
                      <div class="progress-bar bg-red" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
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