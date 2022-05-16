<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dept;
use App\Models\Position;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Headman;



class AdminController extends Controller
{

    //profile
    public function adminProfile()
    {

        $authid = Auth::user()->id;

        $user = User::select('users.id','users.fname','depts.deptName')->join('depts', 'depts.id', '=', 'users.deptCode')->where('users.id', '=', $authid)->get();

        //return $authid;

        return view('admin.adminProfile',[
            'user' => $user
        ]);
    }

    public function adminProfileEdit()
    {
        return view('admin.adminProfileEditAuth');
    }


    //-------------------------------------------------------------- Person Management ---------------------------------------------------------------------//

    //===================== + Admin + =====================//

    //--------> Show
    public function showAdminAllProfile()
    {
        //$Users = User::whereIn('sysRole',['เจ้าหน้าที่พัสดุคณะ'])->get();
     
    
        $Users = Dept::join('users', 'users.deptCode', '=', 'depts.id')->whereIn('sysRole',['เจ้าหน้าที่พัสดุคณะ'])->sortable()->paginate(10);  


        return view('admin.adminManageDatas.show.showAdminAllProfile',[
            'Users' => $Users
        ]);
    }


    public function deleteAdminAllProfile($id)
    {
        $Users = User::find($id);
        $Users->delete();

        return redirect('admin-all-profile');
    }


    //--------> Edit
    public function editAdminAllProfile()
    {
        //$Users = User::whereIn('sysRole',['เจ้าหน้าที่พัสดุคณะ'])->get();

        $Users = Dept::join('users', 'users.deptCode', '=', 'depts.id')->whereIn('sysRole',['เจ้าหน้าที่พัสดุคณะ'])->sortable()->paginate(10);  

        return view('admin.adminManageDatas.edit.editAdminAllProfile',[
            'Users' => $Users
        ]);
    }


    public function editAdminAllProfileID($id)
    {
        $Users = User::find($id);
        
        $positions = Position::all();
        $depts = Dept::all();

        return view('admin.adminManageDatas.edit.editAdminAllProfileID',[

            'positions' => $positions,
            'depts' => $depts,
            'Users' => $Users

        ]);
    }

    public function updateAdminAllProfileID(Request $request,$id)
    {
        
        $Users = User::find($id);

        $Users->articleName = $request->articleName;
        $Users->fname = $request->fname;
        $Users->lname = $request->lname;
        $Users->position = $request->position;
        $Users->sysRole = $request->sysRole;
        $Users->deptCode = $request->deptCode;
        $Users->email = $request->email;
        $Users->password = Hash::make($request->password);

        echo $Users->save();

        return redirect('admin-all-profile');
    }


    //--------> Insert
    public function insertAdminAllProfile()
    {
        $positions = Position::all();
        $depts = Dept::all();

        return view('admin.adminManageDatas.insert.insertAdminAllProfile',[

            'positions' => $positions,
            'depts' => $depts
        ]);
    }


    public function createAdminAllProfile(Request $request)
    {
        $articleName= $request->articleName;
        $fname= $request->fname;
        $lname= $request->lname;
        $position= $request->position;
        $sysRole= $request->sysRole;
        $deptCode= $request->deptCode;
        $email= $request->email;
        $password= $request->password;

        $Users = new User;
       
        $Users-> articleName = $articleName;
        $Users-> fname = $fname;
        $Users-> lname = $lname;
        $Users-> position = $position;
        $Users-> sysRole = $sysRole;
        $Users-> deptCode = $deptCode;
        $Users-> email = $email;
        $Users-> password = Hash::make($password);

        $Users->save();

        return redirect('admin-all-profile');
    }


    




    
    //===================== + Staff + =====================//

    //--------> Show

    public function showStaffAllProfile()
    {


        //$Users = User::whereIn('sysRole',['เจ้าหน้าที่พัสดุสาขา'])->get();

        $Users = Dept::join('users', 'users.deptCode', '=', 'depts.id')->whereIn('sysRole',['เจ้าหน้าที่พัสดุสาขา'])->sortable()->paginate(10);  

        return view('admin.staffManageDatas.show.showStaffAllProfile',[
            'Users' => $Users
        ]);
    }

    public function deleteStaffAllProfile($id)
    {
        $Users = User::find($id);
        $Users->delete();

        return redirect('staff-all-profile');
    }




    //--------> Edit
    public function editStaffAllProfile()
    {

        //$Users = User::whereIn('sysRole',['เจ้าหน้าที่พัสดุสาขา'])->get();

        $Users = Dept::join('users', 'users.deptCode', '=', 'depts.id')->whereIn('sysRole',['เจ้าหน้าที่พัสดุสาขา'])->sortable()->paginate(10);  

        return view('admin.staffManageDatas.edit.editStaffAllProfile',[
            'Users' => $Users
        ]);
    }



