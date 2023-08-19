@extends('admin.layout_admin')
@section('container')
<div class="container">          
        <table  data-toggle="table"
        data-pagination="true"
        data-search="true"
        style="text-align: center">
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>email</th>
                <th>phone number</th>
                <th>last update</th>
                <th>created at</th>
               
            </tr>
        </thead>
        <tbody>
           
        </tbody>
        </tfoot>
    </table>
</div>
@endsection