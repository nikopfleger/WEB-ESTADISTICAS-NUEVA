<?php

/* WebEstadisticasBundle::dialog.html.twig */
class __TwigTemplate_180a3053cc1f3423c8de803229c60ea1a8062e281ec86b1c499ed0406f7c63f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "﻿<div id=\"consulta\" title=\"Lugares de consulta de los libros de estadísticas.\">
  <ul><li>BIBLIOTECA I.N.D.E.C.<br>Julio Argentino Roca 609 - Tel. (011) - 4349-9625 </li>
  <li>BIBLIOTECA DE LA FACULTAD DE DERECHO Y CS. SOCIALES - U.B.A. -<br>Av. Figueroa Alcorta 2263 - Tel. (011) - 4809-5634</li>
  <li>BIBLIOTECA DE LA U.B.A.<br>Azcuenaga 280 1° Piso - Tel. (011) - 4953-0420</li>
  <li>BIBLIOTECA DE LA CORTE SUPREMA DE JUSTICIA DE LA NACIÓN<br>Talcahuano 550 7° Piso - Tel. (011) - 4370-4600</li>
  <li>BIBLIOTECA DE LA PROCURACIÓN GRAL. DE LA NACIÓN<br>Hipólito Irigoyen 765 - Tel. (011) - 4338-4369</li>
  <li>BIBLIOTECA DE CONGRESO DE LA NACION<br>Hipólito Irigoyen 1750 - Tel. (011) - 4010-3000</li>
  </ul>
</div>

<div id=\"ALERTA\" title=\"Alerta\">
\t<div id='alertaMensaje'></div>
\t<a id='alertaAceptar' class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\">
    <span class=\"ui-button-text\">Aceptar</span></a>
</div>

<div id=\"contactenos\" title=\"Contáctenos.\">
 <ul><li>Dirección postal:<br>
  Sarmiento 877, Piso 9, 1041 Ciudad Autónoma de Buenos Aires, ARGENTINA</li>
   <li>Correo Electrónico:<br>
   <a href=\"mailto:secretaria.estadisticas@pjn.gov.ar\">secretaria.estadisticas@pjn.gov.ar</a></li></ul>
</div>

<div id=\"selEstad\" title=\"Estadísticas por año\">
\t<form class=\"form-horizontal\" role=\"form\" id=\"formDeArchivo\">
\t\t";
        // line 27
        echo "\t\t<div class=\"form-group\">
\t\t\t<label for=\"select\" class=\"col-xs-2 col-xs-offset-1 control-label\">Año:</label>
\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t \t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"listadoAnios\" attribute=\"autofocus\">
  \t\t\t\t\t<option value=\"default\">Seleccione Año</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 36
        echo "\t\t<div class=\"form-group\">
\t\t\t<label for=\"select\" class=\"col-xs-2 col-xs-offset-1 control-label\">Jurisdicción:</label>
\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"listadoCapitulos\" disabled='disabled'>
\t\t\t\t\t<option value=\"default\">Seleccione Fuero/Jurisdicción:</option>
\t\t\t\t</select>\t
\t\t\t</div>
\t\t</div>
\t\t";
        // line 45
        echo "\t\t<div class=\"form-group\">
\t\t\t<label for=\"select\" class=\"col-xs-2 col-xs-offset-1 control-label\">Título:</label>
\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"listadoDivisiones\" disabled='disabled'>
\t\t\t\t\t<option value=\"default\">Seleccione Título</option>
\t\t\t\t</select>\t
\t\t\t</div>
\t\t</div>
\t\t";
        // line 54
        echo "\t\t<div class=\"form-group\">
\t\t\t<label for=\"select\" class=\"col-xs-2 col-xs-offset-1 control-label\">Subtítulo:</label>
\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"listadoSubtitulos\" disabled='disabled'>
\t\t\t\t\t<option value=\"default\">Seleccione Subtítulo</option>
\t\t\t\t</select>\t
\t\t\t</div>
\t\t</div>
\t\t";
        // line 63
        echo "\t\t<div class=\"form-group\">
