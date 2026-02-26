@extends('backend.layouts.app')
@section('title', 'ক্রয় হিসাব পুস্তক (মূসক-৬.১)')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">ক্রয় হিসাব পুস্তক (নতুন এন্ট্রি)</h5>
                <a href="{{ route('material-purchase-registers.index') }}" class="btn btn-primary me-7">সকল রেকর্ড</a>
            </div>
            <div class="card-body">
                {{-- @php
                    $product = App\Models\Product::with('organization')->get();
                @endphp
                @dump($product); --}}
                <form action="{{ route('material-purchase-registers.store') }}" method="post" class="needs-validation"
                    novalidate>
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">বেসিক তথ্য</h5>
                            <div class="row mb-6">
                                <div class="col-md-4">
                                    <label class="form-label" for="entry_date">তারিখ <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control flatpickr-date" name="entry_date"
                                        placeholder="dd-mm-yyyy" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">প্রারম্ভিক জের (পরিমাণ)</label>
                                    <input type="text" class="form-control" name="opening_qty" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">প্রারম্ভিক জের (মূল্য)</label>
                                    <input type="number" step="0.01" class="form-control" name="opening_value"
                                        placeholder="0.00" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4">
                        <div class="card-body">
                            <h5 class="card-title">ক্রয়কৃত উপকরণের তথ্য</h5>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <label class="form-label">চালান / বিল অব এন্ট্রি নং <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="challan_or_bill_no" required />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">চালানের তারিখ <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control flatpickr-date" name="challan_date" placeholder="dd-mm-yyyy" required />
                                </div>
                            </div>

                            <div class="row mb-6">
                                <div class="col-md-4">
                                    <label class="form-label">সরবরাহকারীর নাম <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="supplier_name" required />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">সরবরাহকারীর নিবন্ধন (BIN/NID) <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="supplier_registration_no" required/>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">সরবরাহকারীর ঠিকানা <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="supplier_address" required />
                                </div>
                            </div>

                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <label class="form-label">উপকরণের বিবরণ <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="product_name"
                                        value="{{ $product->name ?? '' }}" required/>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">পরিমাণ <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="purchase_qty" required/>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">মূল্য (কর ব্যতীত) <span
                                            class="text-danger">*</span></label>
                                    <input type="number" step="0.01" class="form-control" name="purchase_value" required/>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <label class="form-label">সম্পূরক শুল্ক (যদি থাকে)</label>
                                    {{-- <input type="number" step="0.01" class="form-control" name="supplementary_duty" /> --}}
                                    {{-- <select name="supplementary_duty" id="supplementary_duty" class="form-select">
                                        <option value="" selected disabled>সম্পূরক শুল্ক নির্বাচন করুন</option>
                                        <option value="0.00">00</option>
                                        <option value="0.05">5%</option>
                                        <option value="0.075">7.5%</option>
                                        <option value="0.15">15%</option>
                                    </select> --}}
                                    <input type="text" class="form-control" name="suplimentary_duty" id="suplimentary_duty">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="vat_amount">মূসক (VAT)</label>
                                    <select name="vat_amount" id="vat_amount" class="form-select">
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

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">পণ্য প্রস্তুত/প্রক্রিয়াকরণে উপকরণের ব্যবহার </h5>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <label class="form-label">ব্যবহৃত পরিমাণ</label>
                                    <input type="text" class="form-control" name="used_qty" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">ব্যবহৃত মূল্য</label>
                                    <input type="number" step="0.01" class="form-control" name="used_value" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-6">
                        <label class="form-label">মন্তব্য (যদি থাকে)</label>
                        <textarea class="form-control" name="remark" rows="3"></textarea>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-md">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">সংরক্ষণ
                                করুন</button>
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
