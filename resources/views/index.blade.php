@extends('layouts.app')
@section('content')
    <h1>this is home</h1>
    <?php
    $var="<script>alert('ammar')</script>";
    echo $var;
    ?> 
    <br>
    
    {{-- {{$var="<script>alert('hacked')</script>"}} --}}
    <br>
    {!! $var="<script>alert('haidar')</script>"!!}

@endsection