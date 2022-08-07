@extends('layouts.backend')

@section('title')
  Custom Metric
@endsection

@section('content')
  <div class="portlet-title">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6">
        <h1 class="page-title font-green sbold">
          <i class="fa fa-television font-green"></i>  Custom Metric
        </h1>
      </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="caption pull-right">
            <div class="tooltip-wrapper disabled" data-title="Add Metric">
                  <a href="{{ route('metrics.create') }}" class="btn btn-sm bold green">
                  <i class="fa fa-plus"></i> Add New
                  </a>
            </div>
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
          <th>Name</th>
          <th>Description</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($metrics as $metric)
          <tr>
            <td>{{ pagination($metrics, $loop) }}</td>                      
            <td>{{ $metric->name }}</td>
            <td>{{ $metric->description }}</td>
            
              <td class="text-center">
                  <a href="{{ route('metrics.edit', $metric->id) }}"
                     class="btn btn-sm blue btn-outline filter-submit margin-bottom">
                    <i class="fa fa-edit"></i>
                  </a>
                    {!! Form::open(['route' => ['metrics.destroy', $metric->id], 'method' => 'DELETE', 'class' => 'form-edit-button']) !!}
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
    {{ $metrics->appends(request()->input())->links() }}    
  </div>
@endsection