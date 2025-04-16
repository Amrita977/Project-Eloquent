@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    @include('components.hero')
    @include('components.services')
    @include('components.aboutus')
    @include('components.contact')
    @include('components.faqs')
    @include('components.division')
@endsection
