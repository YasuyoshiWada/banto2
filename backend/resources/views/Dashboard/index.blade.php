@extends('layouts.app')
@section('title', 'Item View')
@section('content')

<link rel="stylesheet" href="{{ asset('/css/dashboard.css')  }}" >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js">
</script>

<div id="dashboard">

  <div class="container">

    <h1>Dashboard</h1>

    <div class="row dashboard-top">
      <div class="col date-range rounded me-1">
          <p class="title">Auto date range</p>
        <div class="form-group">
          <select class="form-control text-center fw-bold" id="FormSelect1">
            <option value="" selected>This Month</option>
            <option value="">All</option>
            <option value="">All</option>
            <option value="">All</option>
          </select>
        </div>
      </div>
      <div class="col service rounded mx-1">
        <p class="title">Services</p>
        <div class="form-group">
          <select class="form-control text-center fw-bold" id="FormSelect2">
            <option value="" selected>All</option>
            <option value="">All</option>
            <option value="">All</option>
            <option value="">All</option>
          </select>
        </div>
      </div>
      <div class="col post rounded ms-1">
        <p class="title">Post</p>
        <div class="form-group">
          <select class="form-control text-center fw-bold" id="FormSelect3">
            <option value="" selected>All</option>
            <option value="">All</option>
            <option value="">All</option>
            <option value="">All</option>
          </select>
        </div>
      </div>
    </div>{{-- dashboard-top --}}

    <div class="row dashboard-middle">
      <div class="col rounded me-1">
        <p class="title">Total Accounts</p>
        <p class="value"></p>
        <p class="rate"><span class="arrow up">↑</span>20%</p>
        <p class="vs">vs previous 30 days</p>
      </div>

      <div class="col rounded mx-1">
        <p class="title">Orders per Month</p>
        <p class="value">37</p>
        <p class="rate"><span class="arrow up">↑</span>20</p>
        <p class="vs">vs previous 30 days</p>
      </div>

      <div class="col rounded mx-1">
        <p class="title">Average</p>
        <p class="value">1,104</p>
        <p class="rate"><span class="arrow up">↑</span>7.5%</p>
        <p class="vs">vs previous 30 days</p>
      </div>

      <div class="col rounded ms-1">
        <p class="title">Growth Rate</p>
        <p class="value">5.45%</p>
        <p class="rate"><span class="arrow up">↑</span>2.0%</p>
        <p class="vs">vs previous 30 days</p>
      </div>

    </div>

    <div class="row dashboard-bottom gx-3">

      <div class="col rounded me-1">
        <p class="">Sales Growth by Market Segment</p>



        <canvas id="myLine2Chart" width="800" height="400"></canvas>


      </div>
      <div class="col rounded ms-1">
        <p class="">Sales per  Rep</p>

        <div class="container" style="width:100%">
          <canvas id="canvas"></canvas>
        </div>

      </div>

    </div>


  </div>

</div>


<script src="{{ asset('/js/dashboard.js') }}"></script>
@endsection
