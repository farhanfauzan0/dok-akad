<?php
defined('BASEPATH') or exit('No direct script access allowed');
// panggil autoload dompdf nya
require_once 'dompdf-master/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdfgenerator
{
	public function generate($html, $filename = '', $paper = '', $orientation = '', $stream = TRUE)
	{
		$options = new Options();
		$options->set('isRemoteEnabled', TRUE);
		$options->set('defaultFont', "times-new-roman");
		$options->set('defaultMediaType', 'all');
		$options->set('isFontSubsettingEnabled', true);
		// $options->set('setWarnings', FALSE);
		$options->setDpi(150);
		$dompdf = new Dompdf($options);
		$dompdf->loadHtml($html);
		$dompdf->setPaper($paper, $orientation);
		$dompdf->render();
		if ($stream) {
			$dompdf->stream($filename . ".pdf", array("Attachment" => 0));
		} else {
			return $dompdf->output();
		}
	}
}
