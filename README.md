# Class Management

Class Management sistemi kısaca üniversite ortamında fakülte yöneticilerinin kullanabileceği ve fakülte sınıflarına ders
atamalarını yapabileceği, çakışan dersleri kontrol edebileceği bir yönetim sistemidir.


Önemli Not: Laravel 8.x kullanımında önemli bir bug tespit edilmiştir. Bu bug PHP dilinde dil ayarları için kullanılan setLocale fonksiyonu Türkçe dili için kullanıldığında bazı if statement'lerini yok sayabiliyor. Bu yüzden hata verebiliyor. Böyle bir hata ile karşılaştığınızda lütfen uyarı verin. Hata hakkında daha fazla bilgi için: [Stackoverflow Linki](https://stackoverflow.com/questions/43589501/if-statements-not-working-correctly-on-laravel-blade)

> Aktif domain: [class.webremium.com]()

`Laravel Debugbar : Açık`

`Öğretmenler Modülü : Aktif`

`Sınıf Modülü : Aktif`

`Dersler Modülü : Aktif`

`Profil Sayfası : Aktif`

`Sınıf Zaman Tablosu: Aktif`

`Ders Planlama: Aktif`

`Bildirim Modülü: Aktif`

`Sistem Yedekleme: Aktif`

`Kullanım Klavuzu ve Dökümantasyon: Oluşturuldu`

### Takım

Takım 4 kişiden oluşur, bunlar;

* Baran Arda
* Mehmet Baysal
* Enis Göktaş
* Doğacan Usta

## Versiyon Geçmişi

#### v1.0.0
* Tüm modüller tamamlandı.
* Dashboard eklendi.
* Proje Dökümantasyonu ve Kullanım Kılavuzu oluşturuldu

#### v0.9.8
* Ders planı silme modülü eklendi

#### v0.9.7
* Database bağlantısı düzeltildi (ENV)
* Ders planı ekleme modülü tamamlandı
* Ajax sorgusu ile eklenme kısmı tamamlandı
* Toolbar güncellendi
* Rotalara ekleme yapıldı
* Genel kontroller yapıldı.

#### v0.9.2
* Ders planı ekleme modülü geliştirmesi

#### v0.9.1
* Ders planı ekleme modülü geliştirmesi

#### v0.9.0
* Sınıflara fakülteler eklendi
* Sınıf fakülteye göre filtreleme eklendi (Listeleme sayfasında)
* Sınıf detay sayfasında sınıfa dair bilgiler eklendi
* Composer json_decode eklendi
* Öğretmenler artık sadece yönetici ise yeni kullanıcı ekleyebilir
* Toolbar yeni ders planı ekle butonu eklendi
* Sınıf sorgulama ve ders planı ekleme modülü yapım aşamasına girdi
  * JS AJAX ile sorgulama ve anında sınıfları listeleme fonksiyonları yazıldı
  * Yeni rotalar eklendi
  * Yeni ders planı ekle sayfası eklendi
  * Ders planı ekle sayfası js dosyası layouts'un içerisine eklendi
  * Ders planı filtreleme sayfası 5 adımda düzenlendi
  * Şuan için yapım aşamasında
    * Ajax doğru dönüyor
    * Ajax verilerine göre 3. bölümün Select kısımları değiştirilmesi gerek (Yapım Aşamasında)

#### v0.7.1
* Bildirimler eklendi, artık yöneticiler bildirim ekleyebilirler
* Bildirimler her sayfaya gönderiliyor, menüden son 5 bildirim gözüküyor
* Bildirim tablosu ve modeli oluşturuldu
* Timetable artık tüm dersleri gösteriyor
* JS timetable text yerine html olarak düzeltildi
* Toolbar'a bildirim ekleme modülü eklendi
* Genel Bug temizlemeleri

#### v0.4.0
* Timetable sınıfın bir column'u olmaktan ayrılıp yeni bir tablo şekline dönüştürüldü
* Timetable Modeli eklendi
* Profil sayfası user olarak değiştirildi. 
  * Artık profil sayfası yerine user id çekerek bilgiler gösteriliyor
* Backup sayfası sadece yöneticilerin girebildiği bir sayfa olarak değiştirildi
* Sınıf detay sayfası oluşturuldu
  * Sınıf özellikleri eklendi
  * Sınıfın yetkilisinin bilgileri eklendi
  * Sınıfın Timetable'ı eklendi
  * Sınıf listeleme sayfasından link oluşturuldu (Sınıf ismine tıklayınca)
* Classroom Modeli düzenlendi (Timetable kaldırıldı)
* ClassroomController düzenlendi (Timetable kaldırıldı, detail fonksiyonu eklendi)
* Footerdan Copyright logosu kaldırıldı. (Açık kaynak kodlu bir yazılım olduğu için)
* Header yönetici olmayanlar için sistem sekmesini gizleme eklendi
* Kullanıcı listeleme sayfasına link eklendi (Kullanıcı ismine tıklayınca detay sayfasına gidiyor)
* UserController düzenlendi
  * index yerine detay sayfası için user_id ile bilgileri gönderilmesi sağlandı
