<?php

/*
 * This file is part of Prokerala Astrology API PHP SDK
 *
 * © Ennexa Technologies <info@ennexa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Prokerala\Test\Api\Numerology\Service\Pythagorean;

use Prokerala\Api\Numerology\Result\Pythagorean\SoulUrge;
use Prokerala\Api\Numerology\Service\Pythagorean\SoulUrgeNumber;
use Prokerala\Test\Api\Common\Traits\AuthenticationTrait;
use Prokerala\Test\BaseTestCase;

/**
 * @internal
 * @coversNothing
 */
final class SoulUrgeNumberTest extends BaseTestCase
{
    use AuthenticationTrait;

    /**
     * @covers \Prokerala\Api\Numerology\Service\Pythagorean\SoulUrgeNumber::process
     */
    public function testProcess(): void
    {
        $service = new SoulUrgeNumber($this->getClient());

        $datetime = new \DateTimeImmutable();
        $firstName = 'John';
        $middleName = '';
        $lastName = 'Doe';

        $result = $service->process($firstName, $middleName, $lastName, true);

        $this->assertInstanceOf(SoulUrge::class, $result);
    }
}
