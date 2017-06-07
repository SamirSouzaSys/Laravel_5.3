@extends('site.templates.template1')

@section('content')

    <h1>Home page do site!</h1>
{{--    {!! $xss !!}--}}
    {{ $xss }}
@endsection