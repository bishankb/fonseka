@extends('layouts.backend')

@section('title')
  Routine
@endsection

@section('content')
  <div class="portlet-title">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6">
        <h1 class="page-title font-green sbold">
          <i class="fa fa-television font-green"></i> Daily Routine
        </h1>
      </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="caption pull-right">
              @isset($disableButton)
                <div class="tooltip-wrapper disabled" data-title="{{ $disableButton ? 'Wait till tomorrow' : 'Add today Routine' }}">
                    <a href="{{ route('routines.create') }}" class="btn btn-sm bold green {{ $disableButton ? 'disabled' : '' }}">
                    <i class="fa fa-plus"></i> Add New
                    </a>
                </div>
              @else
                <div class="tooltip-wrapper disabled" data-title="Add today Routine">
                    <a href="{{ route('routines.create') }}" class="btn btn-sm bold green">
                    <i class="fa fa-plus"></i> Add New
                    </a>
                </div>
              @endisset
          </div>
        </div>
    </div>
  </div>
  
  <div class="portlet-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>
            <a href="{{ route('routines.index', array_merge(Request::all(), ['sort_by' => 'criteria', 'criteria' => 'day-high-low'])) }}" style="margin-right: 5px;">
              <i class="fa fa-arrow-up"></i>
            </a>

              Day

            <a href="{{ route('routines.index', array_merge(Request::all(), ['sort_by' => 'criteria', 'criteria' => 'day-low-high'])) }}" style="margin-left: 5px;"> 
              <i class="fa fa-arrow-down"></i>
            </a>
          </th>
          <th>
            <a href="{{ route('routines.index', array_merge(Request::all(), ['sort_by' => 'criteria', 'criteria' => 'creative_work-high-low'])) }}" style="margin-right: 5px;">
              <i class="fa fa-arrow-up"></i>
            </a>

              Creative Work

            <a href="{{ route('routines.index', array_merge(Request::all(), ['sort_by' => 'criteria', 'criteria' => 'creative_work-low-high'])) }}" style="margin-left: 5px;"> 
              <i class="fa fa-arrow-down"></i>
            </a>
          </th>
          <th>Quality Score</th>
          <th>Notes</th>          
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($routines as $routine)
          <tr>
            <td>{{ pagination($routines, $loop) }}</td>                      
            <td>{{ $routine->created_at->format('d M, Y') }} ({{ $routine->created_at->format('l') }})</td>
            <td>{{ $routine->creative_work }}</td>
            <td>{{ \App\Models\Routine::QualityScore[$routine->quality_score] }}</td>
            <td>{{ $routine->notes }}</td>
            
              <td class="text-center">
                  <a href="{{ route('routines.edit', $routine->id) }}"
                     class="btn btn-sm blue btn-outline filter-submit margin-bottom">
                    <i class="fa fa-edit"></i>
                  </a>
                    {!! Form::open(['route' => ['routines.destroy', $routine->id], 'method' => 'DELETE', 'class' => 'form-edit-button']) !!}
                      <button
                          class="btn btn-sm red btn-outline filter-submit margin-bottom mt-sweetalert-delete"
                          title="Delete"
                      >
                        <i class="fa fa-trash-o"></i>
                      </button>
                    {!! Form::close() !!}

              </td>
          </tr>
        @empty
          <tr class="text-center">
            <td colspan="8">No data available in table</td>
          </tr>
        @endforelse
      </tbody>
      </table>
    </div>
  </div>
  <div class="portlet-footer text-center">
    {{ $routines->appends(request()->input())->links() }}    
  </div>
@endsection

@section('backend-script')
  <script type="text/javascript">


    $(function() {
    $('.tooltip-wrapper').tooltip({position: "bottom"});
});
  </script>
@endsection