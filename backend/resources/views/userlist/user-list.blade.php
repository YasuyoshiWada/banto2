@extends('layouts.app')
@section('title', 'userlist')

@section('content')

<div class="container mx-auto mt-5">
    <div class="row">
        <div class="class col-12">
            <h3 class="font-poppins-bold">Hello Administration
                <i class="fa-solid fa-hands fa-sm"></i>,
            </h3>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="card" style="max-width: 360px; height:160px">
            <div class="row">
                <div class="col-md-4">
                    <img src="#" alt="transaction" class="mt-3 img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Total Transaction</h5>
                        <p class="card-text">5,423</p>
                        <p class="card-text"><small class="text-muted">↑ 16% this month</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="max-width: 360px; height:160px">
            <div class="row">
                <img src="#" alt="user" class="mt-3 img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Active Workers Now</h5>
                    <p class="card-text">121</p>
                </div>
            </div>
        </div>
        <div class="card" style="max-width: 500px; height:160px">
            <div class="row">
                <div class="col-lg-4">
                    <canvas id="pie-chart" height="200" width="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
