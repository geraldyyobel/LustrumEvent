<x-guest-layout>
  <x-auth-card>
      <x-slot name="logo">
          <a href="/">
              {{-- <x-application-logo class="img-fluid p-4 shadow-light rounded-circle" style="max-width: 130px" /> --}}
          </a>
      </x-slot>

      <x-slot name="title">
          <h4>Registrasi Pendaftaran Olimpiade</h4>
      </x-slot>

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />
      @php
      $dapetid = (auth()->user()->id);
      $dapetnama = (auth()->user()->name);
      @endphp
      <form method="POST" enctype="multipart/form-data" action="{{ route('olimpiade') }}">
          @csrf


          <div class="form-group">
            <x-label for="foto_band" :value="__('Logo Band/Sekolah')" />
    
            <x-input class="formbold-form-input formbold-form-file" id="foto_band" type="file" name="logo" :value="old('foto_band')" required />
            <a class="text-small"> *JPG,JPEG,PNG</a>
          </div>

          
          <!-- Asal Sekolah -->
          <div class="form-group">
            <x-label for="olimpiade" :value="__('Asal Sekolah')" />

            <x-input id="sekolah" type="text" name="sekolah" :value="old('asekolah')" required />
        </div>
        
          <!-- Alamat -->
          <div class="form-group">
              <x-label for="olimpiade" :value="__('Alamat Sekolah')" />
              <input type="hidden" name="id_user" value="{{ $dapetid }}" />
              <input type="hidden" name="author" value="{{ $dapetnama }}" />
              <input type="hidden" name="lomba" value="Olimpiade OSN" />
            
              <x-input  id="alamat" type="text" name="alamat" :value="old('alamat')" required autofocus />
          </div>

          {{-- Nama Pendamping --}}
          <div class="form-group">
            <x-label for="olimpiade" :value="__('Nama Pendamping')" />

            <x-input id="nama_pj" type="text" name="nama_pj" :value="old('nama_pj')" required />
        </div>

          {{-- Nomor Telepon --}}
          <div class="form-group">
            <x-label for="olimpiade" :value="__('Nomor Telepon Pendamping')" />

            <x-input id="phone" type="text" name="phone" :value="old('phone')" required />
          </div>

        <div class="form-group">
          <h3>TIM 1</h3>

      </div>

{{-- ID CARD --}}
        <div class="form-group">
          <x-label for="olimpiade" :value="__('Upload Id Card Peserta Tim 1')" />
          <a class="text-small"> *ZIP,RAR</a>
          <x-input class="formbold-form-input formbold-form-file" id="id_card1" type="file" name="id_card1" :value="old('id_card1')" required />

      </div>

          {{-- Nama 1--}}
          <div class="form-group">
            <x-label for="olimpiade" :value="__('Peserta 1')" />

            <x-input id="nama1" type="text" name="nama1" :value="old('nama1')" required />
        </div>
        {{-- NISN 1--}}
        <div class="form-group">
          <x-label for="olimpiade" :value="__('NISN Peserta 1')" />

          <x-input id="nisn1" type="text" name="nisn1" :value="old('nisn1')" required />
      </div>
        {{-- TTL 1--}}
        <div class="form-group">
          <x-label for="olimpiade" :value="__('Tempat Tanggal Lahir Peserta 1')" />

          <x-input id="ttl1" placeholder="Sleman, 31 September 2010" type="text" name="ttl1" :value="old('ttl1')" required />
      </div>
        {{-- Kelas 1--}}
        <div class="form-group">
          <x-label for="olimpiade" :value="__('Kelas Peserta 1')" />

          <x-input id="kelas1" placeholder="3 SMP" type="text" name="kelas1" :value="old('kelas1')" required />
      </div>

  {{-- Nama 2--}}
  <div class="form-group">
    <x-label for="olimpiade" :value="__('Peserta 2')" />

    <x-input id="nama2" type="text" name="nama2" :value="old('nama2')" required />
