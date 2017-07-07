@extends('day2/template1')

@section('pageheader')
Laravel - Child 3 Page
@stop

@section('pagetitle')
Child 3
@stop {{--End pagetitle--}}

@section('body')
This is Child 3 Page...<br />

First Name: {{ $content['fname'] }} <br />
Middle Name: {{ $content['mname'] }} <br />
Last Name: {{ $content['lname'] }} <br />

@stop {{--End body--}}