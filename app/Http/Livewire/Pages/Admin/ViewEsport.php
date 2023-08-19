<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Esport;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\EsportExport;
use Maatwebsite\Excel\Facades\Excel;

class ViewEsport extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.pages.admin.kelola_esport', [
            'users' => Esport::paginate(10),
        ]);
    }

    public function mount()
    {
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }
    }

    public function exportesport()
	{
		return Excel::download(new EsportExport, 'esport.xlsx');
	}
}