    public function editStaffAllProfileID($id)
    {
        $Users = User::find($id);
        
        $positions = Position::all();
        $depts = Dept::all();

        return view('admin.staffManageDatas.edit.editStaffAllProfileID',[

            'positions' => $positions,
            'depts' => $depts,
            'Users' => $Users

        ]);
    }

    public function updateStaffAllProfileID(Request $request,$id)
    {
        
        $Users = User::find($id);

        $Users->articleName = $request->articleName;
        $Users->fname = $request->fname;
        $Users->lname = $request->lname;
        $Users->position = $request->position;
        $Users->sysRole = $request->sysRole;
        $Users->deptCode = $request->deptCode;
        $Users->email = $request->email;
        $Users->password = Hash::make($request->password);

        echo $Users->save();

        return redirect('staff-all-profile');
    }




    //--------> Insert

    public function insertStaffAllProfile()
    {

        $positions = Position::all();
        $depts = Dept::all();

        return view('admin.staffManageDatas.insert.insertStaffAllProfile',[

            'positions' => $positions,
            'depts' => $depts

        ]);
    }

    public function createStaffAllProfile(Request $request)
    {
        $articleName= $request->articleName;
        $fname= $request->fname;
        $lname= $request->lname;
        $position= $request->position;
        $sysRole= $request->sysRole;
        $deptCode= $request->deptCode;
        $email= $request->email;
        $password= $request->password;

        $Users = new User;
       
        $Users-> articleName = $articleName;
        $Users-> fname = $fname;
        $Users-> lname = $lname;
        $Users-> position = $position;
        $Users-> sysRole = $sysRole;
        $Users-> deptCode = $deptCode;
        $Users-> email = $email;
        $Users-> password = Hash::make($password);

        $Users->save();

        return redirect('staff-all-profile');
    }





    //===================== + Ececutive + =====================//

    //--------> Show
    public function showExecutiveAllProfile() /* show page */
    {
        $Executives = Headman::sortable()->paginate(15);

        return view('admin.executiveManageDatas.show.showExecutiveAllProfile',[
            'Executives' => $Executives
        ]);

    }


    //--------> Edit
    public function editExecutiveAllProfile() /* show page List */
    {

        $Executives = Headman::all();

        return view('admin.executiveManageDatas.edit.editExecutiveAllProfile',[
            'Executives' => $Executives
        ]);

    }

    public function editExecutiveAllProfileID($id) /* show page Edit */
    {


        $Executives = Headman::find($id);
        $positions = Position::all();

        return view('admin.executiveManageDatas.edit.editExecutiveAllProfileID',[
            'positions' => $positions,
            'Executives' => $Executives
        ]);

    }

    public function updateExecutiveAllProfileID(Request $request,$id)
    {
        
        $Executives = Headman::find($id);

        $Executives->headmenArticleName = $request->headmenArticleName;
        $Executives->headmenFname = $request->headmenFname;
        $Executives->headmenLname = $request->headmenLname;
        $Executives->headmenPosition = $request->headmenPosition;
        $Executives->headmanStatus = $request->headmanStatus;

        echo $Executives->save();

        return redirect('executive-all-profile');
    }


    //--------> Insert
    public function insertExecutiveAllProfile() /* show page */
    {
        $positions = Position::all();

        return view('admin.executiveManageDatas.insert.insertExecutiveAllProfile',[
            'positions' => $positions
        ]);
    }


    public function createExecutiveAllProfile(Request $request)
    {
        $headmenArticleName= $request->headmenArticleName;
        $headmenFname= $request->headmenFname;
        $headmenLname= $request->headmenLname;
        $headmenPosition= $request->headmenPosition;
        $headmanStatus= $request->headmanStatus;


        $Executives = new Headman;
       
        $Executives-> headmenArticleName = $headmenArticleName;
        $Executives-> headmenFname = $headmenFname;
        $Executives-> headmenLname = $headmenLname;
        $Executives-> headmenPosition = $headmenPosition;
        $Executives-> headmanStatus = $headmanStatus;


        $Executives->save();

        return redirect('executive-all-profile');
    }






    public function authAdminUpdate(Request $request) {

        $Users = Auth::User();

        $Users->articleName = $request->articleName;
        $Users->fname = $request->fname;
        $Users->lname = $request->lname;
        $Users->position = $request->position;
        $Users->sysRole = $request->sysRole;
        $Users->deptCode = $request->deptCode;
        $Users->email = $request->email;
        $Users->password = Hash::make($request->password);

        echo $Users->save();

        return redirect('admin');

        
    }

    public function authStaffUpdate(Request $request) {
    
        $Users = Auth::User();

        $Users->articleName = $request->articleName;
        $Users->fname = $request->fname;
        $Users->lname = $request->lname;
        $Users->position = $request->position;
        $Users->sysRole = $request->sysRole;
        $Users->deptCode = $request->deptCode;
        $Users->email = $request->email;
        $Users->password = Hash::make($request->password);

        echo $Users->save();

        return redirect('staff');


    }


    

    




}
