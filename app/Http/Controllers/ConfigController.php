<?php

namespace App\Http\Controllers;

use App\Controllers\Controller;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\MoovNumber;
use App\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ConfigController extends Controller
{

    use ResetsPasswords;

    public function checkedNumber(){

        $datas = MoovNumber::get();

        $index = substr(Input::get('phone'), 0, 2);

        $existe = 0;
        foreach ($datas as $data) {
            if ($data->number == $index) {
                $existe = 1;
            }
        }

        if ($existe == 1){
            return response()->json(['code' => 200]);
        }else{
            return response()->json(['code' => 500]);
        }
    }

    public function confirmCode(Request $request){
        $data = User::find($request->input('id'));
        if (empty($data)){
            return redirect('/404');
        }

        if ($data->token != $request->input('code')){
            return back()->with('danger', 'le code ne coorespond pas');
        }

        $data->token = NULL;
        $data->statut = 1;
        $data->save();

        auth()->login($data);

        return view('auth.verified', compact('data'));
    }

    public function sendCode(Request $request){

        $validator = Validator::make($request->all(), [
            'mobile' => 'required|min:8',
        ]);

        if ($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }else{

            $user = User::where('mobile', $request->input('mobile'))->first();

            if (empty($user)){
                return back()->withErrors('Votre numéro est pas associé à un compte')->with('danger', 'Votre numéro est pas associé à un compte');
            }else{

                $code = User::generateRandomString();

                $checked = User::where('token', $code)->first();

                while (!empty($checked)){
                    $code = User::generateRandomString();
                    $checked = User::where('token', $code)->first();
                }

                $user->token = $code;
                $user->save();

                /* code api sms */

//                User::sendSms($user->mobile, "Votre code de réinitialisation est $user->token");

                /* end code api sms */
            }
        }

//        dd('ici');

        return redirect()->route('password.mobile.code', ['mobile' => $user->mobile, 'token' => bin2hex(random_bytes(32))]);
    }

    public function checkedCode(){

//        dd('ici');

        $mobile = Input::get('mobile');

        $data = User::where('mobile', $mobile)->first();

        if (empty($data)){
            return redirect('/404');
        }

        return view('auth.checked', compact('data'));
    }

    public function checkedCodeConfirm(Request $request){

        $data = User::where('token', $request->input('code'))->first();

        if (empty($data)){
            return back()->with('danger', 'Code erroné');
        }

        return view('auth.passwords.reset', compact('data'));
    }

    public function newPassword(Request $request){

        $validator = Validator::make($request->all(), [
            'mobile' => 'required|min:8',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator)->withInput()->with('danger', 'Veuillez renseigner tous les champs');
        }else{

            $user = User::where('token', $request->input('token'))->first();

            $this->resetPassword($user, $request->input('password'));

            $user->token = NULL;
            $user->save();

//            auth()->login($user);
        }

        return redirect('/')->with('success', 'Vous avez modifié votre mot de passe');
    }
}
