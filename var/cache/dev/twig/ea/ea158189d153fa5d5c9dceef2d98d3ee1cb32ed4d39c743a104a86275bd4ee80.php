<?php

/* default/updateClient.html.twig */
class __TwigTemplate_080367e8a6667f92b95303a8ea357299f85fbde86eb6c0f7303e4ecfcffeabbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "default/updateClient.html.twig", 2);
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
        $__internal_73228bc46b41bd716eb2b07acfa50f5f25bb4fa05eb8a4467f9790d31e64b868 = $this->env->getExtension("native_profiler");
        $__internal_73228bc46b41bd716eb2b07acfa50f5f25bb4fa05eb8a4467f9790d31e64b868->enter($__internal_73228bc46b41bd716eb2b07acfa50f5f25bb4fa05eb8a4467f9790d31e64b868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/updateClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73228bc46b41bd716eb2b07acfa50f5f25bb4fa05eb8a4467f9790d31e64b868->leave($__internal_73228bc46b41bd716eb2b07acfa50f5f25bb4fa05eb8a4467f9790d31e64b868_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2dda770aa8a93a014d79ada9a7e593d7422b7467a0e077a23c4a64bc56da8af = $this->env->getExtension("native_profiler");
        $__internal_d2dda770aa8a93a014d79ada9a7e593d7422b7467a0e077a23c4a64bc56da8af->enter($__internal_d2dda770aa8a93a014d79ada9a7e593d7422b7467a0e077a23c4a64bc56da8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add client ";
        
        $__internal_d2dda770aa8a93a014d79ada9a7e593d7422b7467a0e077a23c4a64bc56da8af->leave($__internal_d2dda770aa8a93a014d79ada9a7e593d7422b7467a0e077a23c4a64bc56da8af_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0250991f5de7f44fb7997c6e35ddd7d818c52dac63cc8213ee8608deedd8c313 = $this->env->getExtension("native_profiler");
        $__internal_0250991f5de7f44fb7997c6e35ddd7d818c52dac63cc8213ee8608deedd8c313->enter($__internal_0250991f5de7f44fb7997c6e35ddd7d818c52dac63cc8213ee8608deedd8c313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0250991f5de7f44fb7997c6e35ddd7d818c52dac63cc8213ee8608deedd8c313->leave($__internal_0250991f5de7f44fb7997c6e35ddd7d818c52dac63cc8213ee8608deedd8c313_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_a855d9b728a07ba7fb66835ca589eb8151e22a8e92bba694d4a2dd8617267caa = $this->env->getExtension("native_profiler");
        $__internal_a855d9b728a07ba7fb66835ca589eb8151e22a8e92bba694d4a2dd8617267caa->enter($__internal_a855d9b728a07ba7fb66835ca589eb8151e22a8e92bba694d4a2dd8617267caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "
    <div class=\"container body\">
      <div class=\"main_container\">
          ";
        // line 36
        $this->loadTemplate("menu.html.twig", "default/updateClient.html.twig", 36)->display($context);
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
                    <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\" action=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateClient", array("clientid" => $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "idClient", array()))), "html", null, true);
        echo "\" method =\"POST\">

                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Nom <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"first-name\" name=\"nom\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\"  for=\"last-name\">Prenom <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"last-name\" name=\"prenom\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo "\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"middle-name\" class=\"control-label col-md-3 col-sm-3 col-xs-12\">Age </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input id=\"Age\"  class=\"form-control col-md-7 col-xs-12\" type=\"text\" name=\"numAge\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "age", array()), "html", null, true);
        echo "\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\">Sexe</label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <div id=\"gender\" class=\"btn-group\" data-toggle=\"buttons\">
                            ";
        // line 108
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "sexe", array()) == "male")) {
            // line 109
            echo "                            <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"male\" checked=\"checked\"> &nbsp; Male &nbsp;
                            </label>
                            <label class=\"btn btn-primary\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"female\" > Female
                            </label>
                            ";
        } elseif (($this->getAttribute(        // line 115
(isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "sexe", array()) == "female")) {
            // line 116
            echo "                            <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"male\"> &nbsp; Male &nbsp;
                            </label>
                            <label class=\"btn btn-primary\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"female\" checked=\"checked\"> Female
                            </label>

                            ";
        } else {
            // line 124
            echo "                            <label class=\"btn btn-default\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"male\"> &nbsp; Male &nbsp;
                            </label>
                            <label class=\"btn btn-primary\" data-toggle-class=\"btn-primary\" data-toggle-passive-class=\"btn-default\">
                              <input type=\"radio\" name=\"gender\" value=\"female\" checked=\"checked\"> Female
                            </label>
                          ";
        }
        // line 131
        echo "                          </div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Longueur <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"Longueur\" name=\"numLong\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "longueur", array()), "html", null, true);
        echo "\">
                        </div>
                      </div>
                       <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\"  for=\"last-name\">Largeur <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"Largeur\" name=\"numLar\" required=\"required\"  class=\"form-control col-md-7 col-xs-12\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "largeur", array()), "html", null, true);
        echo "\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">Hauteur <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"Hauteur\" name=\"numHau\" required=\"required\"  class=\"form-control col-md-7 col-xs-12\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "hauteur", array()), "html", null, true);
        echo "\">
                        </div>
                      </div>
                 <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"last-name\">num Tel <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                          <input type=\"text\" id=\"numTel\" name=\"numTel\" required=\"required\"  class=\"form-control col-md-7 col-xs-12\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "numTel", array()), "html", null, true);
        echo "\">
                        </div>
                      </div>
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                          <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>

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
        
        $__internal_a855d9b728a07ba7fb66835ca589eb8151e22a8e92bba694d4a2dd8617267caa->leave($__internal_a855d9b728a07ba7fb66835ca589eb8151e22a8e92bba694d4a2dd8617267caa_prof);

    }

    // line 192
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0cb767ec2cd408112fd7f7cc4df25ef8fd3e8329f4c7d44e8e0ad10a246f31b2 = $this->env->getExtension("native_profiler");
        $__internal_0cb767ec2cd408112fd7f7cc4df25ef8fd3e8329f4c7d44e8e0ad10a246f31b2->enter($__internal_0cb767ec2cd408112fd7f7cc4df25ef8fd3e8329f4c7d44e8e0ad10a246f31b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 193
        echo " 
    <!-- jQuery -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.numeric.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Switchery -->
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Parsley -->
    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Autosize -->
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <!-- starrr -->
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

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
  \$(\"[name^=num]\").numeric();
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
        
        $__internal_0cb767ec2cd408112fd7f7cc4df25ef8fd3e8329f4c7d44e8e0ad10a246f31b2->leave($__internal_0cb767ec2cd408112fd7f7cc4df25ef8fd3e8329f4c7d44e8e0ad10a246f31b2_prof);

    }

    public function getTemplateName()
    {
        return "default/updateClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 230,  415 => 227,  410 => 225,  405 => 223,  400 => 221,  395 => 219,  390 => 217,  385 => 215,  380 => 213,  376 => 212,  372 => 211,  367 => 209,  363 => 208,  358 => 206,  353 => 204,  348 => 202,  343 => 200,  338 => 198,  333 => 196,  329 => 195,  325 => 193,  319 => 192,  279 => 159,  269 => 152,  259 => 145,  249 => 138,  240 => 131,  231 => 124,  221 => 116,  219 => 115,  211 => 109,  209 => 108,  199 => 101,  190 => 95,  180 => 88,  171 => 82,  124 => 37,  122 => 36,  117 => 33,  111 => 32,  102 => 29,  96 => 26,  91 => 24,  86 => 22,  81 => 20,  76 => 18,  71 => 16,  66 => 14,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
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
/*                     <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{path('updateClient',{'clientid':client.idClient})}}" method ="POST">*/
/* */
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input type="text" id="first-name" name="nom" required="required" class="form-control col-md-7 col-xs-12" value="{{client.nom}}">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Prenom <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input type="text" id="last-name" name="prenom" required="required" class="form-control col-md-7 col-xs-12" value="{{client.prenom}}">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Age </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input id="Age"  class="form-control col-md-7 col-xs-12" type="text" name="numAge" value="{{client.age}}">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexe</label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <div id="gender" class="btn-group" data-toggle="buttons">*/
/*                             {% if client.sexe=="male" %}*/
/*                             <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">*/
/*                               <input type="radio" name="gender" value="male" checked="checked"> &nbsp; Male &nbsp;*/
/*                             </label>*/
/*                             <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">*/
/*                               <input type="radio" name="gender" value="female" > Female*/
/*                             </label>*/
/*                             {% elseif client.sexe=="female" %}*/
/*                             <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">*/
/*                               <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;*/
/*                             </label>*/
/*                             <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">*/
/*                               <input type="radio" name="gender" value="female" checked="checked"> Female*/
/*                             </label>*/
/* */
/*                             {% else %}*/
/*                             <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">*/
/*                               <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;*/
/*                             </label>*/
/*                             <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">*/
/*                               <input type="radio" name="gender" value="female" checked="checked"> Female*/
/*                             </label>*/
/*                           {% endif %}*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Longueur <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input type="text" id="Longueur" name="numLong" required="required" class="form-control col-md-7 col-xs-12" value="{{client.longueur}}">*/
/*                         </div>*/
/*                       </div>*/
/*                        <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Largeur <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input type="text" id="Largeur" name="numLar" required="required"  class="form-control col-md-7 col-xs-12" value="{{client.largeur}}">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Hauteur <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input type="text" id="Hauteur" name="numHau" required="required"  class="form-control col-md-7 col-xs-12" value="{{client.hauteur}}">*/
/*                         </div>*/
/*                       </div>*/
/*                  <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">num Tel <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                           <input type="text" id="numTel" name="numTel" required="required"  class="form-control col-md-7 col-xs-12" value="{{client.numTel}}">*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="ln_solid"></div>*/
/*                       <div class="form-group">*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">*/
/*                           <button type="submit" class="btn btn-primary">Cancel</button>*/
/*                           <button type="submit" class="btn btn-success">Submit</button>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </form>*/
/*                   </div>*/
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
/*   $("[name^=num]").numeric();*/
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
