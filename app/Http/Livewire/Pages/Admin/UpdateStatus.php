<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\buktipembayaran;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class UpdateStatus extends Component
{

    
    use WithFileUploads;
    public $image = '';

 

    public $photo;
    public function create()
    {
        return view('pembayaran.UpdateStatus');
    }



    public function update(Request $request)
    {
        
        $request->validate([
            'upload' =>'required',
        ]);
        
         $users_id = auth()->user()->id;
        $post = User::findOrFail($users_id);

            $post->update([
                
                'upload'     => $request->upload,
                
            ]);

        return redirect('pembayaran')

            ->with('success', 'Bukti Pembayaran Terkirim');
        
            
    }
   }