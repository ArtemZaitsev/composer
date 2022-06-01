<?php

use WMDE\Clock\Clock;

include '../vendor/autoload.php';
//

function yourCode(Clock $clock) {
    $clock->now(); // Returns DateTimeImmutable. No global access and easily testable
}
interface SystemClock {
    public function now(): \DateTimeImmutable;
}





//interface Clock {
//    public function now(): \DateTimeImmutable;
//}

//use Lcobucci\Clock\Clock;
//use Lcobucci\Clock\SystemClock;
//use Lcobucci\Clock\FrozenClock;
//
//function filterData(Clock $clock, array $objects): array
//{
//    return array_filter(
//        $objects,
//        static function (stdClass $object) use ($clock): bool {
//            return $object->expiresAt > $clock->now();
//        }
//    );
//}
//
//// Object that will return the current time based on the given timezone
//// $clock = SystemClock::fromSystemTimezone();
//// $clock = SystemClock::fromUTC();
//$clock = new SystemClock(new DateTimeZone('America/Sao_Paulo'));
//
//// Test object that always returns a fixed time object
//$clock = new FrozenClock(
//    new DateTimeImmutable('2017-05-07 18:49:30')
//);
//
//// Or creating a frozen clock from the current time on UTC
//// $clock = FrozenClock::fromUTC();
//
//$objects = [
//    (object) ['expiresAt' => new DateTimeImmutable('2017-12-31 23:59:59')],
//    (object) ['expiresAt' => new DateTimeImmutable('2017-06-30 23:59:59')],
//    (object) ['expiresAt' => new DateTimeImmutable('2017-01-30 23:59:59')],
//];
//
//var_dump(filterData($clock, $objects)); // last item will be filtered