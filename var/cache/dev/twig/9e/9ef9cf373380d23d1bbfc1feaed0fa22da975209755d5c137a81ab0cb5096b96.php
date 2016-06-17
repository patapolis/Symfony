<?php

/* default/passerCommande.html.twig */
class __TwigTemplate_db0715cbc63b12ca12909ccbc32ed8197daf40ff9835c367453d86d98751685d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/passerCommande.html.twig", 2);
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
        $__internal_ad95abb19e3f8930c1a4181b9930e02b5aac6e27556ca93fe41c8f4c32bbee60 = $this->env->getExtension("native_profiler");
        $__internal_ad95abb19e3f8930c1a4181b9930e02b5aac6e27556ca93fe41c8f4c32bbee60->enter($__internal_ad95abb19e3f8930c1a4181b9930e02b5aac6e27556ca93fe41c8f4c32bbee60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/passerCommande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad95abb19e3f8930c1a4181b9930e02b5aac6e27556ca93fe41c8f4c32bbee60->leave($__internal_ad95abb19e3f8930c1a4181b9930e02b5aac6e27556ca93fe41c8f4c32bbee60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cdb63ff159efae856da26b9982e859871f4312a68452e828d0a4b23dc8ee1bd = $this->env->getExtension("native_profiler");
        $__internal_9cdb63ff159efae856da26b9982e859871f4312a68452e828d0a4b23dc8ee1bd->enter($__internal_9cdb63ff159efae856da26b9982e859871f4312a68452e828d0a4b23dc8ee1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add client ";
        
        $__internal_9cdb63ff159efae856da26b9982e859871f4312a68452e828d0a4b23dc8ee1bd->leave($__internal_9cdb63ff159efae856da26b9982e859871f4312a68452e828d0a4b23dc8ee1bd_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec449d1f580e2ff7dfc14b9e4d9d12d12bec136d56e64a561ad2c9b997960334 = $this->env->getExtension("native_profiler");
        $__internal_ec449d1f580e2ff7dfc14b9e4d9d12d12bec136d56e64a561ad2c9b997960334->enter($__internal_ec449d1f580e2ff7dfc14b9e4d9d12d12bec136d56e64a561ad2c9b997960334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    

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
    <!-- iCheck -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-wysiwyg -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/google-code-prettify/bin/prettify.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Select2 -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Switchery -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/switchery/dist/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- starrr -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/starrr/dist/starrr.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_ec449d1f580e2ff7dfc14b9e4d9d12d12bec136d56e64a561ad2c9b997960334->leave($__internal_ec449d1f580e2ff7dfc14b9e4d9d12d12bec136d56e64a561ad2c9b997960334_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_9baac33f9ff3b408e19631651d251d5b5e0fa904f549f56a833b62952cef206b = $this->env->getExtension("native_profiler");
        $__internal_9baac33f9ff3b408e19631651d251d5b5e0fa904f549f56a833b62952cef206b->enter($__internal_9baac33f9ff3b408e19631651d251d5b5e0fa904f549f56a833b62952cef206b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "
    <div class=\"container body\">
      <div class=\"main_container\">
          ";
        // line 36
        $this->loadTemplate("menu.html.twig", "default/passerCommande.html.twig", 36)->display($context);
        // line 37
        echo "        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
          <div class=\"\">

            <div class=\"page-title\">
              <div class=\"title_left\">
                <h3>Form Elements</h3>
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
                    <h2>Form Design <small>different form elements</small></h2>
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
                    <br />
                   ";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left")));
        echo "
                      <div class=\"col-md-4 col-sm-4 col-xs-12 profile_details\">
                        <div class=\"well profile_view\">
                          <div class=\"col-sm-12\">
                            <h4 class=\"brief\"><i>Digital Strategist</i></h4>
                            <div class=\"left col-xs-7\">
                              <h2>Nicole Pearson</h2>
                              <p><strong>About: </strong> Web Designer / UI. </p>
                              <ul class=\"list-unstyled\">
                                <li><i class=\"fa fa-building\"></i> Address: </li>
                                <li><i class=\"fa fa-phone\"></i> Phone #: </li>
                              </ul>
                            </div>
                            <div class=\"right col-xs-5 text-center\">
                              <img src=\"images/user.png\" alt=\"\" class=\"img-circle img-responsive\">
                            </div>
                          </div>
                          <div class=\"col-xs-12 bottom text-center\">
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <p class=\"ratings\">
                                <a>4.0</a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star\"></span></a>
                                <a href=\"#\"><span class=\"fa fa-star-o\"></span></a>
                              </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-6 emphasis\">
                              <button type=\"button\" class=\"btn btn-success btn-xs\"> <i class=\"fa fa-user\">
                                </i> <i class=\"fa fa-comments-o\"></i> </button>
                              <button type=\"button\" class=\"btn btn-primary btn-xs\">
                                <i class=\"fa fa-user\"> </i> View Profile
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br/>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\"  for=\"last-name\">Prix client <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixClient", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                        </div>
                      </div>
                       <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\"  for=\"last-name\">Prix théorique <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prixTheorique", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\"  for=\"last-name\"> Date livraison estimé: <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateLivraisonEsti", array()), 'widget');
        echo "
                        </div>
                      </div>
                    <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Type <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                        </div>
                          <button id=\"btn1\" type=\"button\" >addRows</button>
                     
                      <table class=\"table table-striped table-bordered\">
                          <thead>
                        <tr>
                          <th>produit</th>
                          <th>nombre</th>
                        </tr>
                      </thead>
                      <tbody id=\"ulProducts\" data-prototype=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commandeproduits", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
                         ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commandeproduits", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 159
            echo "                        <tr>
                          <td>";
            // line 160
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["produit"], "produit", array()), 'widget');
            echo "</td>
                          <td>";
            // line 161
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["produit"], "nmbProduit", array()), 'widget');
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                      </tbody>
                        ";
        // line 171
        echo "              </table>
                         
                     
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
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseurs"]) ? $context["fournisseurs"] : $this->getContext($context, "fournisseurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 189
            echo "            
              <tr>

                          <td> <input type=\"checkbox\" name=\"fournisseurforIdList[]\" value=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "idFournisseur", array()), "html", null, true);
            echo "\"></td>
                          <td>";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "nom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "prenom", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "adresse", array()), "html", null, true);
            echo "</td>
                          <td>";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "numTel", array()), "html", null, true);
            echo "</td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo " 
                      
                        
                      </tbody>

                    </table>
                  
               
                
                

                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                          <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>
       ";
        // line 216
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo " 
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
    ";
        
        $__internal_9baac33f9ff3b408e19631651d251d5b5e0fa904f549f56a833b62952cef206b->leave($__internal_9baac33f9ff3b408e19631651d251d5b5e0fa904f549f56a833b62952cef206b_prof);

    }

    // line 240
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd58bbe9fbe16d227e7b2aaad8d59d0a16b8c28955e46ab771947459af4c03de = $this->env->getExtension("native_profiler");
        $__internal_dd58bbe9fbe16d227e7b2aaad8d59d0a16b8c28955e46ab771947459af4c03de->enter($__internal_dd58bbe9fbe16d227e7b2aaad8d59d0a16b8c28955e46ab771947459af4c03de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 241
        echo " 
    <!-- jQuery -->
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.numeric.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Switchery -->
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Parsley -->
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Autosize -->
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <!-- starrr -->
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>


<script type=\"text/javascript\">

var \$collectionHolder;

// setup an \"add a tag\" link

var \$newLinkLi = \$('<tr><td></td></tr>');
\$(document).ready(function() {
 // Get the ul that holds the collection of tags
    \$collectionHolder = \$('#ulProducts');

    // add the \"add a tag\" anchor and li to the tags ul
    \$collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

    \$('#btn1').on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addTagForm(\$collectionHolder, \$newLinkLi);
    });
});

