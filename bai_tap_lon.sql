-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2018 lúc 05:00 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bai_tap_lon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_dh` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `soLuong` int(11) NOT NULL,
  `mauSac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tv` int(10) UNSIGNED NOT NULL,
  `tinhTrang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang_khach`
--

CREATE TABLE `don_hang_khach` (
  `id` int(10) UNSIGNED NOT NULL,
  `hoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `soLuong` int(10) UNSIGNED NOT NULL,
  `mauSac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhTrang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `id_tv` int(10) UNSIGNED NOT NULL,
  `soLuong` int(11) NOT NULL,
  `mauSac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_san_xuat`
--

CREATE TABLE `hang_san_xuat` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenHSX` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_san_xuat`
--

INSERT INTO `hang_san_xuat` (`id`, `tenHSX`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(4, 'Huawei');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_11_02_104252_quan_create_table_users', 1),
(2, '2018_11_03_132019_quan_create_table_hang_san_xuat', 2),
(3, '2018_11_03_132034_quan_create_table_san_pham', 2),
(4, '2018_11_05_010807_quan_create_table_tin_cong_nghe', 3),
(5, '2018_11_05_023948_alter_tin_cong_nghe', 4),
(6, '2018_11_05_105026_alter_table_users', 5),
(7, '2018_11_19_063224_quan_create_gio_hang', 6),
(8, '2018_11_19_063328_quan_create_don_hang', 6),
(9, '2018_11_19_063459_quan_create_chi_tiet_don_hang', 6),
(10, '2018_11_19_085840_quan_create__don_hang_khach', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenSP` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moTa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thongTinChiTiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `mauSac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baoHanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khuyenMai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manHinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bangTan_Sim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boNhoTrong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heDieuHanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camTruoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camSau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_hsx` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `tenSP`, `link`, `moTa`, `thongTinChiTiet`, `gia`, `mauSac`, `baoHanh`, `khuyenMai`, `anh`, `manHinh`, `bangTan_Sim`, `boNhoTrong`, `ram`, `cpu`, `gpu`, `heDieuHanh`, `camTruoc`, `camSau`, `pin`, `id_hsx`) VALUES
(1, 'iPhone 7 Plus 32Gb Cũ Nguyên Bản', 'iphone-7-plus', 'Đẹp như mới, tặng kèm sạc, cable chính hãng', 'iPhone 7 Plus cũ bản quốc tế mới xài (cam kết chỉ bán nguyên bản 100%, đẹp long lanh không móp méo, cấn xước) xuất xứ từ Mỹ, Nhật, Sing…Sản phẩm được kiểm tra kĩ lưỡng đảm bảo hoạt động ổn định, pin còn rất tốt trước khi đến tay người dùng. Đặc biệt có chế độ bảo hành siêu tốc 12 tháng, cả rơi móp, 1 đổi 1 trong 45 ngày (dCareS) cho quý khách chọn lựa để an tâm với iPhone 7 Plus cũ tại Di Động Thông Minh. Bộ sản phẩm chuẩn gồm: thân máy, sạc, cable pisen, dán màn hình, và que chọc sim.', 10390000, 'Bạc, Đen, Đỏ, Hồng, Jet Black, Vàng', '12 tháng', '♥30 ngày đổi trả !\r\n<br>\r\n♥Cảm nhận chất zin khác biệt !\r\n<br>\r\n♥Bảo hành 12 tháng - Yên tâm sử dụng\r\n<br>\r\n♥Tặng sạc, cable Apple chính hãng Titan trị giá 300.000vnđ', 'img/anh-san-pham/iphone-7-plus.png', 'IPS LCD, 5.5\", Full HD', '2G/3G, LTE', '32 GB', '3 GB', 'Apple A10 Fusion', 'PowerVR Series7XT Plus (six-core graphics)', 'iOS 10.0.1, upgradable to iOS 11.4.1', 'Dual 12 MP', '7 MP, f/2.2, 32mm', 'Non-removable Li-Ion 2900 mAh battery (11.1 Wh)', 1),
(2, 'Iphone Xs Max', 'iphone-xs-max', 'Giảm giác sốc', 'Đặc điểm nổi bật của iPhone Xs Max 64GB  Tìm hiểu thêm Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim  Hoàn toàn xứng đáng với những gì được mong chờ, phiên bản cao cấp nhất iPhone Xs Max của Apple năm nay nổi bật với chip A12 Bionic mạnh mẽ, màn hình rộng đến 6.5 inch, cùng camera kép trí tuệ nhân tạo và Face ID được nâng cấp. Thiết kế cao cấp với viền thép không gỉ và mặt kính cường lực Điện thoại iPhone Xs Max sở hữu lối thiết kế vô cùng đẹp mắt với những đường cong mềm mại được thừa hưởng từ chiếc iPhone đời trước đó.  Thiết kế điện thoại iPhone Xs Max chính hãng Tuy nhiên, iPhone Xs Max lại có một thân hình to bản ngang bằng với kích thước dòng Plus nhưng chứa đựng một màn hình rộng lớn lên đến 6.5 inch.  Màn hình điện thoại iPhone Xs Max chính hãng  Nhờ thế mà bạn sẽ có một không gian trải nghiệm vô cùng rộng rãi để thưởng thức những bộ phim chất lượng cao được trở nên trọn vẹn.  Thiết kế điện thoại iPhone Xs Max chính hãng Màn hình OLED chất lượng cao rộng 6.5 inch đầu tiên của Apple Với công nghệ Super Retina kết hợp tấm nền OLED trên iPhone Xs Max đem lại dải màu sắc cực kì sống động và sắc nét đến từng chi tiết.  Màn hình điện thoại iPhone Xs Max chính hãng  Bên cạnh đó, Apple còn tích hợp thêm công nghệ HDR10 giúp chất lượng hình ảnh được nâng cao và mượt mà hơn đáng kể.  Màn hình điện thoại iPhone Xs Max chính hãng  Việc sở hữu màn hình lớn đem đến cho bạn khá nhiều tiện ích như dễ dàng chỉnh sửa ảnh, xem phim, lướt web nhưng sẽ khó khăn hơn trong việc di chuyển.  Hiệu năng đỉnh của đỉnh với chip Apple A12 Là một flagship cao cấp, iPhone Xs Max được Apple trang bị cho con chip mới toanh hàng đầu của hãng mang tên Apple A12 bionic.  Chip A12 bionic được xây dựng trên tiến trình 7nm đầu tiên mà hãng sản xuất với 6 nhân đáp ứng vượt trội trong việc xử lý các tác vụ và khả năng tiết kiệm năng lượng tối ưu.  Chơi game trên điện thoại iPhone Xs Max chính hãng  Hơn nữa, iPhone Xs Max còn có bộ xử lý đồ họa mạnh mẽ được Apple thiết kế riêng giúp hiệu năng được cải thiện rất lớn về mặt đồ họa của máy.  Trải nghiệm điện thoại iPhone Xs Max chính hãng Chưa dừng lại ở đó, máy còn được tích hợp trí thông minh nhân tạo giúp phần cứng tối ưu hiệu suất, nhờ đó mà các thao tác của bạn được xử lý một cách nhanh chóng hơn.  Ấn tượng về camera kép tích hợp trí tuệ nhân tạo Dù không sở hữu thông số camera khủng nhưng iPhone XS Max luôn cho thấy sự đẳng cấp của mình về khả năng nhiếp ảnh với cụm camera kép độ phân giải 12MP.  Máy được trang bị hệ thống xử lý hình ảnh chất lượng cân bằng sáng, giảm nhiễu, tăng cường độ phơi sáng, màu da sao cho phù hợp và tự nhiên nhất.  Camera sau điện thoại iPhone Xs Max chính hãng  Cùng với đó là khả năng điều chỉnh khẩu độ ấn tượng từ f/1.4 đến f/16 ngay trên bức ảnh sau khi chụp ảnh với chế độ chân dung.  Chưa dừng lại ở đó, máy còn được tích hợp thêm công nghệ Smart HDR giúp tái tạo hình ảnh và cho ra một bức hình với độ sáng tốt nhất.  Camera sau điện thoại iPhone Xs Max chính hãng  Ngoài ra, iPhone XS Max còn được hỗ trợ bởi trí thông minh nhân tạo đem đến khả năng tự động điều chỉnh màu sắc, độ sáng và độ tương phản sao cho phù hợp với từng vật thể khác nhau.  Một số tính năng cao cấp được cập nhật và bổ sung Face ID đã được Apple cải tiến về khả năng bảo mật cũng như cho tốc độ mở khóa được nhanh hơn nhờ các thuật toán mới..  Mở khoá điện thoại iPhone Xs Max chính hãng  Bên cạnh đó, tính năng Animoji cũng được cập nhật thêm một số biểu tượng mới trông khá ngộ nghĩnh và đáng yêu.  Animojis trên điện thoại iPhone Xs Max chính hãng  Với hệ thống camera TrueDepth nay bạn có thể tự tạo cho bản thân những bức ảnh ấn tượng với công nghệ thực tế ảo tăng cường AR.  Ngoài ra, hệ thống âm thanh 2 chiều trên siêu phẩm mới được Apple tinh chỉnh lại cho dải âm rộng, âm thanh sống động hơn hay khả năng kháng nước và bụi cũng được nâng cấp lên thành IP 68 đảm bảo an toàn hơn cho máy.', 32990000, 'Bạc, Xám, Vàng Đồng', '12 Tháng', 'Giảm ngay 2 triệu khi thanh toán trực tuyến qua thẻ tín dụng VPBank (từ 13 - 30/11, số lượng giới hạn) <br>Cơ hội trúng 61 xe Wave Alpha khi trả góp Home Credit', 'img/anh-san-pham/iphone-xs-max-gray-600x600.jpg', 'OLED, 6.5\", Super Retina', 'Nano SIM & eSIM', '64Gb', '4Gb', 'Apple A12 Bionic 6 nhân', 'Apple GPU 4 nhân', 'ios 12', '7 MP', '2 camera 12 MP', '3174 mAh', 1),
(3, 'Samsung Galaxy A6+ (2018)', 'samsung-galaxy-a6-plus', 'Mua online tặng thêm quà', 'Sau nhiều đồn đoán thì cuối cùng Samsung Galaxy A6+ (2018) đã chính thức được Samsung  giới thiệu với một chút đổi mới trong thiết kế cũng như về camera của máy. Thiết kế quen thuộc Lấy cảm hứng từ chiếc Samsung J7 Pro, Samsung Galaxy A6+ (2018) được hoàn thiện từ chất liệu kim loại nguyên khối và được tô điểm bởi 2 dải ăng ten chữ \"U\" nằm cách điệu trên và dưới ở mặt lưng máy.  Thiết kế điện thoại Samsung Galaxy A6+ (Plus)  Mặt kính cong 2.5D giúp thao tác chạm mượt mà  Các góc cạnh của máy được bo cong mềm mại, uyển chuyển có chút nữ tính nhưng thay vào đó là khả năng cầm nắm chắc chắn và khá đầm tay.  Mặt lưng điện thoại Samsung Galaxy A6+ (Plus)  Mặt lưng được làm nhám giúp hạn chế được mồ hôi và dấu vân tay  Cảm biến vân tay có thiết kế tương tự như trên Flagship Samsung S9 Plus được người dùng đánh giá cao khi mang đến sự thuận tiện và dễ dàng hơn trong việc mở khóa máy.  Màn hình rộng 6 inch Máy được trang bị màn hình kích thước 6 inch với độ phân giải Full HD+ cùng tấm nền Super AMOLED hứa hẹn sẽ mang đến một màu sắc sống động, rực rỡ và vô cùng nịnh mắt.  Màn hình điện thoại Samsung Galaxy A6+ (Plus)  Màn hình tràn viền cạnh trông vô cùng quyến rũ  Hơn nữa, với tỉ lệ màn hình 18.5:9 mà Samsung đang áp dụng trên các dòng điện thoại cao cấp của mình sẽ mang đến một không gian trải nghiệm vô cùng rộng rãi nhưng vẫn đảm bảo máy luôn vừa vặn trong lòng bàn tay của bạn.  Hiệu năng khá trong tầm giá Sức mạnh không đến từ con chip Exynos \"cây nhà lá vườn\" mà chính là Snapdragon 450 được trang bị trên Galaxy A6+ (2018) với một hiệu năng ổn định cùng khả năng tiết kiệm năng lượng tối ưu.  Đánh giá điện thoại Samsung Galaxy A6+ (Plus)  Hỗ trợ 4G CAT 6 tốc độ truyền tải dữ liệu cao qua internet  Kèm theo đó là 4 GB RAM và 32 GB bộ nhớ trong sẽ đảm đương một cách mượt mà với các tác vụ đa nhiệm cùng khả năng lưu trữ game và ứng dụng thoải mái mà không cần đến một thẻ nhớ bổ sung.  Cảm biến vân tay mặt lưng trên điện thoại Samsung Galaxy A6+ (Plus)  Mở khóa nhanh chóng với vân tay một chạm  Bên cạnh đó, máy sẽ được cài sẵn Android 8.0 (Oreo) với nhiều tùy biến cao đến từ Samsung giúp giao diện của máy trở nên thân thiện và hiệu năng được cải tiến.  Ấn tượng về camera Bằng việc được trang bị cụm camera trước có độ phân giải lên đến 24 MP trên Galaxy A6+ (2018) cho thấy được Samsung đang dần chăm chút hơn đến việc cải thiện khả năng chụp ảnh selfie mà các đối thủ của nó đang làm khá tốt.  Camera trên điện thoại Samsung Galaxy A6+ (Plus)  Tích hợp đèn Flash trợ sáng cùng tính năng làm đẹp chuyên nghiệp  Bên cạnh đó, cụm camera selfie này có thêm nhiều tính năng mới mẻ như có góc chụp rộng, công nghệ Sticker AR cực kì thú vị.  Một chút về camera sau bao gồm 2 ống kính với độ phân giải là 16 MP và 5 MP cho chất lượng ảnh chụp tương đối khá, cùng với đó là khả năng chụp xóa phông mềm mại, hay chế độ chụp nâng cao như HDR, Panorama.  Camera kép mặt sau trên điện thoại Samsung Galaxy A6+ (Plus)  Hỗ trợ khả năng quay phim FullHD 1080p@30fps  Dung lượng pin 3500 mAh Với dung lượng pin như trên hứa hẹn máy sẽ cho bạn một thời gian sử dụng tương đối thoải mái trong khoảng 1 ngày mà không cần phải suy nghĩ nhiều.  Ngoài ra, máy còn được trang bị kết nối OTG , 2 Sim 2 sóng cùng khả năng mở khóa bằng khuôn mặt.', 8290000, 'Xanh Dương, Đen, Vàng Đồng', '12 tháng', 'Gói quà tặng Galaxy xem phim & uống cafe cuối tuần <br>Cơ hội trúng 61 xe Wave Alpha khi trả góp <br>Home Credit Giảm ngay 1.3 triệu (áp dụng từ 11/11 - 30/11)', 'img/anh-san-pham/samsung-galaxy-a6-plus-2018-xanh-600x600.jpg', 'Super AMOLED, 6\", Full HD+', '2 Nano SIM, Hỗ trợ 4G', '32Gb', '4 GB', 'Qualcomm Snapdragon 450 8 nhân 64-bit', 'Adreno 506', 'Android 8.0 (Oreo)', '24 MP', '16 MP và 5 MP (2 camera)', '2 Nano SIM, Hỗ trợ 4G', 2),
(4, 'Xiaomi Mi8 Pro', 'xiaomi-mi8-pro', 'Tặng kèm tai nghe', 'Nội dung đang được cập nhật', 14990000, 'Đen', '12 Tháng', 'Tặng vòng đeo tay Mi Band 3', 'img/anh-san-pham/xiaomi-mi-8-pro-black-online-600x600.jpg', 'Super AMOLED, 6.21\", Full HD+', '2 Nano SIM, Hỗ trợ 4G', '128GB', '8GB', 'Snapdragon 845 8 nhân', 'Adreno 630', 'Android 8.1 (Oreo)', '20 MP', '2 camera 12 MP', '3000 mAh, có sạc nhanh', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_cong_nghe`
--

CREATE TABLE `tin_cong_nghe` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenTin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_nv` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_cong_nghe`
--

INSERT INTO `tin_cong_nghe` (`id`, `tenTin`, `noiDung`, `anh`, `created_at`, `updated_at`, `id_nv`) VALUES
(1, 'Flickr dừng cung cấp dịch vụ lưu trữ miễn phí 1TB, giới hạn 1.000 file', 'Red Dead Redemption 2 ra mắt gần đây có dung lượng 105 GB, còn Shadow of War là 98 GB và Final Fantasy 15 lên tới 150 GB. Câu hỏi được đặt ra là tại sao 3 game này nói riêng và các game AAA 3D khác nói chung lại \"ngốn\" quá nhiều dung lượng ổ cứng?\r\nDưới đây là 2 nguyên nhân chính khiến những tựa game AAA (game bom tấn) 3D thường có dung lượng rất \"khủng\", chứ không nhẹ nhàng và tải nhanh như Minecraft hoặc Stardew Valley mà các bạn hay giải sầu trên di động.\r\n\r\n1. Tệp game độ phân giải cao có dung lượng lớn hơn\r\nĐộ khoảng 20 năm về trước lúc game 3D mới ra mắt, mọi nhân vật hay chi tiết trong game đều khá đơn giản vì các nhà phát triển chỉ mới làm quen với loại đồ họa này. Đơn cử là nhân vật Solid Snake trong Metal Gear Solid (xem ảnh bên dưới), tựa game phát hành năm 1998 thuộc series nổi tiếng Metal Gear.\r\n\r\nMetal Gear Solid, 1998\r\n\r\nMetal Gear Solid 1998\r\nCó thể nói đồ họa 3D trong Metal Gear Solid được xem là ấn tượng nhất vào năm 1998 khi so với bất kỳ tựa game 3D nào khác trên thị trường. Tuy nhiên, bây giờ nhìn vào nhân vật Snake, trông anh ta khá đơn điệu và thô cứng: Thậm chí bạn có thể đếm số đa giác tạo nên phần đầu nhân vật, hay các chi tiết như cỗ xe tăng thực chất là ảnh 2D đặt trên các khối đa giác để tạo cảm giác \"3D\" mà thôi, nhìn rõ hơn nữa còn thấy các điểm ảnh.\r\n\r\nYếu tố để mang đến hình ảnh độ phân giải cao và chân thật, bạn cần có một cỗ máy xử lý đồ họa chuyên sâu, mà thời điểm đó hệ máy PlayStation chưa đạt đến đẳng cấp như bây giờ.\r\n\r\nBên cạnh việc không thể render các nhân vật, môi trường phức tạp mà PS1 chỉ có thể xuất ra video ở độ phân giải 320 x 240 pixel mà thôi.\r\n\r\nĐúng là thời nào máy nấy, độ phân giải vừa nêu lại phù hợp với những chiếc TV thập niên 90. Những tựa game có nhân vật 3D đơn giản, chi tiết 2D độ phân giải thấp có dung lượng chỉ cỡ 2 chiếc đĩa CD, như Metal Gear Solid chỉ có 1.5 GB.\r\n\r\nGame PC lúc đó có thể nặng hơn vì độ phân giải xuất ra màn hình cao hơn, song chúng vẫn chẳng là gì so với game hiện đại ngày nay.\r\n\r\nHình ảnh bên dưới là Solid Snake trong Metal Gear Solid 5 phát hành năm 2015, khác biệt \"một trời một vực\" so với bản 1998.\r\n\r\nSolid Snake trong Metal Gear Solid V: The Phantom Pain, 2015\r\n\r\nSolid Snake trong Metal Gear Solid V: The Phantom Pain 2015\r\nKhuôn mặt của Snake được đồ họa nhìn y như người thật. Nếu bỏ miếng che mắt và tóc ra, thật khó tin khi nói rằng đây là hình ảnh nhân vật kỹ thuật số. Để có được độ sắc nét, chi tiết đến thế là do độ phân giải của game được tăng lên mức Full HD 1080p hoặc 4K. Bạn sẽ khó lòng thấy được các điểm ảnh trừ khi phóng thật to một chi tiết hình ảnh nào đó trong game.\r\n\r\nBên cạnh đó, các hiệu ứng thị giác phức tạp như ánh sáng, các vật liệu khác nhau đều được xử lý, thể hiện trong thời gian thực, ở một môi trường mà người chơi có thể tương tác với chúng chứ không phải được dựng sẵn như trong những bộ phim CG (Computer Graphic).\r\n\r\nVới những cải tiến về đồ họa và thị giác nói trên, Metal Gear Solid 5 hoàn toàn xứng đáng với dung lượng gần 40 GB, hơn 26 lần so với phiên bản của 1998.\r\n\r\nQuá trình cài đặt âm thanh game Titanfall trên PC\r\nQuá trình cài đặt gói âm thanh trong game Titanfall trên PC\r\nNgoài ra, âm thanh trong game cũng là yếu tố khiến cho game 3D có dung lượng cao hơn. Chẳng hạn như trước đây, nhạc nền trong game chỉ là những nốt nhạc đơn điệu thì ngày nay, chúng cần phải gây ấn tượng mạnh với game thủ nhất là khi mới bước vào game, từ lời thoại, tiếng động xung quanh cho đến hơi thở của nhân vật.\r\n\r\nĐôi khi những tệp âm thanh này không được nén lại (để hệ máy console hay PC không mất phải thêm công đoạn xử lý âm thanh) nên dung lượng của chúng còn cao hơn nữa. Minh chứng là bản game Titanfall 2014 được phát hành cho PC, chỉ tính riêng các tệp âm thanh (không nén) đã chiếm đến 35 GB.\r\n\r\n2. Thế giới trong game 3D được nới rộng hơn trước rất nhiều\r\nNgoài đồ họa và âm thanh ngày càng \"chất\", chính bản thân game cũng đang bành trướng không ngừng. Hãy xem bức ảnh dưới đây về bản đồ trong dòng game Grand Theft Auto (GTA).\r\n\r\nNếu GTA III (2001) được xem là tựa game hành động có thế giới mở rộng lớn nhất tại thời điểm phát hành thì với phiên bản GTA: San Andreas ra mắt sau đó chỉ 3 năm, thế giới trong game đã được nhà sản xuất mở rộng thêm gấp 3 lần. Trong phiên bản GTA V mới nhất, nó đã rộng hơn 10 lần bao gồm nhiều loại địa hình và môi trường hơn.\r\n\r\nBản đồ trong dòng game Grand Theft Auto, từ năm 1997-2013\r\n\r\nBản đồ trong dòng game Grand Theft Auto, từ năm 1997-2013\r\nDĩ nhiên, đây không phải là một quy tắc cứng nhắc và bắt buộc các tựa game khác phải sở hữu bản đồ lớn giống như GTA. Ví dụ, Overwatch hay Street Fighter chỉ có vài thế giới nhất định theo từng stage, nhưng sự bùng nổ của thể loại game thế giới mở trong 10 năm qua đã mở ra cuộc đua giữa các nhà sản xuất trong việc tạo ra những tựa game thế giới mở rộng lớn nhất có thể.\r\n\r\nMột số tựa game phổ biến nhất trên thị trường như Far Cry, Assassin\'s Creed, Just Cause, Borderlands, The Elder Scrolls, Fallout hay The Witcher đều có một thế giới khổng lồ, mở rộng quy mô theo yêu cầu.\r\n\r\nNhư thế giới trong Just Cause 3, nếu thực tế hóa bản đồ thì nó rộng đến 1.000 km2. Điều đó khiến dung lượng các game ngày càng nặng hơn, tất nhiên nhà sản xuất có thể giảm bớt dung lượng bằng cách dừng việc lặp đi lặp lại các chi tiết như viên đá, bức tường,...\r\n\r\nAssassin\'s Creed: Odyssey 2018\r\n\r\nAssassin\'s Creed: Odyssey 2018\r\nNgay cả những tựa game có lối chơi truyền thống như Doom cũng ngày càng nặng nề hơn do có nhiều cấp độ chơi, đồ họa và âm thanh phức tạp.\r\n\r\nỔ cứng lưu trữ ngày càng rẻ, internet đã nhanh hơn\r\nVào những năm 90, máy tính nào mà có ổ cứng đến 40 GB là \"ngon lành cành đào\" thì bây giờ, ổ cứng HDD 1 TB, 2 TB hay thậm chí nhiều hơn đã quá phổ biến. Không chỉ có máy tính mà bộ nhớ trong trên smartphone cũng đã chạm ngưỡng 512 GB hay 1 TB (nếu gắn thêm thẻ nhớ microSD).\r\n\r\nTổng dung lượng trên máy tính để bàn này khoảng 4 TB\r\n\r\nTổng dung lượng bộ nhớ trên máy tính để bàn này khoảng 4 TB\r\nỔ cứng HDD truyền thống có tốc độ chậm hơn ổ SSD nhưng bù lại giá thành lại rẻ hơn. Bạn có thể mua một cái ổ cứng HDD 4 TB trên Amazon với giá chưa tới 95 USD (khoảng 2.2 triệu đồng).\r\n\r\nAmazon bán ổ cứng HDD 4 TB với giá chưa tới 95 USD\r\nAmazon bán ổ cứng HDD 4 TB với giá chưa tới 95 USD\r\nĐó là trường hợp bạn mua riêng để nâng cấp PC, còn việc mua PC hay console đã gắn sẵn ổ cứng dung lượng cao thì lại có giá thành không hề rẻ. Vì nhà sản xuất muốn tăng lợi nhuận, nhưng so với quá khứ thì vẫn rẻ hơn. Những chiếc PS4 hay Xbox One với cấu hình cơ bản dung lượng 1 TB hiện giờ chỉ có giá khoảng 300 USD (gần 7 triệu đồng).\r\n\r\nNếu ổ cứng của bạn đã đầy và bạn cũng chán tựa game cũ nào đó rồi, thì chỉ việc gỡ cài đặt và xóa hết dữ liệu game đó đi, rồi tải và cài đặt game mới ngay, vì internet hiện nay đã nhanh hơn trước rất nhiều.\r\n\r\nKết nối internet đã nhanh hơn trước rất nhiều, việc gỡ game cũ và cài game mới là cách nhanh nhất thì vì mua thêm ổ cứng\r\nMinh họa ổ cứng chứa game chỉ còn trống khoảng 100 GB. Trong đó phần màu đỏ gần 500 GB chứa tựa game từ Steam, Origin và Blizzard\r\nVí dụ, đường truyền 100 Mbps sẽ mất hơn 1 giờ để tải xong game nặng 50 GB. Dĩ nhiên, tốc độ tải nhanh hay chậm còn phụ thuộc vào nhiều yếu tố như máy chủ của hãng game đó đặt ở đâu (PlayStation nổi tiếng chậm từ trước tới nay). Nếu đường truyền 25 Mbps thì phải mất hơn 5 giờ mới tải xong tựa game có dung lượng tương tự.\r\n\r\nLợi bất cập hại trong việc game ngày càng nặng\r\nCái gì cũng vậy, có ưu thì phải có khuyết, ít nhất là tại thời điểm này. Khi game có dung lượng ngày càng lớn hơn sẽ trực tiếp \"ngốn\" nhiều bộ nhớ thiết bị của bạn, để rồi bạn phải \"cắn răng buộc bụng\" bỏ tiền ra mua máy console mới với dung lượng cao hơn hoặc nâng cấp ổ cứng cho PC.\r\n\r\nHiện nay, NVIDIA hay Sony đã có giải pháp stream các tựa game AAA đầy đủ thông qua kết nối internet tốc độ cao. Các dịch vụ này thực hiện toàn bộ quá trình xử lý, lưu trữ game thông qua máy chủ từ xa, và máy tính hay console của bạn chỉ làm nhiệm vụ phát chúng mà thôi. Bên cạnh đó, Google, Nintendo và Microsoft cũng đang nghiên cứu các dịch vụ tương tự.\r\n\r\nStream game\r\nGiống các dịch vụ stream phim như Netflix hay Hulu, dịch vụ stream game sẽ bị giới hạn game do vấn đề bản quyền. Từ đây phát sinh hai vấn đề: Game họ cung cấp thì không đúng \"gu\" của bạn và ngược lại, game mà bạn thích thì dịch vụ của họ không sẵn có.\r\n\r\nStream game cũng đòi hỏi đường truyền internet tốc độ cao, ổn định hơn so với phim. Ngoài băng thông rộng, bạn cũng cần kết nối mạng cho độ trễ thấp nhất có thể giúp thời gian hình ảnh phát từ màn hình và tín hiệu từ gamepad đến máy chủ không bị trễ. 25 Mbps là tốc độ phù hợp cho việc stream game Full HD, còn 4K sẽ yêu cầu tốc độ cao hơn.\r\n\r\nTóm lại, nếu đang dùng PC và ổ cứng bên trong sắp hết bộ nhớ vì chứa nhiều game, bạn có thể chọn giải pháp đơn giản là mua ổ cứng rời gắn ngoài, rồi chép dữ liệu game qua chúng là xong. Hiện dòng PS4 hay Xbox One đều hỗ trợ ổ cứng ngoài để lưu game, hoặc bạn có thể tự thay ổ cứng bên trong máy nếu \"tay nghề cứng\" (sẽ bị từ chối bảo hành nếu hư hỏng).\r\n\r\nNguồn: Howtogeek\r\n', 'img/anh-tin-cong-nghe/img.jpg', '2018-11-04 23:09:11', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `hoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `hoTen`, `sdt`, `email`, `password`, `role`, `remember_token`) VALUES
(1, 'HHQQ', '01636319957', 'langtubk.97@gmail.com', '$2y$10$mGMjnvsME7dKEEpdPoI.OucvTv8ese5qygCk6qlZ9ahmmQsv8uyzy', 2, 'cKYOpAB6AKUW25UksAkMfD9D01zYQeESLgXzCAEt46GsL8Oh0RFxM244iDCa'),
(2, 'Hoàng Quân', '012334', 'laaa', '$2y$10$kg0/5RNO0Q5vabgelQkvT.fRDlKlWFU.Ey5d336ifpPfYGT0eaTHC', 0, 'yLlUXQ8cs9yTB2icMwks67sOtvpr9jUygfRIlCx7uphjgSj6bPqRUNWfVaKP');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_dh` (`id_dh`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Chỉ mục cho bảng `don_hang_khach`
--
ALTER TABLE `don_hang_khach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_tv` (`id_tv`);

--
-- Chỉ mục cho bảng `hang_san_xuat`
--
ALTER TABLE `hang_san_xuat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`link`),
  ADD UNIQUE KEY `tenSP` (`tenSP`),
  ADD KEY `san_pham_id_hsx_foreign` (`id_hsx`);

--
-- Chỉ mục cho bảng `tin_cong_nghe`
--
ALTER TABLE `tin_cong_nghe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nv` (`id_nv`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sdt` (`sdt`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_hang_khach`
--
ALTER TABLE `don_hang_khach`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hang_san_xuat`
--
ALTER TABLE `hang_san_xuat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tin_cong_nghe`
--
ALTER TABLE `tin_cong_nghe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`),
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`id_dh`) REFERENCES `don_hang` (`id`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_tv`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `don_hang_khach`
--
ALTER TABLE `don_hang_khach`
  ADD CONSTRAINT `don_hang_khach_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`id_tv`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_id_hsx_foreign` FOREIGN KEY (`id_hsx`) REFERENCES `hang_san_xuat` (`id`);

--
-- Các ràng buộc cho bảng `tin_cong_nghe`
--
ALTER TABLE `tin_cong_nghe`
  ADD CONSTRAINT `tin_cong_nghe_ibfk_1` FOREIGN KEY (`id_nv`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
