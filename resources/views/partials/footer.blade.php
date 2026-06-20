<footer id="lien-he" class="bg-wood-900 text-white">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <h3 class="text-white fs-5 fw-bold mb-3">LIÊN HỆ TRỤ SỞ</h3>
                <ul class="list-unstyled small mb-0">
                    {{-- <li class="mb-2">🏭 Nhà máy SX: 08 BT05, KĐT mới Phú Lương, Phường Phú Lương, Thành phố Hà Nội, Việt Nam </li> --}}
                    <li class="mb-2">🏪 Showroom 1: 08 BT05, KĐT mới Phú Lương, Phường Phú Lương, Thành phố Hà Nội, Việt Nam </li>
                    <li class="mb-2"><a href="tel:0971738468" class="text-white text-decoration-none">📞 0971738468</a></li>
                    <li><a href="mailto:cskh@cuanhuacompositehanoi.com" class="text-white text-decoration-none">✉ cskh@cuanhuacompositehanoi.com</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h3 class="text-white fs-5 fw-bold mb-3">LIÊN HỆ SHOWROOM 2</h3>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2">🏢 08 BT05, KĐT mới Phú Lương, Phường Phú Lương, Thành phố Hà Nội, Việt Nam</li>
                    <li class="mb-2"><a href="tel:0971738468" class="text-white text-decoration-none">📞 0971738468</a></li>
                    <li><a href="mailto:cskh@cuanhuacompositehanoi.com" class="text-white text-decoration-none">✉ cskh@cuanhuacompositehanoi.com</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h3 class="text-white fs-5 fw-bold mb-3">CHÍNH SÁCH</h3>
                <ul class="list-unstyled small mb-0">
                    @foreach (['Hướng dẫn thanh toán', 'Chính sách bảo mật', 'Chính sách đổi trả', 'Chính sách vận chuyển', 'Chính sách bảo hành'] as $policy)
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">{{ $policy }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h3 class="text-white fs-5 fw-bold mb-3">TỪ KHÓA TÌM KIẾM</h3>
                <div class="d-flex flex-wrap gap-2">
                    @foreach (['cửa composite', 'cửa gỗ chịu nước', 'cửa gỗ công nghiệp', 'lắp đặt cửa composite', 'mua cửa tại hà nội'] as $tag)
                        <a href="#" class="badge tag-badge text-white text-decoration-none fw-normal">{{ $tag }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-secondary py-3 text-center small text-white-50">
        Copyright © {{ date('Y') }} | Cửa Nhựa Hà Nội
    </div>
</footer>
