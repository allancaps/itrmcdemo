@extends('day2/template1')

@section('pageheader')
Laravel - Child 1 Page
@stop

@section('pagetitle')
Child 1
@stop {{--End pagetitle--}}

@section('body')

This is Child 1 Page...<br />
Data 1: {{ $testdata['a'] }}<br />
Data 2: {{ $testdata['b'] }}<br />
Data 3: {{ $testdata['c'] }}<br />

@stop {{--End body--}}