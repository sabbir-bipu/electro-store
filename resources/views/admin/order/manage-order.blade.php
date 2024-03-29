@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center text-success">Manage Orders</h4>
                </div>
                <hr/>
                <div class="panel-body">
                    <h3 class="text-center text-success" id="x">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered text-center">
                        <tr class="bg-success">
                            <th>Sl No</th>
                            <th>Customer Name</th>
                            <th>Order Total</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$order->first_name.' '.$order->last_name }}</td>
                                <td>TK. {{$order->order_total}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->order_status}}</td>
                                <td>{{$order->payment_type}}</td>
                                <td>{{$order->payment_status}}</td>

                                <td>
                                    <a href="{{route('view-order-details', ['id'=>$order->id])}}" class="btn btn-info btn-xs" title="View Order Details">
                                        Details
                                    </a>
                                    <a href="{{route('view-order-invoice', ['id'=>$order->id])}}" class="btn btn-warning btn-xs" title="View Order Invoice">
                                        Show Invoice
                                    </a>
                                    <a href="{{route('download-invoice', ['id'=>$order->id])}}" class="btn btn-primary btn-xs" title="Download Order Invoice">
                                        Download Invoice
                                    </a>
{{--                                    <a href="{{route('edit-category', ['id'=>$order->id])}}" class="btn btn-success btn-xs" title="Edit Order">--}}
{{--                                        Edit--}}
{{--                                    </a>--}}
                                    <a href="{{route('delete-order', ['id'=>$order->id])}}" class="btn btn-danger btn-xs" title="Delete Order" onclick="return confirm('Are you sure to delete this?')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection