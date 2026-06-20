<footer id="lien-he" class="bg-wood-900 text-white-50">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <h3 class="text-white fs-5 fw-bold mb-3">LIÊN HỆ TRỤ SỞ</h3>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2">🏭 Nhà máy SX: KCN Nguyên Khê, Đông Anh, Hà Nội</li>
                    <li class="mb-2">🏪 Showroom 1: Số 1, Ngõ 46 Quan Nhân, Cầu Giấy, Hà Nội</li>
                    <li class="mb-2"><a href="tel:0394573621" class="text-white-50 text-decoration-none">📞 0394 573 621</a></li>
                    <li><a href="mailto:cuagochiunuoccomposite@gmail.com" class="text-white-50 text-decoration-none">✉ cuagochiunuoccomposite@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h3 class="text-white fs-5 fw-bold mb-3">LIÊN HỆ SHOWROOM 2</h3>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2">🏢 Tòa nhà Zen Tower, 12 Khuất Duy Tiến, Q. Thanh Xuân, Hà Nội</li>
                    <li class="mb-2"><a href="tel:0394573621" class="text-white-50 text-decoration-none">📞 0394 573 621</a></li>
                    <li><a href="mailto:cuagochiunuoccomposite@gmail.com" class="text-white-50 text-decoration-none">✉ cuagochiunuoccomposite@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <h3 class="text-white fs-5 fw-bold mb-3">CHÍNH SÁCH</h3>
                <ul class="list-unstyled small mb-0">
                    @foreach (['Hướng dẫn thanh toán', 'Chính sách bảo mật', 'Chính sách đổi trả', 'Chính sách vận chuyển', 'Chính sách bảo hành'] as $policy)
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">{{ $policy }}</a></li>
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
