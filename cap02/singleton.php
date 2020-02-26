<?php

require_once 'classes/Preferencias.php';

$preferencias = Preferencias::getInstance();
print "A linguagem é: {$preferencias->getData('language')}\n";

$preferencias->setData('language', 'pt');
print "A linguagem é: {$preferencias->getData('language')}\n";

$preferencias2 = Preferencias::getInstance();
print "A linguagem é: {$preferencias->getData('language')}\n";

$preferencias->save();