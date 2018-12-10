<?php

namespace App\Http\Controllers;

use App\Spin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $usersList = [];
    private $usersListId = [];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->type) {
            $users = User::where('type', false)
                ->select('name', 'id', 'email')->get();
            return view('home', compact('users'));
        } else {
            $spin = $this->selected(Auth::user()->id);
            $selected = [];
            $users = User::where('type', false)
                ->select('name', 'id')->get();
            if(!empty($users) && count($users) > 0) {
                foreach($users as $index => $user) {
                    if($user->id !== Auth::user()->id) {
                        if ($user->selected) {
                            $selected[] = $index;
                        }
                        $guid = uniqid();
                        $this->usersList[] = (object)[
                            'label' => $user->name,
                            'question' => $user->name,
                            'value' => 1,
                            'giud'     => $guid
                        ];
                        $this->usersListId[] = (object)[
                            'guid' => $guid,
                            'id' => $user->id
                        ];
                        session(['usersListId' => $this->usersListId]);
                    }
                }
            }
            $usersList = json_encode($this->usersList);
            $selected = json_encode($selected);
            return view('spinner', compact('spin','usersList', 'selected'));
        }
    }

    public function store(Request $request)
    {
        if(Auth::user()->type) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password_hint = $request->password;
            $user->password = bcrypt($request->password);
            $user->save();
            return back();
        } else {
            return back();
        }
    }

    public function notify($id)
    {
        $u = User::findOrFail($id);
        $email = $u->email;
        $subject = 'Püşkatmada iştirakçı kimi seçilmisiniz!';
        $data = $u;
        \Mail::send('auth.emails.notify',['user' => $data], function($message) use ($email, $subject){
            $message->from('secret.santa.egov.2018@gmail.com', 'Püşkatma');
            $message->sender('secret.santa.egov.2018@gmail.com', 'Püşkatma');
            $message->to( $email , 'Receiver')->subject($subject);
        });
        return back();
    }

    public function spinner(Request $request)
    {
        $user = null;
        $this->usersListId = session('usersListId');
        foreach ($this->usersListId as $item) {
            if ($item->guid === $request->giud) {
                $user = $item;
            }
        }
        $selected = Spin::where('whom_id', $user->id)->first();
        if (empty($selected)) {
            $spin = new Spin();
            $spin->who_id = Auth::user()->id;
            $spin->whom_id = $user->id;
            $spin->save();
        } else {
            return response()->json('ok', 500);
        }
        $user = User::findOrFail($user->id);
        $user->selected = true;
        $user->update();
        return response()->json('ok', 200);
    }

    public function selected($id) {
        $spin = Spin::where('who_id', $id)->first();
        return !empty($spin) ? $spin : null;
    }
}
