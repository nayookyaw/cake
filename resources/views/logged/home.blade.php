@extends('layouts.logged.master')

@section('content')
You are now SUCCESS {{Auth::user()->name}}
This is logged user
Name is <span></span>
@endsection
