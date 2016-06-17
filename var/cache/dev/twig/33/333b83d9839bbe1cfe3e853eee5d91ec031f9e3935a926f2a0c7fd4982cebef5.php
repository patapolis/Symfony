<?php

/* default/index.html.twig */
class __TwigTemplate_7fefe48c4fa5f0f5c3d85b2fca03c9f30a1b960b8faab1ed4bff41367abee6b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_6783c2378830c984caaa3a015b9321c0768e236fab755c6daea7e487cb58dd21 = $this->env->getExtension("native_profiler");
        $__internal_6783c2378830c984caaa3a015b9321c0768e236fab755c6daea7e487cb58dd21->enter($__internal_6783c2378830c984caaa3a015b9321c0768e236fab755c6daea7e487cb58dd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6783c2378830c984caaa3a015b9321c0768e236fab755c6daea7e487cb58dd21->leave($__internal_6783c2378830c984caaa3a015b9321c0768e236fab755c6daea7e487cb58dd21_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e702e2bcfe9886ba0e324ee6563337b24dc4caf6e57714e3e48b9335958f0821 = $this->env->getExtension("native_profiler");
        $__internal_e702e2bcfe9886ba0e324ee6563337b24dc4caf6e57714e3e48b9335958f0821->enter($__internal_e702e2bcfe9886ba0e324ee6563337b24dc4caf6e57714e3e48b9335958f0821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"container body\">
      <div class=\"main_container\">
        <!-- top navigation and sidebar -->
           ";
        // line 9
        $this->loadTemplate("menu.html.twig", "default/index.html.twig", 9)->display($context);
        // line 10
        echo "        

        
        
        <!-- /top navigation and sidebar -->


        <!-- page content -->
        <div class=\"right_col\" role=\"main\">

          <!-- top tiles -->
          <div class=\"row tile_count\">
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
              <div class=\"count\">2500</div>
              <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
              <div class=\"count\">123.50</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Males</span>
              <div class=\"count green\">2,500</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Females</span>
              <div class=\"count\">4,567</div>
              <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Collections</span>
              <div class=\"count\">2,315</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Connections</span>
              <div class=\"count\">7,325</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 col-xs-12\">
              <div class=\"dashboard_graph\">

                <div class=\"row x_title\">
                  <div class=\"col-md-6\">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class=\"col-md-6\">
                    <div id=\"reportrange\" class=\"pull-right\" style=\"background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc\">
                      <i class=\"glyphicon glyphicon-calendar fa fa-calendar\"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class=\"caret\"></b>
                    </div>
                  </div>
                </div>

                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                  <div id=\"placeholder33\" style=\"height: 260px; display: none\" class=\"demo-placeholder\"></div>
                  <div style=\"width: 100%;\">
                    <div id=\"canvas_dahs\" class=\"demo-placeholder\" style=\"width: 100%; height:270px;\"></div>
                  </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-12 bg-white\">
                  <div class=\"x_title\">
                    <h2>Top Campaign Performance</h2>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"col-md-12 col-sm-12 col-xs-6\">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"80\"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"60\"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-md-12 col-sm-12 col-xs-6\">
                    <div>
                      <p>Conventional Media</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"40\"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class=\"clearfix\"></div>
              </div>
            </div>

          </div>
          <br />

          <div class=\"row\">


            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"x_panel tile fixed_height_320\">
                <div class=\"x_title\">
                  <h2>App Versions</h2>
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
                  <h4>App Usage across versions</h4>
                  <div class=\"widget_summary\">
                    <div class=\"w_left w_25\">
                      <span>0.1.5.2</span>
                    </div>
                    <div class=\"w_center w_55\">
                      <div class=\"progress\">
                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 66%;\">
                          <span class=\"sr-only\">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class=\"w_right w_20\">
                      <span>123k</span>
                    </div>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"widget_summary\">
                    <div class=\"w_left w_25\">
                      <span>0.1.5.3</span>
                    </div>
                    <div class=\"w_center w_55\">
                      <div class=\"progress\">
                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\">
                          <span class=\"sr-only\">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class=\"w_right w_20\">
                      <span>53k</span>
                    </div>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"widget_summary\">
                    <div class=\"w_left w_25\">
                      <span>0.1.5.4</span>
                    </div>
                    <div class=\"w_center w_55\">
                      <div class=\"progress\">
                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 25%;\">
                          <span class=\"sr-only\">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class=\"w_right w_20\">
                      <span>23k</span>
                    </div>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"widget_summary\">
                    <div class=\"w_left w_25\">
                      <span>0.1.5.5</span>
                    </div>
                    <div class=\"w_center w_55\">
                      <div class=\"progress\">
                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 5%;\">
                          <span class=\"sr-only\">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class=\"w_right w_20\">
                      <span>3k</span>
                    </div>
                    <div class=\"clearfix\"></div>
                  </div>
                  <div class=\"widget_summary\">
                    <div class=\"w_left w_25\">
                      <span>0.1.5.6</span>
                    </div>
                    <div class=\"w_center w_55\">
                      <div class=\"progress\">
                        <div class=\"progress-bar bg-green\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%;\">
                          <span class=\"sr-only\">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class=\"w_right w_20\">
                      <span>1k</span>
                    </div>
                    <div class=\"clearfix\"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"x_panel tile fixed_height_320 overflow_hidden\">
                <div class=\"x_title\">
                  <h2>Device Usage</h2>
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
                  <table class=\"\" style=\"width:100%\">
                    <tr>
                      <th style=\"width:37%;\">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-7\">
                          <p class=\"\">Device</p>
                        </div>
                        <div class=\"col-lg-5 col-md-5 col-sm-5 col-xs-5\">
                          <p class=\"\">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id=\"canvas1\" height=\"140\" width=\"140\" style=\"margin: 15px 10px 10px 0\"></canvas>
                      </td>
                      <td>
                        <table class=\"tile_info\">
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square blue\"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square green\"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square purple\"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square aero\"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class=\"fa fa-square red\"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"x_panel tile fixed_height_320\">
                <div class=\"x_title\">
                  <h2>Quick Settings</h2>
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
                  <div class=\"dashboard-widget-content\">
                    <ul class=\"quick-list\">
                      <li><i class=\"fa fa-calendar-o\"></i><a href=\"#\">Settings</a>
                      </li>
                      <li><i class=\"fa fa-bars\"></i><a href=\"#\">Subscription</a>
                      </li>
                      <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                      <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a>
                      </li>
                      <li><i class=\"fa fa-bar-chart\"></i><a href=\"#\">Auto Renewal</a> </li>
                      <li><i class=\"fa fa-line-chart\"></i><a href=\"#\">Achievements</a>
                      </li>
                      <li><i class=\"fa fa-area-chart\"></i><a href=\"#\">Logout</a>
                      </li>
                    </ul>

                    <div class=\"sidebar-widget\">
                      <h4>Profile Completion</h4>
                      <canvas width=\"150\" height=\"80\" id=\"foo\" class=\"\" style=\"width: 160px; height: 100px;\"></canvas>
                      <div class=\"goal-wrapper\">
                        <span class=\"gauge-value pull-left\">\$</span>
                        <span id=\"gauge-text\" class=\"gauge-value pull-left\">3,200</span>
                        <span id=\"goal-text\" class=\"goal-value pull-right\">\$5,000</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class=\"row\">
            <div class=\"col-md-4 col-sm-4 col-xs-12\">
              <div class=\"x_panel\">
                <div class=\"x_title\">
                  <h2>Recent Activities <small>Sessions</small></h2>
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
                  <div class=\"dashboard-widget-content\">

                    <ul class=\"list-unstyled timeline widget\">
                      <li>
                        <div class=\"block\">
                          <div class=\"block_content\">
                            <h2 class=\"title\">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class=\"byline\">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"block\">
                          <div class=\"block_content\">
                            <h2 class=\"title\">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class=\"byline\">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"block\">
                          <div class=\"block_content\">
                            <h2 class=\"title\">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class=\"byline\">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class=\"block\">
                          <div class=\"block_content\">
                            <h2 class=\"title\">
                                              <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                          </h2>
                            <div class=\"byline\">
                              <span>13 hours ago</span> by <a>Jane Smith</a>
                            </div>
                            <p class=\"excerpt\">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            <div class=\"col-md-8 col-sm-8 col-xs-12\">



              <div class=\"row\">

                <div class=\"col-md-12 col-sm-12 col-xs-12\">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Visitors location <small>geo-presentation</small></h2>
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
                      <div class=\"dashboard-widget-content\">
                        <div class=\"col-md-4 hidden-small\">
                          <h2 class=\"line_30\">125.7k Views from 60 countries</h2>

                          <table class=\"countries_list\">
                            <tbody>
                              <tr>
                                <td>United States</td>
                                <td class=\"fs15 fw700 text-right\">33%</td>
                              </tr>
                              <tr>
                                <td>France</td>
                                <td class=\"fs15 fw700 text-right\">27%</td>
                              </tr>
                              <tr>
                                <td>Germany</td>
                                <td class=\"fs15 fw700 text-right\">16%</td>
                              </tr>
                              <tr>
                                <td>Spain</td>
                                <td class=\"fs15 fw700 text-right\">11%</td>
                              </tr>
                              <tr>
                                <td>Britain</td>
                                <td class=\"fs15 fw700 text-right\">10%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div id=\"world-map-gdp\" class=\"col-md-8 col-sm-12 col-xs-12\" style=\"height:230px;\"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class=\"row\">


                <!-- Start to do list -->
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>To Do List <small>Sample tasks</small></h2>
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

                      <div class=\"\">
                        <ul class=\"to_do\">
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Schedule meeting with new client </p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Food truck fixie locavors mcsweeney</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Create email address for new intern</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Have IT fix the network printer</p>
                          </li>
                          <li>
                            <p>
                              <input type=\"checkbox\" class=\"flat\"> Copy backups to offsite location</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->
                
                <!-- start of weather widget -->
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                  <div class=\"x_panel\">
                    <div class=\"x_title\">
                      <h2>Daily active users <small>Sessions</small></h2>
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
                        <div class=\"col-sm-12\">
                          <div class=\"temperature\"><b>Monday</b>, 07:30 AM
                            <span>F</span>
                            <span><b>C</b></span>
                          </div>
                        </div>
                      </div>
                      <div class=\"row\">
                        <div class=\"col-sm-4\">
                          <div class=\"weather-icon\">
                            <canvas height=\"84\" width=\"84\" id=\"partly-cloudy-day\"></canvas>
                          </div>
                        </div>
                        <div class=\"col-sm-8\">
                          <div class=\"weather-text\">
                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-sm-12\">
                        <div class=\"weather-text pull-right\">
                          <h3 class=\"degrees\">23</h3>
                        </div>
                      </div>

                      <div class=\"clearfix\"></div>

                      <div class=\"row weather-days\">
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Mon</h2>
                            <h3 class=\"degrees\">25</h3>
                            <canvas id=\"clear-day\" width=\"32\" height=\"32\"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Tue</h2>
                            <h3 class=\"degrees\">25</h3>
                            <canvas height=\"32\" width=\"32\" id=\"rain\"></canvas>
                            <h5>12 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Wed</h2>
                            <h3 class=\"degrees\">27</h3>
                            <canvas height=\"32\" width=\"32\" id=\"snow\"></canvas>
                            <h5>14 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Thu</h2>
                            <h3 class=\"degrees\">28</h3>
                            <canvas height=\"32\" width=\"32\" id=\"sleet\"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Fri</h2>
                            <h3 class=\"degrees\">28</h3>
                            <canvas height=\"32\" width=\"32\" id=\"wind\"></canvas>
                            <h5>11 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"col-sm-2\">
                          <div class=\"daily-weather\">
                            <h2 class=\"day\">Sat</h2>
                            <h3 class=\"degrees\">26</h3>
                            <canvas height=\"32\" width=\"32\" id=\"cloudy\"></canvas>
                            <h5>10 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class=\"clearfix\"></div>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- end of weather widget -->
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
        
        $__internal_e702e2bcfe9886ba0e324ee6563337b24dc4caf6e57714e3e48b9335958f0821->leave($__internal_e702e2bcfe9886ba0e324ee6563337b24dc4caf6e57714e3e48b9335958f0821_prof);

    }

    // line 729
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_659531459f7877e8259b1fb0f0de9f07a8c76ecb2c1807ec2e9feabe5f9d34ff = $this->env->getExtension("native_profiler");
        $__internal_659531459f7877e8259b1fb0f0de9f07a8c76ecb2c1807ec2e9feabe5f9d34ff->enter($__internal_659531459f7877e8259b1fb0f0de9f07a8c76ecb2c1807ec2e9feabe5f9d34ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 730
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bernii/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot/date.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 757
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/flot/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- jVectorMap -->
    <script src=\"";
        // line 759
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/maps/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 761
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 762
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

    <!-- Flot -->
    <script>
      \$(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        \$(\"#canvas_dahs\").length && \$.plot(\$(\"#canvas_dahs\"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: \"#d5d5d5\",
            borderWidth: 1,
            color: '#fff'
          },
          colors: [\"rgba(38, 185, 154, 0.38)\", \"rgba(3, 88, 106, 0.38)\"],
          xaxis: {
            tickColor: \"rgba(51, 51, 51, 0.06)\",
            mode: \"time\",
            tickSize: [1, \"day\"],
            //tickLength: 10,
            axisLabel: \"Date\",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: \"rgba(51, 51, 51, 0.06)\",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- jVectorMap -->
    <script src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/maps/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 845
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/maps/jquery-jvectormap-us-aea-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 846
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/maps/gdp-data.js"), "html", null, true);
        echo "\"></script>
    <script>
      \$(document).ready(function(){
        \$('#world-map-gdp').vectorMap({
          map: 'world_mill_en',
          backgroundColor: 'transparent',
          zoomOnScroll: false,
          series: {
            regions: [{
              values: gdpData,
              scale: ['#E6F2F0', '#149B7E'],
              normalizeFunction: 'polynomial'
            }]
          },
          onRegionTipShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
    <!-- /jVectorMap -->

    <!-- Skycons -->
    <script>
      \$(document).ready(function() {
        var icons = new Skycons({
            \"color\": \"#73879C\"
          }),
          list = [
            \"clear-day\", \"clear-night\", \"partly-cloudy-day\",
            \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
            \"fog\"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      \$(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById(\"canvas1\"), {
          type: 'doughnut',
          tooltipFillColor: \"rgba(51, 51, 51, 0.55)\",
          data: {
            labels: [
              \"Symbian\",
              \"Blackberry\",
              \"Other\",
              \"Android\",
              \"IOS\"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                \"#BDC3C7\",
                \"#9B59B6\",
                \"#E74C3C\",
                \"#26B99A\",
                \"#3498DB\"
              ],
              hoverBackgroundColor: [
                \"#CFD4D8\",
                \"#B370CF\",
                \"#E95E4F\",
                \"#36CAAB\",
                \"#49A9EA\"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    <script>
      \$(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          \$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        \$('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        \$('#reportrange').daterangepicker(optionSet1, cb);
        \$('#reportrange').on('show.daterangepicker', function() {
          console.log(\"show event fired\");
        });
        \$('#reportrange').on('hide.daterangepicker', function() {
          console.log(\"hide event fired\");
        });
        \$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log(\"apply event fired, start/end dates are \" + picker.startDate.format('MMMM D, YYYY') + \" to \" + picker.endDate.format('MMMM D, YYYY'));
        });
        \$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log(\"cancel event fired\");
        });
        \$('#options1').click(function() {
          \$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        \$('#options2').click(function() {
          \$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        \$('#destroy').click(function() {
          \$('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById(\"gauge-text\"));
    </script>
";
        
        $__internal_659531459f7877e8259b1fb0f0de9f07a8c76ecb2c1807ec2e9feabe5f9d34ff->leave($__internal_659531459f7877e8259b1fb0f0de9f07a8c76ecb2c1807ec2e9feabe5f9d34ff_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  965 => 846,  961 => 845,  957 => 844,  875 => 765,  869 => 762,  865 => 761,  860 => 759,  855 => 757,  851 => 756,  847 => 755,  843 => 754,  838 => 752,  834 => 751,  830 => 750,  826 => 749,  822 => 748,  817 => 746,  812 => 744,  807 => 742,  802 => 740,  797 => 738,  792 => 736,  787 => 734,  782 => 732,  776 => 730,  770 => 729,  48 => 10,  46 => 9,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*   <div class="container body">*/
/*       <div class="main_container">*/
/*         <!-- top navigation and sidebar -->*/
/*            {% include 'menu.html.twig' %}*/
/*         */
/* */
/*         */
/*         */
/*         <!-- /top navigation and sidebar -->*/
/* */
/* */
/*         <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/* */
/*           <!-- top tiles -->*/
/*           <div class="row tile_count">*/
/*             <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">*/
/*               <span class="count_top"><i class="fa fa-user"></i> Total Users</span>*/
/*               <div class="count">2500</div>*/
/*               <span class="count_bottom"><i class="green">4% </i> From last Week</span>*/
/*             </div>*/
/*             <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">*/
/*               <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>*/
/*               <div class="count">123.50</div>*/
/*               <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>*/
/*             </div>*/
/*             <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">*/
/*               <span class="count_top"><i class="fa fa-user"></i> Total Males</span>*/
/*               <div class="count green">2,500</div>*/
/*               <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>*/
/*             </div>*/
/*             <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">*/
/*               <span class="count_top"><i class="fa fa-user"></i> Total Females</span>*/
/*               <div class="count">4,567</div>*/
/*               <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>*/
/*             </div>*/
/*             <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">*/
/*               <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>*/
/*               <div class="count">2,315</div>*/
/*               <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>*/
/*             </div>*/
/*             <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">*/
/*               <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>*/
/*               <div class="count">7,325</div>*/
/*               <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>*/
/*             </div>*/
/*           </div>*/
/*           <!-- /top tiles -->*/
/* */
/*           <div class="row">*/
/*             <div class="col-md-12 col-sm-12 col-xs-12">*/
/*               <div class="dashboard_graph">*/
/* */
/*                 <div class="row x_title">*/
/*                   <div class="col-md-6">*/
/*                     <h3>Network Activities <small>Graph title sub-title</small></h3>*/
/*                   </div>*/
/*                   <div class="col-md-6">*/
/*                     <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">*/
/*                       <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>*/
/*                       <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-9 col-sm-9 col-xs-12">*/
/*                   <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>*/
/*                   <div style="width: 100%;">*/
/*                     <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-3 col-sm-3 col-xs-12 bg-white">*/
/*                   <div class="x_title">*/
/*                     <h2>Top Campaign Performance</h2>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/* */
/*                   <div class="col-md-12 col-sm-12 col-xs-6">*/
/*                     <div>*/
/*                       <p>Facebook Campaign</p>*/
/*                       <div class="">*/
/*                         <div class="progress progress_sm" style="width: 76%;">*/
/*                           <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div>*/
/*                       <p>Twitter Campaign</p>*/
/*                       <div class="">*/
/*                         <div class="progress progress_sm" style="width: 76%;">*/
/*                           <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="col-md-12 col-sm-12 col-xs-6">*/
/*                     <div>*/
/*                       <p>Conventional Media</p>*/
/*                       <div class="">*/
/*                         <div class="progress progress_sm" style="width: 76%;">*/
/*                           <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div>*/
/*                       <p>Bill boards</p>*/
/*                       <div class="">*/
/*                         <div class="progress progress_sm" style="width: 76%;">*/
/*                           <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="clearfix"></div>*/
/*               </div>*/
/*             </div>*/
/* */
/*           </div>*/
/*           <br />*/
/* */
/*           <div class="row">*/
/* */
/* */
/*             <div class="col-md-4 col-sm-4 col-xs-12">*/
/*               <div class="x_panel tile fixed_height_320">*/
/*                 <div class="x_title">*/
/*                   <h2>App Versions</h2>*/
/*                   <ul class="nav navbar-right panel_toolbox">*/
/*                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Settings 1</a>*/
/*                         </li>*/
/*                         <li><a href="#">Settings 2</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </li>*/
/*                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                     </li>*/
/*                   </ul>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                   <h4>App Usage across versions</h4>*/
/*                   <div class="widget_summary">*/
/*                     <div class="w_left w_25">*/
/*                       <span>0.1.5.2</span>*/
/*                     </div>*/
/*                     <div class="w_center w_55">*/
/*                       <div class="progress">*/
/*                         <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">*/
/*                           <span class="sr-only">60% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="w_right w_20">*/
/*                       <span>123k</span>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/* */
/*                   <div class="widget_summary">*/
/*                     <div class="w_left w_25">*/
/*                       <span>0.1.5.3</span>*/
/*                     </div>*/
/*                     <div class="w_center w_55">*/
/*                       <div class="progress">*/
/*                         <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">*/
/*                           <span class="sr-only">60% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="w_right w_20">*/
/*                       <span>53k</span>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/*                   <div class="widget_summary">*/
/*                     <div class="w_left w_25">*/
/*                       <span>0.1.5.4</span>*/
/*                     </div>*/
/*                     <div class="w_center w_55">*/
/*                       <div class="progress">*/
/*                         <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">*/
/*                           <span class="sr-only">60% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="w_right w_20">*/
/*                       <span>23k</span>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/*                   <div class="widget_summary">*/
/*                     <div class="w_left w_25">*/
/*                       <span>0.1.5.5</span>*/
/*                     </div>*/
/*                     <div class="w_center w_55">*/
/*                       <div class="progress">*/
/*                         <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">*/
/*                           <span class="sr-only">60% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="w_right w_20">*/
/*                       <span>3k</span>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/*                   <div class="widget_summary">*/
/*                     <div class="w_left w_25">*/
/*                       <span>0.1.5.6</span>*/
/*                     </div>*/
/*                     <div class="w_center w_55">*/
/*                       <div class="progress">*/
/*                         <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">*/
/*                           <span class="sr-only">60% Complete</span>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="w_right w_20">*/
/*                       <span>1k</span>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                   </div>*/
/* */
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-4 col-sm-4 col-xs-12">*/
/*               <div class="x_panel tile fixed_height_320 overflow_hidden">*/
/*                 <div class="x_title">*/
/*                   <h2>Device Usage</h2>*/
/*                   <ul class="nav navbar-right panel_toolbox">*/
/*                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Settings 1</a>*/
/*                         </li>*/
/*                         <li><a href="#">Settings 2</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </li>*/
/*                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                     </li>*/
/*                   </ul>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                   <table class="" style="width:100%">*/
/*                     <tr>*/
/*                       <th style="width:37%;">*/
/*                         <p>Top 5</p>*/
/*                       </th>*/
/*                       <th>*/
/*                         <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">*/
/*                           <p class="">Device</p>*/
/*                         </div>*/
/*                         <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">*/
/*                           <p class="">Progress</p>*/
/*                         </div>*/
/*                       </th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <td>*/
/*                         <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>*/
/*                       </td>*/
/*                       <td>*/
/*                         <table class="tile_info">*/
/*                           <tr>*/
/*                             <td>*/
/*                               <p><i class="fa fa-square blue"></i>IOS </p>*/
/*                             </td>*/
/*                             <td>30%</td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <td>*/
/*                               <p><i class="fa fa-square green"></i>Android </p>*/
/*                             </td>*/
/*                             <td>10%</td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <td>*/
/*                               <p><i class="fa fa-square purple"></i>Blackberry </p>*/
/*                             </td>*/
/*                             <td>20%</td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <td>*/
/*                               <p><i class="fa fa-square aero"></i>Symbian </p>*/
/*                             </td>*/
/*                             <td>15%</td>*/
/*                           </tr>*/
/*                           <tr>*/
/*                             <td>*/
/*                               <p><i class="fa fa-square red"></i>Others </p>*/
/*                             </td>*/
/*                             <td>30%</td>*/
/*                           </tr>*/
/*                         </table>*/
/*                       </td>*/
/*                     </tr>*/
/*                   </table>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="col-md-4 col-sm-4 col-xs-12">*/
/*               <div class="x_panel tile fixed_height_320">*/
/*                 <div class="x_title">*/
/*                   <h2>Quick Settings</h2>*/
/*                   <ul class="nav navbar-right panel_toolbox">*/
/*                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Settings 1</a>*/
/*                         </li>*/
/*                         <li><a href="#">Settings 2</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </li>*/
/*                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                     </li>*/
/*                   </ul>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                   <div class="dashboard-widget-content">*/
/*                     <ul class="quick-list">*/
/*                       <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>*/
/*                       </li>*/
/*                       <li><i class="fa fa-bars"></i><a href="#">Subscription</a>*/
/*                       </li>*/
/*                       <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>*/
/*                       <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>*/
/*                       </li>*/
/*                       <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>*/
/*                       <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>*/
/*                       </li>*/
/*                       <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>*/
/*                       </li>*/
/*                     </ul>*/
/* */
/*                     <div class="sidebar-widget">*/
/*                       <h4>Profile Completion</h4>*/
/*                       <canvas width="150" height="80" id="foo" class="" style="width: 160px; height: 100px;"></canvas>*/
/*                       <div class="goal-wrapper">*/
/*                         <span class="gauge-value pull-left">$</span>*/
/*                         <span id="gauge-text" class="gauge-value pull-left">3,200</span>*/
/*                         <span id="goal-text" class="goal-value pull-right">$5,000</span>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*           </div>*/
/* */
/* */
/*           <div class="row">*/
/*             <div class="col-md-4 col-sm-4 col-xs-12">*/
/*               <div class="x_panel">*/
/*                 <div class="x_title">*/
/*                   <h2>Recent Activities <small>Sessions</small></h2>*/
/*                   <ul class="nav navbar-right panel_toolbox">*/
/*                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                       <ul class="dropdown-menu" role="menu">*/
/*                         <li><a href="#">Settings 1</a>*/
/*                         </li>*/
/*                         <li><a href="#">Settings 2</a>*/
/*                         </li>*/
/*                       </ul>*/
/*                     </li>*/
/*                     <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                     </li>*/
/*                   </ul>*/
/*                   <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="x_content">*/
/*                   <div class="dashboard-widget-content">*/
/* */
/*                     <ul class="list-unstyled timeline widget">*/
/*                       <li>*/
/*                         <div class="block">*/
/*                           <div class="block_content">*/
/*                             <h2 class="title">*/
/*                                               <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>*/
/*                                           </h2>*/
/*                             <div class="byline">*/
/*                               <span>13 hours ago</span> by <a>Jane Smith</a>*/
/*                             </div>*/
/*                             <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>*/
/*                             </p>*/
/*                           </div>*/
/*                         </div>*/
/*                       </li>*/
/*                       <li>*/
/*                         <div class="block">*/
/*                           <div class="block_content">*/
/*                             <h2 class="title">*/
/*                                               <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>*/
/*                                           </h2>*/
/*                             <div class="byline">*/
/*                               <span>13 hours ago</span> by <a>Jane Smith</a>*/
/*                             </div>*/
/*                             <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>*/
/*                             </p>*/
/*                           </div>*/
/*                         </div>*/
/*                       </li>*/
/*                       <li>*/
/*                         <div class="block">*/
/*                           <div class="block_content">*/
/*                             <h2 class="title">*/
/*                                               <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>*/
/*                                           </h2>*/
/*                             <div class="byline">*/
/*                               <span>13 hours ago</span> by <a>Jane Smith</a>*/
/*                             </div>*/
/*                             <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>*/
/*                             </p>*/
/*                           </div>*/
/*                         </div>*/
/*                       </li>*/
/*                       <li>*/
/*                         <div class="block">*/
/*                           <div class="block_content">*/
/*                             <h2 class="title">*/
/*                                               <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>*/
/*                                           </h2>*/
/*                             <div class="byline">*/
/*                               <span>13 hours ago</span> by <a>Jane Smith</a>*/
/*                             </div>*/
/*                             <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>*/
/*                             </p>*/
/*                           </div>*/
/*                         </div>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/* */
/*             <div class="col-md-8 col-sm-8 col-xs-12">*/
/* */
/* */
/* */
/*               <div class="row">*/
/* */
/*                 <div class="col-md-12 col-sm-12 col-xs-12">*/
/*                   <div class="x_panel">*/
/*                     <div class="x_title">*/
/*                       <h2>Visitors location <small>geo-presentation</small></h2>*/
/*                       <ul class="nav navbar-right panel_toolbox">*/
/*                         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                           <ul class="dropdown-menu" role="menu">*/
/*                             <li><a href="#">Settings 1</a>*/
/*                             </li>*/
/*                             <li><a href="#">Settings 2</a>*/
/*                             </li>*/
/*                           </ul>*/
/*                         </li>*/
/*                         <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                         </li>*/
/*                       </ul>*/
/*                       <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="x_content">*/
/*                       <div class="dashboard-widget-content">*/
/*                         <div class="col-md-4 hidden-small">*/
/*                           <h2 class="line_30">125.7k Views from 60 countries</h2>*/
/* */
/*                           <table class="countries_list">*/
/*                             <tbody>*/
/*                               <tr>*/
/*                                 <td>United States</td>*/
/*                                 <td class="fs15 fw700 text-right">33%</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <td>France</td>*/
/*                                 <td class="fs15 fw700 text-right">27%</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <td>Germany</td>*/
/*                                 <td class="fs15 fw700 text-right">16%</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <td>Spain</td>*/
/*                                 <td class="fs15 fw700 text-right">11%</td>*/
/*                               </tr>*/
/*                               <tr>*/
/*                                 <td>Britain</td>*/
/*                                 <td class="fs15 fw700 text-right">10%</td>*/
/*                               </tr>*/
/*                             </tbody>*/
/*                           </table>*/
/*                         </div>*/
/*                         <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/* */
/*               </div>*/
/*               <div class="row">*/
/* */
/* */
/*                 <!-- Start to do list -->*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                   <div class="x_panel">*/
/*                     <div class="x_title">*/
/*                       <h2>To Do List <small>Sample tasks</small></h2>*/
/*                       <ul class="nav navbar-right panel_toolbox">*/
/*                         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                           <ul class="dropdown-menu" role="menu">*/
/*                             <li><a href="#">Settings 1</a>*/
/*                             </li>*/
/*                             <li><a href="#">Settings 2</a>*/
/*                             </li>*/
/*                           </ul>*/
/*                         </li>*/
/*                         <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                         </li>*/
/*                       </ul>*/
/*                       <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="x_content">*/
/* */
/*                       <div class="">*/
/*                         <ul class="to_do">*/
/*                           <li>*/
/*                             <p>*/
/*                               <input type="checkbox" class="flat"> Schedule meeting with new client </p>*/
/*                           </li>*/
/*                           <li>*/
/*                             <p>*/
/*                               <input type="checkbox" class="flat"> Create email address for new intern</p>*/
/*                           </li>*/
/*                           <li>*/
/*                             <p>*/
/*                               <input type="checkbox" class="flat"> Have IT fix the network printer</p>*/
/*                           </li>*/
/*                           <li>*/
/*                             <p>*/
/*                               <input type="checkbox" class="flat"> Copy backups to offsite location</p>*/
/*                           </li>*/
/*                           <li>*/
/*                             <p>*/
/*                               <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>*/
/*                           </li>*/
/*                           <li>*/
/*                             <p>*/
/*                               <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>*/
/*                           </li>*/
/*                           <li>*/
/*                             <p>*/
/*                               <input type="checkbox" class="flat"> Create email address for new intern</p>*/
/*                           </li>*/
/*                           <li>*/
/*                             <p>*/
/*                               <input type="checkbox" class="flat"> Have IT fix the network printer</p>*/
/*                           </li>*/
/*                           <li>*/
/*                             <p>*/
/*                               <input type="checkbox" class="flat"> Copy backups to offsite location</p>*/
/*                           </li>*/
/*                         </ul>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <!-- End to do list -->*/
/*                 */
/*                 <!-- start of weather widget -->*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                   <div class="x_panel">*/
/*                     <div class="x_title">*/
/*                       <h2>Daily active users <small>Sessions</small></h2>*/
/*                       <ul class="nav navbar-right panel_toolbox">*/
/*                         <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>*/
/*                           <ul class="dropdown-menu" role="menu">*/
/*                             <li><a href="#">Settings 1</a>*/
/*                             </li>*/
/*                             <li><a href="#">Settings 2</a>*/
/*                             </li>*/
/*                           </ul>*/
/*                         </li>*/
/*                         <li><a class="close-link"><i class="fa fa-close"></i></a>*/
/*                         </li>*/
/*                       </ul>*/
/*                       <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="x_content">*/
/*                       <div class="row">*/
/*                         <div class="col-sm-12">*/
/*                           <div class="temperature"><b>Monday</b>, 07:30 AM*/
/*                             <span>F</span>*/
/*                             <span><b>C</b></span>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="row">*/
/*                         <div class="col-sm-4">*/
/*                           <div class="weather-icon">*/
/*                             <canvas height="84" width="84" id="partly-cloudy-day"></canvas>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="col-sm-8">*/
/*                           <div class="weather-text">*/
/*                             <h2>Texas <br><i>Partly Cloudy Day</i></h2>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="col-sm-12">*/
/*                         <div class="weather-text pull-right">*/
/*                           <h3 class="degrees">23</h3>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                       <div class="clearfix"></div>*/
/* */
/*                       <div class="row weather-days">*/
/*                         <div class="col-sm-2">*/
/*                           <div class="daily-weather">*/
/*                             <h2 class="day">Mon</h2>*/
/*                             <h3 class="degrees">25</h3>*/
/*                             <canvas id="clear-day" width="32" height="32"></canvas>*/
/*                             <h5>15 <i>km/h</i></h5>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                           <div class="daily-weather">*/
/*                             <h2 class="day">Tue</h2>*/
/*                             <h3 class="degrees">25</h3>*/
/*                             <canvas height="32" width="32" id="rain"></canvas>*/
/*                             <h5>12 <i>km/h</i></h5>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                           <div class="daily-weather">*/
/*                             <h2 class="day">Wed</h2>*/
/*                             <h3 class="degrees">27</h3>*/
/*                             <canvas height="32" width="32" id="snow"></canvas>*/
/*                             <h5>14 <i>km/h</i></h5>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                           <div class="daily-weather">*/
/*                             <h2 class="day">Thu</h2>*/
/*                             <h3 class="degrees">28</h3>*/
/*                             <canvas height="32" width="32" id="sleet"></canvas>*/
/*                             <h5>15 <i>km/h</i></h5>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                           <div class="daily-weather">*/
/*                             <h2 class="day">Fri</h2>*/
/*                             <h3 class="degrees">28</h3>*/
/*                             <canvas height="32" width="32" id="wind"></canvas>*/
/*                             <h5>11 <i>km/h</i></h5>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="col-sm-2">*/
/*                           <div class="daily-weather">*/
/*                             <h2 class="day">Sat</h2>*/
/*                             <h3 class="degrees">26</h3>*/
/*                             <canvas height="32" width="32" id="cloudy"></canvas>*/
/*                             <h5>10 <i>km/h</i></h5>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/* */
/*                 </div>*/
/*                 <!-- end of weather widget -->*/
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
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/* <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>*/
/*     <!-- Bootstrap -->*/
/*     <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>*/
/*     <!-- NProgress -->*/
/*     <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>*/
/*     <!-- Chart.js -->*/
/*     <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>*/
/*     <!-- gauge.js -->*/
/*     <script src="{{asset('vendors/bernii/gauge.js/dist/gauge.min.js')}}"></script>*/
/*     <!-- bootstrap-progressbar -->*/
/*     <script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>*/
/*     <!-- iCheck -->*/
/*     <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>*/
/*     <!-- Skycons -->*/
/*     <script src="{{asset('vendors/skycons/skycons.js')}}"></script>*/
/*     <!-- Flot -->*/
/*     <script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>*/
/*     <script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>*/
/*     <script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>*/
/*     <script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>*/
/*     <script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>*/
/*     <!-- Flot plugins -->*/
/*     <script src="{{asset('js/flot/jquery.flot.orderBars.js')}}"></script>*/
/*     <script src="{{asset('js/flot/date.js')}}"></script>*/
/*     <script src="{{asset('js/flot/jquery.flot.spline.js')}}"></script>*/
/*     <script src="{{asset('js/flot/curvedLines.js')}}"></script>*/
/*     <!-- jVectorMap -->*/
/*     <script src="{{asset('js/maps/jquery-jvectormap-2.0.3.min.js')}}"></script>*/
/*     <!-- bootstrap-daterangepicker -->*/
/*     <script src="{{asset('js/moment/moment.min.js')}}"></script>*/
/*     <script src="{{asset('js/datepicker/daterangepicker.js')}}"></script>*/
/* */
/*     <!-- Custom Theme Scripts -->*/
/*     <script src="{{asset('js/custom.js')}}"></script>*/
/* */
/*     <!-- Flot -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         var data1 = [*/
/*           [gd(2012, 1, 1), 17],*/
/*           [gd(2012, 1, 2), 74],*/
/*           [gd(2012, 1, 3), 6],*/
/*           [gd(2012, 1, 4), 39],*/
/*           [gd(2012, 1, 5), 20],*/
/*           [gd(2012, 1, 6), 85],*/
/*           [gd(2012, 1, 7), 7]*/
/*         ];*/
/* */
/*         var data2 = [*/
/*           [gd(2012, 1, 1), 82],*/
/*           [gd(2012, 1, 2), 23],*/
/*           [gd(2012, 1, 3), 66],*/
/*           [gd(2012, 1, 4), 9],*/
/*           [gd(2012, 1, 5), 119],*/
/*           [gd(2012, 1, 6), 6],*/
/*           [gd(2012, 1, 7), 9]*/
/*         ];*/
/*         $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [*/
/*           data1, data2*/
/*         ], {*/
/*           series: {*/
/*             lines: {*/
/*               show: false,*/
/*               fill: true*/
/*             },*/
/*             splines: {*/
/*               show: true,*/
/*               tension: 0.4,*/
/*               lineWidth: 1,*/
/*               fill: 0.4*/
/*             },*/
/*             points: {*/
/*               radius: 0,*/
/*               show: true*/
/*             },*/
/*             shadowSize: 2*/
/*           },*/
/*           grid: {*/
/*             verticalLines: true,*/
/*             hoverable: true,*/
/*             clickable: true,*/
/*             tickColor: "#d5d5d5",*/
/*             borderWidth: 1,*/
/*             color: '#fff'*/
/*           },*/
/*           colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],*/
/*           xaxis: {*/
/*             tickColor: "rgba(51, 51, 51, 0.06)",*/
/*             mode: "time",*/
/*             tickSize: [1, "day"],*/
/*             //tickLength: 10,*/
/*             axisLabel: "Date",*/
/*             axisLabelUseCanvas: true,*/
/*             axisLabelFontSizePixels: 12,*/
/*             axisLabelFontFamily: 'Verdana, Arial',*/
/*             axisLabelPadding: 10*/
/*           },*/
/*           yaxis: {*/
/*             ticks: 8,*/
/*             tickColor: "rgba(51, 51, 51, 0.06)",*/
/*           },*/
/*           tooltip: false*/
/*         });*/
/* */
/*         function gd(year, month, day) {*/
/*           return new Date(year, month - 1, day).getTime();*/
/*         }*/
/*       });*/
/*     </script>*/
/*     <!-- /Flot -->*/
/* */
/*     <!-- jVectorMap -->*/
/*     <script src="{{asset('js/maps/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*     <script src="{{asset('js/maps/jquery-jvectormap-us-aea-en.js')}}"></script>*/
/*     <script src="{{asset('js/maps/gdp-data.js')}}"></script>*/
/*     <script>*/
/*       $(document).ready(function(){*/
/*         $('#world-map-gdp').vectorMap({*/
/*           map: 'world_mill_en',*/
/*           backgroundColor: 'transparent',*/
/*           zoomOnScroll: false,*/
/*           series: {*/
/*             regions: [{*/
/*               values: gdpData,*/
/*               scale: ['#E6F2F0', '#149B7E'],*/
/*               normalizeFunction: 'polynomial'*/
/*             }]*/
/*           },*/
/*           onRegionTipShow: function(e, el, code) {*/
/*             el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');*/
/*           }*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /jVectorMap -->*/
/* */
/*     <!-- Skycons -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         var icons = new Skycons({*/
/*             "color": "#73879C"*/
/*           }),*/
/*           list = [*/
/*             "clear-day", "clear-night", "partly-cloudy-day",*/
/*             "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",*/
/*             "fog"*/
/*           ],*/
/*           i;*/
/* */
/*         for (i = list.length; i--;)*/
/*           icons.set(list[i], list[i]);*/
/* */
/*         icons.play();*/
/*       });*/
/*     </script>*/
/*     <!-- /Skycons -->*/
/* */
/*     <!-- Doughnut Chart -->*/
/*     <script>*/
/*       $(document).ready(function(){*/
/*         var options = {*/
/*           legend: false,*/
/*           responsive: false*/
/*         };*/
/* */
/*         new Chart(document.getElementById("canvas1"), {*/
/*           type: 'doughnut',*/
/*           tooltipFillColor: "rgba(51, 51, 51, 0.55)",*/
/*           data: {*/
/*             labels: [*/
/*               "Symbian",*/
/*               "Blackberry",*/
/*               "Other",*/
/*               "Android",*/
/*               "IOS"*/
/*             ],*/
/*             datasets: [{*/
/*               data: [15, 20, 30, 10, 30],*/
/*               backgroundColor: [*/
/*                 "#BDC3C7",*/
/*                 "#9B59B6",*/
/*                 "#E74C3C",*/
/*                 "#26B99A",*/
/*                 "#3498DB"*/
/*               ],*/
/*               hoverBackgroundColor: [*/
/*                 "#CFD4D8",*/
/*                 "#B370CF",*/
/*                 "#E95E4F",*/
/*                 "#36CAAB",*/
/*                 "#49A9EA"*/
/*               ]*/
/*             }]*/
/*           },*/
/*           options: options*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /Doughnut Chart -->*/
/*     */
/*     <!-- bootstrap-daterangepicker -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/* */
/*         var cb = function(start, end, label) {*/
/*           console.log(start.toISOString(), end.toISOString(), label);*/
/*           $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));*/
/*         };*/
/* */
/*         var optionSet1 = {*/
/*           startDate: moment().subtract(29, 'days'),*/
/*           endDate: moment(),*/
/*           minDate: '01/01/2012',*/
/*           maxDate: '12/31/2015',*/
/*           dateLimit: {*/
/*             days: 60*/
/*           },*/
/*           showDropdowns: true,*/
/*           showWeekNumbers: true,*/
/*           timePicker: false,*/
/*           timePickerIncrement: 1,*/
/*           timePicker12Hour: true,*/
/*           ranges: {*/
/*             'Today': [moment(), moment()],*/
/*             'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],*/
/*             'Last 7 Days': [moment().subtract(6, 'days'), moment()],*/
/*             'Last 30 Days': [moment().subtract(29, 'days'), moment()],*/
/*             'This Month': [moment().startOf('month'), moment().endOf('month')],*/
/*             'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]*/
/*           },*/
/*           opens: 'left',*/
/*           buttonClasses: ['btn btn-default'],*/
/*           applyClass: 'btn-small btn-primary',*/
/*           cancelClass: 'btn-small',*/
/*           format: 'MM/DD/YYYY',*/
/*           separator: ' to ',*/
/*           locale: {*/
/*             applyLabel: 'Submit',*/
/*             cancelLabel: 'Clear',*/
/*             fromLabel: 'From',*/
/*             toLabel: 'To',*/
/*             customRangeLabel: 'Custom',*/
/*             daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],*/
/*             monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],*/
/*             firstDay: 1*/
/*           }*/
/*         };*/
/*         $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));*/
/*         $('#reportrange').daterangepicker(optionSet1, cb);*/
/*         $('#reportrange').on('show.daterangepicker', function() {*/
/*           console.log("show event fired");*/
/*         });*/
/*         $('#reportrange').on('hide.daterangepicker', function() {*/
/*           console.log("hide event fired");*/
/*         });*/
/*         $('#reportrange').on('apply.daterangepicker', function(ev, picker) {*/
/*           console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));*/
/*         });*/
/*         $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {*/
/*           console.log("cancel event fired");*/
/*         });*/
/*         $('#options1').click(function() {*/
/*           $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);*/
/*         });*/
/*         $('#options2').click(function() {*/
/*           $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);*/
/*         });*/
/*         $('#destroy').click(function() {*/
/*           $('#reportrange').data('daterangepicker').remove();*/
/*         });*/
/*       });*/
/*     </script>*/
/*     <!-- /bootstrap-daterangepicker -->*/
/* */
/*     <!-- gauge.js -->*/
/*     <script>*/
/*       var opts = {*/
/*           lines: 12,*/
/*           angle: 0,*/
/*           lineWidth: 0.4,*/
/*           pointer: {*/
/*               length: 0.75,*/
/*               strokeWidth: 0.042,*/
/*               color: '#1D212A'*/
/*           },*/
/*           limitMax: 'false',*/
/*           colorStart: '#1ABC9C',*/
/*           colorStop: '#1ABC9C',*/
/*           strokeColor: '#F0F3F3',*/
/*           generateGradient: true*/
/*       };*/
/*       var target = document.getElementById('foo'),*/
/*           gauge = new Gauge(target).setOptions(opts);*/
/* */
/*       gauge.maxValue = 6000;*/
/*       gauge.animationSpeed = 32;*/
/*       gauge.set(3200);*/
/*       gauge.setTextField(document.getElementById("gauge-text"));*/
/*     </script>*/
/* {% endblock %}*/
