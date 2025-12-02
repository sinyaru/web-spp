@extends('layouts.backend.app')
@section('title', 'Dashboard')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('templates/backend/AdminLTE-3.1.0') }}/plugins/chart.js/Chart.min.css">
@endpush

@section('content_title', 'Dashboard')
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $total_siswa }}</h3>

        <p>Siswa</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
      <a href="{{ route('siswa.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ $total_kelas }}</h3>

        <p>Kelas</p>
      </div>
      <div class="icon">
        <i class="fas fa-school"></i>
      </div>
      <a href="{{ route('kelas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $total_petugas }}</h3>

        <p>Petugas</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-tie"></i>
      </div>
      <a href="{{ route('petugas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ $total_admin }}</h3>

        <p>Admin</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-secret"></i>
      </div>
      <a href="{{ route('admin-list.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
<!-- /.row -->

<div class="container mt-5">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <div class="card">
        <div class="card-header">Siswa</div>
        <div class="card-body">
          <canvas id="canvas" height="200" width="500"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')

<script>
  const SISWA_LAKI_LAKI = <?php echo json_encode($siswa_laki_laki); ?>;
  const SISWA_PEREMPUAN = <?php echo json_encode($siswa_perempuan); ?>;

  const ctx = document.getElementById('canvas').getContext('2d');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Siswa Laki-laki', 'Siswa Perempuan'],
      datasets: [{
        label: 'Jumlah Siswa',
        data: [SISWA_LAKI_LAKI, SISWA_PEREMPUAN],
        backgroundColor: [
          'rgba(255, 99, 132, 0.4)',
          'rgba(54, 162, 235, 0.4)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)'
        ],
        borderWidth: 1
      }]
    },

    options: {
      responsive: true,
      maintainAspectRatio: false,

      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true,
            stepSize: 0.5 // ⭐ sekarang berfungsi!
          }
        }]
      }
    }
  });
</script>

<style>
  #canvas {
    height: 300px !important;
  }
</style>

@endpush