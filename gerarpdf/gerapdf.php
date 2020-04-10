<?php	

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require __DIR__ . '/vendor/autoload.php';

	//Criando a Instancia
	$dompdf = new Dompdf();

	// Carrega seu HTML
	
	//Renderizar o html
	ob_start();
	require __DIR__ . '/front/cupom.php';
	$dompdf->loadHtml(ob_get_clean());
		$customPaper = array(0,0,155.906,400); //1 teste = margem direira pequena
		//$customPaper = array(0,0,200.000,400); 2 teste = 
		//$customPaper = array(0,0,200.000,400);
		$dompdf->set_Paper($customPaper,'portrait');
	$dompdf->render();
	//Exibibir a página
	$dompdf->stream("file.pdf",["Attachment" =>false]);
?>