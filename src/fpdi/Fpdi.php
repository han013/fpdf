<?php

/**
 * This file is part of FPDI
 *
 * @package   hanhan\fpdf\fpdi
 * @copyright Copyright (c) 2024 hanhan GmbH & Co. KG (https://www.hanhan.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace hanhan\fpdf\fpdi;

use hanhan\fpdf\fpdi\PdfParser\CrossReference\CrossReferenceException;
use hanhan\fpdf\fpdi\PdfParser\PdfParserException;
use hanhan\fpdf\fpdi\PdfParser\Type\PdfIndirectObject;
use hanhan\fpdf\fpdi\PdfParser\Type\PdfNull;

/**
 * Class Fpdi
 *
 * This class let you import pages of existing PDF documents into a reusable structure for FPDF.
 */
class Fpdi extends FpdfTpl
{
    use FpdiTrait;
    use FpdfTrait;

    /**
     * FPDI version
     *
     * @string
     */
    public const VERSION = '2.6.2';
}
