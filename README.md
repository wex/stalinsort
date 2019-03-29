# StalinSort
StalinSort for PHP7+

- Traverses array and removes all elements that break the order.

## Installing

`composer require nhujanen/stalinsort`

## Usage

```php
<?php
    require_once 'vendor/autoload.php';
    
    $data = [4, 3, 2, 0, -5, 9, 4, 12, 4, 9, 20, 15, 1, 0];
    
    $sorter = new Stalin\Sort($data);
    
    // Sort data
    print_r( $sorter->sort() );
    /*
        Array
        (
            [0] => 4
            [1] => 9
            [2] => 12
            [3] => 20
        )
    */
    
    // Sort data and maintain index association
    print_r( $sorter->asort() );
    /*
        Array
        (
            [0] => 4
            [5] => 9
            [7] => 12
            [10] => 20
        )
    */
```

# License

MIT