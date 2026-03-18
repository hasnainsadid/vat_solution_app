@extends('backend.layouts.app')
@section('title', 'পণ্য সম্পাদনা')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">পণ্য সম্পাদনা করুন</h5>
                <a href="{{ route('products.index') }}" class="btn btn-primary me-7">সকল পণ্যসমূহ</a>
            </div>

            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label class="form-label" for="org_id">প্রতিষ্ঠানের নাম <span class="text-danger">*</span></label>
                        <select name="organization_id" id="org_id" class="select2 form-select" required>
                            <option value="" disabled>প্রতিষ্ঠানের নাম নির্বাচন করুন</option>
                            @foreach ($organizations as $organization)
                                <option value="{{ $organization->id }}"
                                    data-type="{{ $organization->type }}"
                                    {{ old('organization_id', $product->organization_id) == $organization->id ? 'selected' : '' }}>
                                    {{ $organization->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">প্রতিষ্ঠানের নাম আবশ্যক</div>
                    </div>

                    <div class="mb-6 d-none" id="type_of_product_wrapper">
                        <label class="form-label" for="type_of_product">পণ্যের ধরন <span class="text-danger">*</span></label>
                        <select name="type_of_product" id="type_of_product" class="form-select">
                            <option value="" disabled {{ old('type_of_product', $product->type_of_product) == null ? 'selected' : '' }}>
                                পণ্যের ধরন নির্বাচন করুন
                            </option>
                            <option value="1" {{ old('type_of_product', $product->type_of_product) == 1 ? 'selected' : '' }}>
                                কাঁচামাল
                            </option>
                            <option value="2" {{ old('type_of_product', $product->type_of_product) == 2 ? 'selected' : '' }}>
                                উৎপাদিত পণ্য
                            </option>
                        </select>
                        <div class="invalid-feedback">পণ্যের ধরন আবশ্যক</div>
                    </div>

                    <div class="mb-6">
                        <label class="form-label" for="name">পণ্যের নাম <span class="text-danger">*</span></label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               value="{{ old('name', $product->name) }}"
                               placeholder="পণ্যের নাম লিখুন"
                               required />
                        <div class="invalid-feedback">পণ্যের নাম আবশ্যক</div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-md">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">আপডেট করুন</button>
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

            function toggleTypeOfProductField() {
                let selectedType = $('#org_id').find(':selected').data('type');

                if (selectedType == 2) {
                    $('#type_of_product_wrapper').removeClass('d-none');
                    $('#type_of_product').prop('required', true);
                } else {
                    $('#type_of_product_wrapper').addClass('d-none');
                    $('#type_of_product').prop('required', false).val('');
                }
            }

            toggleTypeOfProductField();

            $('#org_id').on('change', function() {
                toggleTypeOfProductField();
            });
        });
    </script>
@endpush