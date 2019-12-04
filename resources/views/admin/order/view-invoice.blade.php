@extends('admin.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Invoice:
                        <strong>{{$order->created_at}}</strong>
                        <span class="float-right"> <strong>Status:</strong> Pending</span>

                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-4">
                                <h5 class="mb-3">Company Info</h5>
                                <div>
                                    <strong>Electro Store</strong>
                                </div>
                                <div>Madalinskiego 8</div>
                                <div>71-101 Szczecin, Poland</div>
                                <div>Email: info@webz.com.pl</div>
                                <div>Phone: +48 444 666 3333</div>
                            </div>

                            <div class="col-sm-4">
                                <h5 class="mb-3">Billing Info</h5>
                                <div>
                                    <strong>{{$customer->first_name. ' '.$customer->last_name}}</strong>
                                </div>
                                <div>{{$customer->address}}</div>
                                <div>Email: {{$customer->email_address}}</div>
                                <div>Phone: {{$customer->phone_number}}</div>
                            </div>
                            <div class="col-sm-4">
                                <h5 class="mb-3">Shipping Info</h5>
                                <div>
                                    <strong>{{$shipping->full_name}}</strong>
                                </div>
                                <div>{{$shipping->address}}</div>
                                <div>Email: {{$shipping->email_address}}</div>
                                <div>Phone: {{$shipping->phone_number}}</div>
                            </div>



                        </div>

                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Item</th>
                                    <th>Description</th>

                                    <th class="right">Unit Cost</th>
                                    <th class="center">Qty</th>
                                    <th class="right">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @php($sum=0)
                                @foreach($products as $product)

                                    <tr>
                                        <td class="center">{{$i++}}</td>
                                        <td class="left strong">{{$product->product_name}}</td>
                                        <td class="left">{{$product->short_description}}</td>

                                        <td class="right">TK. {{$product->product_price}}</td>
                                        <td class="center">{{$product->product_quantity}}</td>
                                        <td class="right">TK. {{$total = $product->product_price*$product->product_quantity}}</td>
                                    </tr>
                                    @php($sum = $sum + $total)
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5">

                            </div>

                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear">
                                    <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>Subtotal</strong>
                                        </td>
                                        <td class="right">$</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Discount (20%)</strong>
                                        </td>
                                        <td class="right">$</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>VAT (10%)</strong>
                                        </td>
                                        <td class="right">$</td>
                                    </tr>
                                    <tr>
                                        <td class="left">
                                            <strong>Grand Total</strong>
                                        </td>
                                        <td class="right">
                                            <strong>TK. {{$sum}}</strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


