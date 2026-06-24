<?php

$sectionMeta = [
    'flat_glass' => [
        'features' => [
            'Thiết kế tấm phẳng hoặc ô kính sang trọng, tăng ánh sáng tự nhiên cho không gian',
            'Vật liệu composite chống cong vênh, ổn định kích thước theo thời gian',
            'Bề mặt vân gỗ chân thực, chống ẩm mốc và dễ vệ sinh',
            'Cách âm tốt, phù hợp phòng khách, phòng ngủ và cửa ra vào',
            'Giá tốt tại xưởng, bảo hành chính hãng 3 năm',
        ],
        'why_use' => '{name} thuộc dòng cửa composite phẳng và ô kính — một trong những mẫu được ưa chuộng nhất hiện nay. Thiết kế ô kính giúp không gian thoáng đãng, sáng sủa mà vẫn đảm bảo riêng tư. Vật liệu composite vượt trội hơn gỗ tự nhiên về khả năng chống nước, không bị mối mọt hay co ngót trong khí hậu nóng ẩm Việt Nam. Đây là lựa chọn lý tưởng cho nhà phố, chung cư và biệt thự cần cửa đẹp, bền với chi phí hợp lý.',
    ],
    'decorative' => [
        'features' => [
            'Đường chỉ trang trí tinh xảo, tạo điểm nhấn sang trọng cho cánh cửa',
            'Composite cao cấp chống va đập, không cong vênh theo mùa',
            'Đa dạng mẫu chỉ: cổ điển, hiện đại, phù hợp nhiều phong cách nội thất',
            'Bề mặt chống trầy xước, giữ màu sắc bền lâu',
            'Lắp đặt nhanh, đo đạc tận nơi miễn phí tại Hà Nội',
        ],
        'why_use' => '{name} mang đường nét chỉ trang trí đặc trưng, tạo chiều sâu và sự tinh tế cho không gian sống. Khác với cửa phẳng đơn giản, mẫu chỉ trang trí giúp căn nhà thể hiện gu thẩm mỹ riêng mà vẫn giữ được ưu điểm vượt trội của cửa nhựa composite: chống nước, chống mối, không cần sơn sửa định kỳ. Phù hợp phòng ngủ master, phòng khách và các không gian cần sự nổi bật.',
    ],
    'cnc' => [
        'features' => [
            'Huỳnh âm CNC cắt chính xác, đường nét sắc nét và đồng đều',
            'Thiết kế 2D/3D đa dạng, từ cổ điển đến hiện đại',
            'Lõi composite cứng cáp, chịu lực va đập tốt',
            'Chống ẩm mốc tuyệt đối, bền bỉ trong môi trường nóng ẩm',
            'Nhiều tùy chọn kích thước theo yêu cầu công trình',
        ],
        'why_use' => '{name} sử dụng công nghệ CNC hiện đại để tạo họa tiết huỳnh âm sắc nét, mang vẻ đẹp như cửa gỗ tự nhiên cao cấp. Đường vân và chi tiết được gia công chính xác từng milimet, đảm bảo tính thẩm mỹ đồng nhất trên toàn bộ cánh cửa. Đây là dòng sản phẩm dành cho khách hàng yêu thích phong cách cổ điển, tân cổ điển hoặc sang trọng với ngân sách hợp lý hơn cửa gỗ thật.',
    ],
    'phao_noi' => [
        'features' => [
            'Phào nổi tạo khối 3D nổi bật, sang trọng và độc đáo',
            'Kết hợp ô kính hoặc tấm kính mờ tăng tính thẩm mỹ',
            'Composite chống nước, phù hợp mọi vị trí trong nhà',
            'Hoàn thiện bề mặt mịn, chống bám bụi và dễ lau chùi',
            'Bảo hành 3 năm, hỗ trợ lắp đặt tận nơi',
        ],
        'why_use' => '{name} nổi bật với thiết kế phào nổi tạo chiều sâu và sự sang trọng cho không gian. Phào nổi kết hợp ô kính vừa đảm bảo ánh sáng tự nhiên vừa tạo điểm nhấn kiến trúc ấn tượng. Sản phẩm phù hợp cửa chính, phòng khách và các công trình cần thể hiện đẳng cấp ngay từ lối vào, với độ bền vượt trội so với cửa gỗ truyền thống.',
    ],
    'two_panel' => [
        'features' => [
            'Thiết kế 2 cánh rộng rãi, phù hợp cửa ra vào và phòng khách lớn',
            'Đa dạng kiểu: phẳng, lệch huỳnh âm, cân ô kính, chỉ nhôm',
            'Khung composite chắc chắn, chịu lực và chống biến dạng',
            'Đồng bộ phụ kiện cao cấp: bản lề, khóa, tay nắm',
            'Đo đạc và lắp đặt theo kích thước thực tế công trình',
        ],
        'why_use' => '{name} là giải pháp cửa 2 cánh dành cho không gian rộng cần sự thoáng đãng và sang trọng. Với nhiều biến thể từ phẳng đến ô kính, chỉ nhôm hay huỳnh âm lệch, gia chủ dễ dàng chọn mẫu phù hợp phong cách nội thất. Cửa composite 2 cánh mang lại vẻ đẹp như gỗ tự nhiên nhưng không lo cong vênh, mối mọt hay phồng rộp — đặc biệt quan trọng với cửa kích thước lớn tiếp xúc thời tiết bên ngoài.',
    ],
];