\t\t\t<label for=\"select\" class=\"col-xs-2 col-xs-offset-1 control-label\">Archivo:</label>
\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"listadoArchivos\" name=\"listadoArchivos\" disabled='disabled'>
\t\t\t\t\t<option value=\"default\">Seleccione Archivo</option>
\t\t\t\t</select>\t
\t\t\t</div>
\t\t</div>
\t\t";
        // line 71
        echo "\t
\t\t<div class=\"form-group\">
\t\t<textarea id=\"descripcion\" class=\"textArea ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active\" rows=\"6\" cols=\"55\" wrap='off' readonly>Descripción del archivo a solicitar.
\t\t</textarea>
\t\t</div>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
\t\t\t\t<a href='javascript:void(0)' id=\"abrirArchivo\" class=\"btn ui-button ui-widget ui-state-default ui-state-disabled ui-corner-all ui-button-text-only\" target=\"_blank\" disabled='disabled'>
\t\t\t\t<span class=\"ui-button-text\">Abrir</span></a>
    \t\t\t<a id='descargarArchivo' class=\"btn ui-button ui-widget ui-state-default ui-state-disabled ui-corner-all ui-button-text-only\"  disabled='disabled' download>
    \t\t\t<span class=\"ui-button-text\">Descargar</span></a>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
\t
\t<div id=\"fuerJuris\" title=\"Estadisticas por Jurisdicción\">
\t    <form class=\"form-horizontal\" role=\"form\" id=\"formDeArchivoJuris\">
\t\t\t\t";
        // line 90
        echo "\t\t\t\t<div class=\"form-group\">
 \t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Jurisdicción:</label>
 \t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
 \t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"listadoJurisdicciones\" attribute=\"autofocus\">
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Jurisdiccion</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 99
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Año:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"listadoAniosJuris\" disabled='disabled'>
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Año</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 108
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Título:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"listadoDivisionesJuris\" disabled='disabled'>
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Título</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 117
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"col-xs-2 col-xs-offset-1 control-label\">Subtítulo:</label>
\t\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"listadoSubtitulosJuris\" disabled='disabled'>
\t\t\t\t\t\t\t\t<option value=\"default\">Seleccione Subtítulo</option>
\t\t\t\t\t\t\t</select>\t
\t\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t";
        // line 126
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Archivo:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"listadoArchivosJuris\" name=\"listadoArchivosJuris\" disabled='disabled'>
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Archivo</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 134
        echo "\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<textarea id=\"descripcionJuris\" class=\"textArea ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active\" rows=\"6\" cols=\"55\" wrap='off' readonly>Descripción del archivo a solicitar.
\t\t\t\t\t</textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t\t\t<div class=\"ui-dialog-buttonset\">
\t\t\t\t\t\t<a href='javascript:void(0)' class=\"btn ui-button ui-widget ui-state-default ui-state-disabled ui-corner-all ui-button-text-only\" id=\"abrirArchivoJuris\" target=\"_blank\">
\t\t\t\t\t\t<span class=\"ui-button-text\">Abrir</span></a>
\t\t\t\t\t\t<a id='descargarArchivoJuris' class=\"btn ui-button ui-widget ui-state-default ui-state-disabled ui-corner-all ui-button-text-only\" download><span class=\"ui-button-text\">Descargar</span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</form>
\t</div>
\t
\t
<div id=\"fallos\" title=\"Fallos\">
\t\t
\t    <form class=\"form-horizontal\" role=\"form\" id=\"formDeFallos\" >
\t\t\t\t<a href=";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("archivos/Trabajos_Especiales/Fallos/consideragral.htm"), "html", null, true);
        echo " id=\"hrefFallos\" target=\"_blank\">Consideraciones generales</a><br><br>
