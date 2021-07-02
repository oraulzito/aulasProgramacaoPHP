<?php
require_once("utils/layout.php");
require_once("classes/Produto.php");

$layout = new Layout();
$prodClass = new Produto();

echo $layout->header([], ['js/carrinho.js']);
?>
<div id="carrinho">

</div>
<?php
echo $layout->footer();
?>
