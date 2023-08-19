<?php

namespace App\Http\Livewire\Pages\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class AddUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.pages.admin.add-user');
    }

    public function mount()
    {
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }
    }

    public function update(Request $request, User $post) {
        $imageName = '';
        if ($request->hasFile('file')) {
          $imageName = time() . '.' . $request->file->extension();
          $request->file->storeAs('public/images', $imageName);
          if ($post->image) {
            Storage::delete('public/images/' . $post->image);
          }
        } else {
          $imageName = $post->image;
        }
    
        $postData = ['id' => $request->id, 'name' => $request->name, 'status' => $request->status, 'email' => $request->email,'band' => $request->band, 'upload' => $imageName];
    
        $post->update($postData);
        return redirect('/pembayaran')->with(['message' => 'Post updated successfully!', 'status' => 'success']);
      }



    public function addUser()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->attachRole('user');

        $this->resetInput();

        session()->flash('success', 'User added successfully');
    }

    public function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;
    }
}