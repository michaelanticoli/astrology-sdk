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

use Prokerala\Api\Numerology\Result\Pythagorean\EssenceResult;
use Prokerala\Api\Numerology\Service\Pythagorean\EssenceNumber;
use Prokerala\Test\Api\Common\Traits\AuthenticationTrait;
use Prokerala\Test\BaseTestCase;

/**
 * @internal
 * @coversNothing
 */
final class EssenceNumberTest extends BaseTestCase
{
    use AuthenticationTrait;

    /**
     * @covers \Prokerala\Api\Numerology\Service\Pythagorean\EssenceNumber::process
     */
    public function testProcess(): void
    {
        $service = new EssenceNumber($this->getClient());

        $dateOfBirth = new \DateTimeImmutable();
        $datetime = new \DateTimeImmutable();
        $firstName = 'John';
        $middleName = '';
        $lastName = 'Doe';

        $result = $service->process($datetime, $firstName, $middleName, $lastName, $dateOfBirth);

        $this->assertInstanceOf(EssenceResult::class, $result);
    }
}
