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
        @php
        $dapetid = (auth()->user()->id);
        $dapetnama = (auth()->user()->name);
        $dapetstatus = 1;
        @endphp
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
  
        <form method="POST" enctype="multipart/form-data" action="{{ route('status') }}">
            @csrf
            
            {{-- Download Form --}}
            <div class="form-group">
                <x-label for="id_card" :value="__('Bukti Pembayaran Anda Telah Terkirim')" />
      
                <x-input class="formbold-form-input formbold-form-file" id="id" type="hidden" name="upload" value="{{ $dapetstatus }}" required />
                
            </div>
  
  
            <div class="d-flex align-items-center justify-content-between">
                
  
                <x-button class='btn btn-success' type='submit'>
                    {{ __('KIRIM') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
  </x-guest-layout>
  