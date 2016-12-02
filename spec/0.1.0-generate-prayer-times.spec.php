<?php
use Buchin\Adzan\Adzan;

describe('Feature: Generate prayer times', function(){
	given('latitude', function(){
		return [6, 10];
	});

	given('longitude', function(){
		return [106, 49];
	});

	given('timezone', function(){
		return 7;
	});

	given('today', function(){
		return time();
	});

	it('return prayer times from imsyak to isya', function(){
		$adzan = new Adzan;
		$adzan->setLatitude($this->latitude[0], $this->latitude[1]);
		$adzan->setLongitude($this->longitude[0], $this->longitude[1]);
		$adzan->setTimeZone($this->timezone);

		$prayerTimes = $adzan->times($this->today);
		expect($prayerTimes)->toBeA('array');

		$tomorrow = strtotime("+ 1 day", $this->today);
		$prayerTimes = $adzan->times($tomorrow);
		expect($prayerTimes)->toBeA('array');
	});
});