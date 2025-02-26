@extends('admin.layout')
@section('main')
    <h1>Sửa danh mục</h1>
    <form action="" method="POST">
        <div>
            <label for="">Tên danh mục</label>
            <input type="text" name="category_name" value="<?= $category->category_name?>">
        </div>
        <div>
            <button name="btn_updateCategory">Sửa</button>
        </div>
    </form>
@endsection