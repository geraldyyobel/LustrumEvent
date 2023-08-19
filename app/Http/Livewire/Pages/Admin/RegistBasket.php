<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\Basket;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class RegistBasket extends Component
{

    public function create()
    {
        return view('registrasi.regist_basket');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'author' => 'required',
            'lomba' => 'required',
            'sekolah' => 'required',
            'club' => 'required',
            'alamat' => 'required',
            'phone' => 'required',
            'form' => 'required|mimes:pdf|max:20048',
            'logo' => 'required|mimes:png,jpeg,jpg|max:20048',
        ]);
        
        // if ($request->hasFile('form')) {

        //     $file = $request->file('form');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->storeAs('form', $filename, 'public');
        // }
    
        // $data = $request->all();
        // $data['form'] = $filename ?? 'no form';
        
       
        // basket::create($data);
            
        $data = $request->all();
        $data = basket::create($data);
        $data->save();        


        $product_image = NULL;
        $logo_image= NULL;
if($request->form)
{
     $product_image= 'Storage/Public/FormBasket/'.time().'-'. $request->form->getClientOriginalName();
    //  $request->id_card->move(public_path('band/'),$product_image);
     $request->form->storeAs('formbasket', $product_image, 'public');
       

}

if($request->logo)
{
     $logo_image= 'Storage/app/public/logo/'.time().'-'. $request->logo->getClientOriginalName();
     $request->logo->storeAs('logo', $logo_image, 'public');

        
}

$data->form = $product_image;
$data->logo = $logo_image;
$data->save();
            return redirect('pembayaran')
    
                ->with('success', 'Berhasil Terdaftar');


        // basket::create($request->all());
        // return redirect('dashboard')->with('success','Lomba Terdaftar');
    }
}
