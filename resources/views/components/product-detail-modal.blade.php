<div class="modal fade" id="productDetailModal" tabindex="-1" aria-labelledby="productDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content product-detail-modal">
            <div class="modal-header border-0 pb-0">
                <h2 class="modal-title h5 fw-bold text-wood-800" id="productDetailModalLabel"></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
            </div>
            <div class="modal-body pt-2">
                <div class="row g-4">
                    <div class="col-md-5">
                        <div class="product-detail-modal__image-wrap">
                            <img src="" alt="" class="product-detail-modal__image img-fluid rounded" id="productDetailImage">
                        </div>
                        <div class="price-text fs-4 mt-3" id="productDetailPrice"></div>
                    </div>
                    <div class="col-md-7">
                        <h3 class="h6 fw-bold text-wood-800 mb-2">Đặc điểm sản phẩm</h3>
                        <ul class="product-detail-modal__features list-unstyled mb-4" id="productDetailFeatures"></ul>

                        <h3 class="h6 fw-bold text-wood-800 mb-2">Tại sao nên dùng</h3>
                        <div class="product-detail-modal__why text-secondary" id="productDetailWhy"></div>
                    </div>
                </div>

                <div class="product-detail-modal__similar mt-4 pt-4 border-top">
                    <h3 class="h6 fw-bold text-wood-800 mb-3">Sản phẩm tương tự</h3>
                    <div class="similar-products-slider overflow-hidden">
                        <div class="similar-products-track" id="similarProductsTrack"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
