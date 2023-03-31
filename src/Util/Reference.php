<?php

namespace PagseguroApi\Util;

abstract class Reference {

    public static function getReferencesByRequestType($type) {
        switch($type) {
			case "credit_card":
                $name = "Criando_e_pagando_com_cartao";
                $link = "https://dev.pagseguro.uol.com.br/reference/order-pay-credit-encrypted";
			break;
			case "boleto":
                $name = "Criando e pagando um pedido com Boleto";
                $link = "https://dev.pagseguro.uol.com.br/reference/pay-order-boleto";
			break;
			case "debit":
                $name = "Criar_um_pedido_com_autenticação_3DS_interna";
                $link = "https://dev.pagseguro.uol.com.br/reference/create-order-with-3ds-internal";
			break;
			case "public_key":
                $name = "Criar_suas_chaves_públicas";
                $link = "https://dev.pagseguro.uol.com.br/reference/post-public-keys";
			break;
			// case "installment":
            //     $name = "Consultar juros de uma transação de pagamento";
            //     $link = "https://dev.pagseguro.uol.com.br/reference/get-transaction-fees";
			// break;
			case "session":
                $name = "Criar_uma_sessão";
                $link = "https://dev.pagseguro.uol.com.br/reference/post-sessions";
			break;
		}

        return [$name, $link];
    }

}