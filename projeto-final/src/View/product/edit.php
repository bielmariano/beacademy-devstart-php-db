<h1>Editar Produtos</h1>

<?php 
extract($data)
?>

<form action="" method="post">
    

    <label for="name">Nome</label>
    <input value="<?php echo $product['name'] ?>" id="name" name="name" type="text" class="form-control mb-3">

    <label for="description" method="post">Descrição</label>
    <textarea  name="description" id="description" class="form-control mb-3"><?php echo $product['description']; ?></textarea>

    <label for="value">Preço</label>
    <input value="<?php echo $product['value'] ?>" id="value" name="value" type="text" class="form-control mb-3">

    <label for="quantity">Quantidade</label>
    <input value="<?php echo $product['quantity'] ?>" id="quantity" name="quantity" type="text" class="form-control mb-3">

    <label for="photo">Foto</label>
    <input value="<?php echo $product['photo'] ?>" id="photo" name="photo" type="text" class="form-control mb-3">

    <button class="btn btn-primary">Atualizar</button>

</form>