-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2022 lúc 12:24 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `k69_nhom6`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cau_hoi`
--

CREATE TABLE `cau_hoi` (
  `id_quiz` int(11) NOT NULL,
  `noi_dung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_cau_hoi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maKH` int(11) NOT NULL,
  `lua_chon` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_kho` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cau_hoi`
--

INSERT INTO `cau_hoi` (`id_quiz`, `noi_dung`, `loai_cau_hoi`, `maKH`, `lua_chon`, `dap_an`, `do_kho`) VALUES
(1, 'HTML viết tắt của những từ nào , điền vào chỗ trống:Hyper … Markup Language.', 'fill', 5, '', 'text', 'easy'),
(2, 'Công Ty nào đã đưa ra các tiêu chuẩn về Web:', 'sing', 5, 'Google::Mozila::Apple::The world wide web Consortium', 'The world wide web Consortium', 'easy'),
(3, 'Khai báo nào đúng cho HTML5', 'sing', 5, '! DOCTYPE html::!DOCTYPE HTML5::!DOCTYPE HTML5//www.worldwideweb.com//>', '!DOCTYPE html', 'easy'),
(4, 'Phần tử HTML nào cho tiêu đề lớn nhất :', 'sing', 5, 'h1::h2::head::body\r\n', 'h1', 'easy'),
(5, 'Thẻ HTML nào để ngắt dòng ?.', 'sing', 5, 'hr::br::rr::break', 'br', 'easy'),
(6, 'Thẻ nào tạo một đường kẻ phân cách nằm ngang ?.', 'sing', 5, 'hr::mark::strong::line', 'hr', 'easy'),
(7, 'Kí hiệu nào sau đây để comment khi code HTML ?', 'sing', 5, '//::/**/::/--  --/::<!--  -->     ', '<!--  -->    ', 'easy'),
(8, 'kí tự nào được sử dụng để biểu thị kết thúc thẻ ?', 'sing', 5, '^::<::/::*', '/', 'easy'),
(9, 'Thẻ nào in đậm chữ viết mà không nhấn mạnh văn bản ?', 'sing', 5, 'strong::hl::del::b    ', 'b', 'easy'),
(10, 'thẻ nào làm văn bản in nghiêng mà  không nhấn mạnh văn bản ?', 'sing', 5, 'em::i::mark::u', 'i', 'easy'),
(11, 'thẻ nào làm văn bản in nghiêng mà  nhấn mạnh văn bản ?', 'sing', 5, 'em::u::td::oi.  ', 'em', 'easy'),
(12, 'Thẻ nào gạch chân chữ viết ở dưới ?', 'sing', 5, 'u::i::strong::em\r\n\r\n\r\n\r\n', 'u', 'easy'),
(13, 'Thẻ nào nhấn mạnh tầm quan trọng văn bản  chữ viết ?', 'sing', 5, 'br::hl::strong::b\r\n', 'strong', 'easy'),
(14, 'Thẻ HTML nào làm văn bản nhỏ hơn', 'sing', 5, 'small::em::tiny::i\r\n', 'small', 'easy'),
(15, 'Thẻ HTML nào để them màu nền ?', 'sing', 5, 'background màu vàng </background>::<body bg = \"yellow\">::<body style = \"background-color: yellow;\"> ::<color style=”background-yellow”>\r\n', 'color style=”background-yellow”', 'easy'),
(16, 'Thẻ nào sử dụng màu rgb trong html đúng?', 'sing', 5, '<h1 style=\"background-color:rgb(255, 99, 71);\">...</h1>::<h1 style=\"background-color:rgb(#ff6347,12,109);\">...</h1>::<h1 style=\"background-color:rgb(9, 100, 64%);\">...</h1>::<h1 style=\"background-color:rgb(255, 99, 71, 0.5);\">...</h1>\r\n', 'h1 style=\"background-color:rgb(255, 99, 71);\".../h1', 'easy'),
(17, 'Thẻ nào sử dụng màu hex trong html đúng?', 'sing', 5, 'h1 style=\"background-color:rgb(255, 99, 71);\"/h1::h1 style=\"background-color:hex(#ff6347,12,109);\"/h1>::h1 style=\"background-color:hex(9, 100, 64%);\"/h1::h1 style=\"background-color:#f8f8f8;”/h1\r\n', '<h1 style=\"background-color:#f8f8f8;”></h1>', 'easy'),
(18, '<form action=\"action_page.php\" method=\"…\">  chọn đáp án đúng vào dấu ba chấm ?', 'sing', 5, 'get::element::form::value\r\n', 'get', 'easy'),
(19, 'Thẻ nào để liên kết trang web ?', 'sing', 5, 'img::a::hr::link\r\n', 'a', 'easy'),
(20, 'Thẻ HTML nào được sử dụng để hiện thị video trên trang web ?', 'sing', 5, 'video::youtube::vd::audio\r\n', 'video', 'easy'),
(21, 'Thẻ nào để phát tệp âm thanh trong html ?', 'sing', 5, 'video::sound::audio::listen\r\n', 'audio', 'easy'),
(22, 'thẻ nào chứa tiêu đề cho các đối tượng input ?', 'sing', 5, 'labol::head::tittle::label\r\n', 'label', 'easy'),
(23, 'Thẻ nào thể hiện phần chân của trang hoặc của section ?', 'sing', 5, 'header::footer::fotter::footer\r\n', 'footer', 'easy'),
(24, 'thẻ nào thể hiện một nhóm cột ?', 'sing', 5, 'colgroup::rowgroup::group::collumgroup\r\n', 'colgroup', 'easy'),
(25, 'Thẻ HTML nào tạo ra một ô nhập dữ liệu ?', 'sing', 5, 'input type=\"textfield::textinput type=\"text\"::textfield::input type=\"text\"\r\n', 'input type=\"text\"', 'nor'),
(26, 'Đâu là mã HTML thực hiện căn lề trái cho nội dung 1 ô trong bảng', 'sing', 5, 'input type=\"textfield\"::textinput type=\"text\"::textfield::input type=\"text\"\r\n', 'input type=\"text\"', 'nor'),
(27, 'Các bảng có thể lồng lẫn nhau?', 'sing', 5, 'sai::đúng', 'đúng', 'nor'),
(28, 'Các thẻ Tag trong HTML buộc phải viết hoa ?', 'sing', 5, 'Đúng::Sai', 'Sai', 'nor'),
(29, 'Tiêu đề của trang nằm trong thẻ tag ?', 'sing', 5, 'Body::Head::Table::Display\r\n', 'Head', 'nor'),
(30, 'Đâu là tag tạo ra danh sách đứng đầu bằng số ?', 'sing', 5, 'ul::li::list::ol\r\n', 'ol', 'nor'),
(31, 'Thẻ HTML nào tạo ra một ô nhập dữ liệu với nhiều dòng?\r\n', 'sing', 5, 'input type=\"textarea\"::textarea::input type=\"textbox\"\r\n', 'textarea', 'nor'),
(32, 'Thẻ input type=”Password” … dùng để làm gì?', 'sing', 5, 'Tạo một textbox cho phép nhập liệu nhiều dòng::Tạo một ô text để nhập dữ liệu 1 dòng::Tạo một ô nhập mật khẩu::Tất cả các ý trên\r\n', 'Tạo một ô nhập mật khẩu', 'nor'),
(33, 'Thẻ meta và meter khác nhau thế nào?', 'sing', 5, 'Không khác biệt trong việc chứa thông tin head nhưng meter được dùng chuyên biệt hơn cho các nội dung về đơn vị::Khác biệt ở việc meter chứa thông tin của liên kết thứ 3 còn <meta> thì chứa thông tin trang web::meter dùng để thể hiện phép đo trạng thái còn meta để định nghĩa nội dung văn bản HTML::meter dùng để thể hiện phép đo trạng thái còn meta để chứa các thông tin về văn bản HTML\r\n', 'Không khác biệt trong việc chứa thông tin <head> nhưng <meter> được dùng chuyên biệt hơn cho các nội dung về đơn vị', 'hard'),
(34, 'Thẻ pre dùng thể làm gì?', 'sing', 5, 'Hiển thị đường dẫn trước đó mà người dùng đã truy cập trước đó::Hiển thị đúng văn bản đã được định dạng sẵn trong HTML::Dùng để hiển thị trước nội dung đã được gõ trong textarea::Dùng để hiển thị số khoảng trắng tùy ý\r\n', 'Hiển thị đường dẫn trước đó mà người dùng đã truy cập trước đó', 'hard'),
(35, 'Các trình duyệt thường áp dụng tính năng của toàn bộ tag cho tới phần tag ?', 'sing', 5, 'Quit::Closing::Exit::Anti\r\n', 'Closing', 'hard'),
(36, 'Thiết kế web phù hợp cho các kích thước giao diện khác nhau được gọi là ?', 'sing', 5, 'Responsive::Fit_all::Viewport\r\n', 'Viewport', 'hard'),
(37, 'Để nhập vào xác định số lượng ký tự lớn nhất mà người sử dụng có thể nhập vào Text Input ta sử dụng thuộc tính ?', 'sing', 5, 'Maxlength::Value::size\r\n', 'Maxlength', 'hard'),
(38, 'Nếu muốn tăng kích cỡ font thêm 2 dựa vào nội dung text có liên quan, các bạn hãy điền +2 vào phần tag ?', 'sing', 5, 'Đúng::Sai', 'Đúng', 'hard'),
(39, 'Thẻ <article> có mặt từ phiên bản IE nào trở lên ?', 'sing', 5, 'IE 6::IE 7::IE 9::IE 11\r\n', 'IE 11', 'hard'),
(40, 'Bên trong tag MAP, chúng ta sử dụng tag AREA để xác định vùng diện tích của hình ảnh làm hotspot ?', 'sing', 5, 'Đúng::Sai', 'Đúng', 'hard'),
(41, 'Thẻ <caption> được dùng như thế nào ?', 'sing', 5, 'Để chứa 1 tiêu đề cho một chương mục, bài báo...::Để đánh dấu phần đầu của nội dung::Để sử dụng trong <table> làm tiêu đề::Để sử dụng trong <ul> làm tiêu đề\r\n', 'Để chứa 1 tiêu đề cho một chương mục, bài báo...', 'hard'),
(42, 'Thẻ <datalist> và <select> giống và khác nhau ở đâu?', 'sing\r\n\r\n', 5, 'Đều là dạng dropdownlist nhưng datalist cho phép nhập thêm dữ liệu::Đều là dạng dropbox nhưng datalist cho phép nhập thêm dữ liệu::Đều là dạng dropdownlist nhưng datalist là thẻ dữ liệu hỗ trợ cho <input type=\"text\"> để sổ danh sách::Hai thẻ hoàn toàn khác nhau\r\n', 'Hai thẻ hoàn toàn khác nhau', 'hard'),
(43, 'Thẻ <Map> dùng để làm gì?', 'sing', 5, 'Định nghĩa 1 bản đồ như google map hoạt động::Chuyển đổi và định dạng mọi đối tượng trong nó như 1 bản đồ::Để các thể <area> có thể vẽ những hình tròn, chữ nhật cho dễ thiết kế::Để định nghĩa các vùng chứa đường dẫn trong phạm vi tấm hình\r\n', 'Để các thể <area> có thể vẽ những hình tròn, chữ nhật cho dễ thiết kế', 'hard'),
(44, ', Phần mở rộng của tập tin HTML là?', 'sing', 5, 'htm::html::Cả 2 đáp án trên\r\n', 'Cả 2 đáp án trên', 'hard'),
(45, 'Thẻ nhúng đa phương tiên trong HTML?', 'sing', 5, 'embed::media::gif\r\n', 'embed', 'hard'),
(46, 'Đường dẫn nào tới dưới đây được HTML hỗ trợ?', 'sing', 5, 'Ralative::Defererenced::Absolute and Relative\r\n', 'Absolute and Relative', 'hard'),
(47, 'Cấu trúc tag của inline frame là gì?', 'sing', 5, 'iframe::inframe::frame::inlineframe\r\n', 'inlineframe', 'hard'),
(48, 'Tính năng… cung cấp file ảnh GIF sẽ được lưu bởi các phần mềm đồ họa', 'sing', 5, 'Dithering::Interlacing::Balancing\r\n', 'Balancing', 'hard'),
(49, 'Các đường dẫn tương đối sẽ làm cho những đường kết nối hypertext ?', 'sing', 5, 'Linh động::Rời rạc::Thống nhất\r\n', 'Linh động', 'hard'),
(50, 'Cấu trúc … thường bắt đầu bằng những chủ đề thông thường có chứa các đường dẫn tới nhiều topic cụ thể khác ?', 'sing', 5, 'Hirerarchical::Linear::Mixed\r\n', 'Hirerarchical', 'hard'),
(51, '…. là đoạn mã HTML có chức năng kiểm soát quá trình hiển thị của nội dung văn bản', 'sing', 5, 'Tags::Codas::Slashes::Properties\r\n', 'Properties', 'hard'),
(52, '… là đoạn mã HTML có chức năng kiểm soát quá trình hiển thị của nội dung văn bản ?', 'sing', 5, 'Tags::Codas::Slashes::Properties\r\n', 'Properties', 'nor'),
(53, 'Cấu trúc tạo thẻ input up file nào sau đây là đúng ?', 'sing', 5, 'input type=”file” name=”fileupload” accept=”image/*” ::input type=”text” name=”fileupload” accept=”image/*” ::input type=”password” name=”fileupload” accept=”image/*” \r\n', 'input type=”file” name=”fileupload” accept=”image/*” ', 'hard'),
(54, 'Đâu là mã HTML thực hiện căn lề trái cho nội dung 1 ô trong bảng ?', 'sing', 5, 'td valign=\"left\"::tdleft::td leftalign::td align=\"left\"\r\n', 'td align=\"left\"', 'nor'),
(55, 'Biên dịch cú pháp sau: <strong>Quantrimang</strong>', 'sing', 5, 'Sẽ làm cho chuỗi ký tự QuanTriMang trở nên đậm::Sẽ đánh dấu chuỗi ký tự QuanTriMang là đậm::Sẽ in ra chuỗi ký tự QuanTriMang với font đậm\r\n', 'Sẽ làm cho chuỗi ký tự QuanTriMang trở nên đậm', 'nor'),
(56, 'Nếu không được chỉ định , bộ kí tự mặc định trong HTML là gì ? ', 'sing', 5, 'UTF-A::UTF-8::UTF-12::UTF-8A8 \r\n', 'UTF-8', 'nor'),
(57, 'cho thẻ H1 sau , chọn đáp án đúng để thẻ H1 hiển thị style đúng  \r\n<h1 id=\"myHeader\">My Cities</h1> ? ', 'sing', 5, '#myHeader { \r\n  background-color: lightblue;       \r\n  color: black; \r\n  padding: 40px; \r\n  text-align: center; \r\n}::$myHeader { \r\n  background-color: lightblue; \r\n  color: black; \r\n  padding: 40px; \r\n  text-align: center; \r\n}::!myHeader { \r\n  background-color: lightblue; \r\n  color: black; \r\n  padding: 40px; \r\n  text-align: center; \r\n}::.myHeader { \r\n  background-color: lightblue; \r\n  color: black; \r\n  padding: 40px; \r\n  text-align: center; \r\n} \r\n', '#myHeader { \r\n  background-color: lightblue;       \r\n  color: black; \r\n  padding: 40px; \r\n  text-align: center; \r\n} \r\n \r\n', 'nor'),
(58, 'Thẻ nào sử dụng đúng kiểu màu HSLA trong html? ', 'sing', 5, 'h1 style=\"background-color:hsl(0%, 100%, 50%);\"></h1::h1 style=\"background-color:hsl(0, 100, 50);\">/h1::h1 style=\"background-color:hsl(0, 100, 50%);\">/h1::h1 style=\"background-color:hsl(0, 100%, 50%);\">/h1\r\n', 'h1 style=\"background-color:hsl(0, 100%, 50%);\">/h1 \r\n \r\n', 'nor'),
(59, 'Cách nào bạn có thể mở một liên kết trong một tab mới hoặc một cửa sổ mới?', 'sing', 5, 'a href=\"url\" target=\"new\"::a href=\"url\" new::a href=\"url\" target=\"_blank\"\r\n', 'a href=\"url\" new', 'nor'),
(60, 'Cú pháp chung của đường dẫn ảnh trực tiếp ?', 'sing', 5, 'src=img::src=image::img=file::img src=file\r\n', 'img src=file', 'nor'),
(61, 'Chọn đáp đúng để hiển thị  X^(2x+15) bằng thẻ HTML? ', 'sing', 5, 'pX<sub2x+15</sub>p::pX<sup>2x+15<sup>p::pX<s>2x+15</s>/p::pX<sp>2x+15</sp>0/p \r\n', 'pX<sup>2x+15<sup>p  ', 'nor'),
(62, 'Chọn đáp đúng để hiển thị  X^(2x+30-26y)-3y=0 ? ', 'sing', 5, '<p>X<sup><i>2x+30-26y<i></sup>-3y<p>::<p>X<sp><i>2x+30-26y</i></sp>-3y</p>::<p>X<sup><i>2x+30-26y</i></sup>-3y</p>::<p>X<sub><i>2x+30-26y</i></sub>-3y</p> \r\n', '<p>X<sup><i>2x+30-26y</i></sup>-3y</p> ', 'nor'),
(63, 'Hiện tại có tất cả mã màu có thể được nhận dạng bởi tất cả các phiên bản HTML ?', 'sing', 5, '6::8::256::16\r\n', '16', 'nor'),
(64, 'Thẻ <input type=”Submit” …> dùng để làm gì?', 'sing', 5, 'Tạo một nút lệnh dùng để gửi tin trong form đi::Tất cả các ý kiến trên::Tạo một ô text để nhập dữ liệu::Tạo một nút lệnh dùng để xoá thông tin trong form\r\n', 'Tạo một nút lệnh dùng để gửi tin trong form đi', 'nor'),
(65, 'Những phần tử HTML nào dùng để định nghĩa cấu trúc của bảng?', 'sing', 5, 'table><tr<tt::table><tr<td::table><head<tfoot>::thead>body<tr\r\n', 'table>tr><td', 'nor'),
(66, 'Những phần tử HTML nào dùng để định nghĩa cấu trúc của bảng?', 'sing', 5, 'table<tr<tt::<table<tr<td::table<head<tfoot::<thead<body<tr', '<table<tr<td', 'easy'),
(67, 'Đâu là mã HTML thực hiện căn lề trái cho nội dung 1 ô trong bảng ?', 'sing', 5, 'td valign=\"left\"::tdleft::td leftalign::td align=\"left\"\r\n', 'td align=\"left\"', 'nor'),
(68, 'Thẻ nào gạch chân chữ viết ở dưới ?', 'sing\r\n', 5, 'u::i::strong::em\r\n', 'u', 'easy'),
(69, 'Thẻ HTML nào làm văn bản nhỏ hơn:', 'sing', 5, 'small::em::tiny::i\r\n', 'small', 'easy'),
(70, 'thẻ  HTML đại diện cho một phần tài liệu chứa các điều khiển tương tác để gửi thông tin ?', 'sing', 5, 'form::text::ul::fom\r\n', 'form', 'easy'),
(71, 'đâu là lưu dạng file html đúng ?', 'sing', 5, 'index.html::index.cpp::index.php::index.typehtml\r\n', 'index.html', 'easy'),
(72, 'Nhưng định dạng Video được hỗ trợ bởi tiêu chuẩn HTML ? ', 'sing', 5, 'MPEG::AVI::MP4::Oggg', 'MP4', 'easy'),
(73, 'Nhưng định dạng Video được hỗ trợ bởi tiêu chuẩn HTML ? ', 'sing', 5, 'MPEG::AVI::WebM::Oggg', 'WebM', 'nor'),
(74, 'Chuẩn html chỉ hỗ trợ âm thanh nào?', 'sing', 5, 'MP3::WAVV::AAC::WMA\r\n', 'MP3', 'easy'),
(75, 'Thẻ <input type=”….” > hiện thị trường nhập văn bản ?', 'sing', 5, 'text::word::button::checkbox\r\n', 'text', 'easy'),
(76, 'Thẻ input nào hiển thị nút gửi (để gửi biểu mẫu ) ?', 'sing', 5, 'input type=”submiit”::input te=”submit”::input type=”supmit”::input type=”submit”\r\n', 'input type=”submit”', 'easy'),
(77, 'Đâu là  đường dẫn tuyệt đối? ', 'sing', 5, 'a href=\"default.html\" ::img src=\"https://www.w3schools.com/images/picture.jpg\" alt=\"Mountain\" \r\n', 'img src=\"https://www.w3schools.com/images/picture.jpg\" alt=\"Mountain\"', 'nor'),
(78, 'Đâu là đường dẫn tương đối ? ', 'sing', 5, 'img src=\"https://www.w3schools.com/images/picture.jpg\" alt=\"Mountain\"::img src=\"/images/picture.jpg\" alt=\"Mountain\" \r\n ', 'img src=\"/images/picture.jpg\" alt=\"Mountain\"', 'nor'),
(79, 'cho bảng sau , điền vào ô trống để hiện thị bảng đúng style trong html?  \r\nstyle\r\ntable, th, td { \r\n…….: 1px color white; \r\n  border-collapse: collapse; \r\n} \r\nth, td { \r\n  background-color: #96D4D4; \r\n} \r\nstyle\r\n', 'fill', 5, '', 'border', 'nor'),
(80, 'Thẻ mở tab liên kết trong html là ?', 'sing', 5, 'a HREF=”url” >/a::A href=”url” >/a::a href=”url” >/a::a link=”url” >/a\r\n', 'a href=”url” >/a', 'easy'),
(81, 'Thẻ nào được sử dụng để làm tiêu đề của bảng trong HTML?', 'sing', 5, 'table::th::tr::hl\r\n', 'th', 'easy'),
(82, 'Thẻ html nào để vẽ đồ họa trên trang web ?', 'sing', 5, 'cansast::cantvas::canvas::art\r\n', 'canvas', 'easy'),
(83, 'làm sao để đường viên của bảng có hiệu ứng màu sau , điền vào ô trống ? \r\n th, td { \r\n ……..: #96D4D4; \r\n} \r\n', 'fill', 5, '', 'border-color', 'easy'),
(84, 'làm sao để bảng có đường viền bo tròn , điền vào ô trống? \r\nstyle \r\ntable, th, td { \r\n  border: 1px solid black; \r\n  border-……: 10px; \r\n} \r\n/style\r\n', 'fill', 5, '', 'radius', 'easy'),
(85, 'để chỉnh chiều rộng của bảng là 400px?\r\ntable style=\"….:400px\"', 'fill', 5, '', 'width', 'easy'),
(86, 'thẻ input nào xác định trường chọn  tệp và nút “duyệt qua “ để tải tệp lên:?', 'sing', 5, 'input tpe=”file”::input type=”file”::input type=”source”::input tpe=”source”\r\n', 'input type=”file”', 'easy'),
(87, 'thẻ input nào được sử dụng mà đầu vào là địa chỉ Email ?', 'sing', 5, 'input type=”email”::input type=”gmail”::input type=”mail”::input type=”@email”', 'input type=”email”', 'easy'),
(88, ':Thẻ input nào là một trường nhập ẩn ( không hiển thị cho người dung ) ?', 'sing\r\n', 5, 'input type=”mail”::input type=”shadow”::input type=”hidden”::input type=”ghost”\r\n', 'input type=”hidden”', 'easy'),
(89, 'Để bức ảnh co chiều cao 600px , hãy điền vào chỗ trống ?\r\nimg src=\"img_girl.jpg\" alt=\"Girl in a jacket\"  ……=\"600\"', 'fill', 5, '', 'height', 'easy'),
(90, ' chỉnh chiều cao của bảng là 100%?\r\ntable style=\"….:….%\"', 'sing', 5, 'height và 100%::width và 100%::height và 100px\r\n', 'height và 100%', 'easy'),
(91, 'điền vào chỗ trống chỉnh chiều cao của bảng là 100%?\r\ntable style=\"….:100%\"', 'fill', 5, '', 'height', 'easy'),
(92, 'Muốn bảng có thêm đường viền , điền vào ô trống? \r\nstyle\r\ntable, th, td { \r\n  ….: 1px.solid black; \r\n} \r\n/style\r\n', 'fill', 5, '', 'border', 'easy'),
(93, 'chọn các thẻ có khả năng làm văn bản in nghiêng ?', 'sing', 5, 'td::ol::i::br', 'i', 'easy'),
(94, 'chọn các thẻ có khả năng làm văn bản in nghiêng ?', 'sing', 5, 'td::ol::em::br', 'em', 'easy'),
(95, 'Chọn phần tử HTML chính xác để xác định văn bản được nhấn mạnh', 'sing', 5, 'em::i::italic', 'em', 'easy'),
(96, 'Phần tử nào trong số các phần tử này đều là phần tử <table>?', 'sing', 5, 'thead_body_tr::table_tr_tt::table_tr_td::table_head_tfoot', 'table_tr_td', 'easy'),
(97, 'Làm thế nào bạn có thể tạo một danh sách được đánh số?', 'sing', 5, 'ol::dl::list::ul', 'ol  \r\n', 'sing'),
(98, 'Làm thế nào bạn có thể tạo một danh sách có dấu đầu dòng?', 'sing', 5, 'ul::ol::list::dl', 'ul', 'easy'),
(99, 'HTML chính xác để tạo danh sách thả xuống là gì?', 'sing', 5, 'select::input type = \"dropdown\"::list::input type = \"list\"', 'select', 'easy'),
(100, 'Thuộc tính HTML nào chỉ định văn bản thay thế cho hình ảnh, nếu hình ảnh không thể hiển thị?', 'sing', 5, 'alt::title::longdesc::src', 'alt', 'easy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `id_diem` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `maKH` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`id_diem`, `id_user`, `maKH`, `diem`, `time`) VALUES
(1, 1, 5, 10, '2021-12-29 16:36:57'),
(4, 1, 5, 7, '2021-12-29 17:06:51'),
(6, 1, 5, 8, '2021-12-29 17:08:07'),
(15, 1, 5, 3, '2021-12-30 03:11:45'),
(16, 1, 5, 0, '2021-12-30 05:14:52'),
(17, 1, 5, 19, '2022-01-07 03:24:31'),
(18, 1, 5, 19, '2022-01-07 03:24:37'),
(19, 1, 5, 19, '2022-01-07 03:27:39'),
(20, 1, 5, 0, '2022-01-07 03:29:04'),
(21, 1, 5, 0, '2022-01-07 03:29:17'),
(22, 1, 5, 0, '2022-01-07 03:29:47'),
(23, 1, 5, 0, '2022-01-07 03:30:47'),
(24, 1, 5, 1, '2022-01-07 03:33:16'),
(25, 1, 5, 1, '2022-01-07 03:33:34'),
(26, 1, 5, 1, '2022-01-07 03:33:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `maKH` int(11) NOT NULL,
  `ten_khoa_hoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`maKH`, `ten_khoa_hoc`, `mota`, `status`) VALUES
