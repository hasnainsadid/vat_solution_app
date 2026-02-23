@extends('backend.layouts.app')
@section('title', 'পণ্য নিবন্ধন')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">নতুন পণ্য যুক্ত করুন</h5>
                <a href="{{ route('products.index') }}" class="btn btn-primary me-7">সকল পণ্যসমূহ</a>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="mb-6">
                        <label class="form-label" for="org_id">প্রতিষ্ঠানের নাম <span class="text-danger">*</span></label>
                        <select name="organization_id" id="org_id" class="select2 form-select" required>
                            <option value="" selected disabled>প্রতিষ্ঠানের নাম নির্বাচন করুন</option>
                            @foreach ($organizations as $organization)
                                <option value="{{ $organization->id }}">{{ $organization->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">প্রতিষ্ঠানের নাম আবশ্যক</div>
                    </div>
                    <div class="mb-6">
                        <label class="form-label" for="name">পণ্যের নাম <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="প্রতিষ্ঠানের নাম লিখুন" required />
                        <div class="invalid-feedback">পণ্যের নাম আবশ্যক</div>
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
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/select2/select2.css" />
@endpush

@push('scripts')
    <script src="{{ asset('backend/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('backend/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('backend/vendor/libs/@form-validation/auto-focus.js') }}"></script>
    <script src="{{ asset('backend/js/form-validation.js') }}"></script>

    <script src="{{ asset('backend') }}/vendor/libs/select2/select2.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2({
                width: '100%'
            });
        });
    </script>
@endpush