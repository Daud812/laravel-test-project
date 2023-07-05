@extends('layouts.app')
@section('content')
<main class="container">
    <section>
        <form method="POST" action="{{route('products.update', $product->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="titlebar">
                <h1>Edit Product</h1>
            </div>
            <div class="card">
                 <div>
                    <label>Name</label>
                    <input type="text" name='name' value="{{$product->name}}">
                    <label>Description (optional)</label>
                    <textarea cols="10" rows="5" name= 'description'  value = "{{$product->description}}"></textarea>
                    {{-- <label>Add Image</label>
                    <img src="" alt="" class="img-product" id = "file-preview"/>
                    <input type="file" name= 'image' accept="image/*" onchange="showFile(event)" > --}}
                </div>
                 <div>
                    <label>Category</label>
                    <select  name="category">
                        @foreach (json_decode('{"smart phone":"smart phone","TV":"TV" }', true) as $optionKey => $optionValue)
                          <option value="{{$optionKey}}" >{{$optionValue}}</option>    
                        @endforeach
                    </select>
                    <hr>
                    <label>Inventory</label>
                    <input type="text" name = "quntity" value='{{$product->quntity}}' >
                    <hr>
                    <label>Price</label>
                    <input type="text" name = "price" value='{{$product->price}}'>
                 </div>
            </div>
            <div class="titlebar">
                <h1></h1>
                <input type="hidden" name = "hidden_id" value='{{$product->id}}'>
                <button>Save</button>
            </div>
        </form>
    </section>
</main>
{{-- <script>
    function showFile(event){
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('file-preview');
            output.src = dataURL;
        }
        reader.readAsDataURL(input.files[0]);
    }
</script> --}}
@endsection