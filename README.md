# Mobile Detect Wrapper Class Plugin for Joomla 3 & 4.

```php
use Joomla\CMS\Plugin\PluginHelper;

PluginHelper::importPlugin('mobiledetect');
list($mobileDetect) = Factory::getApplication()->triggerEvent('onGetMobileDetectObject');

$mobileDetect->isMobile();
```
