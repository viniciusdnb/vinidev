<?php

namespace src\Controller;

use src\Route\RouterController;

class HomeController extends RouterController
{
	public function index()
	{
		$this->setData("maleta", $this->maleta());
		$this->setData("casa",$this->casa());
		$this->setData("carta", $this->carta());
		$this->setData("whats", $this->whats());
		$this->setData("cphp", $this->cphp());
		$this->setData("cjs", $this->cjs());
		$this->setData("chtml", $this->chtml());
		$this->setData("expHavetech", $this->expHavetech());
		$this->setData("expVital", $this->expVital());
		$this->setData("expPolifilme", $this->expPolifilme());
		$this->render("home/index");
	}

	function maleta()
	{
		return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
		<path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
		</svg>';
	}

	function casa()
	{
		return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
		<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
		</svg>';
	}

	function carta()
	{
		return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  	<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
		</svg>';
	}

	function whats()
	{
		return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  	<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
		</svg>';
	}

	function cphp()
	{
		return '<strong><a style="text-decoration:none;" href="https://www.devmedia.com.br/certificado/tecnologia/php/vinicius-henrique-costa-da-silva">Certificado</a></strong>';
	}

	function cjs(){
		return '<strong><a style="text-decoration:none;" href="https://www.devmedia.com.br/certificado/tecnologia/javascript/vinicius-henrique-costa-da-silva">Certificado</a></strong>';
	}

	function chtml()
	{
		return '<strong><a style="text-decoration:none;" href="https://www.devmedia.com.br/certificado/tecnologia/html/vinicius-henrique-costa-da-silva">Certificado</a></strong>';
	}

	function expHavetech()
	{
		return "	 Setor de Planejamento e Controle de Produção: implementação de sistema ERP. controle, planejamento, apontamento, matérias prima e produção.
		 Setor financeiro: cobrança, baixa de títulos, conciliação bancaria, emissão de boletos, relatórios.
		 Setor de faturamento: emissão de nota fiscal, conferencia de impostos, CFOP, CST, IPI, ICMS, PIS COFINS.
		comunicação diária com o setor de vendas...";
	}

	function expVital()
	{
		return "Toda rotina administrativa logística e financeira e vendas, suporte ao setor comercial, criação de estratégia e software em MS Access ou PHP 7 - HTML 5 - CSS3 e JavaScript para melhoria de procedimentos interno ou externo, resposta de cotação, emissão de relatórios provisionamento de vendas e compras. conhecimento em materiais descartáveis e medicamento de uso humano hospitalar. atividades operacionais, lançamentos de entrada e saídas de produtos. Atualização diária de planilhas e sistema para controles interna e externo, saldo e extrato bancário, movimentação financeira, emissão de boleto bancário, contas a pagar e a receber. Auxilio na emissão conferência do faturamento e entrada de notas fiscais, controle de estoque e logística de entrega e recebimento de mercadoria, controle de materiais em terceiro e cobrança e atendimento ao cliente (suporte, duvidas etc.), liderança de equipe. Planejamento e controle de produção (PCP) engenharia de produto, Programação da fabrica, emissão de relatórios reportados diariamente e mensalmente a diversos setores, emissão de ordem de fabricação, levantamento diário de produtividade";
	}

	function expPolifilme()
	{
		return "Toda rotina administrativa logística, atividades operacionais, lançamentos de entrada e saídas de produtos. Atualização diária das planilhas para controles internos e externo. Auxilio na emissão e conferência do faturamento (CFOP, NCM, noção básica ICMS, ST, IPI e Arquivos XML), controle de estoque e logística de entrega e recebimento de mercadoria, controle de materiais em terceiro e atendimento ao cliente (suporte, duvidas etc.), liderança de equipe. Planejamento e controle de produção (PCP) engenharia de produto, Programação da fabrica, emissão de relatórios reportados diariamente e mensalmente a diversos setores, emissão de ordem de fabricação, levantamento diário de produtividade";
	}
}

?>