<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index(User $user)
    {
        $paginator = User::paginate(5);
        //$newPassword = 'JK81M2GZv4WN2BHX';
        // $user = Hash::make( 'JK81M2GZv4WN2BHX' );
        // dd($user);

        return view('admin.users.index', ['paginator' => $paginator])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $user = User::create($request->all())->save();
        
        return redirect()->route('admin.users.index', ['user' => $user])
            ->with('success','Пользователь успешно создан.');
    }

    /**
     * Display the specified resource.
     * 
     * @return Response|View
     */
    public function show(User $user, $id)
    {
        $user = User::find($id);
        
        return view('admin.users.show', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Factory|View
     */
    public function edit(User $user, $id)
    {
        $user = User::find($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, User $user, $id)
    {
        $user = User::find($id)->first();
        if (empty($user)) {
            return back()
                ->withErrors(['msg' => "Пользователь не найден."]);
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $data = $request->all();
        $result = $user->update($data);

        if ($result) {
            return redirect()->route('admin.users.index')
                ->with('success','Данные пользователя успешно обновлены.');
        }else{
            return back()
                ->withErrors(['msg' => "Ошибка сохранения."])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @param $id
     * @return RedirectResponse
     */
    public function destroy(User $user, $id)
    {
        $user = User::find($id)
            ->first()
            ->delete();

        return $user ? redirect()
            ->route('admin.users.index')
            ->with('success', 'Пользователь успешно удален.') : back()->withErrors(['msg' => 'Ошибка удаления.']);
    }
}
