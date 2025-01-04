<?php

/**
 * This file is part of FPDI
 *
 * @package   hanhan\fpdi
 * @copyright Copyright (c) 2024 hanhan GmbH & Co. KG (https://www.hanhan.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace hanhan\fpdi\PdfParser\Filter;

/**
 * Class for handling ASCII hexadecimal encoded data
 */
class AsciiHex implements FilterInterface
{
    /**
     * Converts an ASCII hexadecimal encoded string into its binary representation.
     *
     * @param string $data The input string
     * @return string
     */
    public function decode($data)
    {
        $data = \preg_replace('/[^0-9A-Fa-f]/', '', \rtrim($data, '>'));
        if ((\strlen($data) % 2) === 1) {
            $data .= '0';
        }

        return \pack('H*', $data);
    }

    /**
     * Converts a string into ASCII hexadecimal representation.
     *
     * @param string $data The input string
     * @param boolean $leaveEOD
     * @return string
     */
    public function encode($data, $leaveEOD = false)
    {
        $t = \unpack('H*', $data);
        return \current($t)
            . ($leaveEOD ? '' : '>');
    }
}
