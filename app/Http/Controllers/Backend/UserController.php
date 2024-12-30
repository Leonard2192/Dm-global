<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface as UserService;

class UserController extends Controller
{
    private $userService;
    private $request;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->request = request();
    }

    public function index(){
        $users = $this->userService->paginate();
        $template = 'backend.user.index';
        return view('backend.dashboard.index',compact('template','users'));
    }

    public function register(Request $request)
    {
        $data = $_POST;
        $reponseMessage = $this->userService->createUser($data);
        return response()->json($reponseMessage);
    }

    public function deleteById()
    {
        $id = $this->request->get('user_id');
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status','User Deleted Successfully');
    }

    public function getById($id){

    }
}
