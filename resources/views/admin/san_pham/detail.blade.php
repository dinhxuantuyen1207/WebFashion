@extends('share.master')
@section('group-body')
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4 border-end">
                @php
                    $main = \App\Models\HinhAnhSanPham::where('id_san_pham', $product->id)->first();
                @endphp
                <img src="/upload/{{ $main->hinh_anh_phu }}" class="img-fluid" id="main-image" alt="...">


                <div class="text-start d-flex">

                    <button onclick="toRight()" style="z-index: 1;border: none;background: none;"> <i
                            class="fa-solid fa-circle-chevron-left" style="font-size: 22px"></i></button>

                    <div id="list_img" class="row mb-3 row-cols-auto g-2 justify-content-center mt-3"
                        style="display:-webkit-box;flex-wrap:nowrap;overflow-x:hidden;width: 536px;">
                        @foreach (\App\Models\HinhAnhSanPham::where('id_san_pham', $product->id)->get() as $key => $value)
                            <div class="col"><img onclick="change_image(this)" src="/upload/{{ $value->hinh_anh_phu }}"
                                    width="70" class="image-container border rounded cursor-pointer" alt="">
                            </div>
                        @endforeach

                    </div>
                    <button onclick="toLeft()" style="z-index: 1;border: none;background: none;"> <i
                            class="fa-solid fa-circle-chevron-right" style="font-size: 22px"></i></button>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->ten_san_pham }}</h4>
                    {{-- <div class="d-flex gap-3 py-3">
            <div class="cursor-pointer">
                <i class="bx bxs-star text-warning"></i>
                <i class="bx bxs-star text-warning"></i>
                <i class="bx bxs-star text-warning"></i>
                <i class="bx bxs-star text-warning"></i>
                <i class="bx bxs-star text-secondary"></i>
              </div>
              <div>142 reviews</div>
              <div class="text-success"><i class="bx bxs-cart-alt align-middle"></i> 134 orders</div>
          </div> --}}
                    <div class="mb-3">
                        <p class="" style="font-size: 11px">
                        <h5 class="m-3 text-decoration-line-through text-secondary">
                            @if ($product->khuyen_mai > 0)
                                {{ number_format($product->gia, 0, '', '.') }} đ
                            @endif
                        </h5>
                        <div class="m-3">
                            <h4>{{ number_format($product->gia - $product->gia * $product->khuyen_mai * 0.01, 0, '', '.') }}
                                <sup>đ</sup>
                            </h4>
                        </div>
                        </p>
                    </div>
                    <p class="card-text fs-6" style="min-height: 50px;">{{ $product->mo_ta_ngan }}</p>
                    <hr>
                    <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
                        <div class="col">
                            <label class="form-label">Số lượng</label>
                            <div class="input-group input-spinner ">
                                <button class="btn btn-white" type="button" id="button-plus"> + </button>
                                <input type="text" class="form-control text-end" name="so_luong" id="so_luong"
                                    value="1" required max=20 min=1>
                                <button class="btn btn-white" type="button" id="button-minus"> − </button>
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label">Size</label>
                            <div class="">
                                @foreach (\App\Models\SizeSanPham::where('id_san_pham', $product->id)->get() as $k => $valuesize)
                                    <label class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="select_size" checked=""
                                            value="{{ $valuesize->size }}">
                                        <div class="form-check-label">{{ $valuesize->size }}</div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label">Select Color</label>
                            <div class="color-indigators d-flex align-items-center gap-2">
                                <div class="color-indigator-item bg-primary"></div>
                                <div class="color-indigator-item bg-danger"></div>
                                <div class="color-indigator-item bg-success"></div>
                                <div class="color-indigator-item bg-warning"></div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <a id="add-to-cart" data-id="{{ $product->id }}" class="btn btn-outline-primary"><span
                                class="text">Add to cart</span> <i class="bx bxs-cart-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card-body">
            <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-comment-detail font-18 me-1"></i>
                            </div>
                            <div class="tab-title"> Product Description </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false"
                        tabindex="-1">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-bookmark-alt font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Tags</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab"
                        aria-selected="false" tabindex="-1">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class="bx bx-star font-18 me-1"></i>
                            </div>
                            <div class="tab-title">Reviews</div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content pt-3">
                <div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
                    {!! html_entity_decode($product->mo_ta) !!}
                </div>
                <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                    {!! html_entity_decode($product->mo_ta) !!}
                </div>
                <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                    {!! html_entity_decode($product->mo_ta) !!}
                </div>
            </div>
        </div>
    </div>
@endsection



@section('js')
    <script>
        function toLeft() {
            $('#list_img').animate({
                scrollLeft: 100
            }, 500);
        }

        function toRight() {
            $('#list_img').animate({
                scrollLeft: -100
            }, 500);
        }
    </script>
    <script>
        function change_image(image) {
            var container = document.getElementById("main-image");
            container.src = image.src;
        }
        $('body').on('click', '#main-image', function() {})
        document.addEventListener("DOMContentLoaded", function(event) {

        });
        $('#add-to-cart').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/product/add-to-cart/' + id,
                type: 'get',
                success: function(res) {
                    if (res.status) {
                        toastr.success('Đã Thêm Vào Giỏ Hàng');
                    }
                }
            })
        })
        $('#button-plus').click(function() {
            var num = $('#so_luong').val();
            if (num >= 20) {
                toastr.error('Số Lượng Quá Nhiều');
            } else {
                num++;
                $('#so_luong').val(num);
            }
        })
        $('#button-minus').click(function() {
            var num = $('#so_luong').val();
            if (num <= 1) {

            } else {
                num--;
                $('#so_luong').val(num);
            }
        })
        // $(".image-container").mouseover(function () {
        //     var imgName = $(this).find('img').attr('src');
        //     var img2 = imgName.substring(0, imgName.lastIndexOf("."));
        //     $(this).find('img').attr("src", img2+".gif");
        // }).mouseout(function () {
        //     var imgName = $(this).find('img').attr('src');
        //     var img2 = imgName.substring(0, imgName.lastIndexOf("."));
        //     $(this).find('img').attr("src", img2+".png");
        // });
    </script>
    <script>
        function toLeft() {
            $('#list_img').animate({
                scrollLeft: 100
            }, 1000);
        }

        function toRight() {
            $('#list_img').animate({
                scrollLeft: -100
            }, 1000);
        }
    </script>
@endsection
