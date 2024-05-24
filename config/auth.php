<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | Tùy chọn này kiểm soát "bảo vệ" và mật khẩu xác thực mặc định
    | tùy chọn đặt lại cho ứng dụng của bạn. Bạn có thể thay đổi các giá trị mặc định này
    | theo yêu cầu nhưng chúng là sự khởi đầu hoàn hảo cho hầu hết các ứng dụng.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Tiếp theo, bạn có thể xác định mọi trình bảo vệ xác thực cho ứng dụng của mình.
    | Tất nhiên, một cấu hình mặc định tuyệt vời đã được xác định cho bạn
    | ở đây sử dụng bộ nhớ phiên và nhà cung cấp người dùng Eloquent.
    |
    | Tất cả các trình điều khiển xác thực đều có nhà cung cấp người dùng. Điều này xác định cách thức
    | người dùng thực sự được lấy ra khỏi cơ sở dữ liệu của bạn hoặc bộ lưu trữ khác
    | các cơ chế được ứng dụng này sử dụng để lưu giữ dữ liệu người dùng của bạn.
    |
    | Supported: "session"
    |
    */

    'guards' => [
        'canbots' => [
            'driver' => 'session',
            'provider' => 'canbots',
        ],

    'admin' => [
        'driver' => 'session',
        'provider' => 'admin',
    ],
],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | Tất cả các trình điều khiển xác thực đều có nhà cung cấp người dùng. Điều này xác định cách thức
    | người dùng thực sự được lấy ra khỏi cơ sở dữ liệu của bạn hoặc bộ lưu trữ khác
    | các cơ chế được ứng dụng này sử dụng để lưu giữ dữ liệu người dùng của bạn.
    |
    | Nếu bạn có nhiều bảng hoặc mô hình người dùng, bạn có thể định cấu hình nhiều
    | nguồn đại diện cho từng mô hình/bảng. Những nguồn này sau đó có thể
    | được chỉ định cho bất kỳ bộ bảo vệ xác thực bổ sung nào mà bạn đã xác định.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'canbots' => [
            'driver' => 'eloquent',
            'model' => App\Models\Auth\Canbots::class,
        ],

        'admin' => [
            'driver' => 'eloquent',
            'model' => App\Models\Auth\Admin::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Tại đây bạn có thể xác định số giây trước khi xác nhận mật khẩu
    | hết thời gian và người dùng được nhắc nhập lại mật khẩu của họ thông qua
    | màn hình xác nhận. Theo mặc định, thời gian chờ kéo dài trong ba giờ.
    |
    */

    'password_timeout' => 10800,

];
