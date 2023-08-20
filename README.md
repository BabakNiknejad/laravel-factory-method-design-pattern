<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Factory Method Design Pattern Tutorial
## آموزش الگوی طراحی Factory Method با پیاده سازی در لاراول

دیزاین پترن Factory Method یک الگوی طراحی سازنده  (Creational) است

- الگوی Factory یک الگوی طراحی است که برای ایجاد اشیا استفاده می شود
- الگوی Factory یک واسطه بین کدی است که به شی نیاز دارد و کدی که شی را ایجاد می کند.
- الگوی Factory به شما امکان می دهد اشیا را بدون نیاز به دانستن جزئیات پیاده سازی آنها، ایجاد کنید.
- الگوی Factory می تواند به شما کمک کند تا کد خود را انعطاف پذیرتر و قابل نگهداری تر کنید.

میتوانیم Factory Design Pattern را برای پروژه لاراولی ارسال کالا پیاده سازی کنیم.
با استفاده از این الگو، میتوانیم یک نمونه ایجاد کنیم
که براساس نیاز، یکی از ماشین ها (موتور، وانت، کامیون و هواپیما) را ایجاد کند و به ما ارائه دهد.

1. یک پوشه جدید به نام Services در پوشه app خود ایجاد کنید.
2. یک Interface  به نام Vehicle.php در پوشه Services/Vehicle ایجاد کنید.
3. یک کلاس  به نام Motorcycle.php در پوشه Services/Vehicle ایجاد کنید که از Interface Vehicle ارث بری کند.
4. یک کلاس  به نام PickupTruck.php در پوشه Services/Vehicle ایجاد کنید که از Interface Vehicle ارث بری کند.
5. یک کلاس  به نام Truck.php در پوشه Services/Vehicle ایجاد کنید که از Interface Vehicle ارث بری کند.
6. یک کلاس  به نام Airplane.php در پوشه Services/Vehicle ایجاد کنید که از Interface Vehicle ارث بری کند.
7. یک کلاس  به نام VehicleFactory.php در پوشه Services/Vehicle ایجاد کنید.
8. یک کلاس  به نام VehicleController.php در پوشه app/Http/Controllers ایجاد کنید.
9. یک مسیر جدید به نام `/deliver` به فایل `api.php` اضافه کید.
```
Route::get('/deliver/{type}', [VehicleController::class, 'deliver']);
```

## مثالهای واقعی استفاده از الگوی طراحی Factory آورده شده است: 
- یک برنامه بانکداری می‌تواند از الگوی Factory برای ایجاد اشیایی مانند حساب‌های بانکی، کارت‌های اعتباری و چک‌های بانکی استفاده کند.
- یک برنامه فروشگاه آنلاین می‌تواند از الگوی Factory برای ایجاد اشیایی مانند محصولات، سبد خرید و سفارشات استفاده کند.
- یک برنامه سیستم عامل می‌تواند از الگوی Factory برای ایجاد اشیایی مانند فرآیندها، رشته‌ها و فایل‌ها استفاده کند.
- یک برنامه پایگاه داده می‌تواند از الگوی Factory برای ایجاد اشیایی مانند جداول، ستون‌ها و رکوردها استفاده کند.
- یک برنامه اداری می‌تواند از الگوی Factory برای ایجاد اشیایی مانند کارمندان، مشتریان و پروژه‌ها استفاده کند.
- یک برنامه پزشکی می‌تواند از الگوی Factory برای ایجاد اشیایی مانند بیماران، پزشکان و داروها استفاده کند.
- یک برنامه مالی می‌تواند از الگوی Factory برای ایجاد اشیایی مانند حساب‌های بانکی، سرمایه‌گذاری‌ها و وام‌ها استفاده کند.
- یک برنامه آموزشی می‌تواند از الگوی Factory برای ایجاد اشیایی مانند دوره‌ها، دروس و آزمون‌ها استفاده کند.
- یک برنامه بازاریابی می‌تواند از الگوی Factory برای ایجاد اشیایی مانند کمپین‌ها، ایمیل‌ها و تبلیغات استفاده کند.
