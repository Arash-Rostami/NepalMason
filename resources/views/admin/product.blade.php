
@extends('admin.layout')

@section('content')

        <prodctcreate
                maincategory="{{ $category }}"
                maingroup="{{ $group }}"
                mainattribute="{{ $attribute }}"



        >

               @include('partials/dropzone')

        </prodctcreate>
    @endsection