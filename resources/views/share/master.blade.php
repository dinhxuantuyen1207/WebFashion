<!doctype html>
<html lang="en">

<head>
    @include('share.head')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper" data-simplebar="init">
            <header>
                <!--wrapper-->
                @include('share.menu')
                <!--end wrapper-->

                <!--start switcher-->
                {{-- <div class="switcher-wrapper">
            <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
            </div>
            <div class="switcher-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                    <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
                </div>
                <hr />
                <h6 class="mb-0">Theme Styles</h6>
                <hr />
                <div class="d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                        <label class="form-check-label" for="lightmode">Light</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                        <label class="form-check-label" for="darkmode">Dark</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                        <label class="form-check-label" for="semidark">Semi Dark</label>
                    </div>
                </div>
                <hr />
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                    <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
                </div>
                <hr />
                <h6 class="mb-0">Header Colors</h6>
                <hr />
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>
                <hr />
                <h6 class="mb-0">Sidebar Colors</h6>
                <hr />
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
            </header>
            <!--end header -->
            <!--start page wrapper -->
            <div class="page-wrapper">
                <div class="page-content">
                    @yield('group-body')
                </div>
            </div>
            <!--end page wrapper -->
            <!--start overlay-->
            <div class="overlay toggle-icon"></div>
            <!--end overlay-->
            <!--Start Back To Top Button-->
            <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <footer class="page-footer">
                <p class="mb-0">Copyright ?? 2021. All right reserved.</p>
            </footer>
        </div>
    </div>
    <div class="modal fade" id="exampleScrollableModal" tabindex="-1" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lgx">
            <form action="/login/register" method="post">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">????ng K?? T??i Kho???n</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-outline mb-1">
                                    <label class="form-label" for="form2Example11">H??? V?? T??n <span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" name="ho_va_ten" id="dk_ho_va_ten" class="form-control"
                                        placeholder="nh???p h??? v?? t??n c???a b???n" />
                                    <small></small>
                                </div>
                                <div class="form-outline mb-1">
                                    <label class="form-label" for="form2Example11">Email<span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" name="tai_khoan" id="dk_email" class="form-control"
                                        placeholder="t??n ????ng nh???p" />
                                    <small></small>
                                </div>
                                <div class="form-outline mb-1">
                                    <label class="form-label" for="form2Example11">S??T <span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" name="SDT" id="dk_SDT" class="form-control"
                                        placeholder="m???t kh???u" />
                                    <small></small>
                                </div>
                                <div class="form-outline mb-1">
                                    <label class="form-label" for="form2Example11">M???t Kh???u <span
                                            class="text-danger">(*)</span></label>
                                    <input type="password" name="mat_khau" id="dk_mat_khau" class="form-control"
                                        placeholder="x??c nh???n m???t kh???u" />
                                    <small></small>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">????ng</button>
                        <button type="button" id="btn_dang_ky" class="btn btn-primary">????ng K??</button>
                    </div>
            </form>
        </div>

    </div>
    @include('share.foot')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @yield('js')

    <script>
        $(document).ready(function(e) {

            $("#goLogin").click(function(e) {
                window.location.replace("/login")
                sessionStorage.setItem("url", location.href);
            });

            $("#btn_dang_ky").click(function(e) {
                var payload = {
                    'email': $('#dk_email').val(),
                    'password': $('#dk_mat_khau').val(),
                    'full_name': $('#dk_ho_va_ten').val(),
                    'phone': $('#dk_SDT').val()
                }
                $.ajax({
                    url: '/register',
                    type: 'post',
                    data: payload,
                    success: function(res) {
                        if (res.status) {
                            toastr.success('????ng K?? Th??nh C??ng');
                            $('#exampleScrollableModal').modal('hide');
                        } else {
                            toastr.error('????ng K?? Th???t B???i');
                        }

                    }
                })
            })
            // function toSlug(s) {
            // return s.toString().normalize('NFD').replace(/[\u0300-\u036f]/g, "") //remove diacritics
            //     .toLowerCase()
            //     .replace(/\s+/g, '-') //spaces to dashes
            //     .replace(/&/g, '-and-') //ampersand to and
            //     .replace(/[^\w\-]+/g, '') //remove non-words
            //     .replace(/\-\-+/g, '-') //collapse multiple dashes
            //     .replace(/^-+/, '') //trim starting dash
            //     .replace(/-+$/, ''); //trim ending dash
            // };
            function toSlug(str) {
                // Chuy???n chu???i sang ch??? th?????ng
                str = str.toLowerCase();

                // X??a d???u
                str = str.replace(/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/g, 'a');
                str = str.replace(/(??|??|???|???|???|??|???|???|???|???|???)/g, 'e');
                str = str.replace(/(??|??|???|???|??)/g, 'i');
                str = str.replace(/(??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???)/g, 'o');
                str = str.replace(/(??|??|???|???|??|??|???|???|???|???|???)/g, 'u');
                str = str.replace(/(???|??|???|???|???)/g, 'y');
                str = str.replace(/(??)/g, 'd');

                // X??a k?? t??? ?????c bi???t
                str = str.replace(/([^0-9a-z-\s])/g, '');

                // X??a kho???ng tr???ng thay b???ng k?? t??? -
                str = str.replace(/(\s+)/g, '-');

                // X??a k?? t??? - ??? ?????u v?? cu???i
                str = str.replace(/^-+/g, '');
                str = str.replace(/-+$/g, '');

                // Tr??? v??? k???t qu???
                return str;
            }
            $('#input_search').keypress(function(event) {
                var keycode = (event.keyCode ? event.keyCode : event.which);
                if (keycode == '13') {
                    var name = $('#input_search').val()
                    var x = toSlug(name);
                    if (x == '') {

                    } else {
                        window.location.href = "/search:" + x;
                    }
                }
            });
            $('#input_search').blur(function() {
                var name = $('#input_search').val()
                var x = toSlug(name);
                if (x == '') {} else {
                    window.location.href = "/search:" + x;
                }
            })
        })
    </script>

</body>

</html>
<style>
    .spin {
        animation: spin 1s linear infinite;
        ;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    @media only screen and (max-width: 600px) {
        .card-img-top {
            height: 70px !important;
        }

        .mb-item {
            width: 33% !important;
        }

        .clearfix {
            margin-left: 60px !important;
            font-size: 12px !important;
        }

        .card-title {
            font-size: 9px !important;
            height: 27px !important;
        }
    }
</style>
