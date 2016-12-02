# Adzan
Compute prayer times given latitude, longitude, timezone

## Installation
composer require buchin/adzan

## Usage
```php
use Buchin\Adzan\Adzan;

$adzan = new Adzan;
$adzan->setLatitude(6, 10);
$adzan->setLongitude(106, 49);
$adzan->setTimeZone(7);

// ['imsyak' => 'xx:xx', 'subuh' => 'xx:xx'...
$prayerTimes = $adzan->times(time());

```