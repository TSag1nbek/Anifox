<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|unique:users|email|max:255',
            'username' => 'required|min:3|max:36',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username' => $request->input('username'),
            'email'    => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()
            ->route('auth.signin')
            ->with('info', 'Вы успешно зарегистрировались! Можно войти на сайт.');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|max:255',
            'password' => 'required|min:6',
        ]);

        if(!Auth::attempt( $request->only(['email', 'password']), $request->has('remember')))
        {
            return redirect()->back()->with('info', 'Неправильный логин или пароль.');
        }

        return redirect('/')->with('info', 'Вы вошли на сайт');
    }

    public function getSignout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function getEdit($userId)
    {
        $user = User::find($userId);

        return view('profile.edit', compact('user'));
    }

    public function postEdit(Request $request, $userId)
    {
        $model = User::find($userId);
        $data = $request->all();
        if ($request->file('image'))
        {
            $logo = $request->file('image');
            $filename = random_int(100000000, 999999999).time().".".$logo->getClientOriginalExtension();
            Image::make($logo)->save(public_path('image/products/'.$filename));
            $image2 = '/image/products/'.$filename;
            $data['image'] = $image2;
        }
        $model->update($data);

        return redirect()->route('profile.index')->with('success', 'Продукт успешно отредактирован!!!');
    }
}
