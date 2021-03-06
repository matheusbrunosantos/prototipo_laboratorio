<?php 
include_once('layout/header.php');
include_once('layout/menu.php');
include_once('layout/sidebar.php');
include_once('bd/produtos.php');
?>
<div class="col">
  <h2>Produtos</h2>
  <div class="card">
    <div class="card-body">
      <a href="form_produtos.php" class="btn btn-primary" style="float: right">
        <i class="fas fa-cart-plus"></i> Novo Produto
      </a>
      <a href="javascript:history.back(-1)" class="btn btn-secondary voltar">
        <i class="fas fa-arrow-left"></i> Voltar
      </a>
      <br />
      <br />
      <table class="table table-striped table-hover">
          <tr>
            <th>#</th>
            <th>Código</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th class="acao">Ação</th>
          </tr>
          <?php for($i = 0; $i < count($produtos); $i++): ?>
          <tr>
            <td><?= $i + 1 ?></td>
            <td><?php echo $produtos[$i]['codigo']; ?></td>
            <td><?php echo $produtos[$i]['nome']; ?></td>
            <td><?php echo $produtos[$i]['categoria'] ?></td>
            <td><?php echo number_format($produtos[$i]['preco'], 2,',','.'); ?></td>
            <td>
              <a href="#" class="btn btn-success">
                <i class="fas fa-eye"></i>
              </a>
              <a href="#" class="btn btn-warning">
                <i class="fas fa-edit"></i>
              </a>
              <a href="#" class="btn btn-danger">
                <i class="fas fa-trash"></i>
              </a>
            </td>
          </tr>
        <?php endfor; ?>
        
      </table>
       <nav aria-label="Navegação de página exemplo" class="pagination">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
        </ul>
      </nav>
      
    </div>
  </div>
</div>
<?php include_once('layout/footer.php'); ?>