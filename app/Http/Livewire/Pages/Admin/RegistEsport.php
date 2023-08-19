<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\esport;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class RegistEsport extends Component
{

    public function create()
    {
        return view('registrasi.regist_esport');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'nama' => 'required',
            'author' => 'required',
            'lomba' => 'required',
            'pemain1' => 'required',
            'pemain2' => 'required',
            'pemain3' => 'required',
            'pemain4' => 'required',
            'pemain5' => 'required',
            'cadangan' => 'required',
            'nama_pj' => 'required',
            'phone' => 'required',
            'sekolah' => 'required',
            'alamat' => 'required',
            'id_card' => 'required|mimes:zip,rar|max:20048',
            'logo' => 'required|mimes:png,jpg,jpeg|max:20048',
            'foto_tim' => 'required|mimes:png,jpg,jpeg|max:20048',
        ]);
        $data = $request->all();
        $data = esport::create($data);
        $data->save();        


        $product_image = NULL;
        $vendor_image= NULL;
        $three_image= NULL;
if($request->id_card)
{
     $product_image= 'Storage/app/public/esport/'.time().'-'. $request->id_card->getClientOriginalName();
    //  $request->id_card->move(public_path('band/'),$product_image);
     $request->id_card->storeAs('esport', $product_image, 'public');
       

}
if($request->logo)
{
     $vendor_image= 'Storage/app/public/esport/'.time().'-'. $request->logo->getClientOriginalName();
     $request->logo->storeAs('esport', $vendor_image, 'public');

        
}
if($request->foto_tim)
{
     $three_image= 'Storage/app/public/esport/'.time().'-'. $request->foto_tim->getClientOriginalName();
     $request->foto_tim->storeAs('esport', $three_image, 'public');

        
}

$data->id_card = $product_image;
$data->logo = $vendor_image;
$data->foto_tim = $three_image;
$data->save();
        // $data = $request->all();
        // $data['form'] = $filename ?? 'no form';
        
       
        // esport::create($data);
    
            return redirect('pembayaran')
    
                ->with('success', 'Berhasil Terdaftar');
    }
}
