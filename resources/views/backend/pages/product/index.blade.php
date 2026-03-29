@extends('backend.layouts.app')
@section('title', 'পণ্যসমূহ')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">সকল পণ্যসমূহ</h5>
                <a href="{{ route('products.create') }}" class="btn btn-primary me-7">নতুন পণ্য যুক্ত করুন</a>
            </div>

                {!! $dataTable->table(['class' => 'table'], true); !!}

                {!! $dataTable->scripts() !!}
        </div>
    </div>
@endsection