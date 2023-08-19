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

class AdminUpdateStatus extends Component
{

    
    use WithFileUploads;
    public $image = '';

 

    public $photo;

    public function render()
    {
        // $santri = buktipembayaran::select('*')
            //  ->where('id', $id_santri)
            //  ->get();
            // protected $records = buktipembayaran::orderByDesc('created_at')->get();

            $bukti = BuktiPembayaran::orderBy('created_at','DESC')->get();
            // return view('pembayaran.ViewBuktiAdmin', ['bukti' => BuktiPembayaran::paginate(10)]);
            return view('pembayaran.UpdateStatusAdmin', compact('bukti'));
        // return view('pembayaran.UpdateStatusAdmin', [
        //     'bukti' => BuktiPembayaran::paginate(10)
        // ]);
        
    }

    public function update(Request $request, $id)
    {
        

    // switch($request->get('status'))
    // {
    //     case 0:
    //         buktipembayaran::pending($id);
    //         break;
    //     case 1:
    //         buktipembayaran::approve($id);
    //         break;
    //     case 2:
    //         buktipembayaran::reject($id);
    //         break;
    //     case 3:
    //         buktipembayaran::postpone($id);
    //         break;
    //     default:    
    //         break;

    // }
        $request->validate([
            'status' =>'required',
        ]);
        // $post=buktipembayaran::findOrFail($post->id);
        // $post = buktipembayaran::where('id', $request->id)
        //      ->update([
        //             'status' => $request->status,
        //      ]);

        $post = $request->all();
        
        // $post = buktipembayaran::where('id',$id )->get(); 
        // $pegawai.request(all);
        
         
        $post = buktipembayaran::findOrFail($id);
        $post->status = $request->status;

        $post->update([
                
                'status'=> $request->status,
                
            ]);

            
            
            

        return redirect('/admin/ubah-status-bayar')

            ->with('success', 'Status Pembayaran diubah');
        
            
    
   }
}