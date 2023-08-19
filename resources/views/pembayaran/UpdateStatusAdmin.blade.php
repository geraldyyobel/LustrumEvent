@include('livewire.utilities.alerts')   
<x-slot name="header">
        <div class="section-header">
            <h1>Status Pembayaran</h1>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header">
            <h4>Status Pembayaran</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col">Nama Pendaftar</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Bukti Pembayaran</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($bukti as $u)
                        {{-- @csrf  --}}
                            <tr>
                                <td></td>
                                <td>{{ $u->author }}</td>
                                <td>{{ $u->phone }}</td>
                                <td><img src="{{ Storage::url('public/bukti/' .$u->bukti) }}" class="img-fluid img-thumbnail" width="150"/></td>
                                <td>
                                <form method="post" action="{{ route('admin-status',$u->id) }}">
                                    @csrf
                                    {{-- @method('PUT') --}}
                                      <div class="col-md-4"></div>
                                        <div class="form-group col-md-4">
                                            {{-- <select name="status">
                                              <option name="status" value="1" @if($u->status==1 )selected @endif>Sudah Diverifikasi</option>
                                              <option name="status" value="2" @if($u->status==2)selected @endif>Menunggu Verifikasi</option>
                                              <option name="status" value="0" @if($u->status==0)selected @endif>Belum Verifikasi</option> 
                                            </select> --}}
                                            
                                            @if($u->status==1)
                                            <span class="badge badge-success">SUDAH BAYAR</span> 
                                            <input class="formbold-form-input formbold-form-file" id="id" type="hidden" name="status" value="0" required />
                                            <button type="submit" class="btn btn-danger"  >UNVERIF</button>
                                            
                                            @elseif($u->status==2)
                                            <span class="badge badge-warning">Menunggu Verifikasi</span> 
                                            <input class="formbold-form-input formbold-form-file" id="id" type="hidden" name="status" value="1" required />
                                            <button type="submit" class="btn btn-success" >VERIF PEMBAYARAN</button>
                                            @else
                                            <span class="badge badge-danger">BELUM BAYAR</span>                                           
                                            <input class="formbold-form-input formbold-form-file" id="id" type="hidden" name="status" value="1" required />
                                            <button type="submit" class="btn btn-success"  >VERIF PEMBAYARAN</button>
                                            @endif
                                            
                                             </div>
                                        
                                {{-- <td>@if($u->status == 1) 
                                    <form action="{{ route('completedUpdate', $u->id) }}" method="POST">
                                        {{ csrf_field() }}                          
                                        <button type="submit" class="btn btn-success" name="changeStatus" value="0">Active</button>
                                    </form>                    
                                @else
                                    <form action="{{ route('completedUpdate', $u->id) }}" method="POST">
                                        {{ csrf_field() }}                              

                                    </form>                                                 
                                @endif
                            </td> --}}
                                {{-- <td>
                                    <form  method="POST" action="{{ route('status') }}">
                                        @csrf
                                        @if ($u == '2' || $u == '0' )
                
                                        <x-input class="formbold-form-input formbold-form-file" id="id" type="hidden" name="status" value="1" required />
                <button class='btn btn-success' type='submit'>Tandai Sudah Bayar</button>
                    
                    @else
                    
                    <x-input class="formbold-form-input formbold-form-file" id="id" type="hidden" name="status" value="0" required />
              
                    <button class='btn btn-success' type='submit'>Tandai Belum Bayar</button>

                </x-button>
                
                
                --}}
                                    </form> 
                                   
                                </td>
                          
                    </tbody>
                    @endforeach
                    {{-- STATUS BAYAR --}}
                </table>

                {{-- {{ $bukti->links() }} --}}

            </div>
        </div>
    </div>
</div>

<script>
    $().tooltip();
    
</script>