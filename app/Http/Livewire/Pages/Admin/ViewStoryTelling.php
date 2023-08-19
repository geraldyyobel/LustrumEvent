<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\storytelling;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\StorytellingExport;
use Maatwebsite\Excel\Facades\Excel;

class ViewStoryTelling extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.pages.admin.kelola_storytelling', [
            'users' => storytelling::paginate(10),
        ]);
    }

    public function mount()
    {
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }
    }

    public function exportstorytelling()
	{
		return Excel::download(new StorytellingExport, 'storytelling.xlsx');
	}
}