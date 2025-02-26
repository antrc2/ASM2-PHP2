@extends('admin.layout')
@section('main')
    <div>
        <h1>Danh sách danh mục</h1>
        <a href="/category/add"><button>Thêm danh mục</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Trạng thái</th>
                    <th>Sửa</th>
                    <th>Xóa / Bỏ xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= $category->category_id?></td>
                        <td><?= $category->category_name?></td>
                        <td><?= $category->category_status ==1 ? "Chưa xóa" : "Đã xóa"  ?></td>
                        <td><a href="/category/update/<?=$category->category_id?>"><button>Sửa</button></a></td>
                        <td>
                            <?php if ($category->category_status ==1) :?>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="/category/delete/<?=$category->category_id?>"><button>Xóa</button></a>
                            <?php else:?>
                                <a href="/category/undo/<?=$category->category_id?>"><button>Bỏ xóa</button></a>
                            <?php endif ?>        
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
@endsection