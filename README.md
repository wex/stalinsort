# StalinSort
StalinSort for PHP7+

## Installing

`composer require nhujanen/stalinsort`

## Usage

```
<?php
    require_once 'vendor/autoload.php';
    
    $data = [4, 3, 2, 0, -5, 9, 4, 12, 4, 9, 20, 15, 1, 0];
    
    $sorter = new Stalin\Sort($data);
    
    // Sort data
    print_r( $sorter->sort() );
    
    // Sort data and maintain index association
    print_r( $sorter->asort() );
```

# License

MIT
