<?php

/**
 * Replace the data from a line chart with the data give by the client
 *
 * @category   Phpdocx
 * @package    examples
 * @subpackage intermediate
 * @copyright  Copyright (c) 2009-2013 Narcea Producciones Multimedia S.L.
 *             (http://www.2mdc.com)
 * @license    http://www.phpdocx.com/wp-content/themes/lightword/pro_license.php
 * @version    2012.12.26
 * @link       http://www.phpdocx.com
 * @since      2012.12.26
 */

require_once '../../classes/CreateDocx.inc';

$completedData = array(
    'legend' => array('Completed', 'Data', 'Example'),
    'data 1' => array('1', 10, 51),
    'data 2' => array('2', 6, 3),
    'data 3' => array('10', 3, 17),
    'data 4' => array('25', 70, 20)
);

$docx = new DocxUtilities();
$source = "../files/example_line_Chart.docx";
$target = '../docx/example_line_Chart_replace_data.docx';
$data = array(
	0 => $completedData,
	1 => $completedData,
);
$docx->replaceChartData($source, $target, $data);