<?php

/**
 * This file is part of FPDI
 *
 * @package   hanhan\fpdi
 * @copyright Copyright (c) 2024 hanhan GmbH & Co. KG (https://www.hanhan.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace hanhan\fpdi\PdfParser\Type;

/**
 * Class representing PDF token object
 */
class PdfToken extends PdfType
{
    /**
     * Helper method to create an instance.
     *
     * @param string $token
     * @return self
     */
    public static function create($token)
    {
        $v = new self();
        $v->value = $token;

        return $v;
    }

    /**
     * Ensures that the passed value is a PdfToken instance.
     *
     * @param mixed $token
     * @return self
     * @throws PdfTypeException
     */
    public static function ensure($token)
    {
        return PdfType::ensureType(self::class, $token, 'Token value expected.');
    }
}
