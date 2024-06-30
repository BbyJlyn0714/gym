<?php

namespace App\Livewire\Member;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Member;

class MemberList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap'; // Set pagination theme to Tailwind

    public function render()
    {
        $members = Member::latest()->get(); // Paginate members, 10 per page

        return view('livewire.member.member-list', compact('members'));
    }
}
