<?php

/* abmBundle:admin:admin.html.twig */
class __TwigTemplate_5f5a89e31fe9b4b71d311dd2f63363576aee11c0c616543a4089fc154ac20da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("abmBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'jss' => array($this, 'block_jss'),
            'body' => array($this, 'block_body'),
            'forms' => array($this, 'block_forms'),
            'submit_widget_nove' => array($this, 'block_submit_widget_nove'),
            'submit_widget_tres' => array($this, 'block_submit_widget_tres'),
            'submit_widget_eves' => array($this, 'block_submit_widget_eves'),
            'submit_widget_peri' => array($this, 'block_submit_widget_peri'),
            'submit_widget_indi' => array($this, 'block_submit_widget_indi'),
            'submit_widget_cain' => array($this, 'block_submit_widget_cain'),
            'submit_widget_ares' => array($this, 'block_submit_widget_ares'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'submit_widget_capit' => array($this, 'block_submit_widget_capit'),
            'submit_widget_juris' => array($this, 'block_submit_widget_juris'),
            'submit_widget_titu' => array($this, 'block_submit_widget_titu'),
            'submit_widget_subt' => array($this, 'block_submit_widget_subt'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "abmBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t\t";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "42cd147_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_42cd147_0") : $this->env->getExtension('assets')->getAssetUrl("css/admin_admin_1.css");
            // line 17
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
            // asset "42cd147_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_42cd147_1") : $this->env->getExtension('assets')->getAssetUrl("css/admin_fontAwesomeDatatablesIntegration_2.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
            // asset "42cd147_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_42cd147_2") : $this->env->getExtension('assets')->getAssetUrl("css/admin_jquery.dataTables_3.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
            // asset "42cd147_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_42cd147_3") : $this->env->getExtension('assets')->getAssetUrl("css/admin_jquery.dataTables_themeroller_4.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
            // asset "42cd147_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_42cd147_4") : $this->env->getExtension('assets')->getAssetUrl("css/admin_font-awesome.min_5.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
            // asset "42cd147_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_42cd147_5") : $this->env->getExtension('assets')->getAssetUrl("css/admin_jquery-ui_6.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
            // asset "42cd147_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_42cd147_6") : $this->env->getExtension('assets')->getAssetUrl("css/admin_jquery-ui.structure_7.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
            // asset "42cd147_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_42cd147_7") : $this->env->getExtension('assets')->getAssetUrl("css/admin_jquery-ui.theme_8.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
        } else {
            // asset "42cd147"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_42cd147") : $this->env->getExtension('assets')->getAssetUrl("css/admin.css");
            echo "\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 19
        echo "\t
";
    }

    // line 22
    public function block_jss($context, array $blocks = array())
    {
        // line 23
        echo "\t";
        $this->displayParentBlock("jss", $context, $blocks);
        echo "
\t";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "17a4834_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17a4834_0") : $this->env->getExtension('assets')->getAssetUrl("js/admin_jquery-ui_1.js");
            // line 31
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "17a4834_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17a4834_1") : $this->env->getExtension('assets')->getAssetUrl("js/admin_jquery.dataTables.min_2.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "17a4834_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17a4834_2") : $this->env->getExtension('assets')->getAssetUrl("js/admin_jquery.center_3.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
            // asset "17a4834_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17a4834_3") : $this->env->getExtension('assets')->getAssetUrl("js/admin_admin_4.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "17a4834"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_17a4834") : $this->env->getExtension('assets')->getAssetUrl("js/admin.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        echo "\t
\t";
        // line 36
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t
\t
\t
<div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        
        ";
        // line 44
        echo "        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"javascript:void(0)\">ABM Estadísticas</a>
        </div>
        
        
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"http://5.35.1.157:8080/\" target=\"_blank\">Poder Judicial de la Nación</a></li>
            </ul>
            <ul class=\"nav navbar-nav\">
               <li>
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tablas Página Web<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu multi-level\">
                        ";
        // line 64
        echo "                       ";
        // line 66
        echo "                        ";
        // line 67
        echo "                        <li class=\"dropdown-submenu\">
                            <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Archivos Estadísticos</a>
                           \t
                            <ul class=\"dropdown-menu\">
                            \t
                                <li><a href=\"javascript:void(0)\" id=\"tablaAres\">Mostrar/Editar Tabla</a></li>                                
                                <li><a href=\"javascript:void(0)\" id=\"aresAgregar\">Agregar Archivos</a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                            <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Año</a>
                           \t
                            <ul class=\"dropdown-menu\">
                            \t
                                <li><a href=\"javascript:void(0)\" id=\"tablaAnio\">Mostrar/Editar Tabla</a></li>                                
                                <li><a href=\"javascript:void(0)\" id=\"agregarAnio\">Agregar Año</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown-submenu\">  
                            <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Capítulo</a>   
                                                     
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaCapitulo\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarCapitulo\">Agregar Capítulo</a></li>
                            </ul>                            
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Jurisdicción</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaJurisdiccion\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarJurisdiccion\">Agregar Jurisdicción</a></li>
                            </ul> 
                        
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Título</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaTitulo\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarTitulo\">Agregar Título</a></li>
                            </ul> 
                        
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Subtítulo</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaSubtitulo\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarSubtitulo\">Agregar Subtítulo</a></li>
                            </ul> 
                        
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Capitulo Indicador</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaCapiInd\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarCapiInd\">Agregar Capitulo</a></li>
                            </ul> 
                        
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Indicador</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaInd\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarIndi\">Agregar Archivo</a></li>
                            </ul> 
                        
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Período (Evolución)</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaPeri\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarPeri\">Agregar Período</a></li>
                            </ul> 
                        
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Evolucion Estadística</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaEves\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarEves\">Agregar Archivo</a></li>
                            </ul> 
                        
                        </li>
                       
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Fallos</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaFall\">Mostrar Tabla</a></li>
                            </ul> 
                        
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Divisiones de Fallos</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaFadi\">Mostrar Tabla</a></li>
                            </ul> 
                        
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Novedades</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaNove\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarNove\">Agregar Archivo</a></li>
                            </ul> 
                        
                        </li>
                        
                        <li class=\"dropdown-submenu\">
                        \t<a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Tabla Trabajos Especiales</a>
                       \t\t<ul class=\"dropdown-menu\">
                                <li><a href=\"javascript:void(0)\" id=\"tablaTres\">Mostrar/Editar Tabla</a></li>
                                <li><a href=\"javascript:void(0)\" id=\"agregarTres\">Agregar Trabajo</a></li>
                            </ul> 
                        
                        </li>
                        
                    </ul>
                </li>                
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
\t

<div id=\"body\"><br>
\t
\t
\t<div id=\"progressbar\" class=\"progress progress-striped active\">
    \t<div class=\"progress-bar\" style=\"width:100%\">Cargando</div>
    </div>

\t

\t<table id=\"datatable\" class=\"compact display\"><thead></thead><tbody></tbody></table>
\t    <center id=\"infos\">Haga clic en el menu de navegación para agregar/ver/editar</center>
\t    <div id=\"info\"></div>
</div>
\t
";
        // line 215
        echo "\t
<div id=\"ALERTA\" title=\"Alerta\">
\t<input type='hidden' id='alertaTabla' value=''>
\t<div id='alertaMensaje'></div>
\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t<div class=\"ui-dialog-buttonset\">
\t\t\t\t<a id='alertaAceptar' class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\">
   \t\t\t\t\t<span class=\"ui-button-text\">Si</span></a>
   \t\t\t\t<a id='alertaCancelar' class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\">
   \t\t\t\t\t<span class=\"ui-button-text\">No</span></a>
   \t\t</div>
   \t</div>
</div>
\t
\t
\t";
        // line 231
        echo "
\t
\t
 ";
        // line 234
        $this->displayBlock('forms', $context, $blocks);
        // line 968
        echo " 
 ";
    }

    // line 234
    public function block_forms($context, array $blocks = array())
    {
        // line 235
        echo " 
  ";
        // line 237
        echo " 
 ";
        // line 238
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), array(0 => $this));
        // line 239
        echo " 
  <div id=\"editarNoveDLG\" title=\"Novedades\">
 
 ";
        // line 242
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), 'form_start');
        echo "
 ";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), 'errors');
        echo " 

 <div class='form-group'>
 \t";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), "noveDetalle", array()), 'label');
        echo "
 \t<div ";
        // line 247
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), "noveDetalle", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  <div class='form-group'>
 \t";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), "noveLink", array()), 'label');
        echo "
 \t<div ";
        // line 254
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), "noveLink", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  <div class='form-group'>
 \t";
        // line 260
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), "noveDescarga", array()), 'label');
        echo "
 \t<div ";
        // line 261
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), "noveDescarga", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  ";
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), "noveId", array()), 'widget');
        echo "
  ";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), "noveEditar", array()), 'widget');
        // line 271
        $this->displayBlock('submit_widget_nove', $context, $blocks);
        // line 290
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarNOVE"]) ? $context["editarNOVE"] : null), 'form_end');
        echo "
 </div>
 
   ";
        // line 294
        echo " 
 ";
        // line 295
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarTRES"]) ? $context["editarTRES"] : null), array(0 => $this));
        // line 296
        echo " 
  <div id=\"editarTresDLG\" title=\"Trabajos Especiales\">
 
 ";
        // line 299
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarTRES"]) ? $context["editarTRES"] : null), 'form_start');
        echo "
 ";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarTRES"]) ? $context["editarTRES"] : null), 'errors');
        echo " 

 <div class='form-group'>
 \t";
        // line 303
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTRES"]) ? $context["editarTRES"] : null), "tresDetalle", array()), 'label');
        echo "
 \t<div ";
        // line 304
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTRES"]) ? $context["editarTRES"] : null), "tresDetalle", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  <div class='form-group'>
 \t";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTRES"]) ? $context["editarTRES"] : null), "tresLink", array()), 'label');
        echo "
 \t<div ";
        // line 311
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTRES"]) ? $context["editarTRES"] : null), "tresLink", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  <div class='form-group'>
 \t";
        // line 317
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTRES"]) ? $context["editarTRES"] : null), "tresDescarga", array()), 'label');
        echo "
 \t<div ";
        // line 318
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 319
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTRES"]) ? $context["editarTRES"] : null), "tresDescarga", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  ";
        // line 323
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTRES"]) ? $context["editarTRES"] : null), "tresId", array()), 'widget');
        echo "
  ";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTRES"]) ? $context["editarTRES"] : null), "tresEditar", array()), 'widget');
        // line 328
        $this->displayBlock('submit_widget_tres', $context, $blocks);
        // line 347
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarTRES"]) ? $context["editarTRES"] : null), 'form_end');
        echo "
 </div>
 
 
 
 ";
        // line 353
        echo " 
 ";
        // line 354
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarEVES"]) ? $context["editarEVES"] : null), array(0 => $this));
        // line 355
        echo " 
  <div id=\"editarEvesDLG\" title=\"Evolución Estadística\">
 
 ";
        // line 358
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarEVES"]) ? $context["editarEVES"] : null), 'form_start');
        echo "
 ";
        // line 359
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarEVES"]) ? $context["editarEVES"] : null), 'errors');
        echo " 
 
  <div class='form-group'>
  \t\t\t ";
        // line 362
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarEVES"]) ? $context["editarEVES"] : null), "evesPeriodo", array()), 'label');
        echo "
  \t\t\t <div ";
        // line 363
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
    \t\t \t";
        // line 364
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarEVES"]) ? $context["editarEVES"] : null), "evesPeriodo", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
    \t\t </div>
    </div>
     


 <div class='form-group'>
 \t";
        // line 371
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarEVES"]) ? $context["editarEVES"] : null), "evesDetalle", array()), 'label');
        echo "
 \t<div ";
        // line 372
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 373
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarEVES"]) ? $context["editarEVES"] : null), "evesDetalle", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  <div class='form-group'>
 \t";
        // line 378
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarEVES"]) ? $context["editarEVES"] : null), "evesLink", array()), 'label');
        echo "
 \t<div ";
        // line 379
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 380
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarEVES"]) ? $context["editarEVES"] : null), "evesLink", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
 
  ";
        // line 385
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarEVES"]) ? $context["editarEVES"] : null), "evesId", array()), 'widget');
        echo "
  ";
        // line 386
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarEVES"]) ? $context["editarEVES"] : null), "evesEditar", array()), 'widget');
        // line 390
        $this->displayBlock('submit_widget_eves', $context, $blocks);
        // line 409
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarEVES"]) ? $context["editarEVES"] : null), 'form_end');
        echo "
 </div>
 
 ";
        // line 413
        echo " 
 ";
        // line 414
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarPERI"]) ? $context["editarPERI"] : null), array(0 => $this));
        // line 415
        echo " 
  <div id=\"editarPeriDLG\" title=\"Período\">
 
 ";
        // line 418
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarPERI"]) ? $context["editarPERI"] : null), 'form_start');
        echo "
 ";
        // line 419
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarPERI"]) ? $context["editarPERI"] : null), 'errors');
        echo " 

 <div class='form-group'>
 \t";
        // line 422
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarPERI"]) ? $context["editarPERI"] : null), "periDetalle", array()), 'label');
        echo "
 \t<div ";
        // line 423
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 424
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarPERI"]) ? $context["editarPERI"] : null), "periDetalle", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  ";
        // line 428
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarPERI"]) ? $context["editarPERI"] : null), "periId", array()), 'widget');
        echo "
  ";
        // line 429
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarPERI"]) ? $context["editarPERI"] : null), "periEditar", array()), 'widget');
        // line 433
        $this->displayBlock('submit_widget_peri', $context, $blocks);
        // line 452
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarPERI"]) ? $context["editarPERI"] : null), 'form_end');
        echo "
 </div>
 
 
 ";
        // line 457
        echo " 
 ";
        // line 458
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarINDI"]) ? $context["editarINDI"] : null), array(0 => $this));
        // line 459
        echo " 
  <div id=\"editarIndiDLG\" title=\"Indicador\">
 
 ";
        // line 462
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarINDI"]) ? $context["editarINDI"] : null), 'form_start');
        echo "
 ";
        // line 463
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarINDI"]) ? $context["editarINDI"] : null), 'errors');
        echo " 
 
  <div class='form-group'>
  \t\t\t ";
        // line 466
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiAnio", array()), 'label');
        echo "
  \t\t\t <div ";
        // line 467
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
    \t\t \t";
        // line 468
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiAnio", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
    \t\t </div>
    </div>
     
     <div class='form-group'>
     \t\t";
        // line 473
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiCapitulo", array()), 'label');
        echo "
     \t\t<div ";
        // line 474
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\">
     \t\t\t";
        // line 475
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiCapitulo", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
     \t\t</div>     
     </div>
 

 <div class='form-group'>
 \t";
        // line 481
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiDetalle", array()), 'label');
        echo "
 \t<div ";
        // line 482
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 483
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiDetalle", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  <div class='form-group'>
 \t";
        // line 488
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiLink", array()), 'label');
        echo "
 \t<div ";
        // line 489
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 490
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiLink", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  <div class='form-group'>
 \t";
        // line 495
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiDescarga", array()), 'label');
        echo "
 \t<div ";
        // line 496
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 497
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiDescarga", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  ";
        // line 501
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiId", array()), 'widget');
        echo "
  ";
        // line 502
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarINDI"]) ? $context["editarINDI"] : null), "indiEditar", array()), 'widget');
        // line 506
        $this->displayBlock('submit_widget_indi', $context, $blocks);
        // line 525
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarINDI"]) ? $context["editarINDI"] : null), 'form_end');
        echo "
 </div>
 
 
 ";
        // line 530
        echo " 
 ";
        // line 531
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarCI"]) ? $context["editarCI"] : null), array(0 => $this));
        // line 532
        echo " 
  <div id=\"editarCainDLG\" title=\"Capítulo Indicador\">
 
 ";
        // line 535
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarCI"]) ? $context["editarCI"] : null), 'form_start');
        echo "
 ";
        // line 536
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarCI"]) ? $context["editarCI"] : null), 'errors');
        echo " 

 <div class='form-group'>
 \t";
        // line 539
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarCI"]) ? $context["editarCI"] : null), "cainDetalle", array()), 'label');
        echo "
 \t<div ";
        // line 540
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 541
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarCI"]) ? $context["editarCI"] : null), "cainDetalle", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
  ";
        // line 545
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarCI"]) ? $context["editarCI"] : null), "cainId", array()), 'widget');
        echo "
  ";
        // line 546
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarCI"]) ? $context["editarCI"] : null), "cainEditar", array()), 'widget');
        // line 550
        $this->displayBlock('submit_widget_cain', $context, $blocks);
        // line 569
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarCI"]) ? $context["editarCI"] : null), 'form_end');
        echo "
 </div>
 
 
 ";
        // line 573
        echo " 
 ";
        // line 574
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarAres"]) ? $context["editarAres"] : null), array(0 => $this));
        // line 575
        echo " 


 <div id=\"editarAresDLG\" title=\"Archivos\">
 \t";
        // line 579
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarAres"]) ? $context["editarAres"] : null), 'form_start');
        echo "
 \t";
        // line 580
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarAres"]) ? $context["editarAres"] : null), 'errors');
        echo "
 \t
 \t<div class='form-group'>
 \t\t";
        // line 583
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresDetalle", array()), 'label');
        echo "
 \t\t<div ";
        // line 584
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t\t";
        // line 585
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresDetalle", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t\t</div>
 \t</div>
 \t
    <div class='form-group'>
  \t\t\t ";
        // line 590
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresAnio", array()), 'label');
        echo "
  \t\t\t <div ";
        // line 591
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-7\" >
    \t\t \t";
        // line 592
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresAnio", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
    \t\t </div>
    </div>
     
     <div class='form-group'>
     \t\t";
        // line 597
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresCapitulo", array()), 'label');
        echo "
     \t\t<div ";
        // line 598
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-7\">
     \t\t\t";
        // line 599
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresCapitulo", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
     \t\t</div>     
     </div>
     
     <div class='form-group'>
     \t\t";
        // line 604
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresTitulo", array()), 'label');
        echo "
     \t\t<div ";
        // line 605
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-7\" >
     \t\t";
        // line 606
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresTitulo", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
     \t\t</div>
     </div>
 
 \t <div class='form-group'>
     \t\t";
        // line 611
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresSubtitulo", array()), 'label');
        echo "
     \t\t<div ";
        // line 612
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-7\" >
     \t\t";
        // line 613
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresSubtitulo", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
     \t\t</div>
     </div>
     
    <div class='form-group'>
 \t\t";
        // line 618
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresLink", array()), 'label');
        echo "
 \t\t<div ";
        // line 619
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t\t";
        // line 620
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresLink", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t\t</div>
 \t</div>
 \t
 \t \t<div class='form-group'>
 \t\t";
        // line 625
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresDescarga", array()), 'label');
        echo "
 \t\t<div ";
        // line 626
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t\t";
        // line 627
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresDescarga", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t\t</div>
 \t</div>
 \t
 \t \t<div class='form-group'>
 \t\t";
        // line 632
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresDescripcion", array()), 'label');
        echo "
 \t\t<div ";
        // line 633
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t\t";
        // line 634
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresDescripcion", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t\t</div>
 \t</div>
 \t
 \t \t<div class='form-group'>
 \t\t";
        // line 639
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresComentario", array()), 'label');
        echo "
 \t\t<div ";
        // line 640
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t\t";
        // line 641
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresComentario", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t\t</div>
 \t</div>
   ";
        // line 644
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresId", array()), 'widget');
        echo "
   ";
        // line 645
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarAres"]) ? $context["editarAres"] : null), "aresEditar", array()), 'widget');
        // line 647
        $this->displayBlock('submit_widget_ares', $context, $blocks);
        // line 665
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarAres"]) ? $context["editarAres"] : null), 'form_end');
        echo "
 
 
 
 </div>
 
 

 
  ";
        // line 675
        echo " <div id=\"agregarAnioDLG\" title=\"Agregar Año\">
 \t";
        // line 676
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["agregarAnio"]) ? $context["agregarAnio"] : null), 'form_start');
        echo "
    ";
        // line 677
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["agregarAnio"]) ? $context["agregarAnio"] : null), 'errors');
        echo "

   
  <div class='form-group'>
  \t\t\t ";
        // line 681
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["agregarAnio"]) ? $context["agregarAnio"] : null), "anioId", array()), 'label');
        echo "
  \t\t\t <div ";
        // line 682
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-7\" >
    \t\t \t";
        // line 683
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["agregarAnio"]) ? $context["agregarAnio"] : null), "anioId", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
    \t\t </div>
  </div>

  <div class='form-group'>
  \t\t\t";
        // line 688
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["agregarAnio"]) ? $context["agregarAnio"] : null), "anioHabilitado", array()), 'label');
        echo "
  \t\t<div ";
        // line 689
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-7\">
\t\t\t\t";
        // line 690
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["agregarAnio"]) ? $context["agregarAnio"] : null), "anioHabilitado", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 691
            echo "  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
  \t\t\t\t";
            // line 692
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("name" => "inlineRadioOptions", "id" => ("inlineRadio" . $this->getAttribute($context["loop"], "index", array())))));
            echo "
  \t\t\t\t
  \t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 695
        echo "  \t\t</div>
  </div>


  <div class='form-group'>
