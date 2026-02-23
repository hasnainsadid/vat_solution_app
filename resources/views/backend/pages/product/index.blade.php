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
                <table class="table text-center" id="dataTable">
                    <thead>
                        <tr>
                            <th>পণ্যের নাম</th>
                            <th>প্রতিষ্ঠানের নাম</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->organization->name }}</td>
                                
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="icon-base ti tabler-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            {{-- view button --}}

                                            <a class="dropdown-item waves-effect" href="{{ route('products.show', $product->id) }}"><i class="icon-base ti tabler-eye me-1"></i> View</a>

                                            <a class="dropdown-item waves-effect" href="{{ route('products.edit', $product->id) }}"><i class="icon-base ti tabler-pencil me-1"></i> Edit</a>
                                            <a class="dropdown-item waves-effect" onclick="document.getElementById('delete-{{ $product->id }}').submit();" href="javascript:void(0);">
                                                <i class="icon-base ti tabler-trash me-1"></i> Delete
                                            </a>
                                            <form id="delete-{{ $product->id }}"
                                                action="{{ route('products.destroy', $product->id) }}" method="post"
                                                class="d-none">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection