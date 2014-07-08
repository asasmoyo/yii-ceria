##hari 3
###1. Konfiguration
###2. Authentication
1. pada config/main.php, bagian `user` merepresentasikan user yang sedang mengakses aplikasi
2. tambah
```php
'user' => [
    'class' => 'CustomWebUser',
    'allowAutoLogin' => true,
],
```
3. buat class CustomWebUser di `protected/components`
4. buat class CustomUserIdentity di `protected/components`, class ini digunakan untuk mengautentikasi inputan user
5. buat class FormLoginCustomUser login di `protected/models`

###3. Extension
###4. View Template
###5. Module
