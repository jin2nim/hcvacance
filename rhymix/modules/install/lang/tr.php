<?php
$lang->install_progress_menu['language'] = 'Yükleme dilini seçin';
$lang->install_checklist_title['php_version'] = 'PHP Sürümü';
$lang->install_checklist_title['permission'] = 'files klasör izinleri';
$lang->install_checklist_title['xml'] = 'xml / simplexml';
$lang->install_checklist_title['curl'] = 'curl';
$lang->install_checklist_title['iconv'] = 'iconv / mbstring';
$lang->install_checklist_title['json'] = 'json';
$lang->install_checklist_title['gd'] = 'gd';
$lang->install_checklist_title['mcrypt'] = 'mcrypt / openssl';
$lang->install_checklist_title['session'] = 'session';
$lang->install_checklist_desc['permission'] = '[Gerekli] Rhymix kurulum yolu ya da ./files directory yolunun yetkisi 777 olmalıdır';
$lang->install_checklist_desc['xml'] = '[Gerekli] XML iletişimi için XML kitaplığı gereklidir.';
$lang->install_checklist_desc['session'] = '[Gerekli] PHP Oturumu kullanılabilir olmalı ve oturumu kullanmak için \'session.auto_start\' \'off\' olmalıdır.';
$lang->install_checklist_desc['iconv'] = 'Iconv, UTF-8 ve diğer dil ayarlarını değiştirebilmek için kurulmuş olmalıdır';
$lang->install_checklist_desc['gd'] = 'GD Kitaplığı, resim değiştirme özelliğini kullanabilmek için kurulmuş, olmalıdır';
$lang->install_checklist_xml = 'XML Kitaplığını Kur';
$lang->install_without_xml = 'XML Kitaplığı kurulmamış';
$lang->install_checklist_gd = 'GD Kitaplığını Kur';
$lang->install_without_gd = 'GD Library, resim dönüştürmek için, kurulmamış';
$lang->install_without_iconv = 'Iconv Kitaplığı, karakterleri sıralamak için, kurulmamış';
$lang->install_session_auto_start = 'Olası hatalar php ayarlarından dolayı oluşabilir. session.auto_start 1\'e eşit olmalıdır';
$lang->install_permission_denied = 'Kurulum yolu yetkisi 777\'ye eşit değil';
$lang->cmd_install_refresh_page = 'Gerekli koşulları tamamladım.';
$lang->cmd_install_next = 'Kuruluma Devam Et';
$lang->cmd_ignore = 'Önemseme';
$lang->cmd_recommended = 'Tavsiye edilen';
$lang->form_title = 'Veritabanı &amp; Yönetici Bilgisi';
$lang->db_title = 'Lütfen Veritabanı bilgisini giriniz';
$lang->db_type = 'Veritabanı Tipi';
$lang->select_db_type = 'Lütfen kullanmak istediğiniz Veritabanını seçiniz.';
$lang->db_hostname = 'Veritabanı Sunucuadı';
$lang->db_port = 'Veritabanı Portu';
$lang->db_userid = 'Veritabanı ID';
$lang->db_password = 'Veritabanı Şifresi';
$lang->db_table_prefix = 'Tablo Başlığı';
$lang->admin_title = 'Yönetici Bilgisi';
$lang->env_title = 'Yapılandırma';
$lang->use_optimizer = 'Optimizasyonu Etkinleştir';
$lang->about_optimizer = 'Eğer Optimizasyon etkinleştirildiyse, çoklu CSS / JS dosyaları gönderimden önce sıkıştırılıp bir araya konulduğundan, kullanıcılar siteye hızlı bir şekilde ulaşacaktır. <br /> Ancak;  bu optimizasyon, CSS ve JS\'ye göre sorunlu olabilir. Eğer bunu devre dışı bırakırsanız, düzgün bir şekilde çalışmasına karşın daha yavaş çalışacaktır.';
$lang->use_rewrite = 'YenidenYazma Modu (mod_rewrite)';
$lang->use_sso = 'Tekli Oturum Açma';
$lang->about_rewrite = 'Eğer websunucusu yenidenyazma(rewritemod) destekliyorsa, http://ornek/?dosya_no=123 gibi URLler http://ornek/123 olarak kısaltılabilir';
$lang->time_zone = 'Zaman Dilimi';
$lang->about_time_zone = 'Eğer sunucu zaman dilimi ve bulunduğunuz yerin zaman dilimi uyumlu değilse; zaman dilimi özelliğini kullanarak zamanı bulunduğunuz yere göre ayarlayabilirsiniz ';
$lang->use_ssl = 'SSL\'i kullanmak istiyor musunuz?';
$lang->ssl_options['none'] = 'Hiçbir zaman';
$lang->ssl_options['optional'] = 'İsteğe Bağlı';
$lang->ssl_options['always'] = 'Her zaman';
$lang->about_database_file = 'Sqlite veriyi dosyaya kaydeder. Veritabanı dosyası tarayıcıyla erişilebilir olmamalıdır.<br/><span style="color:red">Veri dosyası 777 yetki kapsamı içinde olmalıdır.</span>';
$lang->success_installed = 'Kurulum tamamlandı';
$lang->msg_cannot_proc = 'Kurulum ortamı devam etmek için uygun değil.';
$lang->msg_already_installed = 'Rhymix zaten kurulmuştur';
$lang->msg_dbconnect_failed = 'VT\'ye ulaşırken bir hata oluştu. Lütfen VT bilgisini tekrar kontrol ediniz';
$lang->msg_table_is_exists = 'Tablo zaten VT\'da oluşturuldu. Yapılandırma dosyası yeniden oluşturuldu';
$lang->msg_install_completed = 'Kurulum tamamlandı. Rhymix\'yi seçtiğiniz için teşekkür ederiz.';
$lang->msg_install_failed = 'Kurulum dosyası oluşturulurken bir hata oluştu.';
$lang->ftp_get_list = 'Liste Al';
$lang->ftp_form_title = 'FTP Hesap Bilgileri';
$lang->ftp = 'FTP';
$lang->ftp_host = 'FTP sistem adı';
$lang->ftp_port = 'FTP portu';
$lang->about_ftp_password = 'FTP şifresi saklanmayacaktır.';
$lang->cmd_check_ftp_connect = 'FTP Bağlantısını kontrol ediniz';
$lang->msg_ftp_not_connected = 'Yerel web alanına FTP bağlantısı sağlanamadı. Lütfen port numarasını ve FTP servisinin mevcut olup-olmadığını kontrol ediniz .';
$lang->msg_ftp_invalid_auth_info = 'Kimlik doğrulama başarısız oldu. Lütfen kullanıcı adını ve şifreyi kontrol ediniz.';
$lang->msg_ftp_mkdir_fail = 'Dizin oluşturma başarısız oldu. Lütfen FTP hesap iznini kontrol ediniz.';
$lang->msg_ftp_chmod_fail = 'Chmod başarılamadı. Lütfen FTP sunucusunun izin ve yapılandırmasını kontrol ediniz.';
$lang->msg_ftp_connect_success = 'FTP sunucusu için bağlantı ve kimlik doğrulama sağlandı.';
$lang->ftp_path_title = 'FTP Yolu Bilgileri';
$lang->msg_ftp_installed_realpath = 'Rhymix Salt Yolu';
$lang->msg_ftp_installed_ftp_realpath = 'Rhymix Salt FTP Yolu';
$lang->msg_possible_only_file = 'Sadece dosyalarını yükleyebilirsiniz.';
