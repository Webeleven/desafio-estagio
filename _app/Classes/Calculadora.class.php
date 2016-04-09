<?php

/**
 * Classe Calculadora
 *
 * @author Wellington Barreto <zeindelf@hotmail.com>
 * @copyright 2016
 */
class Calculadora {

	private $Dados;
	private $NumUm;
	private $NumDois;
	private $Operacao;
	private $Resultado;
	private $Erro;

	public function ExecuteCalc(array $Dados) {
		$this->Dados = $Dados;

		if ( in_array('', $this->Dados) ):
			$this->Erro = 'Você não pode fazer uma operação sem informar todos os dados.';
		else:
			$this->ExecuteOperacao();
		endif;
	}

	public function getResultado() {
		return $this->Resultado;
	}

	public function getErro() {
		return $this->Erro;
	}

	private function ExecuteOperacao() {
		$this->NumUm = (float) $this->Dados['numUm'];
		$this->NumDois = (float) $this->Dados['numDois'];
		$this->Operacao = (float) $this->Dados['calcOperacao'];

		switch ($this->Operacao):
			// Soma
			case 1:
				$this->Resultado = $this->NumUm + $this->NumDois;
				break;

			// Subtração
			case 2:
				$this->Resultado = $this->NumUm - $this->NumDois;
				break;

			// Multiplicação
			case 3:
				$this->Resultado = $this->NumUm * $this->NumDois;
				break;

			// Divisão
			case 4:
				if ( $this->NumDois != 0 ):
					$this->Resultado = $this->NumUm / $this->NumDois;
				else:
					$this->Erro = 'Você não pode dividir por <b>zero</b>';
					$this->Resultado = NULL;
				endif;
				break;
		endswitch;
	}
}