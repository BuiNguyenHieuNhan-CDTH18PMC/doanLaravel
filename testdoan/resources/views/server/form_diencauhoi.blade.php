@extends('server.index')
@section('layout-content')
<?=session('msg')??""?>
<div class="container formcauhoiSection">
    <form action="{{URL::to('/form-diencauhoi')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thông tin câu hỏi</h4>
                <div class="form-group d-lg-inline-block">
                    <label>Độ khó câu hỏi:</label>
                    <input type="text" name="dokho" class="form-control">
                </div>
                <div class="form-group d-lg-inline-block">
                    <select name="mon">                        
                        @foreach(Session::get('monhoc') as $item)
                            <option value="{{$item->MAMON}}" selected="selected">{{$item->TENMON}}</option>      
                        @endforeach         
                    </select>
                </div>
                <div class="form-group">
                    <label>Nội dung câu hỏi:</label>
                    <input type="text" name="noidung" class="form-control">
                </div>
                <div class="form-group">
                    <label>Đáp án a:</label>
                    <input type="text" name="dapana" class="form-control">
                </div>
                <div class="form-group">
                    <label>Đáp án b:</label>
                    <input type="text" name="dapanb" class="form-control">
                </div>
                <div class="form-group">
                    <label>Đáp án c:</label>
                    <input type="text" name="dapanc" class="form-control">
                </div>
                <div class="form-group">
                    <label>Đáp án d:</label>
                    <input type="text" name="dapand" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
        </div>
    </form>
</div>
@endsection