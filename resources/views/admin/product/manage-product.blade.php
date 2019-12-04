@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Product Form</h4>
                </div>
                <hr/>
                <div class="panel-body">
                    <h3 class="text-center text-success" id="xyz">{{ Session::get('message') }}</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-success">
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>
                                        <img src="{{ asset($product->product_image) }}" alt="" height="50" width="75">
                                    </td>
                                    <td>TK. {{ $product->product_price }}</td>
                                    <td>{{ $product->product_quantity }}</td>
                                    <td>{{ $product->publication_status }}</td>
                                    <td>
                                        <a href="" class="btn btn-info btn-xs" title="View Details">
                                            View</span>
                                        </a>
                                        @if($product->publication_status == 1)
                                        <a href="" class="btn btn-warning btn-xs" title="Unpublished">
                                            Unpublish</span>
                                        </a>
                                        @else
                                        <a href="" class="btn btn-info btn-xs" title="Published">
                                            Publish</span>
                                        </a>
                                        @endif
                                        <a href="{{ route('edit-product',['id'=>$product->id]) }}" class="btn btn-success btn-xs" title="Edit">
                                            Edit</span>
                                        </a>
                                        <a href="" class="btn btn-danger btn-xs" title="Delete">
                                            Delete</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection