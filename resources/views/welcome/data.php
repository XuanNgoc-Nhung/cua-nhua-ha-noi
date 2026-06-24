<?php

$img = fn (string $file): string => asset('images/san-pham/' . $file);

$productMeta = [
    'premium' => [
        'features' => [
            'Cấu tạo 5 lớp composite cao cấp, lõi cứng ABS chống va đập mạnh',
            'Bề mặt vân gỗ ép PVC chân thực, chống trầy xước và phai màu',
            'Chống nước, chống mối mọt, không cong vênh theo thời tiết',
            'Cách âm, cách nhiệt tốt, giữ không gian trong nhà yên tĩnh',
            'Đa dạng màu sắc và kiểu dáng, phù hợp biệt thự và nhà phố cao cấp',
        ],
        'why_use' => '{name} thuộc dòng cửa composite cao cấp, được sản xuất trực tiếp tại xưởng với công nghệ ép nhiệt hiện đại. Sản phẩm mang vẻ đẹp sang trọng như gỗ tự nhiên nhưng bền vượt trội, không bị ẩm mốc hay co ngót trong điều kiện khí hậu nóng ẩm của Việt Nam. Đây là lựa chọn lý tưởng cho phòng khách, phòng ngủ master và không gian cần thể hiện đẳng cấp, đồng thời tiết kiệm chi phí bảo trì dài hạn so với cửa gỗ thật.',
    ],
    'composite' => [
        'features' => [
            'Thiết kế đa dạng: tấm phẳng, ô huỳnh, chỉ trang trí theo xu hướng hiện đại',
            'Vật liệu composite chống cong vênh, ổn định kích thước lâu dài',
            'Bề mặt chống ẩm mốc, dễ lau chùi và bảo quản',
            'Giá tốt nhờ sản xuất trực tiếp tại xưởng, không qua trung gian',
            'Lắp đặt nhanh gọn, bảo hành chính hãng 3 năm',
        ],
        'why_use' => '{name} là mẫu cửa composite phổ biến, phù hợp nhiều không gian từ phòng ngủ, nhà vệ sinh đến phòng khách. Cửa composite giúp gia chủ có được vẻ đẹp gỗ tự nhiên mà không lo mối mọt hay phồng rộp khi gặp nước. Với mức giá hợp lý và độ bền cao, đây là giải pháp tối ưu cho các công trình nhà ở, chung cư và văn phòng cần hoàn thiện nhanh, đẹp và bền.',
    ],
    'waterproof' => [
        'features' => [
            'Công nghệ cửa gỗ nhựa composite chịu nước tuyệt đối',
            'Không bị ẩm mốc, phù hợp khu vực nhiều mưa và độ ẩm cao',
            'Bề mặt chống trầy xước, chịu được va đập hàng ngày',
            'Ổn định kích thước, không co ngót theo mùa',
            'Thi công lắp đặt tận nơi, đo đạc chuẩn xác theo ô cửa',
        ],
        'why_use' => '{name} được thiết kế dành riêng cho môi trường ẩm ướt như nhà vệ sinh, phòng giặt, ban công và khu vực ven biển. Khác với cửa gỗ tự nhiên dễ phồng rộp khi tiếp xúc nước, cửa gỗ chịu nước composite duy trì form dáng và màu sắc ổn định qua nhiều năm sử dụng. Gia chủ có thể yên tâm sử dụng mà không tốn kém chi phí thay thế hay sơn sửa định kỳ.',
    ],
    'new' => [
        'features' => [
            'Thiết kế mới nhất, bắt kịp xu hướng nội thất hiện đại 2025',
            'Đường nét tối giản, sang trọng, dễ phối với nhiều phong cách',
            'Composite công nghệ cao, bền bỉ và chống chịu thời tiết tốt',
            'Nhiều tùy chọn kích thước theo yêu cầu công trình',
            'Hoàn thiện tinh tế, bản lề và khóa đồng bộ cao cấp',
        ],
        'why_use' => '{name} là mẫu cửa mới ra mắt với thiết kế cập nhật, phù hợp khách hàng muốn không gian sống hiện đại và khác biệt. Sản phẩm kết hợp thẩm mỹ cao cấp với độ bền vượt trội của composite, giúp căn nhà thêm nổi bật ngay từ cánh cửa đầu tiên. Đặc biệt phù hợp các dự án hoàn thiện nhà mới, nâng cấp nội thất hoặc thay thế cửa cũ bằng giải pháp bền – đẹp – tiết kiệm.',
    ],
    'smart_lock' => [
        'features' => [
            'Hỗ trợ mở bằng vân tay, mật mã, thẻ từ hoặc chìa cơ khẩn cấp',
            'Chống trộm với cảnh báo đập phá và chống copy vân tay',
            'Pin dự phòng, cổng USB sạc khẩn cấp khi hết pin',
            'Vật liệu hợp kim cao cấp, chịu va đập và thời tiết',
            'Tương thích cửa composite, cửa gỗ và cửa nhôm kính',
        ],
        'why_use' => '{name} nâng tầm an ninh cho ngôi nhà với công nghệ khóa thông minh hiện đại. Không cần mang theo chìa, gia đình có thể mở cửa nhanh chóng bằng vân tay hoặc mật mã, đồng thời kiểm soát ra vào an toàn hơn. Đây là khoản đầu tư xứng đáng cho mọi công trình, đặc biệt khi kết hợp cùng cửa composite cao cấp để tạo hệ thống an ninh đồng bộ.',
    ],
    'accessory' => [
        'features' => [
            'Chất liệu inox 304 / hợp kim cao cấp, chống gỉ sét lâu dài',
            'Hoàn thiện bề mặt tinh tế, đồng bộ với cửa composite',
            'Lắp đặt đơn giản, phù hợp thay thế hoặc nâng cấp phụ kiện cũ',
            'Độ bền cao, chịu lực tốt trong quá trình sử dụng hàng ngày',
            'Giá tốt, có sẵn tại kho, giao nhanh toàn quốc',
        ],
        'why_use' => '{name} là phụ kiện cao cấp giúp hoàn thiện hệ cửa composite, tăng tính thẩm mỹ và độ an toàn. Phụ kiện chất lượng kém dễ han gỉ, kẹt hoặc hỏng sau thời gian ngắn, ảnh hưởng trải nghiệm sử dụng. Sản phẩm của chúng tôi được chọn lọc kỹ, đảm bảo đồng bộ với cửa composite và mang lại sự chắc chắn, mượt mà mỗi lần đóng mở.',
    ],
];

