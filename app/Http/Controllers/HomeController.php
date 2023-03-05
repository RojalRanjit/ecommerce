<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;
class HomeController extends Controller
{
    //
    public function redirect()
    {
        $user_type = Auth::user()->user_type;

        if($user_type=='1')
        {
            return view('admin.home');
        
        }
        else
        {
            $data = product::paginate(3);

            return view('user.home',compact('data'));

        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data = product::paginate(3);
            // $data = product::all();

            return view('user.home',compact('data'));
        }
    }
}
