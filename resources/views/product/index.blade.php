@extends('layouts.app')
@section('content')

<main class="container">
    <section>
        <div class="titlebar">
            <h1>Products</h1>
            <a href="{{route('products.create')}}" class="btn-link">Add Product</a>
        </div>
        @if ($message = Session::get('success'))
            <div>
                <ul>
                    <li>{{$message}}</li>
                </ul>
            </div>
        @endif
        <div class="table">
            <div class="table-filter">
                <div>
                    <ul class="table-filter-list">
                        <li>
                            <p class="table-filter-link link-active">All</p>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <div class="table-search">   
                <div>
                    <button class="search-select">
                       Search Product
                    </button>
                    <span class="search-select-arrow">
                        <i class="fas fa-caret-down"></i>
                    </span>
                </div>
                <div class="relative">
                    <input class="search-input" type="text" name="search" placeholder="Search product..." value="{{ request('search') }}">
                </div>
            </div> --}}
            <div class="table-product-head">
                <p>Name</p>
                <p>Inventory</p>
                <p>Category</p>
                <p>Price</p>
                <p>Actions</p>
            </div>
             @if (count($products) > 0)
                <div class="table-product-body">
                    @foreach ($products as $product )
                        <p>{{$product->name}}</p>
                        <p>{{$product->quntity}}</p>
                        <p>{{$product->category}}</p>
                        <p>{{$product->price}}</p>
                        <div style="display: flex">     
                            <a href="{{route('products.edit', $product->id)}}" class="btn-link btn btn-success" style="padding-top:5px;padding-bottom:4px" >
                                <i class="fas fa-pencil-alt" ></i> 
                            </a>
                            <form method="POST" action="{{route('products.destroy', $product->id)}}">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" >
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Product not found in database</p>
            @endif
            {{-- <div class="table-paginate">
                <div class="pagination">
                    <a href="#" disabled>&laquo;</a>
                    <a class="active-page">1</a>
                    <a>2</a>
                    <a>3</a>
                    <a href="#">&raquo;</a>
                </div>
            </div> --}}
        </div>
    </section>
</main>
@endsection