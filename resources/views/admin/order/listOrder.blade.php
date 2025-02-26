@extends('admin.layout')
@section('main')
        <div>
            <h1>Danh sách đơn hàng</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Xem chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?= $order->order_id ?></td>
                            <td><?= $order->product_name ?></td>
                            <td><?= number_format($order->order_price) ?></td>
                            <td><?= $order->order_amount ?></td>
                            <td><a href="/order/<?= $order->order_id ?>"><button>Xem chi tiết</button></a></td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
@endsection