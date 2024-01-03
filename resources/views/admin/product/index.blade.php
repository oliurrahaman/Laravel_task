@extends('admin.master')
@section('title','Manage Product Page')
@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->






    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">All Product Info</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>

                    <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Product Data</button>
                    </form>
                    <div class="table-responsive">



                        <table id="example3" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th colspan="6">
                                        List Of Products
                                        <a class="btn btn-warning float-end" href="{{ route('products.export') }}">Export User Data</a>
                                    </th>
                                </tr>
                            <tr>
                                <th class="border-bottom-0">SL NO</th>
                                <th class="border-bottom-0">Product Name</th>
                                <th class="border-bottom-0">Category Name</th>
                                <th class="border-bottom-0">Price</th>
                                <th class="border-bottom-0">Quantity</th>
                                <th class="border-bottom-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                   <td>{{$product->category->name}}</td>
                                   <td>{{$product->price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>
                                        <a href="{{route('product.show', $product->id)}}" class="btn btn-info btn-sm float-start m-1">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-success btn-sm float-start m-1">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <form action="{{ route('product.destroy',$product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm float-start m-1"
                                                    onclick="return confirm('Are you want to delete this !!!')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
