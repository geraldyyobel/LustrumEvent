<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\buktipembayaran;
use App\Models\User;
use App\Models\band;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class pembayaran extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

     public function render(){
       // $users = Auth::users();
    $users = auth()->user()->id;
    
    // $proposal = band::find($users);

    $bukti = \DB::table('buktipembayaran')
    ->where('id_user', $users)
    ->get()->toArray();
    
    $users_bayar = User::all();

    $proposal = \DB::table('band')
    ->where('id_user', $users)
    ->get()->toArray();

    $basket = \DB::table('basket')
    ->where('id_user', $users)
    ->get()->toArray();

    $esport = \DB::table('esport')
    ->where('id_user', $users)
    ->get()->toArray();

    $olimpiade = \DB::table('olimpiade')
    ->where('id_user', $users)
    ->get()->toArray();

    $st = \DB::table('storytelling')
    ->where('id_user', $users)
    ->get()->toArray();

    $futsal = \DB::table('sepakbola')
    ->where('id_user', $users)
    ->get()->toArray();


    return view('pembayaran.statuspembayaran', compact('proposal','basket','futsal','st','olimpiade','esport','users_bayar','bukti'));
    
    }

    // public function render()
    // {

    //     // $users= buktipembayaran::all();
    //     // $users_bayar = User::all();
    //     // return view('pembayaran.statuspembayaran', compact(['users','users_bayar']));
    //     $user_id = auth()->user()->id;
    //     $proposal = band::find($user_id);
    //     $users_bayar = User::paginate(1);
    //  return view('pembayaran.statuspembayaran',compact(['users_bayar','proposal']));
    //     //return view('pembayaran.statuspembayaran', [
    //         // 'users' => band::all('id_user'),
    //         // $user = auth()->id(),
    //        // 'proposal' => band::paginate(10),
    //         // 'proposal' => band::with(['id_user', 'user'])->paginate(10),
    //         // 'proposal' => band::all(),
    //         // 'users_bayar' => User::paginate(1)
    //     // ]);
    // }

    public function mount()
    {
        if (!auth()->user()->hasRole('user')) {
            return redirect()->route('dashboard');
        }
    }
}