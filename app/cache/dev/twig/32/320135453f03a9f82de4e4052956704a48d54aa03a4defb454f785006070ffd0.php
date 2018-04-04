<?php

/* AdminBundle:Dashboard:list.html.twig */
class __TwigTemplate_5394d8af25021a1834386a250508d5a97ac044d422ce56e73c5d515882a1c689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Dashboard:list.html.twig"));

        // line 1
        $this->displayBlock('list', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_list($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 2
        echo "
    <!-- Main content -->
    <div class=\"content-wrapper\">

        <!-- Page header -->
        <div class=\"page-header page-header-default\">
            <div class=\"page-header-content\">
                <div class=\"page-title\">
                    <h4><i class=\"icon-arrow-left52 position-left\"></i> <span class=\"text-semibold\">Home</span> - Dashboard</h4>
                </div>

                <div class=\"heading-elements\">
                    <div class=\"heading-btn-group\">
                        <a href=\"#\" class=\"btn btn-link btn-float has-text\"><i class=\"icon-bars-alt text-primary\"></i><span>Statistics</span></a>
                        <a href=\"#\" class=\"btn btn-link btn-float has-text\"><i class=\"icon-calculator text-primary\"></i> <span>Invoices</span></a>
                        <a href=\"#\" class=\"btn btn-link btn-float has-text\"><i class=\"icon-calendar5 text-primary\"></i> <span>Schedule</span></a>
                    </div>
                </div>
            </div>

            <div class=\"breadcrumb-line\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"index.html\"><i class=\"icon-home2 position-left\"></i> Home</a></li>
                    <li class=\"active\">Dashboard</li>
                </ul>

                <ul class=\"breadcrumb-elements\">
                    <li><a href=\"#\"><i class=\"icon-comment-discussion position-left\"></i> Support</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"icon-gear position-left\"></i>
                            Settings
                            <span class=\"caret\"></span>
                        </a>

                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li><a href=\"#\"><i class=\"icon-user-lock\"></i> Account security</a></li>
                            <li><a href=\"#\"><i class=\"icon-statistics\"></i> Analytics</a></li>
                            <li><a href=\"#\"><i class=\"icon-accessibility\"></i> Accessibility</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\"><i class=\"icon-gear\"></i> All settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class=\"content\">

            <!-- Main charts -->
            <div class=\"row\">
                <div class=\"col-lg-7\">

                    <!-- Traffic sources -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Traffic sources</h6>
                            <div class=\"heading-elements\">
                                <form class=\"heading-form\" action=\"#\">
                                    <div class=\"form-group\">
                                        <label class=\"checkbox-inline checkbox-switchery checkbox-right switchery-xs\">
                                            <input type=\"checkbox\" class=\"switch\" checked=\"checked\">
                                            Live update:
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    <ul class=\"list-inline text-center\">
                                        <li>
                                            <a href=\"#\" class=\"btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom\"><i class=\"icon-plus3\"></i></a>
                                        </li>
                                        <li class=\"text-left\">
                                            <div class=\"text-semibold\">New visitors</div>
                                            <div class=\"text-muted\">2,349 avg</div>
                                        </li>
                                    </ul>

                                    <div class=\"col-lg-10 col-lg-offset-1\">
                                        <div class=\"content-group\" id=\"new-visitors\"></div>
                                    </div>
                                </div>

                                <div class=\"col-lg-4\">
                                    <ul class=\"list-inline text-center\">
                                        <li>
                                            <a href=\"#\" class=\"btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom\"><i class=\"icon-watch2\"></i></a>
                                        </li>
                                        <li class=\"text-left\">
                                            <div class=\"text-semibold\">New sessions</div>
                                            <div class=\"text-muted\">08:20 avg</div>
                                        </li>
                                    </ul>

                                    <div class=\"col-lg-10 col-lg-offset-1\">
                                        <div class=\"content-group\" id=\"new-sessions\"></div>
                                    </div>
                                </div>

                                <div class=\"col-lg-4\">
                                    <ul class=\"list-inline text-center\">
                                        <li>
                                            <a href=\"#\" class=\"btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom\"><i class=\"icon-people\"></i></a>
                                        </li>
                                        <li class=\"text-left\">
                                            <div class=\"text-semibold\">Total online</div>
                                            <div class=\"text-muted\"><span class=\"status-mark border-success position-left\"></span> 5,378 avg</div>
                                        </li>
                                    </ul>

                                    <div class=\"col-lg-10 col-lg-offset-1\">
                                        <div class=\"content-group\" id=\"total-online\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"position-relative\" id=\"traffic-sources\"></div>
                    </div>
                    <!-- /traffic sources -->

                </div>

                <div class=\"col-lg-5\">

                    <!-- Sales stats -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Sales statistics</h6>
                            <div class=\"heading-elements\">
                                <form class=\"heading-form\" action=\"#\">
                                    <div class=\"form-group\">
                                        <select class=\"change-date select-sm\" id=\"select_date\">
                                            <optgroup label=\"<i class='icon-watch pull-right'></i> Time period\">
                                                <option value=\"val1\">June, 29 - July, 5</option>
                                                <option value=\"val2\">June, 22 - June 28</option>
                                                <option value=\"val3\" selected=\"selected\">June, 15 - June, 21</option>
                                                <option value=\"val4\">June, 8 - June, 14</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class=\"container-fluid\">
                            <div class=\"row text-center\">
                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h5 class=\"text-semibold no-margin\"><i class=\"icon-calendar5 position-left text-slate\"></i> 5,689</h5>
                                        <span class=\"text-muted text-size-small\">orders weekly</span>
                                    </div>
                                </div>

                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h5 class=\"text-semibold no-margin\"><i class=\"icon-calendar52 position-left text-slate\"></i> 32,568</h5>
                                        <span class=\"text-muted text-size-small\">orders monthly</span>
                                    </div>
                                </div>

                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h5 class=\"text-semibold no-margin\"><i class=\"icon-cash3 position-left text-slate\"></i> \$23,464</h5>
                                        <span class=\"text-muted text-size-small\">average revenue</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"content-group-sm\" id=\"app_sales\"></div>
                        <div id=\"monthly-sales-stats\"></div>
                    </div>
                    <!-- /sales stats -->

                </div>
            </div>
            <!-- /main charts -->


            <!-- Dashboard content -->
            <div class=\"row\">
                <div class=\"col-lg-8\">

                    <!-- Marketing campaigns -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Marketing campaigns</h6>
                            <div class=\"heading-elements\">
                                <span class=\"label bg-success heading-text\">28 active</span>
                                <ul class=\"icons-list\">
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i> <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                            <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                            <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                            <li class=\"divider\"></li>
                                            <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-lg text-nowrap\">
                                <tbody>
                                <tr>
                                    <td class=\"col-md-5\">
                                        <div class=\"media-left\">
                                            <div id=\"campaigns-donut\"></div>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">38,289 <small class=\"text-success text-size-base\"><i class=\"icon-arrow-up12\"></i> (+16.2%)</small></h5>
                                            <ul class=\"list-inline list-inline-condensed no-margin\">
                                                <li>
                                                    <span class=\"status-mark border-success\"></span>
                                                </li>
                                                <li>
                                                    <span class=\"text-muted\">May 12, 12:30 am</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                    <td class=\"col-md-5\">
                                        <div class=\"media-left\">
                                            <div id=\"campaign-status-pie\"></div>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">2,458 <small class=\"text-danger text-size-base\"><i class=\"icon-arrow-down12\"></i> (- 4.9%)</small></h5>
                                            <ul class=\"list-inline list-inline-condensed no-margin\">
                                                <li>
                                                    <span class=\"status-mark border-danger\"></span>
                                                </li>
                                                <li>
                                                    <span class=\"text-muted\">Jun 4, 4:00 am</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                    <td class=\"text-right col-md-2\">
                                        <a href=\"#\" class=\"btn bg-indigo-300\"><i class=\"icon-statistics position-left\"></i> View report</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table text-nowrap\">
                                <thead>
                                <tr>
                                    <th>Campaign</th>
                                    <th class=\"col-md-2\">Client</th>
                                    <th class=\"col-md-2\">Changes</th>
                                    <th class=\"col-md-2\">Budget</th>
                                    <th class=\"col-md-2\">Status</th>
                                    <th class=\"text-center\" style=\"width: 20px;\"><i class=\"icon-arrow-down12\"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class=\"active border-double\">
                                    <td colspan=\"5\">Today</td>
                                    <td class=\"text-right\">
                                        <span class=\"progress-meter\" id=\"today-progress\" data-progress=\"30\"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            ";
        // line 285
        echo "                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Facebook</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-blue position-left\"></span>
                                                02:00 - 03:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Mintlime</span></td>
                                    <td><span class=\"text-success-600\"><i class=\"icon-stats-growth2 position-left\"></i> 2.43%</span></td>
                                    <td><h6 class=\"text-semibold\">\$5,489</h6></td>
                                    <td><span class=\"label bg-blue\">Active</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            ";
        // line 317
        echo "                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Youtube videos</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-danger position-left\"></span>
                                                13:00 - 14:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">CDsoft</span></td>
                                    <td><span class=\"text-success-600\"><i class=\"icon-stats-growth2 position-left\"></i> 3.12%</span></td>
                                    <td><h6 class=\"text-semibold\">\$2,592</h6></td>
                                    <td><span class=\"label bg-danger\">Closed</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            ";
        // line 349
        echo "                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Spotify ads</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-grey-400 position-left\"></span>
                                                10:00 - 11:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Diligence</span></td>
                                    <td><span class=\"text-danger\"><i class=\"icon-stats-decline2 position-left\"></i> - 8.02%</span></td>
                                    <td><h6 class=\"text-semibold\">\$1,268</h6></td>
                                    <td><span class=\"label bg-grey-400\">Hold</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            ";
        // line 381
        echo "                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Twitter ads</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-grey-400 position-left\"></span>
                                                04:00 - 05:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Deluxe</span></td>
                                    <td><span class=\"text-success-600\"><i class=\"icon-stats-growth2 position-left\"></i> 2.78%</span></td>
                                    <td><h6 class=\"text-semibold\">\$7,467</h6></td>
                                    <td><span class=\"label bg-grey-400\">Hold</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr class=\"active border-double\">
                                    <td colspan=\"5\">Yesterday</td>
                                    <td class=\"text-right\">
                                        <span class=\"progress-meter\" id=\"yesterday-progress\" data-progress=\"65\"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            ";
        // line 420
        echo "                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Bing campaign</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-success position-left\"></span>
                                                15:00 - 16:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Metrics</span></td>
                                    <td><span class=\"text-danger\"><i class=\"icon-stats-decline2 position-left\"></i> - 5.78%</span></td>
                                    <td><h6 class=\"text-semibold\">\$970</h6></td>
                                    <td><span class=\"label bg-success-400\">Pending</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropup\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            ";
        // line 452
        echo "                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Amazon ads</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-danger position-left\"></span>
                                                18:00 - 19:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Blueish</span></td>
                                    <td><span class=\"text-success-600\"><i class=\"icon-stats-growth2 position-left\"></i> 6.79%</span></td>
                                    <td><h6 class=\"text-semibold\">\$1,540</h6></td>
                                    <td><span class=\"label bg-blue\">Active</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropup\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            ";
        // line 484
        echo "                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Dribbble ads</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-blue position-left\"></span>
                                                20:00 - 21:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Teamable</span></td>
                                    <td><span class=\"text-danger\"><i class=\"icon-stats-decline2 position-left\"></i> 9.83%</span></td>
                                    <td><h6 class=\"text-semibold\">\$8,350</h6></td>
                                    <td><span class=\"label bg-danger\">Closed</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropup\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /marketing campaigns -->


                    <!-- Quick stats boxes -->
                    <div class=\"row\">
                        <div class=\"col-lg-4\">

                            <!-- Members online -->
                            <div class=\"panel bg-teal-400\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <span class=\"heading-text badge bg-teal-800\">+53,6%</span>
                                    </div>

                                    <h3 class=\"no-margin\">3,450</h3>
                                    Members online
                                    <div class=\"text-muted text-size-small\">489 avg</div>
                                </div>

                                <div class=\"container-fluid\">
                                    <div id=\"members-online\"></div>
                                </div>
                            </div>
                            <!-- /members online -->

                        </div>

                        <div class=\"col-lg-4\">

                            <!-- Current server load -->
                            <div class=\"panel bg-pink-400\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog3\"></i> <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3 class=\"no-margin\">49.4%</h3>
                                    Current server load
                                    <div class=\"text-muted text-size-small\">34.6% avg</div>
                                </div>

                                <div id=\"server-load\"></div>
                            </div>
                            <!-- /current server load -->

                        </div>

                        <div class=\"col-lg-4\">

                            <!-- Today's revenue -->
                            <div class=\"panel bg-blue-400\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <ul class=\"icons-list\">
                                            <li><a data-action=\"reload\"></a></li>
                                        </ul>
                                    </div>

                                    <h3 class=\"no-margin\">\$18,390</h3>
                                    Today's revenue
                                    <div class=\"text-muted text-size-small\">\$37,578 avg</div>
                                </div>

                                <div id=\"today-revenue\"></div>
                            </div>
                            <!-- /today's revenue -->

                        </div>
                    </div>
                    <!-- /quick stats boxes -->


                    <!-- Support tickets -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Support tickets</h6>
                            <div class=\"heading-elements\">
                                <button type=\"button\" class=\"btn btn-link daterange-ranges heading-btn text-semibold\">
                                    <i class=\"icon-calendar3 position-left\"></i> <span></span> <b class=\"caret\"></b>
                                </button>
                            </div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-xlg text-nowrap\">
                                <tbody>
                                <tr>
                                    <td class=\"col-md-4\">
                                        <div class=\"media-left media-middle\">
                                            <div id=\"tickets-status\"></div>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">14,327 <small class=\"text-success text-size-base\"><i class=\"icon-arrow-up12\"></i> (+2.9%)</small></h5>
                                            <span class=\"text-muted\"><span class=\"status-mark border-success position-left\"></span> Jun 16, 10:00 am</span>
                                        </div>
                                    </td>

                                    <td class=\"col-md-3\">
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon\"><i class=\"icon-alarm-add\"></i></a>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">
                                                1,132 <small class=\"display-block no-margin\">total tickets</small>
                                            </h5>
                                        </div>
                                    </td>

                                    <td class=\"col-md-3\">
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon\"><i class=\"icon-spinner11\"></i></a>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">
                                                06:25:00 <small class=\"display-block no-margin\">response time</small>
                                            </h5>
                                        </div>
                                    </td>

                                    <td class=\"text-right col-md-2\">
                                        <a href=\"#\" class=\"btn bg-teal-400\"><i class=\"icon-statistics position-left\"></i> Report</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        ";
        // line 657
        echo "                            ";
        // line 658
        echo "                                ";
        // line 659
        echo "                                ";
        // line 660
        echo "                                    ";
        // line 661
        echo "                                    ";
        // line 662
        echo "                                    ";
        // line 663
        echo "                                    ";
        // line 664
        echo "                                ";
        // line 665
        echo "                                ";
        // line 666
        echo "                                ";
        // line 667
        echo "                                ";
        // line 668
        echo "                                    ";
        // line 669
        echo "                                    ";
        // line 670
        echo "                                        ";
        // line 671
        echo "                                    ";
        // line 672
        echo "                                ";
        // line 673
        echo "
                                ";
        // line 675
        echo "                                    ";
        // line 676
        echo "                                        ";
        // line 677
        echo "                                    ";
        // line 678
        echo "                                    ";
        // line 679
        echo "                                        ";
        // line 680
        echo "                                            ";
        // line 681
        echo "                                                ";
        // line 682
        echo "                                            ";
        // line 683
        echo "                                        ";
        // line 684
        echo "
                                        ";
        // line 686
        echo "                                            ";
        // line 687
        echo "                                            ";
        // line 688
        echo "                                        ";
        // line 689
        echo "                                    ";
        // line 690
        echo "                                    ";
        // line 691
        echo "                                        ";
        // line 692
        echo "                                            ";
        // line 693
        echo "                                            ";
        // line 694
        echo "                                        ";
        // line 695
        echo "                                    ";
        // line 696
        echo "                                    ";
        // line 697
        echo "                                        ";
        // line 698
        echo "                                            ";
        // line 699
        echo "                                                ";
        // line 700
        echo "                                                ";
        // line 701
        echo "                                                    ";
        // line 702
        echo "                                                    ";
        // line 703
        echo "                                                    ";
        // line 704
        echo "                                                    ";
        // line 705
        echo "                                                    ";
        // line 706
        echo "                                                ";
        // line 707
        echo "                                            ";
        // line 708
        echo "                                        ";
        // line 709
        echo "                                    ";
        // line 710
        echo "                                ";
        // line 711
        echo "
                                ";
        // line 713
        echo "                                    ";
        // line 714
        echo "                                        ";
        // line 715
        echo "                                    ";
        // line 716
        echo "                                    ";
        // line 717
        echo "                                        ";
        // line 718
        echo "                                            ";
        // line 719
        echo "                                        ";
        // line 720
        echo "
                                        ";
        // line 722
        echo "                                            ";
        // line 723
        echo "                                            ";
        // line 724
        echo "                                        ";
        // line 725
        echo "                                    ";
        // line 726
        echo "                                    ";
        // line 727
        echo "                                        ";
        // line 728
        echo "                                            ";
        // line 729
        echo "                                            ";
        // line 730
        echo "                                        ";
        // line 731
        echo "                                    ";
        // line 732
        echo "                                    ";
        // line 733
        echo "                                        ";
        // line 734
        echo "                                            ";
        // line 735
        echo "                                                ";
        // line 736
        echo "                                                ";
        // line 737
        echo "                                                    ";
        // line 738
        echo "                                                    ";
        // line 739
        echo "                                                    ";
        // line 740
        echo "                                                    ";
        // line 741
        echo "                                                    ";
        // line 742
        echo "                                                ";
        // line 743
        echo "                                            ";
        // line 744
        echo "                                        ";
        // line 745
        echo "                                    ";
        // line 746
        echo "                                ";
        // line 747
        echo "
                                ";
        // line 749
        echo "                                    ";
        // line 750
        echo "                                        ";
        // line 751
        echo "                                    ";
        // line 752
        echo "                                    ";
        // line 753
        echo "                                        ";
        // line 754
        echo "                                            ";
        // line 755
        echo "                                                ";
        // line 756
        echo "                                            ";
        // line 757
        echo "                                        ";
        // line 758
        echo "
                                        ";
        // line 760
        echo "                                            ";
        // line 761
        echo "                                            ";
        // line 762
        echo "                                        ";
        // line 763
        echo "                                    ";
        // line 764
        echo "                                    ";
        // line 765
        echo "                                        ";
        // line 766
        echo "                                            ";
        // line 767
        echo "                                            ";
        // line 768
        echo "                                        ";
        // line 769
        echo "                                    ";
        // line 770
        echo "                                    ";
        // line 771
        echo "                                        ";
        // line 772
        echo "                                            ";
        // line 773
        echo "                                                ";
        // line 774
        echo "                                                ";
        // line 775
        echo "                                                    ";
        // line 776
        echo "                                                    ";
        // line 777
        echo "                                                    ";
        // line 778
        echo "                                                    ";
        // line 779
        echo "                                                    ";
        // line 780
        echo "                                                ";
        // line 781
        echo "                                            ";
        // line 782
        echo "                                        ";
        // line 783
        echo "                                    ";
        // line 784
        echo "                                ";
        // line 785
        echo "
                                ";
        // line 787
        echo "                                    ";
        // line 788
        echo "                                        ";
        // line 789
        echo "                                    ";
        // line 790
        echo "                                    ";
        // line 791
        echo "                                        ";
        // line 792
        echo "                                            ";
        // line 793
        echo "                                                ";
        // line 794
        echo "                                            ";
        // line 795
        echo "                                        ";
        // line 796
        echo "
                                        ";
        // line 798
        echo "                                            ";
        // line 799
        echo "                                            ";
        // line 800
        echo "                                        ";
        // line 801
        echo "                                    ";
        // line 802
        echo "                                    ";
        // line 803
        echo "                                        ";
        // line 804
        echo "                                            ";
        // line 805
        echo "                                            ";
        // line 806
        echo "                                        ";
        // line 807
        echo "                                    ";
        // line 808
        echo "                                    ";
        // line 809
        echo "                                        ";
        // line 810
        echo "                                            ";
        // line 811
        echo "                                                ";
        // line 812
        echo "                                                ";
        // line 813
        echo "                                                    ";
        // line 814
        echo "                                                    ";
        // line 815
        echo "                                                    ";
        // line 816
        echo "                                                    ";
        // line 817
        echo "                                                    ";
        // line 818
        echo "                                                ";
        // line 819
        echo "                                            ";
        // line 820
        echo "                                        ";
        // line 821
        echo "                                    ";
        // line 822
        echo "                                ";
        // line 823
        echo "
                                ";
        // line 825
        echo "                                    ";
        // line 826
        echo "                                    ";
        // line 827
        echo "                                        ";
        // line 828
        echo "                                    ";
        // line 829
        echo "                                ";
        // line 830
        echo "
                                ";
        // line 832
        echo "                                    ";
        // line 833
        echo "                                        ";
        // line 834
        echo "                                    ";
        // line 835
        echo "                                    ";
        // line 836
        echo "                                        ";
        // line 837
        echo "                                            ";
        // line 838
        echo "                                                ";
        // line 839
        echo "                                            ";
        // line 840
        echo "                                        ";
        // line 841
        echo "
                                        ";
        // line 843
        echo "                                            ";
        // line 844
        echo "                                            ";
        // line 845
        echo "                                        ";
        // line 846
        echo "                                    ";
        // line 847
        echo "                                    ";
        // line 848
        echo "                                        ";
        // line 849
        echo "                                            ";
        // line 850
        echo "                                            ";
        // line 851
        echo "                                        ";
        // line 852
        echo "                                    ";
        // line 853
        echo "                                    ";
        // line 854
        echo "                                        ";
        // line 855
        echo "                                            ";
        // line 856
        echo "                                                ";
        // line 857
        echo "                                                ";
        // line 858
        echo "                                                    ";
        // line 859
        echo "                                                    ";
        // line 860
        echo "                                                    ";
        // line 861
        echo "                                                    ";
        // line 862
        echo "                                                    ";
        // line 863
        echo "                                                ";
        // line 864
        echo "                                            ";
        // line 865
        echo "                                        ";
        // line 866
        echo "                                    ";
        // line 867
        echo "                                ";
        // line 868
        echo "
                                ";
        // line 870
        echo "                                    ";
        // line 871
        echo "                                        ";
        // line 872
        echo "                                    ";
        // line 873
        echo "                                    ";
        // line 874
        echo "                                        ";
        // line 875
        echo "                                            ";
        // line 876
        echo "                                                ";
        // line 877
        echo "                                            ";
        // line 878
        echo "                                        ";
        // line 879
        echo "
                                        ";
        // line 881
        echo "                                            ";
        // line 882
        echo "                                            ";
        // line 883
        echo "                                        ";
        // line 884
        echo "                                    ";
        // line 885
        echo "                                    ";
        // line 886
        echo "                                        ";
        // line 887
        echo "                                            ";
        // line 888
        echo "                                            ";
        // line 889
        echo "                                        ";
        // line 890
        echo "                                    ";
        // line 891
        echo "                                    ";
        // line 892
        echo "                                        ";
        // line 893
        echo "                                            ";
        // line 894
        echo "                                                ";
        // line 895
        echo "                                                ";
        // line 896
        echo "                                                    ";
        // line 897
        echo "                                                    ";
        // line 898
        echo "                                                    ";
        // line 899
        echo "                                                    ";
        // line 900
        echo "                                                    ";
        // line 901
        echo "                                                ";
        // line 902
        echo "                                            ";
        // line 903
        echo "                                        ";
        // line 904
        echo "                                    ";
        // line 905
        echo "                                ";
        // line 906
        echo "
                                ";
        // line 908
        echo "                                    ";
        // line 909
        echo "                                        ";
        // line 910
        echo "                                    ";
        // line 911
        echo "                                    ";
        // line 912
        echo "                                        ";
        // line 913
        echo "                                            ";
        // line 914
        echo "                                        ";
        // line 915
        echo "
                                        ";
        // line 917
        echo "                                            ";
        // line 918
        echo "                                            ";
        // line 919
        echo "                                        ";
        // line 920
        echo "                                    ";
        // line 921
        echo "                                    ";
        // line 922
        echo "                                        ";
        // line 923
        echo "                                            ";
        // line 924
        echo "                                            ";
        // line 925
        echo "                                        ";
        // line 926
        echo "                                    ";
        // line 927
        echo "                                    ";
        // line 928
        echo "                                        ";
        // line 929
        echo "                                            ";
        // line 930
        echo "                                                ";
        // line 931
        echo "                                                ";
        // line 932
        echo "                                                    ";
        // line 933
        echo "                                                    ";
        // line 934
        echo "                                                    ";
        // line 935
        echo "                                                    ";
        // line 936
        echo "                                                    ";
        // line 937
        echo "                                                ";
        // line 938
        echo "                                            ";
        // line 939
        echo "                                        ";
        // line 940
        echo "                                    ";
        // line 941
        echo "                                ";
        // line 942
        echo "
                                ";
        // line 944
        echo "                                    ";
        // line 945
        echo "                                    ";
        // line 946
        echo "                                        ";
        // line 947
        echo "                                    ";
        // line 948
        echo "                                ";
        // line 949
        echo "
                                ";
        // line 951
        echo "                                    ";
        // line 952
        echo "                                        ";
        // line 953
        echo "                                    ";
        // line 954
        echo "                                    ";
        // line 955
        echo "                                        ";
        // line 956
        echo "                                            ";
        // line 957
        echo "                                        ";
        // line 958
        echo "
                                        ";
        // line 960
        echo "                                            ";
        // line 961
        echo "                                            ";
        // line 962
        echo "                                        ";
        // line 963
        echo "                                    ";
        // line 964
        echo "                                    ";
        // line 965
        echo "                                        ";
        // line 966
        echo "                                            ";
        // line 967
        echo "                                            ";
        // line 968
        echo "                                        ";
        // line 969
        echo "                                    ";
        // line 970
        echo "                                    ";
        // line 971
        echo "                                        ";
        // line 972
        echo "                                            ";
        // line 973
        echo "                                                ";
        // line 974
        echo "                                                ";
        // line 975
        echo "                                                    ";
        // line 976
        echo "                                                    ";
        // line 977
        echo "                                                    ";
        // line 978
        echo "                                                    ";
        // line 979
        echo "                                                    ";
        // line 980
        echo "                                                ";
        // line 981
        echo "                                            ";
        // line 982
        echo "                                        ";
        // line 983
        echo "                                    ";
        // line 984
        echo "                                ";
        // line 985
        echo "
                                ";
        // line 987
        echo "                                    ";
        // line 988
        echo "                                        ";
        // line 989
        echo "                                    ";
        // line 990
        echo "                                    ";
        // line 991
        echo "                                        ";
        // line 992
        echo "                                            ";
        // line 993
        echo "                                                ";
        // line 994
        echo "                                            ";
        // line 995
        echo "                                        ";
        // line 996
        echo "
                                        ";
        // line 998
        echo "                                            ";
        // line 999
        echo "                                            ";
        // line 1000
        echo "                                        ";
        // line 1001
        echo "                                    ";
        // line 1002
        echo "                                    ";
        // line 1003
        echo "                                        ";
        // line 1004
        echo "                                            ";
        // line 1005
        echo "                                            ";
        // line 1006
        echo "                                        ";
        // line 1007
        echo "                                    ";
        // line 1008
        echo "                                    ";
        // line 1009
        echo "                                        ";
        // line 1010
        echo "                                            ";
        // line 1011
        echo "                                                ";
        // line 1012
        echo "                                                ";
        // line 1013
        echo "                                                    ";
        // line 1014
        echo "                                                    ";
        // line 1015
        echo "                                                    ";
        // line 1016
        echo "                                                    ";
        // line 1017
        echo "                                                    ";
        // line 1018
        echo "                                                ";
        // line 1019
        echo "                                            ";
        // line 1020
        echo "                                        ";
        // line 1021
        echo "                                    ";
        // line 1022
        echo "                                ";
        // line 1023
        echo "                                ";
        // line 1024
        echo "                            ";
        // line 1025
        echo "                        ";
        // line 1026
        echo "                    </div>
                    <!-- /support tickets -->


                    <!-- Latest posts -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Latest posts</h6>
                            <div class=\"heading-elements\">
                                <ul class=\"icons-list\">
                                    <li><a data-action=\"collapse\"></a></li>
                                    <li><a data-action=\"reload\"></a></li>
                                    <li><a data-action=\"close\"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <ul class=\"media-list content-group\">
                                        <li class=\"media stack-media-on-mobile\">
                                            <div class=\"media-left\">
                                                <div class=\"thumb\">
                                                    <a href=\"#\">
                                                        ";
        // line 1052
        echo "                                                        <span class=\"zoom-image\"><i class=\"icon-play3\"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"media-body\">
                                                <h6 class=\"media-heading\"><a href=\"#\">Up unpacked friendly</a></h6>
                                                <ul class=\"list-inline list-inline-separate text-muted mb-5\">
                                                    <li><i class=\"icon-book-play position-left\"></i> Video tutorials</li>
                                                    <li>14 minutes ago</li>
                                                </ul>
                                                The him father parish looked has sooner. Attachment frequently gay terminated son...
                                            </div>
                                        </li>

                                        <li class=\"media stack-media-on-mobile\">
                                            <div class=\"media-left\">
                                                <div class=\"thumb\">
                                                    <a href=\"#\">
                                                        ";
        // line 1072
        echo "                                                        <span class=\"zoom-image\"><i class=\"icon-play3\"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"media-body\">
                                                <h6 class=\"media-heading\"><a href=\"#\">It allowance prevailed</a></h6>
                                                <ul class=\"list-inline list-inline-separate text-muted mb-5\">
                                                    <li><i class=\"icon-book-play position-left\"></i> Video tutorials</li>
                                                    <li>12 days ago</li>
                                                </ul>
                                                Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed...
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class=\"col-lg-6\">
                                    <ul class=\"media-list content-group\">
                                        <li class=\"media stack-media-on-mobile\">
                                            <div class=\"media-left\">
                                                <div class=\"thumb\">
                                                    <a href=\"#\">
                                                        ";
        // line 1096
        echo "                                                        <span class=\"zoom-image\"><i class=\"icon-play3\"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"media-body\">
                                                <h6 class=\"media-heading\"><a href=\"#\">Case read they must</a></h6>
                                                <ul class=\"list-inline list-inline-separate text-muted mb-5\">
                                                    <li><i class=\"icon-book-play position-left\"></i> Video tutorials</li>
                                                    <li>20 hours ago</li>
                                                </ul>
                                                On it differed repeated wandered required in. Then girl neat why yet knew rose spot...
                                            </div>
                                        </li>

                                        <li class=\"media stack-media-on-mobile\">
                                            <div class=\"media-left\">
                                                <div class=\"thumb\">
                                                    <a href=\"#\">
                                                        ";
        // line 1116
        echo "                                                        <span class=\"zoom-image\"><i class=\"icon-play3\"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"media-body\">
                                                <h6 class=\"media-heading\"><a href=\"#\">Too carriage attended</a></h6>
                                                <ul class=\"list-inline list-inline-separate text-muted mb-5\">
                                                    <li><i class=\"icon-book-play position-left\"></i> FAQ section</li>
                                                    <li>2 days ago</li>
                                                </ul>
                                                Marianne or husbands if at stronger ye. Considered is as middletons uncommonly...
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /latest posts -->

                </div>

                <div class=\"col-lg-4\">

                    <!-- Progress counters -->
                    <div class=\"row\">
                        <div class=\"col-md-6\">

                            <!-- Available hours -->
                            <div class=\"panel text-center\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown text-muted\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog3\"></i> <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Progress counter -->
                                    <div class=\"content-group-sm svg-center position-relative\" id=\"hours-available-progress\"></div>
                                    <!-- /progress counter -->


                                    <!-- Bars -->
                                    <div id=\"hours-available-bars\"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /available hours -->

                        </div>

                        <div class=\"col-md-6\">

                            <!-- Productivity goal -->
                            <div class=\"panel text-center\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown text-muted\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog3\"></i> <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Progress counter -->
                                    <div class=\"content-group-sm svg-center position-relative\" id=\"goal-progress\"></div>
                                    <!-- /progress counter -->

                                    <!-- Bars -->
                                    <div id=\"goal-bars\"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /productivity goal -->

                        </div>
                    </div>
                    <!-- /progress counters -->


                    <!-- Daily sales -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Daily sales stats</h6>
                            <div class=\"heading-elements\">
                                <span class=\"heading-text\">Balance: <span class=\"text-bold text-danger-600 position-right\">\$4,378</span></span>
                                <ul class=\"icons-list\">
                                    <li class=\"dropdown text-muted\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog3\"></i> <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                            <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                            <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                            <li class=\"divider\"></li>
                                            <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"panel-body\">
                            <div id=\"sales-heatmap\"></div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table text-nowrap\">
                                <thead>
                                <tr>
                                    <th>Application</th>
                                    <th>Time</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-primary-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Sigma application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-checkmark3 text-size-mini position-left\"></i> New order</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">06:28 pm</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$49.90</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-danger-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Alpha application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-spinner11 text-size-mini position-left\"></i> Renewal</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">04:52 pm</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$90.50</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-indigo-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Delta application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-lifebuoy text-size-mini position-left\"></i> Support</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">01:26 pm</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$60.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-success-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Omega application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-lifebuoy text-size-mini position-left\"></i> Support</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">11:46 am</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$55.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-danger-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Alpha application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-spinner11 text-size-mini position-left\"></i> Renewal</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">10:29 am</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$90.50</h6>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /daily sales -->


                    <!-- My messages -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">My messages</h6>
                            <div class=\"heading-elements\">
                                <span class=\"heading-text\"><i class=\"icon-history text-warning position-left\"></i> Jul 7, 10:30</span>
                                <span class=\"label bg-success heading-text\">Online</span>
                            </div>
                        </div>

                        <!-- Numbers -->
                        <div class=\"container-fluid\">
                            <div class=\"row text-center\">
                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h6 class=\"text-semibold no-margin\"><i class=\"icon-clipboard3 position-left text-slate\"></i> 2,345</h6>
                                        <span class=\"text-muted text-size-small\">this week</span>
                                    </div>
                                </div>

                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h6 class=\"text-semibold no-margin\"><i class=\"icon-calendar3 position-left text-slate\"></i> 3,568</h6>
                                        <span class=\"text-muted text-size-small\">this month</span>
                                    </div>
                                </div>

                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h6 class=\"text-semibold no-margin\"><i class=\"icon-comments position-left text-slate\"></i> 32,693</h6>
                                        <span class=\"text-muted text-size-small\">all messages</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /numbers -->


                        <!-- Area chart -->
                        <div id=\"messages-stats\"></div>
                        <!-- /area chart -->


                        <!-- Tabs -->
                        <ul class=\"nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300\">
                            <li class=\"active\">
                                <a href=\"#messages-tue\" class=\"text-size-small text-uppercase\" data-toggle=\"tab\">
                                    Tuesday
                                </a>
                            </li>

                            <li>
                                <a href=\"#messages-mon\" class=\"text-size-small text-uppercase\" data-toggle=\"tab\">
                                    Monday
                                </a>
                            </li>

                            <li>
                                <a href=\"#messages-fri\" class=\"text-size-small text-uppercase\" data-toggle=\"tab\">
                                    Friday
                                </a>
                            </li>
                        </ul>
                        <!-- /tabs -->


                        <!-- Tabs content -->
                        ";
        // line 1442
        echo "                            ";
        // line 1443
        echo "                                ";
        // line 1444
        echo "                                    ";
        // line 1445
        echo "                                        ";
        // line 1446
        echo "                                            ";
        // line 1447
        echo "                                            ";
        // line 1448
        echo "                                        ";
        // line 1449
        echo "
                                        ";
        // line 1451
        echo "                                            ";
        // line 1452
        echo "                                                ";
        // line 1453
        echo "                                                ";
        // line 1454
        echo "                                            ";
        // line 1455
        echo "
                                            ";
        // line 1457
        echo "                                        ";
        // line 1458
        echo "                                    ";
        // line 1459
        echo "
                                    ";
        // line 1461
        echo "                                        ";
        // line 1462
        echo "                                            ";
        // line 1463
        echo "                                            ";
        // line 1464
        echo "                                        ";
        // line 1465
        echo "
                                        ";
        // line 1467
        echo "                                            ";
        // line 1468
        echo "                                                ";
        // line 1469
        echo "                                                ";
        // line 1470
        echo "                                            ";
        // line 1471
        echo "
                                            ";
        // line 1473
        echo "                                        ";
        // line 1474
        echo "                                    ";
        // line 1475
        echo "
                                    ";
        // line 1477
        echo "                                        ";
        // line 1478
        echo "                                            ";
        // line 1479
        echo "                                        ";
        // line 1480
        echo "
                                        ";
        // line 1482
        echo "                                            ";
        // line 1483
        echo "                                                ";
        // line 1484
        echo "                                                ";
        // line 1485
        echo "                                            ";
        // line 1486
        echo "
                                            ";
        // line 1488
        echo "                                        ";
        // line 1489
        echo "                                    ";
        // line 1490
        echo "
                                    ";
        // line 1492
        echo "                                        ";
        // line 1493
        echo "                                            ";
        // line 1494
        echo "                                        ";
        // line 1495
        echo "
                                        ";
        // line 1497
        echo "                                            ";
        // line 1498
        echo "                                                ";
        // line 1499
        echo "                                                ";
        // line 1500
        echo "                                            ";
        // line 1501
        echo "
                                            ";
        // line 1503
        echo "                                        ";
        // line 1504
        echo "                                    ";
        // line 1505
        echo "
                                    ";
        // line 1507
        echo "                                        ";
        // line 1508
        echo "                                            ";
        // line 1509
        echo "                                        ";
        // line 1510
        echo "
                                        ";
        // line 1512
        echo "                                            ";
        // line 1513
        echo "                                                ";
        // line 1514
        echo "                                                ";
        // line 1515
        echo "                                            ";
        // line 1516
        echo "
                                            ";
        // line 1518
        echo "                                        ";
        // line 1519
        echo "                                    ";
        // line 1520
        echo "                                ";
        // line 1521
        echo "                            ";
        // line 1522
        echo "
                            ";
        // line 1524
        echo "                                ";
        // line 1525
        echo "                                    ";
        // line 1526
        echo "                                        ";
        // line 1527
        echo "                                            ";
        // line 1528
        echo "                                        ";
        // line 1529
        echo "
                                        ";
        // line 1531
        echo "                                            ";
        // line 1532
        echo "                                                ";
        // line 1533
        echo "                                                ";
        // line 1534
        echo "                                            ";
        // line 1535
        echo "
                                            ";
        // line 1537
        echo "                                        ";
        // line 1538
        echo "                                    ";
        // line 1539
        echo "
                                    ";
        // line 1541
        echo "                                        ";
        // line 1542
        echo "                                            ";
        // line 1543
        echo "                                        ";
        // line 1544
        echo "
                                        ";
        // line 1546
        echo "                                            ";
        // line 1547
        echo "                                                ";
        // line 1548
        echo "                                                ";
        // line 1549
        echo "                                            ";
        // line 1550
        echo "
                                            ";
        // line 1552
        echo "                                        ";
        // line 1553
        echo "                                    ";
        // line 1554
        echo "
                                    ";
        // line 1556
        echo "                                        ";
        // line 1557
        echo "                                            ";
        // line 1558
        echo "                                        ";
        // line 1559
        echo "
                                        ";
        // line 1561
        echo "                                            ";
        // line 1562
        echo "                                                ";
        // line 1563
        echo "                                                ";
        // line 1564
        echo "                                            ";
        // line 1565
        echo "
                                            ";
        // line 1567
        echo "                                        ";
        // line 1568
        echo "                                    ";
        // line 1569
        echo "
                                    ";
        // line 1571
        echo "                                        ";
        // line 1572
        echo "                                            ";
        // line 1573
        echo "                                        ";
        // line 1574
        echo "
                                        ";
        // line 1576
        echo "                                            ";
        // line 1577
        echo "                                                ";
        // line 1578
        echo "                                                ";
        // line 1579
        echo "                                            ";
        // line 1580
        echo "
                                            ";
        // line 1582
        echo "                                        ";
        // line 1583
        echo "                                    ";
        // line 1584
        echo "
                                    ";
        // line 1586
        echo "                                        ";
        // line 1587
        echo "                                            ";
        // line 1588
        echo "                                        ";
        // line 1589
        echo "
                                        ";
        // line 1591
        echo "                                            ";
        // line 1592
        echo "                                                ";
        // line 1593
        echo "                                                ";
        // line 1594
        echo "                                            ";
        // line 1595
        echo "
                                            ";
        // line 1597
        echo "                                        ";
        // line 1598
        echo "                                    ";
        // line 1599
        echo "                                ";
        // line 1600
        echo "                            ";
        // line 1601
        echo "
                            ";
        // line 1603
        echo "                                ";
        // line 1604
        echo "                                    ";
        // line 1605
        echo "                                        ";
        // line 1606
        echo "                                            ";
        // line 1607
        echo "                                        ";
        // line 1608
        echo "
                                        ";
        // line 1610
        echo "                                            ";
        // line 1611
        echo "                                                ";
        // line 1612
        echo "                                                ";
        // line 1613
        echo "                                            ";
        // line 1614
        echo "
                                            ";
        // line 1616
        echo "                                        ";
        // line 1617
        echo "                                    ";
        // line 1618
        echo "
                                    ";
        // line 1620
        echo "                                        ";
        // line 1621
        echo "                                            ";
        // line 1622
        echo "                                        ";
        // line 1623
        echo "
                                        ";
        // line 1625
        echo "                                            ";
        // line 1626
        echo "                                                ";
        // line 1627
        echo "                                                ";
        // line 1628
        echo "                                            ";
        // line 1629
        echo "
                                            ";
        // line 1631
        echo "                                        ";
        // line 1632
        echo "                                    ";
        // line 1633
        echo "
                                    ";
        // line 1635
        echo "                                        ";
        // line 1636
        echo "                                            ";
        // line 1637
        echo "                                        ";
        // line 1638
        echo "
                                        ";
        // line 1640
        echo "                                            ";
        // line 1641
        echo "                                                ";
        // line 1642
        echo "                                                ";
        // line 1643
        echo "                                            ";
        // line 1644
        echo "
                                            ";
        // line 1646
        echo "                                        ";
        // line 1647
        echo "                                    ";
        // line 1648
        echo "
                                    ";
        // line 1650
        echo "                                        ";
        // line 1651
        echo "                                            ";
        // line 1652
        echo "                                        ";
        // line 1653
        echo "
                                        ";
        // line 1655
        echo "                                            ";
        // line 1656
        echo "                                                ";
        // line 1657
        echo "                                                ";
        // line 1658
        echo "                                            ";
        // line 1659
        echo "
                                            ";
        // line 1661
        echo "                                        ";
        // line 1662
        echo "                                    ";
        // line 1663
        echo "
                                    ";
        // line 1665
        echo "                                        ";
        // line 1666
        echo "                                            ";
        // line 1667
        echo "                                        ";
        // line 1668
        echo "
                                        ";
        // line 1670
        echo "                                            ";
        // line 1671
        echo "                                                ";
        // line 1672
        echo "                                                ";
        // line 1673
        echo "                                            ";
        // line 1674
        echo "
                                            ";
        // line 1676
        echo "                                        ";
        // line 1677
        echo "                                    ";
        // line 1678
        echo "                                ";
        // line 1679
        echo "                            ";
        // line 1680
        echo "                        ";
        // line 1681
        echo "                        <!-- /tabs content -->

                    </div>
                    <!-- /my messages -->


                    <!-- Daily financials -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Daily financials</h6>
                            <div class=\"heading-elements\">
                                <form class=\"heading-form\" action=\"#\">
                                    <div class=\"form-group\">
                                        <label class=\"checkbox checkbox-inline checkbox-switchery checkbox-right switchery-xs\">
                                            <input type=\"checkbox\" class=\"switcher\" id=\"realtime\" checked=\"checked\">
                                            Realtime
                                        </label>
                                    </div>
                                </form>
                                <span class=\"badge bg-danger-400 heading-text\">+86</span>
                            </div>
                        </div>

                        <div class=\"panel-body\">
                            <div class=\"content-group-xs\" id=\"bullets\"></div>

                            <ul class=\"media-list\">
                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-pink text-pink btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-statistics\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Stats for July, 6: 1938 orders, \$4220 revenue
                                        <div class=\"media-annotation\">2 hours ago</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-success text-success btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-checkmark3\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Invoices <a href=\"#\">#4732</a> and <a href=\"#\">#4734</a> have been paid
                                        <div class=\"media-annotation\">Dec 18, 18:36</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-alignment-unalign\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Affiliate commission for June has been paid
                                        <div class=\"media-annotation\">36 minutes ago</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-spinner11\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Order <a href=\"#\">#37745</a> from July, 1st has been refunded
                                        <div class=\"media-annotation\">4 minutes ago</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-teal-400 text-teal btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-redo2\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Invoice <a href=\"#\">#4769</a> has been sent to <a href=\"#\">Robert Smith</a>
                                        <div class=\"media-annotation\">Dec 12, 05:46</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /daily financials -->

                </div>
            </div>
            <!-- /dashboard content -->


            <!-- Footer -->
            <div class=\"footer text-muted\">
               ";
        // line 1814
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"#\">VS</a>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Dashboard:list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2406 => 1814,  2271 => 1681,  2269 => 1680,  2267 => 1679,  2265 => 1678,  2263 => 1677,  2261 => 1676,  2258 => 1674,  2256 => 1673,  2254 => 1672,  2252 => 1671,  2250 => 1670,  2247 => 1668,  2245 => 1667,  2243 => 1666,  2241 => 1665,  2238 => 1663,  2236 => 1662,  2234 => 1661,  2231 => 1659,  2229 => 1658,  2227 => 1657,  2225 => 1656,  2223 => 1655,  2220 => 1653,  2218 => 1652,  2216 => 1651,  2214 => 1650,  2211 => 1648,  2209 => 1647,  2207 => 1646,  2204 => 1644,  2202 => 1643,  2200 => 1642,  2198 => 1641,  2196 => 1640,  2193 => 1638,  2191 => 1637,  2189 => 1636,  2187 => 1635,  2184 => 1633,  2182 => 1632,  2180 => 1631,  2177 => 1629,  2175 => 1628,  2173 => 1627,  2171 => 1626,  2169 => 1625,  2166 => 1623,  2164 => 1622,  2162 => 1621,  2160 => 1620,  2157 => 1618,  2155 => 1617,  2153 => 1616,  2150 => 1614,  2148 => 1613,  2146 => 1612,  2144 => 1611,  2142 => 1610,  2139 => 1608,  2137 => 1607,  2135 => 1606,  2133 => 1605,  2131 => 1604,  2129 => 1603,  2126 => 1601,  2124 => 1600,  2122 => 1599,  2120 => 1598,  2118 => 1597,  2115 => 1595,  2113 => 1594,  2111 => 1593,  2109 => 1592,  2107 => 1591,  2104 => 1589,  2102 => 1588,  2100 => 1587,  2098 => 1586,  2095 => 1584,  2093 => 1583,  2091 => 1582,  2088 => 1580,  2086 => 1579,  2084 => 1578,  2082 => 1577,  2080 => 1576,  2077 => 1574,  2075 => 1573,  2073 => 1572,  2071 => 1571,  2068 => 1569,  2066 => 1568,  2064 => 1567,  2061 => 1565,  2059 => 1564,  2057 => 1563,  2055 => 1562,  2053 => 1561,  2050 => 1559,  2048 => 1558,  2046 => 1557,  2044 => 1556,  2041 => 1554,  2039 => 1553,  2037 => 1552,  2034 => 1550,  2032 => 1549,  2030 => 1548,  2028 => 1547,  2026 => 1546,  2023 => 1544,  2021 => 1543,  2019 => 1542,  2017 => 1541,  2014 => 1539,  2012 => 1538,  2010 => 1537,  2007 => 1535,  2005 => 1534,  2003 => 1533,  2001 => 1532,  1999 => 1531,  1996 => 1529,  1994 => 1528,  1992 => 1527,  1990 => 1526,  1988 => 1525,  1986 => 1524,  1983 => 1522,  1981 => 1521,  1979 => 1520,  1977 => 1519,  1975 => 1518,  1972 => 1516,  1970 => 1515,  1968 => 1514,  1966 => 1513,  1964 => 1512,  1961 => 1510,  1959 => 1509,  1957 => 1508,  1955 => 1507,  1952 => 1505,  1950 => 1504,  1948 => 1503,  1945 => 1501,  1943 => 1500,  1941 => 1499,  1939 => 1498,  1937 => 1497,  1934 => 1495,  1932 => 1494,  1930 => 1493,  1928 => 1492,  1925 => 1490,  1923 => 1489,  1921 => 1488,  1918 => 1486,  1916 => 1485,  1914 => 1484,  1912 => 1483,  1910 => 1482,  1907 => 1480,  1905 => 1479,  1903 => 1478,  1901 => 1477,  1898 => 1475,  1896 => 1474,  1894 => 1473,  1891 => 1471,  1889 => 1470,  1887 => 1469,  1885 => 1468,  1883 => 1467,  1880 => 1465,  1878 => 1464,  1876 => 1463,  1874 => 1462,  1872 => 1461,  1869 => 1459,  1867 => 1458,  1865 => 1457,  1862 => 1455,  1860 => 1454,  1858 => 1453,  1856 => 1452,  1854 => 1451,  1851 => 1449,  1849 => 1448,  1847 => 1447,  1845 => 1446,  1843 => 1445,  1841 => 1444,  1839 => 1443,  1837 => 1442,  1510 => 1116,  1489 => 1096,  1464 => 1072,  1443 => 1052,  1416 => 1026,  1414 => 1025,  1412 => 1024,  1410 => 1023,  1408 => 1022,  1406 => 1021,  1404 => 1020,  1402 => 1019,  1400 => 1018,  1398 => 1017,  1396 => 1016,  1394 => 1015,  1392 => 1014,  1390 => 1013,  1388 => 1012,  1386 => 1011,  1384 => 1010,  1382 => 1009,  1380 => 1008,  1378 => 1007,  1376 => 1006,  1374 => 1005,  1372 => 1004,  1370 => 1003,  1368 => 1002,  1366 => 1001,  1364 => 1000,  1362 => 999,  1360 => 998,  1357 => 996,  1355 => 995,  1353 => 994,  1351 => 993,  1349 => 992,  1347 => 991,  1345 => 990,  1343 => 989,  1341 => 988,  1339 => 987,  1336 => 985,  1334 => 984,  1332 => 983,  1330 => 982,  1328 => 981,  1326 => 980,  1324 => 979,  1322 => 978,  1320 => 977,  1318 => 976,  1316 => 975,  1314 => 974,  1312 => 973,  1310 => 972,  1308 => 971,  1306 => 970,  1304 => 969,  1302 => 968,  1300 => 967,  1298 => 966,  1296 => 965,  1294 => 964,  1292 => 963,  1290 => 962,  1288 => 961,  1286 => 960,  1283 => 958,  1281 => 957,  1279 => 956,  1277 => 955,  1275 => 954,  1273 => 953,  1271 => 952,  1269 => 951,  1266 => 949,  1264 => 948,  1262 => 947,  1260 => 946,  1258 => 945,  1256 => 944,  1253 => 942,  1251 => 941,  1249 => 940,  1247 => 939,  1245 => 938,  1243 => 937,  1241 => 936,  1239 => 935,  1237 => 934,  1235 => 933,  1233 => 932,  1231 => 931,  1229 => 930,  1227 => 929,  1225 => 928,  1223 => 927,  1221 => 926,  1219 => 925,  1217 => 924,  1215 => 923,  1213 => 922,  1211 => 921,  1209 => 920,  1207 => 919,  1205 => 918,  1203 => 917,  1200 => 915,  1198 => 914,  1196 => 913,  1194 => 912,  1192 => 911,  1190 => 910,  1188 => 909,  1186 => 908,  1183 => 906,  1181 => 905,  1179 => 904,  1177 => 903,  1175 => 902,  1173 => 901,  1171 => 900,  1169 => 899,  1167 => 898,  1165 => 897,  1163 => 896,  1161 => 895,  1159 => 894,  1157 => 893,  1155 => 892,  1153 => 891,  1151 => 890,  1149 => 889,  1147 => 888,  1145 => 887,  1143 => 886,  1141 => 885,  1139 => 884,  1137 => 883,  1135 => 882,  1133 => 881,  1130 => 879,  1128 => 878,  1126 => 877,  1124 => 876,  1122 => 875,  1120 => 874,  1118 => 873,  1116 => 872,  1114 => 871,  1112 => 870,  1109 => 868,  1107 => 867,  1105 => 866,  1103 => 865,  1101 => 864,  1099 => 863,  1097 => 862,  1095 => 861,  1093 => 860,  1091 => 859,  1089 => 858,  1087 => 857,  1085 => 856,  1083 => 855,  1081 => 854,  1079 => 853,  1077 => 852,  1075 => 851,  1073 => 850,  1071 => 849,  1069 => 848,  1067 => 847,  1065 => 846,  1063 => 845,  1061 => 844,  1059 => 843,  1056 => 841,  1054 => 840,  1052 => 839,  1050 => 838,  1048 => 837,  1046 => 836,  1044 => 835,  1042 => 834,  1040 => 833,  1038 => 832,  1035 => 830,  1033 => 829,  1031 => 828,  1029 => 827,  1027 => 826,  1025 => 825,  1022 => 823,  1020 => 822,  1018 => 821,  1016 => 820,  1014 => 819,  1012 => 818,  1010 => 817,  1008 => 816,  1006 => 815,  1004 => 814,  1002 => 813,  1000 => 812,  998 => 811,  996 => 810,  994 => 809,  992 => 808,  990 => 807,  988 => 806,  986 => 805,  984 => 804,  982 => 803,  980 => 802,  978 => 801,  976 => 800,  974 => 799,  972 => 798,  969 => 796,  967 => 795,  965 => 794,  963 => 793,  961 => 792,  959 => 791,  957 => 790,  955 => 789,  953 => 788,  951 => 787,  948 => 785,  946 => 784,  944 => 783,  942 => 782,  940 => 781,  938 => 780,  936 => 779,  934 => 778,  932 => 777,  930 => 776,  928 => 775,  926 => 774,  924 => 773,  922 => 772,  920 => 771,  918 => 770,  916 => 769,  914 => 768,  912 => 767,  910 => 766,  908 => 765,  906 => 764,  904 => 763,  902 => 762,  900 => 761,  898 => 760,  895 => 758,  893 => 757,  891 => 756,  889 => 755,  887 => 754,  885 => 753,  883 => 752,  881 => 751,  879 => 750,  877 => 749,  874 => 747,  872 => 746,  870 => 745,  868 => 744,  866 => 743,  864 => 742,  862 => 741,  860 => 740,  858 => 739,  856 => 738,  854 => 737,  852 => 736,  850 => 735,  848 => 734,  846 => 733,  844 => 732,  842 => 731,  840 => 730,  838 => 729,  836 => 728,  834 => 727,  832 => 726,  830 => 725,  828 => 724,  826 => 723,  824 => 722,  821 => 720,  819 => 719,  817 => 718,  815 => 717,  813 => 716,  811 => 715,  809 => 714,  807 => 713,  804 => 711,  802 => 710,  800 => 709,  798 => 708,  796 => 707,  794 => 706,  792 => 705,  790 => 704,  788 => 703,  786 => 702,  784 => 701,  782 => 700,  780 => 699,  778 => 698,  776 => 697,  774 => 696,  772 => 695,  770 => 694,  768 => 693,  766 => 692,  764 => 691,  762 => 690,  760 => 689,  758 => 688,  756 => 687,  754 => 686,  751 => 684,  749 => 683,  747 => 682,  745 => 681,  743 => 680,  741 => 679,  739 => 678,  737 => 677,  735 => 676,  733 => 675,  730 => 673,  728 => 672,  726 => 671,  724 => 670,  722 => 669,  720 => 668,  718 => 667,  716 => 666,  714 => 665,  712 => 664,  710 => 663,  708 => 662,  706 => 661,  704 => 660,  702 => 659,  700 => 658,  698 => 657,  524 => 484,  491 => 452,  458 => 420,  418 => 381,  385 => 349,  352 => 317,  319 => 285,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block list %}

    <!-- Main content -->
    <div class=\"content-wrapper\">

        <!-- Page header -->
        <div class=\"page-header page-header-default\">
            <div class=\"page-header-content\">
                <div class=\"page-title\">
                    <h4><i class=\"icon-arrow-left52 position-left\"></i> <span class=\"text-semibold\">Home</span> - Dashboard</h4>
                </div>

                <div class=\"heading-elements\">
                    <div class=\"heading-btn-group\">
                        <a href=\"#\" class=\"btn btn-link btn-float has-text\"><i class=\"icon-bars-alt text-primary\"></i><span>Statistics</span></a>
                        <a href=\"#\" class=\"btn btn-link btn-float has-text\"><i class=\"icon-calculator text-primary\"></i> <span>Invoices</span></a>
                        <a href=\"#\" class=\"btn btn-link btn-float has-text\"><i class=\"icon-calendar5 text-primary\"></i> <span>Schedule</span></a>
                    </div>
                </div>
            </div>

            <div class=\"breadcrumb-line\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"index.html\"><i class=\"icon-home2 position-left\"></i> Home</a></li>
                    <li class=\"active\">Dashboard</li>
                </ul>

                <ul class=\"breadcrumb-elements\">
                    <li><a href=\"#\"><i class=\"icon-comment-discussion position-left\"></i> Support</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"icon-gear position-left\"></i>
                            Settings
                            <span class=\"caret\"></span>
                        </a>

                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li><a href=\"#\"><i class=\"icon-user-lock\"></i> Account security</a></li>
                            <li><a href=\"#\"><i class=\"icon-statistics\"></i> Analytics</a></li>
                            <li><a href=\"#\"><i class=\"icon-accessibility\"></i> Accessibility</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\"><i class=\"icon-gear\"></i> All settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class=\"content\">

            <!-- Main charts -->
            <div class=\"row\">
                <div class=\"col-lg-7\">

                    <!-- Traffic sources -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Traffic sources</h6>
                            <div class=\"heading-elements\">
                                <form class=\"heading-form\" action=\"#\">
                                    <div class=\"form-group\">
                                        <label class=\"checkbox-inline checkbox-switchery checkbox-right switchery-xs\">
                                            <input type=\"checkbox\" class=\"switch\" checked=\"checked\">
                                            Live update:
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class=\"container-fluid\">
                            <div class=\"row\">
                                <div class=\"col-lg-4\">
                                    <ul class=\"list-inline text-center\">
                                        <li>
                                            <a href=\"#\" class=\"btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom\"><i class=\"icon-plus3\"></i></a>
                                        </li>
                                        <li class=\"text-left\">
                                            <div class=\"text-semibold\">New visitors</div>
                                            <div class=\"text-muted\">2,349 avg</div>
                                        </li>
                                    </ul>

                                    <div class=\"col-lg-10 col-lg-offset-1\">
                                        <div class=\"content-group\" id=\"new-visitors\"></div>
                                    </div>
                                </div>

                                <div class=\"col-lg-4\">
                                    <ul class=\"list-inline text-center\">
                                        <li>
                                            <a href=\"#\" class=\"btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom\"><i class=\"icon-watch2\"></i></a>
                                        </li>
                                        <li class=\"text-left\">
                                            <div class=\"text-semibold\">New sessions</div>
                                            <div class=\"text-muted\">08:20 avg</div>
                                        </li>
                                    </ul>

                                    <div class=\"col-lg-10 col-lg-offset-1\">
                                        <div class=\"content-group\" id=\"new-sessions\"></div>
                                    </div>
                                </div>

                                <div class=\"col-lg-4\">
                                    <ul class=\"list-inline text-center\">
                                        <li>
                                            <a href=\"#\" class=\"btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom\"><i class=\"icon-people\"></i></a>
                                        </li>
                                        <li class=\"text-left\">
                                            <div class=\"text-semibold\">Total online</div>
                                            <div class=\"text-muted\"><span class=\"status-mark border-success position-left\"></span> 5,378 avg</div>
                                        </li>
                                    </ul>

                                    <div class=\"col-lg-10 col-lg-offset-1\">
                                        <div class=\"content-group\" id=\"total-online\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"position-relative\" id=\"traffic-sources\"></div>
                    </div>
                    <!-- /traffic sources -->

                </div>

                <div class=\"col-lg-5\">

                    <!-- Sales stats -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Sales statistics</h6>
                            <div class=\"heading-elements\">
                                <form class=\"heading-form\" action=\"#\">
                                    <div class=\"form-group\">
                                        <select class=\"change-date select-sm\" id=\"select_date\">
                                            <optgroup label=\"<i class='icon-watch pull-right'></i> Time period\">
                                                <option value=\"val1\">June, 29 - July, 5</option>
                                                <option value=\"val2\">June, 22 - June 28</option>
                                                <option value=\"val3\" selected=\"selected\">June, 15 - June, 21</option>
                                                <option value=\"val4\">June, 8 - June, 14</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class=\"container-fluid\">
                            <div class=\"row text-center\">
                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h5 class=\"text-semibold no-margin\"><i class=\"icon-calendar5 position-left text-slate\"></i> 5,689</h5>
                                        <span class=\"text-muted text-size-small\">orders weekly</span>
                                    </div>
                                </div>

                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h5 class=\"text-semibold no-margin\"><i class=\"icon-calendar52 position-left text-slate\"></i> 32,568</h5>
                                        <span class=\"text-muted text-size-small\">orders monthly</span>
                                    </div>
                                </div>

                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h5 class=\"text-semibold no-margin\"><i class=\"icon-cash3 position-left text-slate\"></i> \$23,464</h5>
                                        <span class=\"text-muted text-size-small\">average revenue</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"content-group-sm\" id=\"app_sales\"></div>
                        <div id=\"monthly-sales-stats\"></div>
                    </div>
                    <!-- /sales stats -->

                </div>
            </div>
            <!-- /main charts -->


            <!-- Dashboard content -->
            <div class=\"row\">
                <div class=\"col-lg-8\">

                    <!-- Marketing campaigns -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Marketing campaigns</h6>
                            <div class=\"heading-elements\">
                                <span class=\"label bg-success heading-text\">28 active</span>
                                <ul class=\"icons-list\">
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i> <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                            <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                            <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                            <li class=\"divider\"></li>
                                            <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-lg text-nowrap\">
                                <tbody>
                                <tr>
                                    <td class=\"col-md-5\">
                                        <div class=\"media-left\">
                                            <div id=\"campaigns-donut\"></div>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">38,289 <small class=\"text-success text-size-base\"><i class=\"icon-arrow-up12\"></i> (+16.2%)</small></h5>
                                            <ul class=\"list-inline list-inline-condensed no-margin\">
                                                <li>
                                                    <span class=\"status-mark border-success\"></span>
                                                </li>
                                                <li>
                                                    <span class=\"text-muted\">May 12, 12:30 am</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                    <td class=\"col-md-5\">
                                        <div class=\"media-left\">
                                            <div id=\"campaign-status-pie\"></div>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">2,458 <small class=\"text-danger text-size-base\"><i class=\"icon-arrow-down12\"></i> (- 4.9%)</small></h5>
                                            <ul class=\"list-inline list-inline-condensed no-margin\">
                                                <li>
                                                    <span class=\"status-mark border-danger\"></span>
                                                </li>
                                                <li>
                                                    <span class=\"text-muted\">Jun 4, 4:00 am</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>

                                    <td class=\"text-right col-md-2\">
                                        <a href=\"#\" class=\"btn bg-indigo-300\"><i class=\"icon-statistics position-left\"></i> View report</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table text-nowrap\">
                                <thead>
                                <tr>
                                    <th>Campaign</th>
                                    <th class=\"col-md-2\">Client</th>
                                    <th class=\"col-md-2\">Changes</th>
                                    <th class=\"col-md-2\">Budget</th>
                                    <th class=\"col-md-2\">Status</th>
                                    <th class=\"text-center\" style=\"width: 20px;\"><i class=\"icon-arrow-down12\"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class=\"active border-double\">
                                    <td colspan=\"5\">Today</td>
                                    <td class=\"text-right\">
                                        <span class=\"progress-meter\" id=\"today-progress\" data-progress=\"30\"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            {#<a href=\"#\"><img src=\"assets/images/brands/facebook.png\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Facebook</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-blue position-left\"></span>
                                                02:00 - 03:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Mintlime</span></td>
                                    <td><span class=\"text-success-600\"><i class=\"icon-stats-growth2 position-left\"></i> 2.43%</span></td>
                                    <td><h6 class=\"text-semibold\">\$5,489</h6></td>
                                    <td><span class=\"label bg-blue\">Active</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            {#<a href=\"#\"><img src=\"assets/images/brands/youtube.png\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Youtube videos</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-danger position-left\"></span>
                                                13:00 - 14:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">CDsoft</span></td>
                                    <td><span class=\"text-success-600\"><i class=\"icon-stats-growth2 position-left\"></i> 3.12%</span></td>
                                    <td><h6 class=\"text-semibold\">\$2,592</h6></td>
                                    <td><span class=\"label bg-danger\">Closed</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            {#<a href=\"#\"><img src=\"assets/images/brands/spotify.png\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Spotify ads</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-grey-400 position-left\"></span>
                                                10:00 - 11:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Diligence</span></td>
                                    <td><span class=\"text-danger\"><i class=\"icon-stats-decline2 position-left\"></i> - 8.02%</span></td>
                                    <td><h6 class=\"text-semibold\">\$1,268</h6></td>
                                    <td><span class=\"label bg-grey-400\">Hold</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            {#<a href=\"#\"><img src=\"assets/images/brands/twitter.png\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Twitter ads</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-grey-400 position-left\"></span>
                                                04:00 - 05:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Deluxe</span></td>
                                    <td><span class=\"text-success-600\"><i class=\"icon-stats-growth2 position-left\"></i> 2.78%</span></td>
                                    <td><h6 class=\"text-semibold\">\$7,467</h6></td>
                                    <td><span class=\"label bg-grey-400\">Hold</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr class=\"active border-double\">
                                    <td colspan=\"5\">Yesterday</td>
                                    <td class=\"text-right\">
                                        <span class=\"progress-meter\" id=\"yesterday-progress\" data-progress=\"65\"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            {#<a href=\"#\"><img src=\"assets/images/brands/bing.png\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Bing campaign</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-success position-left\"></span>
                                                15:00 - 16:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Metrics</span></td>
                                    <td><span class=\"text-danger\"><i class=\"icon-stats-decline2 position-left\"></i> - 5.78%</span></td>
                                    <td><h6 class=\"text-semibold\">\$970</h6></td>
                                    <td><span class=\"label bg-success-400\">Pending</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropup\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            {#<a href=\"#\"><img src=\"assets/images/brands/amazon.png\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Amazon ads</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-danger position-left\"></span>
                                                18:00 - 19:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Blueish</span></td>
                                    <td><span class=\"text-success-600\"><i class=\"icon-stats-growth2 position-left\"></i> 6.79%</span></td>
                                    <td><h6 class=\"text-semibold\">\$1,540</h6></td>
                                    <td><span class=\"label bg-blue\">Active</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropup\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            {#<a href=\"#\"><img src=\"assets/images/brands/dribbble.png\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        </div>
                                        <div class=\"media-left\">
                                            <div class=\"\"><a href=\"#\" class=\"text-default text-semibold\">Dribbble ads</a></div>
                                            <div class=\"text-muted text-size-small\">
                                                <span class=\"status-mark border-blue position-left\"></span>
                                                20:00 - 21:00
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class=\"text-muted\">Teamable</span></td>
                                    <td><span class=\"text-danger\"><i class=\"icon-stats-decline2 position-left\"></i> 9.83%</span></td>
                                    <td><h6 class=\"text-semibold\">\$8,350</h6></td>
                                    <td><span class=\"label bg-danger\">Closed</span></td>
                                    <td class=\"text-center\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropup\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-file-stats\"></i> View statement</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-text2\"></i> Edit campaign</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-file-locked\"></i> Disable campaign</a></li>
                                                    <li class=\"divider\"></li>
                                                    <li><a href=\"#\"><i class=\"icon-gear\"></i> Settings</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /marketing campaigns -->


                    <!-- Quick stats boxes -->
                    <div class=\"row\">
                        <div class=\"col-lg-4\">

                            <!-- Members online -->
                            <div class=\"panel bg-teal-400\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <span class=\"heading-text badge bg-teal-800\">+53,6%</span>
                                    </div>

                                    <h3 class=\"no-margin\">3,450</h3>
                                    Members online
                                    <div class=\"text-muted text-size-small\">489 avg</div>
                                </div>

                                <div class=\"container-fluid\">
                                    <div id=\"members-online\"></div>
                                </div>
                            </div>
                            <!-- /members online -->

                        </div>

                        <div class=\"col-lg-4\">

                            <!-- Current server load -->
                            <div class=\"panel bg-pink-400\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog3\"></i> <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <h3 class=\"no-margin\">49.4%</h3>
                                    Current server load
                                    <div class=\"text-muted text-size-small\">34.6% avg</div>
                                </div>

                                <div id=\"server-load\"></div>
                            </div>
                            <!-- /current server load -->

                        </div>

                        <div class=\"col-lg-4\">

                            <!-- Today's revenue -->
                            <div class=\"panel bg-blue-400\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <ul class=\"icons-list\">
                                            <li><a data-action=\"reload\"></a></li>
                                        </ul>
                                    </div>

                                    <h3 class=\"no-margin\">\$18,390</h3>
                                    Today's revenue
                                    <div class=\"text-muted text-size-small\">\$37,578 avg</div>
                                </div>

                                <div id=\"today-revenue\"></div>
                            </div>
                            <!-- /today's revenue -->

                        </div>
                    </div>
                    <!-- /quick stats boxes -->


                    <!-- Support tickets -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Support tickets</h6>
                            <div class=\"heading-elements\">
                                <button type=\"button\" class=\"btn btn-link daterange-ranges heading-btn text-semibold\">
                                    <i class=\"icon-calendar3 position-left\"></i> <span></span> <b class=\"caret\"></b>
                                </button>
                            </div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table table-xlg text-nowrap\">
                                <tbody>
                                <tr>
                                    <td class=\"col-md-4\">
                                        <div class=\"media-left media-middle\">
                                            <div id=\"tickets-status\"></div>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">14,327 <small class=\"text-success text-size-base\"><i class=\"icon-arrow-up12\"></i> (+2.9%)</small></h5>
                                            <span class=\"text-muted\"><span class=\"status-mark border-success position-left\"></span> Jun 16, 10:00 am</span>
                                        </div>
                                    </td>

                                    <td class=\"col-md-3\">
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon\"><i class=\"icon-alarm-add\"></i></a>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">
                                                1,132 <small class=\"display-block no-margin\">total tickets</small>
                                            </h5>
                                        </div>
                                    </td>

                                    <td class=\"col-md-3\">
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon\"><i class=\"icon-spinner11\"></i></a>
                                        </div>

                                        <div class=\"media-left\">
                                            <h5 class=\"text-semibold no-margin\">
                                                06:25:00 <small class=\"display-block no-margin\">response time</small>
                                            </h5>
                                        </div>
                                    </td>

                                    <td class=\"text-right col-md-2\">
                                        <a href=\"#\" class=\"btn bg-teal-400\"><i class=\"icon-statistics position-left\"></i> Report</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        {#<div class=\"table-responsive\">#}
                            {#<table class=\"table text-nowrap\">#}
                                {#<thead>#}
                                {#<tr>#}
                                    {#<th style=\"width: 50px\">Due</th>#}
                                    {#<th style=\"width: 300px;\">User</th>#}
                                    {#<th>Description</th>#}
                                    {#<th class=\"text-center\" style=\"width: 20px;\"><i class=\"icon-arrow-down12\"></i></th>#}
                                {#</tr>#}
                                {#</thead>#}
                                {#<tbody>#}
                                {#<tr class=\"active border-double\">#}
                                    {#<td colspan=\"3\">Active tickets</td>#}
                                    {#<td class=\"text-right\">#}
                                        {#<span class=\"badge bg-blue\">24</span>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr>#}
                                    {#<td class=\"text-center\">#}
                                        {#<h6 class=\"no-margin\">12 <small class=\"display-block text-size-small no-margin\">hours</small></h6>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<div class=\"media-left media-middle\">#}
                                            {#<a href=\"#\" class=\"btn bg-teal-400 btn-rounded btn-icon btn-xs\">#}
                                                {#<span class=\"letter-icon\"></span>#}
                                            {#</a>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\" class=\"display-inline-block text-default text-semibold letter-icon-title\">Annabelle Doney</a>#}
                                            {#<div class=\"text-muted text-size-small\"><span class=\"status-mark border-blue position-left\"></span> Active</div>#}
                                        {#</div>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<a href=\"#\" class=\"text-default display-inline-block\">#}
                                            {#<span class=\"text-semibold\">[#1183] Workaround for OS X selects printing bug</span>#}
                                            {#<span class=\"display-block text-muted\">Chrome fixed the bug several versions ago, thus rendering this...</span>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td class=\"text-center\">#}
                                        {#<ul class=\"icons-list\">#}
                                            {#<li class=\"dropdown\">#}
                                                {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>#}
                                                {#<ul class=\"dropdown-menu dropdown-menu-right\">#}
                                                    {#<li><a href=\"#\"><i class=\"icon-undo\"></i> Quick reply</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-history\"></i> Full history</a></li>#}
                                                    {#<li class=\"divider\"></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-checkmark3 text-success\"></i> Resolve issue</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-cross2 text-danger\"></i> Close issue</a></li>#}
                                                {#</ul>#}
                                            {#</li>#}
                                        {#</ul>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr>#}
                                    {#<td class=\"text-center\">#}
                                        {#<h6 class=\"no-margin\">16 <small class=\"display-block text-size-small no-margin\">hours</small></h6>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<div class=\"media-left media-middle\">#}
                                            {#<a href=\"#\"><img src=\"assets/images/demo/users/face15.jpg\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\" class=\"display-inline-block text-default text-semibold letter-icon-title\">Chris Macintyre</a>#}
                                            {#<div class=\"text-muted text-size-small\"><span class=\"status-mark border-blue position-left\"></span> Active</div>#}
                                        {#</div>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<a href=\"#\" class=\"text-default display-inline-block\">#}
                                            {#<span class=\"text-semibold\">[#1249] Vertically center carousel controls</span>#}
                                            {#<span class=\"display-block text-muted\">Try any carousel control and reduce the screen width below...</span>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td class=\"text-center\">#}
                                        {#<ul class=\"icons-list\">#}
                                            {#<li class=\"dropdown\">#}
                                                {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>#}
                                                {#<ul class=\"dropdown-menu dropdown-menu-right\">#}
                                                    {#<li><a href=\"#\"><i class=\"icon-undo\"></i> Quick reply</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-history\"></i> Full history</a></li>#}
                                                    {#<li class=\"divider\"></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-checkmark3 text-success\"></i> Resolve issue</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-cross2 text-danger\"></i> Close issue</a></li>#}
                                                {#</ul>#}
                                            {#</li>#}
                                        {#</ul>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr>#}
                                    {#<td class=\"text-center\">#}
                                        {#<h6 class=\"no-margin\">20 <small class=\"display-block text-size-small no-margin\">hours</small></h6>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<div class=\"media-left media-middle\">#}
                                            {#<a href=\"#\" class=\"btn bg-blue btn-rounded btn-icon btn-xs\">#}
                                                {#<span class=\"letter-icon\"></span>#}
                                            {#</a>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\" class=\"display-inline-block text-default text-semibold letter-icon-title\">Robert Hauber</a>#}
                                            {#<div class=\"text-muted text-size-small\"><span class=\"status-mark border-blue position-left\"></span> Active</div>#}
                                        {#</div>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<a href=\"#\" class=\"text-default display-inline-block\">#}
                                            {#<span class=\"text-semibold\">[#1254] Inaccurate small pagination height</span>#}
                                            {#<span class=\"display-block text-muted\">The height of pagination elements is not consistent with...</span>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td class=\"text-center\">#}
                                        {#<ul class=\"icons-list\">#}
                                            {#<li class=\"dropdown\">#}
                                                {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>#}
                                                {#<ul class=\"dropdown-menu dropdown-menu-right\">#}
                                                    {#<li><a href=\"#\"><i class=\"icon-undo\"></i> Quick reply</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-history\"></i> Full history</a></li>#}
                                                    {#<li class=\"divider\"></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-checkmark3 text-success\"></i> Resolve issue</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-cross2 text-danger\"></i> Close issue</a></li>#}
                                                {#</ul>#}
                                            {#</li>#}
                                        {#</ul>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr>#}
                                    {#<td class=\"text-center\">#}
                                        {#<h6 class=\"no-margin\">40 <small class=\"display-block text-size-small no-margin\">hours</small></h6>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<div class=\"media-left media-middle\">#}
                                            {#<a href=\"#\" class=\"btn bg-warning-400 btn-rounded btn-icon btn-xs\">#}
                                                {#<span class=\"letter-icon\"></span>#}
                                            {#</a>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\" class=\"display-inline-block text-default text-semibold letter-icon-title\">Dex Sponheim</a>#}
                                            {#<div class=\"text-muted text-size-small\"><span class=\"status-mark border-blue position-left\"></span> Active</div>#}
                                        {#</div>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<a href=\"#\" class=\"text-default display-inline-block\">#}
                                            {#<span class=\"text-semibold\">[#1184] Round grid column gutter operations</span>#}
                                            {#<span class=\"display-block text-muted\">Left rounds up, right rounds down. should keep everything...</span>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td class=\"text-center\">#}
                                        {#<ul class=\"icons-list\">#}
                                            {#<li class=\"dropdown\">#}
                                                {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>#}
                                                {#<ul class=\"dropdown-menu dropdown-menu-right\">#}
                                                    {#<li><a href=\"#\"><i class=\"icon-undo\"></i> Quick reply</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-history\"></i> Full history</a></li>#}
                                                    {#<li class=\"divider\"></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-checkmark3 text-success\"></i> Resolve issue</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-cross2 text-danger\"></i> Close issue</a></li>#}
                                                {#</ul>#}
                                            {#</li>#}
                                        {#</ul>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr class=\"active border-double\">#}
                                    {#<td colspan=\"3\">Resolved tickets</td>#}
                                    {#<td class=\"text-right\">#}
                                        {#<span class=\"badge bg-success\">42</span>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr>#}
                                    {#<td class=\"text-center\">#}
                                        {#<i class=\"icon-checkmark3 text-success\"></i>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<div class=\"media-left media-middle\">#}
                                            {#<a href=\"#\" class=\"btn bg-success-400 btn-rounded btn-icon btn-xs\">#}
                                                {#<span class=\"letter-icon\"></span>#}
                                            {#</a>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\" class=\"display-inline-block text-default letter-icon-title\">Alan Macedo</a>#}
                                            {#<div class=\"text-muted text-size-small\"><span class=\"status-mark border-success position-left\"></span> Resolved</div>#}
                                        {#</div>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<a href=\"#\" class=\"text-default display-inline-block\">#}
                                            {#[#1046] Avoid some unnecessary HTML string#}
                                            {#<span class=\"display-block text-muted\">Rather than building a string of HTML and then parsing it...</span>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td class=\"text-center\">#}
                                        {#<ul class=\"icons-list\">#}
                                            {#<li class=\"dropdown\">#}
                                                {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>#}
                                                {#<ul class=\"dropdown-menu dropdown-menu-right\">#}
                                                    {#<li><a href=\"#\"><i class=\"icon-undo\"></i> Quick reply</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-history\"></i> Full history</a></li>#}
                                                    {#<li class=\"divider\"></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-plus3 text-blue\"></i> Unresolve issue</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-cross2 text-danger\"></i> Close issue</a></li>#}
                                                {#</ul>#}
                                            {#</li>#}
                                        {#</ul>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr>#}
                                    {#<td class=\"text-center\">#}
                                        {#<i class=\"icon-checkmark3 text-success\"></i>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<div class=\"media-left media-middle\">#}
                                            {#<a href=\"#\" class=\"btn bg-pink-400 btn-rounded btn-icon btn-xs\">#}
                                                {#<span class=\"letter-icon\"></span>#}
                                            {#</a>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\" class=\"display-inline-block text-default letter-icon-title\">Brett Castellano</a>#}
                                            {#<div class=\"text-muted text-size-small\"><span class=\"status-mark border-success position-left\"></span> Resolved</div>#}
                                        {#</div>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<a href=\"#\" class=\"text-default display-inline-block\">#}
                                            {#[#1038] Update json configuration#}
                                            {#<span class=\"display-block text-muted\">The <code>files</code> property is necessary to override the files property...</span>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td class=\"text-center\">#}
                                        {#<ul class=\"icons-list\">#}
                                            {#<li class=\"dropdown\">#}
                                                {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>#}
                                                {#<ul class=\"dropdown-menu dropdown-menu-right\">#}
                                                    {#<li><a href=\"#\"><i class=\"icon-undo\"></i> Quick reply</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-history\"></i> Full history</a></li>#}
                                                    {#<li class=\"divider\"></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-plus3 text-blue\"></i> Unresolve issue</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-cross2 text-danger\"></i> Close issue</a></li>#}
                                                {#</ul>#}
                                            {#</li>#}
                                        {#</ul>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr>#}
                                    {#<td class=\"text-center\">#}
                                        {#<i class=\"icon-checkmark3 text-success\"></i>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<div class=\"media-left media-middle\">#}
                                            {#<a href=\"#\"><img src=\"assets/images/demo/users/face3.jpg\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\" class=\"display-inline-block text-default\">Roxanne Forbes</a>#}
                                            {#<div class=\"text-muted text-size-small\"><span class=\"status-mark border-success position-left\"></span> Resolved</div>#}
                                        {#</div>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<a href=\"#\" class=\"text-default display-inline-block\">#}
                                            {#[#1034] Tooltip multiple event#}
                                            {#<span class=\"display-block text-muted\">Fix behavior when using tooltips and popovers that are...</span>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td class=\"text-center\">#}
                                        {#<ul class=\"icons-list\">#}
                                            {#<li class=\"dropdown\">#}
                                                {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>#}
                                                {#<ul class=\"dropdown-menu dropdown-menu-right\">#}
                                                    {#<li><a href=\"#\"><i class=\"icon-undo\"></i> Quick reply</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-history\"></i> Full history</a></li>#}
                                                    {#<li class=\"divider\"></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-plus3 text-blue\"></i> Unresolve issue</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-cross2 text-danger\"></i> Close issue</a></li>#}
                                                {#</ul>#}
                                            {#</li>#}
                                        {#</ul>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr class=\"active border-double\">#}
                                    {#<td colspan=\"3\">Closed tickets</td>#}
                                    {#<td class=\"text-right\">#}
                                        {#<span class=\"badge bg-danger\">37</span>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr>#}
                                    {#<td class=\"text-center\">#}
                                        {#<i class=\"icon-cross2 text-danger-400\"></i>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<div class=\"media-left media-middle\">#}
                                            {#<a href=\"#\"><img src=\"assets/images/demo/users/face8.jpg\" class=\"img-circle img-xs\" alt=\"\"></a>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\" class=\"display-inline-block text-default\">Mitchell Sitkin</a>#}
                                            {#<div class=\"text-muted text-size-small\"><span class=\"status-mark border-danger position-left\"></span> Closed</div>#}
                                        {#</div>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<a href=\"#\" class=\"text-default display-inline-block\">#}
                                            {#[#1040] Account for static form controls in form group#}
                                            {#<span class=\"display-block text-muted\">Resizes control label's font-size and account for the standard...</span>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td class=\"text-center\">#}
                                        {#<ul class=\"icons-list\">#}
                                            {#<li class=\"dropup\">#}
                                                {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>#}
                                                {#<ul class=\"dropdown-menu dropdown-menu-right\">#}
                                                    {#<li><a href=\"#\"><i class=\"icon-undo\"></i> Quick reply</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-history\"></i> Full history</a></li>#}
                                                    {#<li class=\"divider\"></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-reload-alt text-blue\"></i> Reopen issue</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-cross2 text-danger\"></i> Close issue</a></li>#}
                                                {#</ul>#}
                                            {#</li>#}
                                        {#</ul>#}
                                    {#</td>#}
                                {#</tr>#}

                                {#<tr>#}
                                    {#<td class=\"text-center\">#}
                                        {#<i class=\"icon-cross2 text-danger\"></i>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<div class=\"media-left media-middle\">#}
                                            {#<a href=\"#\" class=\"btn bg-brown-400 btn-rounded btn-icon btn-xs\">#}
                                                {#<span class=\"letter-icon\"></span>#}
                                            {#</a>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\" class=\"display-inline-block text-default letter-icon-title\">Katleen Jensen</a>#}
                                            {#<div class=\"text-muted text-size-small\"><span class=\"status-mark border-danger position-left\"></span> Closed</div>#}
                                        {#</div>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<a href=\"#\" class=\"text-default display-inline-block\">#}
                                            {#[#1038] Proper sizing of form control feedback#}
                                            {#<span class=\"display-block text-muted\">Feedback icon sizing inside a larger/smaller form-group...</span>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td class=\"text-center\">#}
                                        {#<ul class=\"icons-list\">#}
                                            {#<li class=\"dropup\">#}
                                                {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-menu7\"></i></a>#}
                                                {#<ul class=\"dropdown-menu dropdown-menu-right\">#}
                                                    {#<li><a href=\"#\"><i class=\"icon-undo\"></i> Quick reply</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-history\"></i> Full history</a></li>#}
                                                    {#<li class=\"divider\"></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-plus3 text-blue\"></i> Unresolve issue</a></li>#}
                                                    {#<li><a href=\"#\"><i class=\"icon-cross2 text-danger\"></i> Close issue</a></li>#}
                                                {#</ul>#}
                                            {#</li>#}
                                        {#</ul>#}
                                    {#</td>#}
                                {#</tr>#}
                                {#</tbody>#}
                            {#</table>#}
                        {#</div>#}
                    </div>
                    <!-- /support tickets -->


                    <!-- Latest posts -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Latest posts</h6>
                            <div class=\"heading-elements\">
                                <ul class=\"icons-list\">
                                    <li><a data-action=\"collapse\"></a></li>
                                    <li><a data-action=\"reload\"></a></li>
                                    <li><a data-action=\"close\"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <ul class=\"media-list content-group\">
                                        <li class=\"media stack-media-on-mobile\">
                                            <div class=\"media-left\">
                                                <div class=\"thumb\">
                                                    <a href=\"#\">
                                                        {#<img src=\"assets/images/demo/flat/1.png\" class=\"img-responsive img-rounded media-preview\" alt=\"\">#}
                                                        <span class=\"zoom-image\"><i class=\"icon-play3\"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"media-body\">
                                                <h6 class=\"media-heading\"><a href=\"#\">Up unpacked friendly</a></h6>
                                                <ul class=\"list-inline list-inline-separate text-muted mb-5\">
                                                    <li><i class=\"icon-book-play position-left\"></i> Video tutorials</li>
                                                    <li>14 minutes ago</li>
                                                </ul>
                                                The him father parish looked has sooner. Attachment frequently gay terminated son...
                                            </div>
                                        </li>

                                        <li class=\"media stack-media-on-mobile\">
                                            <div class=\"media-left\">
                                                <div class=\"thumb\">
                                                    <a href=\"#\">
                                                        {#<img src=\"assets/images/demo/flat/21.png\" class=\"img-responsive img-rounded media-preview\" alt=\"\">#}
                                                        <span class=\"zoom-image\"><i class=\"icon-play3\"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"media-body\">
                                                <h6 class=\"media-heading\"><a href=\"#\">It allowance prevailed</a></h6>
                                                <ul class=\"list-inline list-inline-separate text-muted mb-5\">
                                                    <li><i class=\"icon-book-play position-left\"></i> Video tutorials</li>
                                                    <li>12 days ago</li>
                                                </ul>
                                                Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed...
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class=\"col-lg-6\">
                                    <ul class=\"media-list content-group\">
                                        <li class=\"media stack-media-on-mobile\">
                                            <div class=\"media-left\">
                                                <div class=\"thumb\">
                                                    <a href=\"#\">
                                                        {#<img src=\"assets/images/demo/flat/12.png\" class=\"img-responsive img-rounded media-preview\" alt=\"\">#}
                                                        <span class=\"zoom-image\"><i class=\"icon-play3\"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"media-body\">
                                                <h6 class=\"media-heading\"><a href=\"#\">Case read they must</a></h6>
                                                <ul class=\"list-inline list-inline-separate text-muted mb-5\">
                                                    <li><i class=\"icon-book-play position-left\"></i> Video tutorials</li>
                                                    <li>20 hours ago</li>
                                                </ul>
                                                On it differed repeated wandered required in. Then girl neat why yet knew rose spot...
                                            </div>
                                        </li>

                                        <li class=\"media stack-media-on-mobile\">
                                            <div class=\"media-left\">
                                                <div class=\"thumb\">
                                                    <a href=\"#\">
                                                        {#<img src=\"assets/images/demo/flat/15.png\" class=\"img-responsive img-rounded media-preview\" alt=\"\">#}
                                                        <span class=\"zoom-image\"><i class=\"icon-play3\"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class=\"media-body\">
                                                <h6 class=\"media-heading\"><a href=\"#\">Too carriage attended</a></h6>
                                                <ul class=\"list-inline list-inline-separate text-muted mb-5\">
                                                    <li><i class=\"icon-book-play position-left\"></i> FAQ section</li>
                                                    <li>2 days ago</li>
                                                </ul>
                                                Marianne or husbands if at stronger ye. Considered is as middletons uncommonly...
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /latest posts -->

                </div>

                <div class=\"col-lg-4\">

                    <!-- Progress counters -->
                    <div class=\"row\">
                        <div class=\"col-md-6\">

                            <!-- Available hours -->
                            <div class=\"panel text-center\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown text-muted\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog3\"></i> <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Progress counter -->
                                    <div class=\"content-group-sm svg-center position-relative\" id=\"hours-available-progress\"></div>
                                    <!-- /progress counter -->


                                    <!-- Bars -->
                                    <div id=\"hours-available-bars\"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /available hours -->

                        </div>

                        <div class=\"col-md-6\">

                            <!-- Productivity goal -->
                            <div class=\"panel text-center\">
                                <div class=\"panel-body\">
                                    <div class=\"heading-elements\">
                                        <ul class=\"icons-list\">
                                            <li class=\"dropdown text-muted\">
                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog3\"></i> <span class=\"caret\"></span></a>
                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                    <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                                    <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Progress counter -->
                                    <div class=\"content-group-sm svg-center position-relative\" id=\"goal-progress\"></div>
                                    <!-- /progress counter -->

                                    <!-- Bars -->
                                    <div id=\"goal-bars\"></div>
                                    <!-- /bars -->

                                </div>
                            </div>
                            <!-- /productivity goal -->

                        </div>
                    </div>
                    <!-- /progress counters -->


                    <!-- Daily sales -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Daily sales stats</h6>
                            <div class=\"heading-elements\">
                                <span class=\"heading-text\">Balance: <span class=\"text-bold text-danger-600 position-right\">\$4,378</span></span>
                                <ul class=\"icons-list\">
                                    <li class=\"dropdown text-muted\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-cog3\"></i> <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li><a href=\"#\"><i class=\"icon-sync\"></i> Update data</a></li>
                                            <li><a href=\"#\"><i class=\"icon-list-unordered\"></i> Detailed log</a></li>
                                            <li><a href=\"#\"><i class=\"icon-pie5\"></i> Statistics</a></li>
                                            <li class=\"divider\"></li>
                                            <li><a href=\"#\"><i class=\"icon-cross3\"></i> Clear list</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"panel-body\">
                            <div id=\"sales-heatmap\"></div>
                        </div>

                        <div class=\"table-responsive\">
                            <table class=\"table text-nowrap\">
                                <thead>
                                <tr>
                                    <th>Application</th>
                                    <th>Time</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-primary-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Sigma application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-checkmark3 text-size-mini position-left\"></i> New order</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">06:28 pm</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$49.90</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-danger-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Alpha application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-spinner11 text-size-mini position-left\"></i> Renewal</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">04:52 pm</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$90.50</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-indigo-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Delta application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-lifebuoy text-size-mini position-left\"></i> Support</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">01:26 pm</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$60.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-success-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Omega application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-lifebuoy text-size-mini position-left\"></i> Support</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">11:46 am</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$55.00</h6>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class=\"media-left media-middle\">
                                            <a href=\"#\" class=\"btn bg-danger-400 btn-rounded btn-icon btn-xs\">
                                                <span class=\"letter-icon\"></span>
                                            </a>
                                        </div>

                                        <div class=\"media-body\">
                                            <div class=\"media-heading\">
                                                <a href=\"#\" class=\"letter-icon-title\">Alpha application</a>
                                            </div>

                                            <div class=\"text-muted text-size-small\"><i class=\"icon-spinner11 text-size-mini position-left\"></i> Renewal</div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted text-size-small\">10:29 am</span>
                                    </td>
                                    <td>
                                        <h6 class=\"text-semibold no-margin\">\$90.50</h6>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /daily sales -->


                    <!-- My messages -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">My messages</h6>
                            <div class=\"heading-elements\">
                                <span class=\"heading-text\"><i class=\"icon-history text-warning position-left\"></i> Jul 7, 10:30</span>
                                <span class=\"label bg-success heading-text\">Online</span>
                            </div>
                        </div>

                        <!-- Numbers -->
                        <div class=\"container-fluid\">
                            <div class=\"row text-center\">
                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h6 class=\"text-semibold no-margin\"><i class=\"icon-clipboard3 position-left text-slate\"></i> 2,345</h6>
                                        <span class=\"text-muted text-size-small\">this week</span>
                                    </div>
                                </div>

                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h6 class=\"text-semibold no-margin\"><i class=\"icon-calendar3 position-left text-slate\"></i> 3,568</h6>
                                        <span class=\"text-muted text-size-small\">this month</span>
                                    </div>
                                </div>

                                <div class=\"col-md-4\">
                                    <div class=\"content-group\">
                                        <h6 class=\"text-semibold no-margin\"><i class=\"icon-comments position-left text-slate\"></i> 32,693</h6>
                                        <span class=\"text-muted text-size-small\">all messages</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /numbers -->


                        <!-- Area chart -->
                        <div id=\"messages-stats\"></div>
                        <!-- /area chart -->


                        <!-- Tabs -->
                        <ul class=\"nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300\">
                            <li class=\"active\">
                                <a href=\"#messages-tue\" class=\"text-size-small text-uppercase\" data-toggle=\"tab\">
                                    Tuesday
                                </a>
                            </li>

                            <li>
                                <a href=\"#messages-mon\" class=\"text-size-small text-uppercase\" data-toggle=\"tab\">
                                    Monday
                                </a>
                            </li>

                            <li>
                                <a href=\"#messages-fri\" class=\"text-size-small text-uppercase\" data-toggle=\"tab\">
                                    Friday
                                </a>
                            </li>
                        </ul>
                        <!-- /tabs -->


                        <!-- Tabs content -->
                        {#<div class=\"tab-content\">#}
                            {#<div class=\"tab-pane active fade in has-padding\" id=\"messages-tue\">#}
                                {#<ul class=\"media-list\">#}
                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face10.jpg\" class=\"img-circle img-xs\" alt=\"\">#}
                                            {#<span class=\"badge bg-danger-400 media-badge\">8</span>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#James Alexander#}
                                                {#<span class=\"media-annotation pull-right\">14:58</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">The constitutionally inventoried precariously...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face3.jpg\" class=\"img-circle img-xs\" alt=\"\">#}
                                            {#<span class=\"badge bg-danger-400 media-badge\">6</span>#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Margo Baker#}
                                                {#<span class=\"media-annotation pull-right\">12:16</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Pinched a well more moral chose goodness...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face24.jpg\" class=\"img-circle img-xs\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Jeremy Victorino#}
                                                {#<span class=\"media-annotation pull-right\">09:48</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Pert thickly mischievous clung frowned well...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face4.jpg\" class=\"img-circle img-xs\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Beatrix Diaz#}
                                                {#<span class=\"media-annotation pull-right\">05:54</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Nightingale taped hello bucolic fussily cardinal...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face25.jpg\" class=\"img-circle img-xs\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Richard Vango#}
                                                {#<span class=\"media-annotation pull-right\">01:43</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Amidst roadrunner distantly pompously where...</span>#}
                                        {#</div>#}
                                    {#</li>#}
                                {#</ul>#}
                            {#</div>#}

                            {#<div class=\"tab-pane fade has-padding\" id=\"messages-mon\">#}
                                {#<ul class=\"media-list\">#}
                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face2.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Isak Temes#}
                                                {#<span class=\"media-annotation pull-right\">Tue, 19:58</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Reasonable palpably rankly expressly grimy...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face7.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Vittorio Cosgrove#}
                                                {#<span class=\"media-annotation pull-right\">Tue, 16:35</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Arguably therefore more unexplainable fumed...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face18.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Hilary Talaugon#}
                                                {#<span class=\"media-annotation pull-right\">Tue, 12:16</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Nicely unlike porpoise a kookaburra past more...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face14.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Bobbie Seber#}
                                                {#<span class=\"media-annotation pull-right\">Tue, 09:20</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Before visual vigilantly fortuitous tortoise...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face8.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Walther Laws#}
                                                {#<span class=\"media-annotation pull-right\">Tue, 03:29</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Far affecting more leered unerringly dishonest...</span>#}
                                        {#</div>#}
                                    {#</li>#}
                                {#</ul>#}
                            {#</div>#}

                            {#<div class=\"tab-pane fade has-padding\" id=\"messages-fri\">#}
                                {#<ul class=\"media-list\">#}
                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face15.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Owen Stretch#}
                                                {#<span class=\"media-annotation pull-right\">Mon, 18:12</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Tardy rattlesnake seal raptly earthworm...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face12.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Jenilee Mcnair#}
                                                {#<span class=\"media-annotation pull-right\">Mon, 14:03</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Since hello dear pushed amid darn trite...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face22.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Alaster Jain#}
                                                {#<span class=\"media-annotation pull-right\">Mon, 13:59</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Dachshund cardinal dear next jeepers well...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face24.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Sigfrid Thisted#}
                                                {#<span class=\"media-annotation pull-right\">Mon, 09:26</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Lighted wolf yikes less lemur crud grunted...</span>#}
                                        {#</div>#}
                                    {#</li>#}

                                    {#<li class=\"media\">#}
                                        {#<div class=\"media-left\">#}
                                            {#<img src=\"assets/images/demo/users/face17.jpg\" class=\"img-circle img-sm\" alt=\"\">#}
                                        {#</div>#}

                                        {#<div class=\"media-body\">#}
                                            {#<a href=\"#\">#}
                                                {#Sherilyn Mckee#}
                                                {#<span class=\"media-annotation pull-right\">Mon, 06:38</span>#}
                                            {#</a>#}

                                            {#<span class=\"display-block text-muted\">Less unicorn a however careless husky...</span>#}
                                        {#</div>#}
                                    {#</li>#}
                                {#</ul>#}
                            {#</div>#}
                        {#</div>#}
                        <!-- /tabs content -->

                    </div>
                    <!-- /my messages -->


                    <!-- Daily financials -->
                    <div class=\"panel panel-flat\">
                        <div class=\"panel-heading\">
                            <h6 class=\"panel-title\">Daily financials</h6>
                            <div class=\"heading-elements\">
                                <form class=\"heading-form\" action=\"#\">
                                    <div class=\"form-group\">
                                        <label class=\"checkbox checkbox-inline checkbox-switchery checkbox-right switchery-xs\">
                                            <input type=\"checkbox\" class=\"switcher\" id=\"realtime\" checked=\"checked\">
                                            Realtime
                                        </label>
                                    </div>
                                </form>
                                <span class=\"badge bg-danger-400 heading-text\">+86</span>
                            </div>
                        </div>

                        <div class=\"panel-body\">
                            <div class=\"content-group-xs\" id=\"bullets\"></div>

                            <ul class=\"media-list\">
                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-pink text-pink btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-statistics\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Stats for July, 6: 1938 orders, \$4220 revenue
                                        <div class=\"media-annotation\">2 hours ago</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-success text-success btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-checkmark3\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Invoices <a href=\"#\">#4732</a> and <a href=\"#\">#4734</a> have been paid
                                        <div class=\"media-annotation\">Dec 18, 18:36</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-alignment-unalign\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Affiliate commission for June has been paid
                                        <div class=\"media-annotation\">36 minutes ago</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-spinner11\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Order <a href=\"#\">#37745</a> from July, 1st has been refunded
                                        <div class=\"media-annotation\">4 minutes ago</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\" class=\"btn border-teal-400 text-teal btn-flat btn-rounded btn-icon btn-xs\"><i class=\"icon-redo2\"></i></a>
                                    </div>

                                    <div class=\"media-body\">
                                        Invoice <a href=\"#\">#4769</a> has been sent to <a href=\"#\">Robert Smith</a>
                                        <div class=\"media-annotation\">Dec 12, 05:46</div>
                                    </div>

                                    <div class=\"media-right media-middle\">
                                        <ul class=\"icons-list\">
                                            <li>
                                                <a href=\"#\"><i class=\"icon-arrow-right13\"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /daily financials -->

                </div>
            </div>
            <!-- /dashboard content -->


            <!-- Footer -->
            <div class=\"footer text-muted\">
               {{ \"now\"|date('Y') }} <a href=\"#\">VS</a>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->
{% endblock %}", "AdminBundle:Dashboard:list.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Dashboard/list.html.twig");
    }
}
