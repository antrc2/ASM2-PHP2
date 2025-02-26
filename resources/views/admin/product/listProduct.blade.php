@extends("admin.layout")
@section('main')
    <div>
        <h1>Danh sách sản phẩm</h1>
        <a href="/product/add"><button>Thêm sản phẩm</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Mô tả</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th>Sửa</th>
                    <th>Xóa / Bỏ xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product->product_id?></td>
                        <td><?=$product->product_name?></td>
                        <td><?=number_format($product->product_price)?></td>
                        <td><img src="<?= "resources/img/".$product->product_image?>" width="100px" alt=""></td>
                        <td><?=$product->product_amount?></td>
                        <td><?=$product->product_detail?></td>
                        <td><?= $product->category_name ?></td>
                        <td><?= $product->product_status ==1 ? "Chưa xóa" : "Đã xóa"  ?></td>
                        <td><a href="/product/update/<?=$product->product_id?>"><button>Sửa</button></a></td>
                        <td>
                            <?php if($product->product_status == 1): ?>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="/product/delete/<?=$product->product_id?>"><button>Xóa</button></a>
                            <?php else: ?>
                                <a href="/product/undo/<?=$product->product_id?>"><button>Bỏ xóa</button></a>
                            <?php endif?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
@endsection