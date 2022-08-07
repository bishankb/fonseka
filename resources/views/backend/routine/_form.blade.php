<div class="row">
    <div class="col-md-6">
        <div class="form-group required {{ $errors->has('creative_work') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('creative_work', 'Creative Work', ['class' => 'control-label']) !!}

            {!! Form::number('creative_work', null, ['class' => 'form-control', 'required' => 'required', 'placeholder'=>'How many hours you spend in creative work']) !!}

            @if ($errors->has('creative_work'))
                <div class="ui pointing red basic label"> {{$errors->first('creative_work')}}</div>
            @endif
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group required {{ $errors->has('quality_score') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('quality_score', 'Quality Score', ['class' => 'control-label']) !!}

            {!! Form::select("quality_score", $quality_scores, null, ['class' => 'form-control custom-select', 'placeholder' => 'Provide the quality score', 'required' => 'required']) !!}

            @if ($errors->has('quality_score'))
                <div class="ui pointing red basic label"> {{$errors->first('quality_score')}}</div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('notes') ? ' has-error' : '' }} clearfix ">
            {!! Form::label('notes', 'Notes', ['class' => 'control-label']) !!}

            {!! Form::textarea('notes', null, ['class' => 'form-control custom-textarea', 'placeholder'=>'Write Notes']) !!}

            @if ($errors->has('notes'))
                <div class="ui pointing red basic label"> {{$errors->first('notes')}}</div>
            @endif
        </div>
    </div>
</div>

