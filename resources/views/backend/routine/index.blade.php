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
          <small class="font-green sbold">Date: {{ \Carbon\Carbon::now()->format('M, Y') }}</small>
        </h1>
      </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="caption pull-right">
            <a href="{{ route('routines.create') }}" class="btn btn-sm bold green">
              <i class="fa fa-plus"></i> Add New
            </a>
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
          <th>Day</th>
          <th>Creative Work</th>
          <th>Quality Score</th>
          <th>Notes</th>          
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($routines as $routine)
          <tr>
            <td>{{ pagination($routines, $loop) }}</td>                      
            <td>{{ $routine->created_at->format('d l') }}</td>
            <td>{{ $routine->creative_work }}</td>
            <td>{{ $routine->quality_score }}</td>
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