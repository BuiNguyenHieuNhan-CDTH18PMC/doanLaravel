@extends('server.index')
@section('layout-content')
<div class="container formcauhoiSection">
    @if(Session::get('tb'))
        <div class="alert alert-success" role="alert">
            <?=Session::get('tb')?>
        </div>
    @endif
    <form action="{{URL::to('/form-monhoc')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm môn học</h4>
                <div class="form-group">
                    <label>Tên môn học</label>
                    <input type="text" name="monhoc" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
        </div>
    </form>
</div>
@endsection