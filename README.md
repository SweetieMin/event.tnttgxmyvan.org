# event.tnttgxmyvan.org


#push code lên gitbhub
1. git add .
2. git commit -m "thêm chức năng"
3. git push origin

#Thêm nút chuyển route
1. Tạo livewire
    a. php artisan make:livewire Back/Year/Years
    b. php artisan make:livewire Back/Year/ActionsYear
2. Tạo Route: routes\web.php
3. Tạo nút chuyển ở sidebar: resources\views\components\layouts\app\sidebar.blade.php
    