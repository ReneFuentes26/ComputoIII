<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('task_name') }}
            {{ Form::text('task_name', $tarea->task_name, ['class' => 'form-control' . ($errors->has('task_name') ? ' is-invalid' : ''), 'placeholder' => 'Task Name']) }}
            {!! $errors->first('task_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('due_time') }}
            {{ Form::text('due_time', $tarea->due_time, ['class' => 'form-control' . ($errors->has('due_time') ? ' is-invalid' : ''), 'placeholder' => 'Due Time']) }}
            {!! $errors->first('due_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>