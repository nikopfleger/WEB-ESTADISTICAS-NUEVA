ECHO ****************************************************
ECHO *                                                  *
ECHO * Limpia el cache de la página web de Estadísticas *
ECHO *                                                  *
ECHO ****************************************************


ECHO ----> Borra todo del Directorio CACHE
del /s /q app\cache\*.*

ECHO ----> Borra assetic del directorio 07_Estadisticas
rd /s /q 07_Estadisticas\css
rd /s /q 07_Estadisticas\images
rd /s /q 07_Estadisticas\js

ECHO ----> Borra todo del Directorio BUNDLES
del /s /q 07_Estadisticas\bundles\*.*

ECHO ----> Comandos PHP
PHP app/console cache:clear
PHP app/console cache:clear --env=prod --no-debug
PHP app/console assets:install 07_Estadisticas
PHP app/console assetic:dump 07_Estadisticas
PHP app/console assetic:dump --env=prod --no-debug 07_Estadisticas

ECHO ----> BORRAR SENSIODISTRIBUTION Y FRAMEWORK BUNDLES
rd /s /q  07_Estadisticas\bundles\sensiodistribution
rd /s /q  07_Estadisticas\bundles\framework

ECHO ----> FIN DE PROCESO

