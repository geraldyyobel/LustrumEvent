@extends('admin.layout_admin')
@section('container')
<div class="container">          
    <table id="example" class="table table-striped" style="width:100%">
        <h4>Sepak Bola</h4>
        <thead>
            <tr>
                <th>sekolah</th>
                <th>Alamat</th>
                <th>no telp</th>
                <th>form</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($sb as $a)
                    <tr>
                        <td>{{$a->sekolah}}</td>
                        <td>{{$a->alamat}}</td>
                        <td>{{$a->phone}}</td>
                        <td>{{$a->form}}</td>
                       
                    </tr>
                    @endforeach
        </tbody>
    </table>
</div>
@endsection