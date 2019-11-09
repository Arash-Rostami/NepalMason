@extends('admin.layout')

@section('content')


    <categrycreate parentcategory="{{ $parents }}" maincategory="{{ $categories }}"> </categrycreate>

@stop