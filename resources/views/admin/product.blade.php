@extends('admin.layout')

@section('content')

    <prodctcreate
            mainproduct="{{ $product }}"
            maincategory="{{ $category }}"
            maingroup="{{ $group }}"
            mainattribute="{{ $attribute }}"
            mainattributem="{{ $attributem }}"
            mainsize="{{ $size }}"
            mainbrand="{{ $brand }}"
            maindiscount="{{ $discount }}"
    >

       @include('partials.dropzone')

    </prodctcreate>
@stop