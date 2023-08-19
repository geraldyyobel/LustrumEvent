<x-guest-layout>
  <x-auth-card>
      <x-slot name="logo">
          {{-- <a href="/">
              <x-application-logo class="img-fluid p-4 shadow-light rounded-circle" style="max-width: 130px" />
          </a> --}}
      </x-slot>

      <x-slot name="title">
          <h4>Registrasi Pendaftaran Lomba Story Telling</h4>
      </x-slot>

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      @php
      $dapetid = (auth()->user()->id);
      $dapetnama = (auth()->user()->name);
      @endphp

      <form method="POST" enctype="multipart/form-data" action="{{ route('storytelling') }}">
          @csrf
          
          <!-- Name -->
          <div class="form-group">
              <x-label for="" :value="__('Nama Peserta')" />

              <x-input id="pemain" type="text" name="pemain" :value="old('pemain')" required autofocus />
          </div>

          {{-- Lagu Wajib --}}
          <div class="form-group">
            <x-label for="jk" :value="__('Jenis Kelamin')" />

            <select class="formbold-form-input" name="jk" id="jk">
              <option name="jk" value="Laki-laki">Laki-laki</option>
              <option name="jk" value="Perempuan">Perempuan</option>
            </select>

            </div>

          <!-- Sekolah -->
          <div class="form-group">
              <x-label for="" :value="__('Nama Sekolah')" />

              <x-input id="sekolah" type="text" name="sekolah" :value="old('sekolah')" required />
          </div>

          <!-- Alamat -->
          <div class="form-group">
            <x-label for="" :value="__('Alamat Sekolah')" />
            <input type="hidden" name="id_user" value="{{ $dapetid }}" />
            <input type="hidden" name="author" value="{{ $dapetnama }}" />
            <input type="hidden" name="lomba" value="Olimpiade OSN" />
          
            <x-input  id="alamat" type="text" name="alamat" :value="old('alamat')" required autofocus />
        </div>

          {{-- Nomor Telepon --}}
          <div class="form-group">
            <x-label for="" :value="__('Nama Pendamping')" />

            <x-input id="pendamping" type="text" name="pendamping" :value="old('pendamping')" required />
        </div>

          {{-- Nomor Telepon --}}
          <div class="form-group">
            <x-label for="phone" :value="__('Nomor Telepon Pendamping')" />

            <x-input id="phone" type="text" name="phone" :value="old('phone')" required />
        </div>
         {{-- Kelas --}}
         <div class="form-group">
          <x-label for="" :value="__('Kelas')" />

          <x-input id="kelas" type="text" name="kelas" :value="old('kelas')" required />
      </div>
      {{-- judul --}}
      <div class="form-group">
        <x-label for="" :value="__('Judul Story Telling')" />

        <x-input id="judul" type="text" name="judul" :value="old('judul')" required />
    </div>

    {{-- kartu pelajar --}}
    <div class="form-group">
        <x-label for="" :value="__('Upload Kartu Pelajar')" />
        <a class="text-small"> *JPG,JPEG,PNG</a>
        <x-input id="id_card" type="file" name="id_card" :value="old('id_card')" required />
    </div>

         {{-- naskah asli --}}
      <div class="form-group">
        <x-label for="" :value="__('Upload Naskah Asli')" />
        <a class="text-small"> *DOCX,PDF</a>
        <x-input id="naskah_asli" type="file" name="naskah_asli" :value="old('naskah_asli')" required />
    </div>
         {{-- naskah --}}
      <div class="form-group">
        <x-label for="" :value="__('Upload Naskah Peserta')" />
        <a class="text-small"> *DOCX,PDF</a>
        <x-input id="naskah" type="file" name="naskah" :value="old('naskah')" required />
    </div>

    <div class="form-group">
        <x-label for="foto_band" :value="__('Logo Band/Sekolah')" />

        <x-input class="formbold-form-input formbold-form-file" id="foto_band" type="file" name="logo" :value="old('foto_band')" required />
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
