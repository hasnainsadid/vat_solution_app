{{-- @dd($product->organization->type); --}}

@extends('backend.layouts.app')
@section('title', 'পণ্য নিবন্ধন')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">খাতা নির্বাচন করুন</h5>
                <div class="p-5">
                    <h5>পণ্যের নাম: {{ $product->name }}</h5>
                    <h5>প্রতিষ্ঠানের নাম: {{ $product->organization->name }}</h5>
                </div>
            </div>
            @if ($product->organization->type == 1)
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">
                            <a href="#">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h3>6.2.1</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            @if ($product->organization->type == 2)
                <div class="card-body">
                    <div class="accordion accordion-flush row" id="khataAccordion">
                        <div class="accordion-item col-md-6" style="border: none">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    6.1
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#khataAccordion">
                                <div class="accordion-body">
                                    <a href="#">Entry the Khata Number of the Organization for this product.</a> <br> <br>
                                    <a href="#">view of the khata</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item col-md-6" style="border: none">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    6.2
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item’s accordion
                                    body. Let’s imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