(1, 'Javascipt', 'Kiến thức cơ bản về Javascript', 0),
(2, 'CSS', 'Kiến thức cơ bản về CSS', 0),
(3, 'Word', 'Kiến thức cơ bản về word', 0),
(5, 'HTML', 'Kiến thức về HTML', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setup`
--

CREATE TABLE `setup` (
  `easy` int(11) NOT NULL,
  `nor` int(11) NOT NULL,
  `hard` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `muc_easy` int(11) NOT NULL,
  `muc_nor` int(11) NOT NULL,
  `muc_hard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setup`
--

INSERT INTO `setup` (`easy`, `nor`, `hard`, `sum`, `muc_easy`, `muc_nor`, `muc_hard`) VALUES
(10, 5, 5, 20, 5, 3, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `ho_ten`, `user_name`, `pass`, `level`) VALUES
(1, 'pham trung', 'trung1', '123', 0),
(2, 'hellooo`', 'trung 20', '1', 0),
(3, 'Phạm Đức Trung', 'trung100', '123', 0),
(4, 'new admin', 'admin1910', '123', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD PRIMARY KEY (`id_quiz`),
  ADD KEY `maKH` (`maKH`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`id_diem`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `maKH` (`maKH`);

--
-- Chỉ mục cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `diem`
--
ALTER TABLE `diem`
  MODIFY `id_diem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cau_hoi`
--
ALTER TABLE `cau_hoi`
  ADD CONSTRAINT `cau_hoi_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khoa_hoc` (`maKH`);

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`maKH`) REFERENCES `khoa_hoc` (`maKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
