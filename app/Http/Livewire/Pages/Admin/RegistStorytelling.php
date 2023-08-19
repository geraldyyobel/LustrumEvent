<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\storytelling;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class RegistStorytelling extends Component
{

    public function create()
    {
        return view('registrasi.regist_storytelling');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'id_user' => 'required',
            'author' => 'required',
            'lomba' => 'required',
            'pemain' => 'required',
            'phone' => 'required',
            'sekolah' => 'required',
            'alamat' => 'required',
            'kelas' => 'required',
            'judul' => 'required',
            'naskah_asli' => 'required|mimes:pdf,docx|max:20048',
            'naskah' => 'required|mimes:pdf,docx|max:20048',
            'pendamping' => 'required',
            'id_card' => 'required|mimes:png,jpg,jpeg|max:20048',
            'logo' => 'required|mimes:png,jpg,jpeg|max:20048',
            ]);
        

        $data = $request->all();
        $data = storytelling::create($data);
        $data->save();        

        $product_image = NULL;
        $three_image= NULL;
        $vendor_image= NULL;
        $logo_image= NULL;

if($request->id_card)
{
     $product_image= 'Storage/app/public/idcard_storytelling/'.time().'-'. $request->id_card->getClientOriginalName();
    //  $request->id_card->move(public_path('band/'),$product_image);
     $request->id_card->storeAs('idcard_storytelling', $product_image, 'public');
}

if($request->naskah_asli)
{
     $three_image= time().'-'. $request->naskah_asli->getClientOriginalName();
     $request->naskah_asli->storeAs('storytelling', $three_image, 'public');
}

if($request->naskah)
{
     $vendor_image= time().'-'. $request->naskah->getClientOriginalName();
     $request->naskah->storeAs('naskah_storytelling', $vendor_image, 'public');
}
if($request->logo)
{
     $logo_image= time().'-'. $request->logo->getClientOriginalName();
     $request->logo->storeAs('logo', $logo_image, 'public');
}


$data->id_card = $product_image;
$data->naskah_asli = $three_image;
$data->naskah = $vendor_image;
$data->logo = $logo_image;
$data->save();
    
            return redirect('pembayaran')
    
                ->with('success', 'Berhasil Terdaftar');


        return redirect('dashboard')->with('Lomba Terdaftar');
    }
}
