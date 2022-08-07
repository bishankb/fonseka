@extends('layouts.backend')

@section('title')
    Dashboard
@endsection

@section('content')
	<div class="container-fluid">
	    <h4>Check Your Stats</h4>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                    <div class="visual">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="1349">23</span>
                        </div>
                        <div class="desc"> New Feedbacks </div>
                    </div>
                </a>
            </div>
		</div>
	</div>
@endsection
