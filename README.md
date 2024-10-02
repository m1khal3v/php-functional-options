The Functional Options Pattern is a pattern of structuring your class by designing 
a set of APIs that will help with the configuration and initialisation of your object. 

```php
$object = new ConfigurableObject(
    WithString("something"),
    WithInt(123),
    WithFloat(123.321)
)
```