</div>
{{-- NISN 2--}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('NISN Peserta 2')" />

  <x-input id="nisn2" type="text" name="nisn2" :value="old('nisn2')" required />
</div>
{{-- TTL 2--}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('Tempat Tanggal Lahir Peserta 2')" />

  <x-input id="ttl2" placeholder="Sleman, 31 September 2010" type="text" name="ttl2" :value="old('ttl2')" required />
</div>
{{-- Kelas 2--}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('Kelas Peserta 2')" />

  <x-input id="kelas2" placeholder="3 SMP" type="text" name="kelas2" :value="old('kelas2')" required />
</div>

  {{-- Nama 2--}}
  <div class="form-group">
    <x-label for="olimpiade" :value="__('Peserta 3')" />

    <x-input id="nama3" type="text" name="nama3" :value="old('nama3')" required />
</div>
{{-- NISN 1--}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('NISN Peserta 3')" />

  <x-input id="nisn3" type="text" name="nisn3" :value="old('nisn3')" required />
</div>
{{-- TTL 2--}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('Tempat Tanggal Lahir Peserta 3')" />

  <x-input id="ttl3" placeholder="Sleman, 31 September 2010" type="text" name="ttl3" :value="old('ttl3')" required />
</div>
{{-- Kelas 2--}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('Kelas Peserta 3')" />

  <x-input id="kelas3" placeholder="3 SMP" type="text" name="kelas3" :value="old('kelas3')" required />
</div>

<div class="form-group">
  <h3>TIM 2</h3>

</div>

{{-- ID CARD 1 --}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('Upload Id Card Peserta Tim 2')" />
  <a class="text-small"> *ZIP,RAR</a>
  <x-input class="formbold-form-input formbold-form-file" id="id_card2" type="file" name="id_card2" :value="old('id_card2')" required />

</div>

  {{-- Nama 1--}}
  <div class="form-group">
    <x-label for="olimpiade" :value="__('Peserta 4')" />

    <x-input id="nama4" type="text" name="nama4" :value="old('nama4')" required />
</div>
{{-- NISN 1--}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('NISN Peserta 4')" />

  <x-input id="nisn4" type="text" name="nisn4" :value="old('nisn4')" required />
</div>
{{-- TTL 1--}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('Tempat Tanggal Lahir Peserta 4')" />

  <x-input id="ttl4" placeholder="Sleman, 31 September 2010" type="text" name="ttl4" :value="old('ttl4')" required />
</div>
{{-- Kelas 1--}}
<div class="form-group">
  <x-label for="olimpiade" :value="__('Kelas Peserta 4')" />

  <x-input id="kelas4" placeholder="3 SMP" type="text" name="kelas4" :value="old('kelas4')" required />
</div>

{{-- Nama 2--}}
<div class="form-group">
<x-label for="olimpiade" :value="__('Peserta 5')" />

<x-input id="nama5" type="text" name="nama5" :value="old('nama5')" required />
</div>
{{-- NISN 1--}}
<div class="form-group">
<x-label for="olimpiade" :value="__('NISN Peserta 5')" />

<x-input id="nisn5" type="text" name="nisn5" :value="old('nisn5')" required />
</div>
{{-- TTL 2--}}
<div class="form-group">
<x-label for="olimpiade" :value="__('Tempat Tanggal Lahir Peserta 5')" />

<x-input id="ttl5" placeholder="Sleman, 31 September 2010" type="text" name="ttl5" :value="old('ttl5')" required />
</div>
{{-- Kelas 2--}}
<div class="form-group">
<x-label for="olimpiade" :value="__('Kelas Peserta 5')" />

<x-input id="kelas5" placeholder="3 SMP" type="text" name="kelas5" :value="old('kelas5')" required />
</div>

{{-- Nama 2--}}
<div class="form-group">
<x-label for="olimpiade" :value="__('Peserta 6')" />

<x-input id="nama6" type="text" name="nama6" :value="old('nama6')" required />
</div>
{{-- NISN 6--}}
<div class="form-group">
<x-label for="olimpiade" :value="__('NISN Peserta 6')" />

<x-input id="nisn6" type="text" name="nisn6" :value="old('nisn6')" required />
</div>
{{-- TTL 2--}}
<div class="form-group">
<x-label for="olimpiade" :value="__('Tempat Tanggal Lahir Peserta 6')" />

<x-input id="ttl6" placeholder="Sleman, 31 September 2010" type="text" name="ttl6" :value="old('ttl')" required />
</div>
{{-- Kelas 2--}}
<div class="form-group">
<x-label for="olimpiade" :value="__('Kelas Peserta 6')" />

<x-input id="kelas6" placeholder="3 SMP" type="text" name="kelas6" :value="old('kelas6')" required />
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
