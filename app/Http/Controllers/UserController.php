<?php

namespace App\Http\Controllers;


use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Traits\ImageTrait;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use ImageTrait;

    public function index()
    {
        // $users = User::orderBy('id', 'DESC')->get();
        $users = User::paginate(10);

        return view('index', [
            "users" => $users
        ]);
    }

    public function create()
    {
        return view('creat');
    }

    public function store(StoreUserRequest $request)
    {
        $fileName = $this->uploadImage(
            imageObject: $request->file('avatar'),
            path: User::AVATARS_PATH
        );

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $fileName,
            'password' => Hash::make($request->password),
        ]);
        return redirect(route('user.index'));
    }

    public function edit(User $user)
    {
        return view('edit', ["user" => $user]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $fileName = $user->getRawOriginal('avatar');

        if ($request->file('avatar')) {

            $this->deleteImage(
                path: $user->getAvatarPath()
            );

            $fileName = $this->uploadImage(
                imageObject: $request->file('avatar'),
                path: User::AVATARS_PATH
            );
        }

        $user->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'avatar' => $fileName,
                'password' => Hash::make($request->password),
            ]
        );
        return redirect(route('user.index'));
    }

    public function delete(User $user)
    {
        $this->deleteImage(
            path: $user->getAvatarPath()
        );

        $user->delete();
        return redirect()->back();
    }

    public function pagination(User $user)
    {
        return User::paginate(5);
    }
}