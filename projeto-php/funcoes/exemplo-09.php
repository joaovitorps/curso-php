<?php 

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
				//inicio: deiretor comercial
			array(
				'nome_cargo'=>'Deiretos comercial',
				'subordinados'=>array(
						//inicio: gerente de vendas
					array(
						'nome_cargo'=>'Gerente de vendas'
					)
						//termino: Gerente de vendas
				)
			),
				//termino: diretor comercia
				//inicio: diretor financeiro
			array(
				'nome_cargo'=>'Diretor financeiro',
				'subordinados'=>array(
						//inicio:Gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente contas a pagar',
						'subordinados'=>array(
								//inicio:supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor DE pagamentos'
							)
								//termino:Supervisor de pagamentos
						)
					),
						//termino:Gerente de contas a pagar
						//inicio:Gerente de compras
					array(
						'nome_cargo'=>'Gerente de compras', 
						'subordinados'=>array(
								//inicio:supervisor de supprimentos
							array(
								'nome_cargo'=>'supervisor de suprimentos',
								'subordinados'=>array(
								array(
									'nome_cargo'=>'funcionario'
								)
								)
							)
								//termino:supervisor de supprimentos
						)
					)
						//termino:Gerente de compras
				)
			)
				//termino:diretor financeiro
		)
	)

);

function exibe ($cargos) {

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .= '<li>';

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
			$html .= exibe($cargo['subordinados']);
		}

		$html .= '</li>';

	}

	$html .= '</ul>';

	return $html;

}

echo exibe($hierarquia);

?>