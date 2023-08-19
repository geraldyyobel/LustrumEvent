<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\User;
use App\Models\buktipembayaran;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;


class ViewBukti extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    
            
    public function render()
    {
        // $bukti = \DB::table('buktipembayaran')
        //    ->select(\DB::raw("DATE_FORMAT(created_at,'%d-%m-%Y')"))
        //    ->orderBy('created_at','DESC')->get(); //either this
        $bukti = BuktiPembayaran::orderBy('created_at','DESC')->get();
        // return view('pembayaran.ViewBuktiAdmin', ['bukti' => BuktiPembayaran::paginate(10)]);
        return view('pembayaran.ViewBuktiAdmin', compact('bukti'));
        // return view('pembayaran.statuspembayaran',['este' => estates::sortable()->get()]);

        
    }

    public function mount()
    {
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }
    }

}