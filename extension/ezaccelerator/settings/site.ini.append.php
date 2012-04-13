<?php /* #?ini charset="utf-8"?

[TemplateSettings]
ExtensionAutoloadPath[]=ezaccelerator

[ContentSettings]
ViewCacheHandler[]=eZAcceleratorManager

[RegionalSettings]
TranslationExtensions[]=ezaccelerator

[Event]
#Listeners[]=<event>@<callback>
Listeners[]=content/cache@eZAcceleratorManager::registerNodeList

*/?>
