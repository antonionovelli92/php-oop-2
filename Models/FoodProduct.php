<?php
require_once __DIR__ . '/Product.php';

class FoodProduct extends Product
{
    private $ingredients;
    private $expiration;
    public static $icon = 'fa-solid fa-bowl-food';

    public function __construct($name, $description, $price, Category $category, array $ingredients, $expiration)
    {
        parent::__construct($name, $description, $price, $category);

        $this->setExpiration($expiration);
        $this->setIngredients($ingredients);
    }


    public function getExpiration()
    {
        return $this->expiration;
    }

    public function setExpiration($expiration)
    {
        $this->expiration = strtotime($expiration);

        return $this;
    }

    public function isExpire(): bool
    {
        $today = strtotime(date('y-m-d'));
        return $this->expiration < $today;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }


    public function listIngredients()
    {
        return implode(', ', $this->ingredients);
    }


    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}
