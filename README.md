

# FPDF/FPDI组件，支持中文
整合网上大佬的代码，使用 `fpdf 1.81` 版本
支持中文！支持中文！支持中文！
可使用 `fpdi` `TCPDF`

- 安装

``````
composer require hanhan/fpdf
``````

- 使用
  - 首先[点击链接](http://www.fpdf.org/makefont/)去生成对应的字体文件，放到自定义目录中，下面要用
  - 下面直接上代码
	
  ```php
  use hanhan\fpdi\Fpdi;
  
  define('FPDF_FONTPATH', '/font/'); # 字体路径，这里主要是针对中文字体
  $pdf = new Fpdi();
  $pdf->AddGBFont('simhei', '黑体');
  $pdf->AddPage();
  $pdf->SetFont('simhei', '', 16);
  $pdf->Cell(80, 20, iconv("utf-8", "gbk", "测试中文")); # 注意这里的转码
  
  $pdf->Output('example.pdf', 'F');
  ```

​	注意 `FPDF_FONTPATH`定义一定要在 `$pdf = new Fpdi()` 之前！

- 文档
    - [fpdf官网](http://www.fpdf.org/)
    - [字体生成](http://www.fpdf.org/makefont/)

- 使用有问题邮件我