function addTagForm(\$collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<tr><td></td></tr>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
}



</script>
    <!-- bootstrap-daterangepicker -->
    <script>
      \$(document).ready(function() {
        \$('#birthday').daterangepicker({
          singleDatePicker: true,
          calender_style: \"picker_4\"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

<script>
  \$(\"#form_price\").numeric();
  \$(\".integer\").numeric(false, function() { alert(\"Integers only\"); this.value = \"\"; this.focus(); });
  \$(\".positive\").numeric({ negative: false }, function() { alert(\"No negative values\"); this.value = \"\"; this.focus(); });
  \$(\".positive-integer\").numeric({ decimal: false, negative: false }, function() { alert(\"Positive integers only\"); this.value = \"\"; this.focus(); });
    \$(\".decimal-2-places\").numeric({ decimalPlaces: 2 });
  \$(\"#remove\").click(
    function(e)
    {
      e.preventDefault();
      \$(\".numeric,.integer,.positive,.positive-integer,.decimal-2-places\").removeNumeric();
    }
  );
  </script>


    <!-- bootstrap-wysiwyg -->
    <script>

   
      \$(document).ready(function() {
        function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = \$('[title=Font]').siblings('.dropdown-menu');
          \$.each(fonts, function(idx, fontName) {
            fontTarget.append(\$('<li><a data-edit=\"fontName ' + fontName + '\" style=\"font-family:\\'' + fontName + '\\'\">' + fontName + '</a></li>'));
          });
          \$('a[title]').tooltip({
            container: 'body'
          });
          \$('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              \$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              \$(this).change();
            });

          \$('[data-role=magic-overlay]').each(function() {
            var overlay = \$(this),
              target = \$(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if (\"onwebkitspeechchange\" in document.createElement(\"input\")) {
            var editorOffset = \$('#editor').offset();

            \$('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + \$('#editor').innerWidth() - 35
            });
          } else {
            \$('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = \"Unsupported format \" + detail;
          } else {
            console.log(\"error uploading file\", reason, detail);
          }
          \$('<div class=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        \$('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
      });
    </script>
    <!-- /bootstrap-wysiwyg -->

    <!-- Select2 -->
    <script>
      \$(document).ready(function() {
        \$(\".select2_single\").select2({
          placeholder: \"Select a state\",
          allowClear: true
        });
        \$(\".select2_group\").select2({});
        \$(\".select2_multiple\").select2({
          maximumSelectionLength: 4,
          placeholder: \"With Max Selection limit 4\",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->

    <!-- jQuery Tags Input -->
    <script>
      function onAddTag(tag) {
        alert(\"Added a tag: \" + tag);
      }

      function onRemoveTag(tag) {
        alert(\"Removed a tag: \" + tag);
      }

      function onChangeTag(input, tag) {
        alert(\"Changed a tag: \" + tag);
      }

      \$(document).ready(function() {
        \$('#tags_1').tagsInput({
          width: 'auto'
        });
      });
    </script>
    <!-- /jQuery Tags Input -->

    <!-- Parsley -->
    <script>
      \$(document).ready(function() {
        \$.listen('parsley:field:validate', function() {
          validateFront();
        });
        \$('#demo-form .btn').on('click', function() {
          \$('#demo-form').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === \$('#demo-form').parsley().isValid()) {
            \$('.bs-callout-info').removeClass('hidden');
            \$('.bs-callout-warning').addClass('hidden');
          } else {
            \$('.bs-callout-info').addClass('hidden');
            \$('.bs-callout-warning').removeClass('hidden');
          }
        };
      });

      \$(document).ready(function() {
        \$.listen('parsley:field:validate', function() {
          validateFront();
        });
        \$('#demo-form2 .btn').on('click', function() {
          \$('#demo-form2').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === \$('#demo-form2').parsley().isValid()) {
            \$('.bs-callout-info').removeClass('hidden');
            \$('.bs-callout-warning').addClass('hidden');
          } else {
            \$('.bs-callout-info').addClass('hidden');
            \$('.bs-callout-warning').removeClass('hidden');
          }
        };
      });
      try {
        hljs.initHighlightingOnLoad();
      } catch (err) {}
    </script>
    <!-- /Parsley -->

    <!-- Autosize -->
    <script>
      \$(document).ready(function() {
        autosize(\$('.resizable_textarea'));
      });
    </script>
    <!-- /Autosize -->

    <!-- jQuery autocomplete -->
    <script>
      \$(document).ready(function() {
        var countries = { AD:\"Andorra\",A2:\"Andorra Test\",AE:\"United Arab Emirates\",AF:\"Afghanistan\",AG:\"Antigua and Barbuda\",AI:\"Anguilla\",AL:\"Albania\",AM:\"Armenia\",AN:\"Netherlands Antilles\",AO:\"Angola\",AQ:\"Antarctica\",AR:\"Argentina\",AS:\"American Samoa\",AT:\"Austria\",AU:\"Australia\",AW:\"Aruba\",AX:\"Åland Islands\",AZ:\"Azerbaijan\",BA:\"Bosnia and Herzegovina\",BB:\"Barbados\",BD:\"Bangladesh\",BE:\"Belgium\",BF:\"Burkina Faso\",BG:\"Bulgaria\",BH:\"Bahrain\",BI:\"Burundi\",BJ:\"Benin\",BL:\"Saint Barthélemy\",BM:\"Bermuda\",BN:\"Brunei\",BO:\"Bolivia\",BQ:\"British Antarctic Territory\",BR:\"Brazil\",BS:\"Bahamas\",BT:\"Bhutan\",BV:\"Bouvet Island\",BW:\"Botswana\",BY:\"Belarus\",BZ:\"Belize\",CA:\"Canada\",CC:\"Cocos [Keeling] Islands\",CD:\"Congo - Kinshasa\",CF:\"Central African Republic\",CG:\"Congo - Brazzaville\",CH:\"Switzerland\",CI:\"Côte d’Ivoire\",CK:\"Cook Islands\",CL:\"Chile\",CM:\"Cameroon\",CN:\"China\",CO:\"Colombia\",CR:\"Costa Rica\",CS:\"Serbia and Montenegro\",CT:\"Canton and Enderbury Islands\",CU:\"Cuba\",CV:\"Cape Verde\",CX:\"Christmas Island\",CY:\"Cyprus\",CZ:\"Czech Republic\",DD:\"East Germany\",DE:\"Germany\",DJ:\"Djibouti\",DK:\"Denmark\",DM:\"Dominica\",DO:\"Dominican Republic\",DZ:\"Algeria\",EC:\"Ecuador\",EE:\"Estonia\",EG:\"Egypt\",EH:\"Western Sahara\",ER:\"Eritrea\",ES:\"Spain\",ET:\"Ethiopia\",FI:\"Finland\",FJ:\"Fiji\",FK:\"Falkland Islands\",FM:\"Micronesia\",FO:\"Faroe Islands\",FQ:\"French Southern and Antarctic Territories\",FR:\"France\",FX:\"Metropolitan France\",GA:\"Gabon\",GB:\"United Kingdom\",GD:\"Grenada\",GE:\"Georgia\",GF:\"French Guiana\",GG:\"Guernsey\",GH:\"Ghana\",GI:\"Gibraltar\",GL:\"Greenland\",GM:\"Gambia\",GN:\"Guinea\",GP:\"Guadeloupe\",GQ:\"Equatorial Guinea\",GR:\"Greece\",GS:\"South Georgia and the South Sandwich Islands\",GT:\"Guatemala\",GU:\"Guam\",GW:\"Guinea-Bissau\",GY:\"Guyana\",HK:\"Hong Kong SAR China\",HM:\"Heard Island and McDonald Islands\",HN:\"Honduras\",HR:\"Croatia\",HT:\"Haiti\",HU:\"Hungary\",ID:\"Indonesia\",IE:\"Ireland\",IL:\"Israel\",IM:\"Isle of Man\",IN:\"India\",IO:\"British Indian Ocean Territory\",IQ:\"Iraq\",IR:\"Iran\",IS:\"Iceland\",IT:\"Italy\",JE:\"Jersey\",JM:\"Jamaica\",JO:\"Jordan\",JP:\"Japan\",JT:\"Johnston Island\",KE:\"Kenya\",KG:\"Kyrgyzstan\",KH:\"Cambodia\",KI:\"Kiribati\",KM:\"Comoros\",KN:\"Saint Kitts and Nevis\",KP:\"North Korea\",KR:\"South Korea\",KW:\"Kuwait\",KY:\"Cayman Islands\",KZ:\"Kazakhstan\",LA:\"Laos\",LB:\"Lebanon\",LC:\"Saint Lucia\",LI:\"Liechtenstein\",LK:\"Sri Lanka\",LR:\"Liberia\",LS:\"Lesotho\",LT:\"Lithuania\",LU:\"Luxembourg\",LV:\"Latvia\",LY:\"Libya\",MA:\"Morocco\",MC:\"Monaco\",MD:\"Moldova\",ME:\"Montenegro\",MF:\"Saint Martin\",MG:\"Madagascar\",MH:\"Marshall Islands\",MI:\"Midway Islands\",MK:\"Macedonia\",ML:\"Mali\",MM:\"Myanmar [Burma]\",MN:\"Mongolia\",MO:\"Macau SAR China\",MP:\"Northern Mariana Islands\",MQ:\"Martinique\",MR:\"Mauritania\",MS:\"Montserrat\",MT:\"Malta\",MU:\"Mauritius\",MV:\"Maldives\",MW:\"Malawi\",MX:\"Mexico\",MY:\"Malaysia\",MZ:\"Mozambique\",NA:\"Namibia\",NC:\"New Caledonia\",NE:\"Niger\",NF:\"Norfolk Island\",NG:\"Nigeria\",NI:\"Nicaragua\",NL:\"Netherlands\",NO:\"Norway\",NP:\"Nepal\",NQ:\"Dronning Maud Land\",NR:\"Nauru\",NT:\"Neutral Zone\",NU:\"Niue\",NZ:\"New Zealand\",OM:\"Oman\",PA:\"Panama\",PC:\"Pacific Islands Trust Territory\",PE:\"Peru\",PF:\"French Polynesia\",PG:\"Papua New Guinea\",PH:\"Philippines\",PK:\"Pakistan\",PL:\"Poland\",PM:\"Saint Pierre and Miquelon\",PN:\"Pitcairn Islands\",PR:\"Puerto Rico\",PS:\"Palestinian Territories\",PT:\"Portugal\",PU:\"U.S. Miscellaneous Pacific Islands\",PW:\"Palau\",PY:\"Paraguay\",PZ:\"Panama Canal Zone\",QA:\"Qatar\",RE:\"Réunion\",RO:\"Romania\",RS:\"Serbia\",RU:\"Russia\",RW:\"Rwanda\",SA:\"Saudi Arabia\",SB:\"Solomon Islands\",SC:\"Seychelles\",SD:\"Sudan\",SE:\"Sweden\",SG:\"Singapore\",SH:\"Saint Helena\",SI:\"Slovenia\",SJ:\"Svalbard and Jan Mayen\",SK:\"Slovakia\",SL:\"Sierra Leone\",SM:\"San Marino\",SN:\"Senegal\",SO:\"Somalia\",SR:\"Suriname\",ST:\"São Tomé and Príncipe\",SU:\"Union of Soviet Socialist Republics\",SV:\"El Salvador\",SY:\"Syria\",SZ:\"Swaziland\",TC:\"Turks and Caicos Islands\",TD:\"Chad\",TF:\"French Southern Territories\",TG:\"Togo\",TH:\"Thailand\",TJ:\"Tajikistan\",TK:\"Tokelau\",TL:\"Timor-Leste\",TM:\"Turkmenistan\",TN:\"Tunisia\",TO:\"Tonga\",TR:\"Turkey\",TT:\"Trinidad and Tobago\",TV:\"Tuvalu\",TW:\"Taiwan\",TZ:\"Tanzania\",UA:\"Ukraine\",UG:\"Uganda\",UM:\"U.S. Minor Outlying Islands\",US:\"United States\",UY:\"Uruguay\",UZ:\"Uzbekistan\",VA:\"Vatican City\",VC:\"Saint Vincent and the Grenadines\",VD:\"North Vietnam\",VE:\"Venezuela\",VG:\"British Virgin Islands\",VI:\"U.S. Virgin Islands\",VN:\"Vietnam\",VU:\"Vanuatu\",WF:\"Wallis and Futuna\",WK:\"Wake Island\",WS:\"Samoa\",YD:\"People's Democratic Republic of Yemen\",YE:\"Yemen\",YT:\"Mayotte\",ZA:\"South Africa\",ZM:\"Zambia\",ZW:\"Zimbabwe\",ZZ:\"Unknown or Invalid Region\" };

        var countriesArray = \$.map(countries, function(value, key) {
          return {
            value: value,
            data: key
          };
        });

        // initialize autocomplete with custom appendTo
        \$('#autocomplete-custom-append').autocomplete({
          lookup: countriesArray,
          appendTo: '#autocomplete-container'
        });
      });
    </script>
    <!-- /jQuery autocomplete -->

    <!-- Starrr -->
    <script>
      \$(document).ready(function() {
        \$(\".stars\").starrr();

        \$('.stars-existing').starrr({
          rating: 4
        });

        \$('.stars').on('starrr:change', function (e, value) {
          \$('.stars-count').html(value);
        });

        \$('.stars-existing').on('starrr:change', function (e, value) {
          \$('.stars-count-existing').html(value);
        });
      });
    </script>
    <!-- /Starrr -->
  ";
        
        $__internal_dd58bbe9fbe16d227e7b2aaad8d59d0a16b8c28955e46ab771947459af4c03de->leave($__internal_dd58bbe9fbe16d227e7b2aaad8d59d0a16b8c28955e46ab771947459af4c03de_prof);

    }

    public function getTemplateName()
    {
        return "default/passerCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 278,  488 => 275,  483 => 273,  478 => 271,  473 => 269,  468 => 267,  463 => 265,  458 => 263,  453 => 261,  449 => 260,  445 => 259,  440 => 257,  436 => 256,  431 => 254,  426 => 252,  421 => 250,  416 => 248,  411 => 246,  406 => 244,  402 => 243,  398 => 241,  392 => 240,  361 => 216,  341 => 198,  332 => 196,  328 => 195,  324 => 194,  320 => 193,  316 => 192,  311 => 189,  307 => 188,  288 => 171,  285 => 164,  276 => 161,  272 => 160,  269 => 159,  265 => 158,  261 => 157,  247 => 146,  237 => 139,  227 => 132,  217 => 125,  171 => 82,  124 => 37,  122 => 36,  117 => 33,  111 => 32,  102 => 29,  96 => 26,  91 => 24,  86 => 22,  81 => 20,  76 => 18,  71 => 16,  66 => 14,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
    }
}
/* */
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Add client {% endblock %}*/
/*  {% block stylesheets %}*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     */
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <!-- iCheck -->*/
/*     <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">*/
/*     <!-- bootstrap-wysiwyg -->*/
/*     <link href="{{asset('vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">*/
/*     <!-- Select2 -->*/
/*     <link href="{{asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">*/
/*     <!-- Switchery -->*/
/*     <link href="{{asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">*/
/*     <!-- starrr -->*/
/*     <link href="{{asset('vendors/starrr/dist/starrr.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Theme Style -->*/
/*     <link href="{{asset('css/custom.css')}}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/*   {% block body %}*/
/* */
/*     <div class="container body">*/
/*       <div class="main_container">*/
/*           {% include 'menu.html.twig' %}*/
/*         <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/*           <div class="">*/
/* */
/*             <div class="page-title">*/
/*               <div class="title_left">*/
/*                 <h3>Form Elements</h3>*/
/*               </div>*/
/* */
/*               <div class="title_right">*/
/*                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">*/
/*                   <div class="input-group">*/
/*                     <input type="text" class="form-control" placeholder="Search for...">*/
/*                     <span class="input-group-btn">*/
/*                       <button class="btn btn-default" type="button">Go!</button>*/
/*                     </span>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*             <div class="row">*/
/*               <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                 <div class="x_panel">*/
/*                   <div class="x_title">*/
/*                     <h2>Form Design <small>different form elements</small></h2>*/
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
/*                     <br />*/
/*                    {{ form_start(form,{ 'attr':{'class':'form-horizontal form-label-left'}}) }}*/
/*                       <div class="col-md-4 col-sm-4 col-xs-12 profile_details">*/
/*                         <div class="well profile_view">*/
/*                           <div class="col-sm-12">*/
/*                             <h4 class="brief"><i>Digital Strategist</i></h4>*/
/*                             <div class="left col-xs-7">*/
/*                               <h2>Nicole Pearson</h2>*/
/*                               <p><strong>About: </strong> Web Designer / UI. </p>*/
/*                               <ul class="list-unstyled">*/
/*                                 <li><i class="fa fa-building"></i> Address: </li>*/
/*                                 <li><i class="fa fa-phone"></i> Phone #: </li>*/
/*                               </ul>*/
/*                             </div>*/
/*                             <div class="right col-xs-5 text-center">*/
/*                               <img src="images/user.png" alt="" class="img-circle img-responsive">*/
/*                             </div>*/
/*                           </div>*/
/*                           <div class="col-xs-12 bottom text-center">*/
/*                             <div class="col-xs-12 col-sm-6 emphasis">*/
/*                               <p class="ratings">*/
/*                                 <a>4.0</a>*/
/*                                 <a href="#"><span class="fa fa-star"></span></a>*/
/*                                 <a href="#"><span class="fa fa-star"></span></a>*/
/*                                 <a href="#"><span class="fa fa-star"></span></a>*/
/*                                 <a href="#"><span class="fa fa-star"></span></a>*/
/*                                 <a href="#"><span class="fa fa-star-o"></span></a>*/
/*                               </p>*/
/*                             </div>*/
/*                             <div class="col-xs-12 col-sm-6 emphasis">*/
/*                               <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">*/
/*                                 </i> <i class="fa fa-comments-o"></i> </button>*/
/*                               <button type="button" class="btn btn-primary btn-xs">*/
/*                                 <i class="fa fa-user"> </i> View Profile*/
/*                               </button>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <br/>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Prix client <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                          {{ form_widget(form.prixClient, { 'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}*/
/*                         </div>*/
/*                       </div>*/
/*                        <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Prix théorique <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                          {{ form_widget(form.prixTheorique, { 'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name"> Date livraison estimé: <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                          {{ form_widget(form.dateLivraisonEsti) }}*/
/*                         </div>*/
/*                       </div>*/
/*                     <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                            {{ form_widget(form.category, { 'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}*/
/*                         </div>*/
/*                           <button id="btn1" type="button" >addRows</button>*/
/*                      */
/*                       <table class="table table-striped table-bordered">*/
/*                           <thead>*/
/*                         <tr>*/
/*                           <th>produit</th>*/
/*                           <th>nombre</th>*/
/*                         </tr>*/
/*                       </thead>*/
/*                       <tbody id="ulProducts" data-prototype="{{ form_widget(form.commandeproduits.vars.prototype)|e('html_attr') }}">*/
/*                          {% for produit in form.commandeproduits %}*/
/*                         <tr>*/
/*                           <td>{{ form_widget(produit.produit)}}</td>*/
/*                           <td>{{ form_widget(produit.nmbProduit)}}</td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                       </tbody>*/
/*                         {#   {% for produit in form.commandeproduits %}*/
/*                           <li>*/
/*                              */
/*                            {{ form_widget(produit.produit, { 'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}*/
/*                            </li>*/
/*                            {% endfor %} #}*/
/*               </table>*/
/*                          */
/*                      */
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
/*                   */
/*                */
/*                 */
/*                 */
/* */
/*                       <div class="ln_solid"></div>*/
/*                       <div class="form-group">*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                           <button type="submit" class="btn btn-primary">Cancel</button>*/
/*                           <button type="submit" class="btn btn-success">Submit</button>*/
/*                         </div>*/
/*                       </div>*/
/*        {{ form_end(form) }} */
/*                     </form>*/
/*                   </div>*/
/*         */
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*            */
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
/*     {% block javascripts %}*/
/*  */
/*     <!-- jQuery -->*/
/*     <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>*/
/*      <script src="{{asset('vendors/jquery.numeric.js')}}"></script>*/
/*     <!-- Bootstrap -->*/
/*     <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>*/
/*     <!-- NProgress -->*/
/*     <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>*/
/*     <!-- bootstrap-progressbar -->*/
/*     <script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*     <!-- iCheck -->*/
/*     <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>*/
/*     <!-- bootstrap-daterangepicker -->*/
/*     <script src="{{asset('js/moment/moment.min.js')}}"></script>*/
/*     <script src="{{asset('js/datepicker/daterangepicker.js')}}"></script>*/
/*     <!-- bootstrap-wysiwyg -->*/
/*     <script src="{{asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>*/
/*     <script src="{{asset('vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>*/
/*     <script src="{{asset('vendors/google-code-prettify/src/prettify.js')}}"></script>*/
/*     <!-- jQuery Tags Input -->*/
/*     <script src="{{asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>*/
/*     <!-- Switchery -->*/
/*     <script src="{{asset('vendors/switchery/dist/switchery.min.js')}}"></script>*/
/*     <!-- Select2 -->*/
/*     <script src="{{asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>*/
/*     <!-- Parsley -->*/
/*     <script src="{{asset('vendors/parsleyjs/dist/parsley.min.js')}}"></script>*/
/*     <!-- Autosize -->*/
/*     <script src="{{asset('vendors/autosize/dist/autosize.min.js')}}"></script>*/
/*     <!-- jQuery autocomplete -->*/
/*     <script src="{{asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>*/
/*     <!-- starrr -->*/
/*     <script src="{{asset('vendors/starrr/dist/starrr.js')}}"></script>*/
/* */
/*     <!-- Custom Theme Scripts -->*/
/*     <script src="{{asset('js/custom.js')}}"></script>*/
/* */
/* */
/* <script type="text/javascript">*/
/* */
/* var $collectionHolder;*/
/* */
/* // setup an "add a tag" link*/
/* */
/* var $newLinkLi = $('<tr><td></td></tr>');*/
/* $(document).ready(function() {*/
/*  // Get the ul that holds the collection of tags*/
/*     $collectionHolder = $('#ulProducts');*/
/* */
/*     // add the "add a tag" anchor and li to the tags ul*/
/*     $collectionHolder.append($newLinkLi);*/
/* */
/*     // count the current form inputs we have (e.g. 2), use that as the new*/
/*     // index when inserting a new item (e.g. 2)*/
/*     $collectionHolder.data('index', $collectionHolder.find(':input').length);*/
/* */
/*     $('#btn1').on('click', function(e) {*/
/*         // prevent the link from creating a "#" on the URL*/
/*         e.preventDefault();*/
/* */
/*         // add a new tag form (see next code block)*/
/*         addTagForm($collectionHolder, $newLinkLi);*/
/*     });*/
/* });*/
/* */
/* function addTagForm($collectionHolder, $newLinkLi) {*/
/*     // Get the data-prototype explained earlier*/
/*     var prototype = $collectionHolder.data('prototype');*/
/* */
/*     // get the new index*/
/*     var index = $collectionHolder.data('index');*/
/* */
/*     // Replace '__name__' in the prototype's HTML to*/
/*     // instead be a number based on how many items we have*/
/*     var newForm = prototype.replace(/__name__/g, index);*/
/* */
/*     // increase the index with one for the next item*/
/*     $collectionHolder.data('index', index + 1);*/
/* */
/*     // Display the form in the page in an li, before the "Add a tag" link li*/
/*     var $newFormLi = $('<tr><td></td></tr>').append(newForm);*/
/*     $newLinkLi.before($newFormLi);*/
/* }*/
/* */
/* */
/* */
/* </script>*/
/*     <!-- bootstrap-daterangepicker -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         $('#birthday').daterangepicker({*/
/*           singleDatePicker: true,*/
/*           calender_style: "picker_4"*/
/*         }, function(start, end, label) {*/
/*           console.log(start.toISOString(), end.toISOString(), label);*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /bootstrap-daterangepicker -->*/
/* */
/* <script>*/
/*   $("#form_price").numeric();*/
/*   $(".integer").numeric(false, function() { alert("Integers only"); this.value = ""; this.focus(); });*/
/*   $(".positive").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });*/
/*   $(".positive-integer").numeric({ decimal: false, negative: false }, function() { alert("Positive integers only"); this.value = ""; this.focus(); });*/
/*     $(".decimal-2-places").numeric({ decimalPlaces: 2 });*/
/*   $("#remove").click(*/
/*     function(e)*/
/*     {*/
/*       e.preventDefault();*/
/*       $(".numeric,.integer,.positive,.positive-integer,.decimal-2-places").removeNumeric();*/
/*     }*/
/*   );*/
/*   </script>*/
/* */
/* */
/*     <!-- bootstrap-wysiwyg -->*/
/*     <script>*/
/* */
/*    */
/*       $(document).ready(function() {*/
/*         function initToolbarBootstrapBindings() {*/
/*           var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',*/
/*               'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',*/
/*               'Times New Roman', 'Verdana'*/
/*             ],*/
/*             fontTarget = $('[title=Font]').siblings('.dropdown-menu');*/
/*           $.each(fonts, function(idx, fontName) {*/
/*             fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));*/
/*           });*/
/*           $('a[title]').tooltip({*/
/*             container: 'body'*/
/*           });*/
/*           $('.dropdown-menu input').click(function() {*/
/*               return false;*/
/*             })*/
/*             .change(function() {*/
/*               $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');*/
/*             })*/
/*             .keydown('esc', function() {*/
/*               this.value = '';*/
/*               $(this).change();*/
/*             });*/
/* */
/*           $('[data-role=magic-overlay]').each(function() {*/
/*             var overlay = $(this),*/
/*               target = $(overlay.data('target'));*/
/*             overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());*/
/*           });*/
/* */
/*           if ("onwebkitspeechchange" in document.createElement("input")) {*/
/*             var editorOffset = $('#editor').offset();*/
/* */
/*             $('.voiceBtn').css('position', 'absolute').offset({*/
/*               top: editorOffset.top,*/
/*               left: editorOffset.left + $('#editor').innerWidth() - 35*/
/*             });*/
/*           } else {*/
/*             $('.voiceBtn').hide();*/
/*           }*/
/*         }*/
/* */
/*         function showErrorAlert(reason, detail) {*/
/*           var msg = '';*/
/*           if (reason === 'unsupported-file-type') {*/
/*             msg = "Unsupported format " + detail;*/
/*           } else {*/
/*             console.log("error uploading file", reason, detail);*/
/*           }*/
/*           $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +*/
/*             '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');*/
/*         }*/
/* */
/*         initToolbarBootstrapBindings();*/
/* */
/*         $('#editor').wysiwyg({*/
/*           fileUploadError: showErrorAlert*/
/*         });*/
/* */
/*         window.prettyPrint;*/
/*         prettyPrint();*/
/*       });*/
/*     </script>*/
/*     <!-- /bootstrap-wysiwyg -->*/
/* */
/*     <!-- Select2 -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         $(".select2_single").select2({*/
/*           placeholder: "Select a state",*/
/*           allowClear: true*/
/*         });*/
/*         $(".select2_group").select2({});*/
/*         $(".select2_multiple").select2({*/
/*           maximumSelectionLength: 4,*/
/*           placeholder: "With Max Selection limit 4",*/
/*           allowClear: true*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /Select2 -->*/
/* */
/*     <!-- jQuery Tags Input -->*/
/*     <script>*/
/*       function onAddTag(tag) {*/
/*         alert("Added a tag: " + tag);*/
/*       }*/
/* */
/*       function onRemoveTag(tag) {*/
/*         alert("Removed a tag: " + tag);*/
/*       }*/
/* */
/*       function onChangeTag(input, tag) {*/
/*         alert("Changed a tag: " + tag);*/
/*       }*/
/* */
/*       $(document).ready(function() {*/
/*         $('#tags_1').tagsInput({*/
/*           width: 'auto'*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /jQuery Tags Input -->*/
/* */
/*     <!-- Parsley -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         $.listen('parsley:field:validate', function() {*/
/*           validateFront();*/
/*         });*/
/*         $('#demo-form .btn').on('click', function() {*/
/*           $('#demo-form').parsley().validate();*/
/*           validateFront();*/
/*         });*/
/*         var validateFront = function() {*/
/*           if (true === $('#demo-form').parsley().isValid()) {*/
/*             $('.bs-callout-info').removeClass('hidden');*/
/*             $('.bs-callout-warning').addClass('hidden');*/
/*           } else {*/
/*             $('.bs-callout-info').addClass('hidden');*/
/*             $('.bs-callout-warning').removeClass('hidden');*/
/*           }*/
/*         };*/
/*       });*/
/* */
/*       $(document).ready(function() {*/
/*         $.listen('parsley:field:validate', function() {*/
/*           validateFront();*/
/*         });*/
/*         $('#demo-form2 .btn').on('click', function() {*/
/*           $('#demo-form2').parsley().validate();*/
/*           validateFront();*/
/*         });*/
/*         var validateFront = function() {*/
/*           if (true === $('#demo-form2').parsley().isValid()) {*/
/*             $('.bs-callout-info').removeClass('hidden');*/
/*             $('.bs-callout-warning').addClass('hidden');*/
/*           } else {*/
/*             $('.bs-callout-info').addClass('hidden');*/
/*             $('.bs-callout-warning').removeClass('hidden');*/
/*           }*/
/*         };*/
/*       });*/
/*       try {*/
/*         hljs.initHighlightingOnLoad();*/
/*       } catch (err) {}*/
/*     </script>*/
/*     <!-- /Parsley -->*/
/* */
/*     <!-- Autosize -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         autosize($('.resizable_textarea'));*/
/*       });*/
/*     </script>*/
/*     <!-- /Autosize -->*/
/* */
/*     <!-- jQuery autocomplete -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         var countries = { AD:"Andorra",A2:"Andorra Test",AE:"United Arab Emirates",AF:"Afghanistan",AG:"Antigua and Barbuda",AI:"Anguilla",AL:"Albania",AM:"Armenia",AN:"Netherlands Antilles",AO:"Angola",AQ:"Antarctica",AR:"Argentina",AS:"American Samoa",AT:"Austria",AU:"Australia",AW:"Aruba",AX:"Åland Islands",AZ:"Azerbaijan",BA:"Bosnia and Herzegovina",BB:"Barbados",BD:"Bangladesh",BE:"Belgium",BF:"Burkina Faso",BG:"Bulgaria",BH:"Bahrain",BI:"Burundi",BJ:"Benin",BL:"Saint Barthélemy",BM:"Bermuda",BN:"Brunei",BO:"Bolivia",BQ:"British Antarctic Territory",BR:"Brazil",BS:"Bahamas",BT:"Bhutan",BV:"Bouvet Island",BW:"Botswana",BY:"Belarus",BZ:"Belize",CA:"Canada",CC:"Cocos [Keeling] Islands",CD:"Congo - Kinshasa",CF:"Central African Republic",CG:"Congo - Brazzaville",CH:"Switzerland",CI:"Côte d’Ivoire",CK:"Cook Islands",CL:"Chile",CM:"Cameroon",CN:"China",CO:"Colombia",CR:"Costa Rica",CS:"Serbia and Montenegro",CT:"Canton and Enderbury Islands",CU:"Cuba",CV:"Cape Verde",CX:"Christmas Island",CY:"Cyprus",CZ:"Czech Republic",DD:"East Germany",DE:"Germany",DJ:"Djibouti",DK:"Denmark",DM:"Dominica",DO:"Dominican Republic",DZ:"Algeria",EC:"Ecuador",EE:"Estonia",EG:"Egypt",EH:"Western Sahara",ER:"Eritrea",ES:"Spain",ET:"Ethiopia",FI:"Finland",FJ:"Fiji",FK:"Falkland Islands",FM:"Micronesia",FO:"Faroe Islands",FQ:"French Southern and Antarctic Territories",FR:"France",FX:"Metropolitan France",GA:"Gabon",GB:"United Kingdom",GD:"Grenada",GE:"Georgia",GF:"French Guiana",GG:"Guernsey",GH:"Ghana",GI:"Gibraltar",GL:"Greenland",GM:"Gambia",GN:"Guinea",GP:"Guadeloupe",GQ:"Equatorial Guinea",GR:"Greece",GS:"South Georgia and the South Sandwich Islands",GT:"Guatemala",GU:"Guam",GW:"Guinea-Bissau",GY:"Guyana",HK:"Hong Kong SAR China",HM:"Heard Island and McDonald Islands",HN:"Honduras",HR:"Croatia",HT:"Haiti",HU:"Hungary",ID:"Indonesia",IE:"Ireland",IL:"Israel",IM:"Isle of Man",IN:"India",IO:"British Indian Ocean Territory",IQ:"Iraq",IR:"Iran",IS:"Iceland",IT:"Italy",JE:"Jersey",JM:"Jamaica",JO:"Jordan",JP:"Japan",JT:"Johnston Island",KE:"Kenya",KG:"Kyrgyzstan",KH:"Cambodia",KI:"Kiribati",KM:"Comoros",KN:"Saint Kitts and Nevis",KP:"North Korea",KR:"South Korea",KW:"Kuwait",KY:"Cayman Islands",KZ:"Kazakhstan",LA:"Laos",LB:"Lebanon",LC:"Saint Lucia",LI:"Liechtenstein",LK:"Sri Lanka",LR:"Liberia",LS:"Lesotho",LT:"Lithuania",LU:"Luxembourg",LV:"Latvia",LY:"Libya",MA:"Morocco",MC:"Monaco",MD:"Moldova",ME:"Montenegro",MF:"Saint Martin",MG:"Madagascar",MH:"Marshall Islands",MI:"Midway Islands",MK:"Macedonia",ML:"Mali",MM:"Myanmar [Burma]",MN:"Mongolia",MO:"Macau SAR China",MP:"Northern Mariana Islands",MQ:"Martinique",MR:"Mauritania",MS:"Montserrat",MT:"Malta",MU:"Mauritius",MV:"Maldives",MW:"Malawi",MX:"Mexico",MY:"Malaysia",MZ:"Mozambique",NA:"Namibia",NC:"New Caledonia",NE:"Niger",NF:"Norfolk Island",NG:"Nigeria",NI:"Nicaragua",NL:"Netherlands",NO:"Norway",NP:"Nepal",NQ:"Dronning Maud Land",NR:"Nauru",NT:"Neutral Zone",NU:"Niue",NZ:"New Zealand",OM:"Oman",PA:"Panama",PC:"Pacific Islands Trust Territory",PE:"Peru",PF:"French Polynesia",PG:"Papua New Guinea",PH:"Philippines",PK:"Pakistan",PL:"Poland",PM:"Saint Pierre and Miquelon",PN:"Pitcairn Islands",PR:"Puerto Rico",PS:"Palestinian Territories",PT:"Portugal",PU:"U.S. Miscellaneous Pacific Islands",PW:"Palau",PY:"Paraguay",PZ:"Panama Canal Zone",QA:"Qatar",RE:"Réunion",RO:"Romania",RS:"Serbia",RU:"Russia",RW:"Rwanda",SA:"Saudi Arabia",SB:"Solomon Islands",SC:"Seychelles",SD:"Sudan",SE:"Sweden",SG:"Singapore",SH:"Saint Helena",SI:"Slovenia",SJ:"Svalbard and Jan Mayen",SK:"Slovakia",SL:"Sierra Leone",SM:"San Marino",SN:"Senegal",SO:"Somalia",SR:"Suriname",ST:"São Tomé and Príncipe",SU:"Union of Soviet Socialist Republics",SV:"El Salvador",SY:"Syria",SZ:"Swaziland",TC:"Turks and Caicos Islands",TD:"Chad",TF:"French Southern Territories",TG:"Togo",TH:"Thailand",TJ:"Tajikistan",TK:"Tokelau",TL:"Timor-Leste",TM:"Turkmenistan",TN:"Tunisia",TO:"Tonga",TR:"Turkey",TT:"Trinidad and Tobago",TV:"Tuvalu",TW:"Taiwan",TZ:"Tanzania",UA:"Ukraine",UG:"Uganda",UM:"U.S. Minor Outlying Islands",US:"United States",UY:"Uruguay",UZ:"Uzbekistan",VA:"Vatican City",VC:"Saint Vincent and the Grenadines",VD:"North Vietnam",VE:"Venezuela",VG:"British Virgin Islands",VI:"U.S. Virgin Islands",VN:"Vietnam",VU:"Vanuatu",WF:"Wallis and Futuna",WK:"Wake Island",WS:"Samoa",YD:"People's Democratic Republic of Yemen",YE:"Yemen",YT:"Mayotte",ZA:"South Africa",ZM:"Zambia",ZW:"Zimbabwe",ZZ:"Unknown or Invalid Region" };*/
/* */
/*         var countriesArray = $.map(countries, function(value, key) {*/
/*           return {*/
/*             value: value,*/
/*             data: key*/
/*           };*/
/*         });*/
/* */
/*         // initialize autocomplete with custom appendTo*/
/*         $('#autocomplete-custom-append').autocomplete({*/
/*           lookup: countriesArray,*/
/*           appendTo: '#autocomplete-container'*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /jQuery autocomplete -->*/
/* */
/*     <!-- Starrr -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         $(".stars").starrr();*/
/* */
/*         $('.stars-existing').starrr({*/
/*           rating: 4*/
/*         });*/
/* */
/*         $('.stars').on('starrr:change', function (e, value) {*/
/*           $('.stars-count').html(value);*/
/*         });*/
/* */
/*         $('.stars-existing').on('starrr:change', function (e, value) {*/
/*           $('.stars-count-existing').html(value);*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /Starrr -->*/
/*   {% endblock %}*/
/* */
