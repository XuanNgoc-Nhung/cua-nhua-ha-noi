<header class="sticky-top shadow-sm">
    <div class="navbar-top">
        <div class="container">
            <div class="row align-items-center py-2 g-2">
                <div class="col-auto">
                    <a href="/" class="d-flex align-items-center gap-3 text-decoration-none">
                        <div class="navbar-top__logo rounded d-flex align-items-center justify-content-center fw-bold" style="width:48px;height:48px;">CN</div>
                        <div class="d-none d-sm-block">
                            <div class="fw-bold text-white fs-5 lh-sm">Cửa Nhựa Hà Nội</div>
                            <div class="small text-white text-opacity-75">Cửa composite chịu nước</div>
                        </div>
                    </a>
                </div>

                <div class="col d-none d-lg-block">
                    <form class="mx-auto" style="max-width:420px;" role="search">
                        <div class="input-group">
                            <input type="search" class="form-control rounded-pill rounded-end-0 border-end-0 border-0 ps-3" placeholder="Tìm kiếm sản phẩm...">
                            <button class="btn btn-light rounded-pill rounded-start-0 border-start-0" type="submit">
                                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-auto ms-auto">
                    <div class="d-flex align-items-center gap-3">
                        <a href="#" class="d-none d-sm-inline-flex align-items-center gap-1 text-white text-decoration-none small">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            Tài khoản
                        </a>
                        {{-- <a href="#" class="position-relative text-white text-decoration-none">
                            <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">0</span>
                        </a> --}}
                        <button class="btn btn-link text-white p-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                            <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="d-none d-lg-block border-top bg-white">
        <div class="container">
            <ul class="nav navbar-nav small flex-row flex-wrap align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-primary text-white fw-semibold px-3 py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SẢN PHẨM
                    </a>
                    <ul class="dropdown-menu shadow border-0 rounded-0">
                        <li><a class="dropdown-item fw-medium" href="#">CỬA COMPOSITE</a></li>
                        <li><a class="dropdown-item ps-4" href="#">Cửa Chỉ Trang Trí</a></li>
                        <li><a class="dropdown-item ps-4" href="#">Cửa Ô Huỳnh</a></li>
                        <li><a class="dropdown-item ps-4" href="#">Cửa Tấm Phẳng</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item fw-medium" href="#">CỬA COMPOSITE CÔNG NGHỆ MỚI</a></li>
                        <li><a class="dropdown-item fw-medium" href="#">CỬA GỖ CHỊU NƯỚC</a></li>
                        <li><a class="dropdown-item fw-medium" href="#">CỬA GỖ CÔNG NGHIỆP</a></li>
                        <li><a class="dropdown-item fw-medium" href="#">KHÓA CỬA</a></li>
                        <li><a class="dropdown-item fw-medium" href="#">PHỤ KIỆN</a></li>
                    </ul>
                </li>
                @foreach (['TRANG CHỦ', 'TƯ VẤN CỬA ĐẸP', 'MẪU CỬA ĐẸP', 'CÁC DỰ ÁN THI CÔNG', 'TẤM COMPOSITE PHỦ PVC'] as $item)
                    <li class="nav-item">
                        <a class="nav-link text-wood-800 px-3 py-2" href="#">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</header>

<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title fw-bold text-wood-800" id="mobileMenuLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Đóng"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="p-3 border-bottom">
            <input type="search" class="form-control rounded-pill" placeholder="Tìm kiếm sản phẩm...">
        </div>
        <div class="list-group list-group-flush">
            @foreach (['TRANG CHỦ', 'SẢN PHẨM', 'TƯ VẤN CỬA ĐẸP', 'MẪU CỬA ĐẸP', 'DỰ ÁN THI CÔNG', 'LIÊN HỆ'] as $item)
                <a href="#" class="list-group-item list-group-item-action small">{{ $item }}</a>
            @endforeach
        </div>
    </div>
</div>
