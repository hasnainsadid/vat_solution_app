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
                <table class="table">
                    <thead>
                        <tr>
                            <th>প্রতিষ্ঠানের নাম</th>
                            <th>প্রতিষ্ঠানের ঠিকানা</th>
                            <th>প্রতিষ্ঠানের বিন নম্বর</th>
                            <th>প্রতিষ্ঠানের ধরণ</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($organizations as $organization)
                            <tr>
                                <td>{{ $organization->name }}</td>
                                <td>{{ $organization->address }}</td>
                                <td>
                                    {{ $organization->bin_no }}
                                </td>
                                <td>
                                    {{ $organization->type == 1 ? 'Commertical' : 'Industrial' }}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="icon-base ti tabler-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item waves-effect" href="{{ route('organizations.edit', $organization->id) }}"><i class="icon-base ti tabler-pencil me-1"></i> Edit</a>
                                            <a class="dropdown-item waves-effect" onclick="document.getElementById('delete-{{ $organization->id }}').submit();" href="javascript:void(0);">
                                                <i class="icon-base ti tabler-trash me-1"></i> Delete
                                            </a>
                                            <form id="delete-{{ $organization->id }}"
                                                action="{{ route('organizations.destroy', $organization->id) }}" method="post"
                                                class="d-none">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No organizations found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection