<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Olimpiade;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class RegistOlimpiade extends Component
{

    public function create()
    {
        return view('registrasi.regist_osn');
    }

    public function store(Request $request)
    {
       

        $request->validate([
            'id_user' => 'required',
            'author' => 'required',
            'alamat' => 'required',
            'phone' => 'required',
            'nama_pj' => 'required',
            'sekolah' => 'required',
            'id_card1' => 'required|mimes:zip,rar|max:20048',
            'id_card2' => 'nullable|mimes:zip,rar|max:20048',
            'lomba' => 'required',
            'nama1' => 'required',
            'nisn1' => 'required',
            'ttl1' => 'required',
            'kelas1' => 'required',
            'nama2' => 'required',
            'nisn2' => 'required',
            'ttl2' => 'required',
            'kelas2' => 'required',
            'nama3' => 'required',
            'nisn3' => 'required',
            'ttl3' => 'required',
            'kelas3' => 'required',
            'nama4' => 'nullable',
            'nisn4' => 'nullable',
            'ttl4' => 'nullable',
            'kelas4' => 'nullable',
            'nama5' => 'nullable',
            'nisn5' => 'nullable',
            'ttl5' => 'nullable',
            'kelas5' => 'nullable',
            'nama6' => 'nullable',
            'nisn6' => 'nullable',
            'ttl6' => 'nullable',
            'kelas6' => 'nullable',
            'logo' => 'required|mimes:jpg,jpeg,png|max:20048',
            
            
        ]);
        // if ($request->hasFile('id_card1')) {

        //     $file = $request->file('id_card1');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = 'id card Tim1'.time() . '.' . $extension;
        //     $file->storeAs('olimpiade', $filename, 'public');
        // }
        // if ($request->hasFile('id_card2')) {

        //     $file = $request->file('id_card2');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = 'id card Tim2'.time() . '.' . $extension;
        //     $file->storeAs('olimpiade', $filename, 'public');
        // }


    
        // $data = $request->all();
        // $data['form'] = $filename ?? 'no form';
        
        $data = $request->all();
        $data = Olimpiade::create($data);
        $data->save();        


        $product_image = NULL;
        $vendor_image= NULL;
        $logo_image= NULL;
if($request->id_card1)
{
     $product_image= 'Storage/app/public/olimpiade/'.time().'-'. $request->id_card1->getClientOriginalName();
    //  $request->id_card->move(public_path('band/'),$product_image);
     $request->id_card1->storeAs('olimpiade', $product_image, 'public');
       

}
if($request->id_card2)
{
     $vendor_image= 'Storage/app/public/olimpiade/'.time().'-'. $request->id_card2->getClientOriginalName();
     $request->id_card2->storeAs('olimpiade', $vendor_image, 'public');

        
}
if($request->logo)
{
     $logo_image= 'Storage/app/public/olimpiade/'.time().'-'. $request->logo->getClientOriginalName();
     $request->logo->storeAs('logo', $logo_image, 'public');

        
}

$data->id_card1 = $product_image;
$data->id_card2 = $vendor_image;
$data->logo = $logo_image;
$data->save();
        
        // Olimpiade::create($data);
    
            return redirect('pembayaran')
    
                ->with('success', 'Berhasil Terdaftar');


        return redirect('dashboard')->with('Lomba Terdaftar');
    }
}
