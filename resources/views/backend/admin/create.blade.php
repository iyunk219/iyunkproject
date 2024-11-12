@extends('backend.template.main')
@section('content')
<table style="width: 100%; height: 100vh; text-align: center;">
    <tr>
        <td>
            <div style="display: inline-block; text-align: left; border: 1px solid #ccc; border-radius: 8px; padding: 20px; background-color: #f9f9f9;">
                <h2 style="text-align: center;">Tambah Data Admin</h2>
                <form action="{{url('/backend/admin/store')}}" method="post" enctype="multipart/form-data">
                    {{@csrf_field()}}
                    <div style="margin-bottom: 15px;">
                        <label for="product-name">Username</label><br>
                        <input type="text" id="username" name="username" placeholder="Masukkan Username." required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="product-price">Password</label><br>
                        <input type="text" id="password" name="password" placeholder="Masukkan Password.." required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
                    </div>
                    <div style="text-align: right;">
                        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
                        <button type="reset" style="background-color: #dc3545; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Reset</button>
                    </div>
                </form>
            </div>
        </td>
    </tr>
</table>

@endsection