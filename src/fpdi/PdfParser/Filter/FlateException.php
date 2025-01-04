<?php

/**
 * This file is part of FPDI
 *
 * @package   hanhan\fpdf\fpdi
 * @copyright Copyright (c) 2024 hanhan GmbH & Co. KG (https://www.hanhan.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace hanhan\fpdf\fpdi\PdfParser\Filter;

/**
 * Exception for flate filter class
 */
class FlateException extends FilterException
{
    /**
     * @var integer
     */
    public const NO_ZLIB = 0x0401;

    /**
     * @var integer
     */
    public const DECOMPRESS_ERROR = 0x0402;
}
