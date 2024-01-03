@extends('admin.master')

@section('title', 'Product Detail')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Product Detail Information</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Product ID</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->name}}</td>
                        </tr>

                      <tr>
                            <th>Price</th>
                            <td>{{$product->price}} </td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{$product->quantity}}</td>
                        </tr>





                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
