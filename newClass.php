<?php

class Estoque {
    private $itens = [];

    public function adicionarItem($nome, $quantidade) {
        $this->itens[$nome] = $quantidade;
    }

    public function visualizarEstoque() {
        echo "Estado atual do estoque:\n";
        foreach ($this->itens as $nome => $quantidade) {
            echo "$nome: $quantidade\n";
        }
    }

    public function removerItem($nome) {
        if (isset($this->itens[$nome])) {
            unset($this->itens[$nome]);
            echo "$nome removido do estoque.\n";
        } else {
            echo "$nome não encontrado no estoque.\n";
        }
    }
}

$estoque = new Estoque();

$estoque->adicionarItem("Camisa", 10);
$estoque->adicionarItem("Boné", 5);
$estoque->adicionarItem("Calça", 20);
$estoque->adicionarItem("short", 15);
$estoque->adicionarItem("Agasalho", 8);


$estoque->visualizarEstoque();


$itemRemover = "Calça";
$estoque->removerItem($itemRemover);


$estoque->visualizarEstoque();
?>