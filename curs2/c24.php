<?php
$xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE limbaje [
<!ELEMENT limbaj (nume)>
<!ELEMENT nume (#PCDATA)>
]>
<limbaje>
	<limbaj>
		<nume>PHP</nume>
	</limbaj>
	<limbaj>
		<nume>Javascript</nume>
	</limbaj>
	<limbaj>
		<nume>Java</nume>
	</limbaj>
</limbaje>
XML;
// transferă responsabilitatea tratării erorilor către script
libxml_use_internal_errors(true);
$options = LIBXML_DTDVALID;
$root = new SimpleXMLElement($xml, $options);
// traversează lista de erori
foreach (libxml_get_errors() as $error) {
echo $error->message, PHP_EOL;
}