##hari 2

###1. view
####1.1 load view
1. lokasi file view ada di `protected/views`  
2. lokasi view untuk controller dengan nama `CobaController` ada di `protected/views/coba`  
3. untuk meload view `$this->render('nama_view');`, akan meload view dengan nama `nama_view.php` di `protected/views/nama_controller/nama_view.php`

####2.2 kirim data dari controller ke view
1. pas load view diubah dikit, jadi `$this->render('nama_view', array('var1' => $var1, 'var2' => 'a'));`  
2. di `nama_view.php` bisa mengakses `$var1` dan `$var2`  
  
###2. form
referensi http://www.yiiframework.com/doc/guide/1.1/en/form.view  
1. buat class di `protected/models`  
2. classnya itu mengextends `CFormModel`  
3. list rules: http://www.yiiframework.com/wiki/56/  
  
###3. konfigurasi database
1. buka `protected/config/main.php`  
2. edit pada bagian `db`  
3. defaultnya yii pake sqlite, kalo mo diganti kayak gini  
```php
'db' => array(  
    'connectionString' => 'mysql:host=localhost;dbname=blog',  
    'emulatePrepare' => true,  
    'username' => 'root',  
    'password' => '',  
    'charset' => 'utf8',  
    'tablePrefix' => 'tbl_',  
),
```  
  
###4. database migration
referensi http://www.yiiframework.com/doc/guide/1.1/en/database.migration  
command untuk manipulasi database http://www.yiiframework.com/doc/guide/1.1/en/database.query-builder#building-schema-manipulation-queries  
1. untuk membuat migration: `protected/yiic migrate create nama_migration`  
2. untuk mengeksekusi migration: `protected/yiic migrate`  
3. untuk mengembalikan migration: `protected/yiic migrate down n` dengan n banyak migration yg mau dikembalikan  
  
###5. gii
1. enable gii di `protected/config/main.php` pada bagian modules uncomment gii  
2. buka `/gii`  
