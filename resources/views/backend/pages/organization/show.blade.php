@extends('backend.layouts.app')
@section('title', 'প্রতিষ্ঠানের বিস্তারিত')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">প্রতিষ্ঠানের বিস্তারিত</h5>
                <a href="{{ route('organizations.index') }}" class="btn btn-primary me-3">
                    সকল প্রতিষ্ঠানসমূহ
                </a>
            </div>

            <div class="card-body">

                <div class="row mb-4">
                    <div class="col-md-3 fw-bold">
                        প্রতিষ্ঠানের নাম :
                    </div>
                    <div class="col-md-9">
                        {{ $organization->name }}
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3 fw-bold">
                        প্রতিষ্ঠানের ঠিকানা :
                    </div>
                    <div class="col-md-9">
                        {{ $organization->address }}
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3 fw-bold">
                        বিন নম্বর :
                    </div>
                    <div class="col-md-9">
                        {{ $organization->bin_no }}
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3 fw-bold">
                        প্রতিষ্ঠানের ধরণ :
                    </div>
                    <div class="col-md-9">
                        @if ($organization->type == 1)
                            বাণিজ্যিক প্রতিষ্ঠান
                        @elseif($organization->type == 2)
                            উৎপাদনকারী প্রতিষ্ঠান
                        @else
                            -
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-body">
                <div class="d-flex">
                    <h5 class="card-title">প্রতিষ্ঠানের পণ্যসমূহ</h5>
                    <button class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#addProductModal" data-id="{{ $organization->id }}" >নতুন পণ্য যুক্ত করুন</button>
                </div>
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            {{-- <th>ক্রমিক নং</th> --}}
                            <th>পণ্যের নাম</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                {{-- <td>{{ $key ++ }}</td> --}}
                                <td>{{ $product->name }}</td>
                                <td>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">
                                        বিস্তারিত
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Add Product Modal --}}
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">নতুন পণ্য যুক্ত করুন</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('products.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="source" value="modal">
                        <div class="mb-6">
                            <label class="form-label" for="org_id">প্রতিষ্ঠানের নাম <span class="text-danger">*</span></label>
                            <select name="organization_id" id="org_id" class="form-select" required>
                                <option value="{{ $organization->id }}" selected>{{ $organization->name }}</option>
                            </select>
                            <div class="invalid-feedback">প্রতিষ্ঠানের নাম আবশ্যক</div>
                        </div>
                        <div class="mb-6">
                            <label class="form-label" for="name">পণ্যের নাম <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="প্রতিষ্ঠানের নাম লিখুন" required />
                            <div class="invalid-feedback">পণ্যের নাম আবশ্যক</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল করুন</button>
                        <button type="submit" class="btn btn-primary">সংরক্ষণ করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
