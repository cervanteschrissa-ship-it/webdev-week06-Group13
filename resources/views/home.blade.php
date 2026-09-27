@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <x-alert type="success">
        Welcome! Here are some announcements:
    </x-alert>

    <h2>Latest Announcements</h2>
    @if(count($announcements) > 0)
        <ul>
            @foreach($announcements as $announcement)
                <li>{{ $announcement }}</li>
            @endforeach
        </ul>
    @else
        <p>No announcements right now.</p>
    @endif
@endsection