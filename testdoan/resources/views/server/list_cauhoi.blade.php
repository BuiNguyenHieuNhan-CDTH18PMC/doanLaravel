@extends('server.index')
@section('layout-content')
<div class="container danhSachMonSection">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Danh sách câu hỏi</h1>
            <a class="btn btn-primary" type="button" href="/form-diencauhoi"> Thêm câu hỏi </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã câu hỏi</th>
                    <th>Nội dung câu hỏi</th>
                    <th>Tên môn học</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showcauhoi as $item)
                <tr>
                    <td>
                        {{$item->MACAUHOI}}
                    </td>
                    <td>
                        {{$item->NOIDUNG}}
                    </td>
                    <td>
                        {{$item->TENMON}}
                    </td>
                    <td>
                        <nav><a class="btn btn-warning" type="button" href="{{URL::to('/edit-mon/'.$item->MAMON)}}">Edit</a> | <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá không?')" type="button" href="{{URL::to('/delete-mon/'.$item->MAMON)}}">Xóa</a></nav>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection