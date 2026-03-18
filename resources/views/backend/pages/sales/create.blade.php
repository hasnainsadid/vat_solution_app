@extends('backend.layouts.app')
@section('title', 'বিক্রয় হিসাব পুস্তক (মূসক-৬.২)')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">বিক্রয় হিসাব পুস্তক (নতুন এন্ট্রি)</h5>
                {{-- <a href="{{ route('material-sale-registers.index') }}" class="btn btn-primary me-7">সকল রেকর্ড</a> --}}
            </div>
            <div class="card-body">
                <form action="{{ route('material-sale-registers.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">বেসিক তথ্য</h5>
                            <div class="row mb-6">
                                <input type="hidden" name="product_id" value="{{ $product->id ?? '' }}">
                                <div class="col-md-4">
                                    <label class="form-label" for="entry_date">তারিখ <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control flatpickr-date" name="entry_date" placeholder="dd-mm-yyyy" required />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">প্রারম্ভিক জের (পরিমাণ)</label>
                                    <input type="text" class="form-control" name="opening_qty" value="{{ $opening_qty ?? '' }}" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">প্রারম্ভিক জের (মূল্য)</label>
                                    <input type="number" step="0.01" class="form-control" name="opening_value" value="{{ $opening_value ?? '' }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">উৎপাদন তথ্য</h5>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <label class="form-label">উৎপাদিত পরিমাণ</label>
                                    <input type="text" class="form-control" name="production_qty" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">উৎপাদিত মূল্য</label>
                                    <input type="number" step="0.01" class="form-control" name="production_value" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">ক্রেতার তথ্য</h5>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <label class="form-label">ক্রেতার নাম</label>
                                    <input type="text" class="form-control" name="customer_name" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">ক্রেতার নিবন্ধন নং</label>
                                    <input type="text" class="form-control" name="customer_registration_no" />
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label class="form-label">ক্রেতার ঠিকানা</label>
                                    <textarea name="customer_address" rows="3" class="form-control"></textarea>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">চালান/ইনভয়েস তথ্য</h5>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <label class="form-label">চালান নং</label>
                                    <input type="text" class="form-control" name="invoice_no" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">চালানের তারিখ</label>
                                    <input type="date" class="form-control flatpickr-date" name="invoice_date" placeholder="dd-mm-yyyy" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">বিক্রয় তথ্য</h5>
                            <div class="row mb-6">
                                <div class="col-md-3">
                                    <label class="form-label">পণ্যের বিবরণ</label>
                                    <input type="text" class="form-control" name="product_description" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">বিক্রয় পরিমাণ</label>
                                    <input type="text" class="form-control" name="sale_qty" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">একক</label>
                                    <input type="text" class="form-control" name="unit" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">করযোগ্য মূল্য</label>
                                    <input type="number" step="0.01" class="form-control" name="taxable_value" />
                                </div>
                            </div>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <label class="form-label">সম্পূরক শুল্ক (যদি থাকে)</label>
                                    <input type="text" class="form-control" name="supplementary_duty" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">মূসক (VAT)</label>
                                    <select name="vat_amount" class="form-select">
                                        <option value="" selected disabled>মূসক নির্বাচন করুন</option>
                                        <option value="0.00">00</option>
                                        <option value="0.05">5%</option>
                                        <option value="0.075">7.5%</option>
                                        <option value="0.15">15%</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-6">
                        <label class="form-label">মন্তব্য (যদি থাকে %)</label>
                        <textarea class="form-control" name="remark" rows="3"></textarea>
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
    <link rel="stylesheet" href="{{ asset('backend') }}/vendor/libs/flatpickr/flatpickr.css" />
@endpush

@push('scripts')
    <script src="{{ asset('backend/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ asset('backend/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('backend/vendor/libs/@form-validation/auto-focus.js') }}"></script>
    <script src="{{ asset('backend/js/form-validation.js') }}"></script>
    <script src="{{ asset('backend') }}/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('backend') }}/vendor/libs/flatpickr/flatpickr.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                width: '100%'
            });
            flatpickr(".flatpickr-date", {
                dateFormat: "d-m-Y",
                allowInput: true,
            });
        });
    </script>
@endpush
