@extends('layouts.landing')

@section('title','Services')

@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title','Services 1')
        @slot('content','Te quiero nai')
    @endcomponent
    @component('_components.card')
        @slot('title','Services 3')
        @slot('content','Te quiero nai')
    @endcomponent
    @component('_components.card')
        @slot('title','Services 3')
        @slot('content','Te quiero nai')
    @endcomponent
@endsection