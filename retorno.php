<?php
include_once "conexao.php";
$novo_pagto = [
    'msg'                 => $_GET['msg'],
    'collection_status'   => $_GET['collection_status'],
    'payment_id'          => $_GET['payment_id'],
    'status'              => $_GET['status'],
    'external_reference'  => $_GET['external_reference'],
    'payment_type'        => $_GET['payment_type'],
    'merchant_order_id'   => $_GET['merchant_order_id'],
    'preference_id'       => $_GET['preference_id'],
    'site_id'             => $_GET['site_id'],
    'processing_mode'     => $_GET['processing_mode'],
    'merchant_account_id' => $_GET['merchant_account_id'],
    'compra_id'           => $_GET['external_reference']
];
echo "<pre>";
print_r($_GET);
$sql = "INSERT INTO pagamento (
    msg, collection_status, payment_id, status, external_reference,
    payment_type, merchant_order_id, preference_id, site_id,
    processing_mode, merchant_account_id, compra_id
) VALUES (
    :msg, :collection_status, :payment_id, :status, :external_reference,
    :payment_type, :merchant_order_id, :preference_id, :site_id,
    :processing_mode, :merchant_account_id, :compra_id
)";
$pagto = $conexao->prepare($sql);
if ($pagto->execute($novo_pagto)) {
    echo '<div>Pagamento ' . $novo_pagto['status'] . ' <a href="detalhe_pedido.php?id=' . $novo_pagto['payment_id'] . '">Detalhes do pedido</a></div>';
} else {
    echo "Erro finalizar o pagamento.";
}
?>
