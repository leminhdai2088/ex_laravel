@extends('components.layout')
@section('head')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>modifier</title>

<!-- FONT -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;700&display=swap" rel="stylesheet">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- OWN CAROUSEL -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- BS4 CSS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="/css/header.css">
<link rel="stylesheet" href="/dashboard/css/pro_modifier.css">

<style>
    form {
        margin-top: 46px;
    }

    .don-vi {
        justify-content: space-between
    }

    .container {
        margin-top: 60px;
    }
</style>
@endsection
@section('content')
<form action="/edit_user" method="POST">
    @method('PATCH')
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="container">
        <h2 class="text-center font-weight-bold mt-4 mb-4">Sửa thông tin khách hàng</h2>
        @if(Session::has('thanhcong'))
        <div>{{Session::get('thanhcong')}}</div>
        @endif
        <div class="row">
            <!-- Phần nội dung bên trái -->
            <div class="col-7">

                <div class="row mb-3">
                    <div class="col-8">
                        <input name="name" type="text" class="product-name form-control" placeholder="Họ và tên"
                            value="{{ Auth::user()->name }}" required>
                    </div>
                </div>

                <input name="email" class="form-control mb-3" aria-label="With textarea" placeholder="Email"
                    value="{{ Auth::user()->email }}" style="height: 50px; resize: none;" required>



            </div>

            <!-- phần nội dung bên phải -->
            <div class="col-5">
                {{-- <div class="array-item" id="load-img">
                    <div class="add-image-btn">

                        <input name="image[]" type="file" class="input-file" id="choose" onchange="changed(this)"
                            multiple
                            accept="image/jpeg,image/jpg,image/png,image/gif,application/zip,application/x-zip-compressed,multipart/x-zip,.cbz">
                        <label for="choose">
                            <i class="fa fa-plus" style="font-size: 50px; display: flex; justify-content: center;
                            background-position: 50%;
                            background-size: contain;
                            background-repeat: no-repeat;"></i>
                            Thêm hình ảnh
                        </label>
                    </div>
                </div> --}}
                <div class="row mt-3">
                    <div class="col-6">
                        <button type="submit" class="btn btn-lg btn-block btn-save">Lưu</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


@endsection