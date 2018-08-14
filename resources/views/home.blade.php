@extends('layouts.app')

@section('content')
You are now SUCCESS {{Auth::user()->name}}
Name is <span></span>
@endsection
