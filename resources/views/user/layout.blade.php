<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web bán điện thoại và laptop</title>
    <style>
        footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}

.footer-section {
    flex: 1;
    min-width: 200px;
}

.footer-section h4 {
    margin-bottom: 10px;
    font-size: 18px;
}

.footer-section p {
    font-size: 14px;
    margin-bottom: 5px;
}

.footer-section ul {
    list-style: none;
}

.footer-section ul li {
    margin-bottom: 5px;
}

.footer-section ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section ul li a:hover {
    color: #00bcd4;
}

.footer-bottom {
    margin-top: 20px;
    text-align: center;
    font-size: 14px;
}
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-left {
    display: flex;
    align-items: center;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #fff;
    text-decoration: none;
    margin-right: 20px;
}

.nav-links {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 15px; /* Khoảng cách giữa các nút */
}

.nav-links li {
    position: relative;
}

.nav-links a button {
    background-color: transparent;
    border: 1px solid #fff;
    color: #fff;
    width: 6rem;
    padding: 8px 12px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.5s ease;
    border-radius: 5px;
}

.nav-links a button:hover {
    background-color: #fff;
    color: #333;
}

.navbar-right {
    position: relative;
}

.account-btn {
    background-color: transparent;
    border: 1px solid #fff;
    color: #fff;
    font-size: 14px;
    padding: 8px 12px;
    cursor: pointer;
    transition: all 0.5s ease;
    border-radius: 5px;
}

.account-btn:hover {
    background-color: #fff;
    color: #333;
}

.sub-menu {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #333;
    list-style: none;
    padding: 10px 0;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.sub-menu li {
    padding: 8px 10px;
    width: 110px;
}

.sub-menu a button {
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.5s ease;
    width: 100%;
    text-align: left;
}

.sub-menu a button:hover {
    background-color: #fff;
    color: #333;
    padding: 5px 10px;
}

.account-menu:hover .sub-menu {
    display: block;
}
.product-list {
    text-align: center;
    margin-bottom: 40px;
}
    </style>
</head>
<?php
    use App\Models\CategoryModel;
    $categoryModel = new CategoryModel;
    $categories =  $categoryModel->getAll();
?>
<body>
<header>
    <nav class="navbar">
        <div class="navbar-left">
            <a href="/" class="logo">TechShop</a>
            <ul class="nav-links">
                <li><a href="/"><button>Trang chủ</button></a></li>
                <?php foreach ($categories as $category): ?>
                    <?php if ($category->category_status ==1): ?>
                <li><a href="/products/<?= $category->category_id ?>"><button><?=$category->category_name?></button></a></li>
                        <?php endif ?>
                <?php endforeach ?>
                <li><a href="/contact"><button>Liên hệ</button></a></li>
                <!-- <li><a href="/laptop">Laptop</a></li> -->
            </ul>
        </div>
        <div class="navbar-right">
            <div class="account-menu">
                <button class="account-btn">Tài khoản</button>
                <ul class="sub-menu">
                    <li><a href="?act=login"><button>Đăng nhập</button></a></li>
                    <li><a href="?act=register"><button>Đăng ký</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <main>@yield('main')</main>
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>Về chúng tôi</h4>
                <p>TechShop là cửa hàng chuyên cung cấp các sản phẩm điện thoại và laptop chính hãng với giá cả hợp lý.</p>
            </div>
            <div class="footer-section">
                <h4>Liên hệ</h4>
                <p>Email: antrc2gamer@gmail.com</p>
                <p>Phone: +84 838 411 897</p>
            </div>
            <div class="footer-section">
                <h4>Liên kết nhanh</h4>
                <ul>
                    <li><a href="/">Trang chủ</a></li>
                    <?php foreach ($categories as $category): ?>
                        <?php if ($category->category_status ==1): ?>
                            <li><a href="/products/<?= $category->category_id ?>"><?=$category->category_name?></a></li>
                        <?php endif ?>
                    <?php endforeach ?>
                    <li><a href="?act=login">Đăng nhập</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 TechShop. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>