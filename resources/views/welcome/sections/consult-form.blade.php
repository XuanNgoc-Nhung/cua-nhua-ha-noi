<section id="tu-van" class="py-4 bg-wood-800 text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8" data-aos="zoom-in">
                <div class="text-center mb-4">
                    <h2 class="h3 fw-bold mb-2">TƯ VẤN LẮP CỬA BỀN ĐẸP, GIÁ GỐC</h2>
                    <p class="text-white-50 mb-0">Đăng ký nhận tư vấn miễn phí và báo giá ưu đãi nhất</p>
                </div>
                <form id="consultForm" class="consult-form" action="{{ route('yeu-cau-ho-tro.store') }}" method="post" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="consult-name" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                            <input
                                type="text"
                                id="consult-name"
                                name="ten_khach_hang"
                                class="form-control form-control-lg"
                                placeholder="Nhập họ và tên của bạn"
                                required
                                autocomplete="name"
                            >
                        </div>
                        <div class="col-md-6">
                            <label for="consult-phone" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                            <input
                                type="tel"
                                id="consult-phone"
                                name="sdt_khach_hang"
                                class="form-control form-control-lg"
                                placeholder="Nhập số điện thoại"
                                required
                                autocomplete="tel"
                                inputmode="tel"
                            >
                        </div>
                        <div class="col-12">
                            <label for="consult-message" class="form-label">Yêu cầu</label>
                            <textarea
                                id="consult-message"
                                name="noi_dung_yeu_cau"
                                class="form-control"
                                rows="4"
                                placeholder="Mô tả nhu cầu của bạn (loại cửa, số lượng, địa chỉ lắp đặt...)"
                            ></textarea>
                        </div>
                        <div class="col-12 text-center pt-2">
                            <button type="submit" id="consultSubmitBtn" class="btn btn-secondary btn-lg px-5">
                                GỬI YÊU CẦU TƯ VẤN
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
