@extends('website.layouts.app')
@section('content')
<div class="w-72 max-h-125 z">
    <div
        class="card rounded-3xl shadow-sm mt-8 shadow-red-200 hover:shadow-red-200 hover:shadow-lg hover:scale-[101%] hover:transition-all">
        <div class="card-head relative h-72 bg-gradient-to-r from-orange-500 to-red-500 rounded-t-3xl">
            <img alt="Shoe" class="absolute left-0 w-64 mt-20 ml-16" />
            <div class="product-detail text-white text-xs py-2 ml-5">
                <div class="flex justify-around">
                    <h2 class="font-semibold text-lg tracking-wider py-2 uppercase w-3/5">
                        Category
                    </h2>

                    <div class="w-2/5 flex justify-center items-center gap-2">
                        <FaEdit class="w-5 h-5 hover:cursor-pointer hover:scale-110" />

                        <MdDeleteForever class="w-6 h-6 hover:cursor-pointer hover:scale-110" />
                    </div>

                </div>
                <p class="w-[45%] text-justify">
                    ddfsa
                </p>
            </div>
        </div>

        <div class="card-body bg-white rounded-b-3xl">
            <div class="product-desc px-5 pt-4">
                <span class="product-title h-8 leading-none block text-lg font-medium tracking-wider uppercase">
                    <b>name</b>
                </span>
                <span class="product-caption block text-xs font-medium uppercase mt-2">
                    name
                </span>
                <span class="product-rating text-sm text-yellow-500 flex py-1">
                    <IoStar />
                    <IoStar />
                    <IoStar />
                    <IoStar />
                    <IoStar class="fa fa-star text-gray-300" />
                </span>
            </div>

            <div class="product-properties px-5 py-4">
                <div class="product-desc">
                    <div class="price text-white text-xl font-light flex h-10 my-2">
                        <div
                            class="product-price w-1/2 text-center content-center align bg-green-500 rounded-l-lg shadow-lg">
                            USD<b>name</b>
                        </div>
                        <div
                            class="product-price w-1/2 text-center content-center text-xl bg-teal-500 rounded-r-lg shadow-lg line-through">
                            USD<b>name</b>
                        </div>
                    </div>
                    <span
                        class="product-price flex justify-center items-center mt-3 mx-auto bg-orange-500 my-2 h-10 text-white text-xl font-light rounded-lg shadow-lg hover:bg-orange-700 cursor-pointer">
                        Add to Cart
                        <IoCart class="ml-3 text-2xl" />
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
