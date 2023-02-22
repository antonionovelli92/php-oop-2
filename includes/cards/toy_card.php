<div class="card me-3" style="width:250px">
    <div class="card-header">
        <?= $product->getCategory()->getName() ?>
        <i class="<?= $product->getCategory()->getIcon() ?>"></i>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $product->getName() ?></h5>
        <p class="card-text"><?= $product->getDescription() ?></p>
        <p>Price: € <?= $product->getPrice() ?></p>
        <p>Materials: <?= $product->listMaterials() ?></p>
        <p>Color: <?= $product->getColor() ?></p>
    </div>
</div>