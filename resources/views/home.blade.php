@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-1/6">
            @include ('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10" mstyle="max-width: 700px"> <!-- middle section -->
            @include ('_publish-tweet-panel')

            <div class="border border-gray-400 rounded-lg">
                @foreach ($tweets as $tweet)
                    @include ('_tweet')
                @endforeach
            </div>
        </div> <!-- end middel section -->

        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include ('_friends-list')
        </div>
    </div>
@endsection
