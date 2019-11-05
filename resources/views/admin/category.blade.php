@extends('admin.layout')

@section('content')

    <headrpanel></headrpanel>
    <sidemenpanel></sidemenpanel>
    <categrycreate parentcategory="{{ $parents }}" maincategory="{{ $categories }}"> </categrycreate>
    <footrpanel></footrpanel>

@stop