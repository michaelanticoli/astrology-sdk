<?php

/*
 * This file is part of Prokerala Astrology API PHP SDK
 *
 * © Ennexa Technologies <info@ennexa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Prokerala\Api\Astrology\Result\Element;

final class Nakshatra
{
    private int $id;

    private string $name;

    private Planet $lord;

    private int $pada;

    public function __construct(int $id, string $name, Planet $lord, int $pada)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lord = $lord;
        $this->pada = $pada;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLord(): Planet
    {
        return $this->lord;
    }

    public function getPada(): int
    {
        return $this->pada;
    }
}
