@extends('backend.layouts.app')
@section('title', 'প্রতিষ্ঠানসমূহ')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">প্রতিষ্ঠানের তথ্য পরিবর্তন</h5>
                <a href="{{ route('organizations.index') }}" class="btn btn-primary me-7">সকল প্রতিষ্ঠানসমূহ</a>
            </div>
            <div class="card-body">
                <form action="{{ route('organizations.update', $organization->id) }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    @method('put')
                    <div class="mb-6">
                        <label class="form-label" for="name">প্রতিষ্ঠানের নাম <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="প্রতিষ্ঠানের নাম লিখুন" value="{{ $organization->name }}" required />
                        <div class="invalid-feedback">প্রতিষ্ঠানের নাম আবশ্যক</div>
                    </div>
                    <div class="mb-6">
                        <label class="form-label" for="address">প্রতিষ্ঠানের ঠিকানা <span class="text-danger">*</span></label>
                        <textarea name="address" id="address" rows="5" class="form-control" placeholder="প্রতিষ্ঠানের ঠিকানা লিখুন" required>{{ $organization->address }}</textarea>
                        <div class="invalid-feedback">প্রতিষ্ঠানের ঠিকানা আবশ্যক</div>
                    </div>
                    <div class="mb-6">
                        <label class="form-label" for="bin">বিন নম্বর <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="bin" name="bin_no" placeholder="বিন নম্বর লিখুন" value="{{ $organization->bin_no }}" required />
                        <div class="invalid-feedback">বিন নম্বর আবশ্যক</div>
                    </div>
                    {{-- প্রতিষ্ঠানের ধরণ --}}
                    <div class="mb-6">
                        <label class="form-label" for="type">প্রতিষ্ঠানের ধরণ <span class="text-danger">*</span></label>
                        <select name="type" id="type" class="form-select" required>
                            <option value="" selected disabled>প্রতিষ্ঠানের ধরণ নির্বাচন করুন</option>
                            <option value="1" {{ $organization->type == 1 ? 'selected' : '' }}>বাণিজ্যিক প্রতিষ্ঠান</option>
                            <option value="2" {{ $organization->type == 2 ? 'selected' : '' }}>উৎপাদনকারী প্রতিষ্ঠান</option>
                        </select>
                        <div class="invalid-feedback">প্রতিষ্ঠানের ধরণ নির্বাচন আবশ্যক</div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">সংরক্ষণ করুন</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/@form-validation/form-validation.css">
@endpush

@push('scripts')
    <script src="{{ asset('backend/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('backend/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('backend/vendor/libs/@form-validation/auto-focus.js') }}"></script>
    <script src="{{ asset('backend/js/form-validation.js') }}"></script>
@endpush