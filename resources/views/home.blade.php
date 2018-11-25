@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Панель управления</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ __(session('status')) }}
                            </div>
                        @endif

                        <ul class="list-group">
                            @foreach($counters as $counter)
                                <li class="list-group-item"> {{ $counter->name }} - {{ $counter->serial }}</li>
                            @endforeach
                        </ul>

                        @include('counters.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
