<?php

namespace App\Http\Controllers\Repositories;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected  $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = $this->userRepository->find($id);
        return view('users.show', compact('user'));
    }

    public function store(Request $request)
    {
        $this->userRepository->create($request->all());
        return redirect()->route('users.index');
    }

    public function update(Request $request, $id)
    {
        $this->userRepository->update($id, $request->all());
        return redirect()->route('users.show', $id);
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return redirect()->route('users.index');
    }
}