$enrichProducts = function (array $products, string $category) use ($sectionMeta): array {
    $meta = $sectionMeta[$category];

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

$compositeDoorSections = [
    [
        'title' => 'CỬA GỖ COMPOSITE PHẲNG VÀ Ô KÍNH',
        'slug' => 'composite-phang-o-kinh',
        'category' => 'flat_glass',
        'products' => [
            ['name' => 'Cửa nhựa Composite Ô Kính - PT02', 'price' => '3.100.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/Untitled-1-247x300.png'],
            ['name' => 'Cửa nhựa Composite mẫu phẳng - PT01', 'price' => '2.700.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/cua_nhua_composite_pt01-247x300.png'],
            ['name' => 'Cửa nhựa Composite Ô Kính - PK04', 'price' => '3.050.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/Untitled-247x300.png'],
            ['name' => 'Cửa nhựa Composite Ô Kính - PK03', 'price' => '2.950.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/cua_nhua_composite-247x300.png'],
            ['name' => 'Cửa nhựa Composite Ô Kính - PK02', 'price' => '2.900.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/Untitled-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite Ô Kính - PK01', 'price' => '2.850.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/PK-01-247x300.jpg'],
        ],
    ],
    [
        'title' => 'CỬA GỖ COMPOSITE CHỈ TRANG TRÍ',
        'slug' => 'composite-chi-trang-tri',
        'category' => 'decorative',
        'products' => [
            ['name' => 'Cửa nhựa Composite Chỉ Trang Trí - CN09', 'price' => '3.100.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2024/03/CN09-1-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite Chỉ Trang Trí - CN08', 'price' => '3.050.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/CN08-2-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite Chỉ Trang Trí - CN07', 'price' => '3.000.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/CN07-1-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite Chỉ Trang Trí - CN06', 'price' => '2.950.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/32-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite Chỉ Trang Trí - CN05', 'price' => '2.900.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/CN05-1-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite Chỉ Trang Trí - CN04', 'price' => '2.900.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/CN04-1-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite Chỉ Trang Trí - CN03', 'price' => '2.850.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2023/04/CN03-1-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite Chỉ Trang Trí - CN02', 'price' => '2.850.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/09/CN-01-1-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite Chỉ Trang Trí - CN 01', 'price' => '2.800.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/09/CN01-247x300.jpg'],
        ],
    ],
    [
        'title' => 'CỬA GỖ COMPOSITE HUỲNH ÂM CNC',
        'slug' => 'composite-huynh-am-cnc',
        'category' => 'cnc',
        'products' => [
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA13', 'price' => '3.300.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA.13-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA12', 'price' => '3.250.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA12-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA11', 'price' => '3.200.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA11-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA10', 'price' => '3.150.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA10-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA09', 'price' => '3.100.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA.09-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA08', 'price' => '3.100.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA.08-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA07', 'price' => '3.050.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA.07-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA06', 'price' => '3.000.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA.06-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA05', 'price' => '2.950.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA.05-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC 2D- PA04', 'price' => '2.950.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA04-247x300.png'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA02', 'price' => '2.900.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA.02-247x300.jpg'],
            ['name' => 'Cửa nhựa Composite huỳnh âm CNC - PA 01', 'price' => '2.900.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PA.01-247x300.png'],
        ],
    ],
    [
        'title' => 'CỬA GỖ COMPOSITE PHÀO NỔI VÀ Ô KÍNH',
        'slug' => 'composite-phao-noi-o-kinh',
        'category' => 'phao_noi',
        'products' => [
            ['name' => 'Cửa nhựa Composite mâu vòm', 'price' => '3.350.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2024/03/418943791_333342363014336_2863496664955341072_n-247x300.jpg'],
            ['name' => 'Cửa Nhựa Composite Phào Nổi – PN04', 'price' => '3.150.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PN.04-247x300.png'],
            ['name' => 'Cửa Nhựa Composite Phào Nổi – PN03', 'price' => '3.100.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PN.03-247x300.png'],
            ['name' => 'Cửa Nhựa Composite Phào Nổi - PN02', 'price' => '3.050.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PN.02-247x300.png'],
            ['name' => 'Cửa Nhựa Composite Phào Nổi - PN01', 'price' => '3.000.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2022/08/PN01-247x300.png'],
        ],
    ],
    [
        'title' => 'CỬA NHỰA COMPOSITE MẪU 2 CÁNH',
        'slug' => 'composite-mau-2-canh',
        'category' => 'two_panel',
        'products' => [
            ['name' => 'Cửa nhựa Composite 2 canh cân ô kính- CP-05', 'price' => '5.500.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2024/03/CP-05-247x300.png'],
            ['name' => 'Cửa nhựa Composite 2 canh lệc huỳnh âm- CP-04', 'price' => '5.200.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2024/03/CP-04-247x300.png'],
            ['name' => 'Cửa nhựa Composite 2 canh phẳng- CP-023', 'price' => '4.800.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2024/03/CP-03-247x300.png'],
            ['name' => 'Cửa nhựa Composite 2 canh chỉ nhôm - CP-02', 'price' => '5.000.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2024/03/CP02-247x300.png'],
            ['name' => 'Cửa nhựa Composite 2 canh - CP-01', 'price' => '4.500.000', 'image' => 'https://cuagonhuacomposite.com.vn/wp-content/uploads/2024/03/CN-01-247x300.png'],
        ],
    ],
];

foreach ($compositeDoorSections as &$section) {
    $section['products'] = $enrichProducts($section['products'], $section['category']);
    $section['chunks'] = array_chunk($section['products'], 5);
}
unset($section);

return ['compositeDoorSections' => $compositeDoorSections];
