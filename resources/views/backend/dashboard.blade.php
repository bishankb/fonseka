@extends('layouts.backend')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="portlet-title">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <h1 class="page-title font-green sbold">
              <i class="fa fa-television font-green"></i> Dashboard
            </h1>
          </div>
        </div>
    </div>
    <div class="container-fluid">
        @forelse($datas as $key => $data)
            <div class="row">
                <h4>{{ $key }}</h4>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                        <div class="visual">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="1349">{{$data->sum('creative_work')}} hrs</span>
                                
                            </div>
                            <div class="desc"> Active Hours </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                        <div class="visual">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="1349">{{$data->sum('quality_score')}}</span>
                                
                            </div>
                            <div class="desc"> Quality Score </div>
                        </div>
                    </a>
                </div>
            </div>
            <hr>
            @empty
                <h2>NO Data</h2>
            @endforelse
        </div>
@endsection
