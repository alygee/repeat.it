@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('messages.you_are_logged_in') }}
                </div>
            </div>
        </div>
        <br />
        <example />
        <br />
        <div class="col-md-8">
            <va-card dark> 
                <va-card-title>Title</va-card-title>
                <va-card-content >
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mi massa, ultrices gravida blandit at, posuere ut nisi. Praesent auctor eros sit amet lobortis bibendum.
                </va-card-content>
            </va-card>
        </div>
    </div>
</div>
@endsection
