<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'dbtapchi');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@<*t3Nd 3H/E:lt$5:s4<qxVN-Y|A]hTZOR|u`vBBO[ZsVu!N!+Fw3U[^r;6Ml=O');
define('SECURE_AUTH_KEY',  ' =0X8ezGC!1i0^jtzhW1lnI@MOpoMm0V}A(tX%|of%5BYt9`(zVTqu:5~yGb=C-r');
define('LOGGED_IN_KEY',    'E!8V<0cQcEy#jrd+&S_-Dl#-tLwvv)q9(XxJx-xFzZVn)*{kr^X163c6/VTL=FB)');
define('NONCE_KEY',        '+E3Fv=K@R?LDK7ZUs Fe2S[^2<8&e@-B|4VM[DI Ew%i}=wi}J=%`S~M]60luV;B');
define('AUTH_SALT',        'haBiTD4IsQY,l[k;rV&n#>n<6 xu=_9a-O~$KD3zd$S3|8f>q)v|WE#R28U|fHwT');
define('SECURE_AUTH_SALT', '!5L}ui7lj,T2Q}[s3zI-/JIeIY_M1.,dXAB93_xMjd93KF7?i@lH:0F)8Ul#`f=I');
define('LOGGED_IN_SALT',   'D]<cpK}z/p4Ks-S$k~Ar-f.o;8J89? iE8v<Dg^JH.Iy&]Rgp~-7qf>k5M$60q+E');
define('NONCE_SALT',       'fS(Z8rs #_2?w4Dej3O1cT|Jf1o|*J{Q2?!n|Y,B<4Bf-QqU[BwjJ8<}rGgTl9a>');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
