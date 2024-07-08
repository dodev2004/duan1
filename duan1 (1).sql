-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 06:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhphong`
--

CREATE TABLE `anhphong` (
  `id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `id_Phong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anhphong`
--

INSERT INTO `anhphong` (`id`, `Image`, `id_Phong`) VALUES
(35, 'anh1.webp', 17),
(36, 'anh2.webp', 17),
(37, 'anh3.webp', 17),
(38, 'anh7.webp', 18),
(39, 'anh10.webp', 19),
(40, 'anh13.webp', 20),
(41, 'anh14.webp', 21),
(42, 'anh17.webp', 22),
(43, 'anh22.webp', 23),
(44, 'anh23.webp', 24),
(45, 'anh28.webp', 25),
(46, 'anh28.webp', 26),
(47, 'anh25.webp', 27),
(48, 'anh8.webp', 28),
(49, 'anh7.webp', 29);

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `title` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `content` text NOT NULL,
  `tieude_baiviet` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `id_baiViet` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`title`, `avatar`, `meta_description`, `content`, `tieude_baiviet`, `created_time`, `last_update`, `id_baiViet`, `id_user`) VALUES
('10 xu hướng thịnh hành trong ngành khách sạn 2022', '10-xu-huong-thinh-hanh-trong-nganh-khach-san-2021.webp', '<p>Không gian ngoài trời mở rộng hơn, nâng cấp công nghệ để hạn chế tối đa tiếp xúc là những xu hướng mới nhiều khách sạn áp dụng. Dưới đây là một số xu hướng trong khách sạn mà du khách có thể bắt gặp trong năm 2021, theo các dữ liệu và phân tích từ&nbsp;GlobalData. Vấn đề vệ sinh luôn đặt lên hàng đầu Ngành khách sạn đã</p>', '<p>Không gian ngoài trời mở rộng hơn, nâng cấp công nghệ để hạn chế tối đa tiếp xúc là những xu hướng mới nhiều khách sạn áp dụng.</p><p>Dưới đây là một số xu hướng trong khách sạn mà du khách có thể bắt gặp trong năm 2021, theo các dữ liệu và phân tích từ&nbsp;GlobalData.</p><p>Vấn đề vệ sinh luôn đặt lên hàng đầu</p><p>Ngành khách sạn đã nhanh chóng thực hiện các quy trình an toàn và vệ sinh chuyên sâu trong đại dịch. Năm 2022, các cơ sở lưu trú trên toàn thế giới có thể tiếp tục xây dựng và cải thiện các chương trình vệ sinh, nhằm hạn chế tối đa sự lây lan của dịch bệnh, thu hút khách đặt phòng.</p><p><img src=\"https://bizweb.dktcdn.net/100/423/358/files/anh-tt1.jpg?v=1623927227398\" width=\"680\" height=\"374\"></p><p><strong>Khách thuê phòng dài ngày hơn</strong></p><p>Nhiều khách sạn, khu nghỉ dưỡng đã giới thiệu các chương trình, gói lưu trú kéo dài vào năm 2021 và xu hướng đó sẽ tiếp tục trong năm nay. Lý do là đại dịch vẫn diễn biến phức tạp, du khách có xu hướng lưu trú tại một nơi dài ngày hơn.</p><p>Nhà phân tích du lịch và lữ hành Ralph Hollister của GlobalData cho biết du khách có thể ít đi du lịch hơn nhưng họ sẽ lưu trú lâu hơn. Sự phức tạp của dịch bệnh sẽ khiến nhiều người dốc toàn lực để đầu tư một chuyến đi lớn, thay vì mạo hiểm với những chuyến đi nhỏ lẻ, có thể bị hủy bỏ.</p><p><strong>Phòng khách sạn tạo điều kiện thuận lợi cho người làm từ xa</strong></p><p>Khi du lịch dài ngày hơn, du khách cũng không muốn công việc bị ảnh hưởng. Đó là lý do họ sẽ vừa nghỉ dưỡng, vừa làm việc từ xa. Do đó, một căn phòng khách hàng cần là nơi vừa có thể làm việc thoải mái, vừa tận hưởng những giây phút thư giãn riêng tư. Wi-Fi trong phòng nhanh cũng là một điểm cộng, và đôi khi có thể là yếu tố quyết định đối với nhiều du khách muốn du lịch công vụ trong năm 2022.</p><p><strong>Tăng cường áp dụng công nghệ</strong></p><p>Khách sạn giống như sân bay, nhà hàng... đều là những nơi có nhiều người qua lại. Do đó, nâng cao và áp dụng triệt để công nghệ, hạn chế tiếp xúc là mục tiêu chính của ngành du lịch của năm nay. Thay vì thanh toán trực tiếp, du khách có thể trả tiền phòng qua các ứng dụng di động, mã QR... để giảm nguy cơ lây nhiễm virus.</p><p>\"Trong năm 2022, các khách sạn sẽ tăng cường áp dụng công nghệ để giảm tiếp xúc. Những điều sẽ dần phổ biến hơn phải kể đến việc khách hàng có thể check-in và check-out trực tuyến, mở cửa phòng bằng chìa khóa trên điện thoại, điều khiển các thiết bị trong phòng bằng công nghệ IoT... Sử dụng IoT còn cho phép khách sạn thu thập thêm dữ liệu về khách hàng, từ đó cá nhân hóa trải nghiệm cho khách hàng khi họ trở lại\", Hollister nhận định.</p><p><strong>Phục vụ ẩm thực không tiếp xúc</strong></p><p>Giảm tiếp xúc bằng công nghệ có nghĩa là hạn chế tiếp xúc giữa người với người trong cả dịch vụ ăn uống. Những giải pháp khách sạn đưa ra là tùy chọn cho khách mua đồ ăn mang đi tại sảnh, nhân viên đặt bữa ăn ở cửa phòng khách hoặc đặt món qua điện thoại bằng mã QR.</p><p><strong>Chính sách hoàn, hủy linh hoạt</strong></p><p>Những khách sạn có chính sách hoàn tiền đặt phòng 100% khi khách hủy vào phút chót, cùng với các chính sách giảm thiểu rủi ro khác sẽ được đa số lựa chọn.</p><p>Khách hàng yêu thích những nơi riêng tư</p><p>Khách du lịch sẽ tìm kiếm không gian riêng tư nhiều hơn trong năm nay. Do đó, dịch vụ thuê phòng ngắn hạn thông qua các ứng dụng như Airbnb, Vrbo... cũng như các kỳ nghỉ tại một biệt thự riêng biệt sẽ được nhiều du khách hướng tới. Lý do là những nơi này mang tới không gian riêng tư nhiều hơn khách sạn, nhà nghỉ. Đây cũng là năm mà các cơ sở lưu trú, hàng quán ở những nơi hẻo lánh, xa xôi có cơ hội tiếp đón nhiều khách hàng hơn, bởi tại đây họ ít phải lo lắng về các lệnh hạn chế đi lại,</p><p><strong>Không gian ngoài trời được ưu ái hơn</strong></p><p>Du khách sẽ cảm thấy an toàn hơn khi dành thời gian ở ngoài trời so với không gian kín ở nơi công cộng. Do đó, các khách sạn sẽ tìm cách kết hợp nhiều hơn nữa không gian ngoài trời vào các trải nghiệm như tập yoga, cà phê, ăn uống, spa...</p><p><img src=\"https://bizweb.dktcdn.net/100/423/358/files/anh-2tt1.jpg?v=1623927239024\" width=\"680\" height=\"373\"></p><p><strong>Phát triển du lịch bền vững</strong></p><p>Các khu nghỉ dưỡng đã trở nên thân thiện với môi trường hơn sau thời gian dài vắng khách. Xu hướng đó có thể tiếp tục trong năm nay khi nhiều khách du lịch tìm cách hạn chế tác động của họ đến môi trường và văn hóa địa phương. Tiết kiệm nước, giảm thiểu chất thải, cũng như tìm nguồn cung ứng thực phẩm địa phương trong các quán bar, nhà hàng... vẫn là chiến lược của nhiều khách sạn muốn tạo sự khác biệt trong tương lai.</p><p><strong>Khách du lịch chi tiêu nhiều hơn</strong></p><p>Nhiều người sẽ phải đối mặt với ngân sách du lịch hạn chế, vì vậy các cơ sở lưu trú cần thu hút những khách hàng ở tầng lớp trung lưu. Họ là những người sẽ tìm kiếm mức giá thuê phòng thấp, nhưng cũng sẵn sàng chi tiêu nhiều hơn nếu chất lượng dịch vụ xứng đáng với số tiền họ bỏ ra.</p><p>Nguồn:&nbsp;<i>Fox News</i></p>', '10 xu hướng thịnh hành trong ngành khách sạn 2022', '2023-12-11 23:02:41', '2023-12-11 23:02:41', 5, 8),
('Những điều kiêng kị khi ở khách sạn mà bạn nên biết', 'nhung-dieu-kieng-ky-khi-o-khach-san-ma-ban-can-biet.webp', '<p>Để không gặp nhiều phiền toái và giữ an toàn cho chính bản thân trong mỗi chuyến đi, bạn nên cẩn thận tìm hiểu một số kinh nghiệm, lưu ý cần thiết khi thuê và ở khách sạn. Khách sạn là nơi có rất nhiều người nghỉ qua đêm, nên theo các chuyên gia có kinh nghiệm, có một số điều gọi là “thủ tục” và vài hành động kiêng kị</p>', '<p>Để không gặp nhiều phiền toái và giữ an toàn cho chính bản thân trong mỗi chuyến đi, bạn nên cẩn thận tìm hiểu một số kinh nghiệm, lưu ý cần thiết khi thuê và ở khách sạn.</p><p>Khách sạn là nơi có rất nhiều người nghỉ qua đêm, nên theo các chuyên gia có kinh nghiệm, có một số điều gọi là “thủ tục” và vài hành động kiêng kị khi nghỉ qua đêm ở bất kỳ một khách sạn nào mà bạn cần phải hết sức lưu ý.&nbsp;</p><p>1. Dùng họ, tên đệm khi nhận phòng: Một trong những cách đơn giản nhất để giữ bí mật thông tin cá nhân là tránh dùng tên khi nhận phòng, bạn nên dùng chữ cái đầu và họ của mình. Nữ giới đi du lịch một mình nên dùng chức danh “Mrs.” (Bà - người đã kết hôn) để tạo ấn tượng rằng bạn đi cùng với ít nhất một người nữa.</p><p>2. \"Nhập gia tùy tục\": Người xưa có câu \"Nhập gia tùy tục\". Do vậy khi ở khách sạn, bạn nên đọc kỹ nội quy phòng để tránh gặp phải những phiền phức không đáng có khiến chuyến du lịch mất vui, nhất là khi du lịch nước ngoài. Ở một số nơi, nếu bạn xem tivi và sử dụng internet hoặc điện thoại bàn sẽ bị tính phí rất cao. Đó là lý do bạn cần \"đọc kỹ hướng dẫn trước khi sử dụng\".</p><p>3. Đừng bao giờ hỏi nhân viên lễ tân phục vụ ca đêm về nhu cầu “tìm người bạn tâm sự” hay cho phép nhân viên không có chức năng vào phòng vì có thể bạn sẽ gặp rắc rối lớn khi bị kiểm tra đột xuất của khách sạn hay chính quyền.</p><p>4. Kiểm tra phòng: Ngay khi bước vào phòng, bạn nên kiểm tra khóa thật kỹ xem có an toàn không. Tiếp đến, bạn đi quanh phòng và kiểm tra kỹ cửa sổ, phòng tắm, tủ quần áo... xem có gì bất thường. Nếu có, lập tức báo ngay cho nhân viên khách sạn để nhờ xử lý hoặc xin đổi phòng. Bạn cũng hãy nhớ kiểm tra số lượng vật dụng trong phòng có đúng như bản kê khai không.</p><p>5. Kiểm tra quầy lễ tân: Sau khi nhận phòng, bạn nên sử dụng điện thoại di động gọi cho quầy lễ tân, hỏi xem họ có thể nói chuyện với mình không. Nếu họ cho biết số phòng của bạn, đó là tín hiệu không tốt. Câu trả lời bạn mong muốn sẽ là: “Để tôi nối máy cho bạn”.</p><p>6. Đặt biển “Miễn làm phiền” ngoài cửa khi rời phòng: Khi phải ra ngoài, bạn có thể đặt biển “Miễn làm phiền” và bật ti-vi để có âm thanh trong phòng.</p><p>7. Ở phòng tầng từ 4 đến 6: Phòng cao nhất thang cứu hỏa có thể vươn tới khi có hỏa hoạn thường là từ tầng 4 tới tầng 6. Cẩn thận hơn, bạn có thể chọn phòng gần cầu thang bộ.</p><p>8. Gõ cửa trước khi vào phòng khách sạn: Theo quan niệm phong thủy, khi bước vào phòng nghỉ tại khách sạn bạn nên gõ cửa 3 cái để đánh đuổi điềm xấu mà người ở trước để lại. Sau đó mới mở cửa và đứng nép sang một bên, đợi khoảng 1 phút mới bước vào và đóng của lại. Việc bước vào phòng và đóng cửa ngay lập tức là điều tối kỵ.</p><p>9. Cất giữ những đồ dùng có giá trị thật cẩn thận: Khách sạn là nơi có rất nhiều người qua lại hơn nữa là một nơi khá lạ, bạn sẽ không thể biết được ai tốt ai xấu. Do vậy, cẩn tắc vô áy náy, nên cất giữ những đồ dùng có giá trị thật cẩn thận. Trườg hợp đi ra ngoài không tiện mang các đồ giá trị theo, bạn có thể gửi ở nhân viên lễ tân và ký nhận.</p><p>10. Đừng viết tên trên bìa treo cửa: Nếu khách sạn đưa cho bạn bìa treo cửa để yêu cầu lấy thêm đồ ăn hay dọn phòng, bạn không nên viết tên mình lên đó, tránh bị nhận diện.</p><p>11. Các lỗ nhìn lén: Bạn đã từng bao giờ có cảm giác bị theo dõi khi ở trong phòng khách sạn? Bất cứ khi nào có cảm giác không an toàn, bạn nên yêu cầu thay đổi phòng. Nghe có vẻ khó tin, nhưng có những khách sạn giấu máy ảnh nhỏ để có thể quay phim tất cả mọi thứ xảy ra trong phòng. Nếu không có phòng có sẵn khác, hãy che các lỗ đáng ngờ bằng một mảnh giấy.</p><p>12. Không nên cắt móng tay móng chân vào nửa đêm: Ở trong khách sạn cũng kiêng kị việc cắt móng tay sau nửa đêm, đặc biệt là móng tay trẻ con vì điều này sẽ ảnh hưởng đến sức khỏe của các thành viên trong chuyến đi.</p><p>13. Xem đánh giá khách sạn: Khi tìm nơi nghỉ, bạn nên để ý tới các đánh giá về vấn đề an ninh. Đánh giá của khách từng ở sẽ giúp bạn biết thêm về an ninh trong khu vực, khách sạn có máy quay giám sát và biện pháp để bảo vệ an toàn thông tin cho khách hay không.</p><p>14. Tìm lối thoát hiểm: Ngay khi nhận phòng khách sạn bạn nên đọc hướng dẫn thoát hiểm được dán ở cửa chính của phòng. Sau đó tìm kiếm lối thoát hiểm hoặc cầu thang bộ gần nhất. Tuy việc này chỉ để đề phòng trường hợp xảy ra hỏa hoạn hoặc sự cố bất ngờ nhưng rất quan trọng. Biết trước và biết rõ lối thoát hiểm sẽ tăng cơ hội sống sót của bạn trong những tình huống bất trắc.</p><p>Lựa chọn khách sạn trong kì nghỉ luôn là vấn đề khó khăn của hầu hết mọi người, bởi bạn luôn phân vân không biết chọn nơi nào là an toàn. Đôi khi cẩn thận là không thừa, chị em chúng ta cần lưu ý những điều trên đây để chuyến đi du lịch được thuận lợi, vui vẻ nhé!</p>', 'Những điều kiêng kị khi ở khách sạn mà bạn nên biết', '2023-12-11 23:03:56', '2023-12-11 23:03:56', 6, 8),
('Ý nghĩa việc khách sạn để chocolate lên gối khi dọn phòng', 'y-nghia-viec-khach-san-de-chocolate-len-goi-khi-don-phong.webp', '<p>Các quản lý khách sạn phát hiện ra dịch vụ này nhận được nhiều lời khen từ khách thuê phòng hơn bất kỳ hoạt động nào khác. Đầu những năm 1950, nam diễn viên Mỹ gốc Anh Cary Grant hẹn gặp nhân tình tại khách sạn Mayfair ở St Louist, bang Missouri, Mỹ. Biết cô gái đến trước, Grant yêu cầu khách sạn xếp chocolate thành</p>', '<p>Các quản lý khách sạn phát hiện ra dịch vụ này nhận được nhiều lời khen từ khách thuê phòng hơn bất kỳ hoạt động nào khác.</p><p>Đầu những năm 1950, nam diễn viên Mỹ gốc Anh Cary Grant hẹn gặp nhân tình tại khách sạn Mayfair ở St Louist, bang Missouri, Mỹ. Biết cô gái đến trước, Grant yêu cầu khách sạn xếp chocolate thành một vệt dài từ phòng khách vào phòng ngủ, kết thúc trên một chiếc gối. Bên gối là một mảnh giấy nhắn mà Grant để lại cho người tình, có ghi tên cô.</p><p><img src=\"https://bizweb.dktcdn.net/100/423/358/files/anh-1-tt3.jpg?v=1623927350639\" width=\"680\" height=\"453\"></p><p>Nguồn ảnh: sưu tầm</p><p>Việc quyến rũ, tán tỉnh của Grant đến nay vẫn không ai biết kết quả thế nào, nhưng người quản lý khách sạn khi đó đã nảy ra một ý tưởng. Người này sau đó đã yêu cầu đặt những viên chocolate lên gối cho dịch vụ Turndown trong khách sạn, và nhiều nơi trên thế giới đã học theo cách này.</p><p>Turndown Service được hiểu là dịch vụ dọn phòng vào buổi chiều tối (khoảng 18-19h). Phục vụ phòng sau khi sắp xếp ngăn nắp sẽ để lại một lời chúc tốt đẹp cho khách vào buổi tối, kèm chocolate. Một số nơi còn phục vụ thêm cocktail. Dịch vụ này tạo cho khách cảm giác thoải mái, hài lòng trước khi ngủ, thường áp dụng tại các khách sạn 4-5 sao.</p><p>Khách sạn Grant thuê phòng hẹn hò với tình nhân ngày nay được đổi tên thành Magnolia Hotel St. Louis và những người quản lý ở đây vẫn tiếp tục truyền thống đặt chocolate lên gối trong các căn phòng.</p><p>Một câu hỏi được nhiều người đặt ra là tại sao các khách sạn lại học hành động này? Việc nạp một món ăn có nhiều calo, đường và chất béo trước giờ đi ngủ không phải ý tưởng hay. Nhưng ngay cả khi sự thật là như thế, các nhà quản lý vẫn phát hiện ra dịch vụ này nhận được nhiều lời khen ngợi từ khách thuê phòng hơn bất kỳ hoạt động nào khác. Và hơn thế, chi phí để đổi lấy sự hài lòng từ khách hàng lại rất nhỏ, khi giá thành của chocolate không đắt đỏ.</p><p><img src=\"https://bizweb.dktcdn.net/100/423/358/files/anh2-tt3.jpg?v=1623927394052\" width=\"680\" height=\"680\"></p><p>Nguồn ảnh: sưu tầm</p><p>Bên cạnh đó, nhiều nhà khoa học đã khen ngợi lợi ích của việc ăn chocolate. Giáo sư y khoa của đại học California, Beatrice Golomb, nói rằng đây là món ăn có nhiều lợi ích cho sức khỏe và \"là loại rau yêu thích của mình\". Golomb cũng có một phát hiện thú vị khác. Cô cho rằng cuộc gặp gỡ của Grant và người phụ nữ bí ẩn kia kết thúc không quá phấn khích như suy luận của nhiều người vì \"phụ nữ ăn chocolate sau đó thường ít có hứng thú với sex hơn\". Kết luận này được cô hài hước trích từ một phát ngôn của minh tinh Mỹ, Alicia Silverstone. Nữ diễn viên từng nói rằng thứ cô yêu thích là một hộp chocolate hảo hạng từ châu Âu, và điều này tốt hơn cả tình dục.</p><p>Ngày nay, nhiều khách sạn đã thay thế chocolate bằng những thứ khác. Lý do là nhiều khách sạn bình dân bắt đầu học theo cách đặt chocolate lên gối, nhưng đó chỉ là những viên chocolate bình thường, hình vuông không nhãn mác được sản xuất hàng loạt. Và để tạo sự khác biệt, các khách sạn cao cấp đã nghiêm túc tìm ra những món thay thế mới, gợi lên sự an lành, vui vẻ như trái cây tươi, đồ ăn vặt hoặc quà lưu niệm nhỏ xinh.</p><p>Niko Penttinen, Giám đốc phụ trách buồng phòng của Mandarin Oriental Tokyo, cho biết thứ mà họ cung cấp gợi cho khách cảm giác về nơi mà họ đang lưu trú. Khách lưu trú tại đây chủ yếu là người nước ngoài, nên việc cung cấp bánh mochi như một lời gợi ý nhẹ nhàng rằng, chào mừng họ đang ở trên đất Nhật. \"Chocolate có thể mua ở bất kỳ đâu trên thế giới, nhưng mochi là cách để giới thiệu về văn hóa Nhật Bản\". Và việc phục vụ bánh mochi thay lời chào cũng giúp khách sạn thu về những lời khen ngợi nhiều như chocolate.</p><p><img src=\"https://bizweb.dktcdn.net/100/423/358/files/anh-3tt3.jpg?v=1623927414018\" width=\"680\" height=\"453\"></p><p>Nguồn SCMP</p>', 'Ý nghĩa việc khách sạn để chocolate lên gối khi dọn phòng', '2023-12-11 23:04:38', '2023-12-11 23:04:38', 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idphong` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `rate` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 - 1 sao , 1 - 2 sao , 2 - 3 sao , 3 - 4 sao , 4 - 5 sao',
  `ngaydang` date NOT NULL,
  `ngaysua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `id_Phong` int(11) NOT NULL,
  `sl_NguoiLon` int(11) NOT NULL,
  `sl_tre_em` int(11) NOT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1- Chờ xác nhận , 2- chờ xác nhận thanh ,3 - Xác nhận thanh toán thành công, 4 - hủy phòng,5-Xác nhận trả ,6- Chờ xác nhận  nhận phòng , 7 - Xác nhận đã nhận phòng\r\n',
  `ptt` tinyint(4) NOT NULL DEFAULT 0,
  `ttBl` tinyint(4) NOT NULL DEFAULT 0,
  `created_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `iduser`, `book_name`, `sdt`, `id_Phong`, `sl_NguoiLon`, `sl_tre_em`, `check_in`, `check_out`, `price`, `status`, `ptt`, `ttBl`, `created_time`) VALUES
(1, 6, 'Bùi Ngọc Đô', 21321312, 17, 15, 123, '2023-11-14', '2023-11-27', 213123, 6, 1, 0, NULL),
(25, 8, 'Bui Ngoc Do', 336846519, 25, 2, 1, '2023-12-10', '2023-12-12', 5000000, 3, 1, 1, '2023-12-02'),
(26, 8, '', 0, 17, 2, 1, '2023-12-31', '2024-01-01', 500000, 5, 0, 0, '2023-12-02'),
(27, 8, 'Bui Ngoc Do', 3367323, 17, 2, 1, '2023-12-24', '2023-12-26', 1000000, 3, 0, 0, '2023-12-04'),
(28, 8, 'Bui Ngoc Do', 3367323, 17, 2, 1, '2023-12-24', '2023-12-26', 1000000, 3, 0, 0, '2023-12-04'),
(29, 8, 'Bui Ngoc Do', 3367323, 17, 2, 1, '2023-12-24', '2023-12-26', 1000000, 3, 0, 0, '2023-12-04'),
(30, 10, 'thangtess21', 321654987, 17, 2, 1, '2023-12-13', '2023-12-16', 1500000, 6, 1, 0, '2023-12-12'),
(31, 10, 'thangtess', 321654987, 19, 2, 1, '2023-12-26', '2023-12-29', 1500000, 6, 0, 0, '2023-12-12'),
(32, 10, 'thangtess', 321654987, 17, 2, 1, '2023-12-23', '2023-12-24', 500000, 1, 1, 0, '2023-12-13'),
(33, 10, 'thangtess', 321654987, 19, 2, 1, '2023-12-15', '2023-12-17', 1000000, 1, 0, 0, '2023-12-14'),
(34, 10, 'thangtess', 321654987, 18, 2, 1, '2023-12-15', '2023-12-17', 1400000, 1, 1, 0, '2023-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_LoaiPhong` int(11) NOT NULL,
  `ten_LoaiPhong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_LoaiPhong`, `ten_LoaiPhong`) VALUES
