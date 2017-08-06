Sample module for using Custom validator
---------------------------------------

Sample implementation of blog post with zf3 servicemanager usage: https://samsonasik.wordpress.com/2014/02/02/zend-framework-2-utilize-validatormanager-to-work-with-custom-validator-in-zendform/

register to config/modules.config.php

```php
<?php

return [
    // ...
    'TutorialValidator',
];
```

try access the page with /tutorialvalidator
