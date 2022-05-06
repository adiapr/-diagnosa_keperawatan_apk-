<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Pagination\Paginator;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pengguna_index(){
        Paginator::useBootstrap();

        $batas = 10;
        $jmldata = User::count();
        $user = User::where('email' ,'!=', 'admin@gmail.com')
                ->orderBy('id','desc')
                ->paginate($batas);
        $no         = $batas*($user->currentPage() -1);

        return view('admin.pengguna', compact('jmldata', 'user', 'no'));
    }

    public function pengguna_verifikasi($id){
        $user = User::find($id);

        $user->verify = 1;
        $user->update();
        return redirect('/pengguna');
    }

    public function pengguna_tolak($id){
        $user = User::find($id);

        $user->verify = 0;
        $user->update();
        return redirect('/pengguna');
    }

    public function pengguna_hapus($id){
        $user = User::find($id);
        $user->delete();
        alert()->warning('Data Dihapus','Tekan OK untuk melanjutkan');
        return redirect('/pengguna');
    }
}
