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
                <table data-toggle="table"
                data-pagination="true"
                data-search="true">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">No</th>
                            <th scope="col">Nama Pendaftar</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Bukti Pembayaran</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($bukti as $u)
                            <tr>
                                <td></td>
                                <td>{{ $u->author }}</td>
                                <td>{{ $u->phone }}</td>
                                <td><img src="{{ Storage::url('public/bukti/' .$u->bukti) }}" class="img-fluid img-thumbnail" width="150"/></td>
                                <td>
                                <form method="get" action="{{ route('status-bayar',$u->id) }}">
                                    @csrf
                                      <div class="col-md-4"></div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn btn-danger"  >UBAH STATUS BAYAR</button>
                                             </div>
                                    </form> 
                                </td>
                                @endforeach
                    </tbody>
                    
                </table>

                {{-- {{ $bukti->links() }} --}}

            </div>
        </div>
    </div>
</div>

<script>
    $().tooltip();
    
</script>