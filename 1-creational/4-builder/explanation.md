The builder pattern is an object creation software design pattern with the intentions of finding a solution to the telescoping constructor anti-pattern.

```php
// Too much arguments = telescoping constructor anti-pattern
public function __construct($size, $cheese = true, $pepperoni = true, $tomato = false, $lettuce = true)
{
}

// Better
public function __construct(BurgerBuilder $builder)
{
    $this->size = $builder->size;
    $this->cheese = $builder->cheese;
    $this->pepperoni = $builder->pepperoni;
    $this->lettuce = $builder->lettuce;
    $this->tomato = $builder->tomato;
}
```

When there could be several flavors of an object and to avoid the constructor telescoping. The key difference from the factory pattern is that; factory pattern is to be used when the creation is a one step process while builder pattern is to be used when the **creation is a multi step process**.