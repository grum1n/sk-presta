<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lt-LT', array (
));

$catalogueLt = new MessageCatalogue('lt', array (
));
$catalogue->addFallbackCatalogue($catalogueLt);

return $catalogue;
