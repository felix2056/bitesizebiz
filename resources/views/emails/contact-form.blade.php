@extends('layouts.app')

@section('content')
    <h1>Contact Form</h1>
    <p>Name: {{ $data['your_name'] }}</p>
    <p>Email: {{ $data['your_email'] }}</p>
    <p>Phone: {{ $data['your_phone'] }}</p> 
    <p>Subject: {{ $data['your_subject'] }}</p>
    <p>Message: {{ $data['your_message'] }}</p>
@endsection

