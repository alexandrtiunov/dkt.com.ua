<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function profile($id){

        $user = User::find($id);
        $company = Company::where('user_id', $id)->first();

        if($user->user_status_id == 1 || $user->user_status_id == 2){
            return view('admin.profile', [
                'user' => $user,
                'company' => $company,
            ]);
        }
        return redirect('profile/' . $user->id);
    }

    public function updateUser(Request $request, $id){

        $user = User::find($id);

        $this->validate(request(), [
           "first_name" => "required",
           "last_name" => "required",
           "position" => "required",
           "phone" => "required",
        ]);

        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->position = $request->get('position');
        $user->phone = $request->get('phone');

        $user->save();

//        return redirect('admin/profile/' . $id)->with('update', 'Данные обновлены');
        return response()->json();
    }

    public function createCompany(Request $request, $userId){

        $user = User::find($userId);

        $company = $this->validate(request(),[
           "comp_name" => "required",
           "short_name" => "required",
           "adress_u" => "required",
           "adress_f" => "required",
           "city" => "required",
           "zip" => "required",
           "country" => "required",
        ]);

        $company['user_id'] = $userId;

        if($company){
            Company::create($company);
            return back();
        }
    }
}
