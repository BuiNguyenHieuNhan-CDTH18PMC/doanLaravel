@extends('server.index')
@section('layout-content')
<div class="container formcauhoiSection">
    @foreach($editmonhoc as $info)
    <form action="{{URL::to('/edit-mon/'.$info->MAMON)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Sửa môn học</h4>
                <div class="form-group">
                    <label>Tên môn học</label>
                    <input type="text" name="monhoc" class="form-control" value="<?=$info->TENMON?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection