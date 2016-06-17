<?php

/* default/showProducts.html.twig */
class __TwigTemplate_4968041c6cd8e7797e0fab1acaccb162cf2e2e71532a31fb388ef4d59a96f966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/showProducts.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00336b01ecc61e64e65a6f4c0edceb3432a8a016311207835db48bef0706e77b = $this->env->getExtension("native_profiler");
        $__internal_00336b01ecc61e64e65a6f4c0edceb3432a8a016311207835db48bef0706e77b->enter($__internal_00336b01ecc61e64e65a6f4c0edceb3432a8a016311207835db48bef0706e77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/showProducts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00336b01ecc61e64e65a6f4c0edceb3432a8a016311207835db48bef0706e77b->leave($__internal_00336b01ecc61e64e65a6f4c0edceb3432a8a016311207835db48bef0706e77b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3c5b9bbb430b11489f4cce48585c421945f2a1929f3fa1d010638917ee0daed = $this->env->getExtension("native_profiler");
        $__internal_b3c5b9bbb430b11489f4cce48585c421945f2a1929f3fa1d010638917ee0daed->enter($__internal_b3c5b9bbb430b11489f4cce48585c421945f2a1929f3fa1d010638917ee0daed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Products ";
        
        $__internal_b3c5b9bbb430b11489f4cce48585c421945f2a1929f3fa1d010638917ee0daed->leave($__internal_b3c5b9bbb430b11489f4cce48585c421945f2a1929f3fa1d010638917ee0daed_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4969c395c88ddab6a69bdcef7c9438e3986a09a1997ef087bdf3f12d261d2c77 = $this->env->getExtension("native_profiler");
        $__internal_4969c395c88ddab6a69bdcef7c9438e3986a09a1997ef087bdf3f12d261d2c77->enter($__internal_4969c395c88ddab6a69bdcef7c9438e3986a09a1997ef087bdf3f12d261d2c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Custom styling plus plugins -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_4969c395c88ddab6a69bdcef7c9438e3986a09a1997ef087bdf3f12d261d2c77->leave($__internal_4969c395c88ddab6a69bdcef7c9438e3986a09a1997ef087bdf3f12d261d2c77_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_d67a4cee53c352cb8913338039325eb2d7f7fef17423ea5eca2bd073ac91f81b = $this->env->getExtension("native_profiler");
        $__internal_d67a4cee53c352cb8913338039325eb2d7f7fef17423ea5eca2bd073ac91f81b->enter($__internal_d67a4cee53c352cb8913338039325eb2d7f7fef17423ea5eca2bd073ac91f81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    <div class=\"container body\">
      <div class=\"main_container\">
       
   ";
        // line 26
        $this->loadTemplate("menu.html.twig", "default/showProducts.html.twig", 26)->display($context);
        // line 27
        echo "           

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">

          <div class=\"\">
            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3> Media Gallery <small> gallery design</small> </h3>
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
              <div class=\"col-md-12\">
                <div class=\"x_panel\">
                  <div class=\"x_title\">
                    <h2>Media Gallery <small> gallery design </small></h2>
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

                    <div class=\"row\">

                      <p>Media gallery design emelents</p>
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 79
            echo "                      <div class=\"col-md-55\">
                        <div class=\"thumbnail\">
                          <div class=\"image view view-first\">
                            <img style=\"width: 100%; display: block;\" src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset($context["product"], "imageFile"), "html", null, true);
            echo "\" alt=\"image\" />
                            <div class=\"mask\">
                              <p>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</p>
                              <div class=\"tools tools-bottom\">
                                <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateProduct", array("productId" => $this->getAttribute($context["product"], "idProduit", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-link\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-times\"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class=\"caption\">
                            <p>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</p>
                          </div>
                        </div>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                    
                      <div class=\"col-md-55\">
                        <div class=\"thumbnail\">
                          <div class=\"image view view-first\">
                            <img style=\"width: 100%; display: block;\" src=\"images/4.jpg\" alt=\"image\" />
                            <div class=\"mask no-caption\">
                              <div class=\"tools tools-bottom\">
                                <a href=\"#\"><i class=\"fa fa-link\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-times\"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class=\"caption\">
                            <p><strong>Image Name</strong>
                            </p>
                            <p>Snow and Ice Incoming</p>
                          </div>
                        </div>
                      </div>
                    </div>
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
    ";
        
        $__internal_d67a4cee53c352cb8913338039325eb2d7f7fef17423ea5eca2bd073ac91f81b->leave($__internal_d67a4cee53c352cb8913338039325eb2d7f7fef17423ea5eca2bd073ac91f81b_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e32c2185877ef43a1be2cec82e207a4ebb474cebefa2c76f2bf609416781e8c = $this->env->getExtension("native_profiler");
        $__internal_5e32c2185877ef43a1be2cec82e207a4ebb474cebefa2c76f2bf609416781e8c->enter($__internal_5e32c2185877ef43a1be2cec82e207a4ebb474cebefa2c76f2bf609416781e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_5e32c2185877ef43a1be2cec82e207a4ebb474cebefa2c76f2bf609416781e8c->leave($__internal_5e32c2185877ef43a1be2cec82e207a4ebb474cebefa2c76f2bf609416781e8c_prof);

    }

    public function getTemplateName()
    {
        return "default/showProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 149,  262 => 146,  257 => 144,  252 => 142,  247 => 140,  244 => 139,  238 => 138,  192 => 98,  181 => 93,  171 => 86,  166 => 84,  161 => 82,  156 => 79,  152 => 78,  99 => 27,  97 => 26,  92 => 23,  86 => 22,  77 => 19,  71 => 16,  66 => 14,  55 => 5,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}   */
/* */
/* {% block title %}Products {% endblock %}*/
/* {% block stylesheets %}*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>Gentallela Alela! | </title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     */
/*     <!-- Custom styling plus plugins -->*/
/*     <link href="{{asset('css/custom.css')}}" rel="stylesheet">*/
/*   {% endblock %} */
/* */
/*   {% block body %}*/
/*     <div class="container body">*/
/*       <div class="main_container">*/
/*        */
/*    {% include 'menu.html.twig' %}*/
/*            */
/* */
/*         <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/* */
/*           <div class="">*/
/*             <div class="page-title">*/
/*               <div class="title_left">*/
/*                 <h3> Media Gallery <small> gallery design</small> </h3>*/
/*               </div>*/
/* */
/*               <div class="title_right">*/
/*                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*                   <div class="input-group">*/
/*                     <input type="text" class="form-control" placeholder="Search for...">*/
/*                     <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button">Go!</button>*/
/*                     </span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/* */
/*             <div class="row">*/
/*               <div class="col-md-12">*/
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Media Gallery <small> gallery design </small></h2>*/
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
/* */
/*                     <div class="row">*/
/* */
/*                       <p>Media gallery design emelents</p>*/
/*                         {% for product in products %}*/
/*                       <div class="col-md-55">*/
/*                         <div class="thumbnail">*/
/*                           <div class="image view view-first">*/
/*                             <img style="width: 100%; display: block;" src="{{ vich_uploader_asset(product,'imageFile')}}" alt="image" />*/
/*                             <div class="mask">*/
/*                               <p>{{product.name}}</p>*/
/*                               <div class="tools tools-bottom">*/
/*                                 <a href="{{path('updateProduct',{'productId':product.idProduit})}}"><i class="fa fa-link"></i></a>*/
/*                                 <a href="#"><i class="fa fa-pencil"></i></a>*/
/*                                 <a href="#"><i class="fa fa-times"></i></a>*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                           <div class="caption">*/
/*                             <p>{{product.price}}</p>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                     */
/*                       <div class="col-md-55">*/
/*                         <div class="thumbnail">*/
/*                           <div class="image view view-first">*/
/*                             <img style="width: 100%; display: block;" src="images/4.jpg" alt="image" />*/
/*                             <div class="mask no-caption">*/
/*                               <div class="tools tools-bottom">*/
/*                                 <a href="#"><i class="fa fa-link"></i></a>*/
/*                                 <a href="#"><i class="fa fa-pencil"></i></a>*/
/*                                 <a href="#"><i class="fa fa-times"></i></a>*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                           <div class="caption">*/
/*                             <p><strong>Image Name</strong>*/
/*                             </p>*/
/*                             <p>Snow and Ice Incoming</p>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
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
/*     {% endblock %}*/
/* {% block javascripts %}*/
/*     <!-- jQuery -->*/
/*     <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>*/
/*     <!-- Bootstrap -->*/
/*     <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>*/
/*     <!-- NProgress -->*/
/*     <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>*/
/* */
/*     <!-- Custom Theme Scripts -->*/
/*     <script src="{{asset('js/custom.js')}}"></script>*/
/*   {% endblock %}*/