(27, 'Phòng đơn'),
(28, 'Phòng đôi'),
(29, 'Phòng Vip');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `ten_dichVu` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id`, `ten_dichVu`, `icon`) VALUES
(5, 'Internet Không Dây', 'tag_icon_5.svg'),
(7, 'Cafe Buổi Sáng', 'tag_icon_1.svg'),
(8, 'Gọi Đồ Ăn Tại Phòng', 'tag_icon_2.svg');

-- --------------------------------------------------------

--
-- Table structure for table `dichvuphong`
--

CREATE TABLE `dichvuphong` (
  `id` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `id_dichVu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dichvuphong`
--

INSERT INTO `dichvuphong` (`id`, `id_phong`, `id_dichVu`) VALUES
(22, 17, 5),
(24, 18, 5),
(26, 19, 5),
(28, 20, 5),
(30, 21, 5),
(32, 22, 5),
(34, 23, 5),
(36, 24, 5),
(38, 25, 5),
(40, 26, 5),
(42, 27, 5),
(44, 28, 5),
(46, 29, 5),
(48, 29, 7),
(49, 29, 8),
(50, 28, 7);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ngaytao` date NOT NULL,
  `role` int(11) NOT NULL,
  `ngaysua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `user_name`, `name`, `email`, `diachi`, `sdt`, `img`, `password`, `ngaytao`, `role`, `ngaysua`) VALUES
(5, 'admin4', 'Bui Ngoc Do', '', '', 0, '', '202cb962ac59075b964b07152d234b70', '2023-11-21', 0, '2023-11-21'),
(6, 'admin3', 'Bui Ngoc Do', '', '', 0, '', '022a32110cfaf533505f7e68c5088680', '2023-11-21', 0, '2023-11-21'),
(7, 'admin5', 'Bui Ngoc Do', '', '', 0, '', '022a32110cfaf533505f7e68c5088680', '2023-11-21', 1, '2023-11-21'),
(8, 'admin6', 'Bui Ngoc Do', '', '', 0, '', '022a32110cfaf533505f7e68c5088680', '2023-11-21', 0, '2023-11-21'),
(10, 'user2 ', 'Xuanthang', 'thangijr@gmail.com', '', 0, '', 'dbc4d84bfcfe2284ba11beffb853a8c4', '2023-11-28', 0, '2023-11-28'),
(11, 'adminthang', 'XuanThaggg', '', '', 0, '', 'd1d16c28c7674cfc5e269dbe1209f552', '2023-11-29', 0, '2023-11-29'),
(12, 'admin123', 'Bui Ngoc Do', '', '', 0, '', 'c8dafa13bcff919a726abab24e527e58', '2023-12-12', 1, '2023-12-12'),
(13, 'Buingocdo2004@', 'Buingocdo', '', '', 0, '', 'c8dafa13bcff919a726abab24e527e58', '2023-12-12', 0, '2023-12-12'),
(14, 'user3', 'Thangggg', 'hai@gmail.com', 'Hà Tây', 0, '', 'dbc4d84bfcfe2284ba11beffb853a8c4', '2023-12-12', 0, '2023-12-12'),
(15, 'user2@ịiji', '  XuanThang2002', 'abc@gmail.com', '', 0, '', 'dbc4d84bfcfe2284ba11beffb853a8c4', '2023-12-12', 0, '2023-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `id` int(11) NOT NULL,
  `ten_Phong` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `slNguoiLon` int(11) NOT NULL,
  `slTreEm` int(11) NOT NULL,
  `dientich` double(10,2) NOT NULL DEFAULT 0.00,
  `sl_Phong` int(11) NOT NULL DEFAULT 0,
  `gia` double(10,2) NOT NULL DEFAULT 0.00,
  `mota_chung` text NOT NULL,
  `mota_chinh` text NOT NULL,
  `id_loaiPhong` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 : Hoạt động, 1 - Bảo trì'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`id`, `ten_Phong`, `avatar`, `slNguoiLon`, `slTreEm`, `dientich`, `sl_Phong`, `gia`, `mota_chung`, `mota_chinh`, `id_loaiPhong`, `status`) VALUES
(17, 'Phòng đơn tiêu chuẩn', 'anh1.webp', 2, 1, 20.00, 1, 500000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Với cảnh quan tuyệt đẹp, bạn sẽ tận hưởng đầy đủ kỳ nghỉ với các dịch vụ hoàn hảo. Ngoài ra khách đặt phòng còn được miễn phí ăn sáng. Tiện ích phòng đầy đủ máy lạnh,&nbsp;tivi màn hình phẳng và nhiều tiện ích khác nữa.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)&nbsp;</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p>', 27, 0),
(18, 'Phòng đơn view thành phố', 'anh5.webp', 2, 1, 25.00, 1, 700000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Với cảnh quan tuyệt đẹp của thành phố về đêm bạn sẽ ngắm được toàn cảnh thành phố với những ánh đèn và bản nhạc chill đem lại cho bạn sự thư thái và nhẹ nhàng trong tâm hồn, Đến với chúng tôi&nbsp;bạn sẽ tận hưởng đầy đủ kỳ nghỉ với các dịch vụ hoàn hảo. Ngoài ra khách đặt phòng còn được miễn phí ăn sáng. Tiện ích phòng đầy đủ máy lạnh,&nbsp;tivi màn hình phẳng và nhiều tiện ích khác nữa.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p><p><strong>Lưu ý:</strong></p><p>- Không hút thuốc trên giường</p><p>- Không mang thú cưng</p><p>- Quy định nhận phòng: quý khách vui lòng mang theo CMND (ID) hoặc Hộ Chiếu (Passport) (đối với người nước ngoài) hoặc thẻ tạm trú (đối với khách nước ngoài đi công tác) cùng phiếu xác nhận đặt phòng.</p>', 27, 0),
(19, 'Phòng đơn view sân vườn', 'anh8.webp', 2, 1, 20.00, 2, 500000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Phòng đơn khu view vườn rộng rãi xây tách biệt với ánh sáng tự nhiên.</p><p>Hòa mình vào thiên nhiên và cảnh quan lúc đi nghỉ dưỡng, tạo sự thoải mái và bình yên đến lạ kỳ là những gì chúng tôi mong muốn đem đến cho kỳ nghỉ của bạn.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi), Đặt món tại phòng chỉ với chiếc smartphone của bạn</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p>', 27, 0),
(20, 'Phòng đơn view sân biển', 'anh13.webp', 2, 1, 20.00, 2, 500000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Tiện nghi đầy đủ, chu đáo bao. Đảm bảo dịch vụ tốt nhất để quý khách có thể tận hưởng những tính năng tuyệt vời như wifi free,bãi đỗ xe....</p><p>Có hệ thống nhà hàng hiện đại, phục vụ các món ăn Á – Âu được chế biến từ đội ngũ đầu bếp giàu kinh nghiệm. Quý khách sẽ được thưởng thức các món ăn đa dạng và phong phú.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p>', 27, 0),
(21, 'Phòng đôi tiêu chuẩn', 'anh14.webp', 2, 1, 30.00, 2, 750000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Tiện nghi đầy đủ, chu đáo bao. Đảm bảo dịch vụ tốt nhất để quý khách có thể tận hưởng những tính năng tuyệt vời như wifi free,bãi đỗ xe....</p><p>Có hệ thống nhà hàng hiện đại, phục vụ các món ăn Á – Âu được chế biến từ đội ngũ đầu bếp giàu kinh nghiệm. Quý khách sẽ được thưởng thức các món ăn đa dạng và phong phú.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p>', 28, 0),
(22, 'Phòng đôi tiêu view thành phố', 'anh19.webp', 2, 1, 30.00, 2, 900000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>iện nghi đầy đủ, chu đáo bao. Đảm bảo dịch vụ tốt nhất để quý khách có thể tận hưởng những tính năng tuyệt vời như wifi free,bãi đỗ xe....</p><p>Chúng tôi chọn ra những view thành phố đẹp nhất để bạn được trải nghiệm ngắm nhìn thành phố và thưởng thức những bản nhạc du dương nuôi dưỡng thể chất là tinh thần của bạn</p><p>Bên cạnh đó chúng tôi còn mang đến cho bạn một không gian nhà bêp riếng đáp ứng nhu cầu ẩm thực của quý khách</p><p>Có hệ thống nhà hàng hiện đại, phục vụ các món ăn Á – Âu được chế biến từ đội ngũ đầu bếp giàu kinh nghiệm. Quý khách sẽ được thưởng thức các món ăn đa dạng và phong phú.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p><p>Chúc bạn và người thân yêu có 1 kì nghĩ thật là thoải mái và vui vẽ!</p>', 28, 0),
(23, 'Phòng đôi tiêu 2 giường đôi', 'anh20.webp', 4, 1, 35.00, 2, 1000000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Tiện nghi đầy đủ, chu đáo bao. Đảm bảo dịch vụ tốt nhất để quý khách có thể tận hưởng những tính năng tuyệt vời như wifi free,bãi đỗ xe....</p><p>Phòng đôi 2 giường dành cho các nhóm bạn hoặc gia đình đi du lịch cùng nhau. Với mong muốn khách hàng sẽ lưu được nhiều kĩ niệm tốt và có 1 kỹ nghĩ vui vẽ chúng tôi còn cung cấp dịch vụ chụp hình gia đình, bạn bè với nhiều chủ đề như phong cảnh, lãng mạn, hoang dã và bình yên.</p><p>Bếp nấu cũng là một trong những dịch vụ mà khách sạn mang đến để các khách hàng có thể tự tay chế biến những món ăn tốt nhất, ngon nhất đầy tình yêu thương cho gia đình và bạn bè của mình</p><p>Có hệ thống nhà hàng hiện đại, phục vụ các món ăn Á – Âu được chế biến từ đội ngũ đầu bếp giàu kinh nghiệm. Quý khách sẽ được thưởng thức các món ăn đa dạng và phong phú.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p><p>Chúc bạn và người thân yêu có 1 kì nghĩ thật là thoải mái và vui vẽ!</p>', 28, 0),
(24, 'Phòng đôi tiêu view sân vườn', 'anh23.webp', 2, 1, 35.00, 2, 750000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Tiện nghi đầy đủ, chu đáo bao. Đảm bảo dịch vụ tốt nhất để quý khách có thể tận hưởng những tính năng tuyệt vời như wifi free,bãi đỗ xe....</p><p>Khách sạn đã thiết kế loại phòng sân vườn hài hòa và bình yên. Đến đây, khách hàng sẽ được hòa mình vào thiên nhiên và bên cạnh đó cảm nhận được sự thân thuộc như ở ngay chính ngôi nhà của bạn.</p><p>Bên cạnh đó chúng tôi còn mang đến cho bạn một không gian nhà bêp riếng đáp ứng nhu cầu ẩm thực của quý khách</p><p>Có hệ thống nhà hàng hiện đại, phục vụ các món ăn Á – Âu được chế biến từ đội ngũ đầu bếp giàu kinh nghiệm. Quý khách sẽ được thưởng thức các món ăn đa dạng và phong phú.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p><p>Chúc bạn và người thân yêu có 1 kì nghĩ thật là thoải mái và vui vẽ!</p>', 28, 0),
(25, 'Phòng đơn VIP ', 'anh26.webp', 1, 1, 35.00, 2, 2500000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Với tiêu chí ngày càng nâng cao và đáp ứng mọi nhu cầu của khách hàng chúng tôi cung cấp thêm loại phòng đơn loại VIP để đáp ứng sự sang trọng và hiện đại của khách hàng.&nbsp;</p><p>Với phòng này quý khách sẽ được phục vụ đầy đủ các chính sách và dịch vụ của phòng VIP. Với chúng tôi được đồng hành cùng sự sang trọng và đẳng cấp của khách hàng là một niềm vinh dự to lớn.</p><p>Có hệ thống nhà hàng hiện đại, phục vụ các món ăn Á – Âu được chế biến từ đội ngũ đầu bếp giàu kinh nghiệm. Quý khách sẽ được thưởng thức các món ăn đa dạng và phong phú.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p><p>Chúc bạn và người thân yêu có 1 kì nghĩ thật là thoải mái và vui vẽ!</p>', 29, 0),
(26, 'Phòng hạng sang', 'anh29.webp', 2, 1, 35.00, 2, 3500000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Mang đến cho Quý khách những trải nghiệm tiện nghi, thoải mái.Phòng hạng sang hai giường đều có kết cấu&nbsp;tiện nghi&nbsp;với ghế sofa thoải mái cùng không gian tối giản ấm cúng hướng núi.&nbsp;Mỗi phòng đều được trang bị TV màn hình phẳng 32”, kết nối Internet Wifi miễn phí tại phòng và nhà tắm đứng rộng rãi.&nbsp;</p><p>Chúng tôi rất tự hào&nbsp;khi đã được đồng hành và chia sẽ những khoảnh khắc đó ngay tại khách sạn của chúng tôi !</p><p>Có hệ thống nhà hàng hiện đại, phục vụ các món ăn Á – Âu được chế biến từ đội ngũ đầu bếp giàu kinh nghiệm. Quý khách sẽ được thưởng thức các món ăn đa dạng và phong phú.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p><p>Chúc bạn và người thân yêu có 1 kì nghĩ thật là thoải mái và vui vẽ!</p>', 29, 0),
(27, 'Phòng gia đình', 'anh31.webp', 4, 1, 35.00, 2, 5500000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Phòng được thiết kế theo phong cách thiết kế chung cư. Danh cho những gia đinh, cá nhân đã quen với nhu cầu sinh hoạt và môi trường chung cư, căn hộ.</p><p>Mang đển sự thoải mái và đáp ứng mọi dịch vụ và chính sách đi kèm đối với loại phòng có phong cách, thiết kế, nội thất dành cho căn hộ, chung cư.</p><p>Chúng tôi rất tự hào&nbsp;khi đã được đồng hành và chia sẽ những khoảnh khắc đó ngay tại khách sạn của chúng tôi !</p><p>Có hệ thống nhà hàng hiện đại, phục vụ các món ăn Á – Âu được chế biến từ đội ngũ đầu bếp giàu kinh nghiệm. Quý khách sẽ được thưởng thức các món ăn đa dạng và phong phú.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p><p>Chúc bạn và người thân yêu có 1 kì nghĩ thật là thoải mái và vui vẽ!</p>', 29, 0),
(28, 'Phòng VIP 1', 'anh9.webp', 4, 1, 40.00, 2, 1500000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Phòng được thiết kế theo phong cách thiết kế chung cư. Danh cho những gia đinh, cá nhân đã quen với nhu cầu sinh hoạt và môi trường chung cư, căn hộ.</p><p>Mang đển sự thoải mái và đáp ứng mọi dịch vụ và chính sách đi kèm đối với loại phòng có phong cách, thiết kế, nội thất dành cho căn hộ, chung cư.</p><p>Chúng tôi rất tự hào&nbsp;khi đã được đồng hành và chia sẽ những khoảnh khắc đó ngay tại khách sạn của chúng tôi !</p><p>Có hệ thống nhà hàng hiện đại, phục vụ các món ăn Á – Âu được chế biến từ đội ngũ đầu bếp giàu kinh nghiệm. Quý khách sẽ được thưởng thức các món ăn đa dạng và phong phú.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p><p>Chúc bạn và người thân yêu có 1 kì nghĩ thật là thoải mái và vui vẽ!</p>', 29, 0),
(29, 'Phòng VIP A', 'anh27.webp', 4, 1, 40.00, 2, 1500000.00, 'Các phòng trang nhã và dãy phòng trang nghiêm của chúng tôi gợi nhớ về một thời đại đã qua. Mỗi tính năng như đường cong, thảm sang trọng, trần nhà cao, phòng tắm lát đá cẩm thạch, thiết bị làm sạch và nhiều không gian đều được bố trí một cách chu đáo để gọi cho riêng bạn. Tông màu nâu phong phú và gỗ sồi tự nhiên tạo nên những khu bảo tồn yên tĩnh và yên tĩnh, được tôn lên một cách tuyệt vời bởi đồ nội thất trang nhã.', '<p>Với cảnh quan tuyệt đẹp của thành phố về đêm bạn sẽ ngắm được toàn cảnh thành phố với những ánh đèn và bản nhạc chill đem lại cho bạn sự thư thái và nhẹ nhàng trong tâm hồn, Đến với chúng tôi&nbsp;bạn sẽ tận hưởng đầy đủ kỳ nghỉ với các dịch vụ hoàn hảo. Ngoài ra khách đặt phòng còn được miễn phí ăn sáng. Tiện ích phòng đầy đủ máy lạnh,&nbsp;tivi màn hình phẳng và nhiều tiện ích khác nữa.</p><p><strong>Dịch vụ miễn phí:</strong>&nbsp;Ăn sáng tự chọn, Nước khoáng trên phòng nghỉ, Dịch Internet không dây (wifi)</p><p><strong>Giờ trả phòng: </strong>12h00 hàng ngày</p><p><strong>Hình thức Thanh toán:</strong>&nbsp;Tiền mặt (VND, USD, EURO, …) thẻ tín dụng Visa và Master</p><p>* Nếu Quý khách thanh toán bằng ngoại tệ thì theo tỷ giá hối đoái của Ngân hàng hiện thời.</p><p><strong>Lưu ý:</strong></p><p>- Không hút thuốc trên giường</p><p>- Không mang thú cưng</p><p>- Quy định nhận phòng: quý khách vui lòng mang theo CMND (ID) hoặc Hộ Chiếu (Passport) (đối với người nước ngoài) hoặc thẻ tạm trú (đối với khách nước ngoài đi công tác) cùng phiếu xác nhận đặt phòng.</p>', 29, 0);

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE `privilege` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `url_match` varchar(255) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `group_id`, `name`, `url_match`, `created_time`, `last_updated`) VALUES
(1, 1, 'Thêm loại phòng', 'act=them&page=loaiphong$', 12345566, 12345566),
(2, 1, 'Liệt kê loại phòng', 'act=lk&page=loaiphong$', 12345566, 12345566),
(3, 1, 'Sửa loại phòng', 'page=loaiphong&act=edit&id=\\d+$', 12345566, 12345566),
(4, 1, 'Xóa loại phòng', 'act=delete&page=loaiphong&id=\\d+$|act=rmAll&page=loaiphong&id', 12345566, 12345566),
(5, 2, 'Xóa phòng', 'act=delete&page=phong&id=\\d+$|act=rmAll&page=phong&id', 12345566, 12345566),
(7, 2, 'Thêm phòng', 'act=them\\&page=phong$', 12345566, 12345566),
(8, 2, 'Liệt kê phòng', 'act=lk\\&page=phong\\&currentPage=\\d+$', 12345566, 12345566),
(9, 2, 'Sửa loại phòng', 'act=edit\\&page=phong\\&id=\\d+$', 12345566, 12345566),
(10, 4, 'Thêm tiện nghi', 'act=them\\&page=tiennghi$', 12345566, 12345566),
(11, 4, 'Liệt kê tiện nghi', 'act=lk\\&page=tiennghi$', 12345566, 12345566),
(12, 4, 'Sửa tiện nghi', 'act=sua\\&page=tiennghi\\&id=\\d+$', 12345566, 12345566),
(13, 4, 'Xóa tiện nghi', 'act=delete&page=tiennghi&id=\\d+$|act=rmAll&page=tiennghi&id', 12345566, 12345566),
(14, 3, 'Thêm thành viên', 'act=them\\&page=thanhvien$', 12345566, 12345566),
(15, 3, 'Liệt kê thành viên', 'act=lk\\&page=thanhvien\\&currentPage=\\d+$', 12345566, 12345566),
(16, 3, 'Sửa thành viên', 'page=thanhvien\\&act=edit\\&id=\\d+$', 12345566, 12345566),
(17, 3, 'Xóa thành viên', 'page=thanhvien&act=delete&id=\\d+$|act=rmAll&page=thanhvien&id', 12345566, 12345566),
(18, 3, 'Phân quyền thành viên', 'act=privilege\\&page=thanhvien\\&id=\\d+$', 12345566, 12345566),
(19, 5, 'Liệt kê bình luận', 'act=lk\\&page=bl\\&currentPage=1', 12345566, 12345566),
(20, 5, 'Xóa bình luận', 'act=delete\\&page=bl\\&id=\\d+$|act=rmAll\\&page=bl\\&id', 12345566, 12345566),
(21, 6, 'Xác nhận đặt phòng', 'act=xndp\\&page=datphong&currentPage=\\d+$|act=huydp\\&page=datphong&status=\\d+&id=\\d+$|act=xndp&page=datphong&status=\\d+&id=\\d+$', 12345566, 12345566),
(22, 6, 'Xác nhận thanh toán', 'act=xntt\\&page=datphong&currentPage=\\d+$|act=xntt\\&page=datphong&status=\\d+&id=\\d+$', 12345566, 12345566),
(23, 6, 'Lịch sử đặt phòng', 'act=history\\&page=datphong&currentPage=\\d+$', 12345566, 12345566),
(24, 6, 'Xác nhận trả phòng', 'act=xntp\\&page=datphong&currentPage=\\d+$|act=xntp\\&page=datphong&status=\\d+&id=\\d+$', 12345566, 12345566),
(25, 6, 'Xác nhận nhận phòng', 'act=xnnp\\&page=datphong&currentPage=\\d+$|act=xnnp\\&page=datphong&status=\\d+&id=\\d+$', 12345566, 12345566),
(26, 7, 'Thêm bài viết', 'act=them&page=baiviet$', 12345566, 12345566),
(27, 7, 'Liệt kê bài viết', 'act=lk&page=baiviet&currentPage=\\d+$', 12345566, 12345566),
(28, 7, 'Sửa bài viết', 'act=edit&page=baiviet&id=\\d+$', 12345566, 12345566),
(29, 7, 'Xóa bài viết', 'act=delete&page=baiviet&id=\\d+$|act=rmAll&page=baiviet&id', 12345566, 12345566);

-- --------------------------------------------------------

--
-- Table structure for table `privilege_group`
--

CREATE TABLE `privilege_group` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privilege_group`
--

