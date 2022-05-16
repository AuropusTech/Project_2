<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Auth;

use App\Models\User;
use App\Models\info;
use App\Models\ReqFormbuy;
use App\Models\ReqFormhire;


   
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
    public function user()
    {

        $currentUser = Auth::user()->id;

        $CountReqFormbuys = ReqFormbuy::whereIn('UserID',[$currentUser])->count();
        $CountReqFormhires = ReqFormhire::whereIn('UserID',[$currentUser])->count();


        $infoAll = info::sortable()->orderBy('id', 'DESC')->paginate(5);

        return view('staff.staff',[

            'infoAll' => $infoAll,
            'CountReqFormbuys' => $CountReqFormbuys,
            'CountReqFormhires' => $CountReqFormhires

        ]);


        
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $Admin = User::whereIn('sysRole',['เจ้าหน้าที่พัสดุคณะ'])->count();
        $User = User::whereIn('sysRole',['เจ้าหน้าที่พัสดุสาขา'])->count();

        $CountReqFormbuy = ReqFormbuy::all()->count();
        $CountReqFormhire = ReqFormhire::all()->count();


        $infoAll = info::sortable()->orderBy('id', 'DESC')->paginate(5);

        return view('admin.admin',[

            'CountReqFormbuy' => $CountReqFormbuy,
            'CountReqFormhire' => $CountReqFormhire,
            'infoAll' => $infoAll,
            'Admin' => $Admin,
            'User' => $User

        ]);
    }

    public function redirPage()
    {
        Auth::logout();
        return view('index');
    }
    
}