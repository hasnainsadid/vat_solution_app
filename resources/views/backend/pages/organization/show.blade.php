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

                {{-- <div class="row mt-5">
                <div class="col-md">
                    <a href="{{ route('organizations.edit', $organization->id) }}"
                       class="btn btn-warning">
                        সম্পাদনা করুন
                    </a>

                    <form action="{{ route('organizations.destroy', $organization->id) }}"
                          method="POST"
                          class="d-inline"
                          onsubmit="return confirm('আপনি কি নিশ্চিত?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            মুছে ফেলুন
                        </button>
                    </form>
                </div>
            </div> --}}

            </div>
        </div>

        <div class="card mt-5">
            <div class="card-body">
                <h5 class="card-title">প্রতিষ্ঠানের পণ্যসমূহ</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover text-center" id="dataTable">
                        <thead>
                            <tr>
                                <th>ক্রমিক নং</th>
                                <th>পণ্যের নাম</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($organization->members as $member)
                                <tr>
                                    <td>{{ $member->name }}</td>
                                    <td>
                                        <a href="{{ route('organizations.show', $member->id) }}"
                                           class="btn btn-primary">
                                            বিস্তারিত
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No members found.</td>
                                </tr>
                            @endforelse --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
