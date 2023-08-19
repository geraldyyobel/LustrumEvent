<x-guest-layout>
  <x-auth-card>
      <x-slot name="logo">
          {{-- <a href="/">
              <x-application-logo class="img-fluid p-4 shadow-light rounded-circle" style="max-width: 130px" />
          </a> --}}
      </x-slot>

      <x-slot name="title">
          <h4>Registrasi Band</h4>
      </x-slot>

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      {{-- id lomba --}}
      
      {{-- <form method="POST" action="{{ route('register') }}">
        @csrf
          <!-- band -->
          <div class="form-group">
               <input type="hidden" name="band" value="3" />
          </div>
      </form> --}}

      @php
      $dapetid = (auth()->user()->id);
      $dapetnama = (auth()->user()->name);
      @endphp
       
      <form method="POST" enctype="multipart/form-data" action="{{ route('band') }}">
          @csrf
        <!-- Name -->
        
{{-- 
<form method="POST" action="{{ route('lomba_temp') }}">
<input type="hidden" name="harga" value="200000" />
</form> --}}
          <!-- Name -->
          <div class="form-group">
              <x-label for="band" :value="__('Nama Band')" />

              <x-input id="band" placeholder="D'Masiv" type="text" name="band" :value="old('band')" required autofocus />
              <input type="hidden" name="id_user" value="{{ $dapetid }}" />
              <input type="hidden" name="author" value="{{ $dapetnama }}" />
              <input type="hidden" name="lomba" value="Band" />
          </div>

          <div class="form-group">
            <x-label for="band" :value="__('Pemain')" />

            <x-input id="name1" placeholder="Nama Pemain 1" type="text" name="nama1" :value="old('name1')" required autofocus />
            <x-input id="name2" placeholder="Nama Pemain 2" type="text" name="nama2" :value="old('name2')" required autofocus />
            <x-input id="name3" placeholder="Nama Pemain 3" type="text" name="nama3" :value="old('name3')" required autofocus />
            <x-input id="name4" placeholder="Nama Pemain 4" type="text" name="nama4" :value="old('name4')" required autofocus />  
            <x-input id="name4" placeholder="Nama Pemain 5" type="text" name="nama5" :value="old('name5')" required autofocus />  
            <x-input id="name4" placeholder="Nama Pemain 6" type="text" name="nama6" :value="old('name6')" required autofocus />  
          </div>           
        
          <!-- Email Address -->
          <div class="form-group">
              <x-label for="pendamping" :value="__('Nama Pendamping')" />

              <x-input id="nama_pj" type="text" name="nama_pj" :value="old('nama_pj')" required />
          </div>

          {{-- Nomor Telepon --}}
          <div class="form-group">
            <x-label for="phone" :value="__('Nomor Telepon Pendamping')" />

            <x-input id="phone" type="text" name="phone" :value="old('phone')" required />
        </div>
          
        {{-- Lagu Wajib --}}
          <div class="form-group">
            <x-label for="lagu_wajib" :value="__('Lagu Wajib')" />

            <select class="formbold-form-input" name="lagu_wajib" id="lagu_wajib">
              <option name="lagu_wajib" value="Ari Lasso - Mengejar Matahari">Ari Lasso - Mengejar Matahari</option>
              <option name="lagu_wajib" value="Nidji - Laskar Pelangi">Nidji - Laskar Pelangi</option>
              <option name="lagu_wajib" value="J-Rocks - Meraih Mimpi">J-Rocks - Meraih Mimpi</option>
              <option name="lagu_wajib" value="GodBless - Rumah Kita">GodBless - Rumah Kita</option>
              <option name="lagu_wajib" value="Dream Teater - The Spirit Carries On">Dream Teater - The Spirit Carries On</option>
            </select>

             </div>

             {{-- Lagu Pilihan --}}
          <div class="form-group">
            <x-label for="lagu_pilihan" :value="__('Lagu Pilihan')" />

            <x-input id="lagu_pilihan" type="text" name="lagu_pilihan" :value="old('lagu_pilihan')" required />
        </div>

        {{-- ID Card--}}
        <div class="form-group">
          <x-label for="id_card" :value="__('Kartu Pelajar')" />

          <x-input class="formbold-form-input formbold-form-file" id="phone" type="file" name="id_card" :value="old('id_card')" required />
          <a class="text-small"> *ZIP,RAR</a>
        </div>

      {{-- Foto Band --}}
      <div class="form-group">
        <x-label for="foto_band" :value="__('Foto Band Bersama')" />

        <x-input class="formbold-form-input formbold-form-file" id="foto_band" type="file" name="foto_band" :value="old('foto_band')" required />
        <a class="text-small"> *JPG,JPEG,PNG</a>
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
