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
 * Exception for LZW filter class
 */
class LzwException extends FilterException
{
    /**
     * @var integer
     */
    public const LZW_FLAVOUR_NOT_SUPPORTED = 0x0501;
}
