<?php

/* default/ClientView.html.twig */
class __TwigTemplate_31c402124e1252bb03d0cbe86f42e318ffbc99777da9e11424bb2e7d3859e410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/ClientView.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f17ece4d9d36a88cb993157b06f38cb1698cfd35c1c5efaa667d7a819e7ba28 = $this->env->getExtension("native_profiler");
        $__internal_3f17ece4d9d36a88cb993157b06f38cb1698cfd35c1c5efaa667d7a819e7ba28->enter($__internal_3f17ece4d9d36a88cb993157b06f38cb1698cfd35c1c5efaa667d7a819e7ba28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/ClientView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f17ece4d9d36a88cb993157b06f38cb1698cfd35c1c5efaa667d7a819e7ba28->leave($__internal_3f17ece4d9d36a88cb993157b06f38cb1698cfd35c1c5efaa667d7a819e7ba28_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2424266338ae83370b7f9422e8d63e9185c48edcc9cbad5fdf4c7835b1d72c48 = $this->env->getExtension("native_profiler");
        $__internal_2424266338ae83370b7f9422e8d63e9185c48edcc9cbad5fdf4c7835b1d72c48->enter($__internal_2424266338ae83370b7f9422e8d63e9185c48edcc9cbad5fdf4c7835b1d72c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>DataTables | Gentallela</title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_2424266338ae83370b7f9422e8d63e9185c48edcc9cbad5fdf4c7835b1d72c48->leave($__internal_2424266338ae83370b7f9422e8d63e9185c48edcc9cbad5fdf4c7835b1d72c48_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e3fcbdad5c04f8029c0b28d1ecf7c2de95ef81d0d1e98570ccd398b6dcef754 = $this->env->getExtension("native_profiler");
        $__internal_4e3fcbdad5c04f8029c0b28d1ecf7c2de95ef81d0d1e98570ccd398b6dcef754->enter($__internal_4e3fcbdad5c04f8029c0b28d1ecf7c2de95ef81d0d1e98570ccd398b6dcef754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"container body\">
      <div class=\"main_container\">
        <!-- top navigation and sidebar -->
           ";
        // line 31
        $this->loadTemplate("menu.html.twig", "default/ClientView.html.twig", 31)->display($context);
        // line 32
        echo "        

        
        
        <!-- /top navigation and sidebar -->

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>
                      Users
                      <small>
                          Some examples to get you started
                      </small>
                  </h3>
              </div>

              <div class=\"title_right\">
                <div class=\"col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                    <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"clearfix\"></div>

            <div class=\"row\">

              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Liste des Clients <small></small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"#\">Settings 1</a>
                          </li>
                          <li><a href=\"#\">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    
                    \t<form method =\"POST\" action=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("removeClient");
        echo "\">
                    <table id=\"datatable\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>IdClient</th>
                          <th>Nom</th>
                          <th>Prenom</th>
                          <th>Sexe</th>
                          <th>Age</th>
                          <th>Longueur</th>
                           <th>Largeur</th>
                            <th>Hauteur</th>
                            <th>numTel</th>
                        </tr>
                      </thead>


                      <tbody>

                      \t ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 109
            echo "\t\t\t\t\t\t
  \t\t\t\t\t\t<tr>

                          <td> <input type=\"checkbox\" name=\"clientsIdList[]\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "idClient", array()), "html", null, true);
            echo "\"></td>
                          <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "prenom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "sexe", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "age", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "longueur", array()), "html", null, true);
            echo "</td>
                              <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "largeur", array()), "html", null, true);
            echo "</td>
                                  <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "hauteur", array()), "html", null, true);
            echo "</td>    
                                      <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "numTel", array()), "html", null, true);
            echo "</td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo " 
                      
                        
                      </tbody>

                    </table>
                    <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"1\" >Add new</button>
                    <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"2\" >Remove</button>
                    <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"3\" >Update</button>

                  </form>
                  </div>
                </div>
              </div>
