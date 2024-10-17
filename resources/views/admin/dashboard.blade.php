@extends('layouts.admin')

@section('main-content-header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-0">
      <div class="col-6 row">
        <h1><i class="fas fa-chart-area"></i> Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection 

@section('main-content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
        <div class="inner">
        <h3>{{ $graduates }}</h3>
        <p>Alumni Graduates</p>
        </div>
        <div class="icon">
        <i class="fas fa-user-gradute"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
        <div class="inner">
        <h3>{{ $jobPostings }}</h3>
        <p>Job Postings</p>
        </div>
        <div class="icon">
        <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
        <div class="inner">
        <h3>{{ $users }}</h3>
        <p>User Registrations</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
          <h3>{{ $userProfiles }}</h3>
          <p>User Profiles</p>
          </div>
          <div class="icon">
          <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
        <div class="card-header border-0">
        <div class="d-flex justify-content-between">
        <h3 class="card-title">Graduates per year</h3>
        <a href="javascript:void(0);">View Report</a>
        </div>
        </div>
        <div class="card-body">
        <!-- <div class="d-flex">
          <p class="d-flex flex-column">
          <span class="text-bold text-lg">$18,230.00</span>
          <span>Sales Over Time</span>
          </p>
          <p class="ml-auto d-flex flex-column text-right">
          <span class="text-success">
          <i class="fas fa-arrow-up"></i> 33.1%
          </span>
          <span class="text-muted">Since last month</span>
          </p>
        </div> -->

        <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <canvas id="graduatesChart" height="400" width="625" style="display: block; width: 625px; height: 200px;" class="chartjs-render-monitor"></canvas>
        </div>
        <!-- <div class="d-flex flex-row justify-content-end">
          <span class="mr-2">
          <i class="fas fa-square text-primary"></i> This year
          </span>
          <span>
          <i class="fas fa-square text-gray"></i> Last year
          </span>
        </div> -->
        </div>

        </div>
        </div>
    </div>
  </div>
</div>
@endsection 

@section('script')
<script>
  var ctx = document.getElementById('graduatesChart').getContext('2d');
  var graduatesChart = new Chart(ctx, {
      type: 'bar',  // Change this to 'line' if you prefer a line chart
      data: {
          labels: @json($chartData['years']),  // Years
          datasets: [
              {
                  label: 'BSIT Graduates',
                  data: @json($chartData['bsit']),  // Data for BSIT
                  backgroundColor: 'rgba(75, 192, 192, 1)',  // Color for bars
                  borderColor: 'rgba(75, 192, 192, 1)',  // Border color
                  borderWidth: 1
              },
              {
                  label: 'BSCS Graduates',
                  data: @json($chartData['bscs']),  // Data for BSCS
                  backgroundColor: 'rgba(153, 102, 255, 1)',  // Color for bars
                  borderColor: 'rgba(153, 102, 255, 1)',  // Border color
                  borderWidth: 1
              }
          ]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
</script>
@endsection