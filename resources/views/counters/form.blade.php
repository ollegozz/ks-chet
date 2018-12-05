{!! Form::open(['route' => 'counter.send.value', 'method' => 'post']) !!}

<!-- Counter Form Select -->
<div class="form-group">
    {{ Form::label('counter', __('Counter') . ':') }}
    {{ Form::select('counter_id', $counters->pluck('name', 'id'), old('counter_id'), ['class' => 'form-control', 'placeholder' => __('Select counter'), 'required']) }}
</div>

<!-- Value Form Input -->
<div class="form-group">
    {{ Form::label('value', __('Value') . ':') }}
    {{ Form::text('value', old('value'), ['class' => 'form-control', 'required']) }}
</div>

<!-- Form Submit -->
{!! Form::submit(__('Send'), ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}