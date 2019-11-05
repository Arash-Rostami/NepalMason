@extends('admin.layout')

@section('content')

    <headrpanel></headrpanel>
    <sidemenpanel></sidemenpanel>
    <categrycreate parentcategory="{{ $parents }}"> </categrycreate>
    <footrpanel></footrpanel>

@stop