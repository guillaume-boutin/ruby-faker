<?php

namespace App\Fakers;

use Faker\Provider\Base;

class Device extends Base
{
    public function deviceModelName()
    {
        return static::randomElement(["iPhone", "iPhone 3G", "iPhone 3GS", "iPhone 4", "iPhone 4S", "iPhone 5", "iPhone 5C", "iPhone 5S", "iPhone 6 / 6 Plus", "iPhone 6S / 6S Plus", "iPhone SE", "iPhone 7 / 7 Plus", "iPhone 8 / 8 Plus", "iPhone X", "OnePlus 6T", "OnePlus 6", "OnePlus 5T", "OnePlus 5", "OnePlus 3T", "OnePlus 3", "OnePlus 2", "OnePlus One", "Samsung Galaxy S9", "Samsung Galaxy S8 Plus", "Samsung Galaxy S8", "Samsung Galaxy S7 Edge", "Samsung Galaxy S7", "Samsung Galaxy S6 Edge", "Samsung Galaxy S5", "Samsung Galaxy S4", "Samsung Galaxy S4 Mini",  "Samsung Galaxy S3", "Samsung Galaxy S3 Mini", "Samsung Galaxy S2", "Samsung Galaxy S1", "Huawei Mate 20", "Huawei Mate 10 Pro", "Huawei P20", "Huawei P20 Pro", "Huawei Mate 20 Pro", "Huawei P10 Plus", "Huawei P10", "Huawei Mate 20 Lite", "Huawei Mate 9", "Huawei P Smart", "Google Pixel", "Google Pixel XL", "Google Pixel 2", "Google Pixel 2 XL", "Google Pixel 3", "Google Pixel 3 XL", "Xiaomi Redmi Note 6 Pro", "Xiaomi Mi 8 Pro", "Xiaomi Mi 8 Lite", "Xiaomi Mi 8", "Xiaomi Mi 8 SE", "Xiaomi Pocophone F1"]);
    }

    public function devicePlatform()
    {
        return static::randomElement(["Android OS", "webOS", "iOS", "BlackBerry", "Danger OS", "Android", "Firefox OS", "Ubuntu Touch", "Windows Phone", "Windows 8", "Windows RT", "Windows 8.1", "Windows 10", "Windows 10 Mobile", "Windows Phone"]);
    }

    public function deviceManufacturer()
    {
        return static::randomElement(["Dell", "HP", "ASUS", "Acer", "Lenovo", "Apple", "Huawei", "OnePlus", "Xiamomi"]);
    }

    public function deviceSerial()
    {
        return static::randomElement(["pEekWH7zGxVITv6NTa5KHjLSwr5Ie4", "UVr864F8zUbyYOAUd4cFOW9hpsZuGn", "Kl2ZroV9a", "m6aHiiHOc", "hHhDJaHCO", "SJMZOmtU0csrv4R", "PTIA6Ff3GBvGh3j", "hrR8nflThDDaSXO", "OezkV3nTii0sMK0", "T6UuMUTani3VGY4vXGia", "NjGU0z33pgE4sTEED7VR", "05skEogwZlX7j6twhhXX", "ToFVWLzGTJhQxAaJlDDn", "ejfjnRNInxh0363JC2WM", "xC36G3Xy4n2Fu90keaW96c1Hw5QBJX", "CdNevWfqDPQw4iJgUhtyCqwCggV12T", "9vxM9fCsG9nXg8EjTN5ygV2LvaDZdG", "39gPmcOKpwhDezLdiIOZ7SH89Pbjp4", "Yr9Vt13BlgvXO9zgJTPuCLv6F82r5S", "trDuJXhT8PnD3JEtw4lsluEuYSn1Xh", "VMTnd2mMQWvjbtNcZh7UIdULKb1mMo", "Pbn8^`LkKPi4QJ79xk3SnW'_DbV*CL", "Hk4BoF=%ud/PV4K-/NvEq28Q/&HNq7", "_usDGH^%'4dSYvUtH39qu3*hbi3V+z", "&XwUS6yR2N&+Z`$94eK@XzFp/p/ie^", "tL&^J@24CVF=zP46Lxixk`_a#=o6c5"]);
    }
}