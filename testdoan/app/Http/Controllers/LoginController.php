<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
session_start();
class LoginController extends Controller
{
    public function loginUser(Request $request)
    {
        if (isset($request->taikhoan, $request->matkhau)) {
            if (trim($request->taikhoan) && $request->matkhau) {
                if ($result = DB::table('taikhoan')->where('TAIKHOAN', $request->taikhoan)->where('MATKHAU', md5($request->matkhau))->first()) {
                    Session::put('TK', $request->taikhoan);
                    Session::put('MANGDUNG',DB::table('nguoidung')->where('MATK',$result->MATK)->value('MANGDUNG'));
                    return redirect('/dashboard');
                }
            }
            return redirect('/login')->with('tb', 'Tài khoản hoặc mật khẩu sai');
        }
    }
    public function registerUser(Request $request)
    {
        $flag = true;
        if(isset($request->taikhoan,$request->matkhau,$request->nlmatkhau) && $request->taikhoan && $request->matkhau){
            if(DB::table('taikhoan')->where('TAIKHOAN', $request->taikhoan)->first()){
                $flag = false;
            }
            if($request->matkhau != $request->nlmatkhau){
                $flag = false;
            }
            if($flag){
                Session::put('TK', $request->taikhoan); 
                DB::table('taikhoan')->insert(['TAIKHOAN'=>$request->taikhoan,'MATKHAU'=>md5($request->matkhau)]);  
                Session::put('MATK',DB::table('taikhoan')->where('TAIKHOAN', $request->taikhoan)->value('MATK'));
                return redirect('/form-infomation');      
            }
        }
        return redirect('/register');
    }
    public function infomationUser(Request $request){
        $flag = true;
        if(isset($request->ho,$request->ten,$request->ngaysinh,$request->sdt,$request->emailtk)){
            if(!Session::get('MATK')){
                $flag = false;
            }
            if(!trim($request->ho) && !trim($request->ten) && !trim($request->ngaysinh) && !is_numeric(trim($request->sdt)) && !trim($request->emailtk)){
                $flag = false;
            }
            if($flag){
                DB::table('nguoidung')->insert(['HO'=>$request->ho,'TEN'=>$request->ten,'NGAYSINH'=>$request->ngaysinh,'EMAIL'=>$request->emailtk,'SDT'=>$request->sdt,'MATK'=>Session::get('MATK')]);  
                return redirect('/dashboard');      
            }
        }
        return redirect('/form-infomation');
    }
}
