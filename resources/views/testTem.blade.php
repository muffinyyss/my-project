@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome to the Dashboard</h1>
    <p>Logged in as: {{ session('username') }}</p>

@endsection
