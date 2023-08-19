<x-guest-layout>
  <x-auth-card>
      <x-slot name="logo">
          {{-- <a href="/">
              <x-application-logo class="img-fluid p-4 shadow-light rounded-circle" style="max-width: 130px" />
          </a> --}}
      </x-slot>

      <x-slot name="title">
          <h4>Registrasi Lomba E-Sport</h4>
      </x-slot>

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      @php
      $dapetid = (auth()->user()->id);
      $dapetnama = (auth()->user()->name);
      @endphp

      <form method="POST" enctype="multipart/form-data" action="{{ route('esport') }}">
          @csrf
          
          <!-- Name -->
          <div class="form-group">
              <x-label for="" :value="__('Nama Club')" />

              <x-input id="nama" type="text" name="nama" :value="old('nama')" required autofocus />
             
              <input type="hidden" name="lomba" value="Esport" />
              
          </div>
          <input type="hidden" name="id_user" value="{{ $dapetid }}" />
          <input type="hidden" name="author" value="{{ $dapetnama }}" />

          <div class="form-group">
            <x-label for="" :value="__('Nama Pemain')" />

            <x-input id="pemain1" placeholder="Nama Pemain 1" type="text" name="pemain1" :value="old('pemain1')" required />
            <x-input id="pemain2" placeholder="Nama Pemain 2" type="text" name="pemain2" :value="old('pemain2')" required />
            <x-input id="pemain3" placeholder="Nama Pemain 3" type="text" name="pemain3" :value="old('pemain3')" required />
            <x-input id="pemain4" placeholder="Nama Pemain 4" type="text" name="pemain4" :value="old('pemain4')" required />
            <x-input id="pemain5" placeholder="Nama Pemain 5" type="text" name="pemain5" :value="old('pemain5')" required />
            <x-input id="cadangan" placeholder="cadangan" type="text" name="cadangan" :value="old('cadangan')" required />
        </div>
          <!-- Sekolah -->
          <div class="form-group">
              <x-label for="" :value="__('Asal Sekolah')" />

              <x-input id="sekolah" type="text" name="sekolah" :value="old('sekolah')" required />
          </div>

          <div class="form-group">
            <x-label for="" :value="__('Alamat Sekolah')" />

            <x-input id="alamat" type="text" name="alamat" :value="old('alamat')" required />
        </div>

          {{-- Nomor Telepon --}}
          <div class="form-group">
            <x-label for="esport" :value="__('Nama Pendamping')" />

            <x-input id="nama_pj" type="text" name="nama_pj" :value="old('nama_pj')" required />
        </div>
          {{-- Nomor Telepon --}}
          <div class="form-group">
            <x-label for="phone" :value="__('Nomor Telepon Pendamping')" />

            <x-input id="phone" type="text" name="phone" :value="old('phone')" required />
        </div>
         
         {{-- naskah asli --}}
      <div class="form-group">
        <x-label for="esport" :value="__('Kartu Pelajar')" />

        <x-input id="id_card" type="file" name="id_card" :value="old('id_card')" required />
        <a class="text-small"> *ZIP,RAR</a>
    </div>
      <div class="form-group">
        <x-label for="esport" :value="__('Foto TIM')" />

        <x-input id="foto_tim" type="file" name="foto_tim" :value="old('foto_tim')" required />
        <a class="text-small"> *JPG,JPEG,PNG</a>
    </div>
      <div class="form-group">
        <x-label for="esport" :value="__('Logo Tim/Logo Sekolah')" />

        <x-input id="logo" type="file" name="logo" :value="old('logo')" required />
        <a class="text-small"> *JPG,JPEG,PNG</a>
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
