<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Shipping;
use PDF;

class OrderController extends Controller
{
    public function manageOrderInfo() {
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('payments', 'orders.id', '=', 'payments.order_id')
            ->select('orders.*', 'customers.first_name', 'customers.last_name', 'payments.payment_type', 'payments.payment_status')
            ->get();

        return view('admin.order.manage-order', ['orders' => $orders]);
    }

    public function viewOrderDetails($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id', $order->id)->first();
        $products = OrderDetail::where('order_id', $order->id)->get();

        return view('admin.order.view-order', [
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'payment' => $payment,
            'products' => $products,
        ]);
    }

    public function viewOrderInvoice($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $products = OrderDetail::where('order_id', $order->id)->get();

        return view('admin.order.view-invoice', [
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'products' => $products,
        ]);
    }

    public function downloadOrderInvoice($id) {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $products = OrderDetail::where('order_id', $order->id)->get();

        $pdf = PDF::loadView('admin.order.download-invoice', [
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'products' => $products,
        ]);
        return $pdf->stream('invoice.pdf');
//        return $pdf->download('invoice.pdf');
    }

    public function deleteOrderInfo ($id) {
        $order = Order::find($id);
        $order->delete();

        return redirect('/order/manage-order')->with('message', 'Order Info Deleted');
    }



}
