@extends(env('THEME').'.layouts.master')

@section('header')
    {!! $header !!}
@endsection

@section('navigation')
    {!! $navigation !!}
@endsection

@section('content')
    {!! $catalogContentBlock !!}
@endsection

@section('footer')
    {!! $footer !!}
@endsection
