@extends('layouts.sidebar')

@section('title', 'Home')

@section('content')
    <h1>Welcome to the Dashboard</h1>
    <p>Logged in as: {{ session('username') }}</p>

@endsection
