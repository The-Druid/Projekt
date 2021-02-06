@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header bg-dark text-white">{{ __('Hello there <3') }}</div>

                <div class="card-body text-white">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif


                        Hej {{ Auth::user()->name }} twoje ID to: {{ Auth::user()->id }}
                        <br>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
