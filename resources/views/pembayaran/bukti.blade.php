<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="img-fluid p-4 shadow-light rounded-circle" style="max-width: 130px" />
            </a>
        </x-slot>
  
        <x-slot name="title">
            <h4>Registrasi Pendaftaran Lomba Basket</h4>
        </x-slot>
  
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
  
        <form method="POST" enctype="multipart/form-data" action="{{ route('bayar') }}">
            @csrf
            @php
        $dapetid = (auth()->user()->id);
        $dapetnama = (auth()->user()->name);
        $dapethp = (auth()->user()->phone);
        $dapetstatus = 2;
        @endphp
            {{-- Download Form --}}
            <div class="form-group">
                <x-label for="id_card" :value="__('Upload Buktinya ya')" />
                <p> <span class="badge badge-danger" > !Hati-Hati Penipuan! </span></p>
                <x-input class="formbold-form-input formbold-form-file" id="id" type="hidden" name="id_user" value="{{ $dapetid }}" required />
                <x-input class="formbold-form-input formbold-form-file" id="id" type="hidden" name="status" value="{{ $dapetstatus }}" required />
                <x-input class="formbold-form-input formbold-form-file" id="nama" type="hidden" name="author" value="{{ $dapetnama }}" required />
                <x-input class="formbold-form-input formbold-form-file" id="phone" type="hidden" name="phone" value="{{ $dapethp }}" required />
                <x-input class="formbold-form-input formbold-form-file" id="form" type="file" name="bukti" :value="old('bukti')" required />
                
            </div>
  
  
            <div class="d-flex align-items-center justify-content-between">
                <a class="text-small" href="{{ route('dashboard') }}">
                    {{ __('Back') }}
                </a>
  
                <x-button type='submit'>
                    {{ __('Daftar') }}
                </x-button>

                </div>
                <p style="#ff0000">Setelah Ini Anda Tidak Dapat Melakukan Pendaftaran! Pastikan Lomba yang ingin di daftarkan telah terdaftar</p>

        </form>
    </x-auth-card>
  </x-guest-layout>
  