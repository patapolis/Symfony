<?php

/* default/updateClient.html.twig */
class __TwigTemplate_f1ca567af5fa267d9ebb55a53f376a548340f41acb7fc57a01804acc65378755 extends Twig_Template
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
        $__internal_f24ba46ae7053935dd2bbe4b5b290770cb0ed0a6a84d8588b776ea9b496b3ef3 = $this->env->getExtension("native_profiler");
        $__internal_f24ba46ae7053935dd2bbe4b5b290770cb0ed0a6a84d8588b776ea9b496b3ef3->enter($__internal_f24ba46ae7053935dd2bbe4b5b290770cb0ed0a6a84d8588b776ea9b496b3ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/updateClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f24ba46ae7053935dd2bbe4b5b290770cb0ed0a6a84d8588b776ea9b496b3ef3->leave($__internal_f24ba46ae7053935dd2bbe4b5b290770cb0ed0a6a84d8588b776ea9b496b3ef3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dea6a20184b922752ae2283a7049f6f0dbb11711082b393c83b17440891348ba = $this->env->getExtension("native_profiler");
        $__internal_dea6a20184b922752ae2283a7049f6f0dbb11711082b393c83b17440891348ba->enter($__internal_dea6a20184b922752ae2283a7049f6f0dbb11711082b393c83b17440891348ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add client ";
        
        $__internal_dea6a20184b922752ae2283a7049f6f0dbb11711082b393c83b17440891348ba->leave($__internal_dea6a20184b922752ae2283a7049f6f0dbb11711082b393c83b17440891348ba_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fef78e55da7d74e3406762ed6c2e75b71ac7f8da5e518cb638470c3f20644d41 = $this->env->getExtension("native_profiler");
        $__internal_fef78e55da7d74e3406762ed6c2e75b71ac7f8da5e518cb638470c3f20644d41->enter($__internal_fef78e55da7d74e3406762ed6c2e75b71ac7f8da5e518cb638470c3f20644d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fef78e55da7d74e3406762ed6c2e75b71ac7f8da5e518cb638470c3f20644d41->leave($__internal_fef78e55da7d74e3406762ed6c2e75b71ac7f8da5e518cb638470c3f20644d41_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_e107087c3ef60399a699fb3d94a1832677abe1ccd18dc8544144214bf343a6c5 = $this->env->getExtension("native_profiler");
        $__internal_e107087c3ef60399a699fb3d94a1832677abe1ccd18dc8544144214bf343a6c5->enter($__internal_e107087c3ef60399a699fb3d94a1832677abe1ccd18dc8544144214bf343a6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                   ";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal form-label-left")));
        echo "
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" for=\"first-name\">Name <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                           ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\"  for=\"last-name\">Description <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control col-md-7 col-xs-12")));
        echo "
                        </div>
                      </div>
                       <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\"  for=\"last-name\">Price <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'widget');
        echo "
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\"  for=\"last-name\"> Image file <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imageFile", array()), 'widget');
        echo "
                        </div>
                      </div>
                    
                        <div class=\"form-group\">
                        <label class=\"control-label col-md-3 col-sm-3 col-xs-12\"  for=\"last-name\"> Category <span class=\"required\">*</span>
                        </label>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                         ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget');
        echo "
                        </div>
                      </div>
              
                      <div class=\"ln_solid\"></div>
                      <div class=\"form-group\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                          <button type=\"submit\" class=\"btn btn-primary\">Cancel</button>
                          <button type=\"submit\" class=\"btn btn-success\">Submit</button>
                        </div>
                      </div>
       ";
        // line 127
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
        
        $__internal_e107087c3ef60399a699fb3d94a1832677abe1ccd18dc8544144214bf343a6c5->leave($__internal_e107087c3ef60399a699fb3d94a1832677abe1ccd18dc8544144214bf343a6c5_prof);

    }

    // line 150
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c94d380a492ceb5bfe5c123f9cc9e449c40bf09e050e81b623a2fd305179453 = $this->env->getExtension("native_profiler");
        $__internal_0c94d380a492ceb5bfe5c123f9cc9e449c40bf09e050e81b623a2fd305179453->enter($__internal_0c94d380a492ceb5bfe5c123f9cc9e449c40bf09e050e81b623a2fd305179453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 151
        echo " 
    <!-- jQuery -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.numeric.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-wysiwyg -->
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.hotkeys/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/google-code-prettify/src/prettify.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Tags Input -->
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Switchery -->
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/switchery/dist/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Parsley -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/parsleyjs/dist/parsley.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Autosize -->
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/autosize/dist/autosize.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery autocomplete -->
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"), "html", null, true);
        echo "\"></script>
    <!-- starrr -->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/starrr/dist/starrr.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 188
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
        
        $__internal_0c94d380a492ceb5bfe5c123f9cc9e449c40bf09e050e81b623a2fd305179453->leave($__internal_0c94d380a492ceb5bfe5c123f9cc9e449c40bf09e050e81b623a2fd305179453_prof);

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
        return array (  366 => 188,  360 => 185,  355 => 183,  350 => 181,  345 => 179,  340 => 177,  335 => 175,  330 => 173,  325 => 171,  321 => 170,  317 => 169,  312 => 167,  308 => 166,  303 => 164,  298 => 162,  293 => 160,  288 => 158,  283 => 156,  278 => 154,  274 => 153,  270 => 151,  264 => 150,  234 => 127,  220 => 116,  209 => 108,  199 => 101,  189 => 94,  179 => 87,  171 => 82,  124 => 37,  122 => 36,  117 => 33,  111 => 32,  102 => 29,  96 => 26,  91 => 24,  86 => 22,  81 => 20,  76 => 18,  71 => 16,  66 => 14,  55 => 5,  49 => 4,  37 => 3,  11 => 2,);
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
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                            {{ form_widget(form.name, { 'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Description <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                          {{ form_widget(form.description, { 'attr': {'class': 'form-control col-md-7 col-xs-12'}}) }}*/
/*                         </div>*/
/*                       </div>*/
/*                        <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name">Price <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                          {{ form_widget(form.price) }}*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name"> Image file <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                          {{ form_widget(form.imageFile) }}*/
/*                         </div>*/
/*                       </div>*/
/*                     */
/*                         <div class="form-group">*/
/*                         <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="last-name"> Category <span class="required">*</span>*/
/*                         </label>*/
/*                         <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                          {{ form_widget(form.category) }}*/
/*                         </div>*/
/*                       </div>*/
/*               */
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
