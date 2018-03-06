@extends('layouts.master')

@section('content')
    <?php
    $user = Auth::guard('web')->user();
    ?>
    <div>{{ $user->name }}</div>
    <div>{{ $user->email }}</div>
@endsection