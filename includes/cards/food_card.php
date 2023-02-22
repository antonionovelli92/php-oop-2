<div class="card me-3">
    <div class="card-header">
        <?= $product->getCategory()->getName() ?>
        <i class="<?= $product->getCategory()->getIcon() ?>"></i>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $product->getName() ?></h5>
        <p class="card-text"><?= $product->getDescription() ?></p>
        <p>Price: € <?= $product->getPrice() ?></p>
        <p>Ingredients: <?= $product->listIngredients() ?></p>
        <p>Expiration date: <?= $product->getExpiration() ?></p>
    </div>
</div>