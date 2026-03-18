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
                    <div class="row">

                        <!-- 6.1 -->
                        @if ($product->type_of_product == 1) 
                            <div class="col-md-12">
                                <div class="accordion accordion-flush" id="accordionOne">
    
                                    <div class="accordion-item" style="border: none;">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                6.1
                                            </button>
                                        </h2>
    
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                            data-bs-parent="#accordionOne">
    
                                            <div class="accordion-body">
                                                <a
                                                    href="{{ route('material-purchase-registers.create', ['product' => $product->id]) }}">
                                                    Entry the Khata Number of the Organization for this product.
                                                </a>
                                                <br><br>
    
                                                <a
                                                    href="{{ route('material-purchase-registers.index', ['product' => $product->id]) }}">
                                                    View of the Khata
                                                </a>
                                            </div>
    
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        @endif


                        <!-- 6.2 -->
                        @if ($product->type_of_product == 2) 
                            <div class="col-md-12">
                                <div class="accordion accordion-flush" id="accordionTwo">
    
                                    <div class="accordion-item" style="border: none;">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                6.2
                                            </button>
                                        </h2>
    
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionTwo">
    
                                            <div class="accordion-body">
                                                <a
                                                    href="{{ route('material-sale-registers.create', ['product' => $product->id]) }}">
                                                    Entry the Khata Number of the Organization for this product.
                                                </a>
                                                <br><br>
    
                                                <a
                                                    href="{{ route('material-sale-registers.index', ['product' => $product->id]) }}">
                                                    View of the Khata
                                                </a>
                                            </div>
    
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
