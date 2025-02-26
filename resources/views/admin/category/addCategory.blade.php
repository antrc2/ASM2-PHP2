@extends('admin.layout')
@section('main')
    <h1>Thêm danh mục</h1>
    <form action="" method="POST">
        <div>
            <label for="">Tên danh mục</label>
            <input type="text" name="category_name">
        </div>
        <div>
            <button name="btn_addCategory">Thêm</button>
        </div>
    </form>
@endsection