@extends('components.layout')
@section('head')
<title>Quản lý sản phẩm</title>

<head>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
</head>
<style>
    th {
        background-color: rgb(254 240 138);
    }

    td {
        text-align: center;
    }

    .stage {
        border: 1px solid black;
        height: 12px;
        width: 30px;
        cursor: pointer;
        background-color: none;
    }

    .stages:hover>.stage {
        background-color: aqua;
    }

    .stage:hover~.stage {
        background-color: white;
    }

    .active {
        background-color: blue;
    }

    /* Add this attribute to the element that needs a tooltip */

    [data-tooltip] {
        position: relative;
        z-index: 2;
        cursor: pointer;
    }

    /* Hide the tooltip content by default */

    [data-tooltip]:before,
    [data-tooltip]:after {
        visibility: hidden;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
        opacity: 0;
        pointer-events: none;
    }

    /* Position tooltip above the element */

    [data-tooltip]:before {
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-bottom: 5px;
        margin-left: -120px;
        padding: 7px;
        width: 130px;
        border-radius: 3px;
        border: 1px outset #C0C0C0;
        background-color: #000;
        background-color: hsla(0, 0%, 20%, 0.9);
        color: #FFFFFF;
        content: attr(data-tooltip);
        text-align: center;
        font-size: 11px;
        font-weight: bold;
        line-height: 1.2;
    }

    /* Triangle hack to make tooltip look like a speech bubble */

    [data-tooltip]:after {
        position: absolute;
        bottom: 100%;
        left: 50%;
        margin-left: -5px;
        width: 0;
        border-top: 5px solid #000;
        border-top: 5px solid hsla(0, 0%, 20%, 0.9);
        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        content: " ";
        font-size: 0;
        line-height: 0;
    }

    /* Show tooltip content on hover */

    [data-tooltip]:hover:before,
    [data-tooltip]:hover:after {
        visibility: visible;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
        opacity: 1;
    }

    [class^="flaticon"]:before,
    [class*=" flaticon"]:before,
    [class^="flaticon"]:after,
    [class*=" flaticon"]:after {

        font-size: 30px;

    }
</style>
<link rel="canonical" href="https://noithatfudo.vn/admin/products"/>
@endsection
@section('content')

<h1 class="text-center text-3xl font-bold my-3">Danh sách sản phẩm</h1>
<div class="flex justify-between items-center">
    <form action="/admin/products" method="GET">
        <div class="text-gray-700 relative my-auto min-w-[100px] md:min-w-[250px]">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <button type="submit" class="p-1 text-gray-400 focus:outline-none focus:shadow-outline">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 text-[#6B7280]">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </span>
            <input name="name" type="search" class="
        text-sm
        font-normal
        border
        pl-8
        pr-2
        h-8
        rounded-md
        bg-white
        text-gray-500
        focus:text-gray-900 focus:outline-none
      " placeholder="Tìm kiếm sản phẩm..." />
        </div>
    </form>
    <a class="mr-10" data-tooltip="Thêm sản phẩm" href="/admin/add"><i class="flaticon fi fi-rr-add"></i></a>
</div>
<div class="overflow-x-auto">

    <table class="w-full">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Phân loại</th>
            <th>Phòng</th>
            <th>Khối lượng (kg)</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Hành động</th>
        </tr>
        @foreach($products as $product)
        <tr id="{{ $product->id }}">
            <td>
                #{{ $product->id }}
            </td>
            <td>
                {{ $product->name }}
            </td>
            <td>
                {{ $product->product_category->name }}
            </td>
            <td>
                {{ $product->room->name }}
            </td>
            <td>
                {{ $product->weight }}
            </td>
            <td>
                {{ number_format($product->price) }}đ
            </td>
            <td>
                {{ $product->qty }}
            </td>

            <td>
                <div class="flex justify-center gap-5">
                    <a href="/admin/edit/{{ $product->id }}" data-tooltip="Chỉnh sửa"><i class="fi fi-rr-edit"></i></a>

                    <form action="/admin/delete_product/{{ $product->id }}" method="POST">
                        @method('DELETE')
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" onclick="return confirm('Xác nhận xóa sản phẩm?')" data-tooltip="Xóa"><i
                                class="fi fi-rr-trash"></i></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<div class="shop-content-bottom">
    <div class="pages">
        {{ $products->links() }}
    </div>

</div>

@endsection
