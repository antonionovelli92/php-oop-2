<?php include_once __DIR__ . '/data/index.php'; ?>


<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/includes/head.php' ?>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">E-pet</span>
        </div>
    </nav>
    <main>
        <div class="container">
            <section id="food-product">
                <h2>Food <i class="<?php FoodProduct::$icon ?>"></i></h2>
                <div class="d-flex">
                    <?php foreach ($food_products as $product) include __DIR__ . '/includes/cards/food_card.php'; ?>
                </div>
            </section>
            <section id="toy-product" class="mt-5">
                <h2>Toy <i class="<?php ToyProduct::$icon ?>"></i></h2>
                <div class="d-flex">
                    <?php foreach ($toy_products as $product) {
                        include __DIR__ . '/includes/cards/toy_card.php';
                    }
                    ?>

                </div>
            </section>
        </div>
    </main>
</body>

</html>