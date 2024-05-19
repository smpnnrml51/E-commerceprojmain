@extends('product::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('product.name') !!}</p>
    {{ html()->label('Product Name')->class('form-label') }}
    {{ html()->text('name')->class('form-control')->placeholder('Enter Product Name')->required() }}
@endsection
