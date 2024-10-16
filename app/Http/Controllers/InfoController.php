<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function getAllInfos(){
        $infos = Info::all();

        return view('all-infos', ['infos' => $infos]);
    }

    public function getOneInfo(Request $request){
        $info = Info::find($request->id);

        if(!$info){
            return redirect()->route('getAllInfos')->with('error', 'Info Not Found');
        }
        return view('one-info', ['info' => $info]);
    }

    public function createInfo(){
        return view('create-info');
    }

    public function storeInfo(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'contact_number' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ]);

        $infos = new Info();

        $infos->name = $validated['name'];
        $infos->gender = $validated['gender'];
        $infos->contact_number = $validated['contact_number'];
        $infos->email = $validated['email'];
        $infos->password = $validated['password'];
        $infos->save();

        return redirect()->route('getAllInfos')->with('success', 'Created Successfully');
    }

    public function editInfo(Request $request){
        $info = Info::find($request->id);

        if(!$info){
            return redirect()->route('getAllInfos')->with('error', 'Info Not Found');
        }
        return view('edit-info', ['info' => $info]);
    }

    public function updateInfo(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'contact_number' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ]);

        $info = Info::find($request->id);

        if(!$info){
            return redirect()->route('getAllInfos')->with('error', 'Info Not Found');
        }

        $info->name = $validated['name'];
        $info->gender = $validated['gender'];
        $info->contact_number = $validated['contact_number'];
        $info->email = $validated['email'];
        $info->password = $validated['password'];
        $info->save();

        return redirect()->route('getOneInfo', ['id' =>$info->id])->with('success', 'Created Successfully');
    }

    public function deleteInfo(Request $request){
        $info = Info::find($request->id);

        if($info){
            $info->delete();
        }
        return redirect()->route('getAllInfos', ['id' =>$info->id] )->with('success', 'Deleted Successfully');
    }
}
