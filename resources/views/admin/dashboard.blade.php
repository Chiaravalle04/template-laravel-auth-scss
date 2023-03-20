@extends('layouts.admin')

@section('content')

    <div class="dashboard">

        <h2 class="card-header">{{ __('Dashboard') }}</h2>
        
        <div class="card-dashboard">
        
            @if (session('status'))
        
                <div role="alert">
        
                    {{ session('status') }}
        
                </div>
        
            @endif
        
            <span>{{ __('You are logged in!') }}</span>

        </div>

    </div>

@endsection