\t<div ";
        // line 700
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-7\">
\t\t  ";
        // line 701
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["agregarAnio"]) ? $context["agregarAnio"] : null), "anioOpciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 702
            echo "\t\t     ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
\t\t\t ";
            // line 703
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
\t\t \t 
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 706
        echo "    </div>
  </div>";
        // line 710
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 728
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["agregarAnio"]) ? $context["agregarAnio"] : null), 'form_end');
        echo "
 </div>

 
 
  ";
        // line 735
        echo " 
 ";
        // line 736
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarCapitulo"]) ? $context["editarCapitulo"] : null), array(0 => $this));
        // line 737
        echo " 
 <div id=\"editarCapituloDLG\" title=\"Capítulos\">
 
 ";
        // line 740
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarCapitulo"]) ? $context["editarCapitulo"] : null), 'form_start');
        echo "
 ";
        // line 741
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarCapitulo"]) ? $context["editarCapitulo"] : null), 'errors');
        echo " 
 <div class='form-group'>
 \t";
        // line 743
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarCapitulo"]) ? $context["editarCapitulo"] : null), "capi_id", array()), 'label');
        echo "
 \t<div ";
        // line 744
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-3\" >
 \t";
        // line 745
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarCapitulo"]) ? $context["editarCapitulo"] : null), "capi_id", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
 <div class='form-group'>
 \t";
        // line 750
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarCapitulo"]) ? $context["editarCapitulo"] : null), "capi_detalle", array()), 'label');
        echo "
 \t<div ";
        // line 751
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-10\" >
 \t";
        // line 752
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarCapitulo"]) ? $context["editarCapitulo"] : null), "capi_detalle", array()), 'widget', array("attr" => array("class" => "form-control ")));
        echo "
 \t</div>
 </div>
 
 ";
        // line 756
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarCapitulo"]) ? $context["editarCapitulo"] : null), "capi_editar", array()), 'widget');
        // line 758
        $this->displayBlock('submit_widget_capit', $context, $blocks);
        // line 777
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarCapitulo"]) ? $context["editarCapitulo"] : null), 'form_end');
        echo "
 </div>
 
 
 ";
        // line 782
        echo " 
  ";
        // line 783
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), array(0 => $this));
        // line 784
        echo "  <div id=\"editarJurisdiccionDLG\" title=\"Jurisdicciónes\">
  
  \t";
        // line 786
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), 'form_start');
        echo "
  \t";
        // line 787
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), 'errors');
        echo "
  \t
  \t<div class='form-group'>
  \t\t";
        // line 790
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), "juriDetalle", array()), 'label');
        echo "
  \t\t<div ";
        // line 791
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-9\">
  \t\t\t";
        // line 792
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), "juriDetalle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
  \t\t</div>
  \t</div>
  \t
  \t
   <div class='form-group'>
  \t   ";
        // line 798
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), "juriCapitulo", array()), 'label');
        echo "
  \t   <div ";
        // line 799
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-9\" >
    \t\t ";
        // line 800
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), "juriCapitulo", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
       </div>
  </div>
  \t
  
  ";
        // line 805
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), "juriId", array()), 'widget');
        echo "
  ";
        // line 806
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), "juriEditar", array()), 'widget');
        // line 809
        $this->displayBlock('submit_widget_juris', $context, $blocks);
        // line 828
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarJurisdiccion"]) ? $context["editarJurisdiccion"] : null), 'form_end');
        echo "
  
  
  </div>
  
  
  
  
  ";
        // line 837
        echo "  
  ";
        // line 838
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), array(0 => $this));
        // line 839
        echo "  <div id=\"editarTituloDLG\" title=\"Títulos\">
  
  \t";
        // line 841
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), 'form_start');
        echo "
  \t";
        // line 842
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), 'errors');
        echo "
  \t
  \t<div class='form-group'>
  \t\t";
        // line 845
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), "titu_detalle", array()), 'label');
        echo "
  \t\t<div ";
        // line 846
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-9\">
  \t\t\t";
        // line 847
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), "titu_detalle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
  \t\t</div>
  \t</div>
  \t
     <div class='form-group'>
     \t\t";
        // line 852
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), "titu_capitulo", array()), 'label');
        echo "
     \t\t<div ";
        // line 853
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-9\">
     \t\t\t";
        // line 854
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), "titu_capitulo", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
     \t\t</div>     
     </div>
  \t
  \t  <div class='form-group'>
  \t\t\t";
        // line 859
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), "titu_habilitado", array()), 'label');
        echo "
  \t\t<div ";
        // line 860
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-9\">
\t\t\t\t";
        // line 861
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), "titu_habilitado", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 862
            echo "  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
  \t\t\t\t";
            // line 863
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("name" => "inlineRadioOptionsTitu", "id" => ("inlineRadioTitu" . $this->getAttribute($context["loop"], "index", array())))));
            echo "
  \t\t\t\t
  \t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 866
        echo "  \t\t</div>
  </div>
  \t

  ";
        // line 870
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), "titu_id", array()), 'widget');
        echo "
  ";
        // line 871
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), "titu_editar", array()), 'widget');
        // line 873
        $this->displayBlock('submit_widget_titu', $context, $blocks);
        // line 892
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarTitulo"]) ? $context["editarTitulo"] : null), 'form_end');
        echo "
  
  
  
  </div>
  
    
  
  

   ";
        // line 903
        echo "
 
  ";
        // line 905
        $this->env->getExtension('form')->renderer->setTheme((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), array(0 => $this));
        // line 906
        echo "  <div id=\"editarSubtituloDLG\" title=\"Subtítulos\">
  
  \t";
        // line 908
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), 'form_start');
        echo "
  \t";
        // line 909
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), 'errors');
        echo "
  \t
  \t<div class='form-group'>
  \t\t";
        // line 912
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), "subt_detalle", array()), 'label');
        echo "
  \t\t<div ";
        // line 913
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-9\">
  \t\t\t";
        // line 914
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), "subt_detalle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
  \t\t</div>
  \t</div>
  \t
  \t <div class='form-group'>
     \t\t";
        // line 919
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), "subt_titulo", array()), 'label');
        echo "
     \t\t<div ";
        // line 920
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-9\">
     \t\t\t";
        // line 921
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), "subt_titulo", array()), 'widget', array("attr" => array("class" => "form-control ui-selectmenu-button ui-widget ui-state-default ui-corner-all")));
        echo "
     \t\t</div>     
     </div>
  \t
  \t<div class='form-group'>
  \t\t\t";
        // line 926
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), "subt_habilitado", array()), 'label');
        echo "
  \t\t<div ";
        // line 927
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-sm-9\">
\t\t\t\t";
        // line 928
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), "subt_habilitado", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 929
            echo "  \t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
  \t\t\t\t";
            // line 930
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("name" => "inlineRadioOptionsSubt", "id" => ("inlineRadioSubt" . $this->getAttribute($context["loop"], "index", array())))));
            echo "
  \t\t\t\t
  \t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 933
        echo "  \t\t</div>
    </div>
  \t
  ";
        // line 936
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), "subt_id", array()), 'widget');
        echo "
  ";
        // line 937
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), "subt_editar", array()), 'widget');
        // line 940
        $this->displayBlock('submit_widget_subt', $context, $blocks);
        // line 959
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editarSubtitulo"]) ? $context["editarSubtitulo"] : null), 'form_end');
        echo "
  
  
  
  </div>
  
  

 ";
    }

    // line 271
    public function block_submit_widget_nove($context, array $blocks = array())
    {
        // line 272
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 275
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarNOVE btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarNove\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 328
    public function block_submit_widget_tres($context, array $blocks = array())
    {
        // line 329
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 332
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarTRES btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarTres\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 390
    public function block_submit_widget_eves($context, array $blocks = array())
    {
        // line 391
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 394
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarEVES btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarEves\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 433
    public function block_submit_widget_peri($context, array $blocks = array())
    {
        // line 434
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 437
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarPERI btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarPeri\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 506
    public function block_submit_widget_indi($context, array $blocks = array())
    {
        // line 507
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 510
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarINDI btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarIndi\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 550
    public function block_submit_widget_cain($context, array $blocks = array())
    {
        // line 551
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 554
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarCI btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarCain\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 647
    public function block_submit_widget_ares($context, array $blocks = array())
    {
        // line 648
        echo "<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 650
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarAres btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarAres\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 710
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 711
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 714
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 758
    public function block_submit_widget_capit($context, array $blocks = array())
    {
        // line 759
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 762
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarCapitulo btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarCapitulo\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 809
    public function block_submit_widget_juris($context, array $blocks = array())
    {
        // line 810
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 813
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarJuris btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarJuris\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 873
    public function block_submit_widget_titu($context, array $blocks = array())
    {
        // line 874
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 877
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarTitu btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarTitu\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 940
    public function block_submit_widget_subt($context, array $blocks = array())
    {
        // line 941
        echo "<br>
\t\t<div class=\"ui-dialog-buttonpane ui-widget-content ui-helper-clearfix\">
\t\t\t<div class=\"ui-dialog-buttonset\">
    \t\t\t<button type=\"";
        // line 944
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit")), "html", null, true);
        echo "\" class=\"editarSubt btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Confirmar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t<button id=\"eliminarSubt\" class=\"btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Eliminar</span>
 \t   \t\t\t</button>
 \t   \t\t\t
 \t   \t\t\t
 \t   \t\t\t<button class=\"cancelarBoton btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only\"  }}>
     \t  \t\t <span class=\"ui-button-text\">Cancelar</span>
 \t   \t\t\t</button>
 \t   \t\t</div>
 \t   \t</div>";
    }

    // line 975
    public function block_javascript($context, array $blocks = array())
    {
        // line 976
        echo "  <script type=\"text/javascript\">

  \$(function() {
\t\$(\"ui.tooltip\").siblings(\".tooltip\").remove();
\t\$( document ).tooltip();
\t});
\t\$( document ).ready(function() {
\t\tvar adminObject = new Admin();
\t\tadminObject.init();
\t\tadminObject.habilitacionAnio = \"";
        // line 985
        echo $this->env->getExtension('routing')->getPath("_habilitacionAnio");
        echo "\";
\t\tadminObject.getTabla = \"";
        // line 986
        echo $this->env->getExtension('routing')->getPath("_getTabla");
        echo "\";
\t\tadminObject.eliminarAnio = \"";
        // line 987
        echo $this->env->getExtension('routing')->getPath("_eliminarAnio");
        echo "\";
\t\tadminObject.eliminarCapitulo = \"";
        // line 988
        echo $this->env->getExtension('routing')->getPath("_eliminarCapitulo");
        echo "\";
\t\tadminObject.eliminarJuris = \"";
        // line 989
        echo $this->env->getExtension('routing')->getPath("_eliminarJuris");
        echo "\";
\t\tadminObject.eliminarTitu = \"";
        // line 990
        echo $this->env->getExtension('routing')->getPath("_eliminarTitu");
        echo "\";
\t\tadminObject.eliminarSubt = \"";
        // line 991
        echo $this->env->getExtension('routing')->getPath("_eliminarSubt");
        echo "\";
\t\tadminObject.eliminarAres = \"";
        // line 992
        echo $this->env->getExtension('routing')->getPath("_eliminarAres");
        echo "\";
\t\tadminObject.eliminarCain = \"";
        // line 993
        echo $this->env->getExtension('routing')->getPath("_eliminarCain");
        echo "\";
\t\tadminObject.eliminarIndi = \"";
        // line 994
        echo $this->env->getExtension('routing')->getPath("_eliminarIndi");
        echo "\";
\t\tadminObject.eliminarPeri = \"";
        // line 995
        echo $this->env->getExtension('routing')->getPath("_eliminarPeri");
        echo "\";
\t\tadminObject.eliminarEves = \"";
        // line 996
        echo $this->env->getExtension('routing')->getPath("_eliminarEves");
        echo "\";
\t\tadminObject.eliminarNove = \"";
        // line 997
        echo $this->env->getExtension('routing')->getPath("_eliminarNove");
        echo "\";
\t\tadminObject.eliminarTres = \"";
        // line 998
        echo $this->env->getExtension('routing')->getPath("_eliminarTres");
        echo "\";
\t\tadminObject.titulos = ";
        // line 999
        echo (isset($context["titulos"]) ? $context["titulos"] : null);
        echo ";
\t\tadminObject.subtitulos = ";
        // line 1000
        echo (isset($context["subtitulos"]) ? $context["subtitulos"] : null);
        echo ";
\t\tadminObject.anios = ";
        // line 1001
        echo (isset($context["anios"]) ? $context["anios"] : null);
        echo ";


\t\t
\t});
  </script>
  
";
    }

    public function getTemplateName()
    {
        return "abmBundle:admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1925 => 1001,  1921 => 1000,  1917 => 999,  1913 => 998,  1909 => 997,  1905 => 996,  1901 => 995,  1897 => 994,  1893 => 993,  1889 => 992,  1885 => 991,  1881 => 990,  1877 => 989,  1873 => 988,  1869 => 987,  1865 => 986,  1861 => 985,  1850 => 976,  1847 => 975,  1829 => 944,  1824 => 941,  1821 => 940,  1803 => 877,  1798 => 874,  1795 => 873,  1777 => 813,  1772 => 810,  1769 => 809,  1751 => 762,  1746 => 759,  1743 => 758,  1731 => 714,  1726 => 711,  1723 => 710,  1705 => 650,  1701 => 648,  1698 => 647,  1680 => 554,  1675 => 551,  1672 => 550,  1654 => 510,  1649 => 507,  1646 => 506,  1628 => 437,  1623 => 434,  1620 => 433,  1602 => 394,  1597 => 391,  1594 => 390,  1576 => 332,  1571 => 329,  1568 => 328,  1550 => 275,  1545 => 272,  1542 => 271,  1529 => 959,  1527 => 940,  1525 => 937,  1521 => 936,  1516 => 933,  1499 => 930,  1494 => 929,  1477 => 928,  1473 => 927,  1469 => 926,  1461 => 921,  1457 => 920,  1453 => 919,  1445 => 914,  1441 => 913,  1437 => 912,  1431 => 909,  1427 => 908,  1423 => 906,  1421 => 905,  1417 => 903,  1404 => 892,  1402 => 873,  1400 => 871,  1396 => 870,  1390 => 866,  1373 => 863,  1368 => 862,  1351 => 861,  1347 => 860,  1343 => 859,  1335 => 854,  1331 => 853,  1327 => 852,  1319 => 847,  1315 => 846,  1311 => 845,  1305 => 842,  1301 => 841,  1297 => 839,  1295 => 838,  1292 => 837,  1281 => 828,  1279 => 809,  1277 => 806,  1273 => 805,  1265 => 800,  1261 => 799,  1257 => 798,  1248 => 792,  1244 => 791,  1240 => 790,  1234 => 787,  1230 => 786,  1226 => 784,  1224 => 783,  1221 => 782,  1214 => 777,  1212 => 758,  1210 => 756,  1203 => 752,  1199 => 751,  1195 => 750,  1187 => 745,  1183 => 744,  1179 => 743,  1174 => 741,  1170 => 740,  1165 => 737,  1163 => 736,  1160 => 735,  1152 => 728,  1150 => 710,  1147 => 706,  1138 => 703,  1133 => 702,  1129 => 701,  1125 => 700,  1118 => 695,  1101 => 692,  1096 => 691,  1079 => 690,  1075 => 689,  1071 => 688,  1063 => 683,  1059 => 682,  1055 => 681,  1048 => 677,  1044 => 676,  1041 => 675,  1029 => 665,  1027 => 647,  1025 => 645,  1021 => 644,  1015 => 641,  1011 => 640,  1007 => 639,  999 => 634,  995 => 633,  991 => 632,  983 => 627,  979 => 626,  975 => 625,  967 => 620,  963 => 619,  959 => 618,  951 => 613,  947 => 612,  943 => 611,  935 => 606,  931 => 605,  927 => 604,  919 => 599,  915 => 598,  911 => 597,  903 => 592,  899 => 591,  895 => 590,  887 => 585,  883 => 584,  879 => 583,  873 => 580,  869 => 579,  863 => 575,  861 => 574,  858 => 573,  851 => 569,  849 => 550,  847 => 546,  843 => 545,  836 => 541,  832 => 540,  828 => 539,  822 => 536,  818 => 535,  813 => 532,  811 => 531,  808 => 530,  801 => 525,  799 => 506,  797 => 502,  793 => 501,  786 => 497,  782 => 496,  778 => 495,  770 => 490,  766 => 489,  762 => 488,  754 => 483,  750 => 482,  746 => 481,  737 => 475,  733 => 474,  729 => 473,  721 => 468,  717 => 467,  713 => 466,  707 => 463,  703 => 462,  698 => 459,  696 => 458,  693 => 457,  686 => 452,  684 => 433,  682 => 429,  678 => 428,  671 => 424,  667 => 423,  663 => 422,  657 => 419,  653 => 418,  648 => 415,  646 => 414,  643 => 413,  637 => 409,  635 => 390,  633 => 386,  629 => 385,  621 => 380,  617 => 379,  613 => 378,  605 => 373,  601 => 372,  597 => 371,  587 => 364,  583 => 363,  579 => 362,  573 => 359,  569 => 358,  564 => 355,  562 => 354,  559 => 353,  551 => 347,  549 => 328,  547 => 324,  543 => 323,  536 => 319,  532 => 318,  528 => 317,  520 => 312,  516 => 311,  512 => 310,  504 => 305,  500 => 304,  496 => 303,  490 => 300,  486 => 299,  481 => 296,  479 => 295,  476 => 294,  470 => 290,  468 => 271,  466 => 267,  462 => 266,  455 => 262,  451 => 261,  447 => 260,  439 => 255,  435 => 254,  431 => 253,  423 => 248,  419 => 247,  415 => 246,  409 => 243,  405 => 242,  400 => 239,  398 => 238,  395 => 237,  392 => 235,  389 => 234,  384 => 968,  382 => 234,  377 => 231,  360 => 215,  211 => 67,  209 => 66,  207 => 64,  186 => 44,  176 => 36,  171 => 35,  137 => 31,  133 => 24,  128 => 23,  125 => 22,  120 => 19,  64 => 17,  60 => 5,  55 => 4,  52 => 3,  11 => 1,);
    }
}
