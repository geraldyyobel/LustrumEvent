<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="img-fluid p-4 shadow-light rounded-circle" style="max-width: 130px" />
            </a> --}}
        </x-slot>
  
        <x-slot name="title">
            <h4>Registrasi Pendaftaran Lomba Basket</h4>
        </x-slot>
  
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
       
       @php
        $dapetid = (auth()->user()->id);
        $dapetnama = (auth()->user()->name);
        @endphp
        <form method="POST" enctype="multipart/form-data" action="{{ route('basket') }}">
            @csrf
            <input type="hidden" name="id_user" value="{{ $dapetid }}" />
            <input type="hidden" name="author" value="{{ $dapetnama }}" />
            <input type="hidden" name="lomba" value="Basket" />
            
            {{-- Download Form --}}
            <div class="form-group">
                <x-label for="" :value="__('Upload Formulir')" />
                <a class="text-small"> *DOCX,PDF</a>
                <x-input class="formbold-form-input formbold-form-file" id="form" type="file" name="form" :value="old('form')" required />
                <a class="text-small" href="{{ asset('form/Form Basket .pdf') }}">
                    {{ __('Download Formulir lomba basket') }}
                </a>
            </div>

            <div class="form-group">
                <x-label for="foto_band" :value="__('Logo Band/Sekolah')" />
        
                <x-input class="formbold-form-input formbold-form-file" id="foto_band" type="file" name="logo" :value="old('foto_band')" required />
                <a class="text-small"> *JPG,JPEG,PNG</a>
              </div>

            <!-- Name -->
            <div class="form-group">
                <x-label for="" :value="__('Nama Tim')" />
  
                <x-input id="club" type="text" name="club" :value="old('club')" required autofocus />
            </div>

            <!-- Name -->
            <div class="form-group">
                <x-label for="" :value="__('Nama Sekolah')" />
  
                <x-input id="sekolah" type="text" name="sekolah" :value="old('sekolah')" required autofocus />
            </div>
  
            <!-- Email Address -->
            <div class="form-group">
                <x-label for="" :value="__('Alamat Sekolah')" />
  
                <x-input id="alamat" type="text" name="alamat" :value="old('alamat')" required />
            </div>
  
            {{-- Nomor Telepon --}}
            <div class="form-group">
              <x-label for="" :value="__('Nomor Telepon Pendamping')" />
  
              <x-input id="phone" type="text" name="phone" :value="old('phone')" required />
          </div>
           
  
  
            <div class="d-flex align-items-center justify-content-between">
                <a class="text-small" href="{{ route('dashboard') }}">
                    {{ __('Back') }}
                </a>
  
                <x-button type='submit'>
                    {{ __('Daftar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
  </x-guest-layout>
  