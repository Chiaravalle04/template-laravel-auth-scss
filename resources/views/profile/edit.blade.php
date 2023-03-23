@extends('layouts.app')

@section('content')

    <div class="main-container">

        <div class="edit-profile">

            <h2>{{ __('Profile') }}</h2>

            @include('profile.partials.update-profile-information-form')

            @include('profile.partials.update-password-form')

            @include('profile.partials.delete-user-form')

        </div>

    </div>

@endsection