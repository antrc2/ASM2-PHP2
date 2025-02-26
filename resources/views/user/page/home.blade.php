@extends("user.layout")
@section('main')
<style>
    main {
    padding: 20px;
}

.product-list {
    text-align: center;
    margin-bottom: 40px;
}

.products {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
}

.product {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    width: 200px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.product img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

.product h3 {
    font-size: 18px;
    margin: 10px 0;
}

.product .price {
    font-size: 16px;
    color: #e74c3c;
    margin-bottom: 10px;
}

.add-to-cart {
    background-color: #00bcd4;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.add-to-cart:hover {
    background-color: #008ba3;
}
</style>
<section class="product-list">
    <h2>Sản phẩm nổi bật</h2>
    <div class="products">
        <?php $count = 0 ?>
        <?php foreach ($products as $product): ?>
            <?php if ($product->product_status == 1): ?>
                <?php $count++ ?>
                <div class="product">
                    <img src="resources/img/<?= $product->product_image ?>" alt="iPhone 14 Pro">
                    <h3><?= $product->product_name ?></h3>
                    <p class="price"><?= number_format($product->product_price) ?>đ</p>
                    <button class="add-to-cart">Thêm vào giỏ hàng</button>

                </div>
            <?php endif ?>
        <?php endforeach ?>
        <?php if ($count == 0): ?>
            <h3>Không tìm thấy sản phẩm</h3>
        <?php endif ?>

    </div>
</section>
@endsection