@extends('backend.layouts.app')
@section('title', 'বিক্রয় হিসাব পুস্তক (মূসক-৬.২)')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        {{-- information section --}}
        <div class="d-flex justify-content-between">
            <div class="company_info" style="font-size: 14px; line-height: .7;">
                <p>নাম: {{ @$product->organization->name }}</p>
                <p>ঠিকানা: {{ @$product->organization->address }}</p>
                <p> নিবন্ধন নং: {{ @$product->organization->bin_no }}</p>
            </div>
            <div class="text-center">
                গণপ্রজাতন্ত্রী বাংলাদেশ সরকার &nbsp; &nbsp; &nbsp; জাতীয় রাজস্ব বোর্ড, ঢাকা
                <h1> বিক্রয় হিসাব পুস্তক </h1>
                <p>(পণ্য বা সেবা প্রক্রিয়াকরণের সম্পৃক্ত এমন নিবন্ধিত বা তালিকাভুক্ত ব্যক্তির জন্য প্রযোজ্য)</p>
                <h4>[ বিধি ৪০ এর উপ-বিধি (১) এর দফা (খ) এবং বিধি ৪১ এর দফা (ক) দ্রষ্টব্য ]</h4>
            </div>
            <div class="" style="text-align: right">
                <h4>মুসক-৬.২</h4>
                <p>{{ @$product->name }}</p>
            </div>
        </div>

        <hr>
        <hr>
        {{-- table section --}}
        <div class="table-responsive">
            <table class="table vat-table" style="border: 1px solid black !important;">
                <thead style="text-align: center;">
                    <tr>
                        <th colspan="22" style="font-size: 22px;">পণ্য/সেবার উপকরণ বিক্রয়</th>
                    </tr>
                    <tr>
                        <th rowspan="3">ক্রমিক নং</th>
                        <th rowspan="3">তারিখ</th>
                        <th colspan="2">উৎপাদিত পণ্য/সেবার প্রারম্ভিক জের</th>
                        <th colspan="2">উৎপাদন</th>
                        <th colspan="2">মোট উৎপাদিত পণ্য/সেবা </th>
                        <th colspan="3">ক্রেতা/সরবরাহগ্রহীতা</th>
                        <th colspan="2">চালান পত্রের বিবরণ</th>
                        <th colspan="5">বিক্রিত/সরবরাহকৃত পণ্যের বিবরণ</th>
                        <th colspan="2">পণ্যের প্রারম্ভিক জের</th>
                        <th rowspan="3">মন্তব্য</th>

                    </tr>
                    <tr>
                        <th rowspan="2">পরিমাণ একক</th>
                        <th rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত)</th>
                        <th rowspan="2">পরিমাণ একক</th>
                        <th rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত)</th>
                        <th rowspan="2">পরিমাণ একক</th>
                        <th rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত)</th>
                        {{-- <th rowspan="2">চালান পত্র/বিল অব এন্ট্রি নং</th> --}}
                        <th rowspan="2">নাম</th>
                        <th rowspan="2">ঠিকানা</th>
                        <th rowspan="2">নিবন্ধন/তালিকাভুক্তি/জাতীয় পরিচয়পত্র নং</th>
                        <th rowspan="2">নম্বর</th>
                        <th rowspan="2">তারিখ</th>
                        <th rowspan="2">বিবরণ</th>
                        <th rowspan="2">পরিমাণ</th>
                        <th rowspan="2">করযোগ্য মূল্য</th>
                        <th rowspan="2">সম্পূরক শুল্ক (যদি থাকে)</th>
                        <th rowspan="2">মূসক</th>
                        <th rowspan="2">পরিমাণ একক</th>
                        <th rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত)</th>
                        {{-- <th rowspan="2">পরিমাণ একক</th>
                        <th rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত)</th>
                        <th rowspan="2">পরিমাণ একক</th>
                        <th rowspan="2">মূল্য (সকল প্রকার কর ব্যতীত)</th> --}}
                    </tr>
                    <tr>
                        {{-- <th>নাম</th>
                        <th>ঠিকানা</th>
                        <th>নিবন্ধন/তালিকাভুক্তি/জাতীয় পরিচয়পত্র নং</th> --}}
                    </tr>
                    <tr>
                        <th>১</th>
                        <th>২</th>
                        <th>৩</th>
                        <th>৪</th>
                        <th>৫</th>
                        <th>৬</th>
                        <th>৭=৩+৫</th>
                        <th>৮=৪+৬</th>
                        <th>৯</th>
                        <th>১০</th>
                        <th>১১</th>
                        <th>১২</th>
                        <th>১৩</th>
                        <th>১৪</th>
                        <th>১৫</th>
                        <th>১৬</th>
                        <th>১৭</th>
                        <th>১৮</th>
                        <th>১৯=৭-১৫</th>
                        <th>২০=৮-১৬</th>
                        <th>২১</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ($purchases as $key => $item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->entry_date)->format('d-m-Y') }}</td>
                            <td>{{ $item->opening_qty }} {{ $item->unit }}</td>
                            <td>{{ $item->opening_value }}</td>
                            <td>{{ $item->challan_or_bill_no }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->challan_date)->format('d-m-Y') }}</td>
                            <td>{{ $item->supplier_name }}</td>
                            <td>{{ $item->supplier_address }}</td>
                            <td>{{ $item->supplier_registration_no }}</td>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->purchase_qty }} {{ $item->unit }}</td>
                            <td>{{ $item->purchase_value }}</td>
                            <td>{{ $item->supplementary_duty }}</td>
                            <td>{{ $item->vat_amount }}</td>
                            <td>{{ $item->total_qty }} {{ $item->unit }}</td>
                            <td>{{ $item->total_value }}</td>
                            <td>{{ $item->used_qty }} {{ $item->unit }}</td>
                            <td>{{ $item->used_value }}</td>
                            <td>{{ $item->closing_qty }} {{ $item->unit }}</td>
                            <td>{{ $item->closing_value }}</td>
                            <td>{{ $item->remark }}</td>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .vat-table {
            border-collapse: collapse;
            width: 100%;
        }

        .vat-table th,
        .vat-table td {
            border: 1px solid black !important;
        }
    </style>
@endpush
