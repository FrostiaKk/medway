
<br>
<table>
    <tr>
        <th>Order ID:</th>
        <th>Name:</th>
        <th>Price:</th>
        <th>Quantity:</th>
    </tr>
        @foreach (Auth::user()->orders->where('userorder_id', $userorder->id) as $order)
        <tr>
            <td>{{$order->id}} </td>
            <td>{{$order->product->name}} </td>
            <td>{{number_format($order->product->price * $order->quantity, 2, ',', ' ')}} zł </td>
            <td>{{$order->quantity}}</td>
        </tr>
        @endforeach
</table>
<br>