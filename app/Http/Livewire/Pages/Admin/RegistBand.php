<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Band;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class RegistBand extends Component
{

    public function create()
    {
        return view('registrasi.regist_band');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'author' => 'required',
            'lomba' => 'required',
            'nama1' => 'required',
            'nama2' => 'required',
            'nama3' => 'required',
            'nama4' => 'required',
            'nama5' => 'required',
            'nama6' => 'required',
            'nama_pj' => 'required',
            'lagu_wajib' => 'required',
            'lagu_pilihan' => 'required',
            'phone' => 'required',
            'id_card' => 'required|mimes:zip,rar|max:20048',
            'foto_band' => 'required|mimes:jpg,jpeg,png|max:20048',
            'logo' => 'required|mimes:jpg,jpeg,png|max:20048',
        ]);
        $data = $request->all();
        
        // if ($request->hasFile('id_card')) {

        //     $file = $request->file('id_card');
        //     $extension = $file->getClientOriginalName();
        //     $filenamec = 'id_card'.time() . '.' . $extension;
        //     // $request['id_card'] = $filename;
        //     $file->storeAs('band', $filenamec, 'public');
        //     // $data->id_card = $request->id_card;
        //     $request->save();
            
        // }
    
        // $data = $request->all();
        // $data['id_card'] = $filenamec;
        
        // if ($request->hasFile('foto_band')) {

        //     $file = $request->file('foto_band');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = 'foto_tim'.time() . '.' . $extension;
        //     $file->storeAs('band', $filename, 'public');
        //     $request->save();
        // }
    
        // $data = $request->all();
        // $data['foto_band'] = $filename ?? 'no form';
        
       
       
        $data = band::create($data);
        $data->save();        


        $product_image = NULL;
        $vendor_image= NULL;
        $logo_image= NULL;
if($request->id_card)
{
     $product_image= 'Storage/app/public/Band/'.time().'-'. $request->id_card->getClientOriginalName();
    //  $request->id_card->move(public_path('band/'),$product_image);
     $request->id_card->storeAs('band', $product_image, 'public');
       

}
if($request->foto_band)
{
     $vendor_image= time().'-'. $request->foto_band->getClientOriginalName();
     $request->foto_band->storeAs('band', $vendor_image, 'public');

        
if($request->logo)
{
     $logo_image= time().'-'. $request->logo->getClientOriginalName();
     $request->logo->storeAs('logo', $logo_image, 'public');

        
}

$data->id_card = $product_image;
$data->foto_band = $vendor_image;
$data->logo = $logo_image;
$data->save();

        
        // $post->id_card = $request->id_card;

        // $post->update([
                
        //         'id_card'=> $request->id_card,
                
        //     ]);


            return redirect('pembayaran')
    
                ->with('success', 'Berhasil Terdaftar');
    }
    
}
}