<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\User;
use App\Models\SepakBola;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\FutsalExport;
use Maatwebsite\Excel\Facades\Excel;

class ViewSepakBola extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.pages.admin.kelola_sepakbola', [
            'users' => SepakBola::paginate(10),
        ]);
    }

    public function mount()
    {
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }
    }

    public function exportfutsal()
	{
		return Excel::download(new FutsalExport, 'futsal.xlsx');
	}
}