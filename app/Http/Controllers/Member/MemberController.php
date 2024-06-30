<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Livewire;
class MemberController extends Controller
{
    public function index() {
        return view('admin.member.lists');
    }
}
