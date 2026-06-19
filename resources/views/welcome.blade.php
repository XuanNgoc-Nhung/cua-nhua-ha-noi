@extends('layouts.app')

@section('content')

    @include('welcome.sections.hero')
    @include('welcome.sections.usp-banners')
    @include('welcome.sections.premium-products')
    @include('welcome.sections.sample-products')
    @include('welcome.sections.premium-accessories')
    @include('welcome.sections.smart-locks')
    @include('welcome.sections.consult-form')
    @include('welcome.sections.blog-knowledge')
    @include('welcome.sections.advantages')
    @include('welcome.sections.locks-accessories')
    @include('welcome.sections.testimonials')
    @include('welcome.sections.blog-sharing')

@endsection

@push('scripts')
    @include('welcome.scripts')
@endpush
