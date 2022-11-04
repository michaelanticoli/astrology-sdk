<?php

/*
 * This file is part of Prokerala Astrology API PHP SDK
 *
 * © Ennexa Technologies <info@ennexa.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Prokerala\Common\Api\Authentication;

use Psr\Http\Message\RequestInterface;

interface AuthenticationTypeInterface
{
    /**
     * @internal
     *
     * @return RequestInterface
     */
    public function process(RequestInterface $request);

    /**
     * @internal
     *
     * @param string $message
     * @param int    $code
     *
     * @return void
     */
    public function handleError($message, $code);
}