\t    \t\t";
        // line 155
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Año:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"aniosFallos\" attribute=\"autofocus\">
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Año</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 164
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Tipo:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"tipoFallo\" disabled='disabled'>
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Tipo</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 173
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Archivo:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"archivoFallo\" name=\"archivoFallo\" disabled='disabled'>
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Fallo</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br><a href='https://sjconsulta.csjn.gov.ar/sjconsulta/fallos/consulta.html' id=\"hrefFallos\" target=\"_blank\">Click ACA para fallos del 2013 en adelante</a><br>
\t\t\t\t";
        // line 183
        echo "\t\t\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t\t\t<div class=\"ui-dialog-buttonset\">
\t\t\t\t\t\t<a href='javascript:void(0)' class=\"btn ui-button ui-widget ui-state-default ui-state-disabled ui-corner-all ui-button-text-only\" id=\"abrirFallo\" target=\"_blank\">
\t\t\t\t\t\t<span class=\"ui-button-text\">Abrir</span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</form>
</div>

<div id=\"evolucion\" title=\"Evolución por período\">
\t<form class=\"form-horizontal\" role=\"form\" id=\"formEvolucion\">
\t\t\t\t";
        // line 195
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Período:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"periodoEvolucion\" attribute=\"autofocus\">
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Período</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 204
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Archivo:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"archivoEvolucion\" attribute=\"autofocus\">
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Archivo</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 213
        echo "\t\t\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t\t\t<div class=\"ui-dialog-buttonset\">
\t\t\t\t\t\t<a href='javascript:void(0)' class=\"btn ui-button ui-widget ui-state-default ui-state-disabled ui-corner-all ui-button-text-only\" id=\"abrirEvolucion\" target=\"_blank\">
\t\t\t\t\t\t<span class=\"ui-button-text\">Abrir</span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t
\t</form>
</div>

<div id=\"indicadores\" title=\"Indicadores\">
\t<form class=\"form-horizontal\" role=\"form\" id=\"formIndicadores\">
\t\t    \t";
        // line 225
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Año:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all\" id=\"aniosIndicadores\" attribute=\"autofocus\">
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Año</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 234
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Fuero/Jurisdicción:</label>
\t\t\t\t\t<div class=\"col-xs-8 col-xs-offset-1\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"capituloIndicadores\">
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Fuero/Jurisdicción</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 243
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"select\" class=\"control-label col-xs-2 col-xs-offset-1\">Archivo:</label>
\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t<select class=\"form-control ui-selectmenu-button ui-widget ui-state-default ui-state-disabled ui-corner-all\" id=\"archivoIndicadores\">
  \t\t\t\t\t\t\t<option value=\"default\">Seleccione Archivo</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 252
        echo "\t\t\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t\t\t<div class=\"ui-dialog-buttonset\">
\t\t\t\t\t\t<a href='javascript:void(0)'  class=\"btn ui-button ui-widget ui-state-default ui-state-disabled ui-corner-all ui-button-text-only\" id=\"abrirIndicadores\"  target=\"_blank\">
\t\t\t\t\t\t<span class=\"ui-button-text\">Abrir</span></a>
\t\t\t\t\t\t<a href=";
        // line 256
        echo "javascript:void(0)";
        echo " id='descargarIndicadores' class=\"btn ui-button ui-widget ui-state-default ui-state-disabled ui-corner-all ui-button-text-only\" download><span class=\"ui-button-text\">Descargar</span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "WebEstadisticasBundle::dialog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 256,  298 => 252,  288 => 243,  278 => 234,  268 => 225,  255 => 213,  245 => 204,  235 => 195,  222 => 183,  211 => 173,  201 => 164,  191 => 155,  187 => 153,  166 => 134,  156 => 126,  146 => 117,  136 => 108,  126 => 99,  116 => 90,  96 => 71,  86 => 63,  76 => 54,  66 => 45,  56 => 36,  46 => 27,  19 => 1,);
    }
}
