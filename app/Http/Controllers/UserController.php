<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $users;

    private $module = 'user';

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->middleware('auth');

        $this->users = $users;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('users.list', [
            'users' => $this->users->selectAll(),
        ]);
    }
}
