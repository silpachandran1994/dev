<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\Interfaces\RegisterInterface;
use App\Http\Requests\RegisterRequest;
use App\Notifications\WelcomeEmailNotification;

class RegisterController extends Controller
{
    /**
     *  @var RegisterInterface
     */
    private $registerRepository;

    /**
     * RegisterController constructor
     */
    public function __construct(
        RegisterInterface $registerRepository
        ) {
            $this->registerRepo = $registerRepository;
        }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->registerRepo->listUser();
        $interests = $this->registerRepo->listInterest();
        return view('users.list', compact('users','interests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
    // dd($request);
    $value = $this->registerRepo->createUser($request->except('_token', '_method'));
    // $value->notify(new WelcomeEmailNotification());
    return redirect()->route('register.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
