<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
session_start();
class AdminController extends Controller
{
    // Hiển thị danh sách môn
    public function showMonhoc(){
        $monhoc = DB::table('monhoc')->get();
        Session::put('monhoc',$monhoc);
        return view('server.list_mon',['monhoc'=>$monhoc]);
    }
    // Thêm Môn học
    public function addMonhoc(Request $request){
        if(isset($request->monhoc)){
            if($request->monhoc){
                DB::table('monhoc')->insert(['TENMON'=>$request->monhoc]);
                Session::put('tb','Thêm thành công');
                return redirect('/form-monhoc');
            }
        }
        Session::put('tb','Thất bại thành công');
        return redirect('/form-monhoc');
    }
    // Hiển thị danh sách môn
    public function showeditMonhoc($id){
        $result = DB::table('monhoc')->where('MAMON',$id)->get();
        return view('server.edit_monhoc',['editmonhoc'=>$result]);
    }
    //Sửa môn học
    public function editMonhoc(Request $request, $id){
        if(isset($request->monhoc) && $request->monhoc){
            $result = DB::table('monhoc')->where('MAMON',$id)->update(['TENMON'=>$request->monhoc]);
            return redirect('/danh-sach-mon');
        }
        return redirect('/edit-mon'.'/'.$id);
    }
    //Xóa môn học
    public function delMonhoc($id){
        if(isset($id)){
            $deleted = DB::table('monhoc')->where('MAMON', $id)->delete();
            return redirect('/danh-sach-mon');
        }
        return redirect('/danh-sach-mon');
    }
    //Thêm Câu hỏi
    public function addCauhoi(Request $request){
        if(isset($request->dokho,$request->mon,$request->noidung,$request->dapana,$request->dapanb,$request->dapanc,$request->dapand)){
            if(trim($request->dokho) && trim($request->mon) && trim($request->noidung) && trim($request->dapana) && trim($request->dapanb) && trim($request->dapanc) && trim($request->dapand)){
                DB::table('cauhoi')->insert(['NOIDUNG'=>$request->noidung,'GHICHU'=>'Test','MANGDUNG'=>Session::get('MANGDUNG'),'MAMON'=>$request->mon,'DOKHO'=>$request->dokho]);
                $id = DB::table('cauhoi')->where('NOIDUNG',$request->noidung)->value('MACAUHOI');
                if($id){
                    if(trim($request->dapana)){
                        DB::table('dapan')->insert(['NOIDUNG'=>trim($request->dapana),'KIEUDAPAN'=>0,'MACAUHOI'=>$id]);
                    }
                    if(trim($request->dapanb)){
                        DB::table('dapan')->insert(['NOIDUNG'=>trim($request->dapanb),'KIEUDAPAN'=>0,'MACAUHOI'=>$id]);
                    }
                    if(trim($request->dapanc)){
                        DB::table('dapan')->insert(['NOIDUNG'=>trim($request->dapanc),'KIEUDAPAN'=>0,'MACAUHOI'=>$id]);
                    }
                    if(trim($request->dapand)){
                        DB::table('dapan')->insert(['NOIDUNG'=>trim($request->dapand),'KIEUDAPAN'=>0,'MACAUHOI'=>$id]);
                    }
                    return redirect('/form-diencauhoi')->with('msg','Thêm thành công');
                }
                else{
                    return redirect('/form-diencauhoi')->with('msg','Không tìm thấy mã câu hỏi');
                }
            }
        }
        return redirect('/form-diencauhoi')->with('msg','Vui lòng nhập đủ thông tin');
    }
    //show danh sách câu hỏi
    public function showcauhoi(){    
        $result = DB::table('cauhoi')->join('monhoc','monhoc.MAMON','=','cauhoi.MAMON')->get();
        return view('server.list_cauhoi',['showcauhoi'=>$result]);
    }
}