$enrichProducts = function (array $products, string $category) use ($productMeta): array {
    $meta = $productMeta[$category];

    return array_map(function (array $product) use ($meta): array {
        $name = $product['name'];

        return array_merge($product, [
            'features' => array_map(
                fn (string $feature): string => str_replace('{name}', $name, $feature),
                $meta['features']
            ),
            'why_use' => str_replace('{name}', $name, $meta['why_use']),
        ]);
    }, $products);
};

$data = [
    'premiumProducts' => [
        ['name' => 'Cửa Composite cao cấp CC13', 'price' => '3.450.000', 'image' => $img('cua-composite-cao-cap-1-320x320.jpg')],
        ['name' => 'Cửa Composite cao cấp CC12', 'price' => '3.450.000', 'image' => $img('cua-composite-cong-nghe-cao-13-min.jpg')],
        ['name' => 'Cửa Composite cao cấp CC11', 'price' => '3.500.000', 'image' => $img('cua-composite-cong-nghe-cao-12-min.jpg')],
        ['name' => 'Cửa Composite cao cấp CC10', 'price' => '3.550.000', 'image' => $img('cua-composite-cong-nghe-cao-11-min.jpg')],
        ['name' => 'Cửa Composite cao cấp CC09', 'price' => '3.500.000', 'image' => $img('cua-composite-cong-nghe-cao-10-min.jpg')],
        ['name' => 'Cửa Composite cao cấp CC08', 'price' => '3.500.000', 'image' => $img('cua-composite-cong-nghe-cao-9-min.jpg')],
        ['name' => 'Cửa Composite cao cấp CC07', 'price' => '3.500.000', 'image' => $img('cua-composite-cong-nghe-cao-8-min.jpg')],
        ['name' => 'Cửa Composite cao cấp CC06', 'price' => '3.450.000', 'image' => $img('cua-composite-cong-nghe-cao-7-min.jpg')],
    ],

    'compositeSampleProducts' => [
        ['name' => 'Cửa Chỉ Trang Trí CT06', 'price' => '2.900.000', 'image' => $img('cua-composite-ctp08.jpg')],
        ['name' => 'Cửa composite TP12', 'price' => '3.400.000', 'image' => $img('cua-go-nhua-composite-TP12-min.jpg')],
        ['name' => 'Cửa Ô Huỳnh OH07', 'price' => '2.850.000', 'image' => $img('cua-go-nhua-composite-OH21-min.jpg')],
        ['name' => 'Cửa Tấm Phẳng TP03', 'price' => '2.700.000', 'image' => $img('cua-go-nhua-composite-PC01-min.jpg')],
        ['name' => 'Cửa Tấm Phẳng TP08', 'price' => '2.700.000', 'image' => $img('cua-composite-1-320x320.jpg')],
        ['name' => 'Cửa Ô Huỳnh OH02', 'price' => '2.800.000', 'image' => $img('cua-go-nhua-composite-CP20-min.jpg')],
        ['name' => 'Cửa Ô Huỳnh OH08', 'price' => '2.900.000', 'image' => $img('cua-go-nhua-composite-OH21-min.jpg')],
        ['name' => 'Cửa Chỉ Trang Trí CT02', 'price' => '3.000.000', 'image' => $img('cua-composite-ctp08.jpg')],
    ],

    'waterproofSampleProducts' => [
        ['name' => 'Cửa Gỗ CN GN01', 'price' => '3.200.000', 'image' => $img('cua-composite.jpg')],
        ['name' => 'Cửa Gỗ CN GN02', 'price' => '3.350.000', 'image' => $img('Cua-composite-cong-nghe-cao-4-min.jpg')],
        ['name' => 'Cửa Gỗ CN GN03', 'price' => '3.100.000', 'image' => $img('Cua-composite-cong-nghe-cao-5-min.jpg')],
        ['name' => 'Cửa Gỗ CN GN04', 'price' => '3.450.000', 'image' => $img('cua-composite-cong-nghe-cao-6-min.jpg')],
        ['name' => 'Cửa Gỗ CN GN05', 'price' => '3.280.000', 'image' => $img('two-interior-doors-1.jpg.optimal.jpg')],
        ['name' => 'Cửa Gỗ CN GN06', 'price' => '3.500.000', 'image' => $img('Slide-cua-go-composite.jpg')],
        ['name' => 'Cửa Gỗ CN GN07', 'price' => '3.150.000', 'image' => $img('cua-go-nhua-composite-CP20-min.jpg')],
        ['name' => 'Cửa Gỗ CN GN08', 'price' => '3.380.000', 'image' => $img('cua-go-nhua-composite-PC01-min.jpg')],
    ],

    'newSampleProducts' => [
        ['name' => 'Cửa Mới NM01', 'price' => '3.600.000', 'image' => $img('Cua-Bigdoor-moi-2-320x320.jpg')],
        ['name' => 'Cửa Mới NM02', 'price' => '3.750.000', 'image' => $img('Cua-Bigdoor-moi-2.jpg')],
        ['name' => 'Cửa Mới NM03', 'price' => '3.550.000', 'image' => $img('cap-nhat-mau-cua-composite-15.jpg')],
        ['name' => 'Cửa Mới NM04', 'price' => '3.800.000', 'image' => $img('Slide-cua-composite-tai-ha-noi.jpg')],
        ['name' => 'Cửa Mới NM05', 'price' => '3.650.000', 'image' => $img('cua-composite-cao-cap-1.jpg')],
        ['name' => 'Cửa Mới NM06', 'price' => '3.900.000', 'image' => $img('cua-composite-cong-nghe-cao-13-min.jpg')],
        ['name' => 'Cửa Mới NM07', 'price' => '3.700.000', 'image' => $img('cua-composite-cong-nghe-cao-12-min.jpg')],
        ['name' => 'Cửa Mới NM08', 'price' => '3.850.000', 'image' => $img('cua-composite-cong-nghe-cao-11-min.jpg')],
    ],

    'smartLocks' => [
        ['name' => 'Khóa vân tay KT02', 'price' => '4.500.000', 'image' => $img('khoa-tu-KT03.jpg')],
        ['name' => 'Khóa thông minh KT01', 'price' => '1.750.000', 'image' => $img('khoa-tu-KT01.jpg')],
        ['name' => 'Khóa sảnh KS02', 'price' => '1.500.000', 'image' => $img('Khoa-cua-sanh.jpg')],
        ['name' => 'Khóa cửa KH12', 'price' => '500.000', 'image' => $img('khoa-cua-12.jpg')],
        ['name' => 'Khóa cửa KH03', 'price' => '650.000', 'image' => $img('khoa-cua-2.jpg')],
        ['name' => 'Khóa mật mã KM05', 'price' => '2.200.000', 'image' => $img('khoa-cua-5.jpg')],
        ['name' => 'Khóa thẻ từ KT03', 'price' => '3.100.000', 'image' => $img('khoa-cua-11.jpg')],
        ['name' => 'Khóa cửa KH08', 'price' => '850.000', 'image' => $img('khoa-cua-6.jpg')],
    ],

    'premiumAccessories' => [
        ['name' => 'Mắt thần MT01', 'price' => '250.000', 'image' => $img('khoa-cua-1.jpg')],
        ['name' => 'Chốt an toàn 01', 'price' => '70.000', 'image' => $img('khoa-cua-4.jpg')],
        ['name' => 'Hít chặn HC01', 'price' => '55.000', 'image' => $img('khoa-cua-5.jpg')],
        ['name' => 'Clemon 011', 'price' => '105.000', 'image' => $img('khoa-cua-6.jpg')],
        ['name' => 'Mắt thần MT02', 'price' => '80.000', 'image' => $img('khoa-cua-2.jpg')],
        ['name' => 'Bản lề inox BL03', 'price' => '180.000', 'image' => $img('khoa-cua-11.jpg')],
        ['name' => 'Tay nắm TN05', 'price' => '320.000', 'image' => $img('khoa-cua-12.jpg')],
        ['name' => 'Chốt cửa CC02', 'price' => '95.000', 'image' => $img('khoa-cua-1.jpg')],
    ],

    'locks' => [
        ['name' => 'Khóa cửa KH12', 'price' => '500.000'],
        ['name' => 'Khóa từ KT02', 'price' => '4.500.000'],
        ['name' => 'Khóa từ KT01', 'price' => '1.750.000'],
        ['name' => 'Khóa sảnh KS02', 'price' => '1.500.000'],
        ['name' => 'Khóa cửa KH03', 'price' => '650.000'],
    ],

    'accessories' => [
        ['name' => 'Mắt thần MT01', 'price' => '250.000'],
        ['name' => 'Chốt an toàn 01', 'price' => '70.000'],
        ['name' => 'Hít chặn HC01', 'price' => '55.000'],
        ['name' => 'Clemon 01', 'price' => '105.000'],
        ['name' => 'Mắt thần MT02', 'price' => '80.000'],
    ],

    'posts' => [
        ['title' => 'Thi công lắp đặt cửa gỗ nhựa composite tại Hà Nội – Ưu đãi khách hoàn thiện nhà', 'date' => '10/12/2025', 'excerpt' => 'Cửa gỗ nhựa composite được sự chú ý đáng kinh ngạc và được người tiêu dùng đón nhận tích cực nhờ độ bền vượt trội.', 'image' => $img('Slide-cua-composite-tai-ha-noi.jpg')],
        ['title' => 'Công ty nhộn nhịp triển khai lắp đặt cửa composite cho khách hàng mùa hoàn thiện nhà cuối năm', 'date' => '26/11/2025', 'excerpt' => 'Cuối năm luôn là thời điểm nhu cầu hoàn thiện và trang hoàng tổ ấm tăng mạnh.', 'image' => $img('the-golden-an-khanh.jpg')],
        ['title' => 'Thi công lắp các mẫu cửa composite cho khách mùa hoàn thiện nhà cuối năm 2025', 'date' => '15/10/2025', 'excerpt' => 'Cửa Composite chống cong vênh – mối mọt – ẩm mốc vượt trội, phù hợp khí hậu Việt Nam.', 'image' => $img('cap-nhat-mau-cua-composite-15.jpg')],
        ['title' => 'Cập nhật mẫu cửa Composite mới lắp cho khách 2025', 'date' => '28/07/2025', 'excerpt' => 'Bộ sưu tập mẫu cửa composite mới nhất với thiết kế hiện đại, sang trọng.', 'image' => $img('Cua-Bigdoor-moi-2.jpg')],
        ['title' => 'Những điều cần biết về cửa gỗ nhựa composite 2025', 'date' => '20/06/2025', 'excerpt' => 'Hiện nay, trên thị trường có đa dạng mẫu mã cửa gỗ, tìm hiểu ưu nhược điểm từng loại.', 'image' => $img('Slide-cua-go-composite.jpg')],
    ],

    'heroCriteria' => [
        'Chịu Nước – Bền Đẹp',
        'Giá Gốc Tại Xưởng',
        'Bảo Hành 3 Năm',
        'Lắp Đặt Tận Nơi',
    ],

    'heroImages' => [
        'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1600&h=700&fit=crop',
        'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1600&h=700&fit=crop',
        'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=1600&h=700&fit=crop',
        'https://images.unsplash.com/photo-1600573472591-ee6b68c0c8c0?w=1600&h=700&fit=crop',
    ],

    'advantages' => [
        ['icon' => '✦', 'title' => 'Sang trọng bền đẹp'],
        ['icon' => '💧', 'title' => 'Chịu nước tuyệt đối'],
        ['icon' => '🎨', 'title' => 'Đa dạng kiểu mẫu'],
        ['icon' => '🏭', 'title' => 'Giá gốc tại xưởng'],
        ['icon' => '🛡', 'title' => 'Bảo hành 3 năm'],
        ['icon' => '📞', 'title' => 'Tư vấn 24/7'],
    ],
];

$data['premiumProducts'] = $enrichProducts($data['premiumProducts'], 'premium');
$data['compositeSampleProducts'] = $enrichProducts($data['compositeSampleProducts'], 'composite');
$data['waterproofSampleProducts'] = $enrichProducts($data['waterproofSampleProducts'], 'waterproof');
$data['newSampleProducts'] = $enrichProducts($data['newSampleProducts'], 'new');
$data['smartLocks'] = $enrichProducts($data['smartLocks'], 'smart_lock');
$data['premiumAccessories'] = $enrichProducts($data['premiumAccessories'], 'accessory');

return array_merge($data, require __DIR__ . '/data-2.php');