<div class=\"row\">

              <div class=\"col-md-12 col-sm-12 col-xs-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Liste des Fournisseurs <small></small></h2>
                    <ul class=\"nav navbar-right panel_toolbox\">
                      <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                      </li>
                      <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                          <li><a href=\"#\">Settings 1</a>
                          </li>
                          <li><a href=\"#\">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                      </li>
                    </ul>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"x_content\">
                    
                      <form method =\"POST\" action=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("GestionFournisseur");
        echo "\">
                    <table id=\"datatable\" class=\"table table-striped table-bordered\">
                      <thead>
                        <tr>
                          <th>IdClient</th>
                          <th>Nom</th>
                          <th>Prenom</th>
                          <th>Adresse </th>
                            <th>numTel</th>
                        </tr>
                      </thead>


                      <tbody>

                         ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseurs"]) ? $context["fournisseurs"] : $this->getContext($context, "fournisseurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 177
            echo "            
              <tr>

                          <td> <input type=\"checkbox\" name=\"fournisseurforIdList[]\" value=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "idFournisseur", array()), "html", null, true);
            echo "\"></td>
                          <td>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "nom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "prenom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "adresse", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "numTel", array()), "html", null, true);
            echo "</td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo " 
                      
                        
                      </tbody>

                    </table>
                    <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"1\" >Add new</button>
                    <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"2\" >Remove</button>
                    <button class=\"btn btn-default btn-lg\" name=\"submitbtn\" value=\"3\" >Update</button>

                  </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Datatables -->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/datatables.net-scroller/js/datatables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatables -->
    <script>
      \$(document).ready(function() {
        var handleDataTableButtons = function() {
          if (\$(\"#datatable-buttons\").length) {
            \$(\"#datatable-buttons\").DataTable({
              dom: \"Bfrtip\",
              buttons: [
                {
                  extend: \"copy\",
                  className: \"btn-sm\"
                },
                {
                  extend: \"csv\",
                  className: \"btn-sm\"
                },
                {
                  extend: \"excel\",
                  className: \"btn-sm\"
                },
                {
                  extend: \"pdfHtml5\",
                  className: \"btn-sm\"
                },
                {
                  extend: \"print\",
                  className: \"btn-sm\"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          \"use strict\";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        \$('#datatable').dataTable();
        \$('#datatable-keytable').DataTable({
          keys: true
        });

        \$('#datatable-responsive').DataTable();

        \$('#datatable-scroller').DataTable({
          ajax: \"js/datatables/json/scroller-demo.json\",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = \$('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  
  ";
        
        $__internal_4e3fcbdad5c04f8029c0b28d1ecf7c2de95ef81d0d1e98570ccd398b6dcef754->leave($__internal_4e3fcbdad5c04f8029c0b28d1ecf7c2de95ef81d0d1e98570ccd398b6dcef754_prof);

    }

    public function getTemplateName()
    {
        return "default/ClientView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 243,  445 => 240,  441 => 239,  437 => 238,  433 => 237,  429 => 236,  425 => 235,  421 => 234,  417 => 233,  413 => 232,  409 => 231,  405 => 230,  401 => 229,  397 => 228,  393 => 227,  389 => 226,  384 => 224,  379 => 222,  374 => 220,  369 => 218,  335 => 186,  326 => 184,  322 => 183,  318 => 182,  314 => 181,  310 => 180,  305 => 177,  301 => 176,  283 => 161,  242 => 122,  233 => 120,  229 => 119,  225 => 118,  221 => 117,  217 => 116,  213 => 115,  209 => 114,  205 => 113,  201 => 112,  196 => 109,  192 => 108,  170 => 89,  111 => 32,  109 => 31,  104 => 28,  98 => 27,  89 => 25,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  62 => 16,  57 => 14,  52 => 12,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>DataTables | Gentallela</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <!-- iCheck -->*/
/*     <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">*/
/*     <!-- Datatables -->*/
/*     <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">*/
/*     <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Theme Style -->*/
/*     <link href="{{asset('css/custom.css')}}" rel="stylesheet">*/
/*   {% endblock %}*/
/*   {% block body  %}*/
/*     <div class="container body">*/
/*       <div class="main_container">*/
/*         <!-- top navigation and sidebar -->*/
/*            {% include 'menu.html.twig' %}*/
/*         */
/* */
/*         */
/*         */
/*         <!-- /top navigation and sidebar -->*/
/* */
/*         <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/*           <div class="">*/
/*             <div class="page-title">*/
/*               <div class="title_left">*/
/*                 <h3>*/
/*                       Users*/
/*                       <small>*/
/*                           Some examples to get you started*/
/*                       </small>*/
/*                   </h3>*/
/*               </div>*/
/* */
/*               <div class="title_right">*/
/*                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*                   <div class="input-group">*/
/*                     <input type="text" class="form-control" placeholder="Search for...">*/
/*                     <span class="input-group-btn">*/
/*                               <button class="btn btn-default" type="button">Go!</button>*/
/*                           </span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/* */
/*             <div class="row">*/
/* */
/*               <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Liste des Clients <small></small></h2>*/
/*                     <ul class="nav navbar-right panel_toolbox">*/
/*                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                       </li>*/
/*                       <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                         <ul class="dropdown-menu" role="menu">*/
/*                           <li><a href="#">Settings 1</a>*/
/*                           </li>*/
/*                           <li><a href="#">Settings 2</a>*/
/*                           </li>*/
/*                         </ul>*/
/*                       </li>*/
/*                       <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                       </li>*/
/*                     </ul>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/*                   <div class="x_content">*/
/*                     */
/*                     	<form method ="POST" action="{{path('removeClient')}}">*/
/*                     <table id="datatable" class="table table-striped table-bordered">*/
/*                       <thead>*/
/*                         <tr>*/
/*                           <th>IdClient</th>*/
/*                           <th>Nom</th>*/
/*                           <th>Prenom</th>*/
/*                           <th>Sexe</th>*/
/*                           <th>Age</th>*/
/*                           <th>Longueur</th>*/
/*                            <th>Largeur</th>*/
/*                             <th>Hauteur</th>*/
/*                             <th>numTel</th>*/
/*                         </tr>*/
/*                       </thead>*/
/* */
/* */
/*                       <tbody>*/
/* */
/*                       	 {% for client in clients %}*/
/* 						*/
/*   						<tr>*/
/* */
/*                           <td> <input type="checkbox" name="clientsIdList[]" value="{{client.idClient}}"></td>*/
/*                           <td>{{client.nom}}</td>*/
/*                           <td>{{client.prenom}}</td>*/
/*                           <td>{{client.sexe}}</td>*/
/*                           <td>{{client.age}}</td>*/
/*                           <td>{{client.longueur}}</td>*/
/*                               <td>{{client.largeur}}</td>*/
/*                                   <td>{{client.hauteur}}</td>    */
/*                                       <td>{{client.numTel}}</td>*/
/*                         </tr>*/
/*                       {% endfor %} */
/*                       */
/*                         */
/*                       </tbody>*/
/* */
/*                     </table>*/
/*                     <button class="btn btn-default btn-lg" name="submitbtn" value="1" >Add new</button>*/
/*                     <button class="btn btn-default btn-lg" name="submitbtn" value="2" >Remove</button>*/
/*                     <button class="btn btn-default btn-lg" name="submitbtn" value="3" >Update</button>*/
/* */
/*                   </form>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* <div class="row">*/
/* */
/*               <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Liste des Fournisseurs <small></small></h2>*/
/*                     <ul class="nav navbar-right panel_toolbox">*/
/*                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                       </li>*/
/*                       <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                         <ul class="dropdown-menu" role="menu">*/
/*                           <li><a href="#">Settings 1</a>*/
/*                           </li>*/
/*                           <li><a href="#">Settings 2</a>*/
/*                           </li>*/
/*                         </ul>*/
/*                       </li>*/
/*                       <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                       </li>*/
/*                     </ul>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/*                   <div class="x_content">*/
/*                     */
/*                       <form method ="POST" action="{{path('GestionFournisseur')}}">*/
/*                     <table id="datatable" class="table table-striped table-bordered">*/
/*                       <thead>*/
/*                         <tr>*/
/*                           <th>IdClient</th>*/
/*                           <th>Nom</th>*/
/*                           <th>Prenom</th>*/
/*                           <th>Adresse </th>*/
/*                             <th>numTel</th>*/
/*                         </tr>*/
/*                       </thead>*/
/* */
/* */
/*                       <tbody>*/
/* */
/*                          {% for fournisseur in fournisseurs %}*/
/*             */
/*               <tr>*/
/* */
/*                           <td> <input type="checkbox" name="fournisseurforIdList[]" value="{{fournisseur.idFournisseur}}"></td>*/
/*                           <td>{{fournisseur.nom}}</td>*/
/*                           <td>{{fournisseur.prenom}}</td>*/
/*                           <td>{{fournisseur.adresse}}</td>*/
/*                           <td>{{fournisseur.numTel}}</td>*/
/*                         </tr>*/
/*                       {% endfor %} */
/*                       */
/*                         */
/*                       </tbody>*/
/* */
/*                     </table>*/
/*                     <button class="btn btn-default btn-lg" name="submitbtn" value="1" >Add new</button>*/
/*                     <button class="btn btn-default btn-lg" name="submitbtn" value="2" >Remove</button>*/
/*                     <button class="btn btn-default btn-lg" name="submitbtn" value="3" >Update</button>*/
/* */
/*                   </form>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*              */
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <!-- /page content -->*/
/* */
/*         <!-- footer content -->*/
/*         <footer>*/
/*           <div class="pull-right">*/
/*             Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>*/
/*           </div>*/
/*           <div class="clearfix"></div>*/
/*         </footer>*/
/*         <!-- /footer content -->*/
/*       </div>*/
/*     </div>*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>*/
/*     <!-- Bootstrap -->*/
/*     <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>*/
/*     <!-- NProgress -->*/
/*     <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>*/
/*     <!-- Datatables -->*/
/*     <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>*/
/*     <script src="{{asset('vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>*/
/* */
/*     <!-- Custom Theme Scripts -->*/
/*     <script src="{{asset('js/custom.js')}}"></script>*/
/* */
/*     <!-- Datatables -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         var handleDataTableButtons = function() {*/
/*           if ($("#datatable-buttons").length) {*/
/*             $("#datatable-buttons").DataTable({*/
/*               dom: "Bfrtip",*/
/*               buttons: [*/
/*                 {*/
/*                   extend: "copy",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*                 {*/
/*                   extend: "csv",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*                 {*/
/*                   extend: "excel",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*                 {*/
/*                   extend: "pdfHtml5",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*                 {*/
/*                   extend: "print",*/
/*                   className: "btn-sm"*/
/*                 },*/
/*               ],*/
/*               responsive: true*/
/*             });*/
/*           }*/
/*         };*/
/* */
/*         TableManageButtons = function() {*/
/*           "use strict";*/
/*           return {*/
/*             init: function() {*/
/*               handleDataTableButtons();*/
/*             }*/
/*           };*/
/*         }();*/
/* */
/*         $('#datatable').dataTable();*/
/*         $('#datatable-keytable').DataTable({*/
/*           keys: true*/
/*         });*/
/* */
/*         $('#datatable-responsive').DataTable();*/
/* */
/*         $('#datatable-scroller').DataTable({*/
/*           ajax: "js/datatables/json/scroller-demo.json",*/
/*           deferRender: true,*/
/*           scrollY: 380,*/
/*           scrollCollapse: true,*/
/*           scroller: true*/
/*         });*/
/* */
/*         var table = $('#datatable-fixed-header').DataTable({*/
/*           fixedHeader: true*/
/*         });*/
/* */
/*         TableManageButtons.init();*/
/*       });*/
/*     </script>*/
/*     <!-- /Datatables -->*/
/*   */
/*   {% endblock %}*/
/* */
