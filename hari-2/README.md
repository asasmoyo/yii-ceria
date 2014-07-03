##hari 2

###1. view
1.1 load view
1. lokasi file view ada di `protected/views`.
2. lokasi view untuk controller dengan nama `CobaController` ada di `protected/views/coba`.
3. untuk meload view `$this->render('nama_view');`, akan meload view dengan nama `nama_view.php` di `protected/views/nama_controller/nama_view.php`.

2.2 kirim data dari controller ke view
1. pas load view diubah dikit, jadi `$this->render('nama_view', array('var1' => $var1, 'var2' => 'a'));`.
2. di `nama_view.php` bisa mengakses `$var1` dan `$var2`.

###2. form
1. referensi http://www.yiiframework.com/doc/guide/1.1/en/form.view
2. buat class di `protected/models`
3. classnya itu mengextends `CFormModel`
4. list rules: http://www.yiiframework.com/wiki/56/

###3. konfigurasi database
1. buka `protected/config/main.php`
2. edit pada bagian `db`
3. defaultnya yii pake sqlite, kalo mo diganti kayak gini:

`'db' => array(
    'connectionString' => 'mysql:host=localhost;dbname=blog',
    'emulatePrepare' => true,
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'tablePrefix' => 'tbl_',
),`

