<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\info;

use Illuminate\Support\Facades\Auth;


class InfoController extends Controller
{
    
    public function mainInfoPage()
    {

        return view('admin.info.mainInfoPage');

    }

    public function infoCreatePage()
    {
        return view('admin.info.infoCreatePage');
    }


    public function infoCreatePost(Request $request)
    {    

        $infoName= $request->infoName;
        $infoContent= $request->infoContent;
        $infoAuthorName= $request->infoAuthorName;
    

        $infos = new info;
        $infos-> infoName = $infoName;
        $infos-> infoContent = $infoContent;
        $infos-> infoAuthorName = $infoAuthorName;

        $infos->save();

        return redirect('infoDisplay');
    }
    
    public function infoDisplayPage()
    {
        $infoAll = info::sortable()->orderBy('id', 'DESC')->paginate(10);

        return view('admin.info.listInfoPage',[
            'infoAll' => $infoAll
        ]);
    }

    public function infoDelete($id)
    {
        $infoAll = info::find($id);

        $infoAll->delete();

        return redirect('infoDisplay');

    }

    public function infoEditPage()
    {
        $infoAll = info::sortable()->orderBy('id', 'DESC')->paginate(10);

        return view('admin.info.infoEditPage',[
            'infoAll' => $infoAll
        ]);

    }

    public function infoEditDataPageID($id)
    {
        $infoAll = info::find($id);

        return view('admin.info.infoEditDataPageID',[
            'infoAll' => $infoAll
        ]);

    }

    public function infoUpdate(Request $request,$id)
    {
        $infoAll = info::find($id);

        $infoAll->infoName = $request->infoName;
        $infoAll->infoContent = $request->infoContent;
        $infoAll->infoAuthorName = $request->infoAuthorName;

        echo $infoAll->save();

        return redirect('infoEdit');

    }








}