INSERT INTO `privilege_group` (`id`, `name`, `position`, `created_time`, `last_updated`) VALUES
(1, 'Loại phòng', 1, 12345566, 12345566),
(2, 'Phòng', 2, 12345566, 12345566),
(3, 'Thành viên', 3, 12345566, 12345566),
(4, 'Dịch Vụ', 4, 12345566, 12345566),
(5, 'Bình luận', 5, 12345566, 12345566),
(6, 'Đặt phòng', 6, 12345566, 12345566),
(7, 'Bài viết', 7, 12345566, 12345566);

-- --------------------------------------------------------

--
-- Table structure for table `thongke`
--

CREATE TABLE `thongke` (
  `id` int(11) NOT NULL,
  `doanhthu` int(11) NOT NULL,
  `soluongdatphong` int(11) NOT NULL,
  `ngaydat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thongke`
--

INSERT INTO `thongke` (`id`, `doanhthu`, `soluongdatphong`, `ngaydat`) VALUES
(1, 1500000, 15, '2023-12-04'),
(2, 100000, 117, '2023-12-03'),
(3, 3000, 10, '2023-12-03'),
(4, 20000, 12, '2023-12-02'),
(5, 222345, 122, '2023-11-28'),
(6, 222, 122, '2023-11-06'),
(7, 5983722, 17, '2023-12-05'),
(8, 3000000, 2, '2023-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `user_privilege`
--

CREATE TABLE `user_privilege` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_privilege`
--

INSERT INTO `user_privilege` (`id`, `user_id`, `privilege_id`, `created_time`, `last_updated`) VALUES
(17, 8, 4, 1700884443, 1700884443),
(18, 8, 5, 1700884443, 1700884443),
(19, 8, 7, 1700884443, 1700884443),
(20, 8, 8, 1700884443, 1700884443),
(21, 8, 9, 1700884443, 1700884443),
(22, 8, 14, 1700884443, 1700884443),
(23, 8, 15, 1700884443, 1700884443),
(24, 8, 16, 1700884443, 1700884443),
(25, 8, 17, 1700884443, 1700884443),
(26, 8, 18, 1700884443, 1700884443),
(27, 8, 10, 1700884443, 1700884443),
(28, 8, 11, 1700884443, 1700884443),
(29, 8, 12, 1700884443, 1700884443),
(30, 8, 13, 1700884443, 1700884443),
(31, 8, 19, 1700884443, 1700884443),
(32, 8, 20, 1700884443, 1700884443),
(33, 8, 21, 1700884443, 1700884443),
(34, 8, 22, 1700884443, 1700884443),
(35, 8, 23, 1700884443, 1700884443),
(40, 7, 1, 1700886409, 1700886409),
(41, 7, 2, 1700886409, 1700886409),
(42, 7, 3, 1700886409, 1700886409),
(44, 7, 15, 1700911533, 1700911533),
(45, 7, 11, 1700886409, 1700886409),
(68, 10, 1, 1701224754, 1701224754),
(69, 10, 2, 1701224754, 1701224754),
(70, 10, 3, 1701224754, 1701224754),
(71, 10, 4, 1701224754, 1701224754),
(72, 10, 5, 1701224754, 1701224754),
(73, 10, 7, 1701224754, 1701224754),
(74, 10, 8, 1701224754, 1701224754),
(75, 10, 9, 1701224754, 1701224754),
(76, 10, 14, 1701224754, 1701224754),
(77, 10, 15, 1701224754, 1701224754),
(78, 10, 16, 1701224754, 1701224754),
(79, 10, 17, 1701224754, 1701224754),
(80, 10, 18, 1701224754, 1701224754),
(81, 10, 10, 1701224754, 1701224754),
(82, 10, 11, 1701224754, 1701224754),
(83, 10, 12, 1701224754, 1701224754),
(84, 10, 13, 1701224754, 1701224754),
(85, 10, 19, 1701224754, 1701224754),
(86, 10, 20, 1701224754, 1701224754),
(87, 10, 21, 1701224754, 1701224754),
(88, 10, 22, 1701224754, 1701224754),
(89, 10, 23, 1701224754, 1701224754),
(90, 8, 24, 13123, 3123),
(91, 8, 25, 1700884443, 1700884443),
(92, 8, 2, 1700884443, 1700884443),
(93, 8, 3, 1700884443, 1700884443),
(94, 8, 1, 1700884443, 1700884443),
(95, 8, 27, 1700884443, 1700884443),
(96, 8, 28, 1700884443, 1700884443),
(97, 8, 29, 1700884443, 1700884443),
(98, 8, 26, 1700884443, 1700884443),
(99, 7, 4, 1702344928, 1702344928),
(100, 7, 5, 1702344928, 1702344928),
(101, 7, 7, 1702344928, 1702344928),
(102, 7, 8, 1702344928, 1702344928),
(103, 7, 9, 1702344928, 1702344928),
(104, 7, 14, 1702344928, 1702344928),
(105, 7, 16, 1702344928, 1702344928),
(106, 7, 17, 1702344928, 1702344928),
(107, 7, 18, 1702344928, 1702344928),
(108, 7, 10, 1702344928, 1702344928),
(109, 7, 12, 1702344928, 1702344928),
(110, 7, 13, 1702344928, 1702344928),
(111, 7, 19, 1702344928, 1702344928),
(112, 7, 20, 1702344928, 1702344928),
(113, 7, 21, 1702344928, 1702344928),
(114, 7, 22, 1702344928, 1702344928),
(115, 7, 23, 1702344928, 1702344928),
(116, 7, 24, 1702344928, 1702344928),
(117, 7, 25, 1702344928, 1702344928),
(118, 7, 26, 1702344928, 1702344928),
(119, 7, 27, 1702344928, 1702344928),
(120, 7, 28, 1702344928, 1702344928),
(121, 7, 29, 1702344928, 1702344928),
(122, 12, 1, 1702345276, 1702345276),
(123, 12, 2, 1702345276, 1702345276),
(124, 12, 3, 1702345276, 1702345276),
(125, 12, 4, 1702345276, 1702345276),
(126, 12, 5, 1702345276, 1702345276),
(127, 12, 7, 1702345276, 1702345276),
(128, 12, 8, 1702345276, 1702345276),
(129, 12, 9, 1702345276, 1702345276),
(130, 12, 14, 1702345276, 1702345276),
(131, 12, 15, 1702345276, 1702345276),
(132, 12, 16, 1702345276, 1702345276),
(133, 12, 17, 1702345276, 1702345276),
(134, 12, 18, 1702345276, 1702345276),
(135, 12, 10, 1702345276, 1702345276),
(136, 12, 11, 1702345276, 1702345276),
(137, 12, 12, 1702345276, 1702345276),
(138, 12, 13, 1702345276, 1702345276),
(139, 12, 19, 1702345276, 1702345276),
(140, 12, 20, 1702345276, 1702345276),
(141, 12, 21, 1702345276, 1702345276),
(142, 12, 22, 1702345276, 1702345276),
(143, 12, 23, 1702345276, 1702345276),
(144, 12, 24, 1702345276, 1702345276),
(145, 12, 25, 1702345276, 1702345276),
(146, 12, 26, 1702345276, 1702345276),
(147, 12, 27, 1702345276, 1702345276),
(148, 12, 28, 1702345276, 1702345276),
(149, 12, 29, 1702345276, 1702345276);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhphong`
--
ALTER TABLE `anhphong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_anhphong_phong` (`id_Phong`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_baiViet`),
  ADD KEY `id_user_baiviet_fk` (`id_user`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_binhluan_nguoidung` (`iduser`),
  ADD KEY `lk_binhluan_phong` (`idphong`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_book_nguoidung` (`iduser`),
  ADD KEY `id_phong_fk2` (`id_Phong`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_LoaiPhong`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dichvuphong`
--
ALTER TABLE `dichvuphong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Phong_fk` (`id_phong`),
  ADD KEY `id_dichVu_fk` (`id_dichVu`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_phong_danhmuc` (`id_loaiPhong`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id_fk01` (`group_id`);

--
-- Indexes for table `privilege_group`
--
ALTER TABLE `privilege_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_privilege`
--
ALTER TABLE `user_privilege`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_fk1` (`user_id`),
  ADD KEY `privilage_id_fk1` (`privilege_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhphong`
--
ALTER TABLE `anhphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_baiViet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_LoaiPhong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dichvuphong`
--
ALTER TABLE `dichvuphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `privilege_group`
--
ALTER TABLE `privilege_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_privilege`
--
ALTER TABLE `user_privilege`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anhphong`
--
ALTER TABLE `anhphong`
  ADD CONSTRAINT `lk_anhphong_phong` FOREIGN KEY (`id_Phong`) REFERENCES `phong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `id_user_baiviet_fk` FOREIGN KEY (`id_user`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_nguoidung` FOREIGN KEY (`iduser`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lk_binhluan_phong` FOREIGN KEY (`idphong`) REFERENCES `phong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `id_phong_fk2` FOREIGN KEY (`id_Phong`) REFERENCES `phong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lk_book_nguoidung` FOREIGN KEY (`iduser`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dichvuphong`
--
ALTER TABLE `dichvuphong`
  ADD CONSTRAINT `id_Phong_fk` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_dichVu_fk` FOREIGN KEY (`id_dichVu`) REFERENCES `dichvu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `lk_phong_danhmuc` FOREIGN KEY (`id_loaiPhong`) REFERENCES `danhmuc` (`id_LoaiPhong`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `privilege`
--
ALTER TABLE `privilege`
  ADD CONSTRAINT `group_id_fk01` FOREIGN KEY (`group_id`) REFERENCES `privilege_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_privilege`
--
ALTER TABLE `user_privilege`
  ADD CONSTRAINT `privilage_id_fk1` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_fk1` FOREIGN KEY (`user_id`) REFERENCES `nguoidung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
