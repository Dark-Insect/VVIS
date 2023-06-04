@extends('layouts.app')

@section('content')
    <h1>Activity Logs</h1>

    <ul>
        @foreach($logs as $log)
            <li>
                <p>{{ $log->description }}</p>
                <p>{{ $log->created_at }}</p>
            </li>
        @endforeach
    </ul>
@endsection
