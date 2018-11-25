{!! Form::open(['route' => 'counter.send.value', 'method' => 'post', 'class' => 'mt-3']) !!}

<!-- Counter Form Select -->
<div class="form-group">
    {{ Form::label('counter', __('Counter') . ':') }}
    {{ Form::select('counter_id', $counters->pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => __('Select counter')]) }}
</div>

<!-- Value Form Input -->
<div class="form-group">
    {{ Form::label('value', __('Value') . ':') }}
    {{ Form::text('value', null, ['class' => 'form-control']) }}
</div>

<!-- Form Submit -->
{!! Form::submit(__('Send'), ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}