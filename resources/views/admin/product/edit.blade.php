@extends('admin.master')
@section('title','Edit Product Page')
@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->


    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Product Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-success text-center">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="" class="col md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select name="category_id" onchange="setSubCategory(this.value)" id="" class="form-control" required>
                                    <option value="" disabled selected> -- Select Category --</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' : '' }}> {{$category->name}} </option>
                                    @endforeach
                                </select>
                                <span
                                    class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
                            </div>
                        </div>



                        <div class="row mb-4">
                            <label for="name"  class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{ $product->name }}" name="name" id="name1" placeholder="Product Name" type="text"/>
                                <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <label  class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control" value="{{$product->price }}"  name="price" placeholder="Product Price" type="number" />

                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="quantity" class="col-md-3 form-label">Product Quantity</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$product->quantity }}" id="quantity"  name="quantity" placeholder="Product Quantity" type="number"/>
                            </div>
                        </div>



                        <button class="btn btn-primary rounded-0 float-end" type="submit">Update Product Info</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
