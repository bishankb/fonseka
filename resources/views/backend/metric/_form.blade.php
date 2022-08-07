<div class="row">
    <div class="col-md-12">
        <div class="form-group required {{ $errors->has('name') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}

            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'Enter Metric Name']) !!}

            @if ($errors->has('name'))
                <div class="ui pointing red basic label"> {{$errors->first('name')}}</div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}

            {!! Form::textarea('description', null, ['class' => 'form-control custom-textarea', 'placeholder'=>'Write Description']) !!}

            @if ($errors->has('description'))
                <div class="ui pointing red basic label"> {{$errors->first('description')}}</div>
            @endif
        </div>
    </div>
</div>

