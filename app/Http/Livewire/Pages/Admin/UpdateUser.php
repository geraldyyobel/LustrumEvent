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

class UpdateUser extends Component
{

    
    use WithFileUploads;
    public $image = '';

 

    public $photo;
    public function create()
    {
        return view('pembayaran.bukti');
    }



    public function update(Request $request, buktipembayaran $post)
    {
        
        $request->validate([
            'status' =>'required',
            'id_user' =>'required',
            'author' =>'required',
            'bukti' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
    //  dd($req->input());
        // if($req->hasFile('image'))
        // {
        //  $image=$req->file('image');
        //  $filename=time().'.'.$image->getClientOriginalExtension();
        //  $location=public_path('/'.$filename);
        //  User::make($image)->save($location);
        //  $oldfilename=$user->upload;
        //  $user->upload=$filename;
        //  Storage::delete($oldfilename);
        //  $user->upload=$req->input('image');
        // }   else {
        //  $user->upload="notAvailable.jpg";
        // } 
        // $user->save();
        //  $input = $request->all();
        //  $input = request()->except(['_token']);



        // if ($image = $request->file('bukti')) {


        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            
        //     $destinationPath = storage_path('app/images/', $profileImage);
        //     $image->move($destinationPath, $profileImage);

        //     $input['bukti'] = "$profileImage";
        // } else {

        //     unset($input['bukti']);
        // }
        // //  $users_id = auth()->user()->id;
        // $post->create($input);

        // $status = $request->status;
        //  buktipembayaran::save($input);

        // $imageName = time() . '.' . $request->file->extension();
    // $request->image->move(public_path('images'), $imageName);
    // $request->file->storeAs('public/images', $imageName);

    // $postData = ['id_user' => $request->id_user, 'author' => $request->author,  'bukti' => $imageName];

    // buktipembayaran::create($postData);

    if ($request->hasFile('bukti')) {

        $file = $request->file('bukti');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->storeAs('bukti', $filename, 'public');
    }

    $data = $request->all();
    $data['bukti'] = $filename ?? 'no image';
    
   
    buktipembayaran::create($data);

        return redirect('status')

            ->with('success', 'Bukti Pembayaran Terkirim');
        

    // $request->validate([

    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    // ]);
   
   

    // return back()

    //             ->with('success', 'You have successfully upload image.'); 

}
            
    }

   



    

    

//    }



