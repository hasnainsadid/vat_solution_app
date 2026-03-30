@extends('backend.layouts.app')
@section('title', 'প্রতিষ্ঠানসমূহ')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">সকল প্রতিষ্ঠানসমূহ</h5>
                <a href="{{ route('organizations.create') }}" class="btn btn-primary me-7">নতুন প্রতিষ্ঠান যুক্ত করুন</a>
            </div>
            <div class="table-responsive text-nowrap">
                {!! $dataTable->table(['class' => 'table'], true) !!}

            </div>
        </div>
    </div>
    @endsection
    
    @push('scripts')
        {!! $dataTable->scripts() !!}
    @endpush