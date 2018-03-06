@extends('layouts.master')

@section('content')
    <?php
        $admin = Auth::guard('admin')->user();
    ?>
    <div>{{ $admin->name }}</div>
    <div>{{ $admin->email }}</div>
@endsection