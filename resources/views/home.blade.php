@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Счетчики</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($counters as $counter)
                                <li class="list-group-item"> {{ $counter->name }} - {{ $counter->serial }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">Передать показания</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ __(session('status')) }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @include('counters.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
