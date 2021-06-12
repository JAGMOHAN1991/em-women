@extends('layouts.master')

@section('content')
{{--    <div class="container">--}}
        <div class="row justify-content-center">
            <div class="col-xl-12 main-content pl-xl-4 pr-xl-5">
                <h4 id="decks">New Products</h4>
                <p class="mb-3">Need a set of equal width and height cards that aren’t attached to one another? Use card decks.</p>
                <div class="example">
                    <div class="card-deck">
                        <div class="card">
                            <img src="{{ url('https://cdn.amightygirl.com/catalog/product/cache/1/small_image/210x210/9df78eab33525d08d6e5fb8d27136e95/l/o/love_dad_and_me.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit
                                    longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ url('https://cdn.amightygirl.com/catalog/product/cache/1/small_image/210x210/9df78eab33525d08d6e5fb8d27136e95/l/o/love_dad_and_me.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ url('https://cdn.amightygirl.com/catalog/product/cache/1/small_image/210x210/9df78eab33525d08d6e5fb8d27136e95/l/o/love_dad_and_me.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than
                                    the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
{{--    </div>--}}
@endsection
