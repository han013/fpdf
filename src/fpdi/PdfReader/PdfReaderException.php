<?php

/**
 * This file is part of FPDI
 *
 * @package   hanhan\fpdf\fpdi
 * @copyright Copyright (c) 2024 hanhan GmbH & Co. KG (https://www.hanhan.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace hanhan\fpdf\fpdi\PdfReader;

use hanhan\fpdf\fpdi\FpdiException;

/**
 * Exception for the pdf reader class
 */
class PdfReaderException extends FpdiException
{
    /**
     * @var int
     */
    public const KIDS_EMPTY = 0x0101;

    /**
     * @var int
     */
    public const UNEXPECTED_DATA_TYPE = 0x0102;

    /**
     * @var int
     */
    public const MISSING_DATA = 0x0103;
}
