<?php

/**
 * This file is part of FPDI
 *
 * @package   hanhan\fpdf\fpdi
 * @copyright Copyright (c) 2024 hanhan GmbH & Co. KG (https://www.hanhan.com)
 * @license   http://opensource.org/licenses/mit-license The MIT License
 */

namespace hanhan\fpdf\fpdi;

use hanhan\fpdf\PDFChinese;

/**
 * Class FpdfTpl
 *
 * This class adds a templating feature to FPDF.
 */
class FpdfTpl extends PDFChinese
{
    use FpdfTplTrait;
}
