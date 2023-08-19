<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Band;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\BandExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewBand extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.pages.admin.kelola_band', [
            'users' => Band::paginate(10),
        ]);
    }

    public function mount()
    {
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }
    }

    public function exportband()
	{
		return Excel::download(new BandExport, 'band.xlsx');
	}

    public function sudahbayar($id)
    {
       $user = Band::find($id);
        Band::where('id', $id)->update(array('status_bayar' => '1'));
        // $user = Band::find($id);
        // if ($user) {
        //     $user->status = '2';
        //     $user->save();
        // }
        return view('livewire.pages.admin.kelola_band', [
            'users' => Band::paginate(10),
        ]);
        session()->flash('success', $user->name . ' diubah menjadi sudah membayar lomba');
    }

    
    public function belumbayar($id)
    {
        
       $user = Band::find($id);
       Band::where('status_bayar','1')->update(['status_bayar'=>'2']);
        return view('livewire.pages.admin.kelola_band', [
            'users' => Band::paginate(10),
        ]);

        session()->flash('success', $user->name . ' diubah menjadi belum membayar lomba ini');
    }
    
    
}
