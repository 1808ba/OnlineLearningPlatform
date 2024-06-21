<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = auth()->user()->role;

        if ($role == 'admin') {
            return redirect('/admin');
        } elseif ($role == 'teacher') {
            return redirect('/teacher');
        } elseif ($role == 'student') {
            return redirect('/student');
        }

        abort(403, 'Unauthorized');
    }

}