* Yeni route'lar eklendi

#### v0.2.5
* Dersler Listeleme sayfası bug fix
* Timetable sayfası bug fix
* Header linkleri düzenlendi
* UserController optimize edildi
* Profil Sayfası oluşturuldu.
  * Şifre güncelleme eklendi
  * E-Posta güncelleme eklendi
  * Fakülte güncelleme eklendi
  * Profil sayfasına öğretmenin haftalık ders programı eklendi


#### v0.2.3
* Backup Sayfası
  * **Yedekleme tuşu Bug düzeltildi**
  * Yedek yükleme tuşu aktif
  * Yedekleri geri yükleme aktif
  * Optimizasyon sorunları giderildi
* Ders Sayfası
  * Ders Ekleme aktif edildi
  * Filtreleme düzeltildi
* Tüm Sınıf Tablosu
  * Sayfa aktifleştirildi
  * Tüm sınıf tablosundaki CSS ve JS hataları giderildi
  * Her saat için nerede ne dersin olduğu JS ve CSS ile aktifleştirildi
  * JS Dosyaları fixlendi, artık tıklandığında pencere açılıyor
  * Açılan pencerelere veri koyulması JS ile düzeltildi


#### v0.2.2

* Backup sayfaları fix
  * **Backup yedekleme bug mevcut (Yedekle tuşu)**
  * Backup artık dersleri kapsıyor
  * Geri yedekleme çalışır hale getirildi
  * Bilgiler artık doğru şekilde gösteriliyor. (Boyut ve sayı)
* Lesson Modeli eklendi
* Lesson Controller eklendi
* Dersler sayfası:
  * Listeleme ve bilgiler doğru şekilde geliyor
  * Yeni ders ekle mevcut değil
  * Dersi sil butonu aktif
  * Filtreleme ve arama aktif

#### v0.2
* Ana sayfa gereksiz HTML kaldırıldı
* Header linkleri düzenlendi 
  * Hızlı Sistem yedekleme linki eklendi
  * Duyurular placeholder düzeltildi
* Versiyon notları sayfası düzenlendi
* Sistem Yedekleri Aktifleştirildi
  * Sadece sınıflar için yedek alınabilir
  * Sistem yedekleri sayfasında butonlar aktifleştirildi
    * Yedek al butonu
    * Yedeği indir butonu
    * Yedek sil
    * Yedeği geri yükle
  * Yedekleme verileri aktif (Yedek boyutları, tarih, yedek sayısı vb.)
* Sistem subdomain üzerinde çalışacak şekilde yeniden yapılandırıldı.
  * .htaccess dosyaları düzenlendi.

#### v0.1.0
* Remote Host Fix (Subdomain problemi)
* JS routes fix
* Yedekleme sistemi klasörü belirlendi (/public/backups)
* Yedekleme sistemi dosya listelemesi düzeltildi
* İbrahim Erşan yönetici olarak eklendi
* 


#### v0.0.8

* DB migration (Local)
* Modeller Eklendi
  * Classroom Model
  * User Model
* Route'lar controllerlara çevirildi
* Auth Eklendi
* Header linkleri düzenlendi
* Controllerlar eklendi
  * ClassroomController
  * UserController

 
#### v0.0.6

* Route'lar controllerlara çevirildi
* Footer düzenlendi
* Header linkleri düzenlendi
* Controllerlar eklendi
  * BackupController
  * InformationController
  * ModulesController
  * VersionController
* Viewlar eklendi
  * Version Notları

#### v0.0.5

* Header düzenlendi
  * Rotalar Eklendi
  * İkonlar Düzenlendi
* Toolbar search toggle hale getirildi
* Yeni rotalar eklendi (Eklenen viewlara ait rotalar)
* Viewlar eklendi
  * information
    * Panel Hakkında
    * Öğretmen Duyuruları
  * modules
    * Ders Modülü
    * Öğretmen Modülü
    * Sınıf Modülü
    * TimeTable modülü
  * System
    * Sistem Yedekleme modülü

#### v0.0.2
* Config dosyaları ve composer güncellendi
* Assets klasörü yüklendi
* Route ayarlamaları yapıldı
* Toolbar Search düzenlendi
* Viewlar eklendi
  * Base model
  * Master model
  * Giriş model
  * Dashboard model
  * Layoutlar 
    * Footer Layout
    * Head Layout
    * Header Layout
    * js Layout
    * Toolbar Layout
* Controllerlar eklendi
  * Dashboard Controller


#### v0.0.1

* Initial Commit
* Laravel Debugbar Installed

### Yapım Aşamasında Olanlar

- Ana Sayfa

### License

The Class Management is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
