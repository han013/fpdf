<?php

/**
 * This file is part of FPDI
 *
 * @package   hanhan\fpdf\fpdi
 * @copyright Copyright (c) 2024 hanhan GmbH & Co. KG (https://www.hanhan.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace hanhan\fpdf\fpdi\PdfParser\Filter;

use hanhan\fpdf\fpdi\PdfParser\PdfParserException;

/**
 * Exception for filters
 */
class FilterException extends PdfParserException
{
    public const UNSUPPORTED_FILTER = 0x0201;

    public const NOT_IMPLEMENTED = 0x0202;
}
