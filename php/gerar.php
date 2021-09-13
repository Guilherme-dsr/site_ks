<?php	

	include_once("conexao.php");	
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>Nome do Produto</th>';
	$html .= '<th>Marca</th>';
	$html .= '<th>Quantidade</th>';
	$html .= '<th>Preço</th>';
	$html .= '<th>Data de Cadastro</th>';
	$html .= '<th>Data de Edição</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$data_inicial = date("Y-m-d", strtotime($_POST['data_inicial']))." 00:00:00";
	$data_final = date("Y-m-d", strtotime($_POST['data_final']))." 23:59:59";


	$result_transacoes = "SELECT * FROM produtos WHERE data_cadastro >= '$data_inicial' and data_cadastro <= '$data_final'";
	$resultado_trasacoes = mysqli_query($conn, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<tr><td>'.$row_transacoes['id'] . "</td>";
		$html .= '<td>'.$row_transacoes['nome'] . "</td>";
		$html .= '<td>'.$row_transacoes['marca'] . "</td>";
		$html .= '<td>'.$row_transacoes['qtd'] . "</td>";
		$html .= '<td>'.$row_transacoes['preco'] . "</td>";
		$html .= '<td>'.$row_transacoes['data_cadastro'] . "</td>";
		$html .= '<td>'.$row_transacoes['data_atualizada'] . "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;
	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Relatório Produtos - Site KS</h1>
			'. $html .'
		');

	//Renderizar o html
	ob_clean(); 
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_produtos", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>