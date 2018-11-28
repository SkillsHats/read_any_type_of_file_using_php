<?php

require 'DocxConversion.php';

//$docObj = new DocxConversion("test.doc");
//$docObj = new DocxConversion("test.docx");
//$docObj = new DocxConversion("test.xlsx");
//$docObj = new DocxConversion("test.pptx");

$file = 'test.docx';

$docObj = new DocxConversion($file);

echo $docText= $docObj->convertToText();
