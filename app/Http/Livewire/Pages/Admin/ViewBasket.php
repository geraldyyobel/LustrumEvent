<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\User;
use App\Models\Basket;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\BasketExport;
use Maatwebsite\Excel\Facades\Excel;

class ViewBasket extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        
        return view('livewire.pages.admin.kelola_basket', [
            'users' => Basket::paginate(10),
        ]);
    }

    public function mount()
    {
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }
    }

    public function exportbasket()
	{
		return Excel::download(new BasketExport, 'basket.xlsx');
	}

    public function demoteUser($id)
    {
        $user = User::find($id);
        $user->detachRole('admin');
        $user->attachRole('user');
        session()->flash('success', $user->name . ' has been demoted to user');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('success', $user->name . ' has been deleted');
    }

    public function promoteUser($id)
    {
        $user = User::find($id);
        $user->detachRole('user');
        $user->attachRole('admin');
        session()->flash('success', $user->name . ' has been promoted to admin');
    }
}