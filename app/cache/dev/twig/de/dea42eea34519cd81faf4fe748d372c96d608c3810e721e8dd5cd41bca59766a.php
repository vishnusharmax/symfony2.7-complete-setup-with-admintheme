<?php

/* AdminBundle:Common:top-header.html.twig */
class __TwigTemplate_dd18079f0c3974dfe5bf85ab52c37f8ad0287d36f9d403b37d9ee60ac633af8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'topheader' => array($this, 'block_topheader'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Common:top-header.html.twig"));

        // line 1
        $this->displayBlock('topheader', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_topheader($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topheader"));

        // line 2
        echo "    <!-- Main navbar -->
    <div class=\"navbar navbar-inverse\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_dashboard", array("itemType" => "Dashboard"));
        echo "\">
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/logo_light.png"), "html", null, true);
        echo "\" alt=\"\">
            </a>

            ";
        // line 10
        echo "
            <ul class=\"nav navbar-nav visible-xs-block\">
                <li><a data-toggle=\"collapse\" data-target=\"#navbar-mobile\"><i class=\"icon-tree5\"></i></a></li>
                <li><a class=\"sidebar-mobile-main-toggle\"><i class=\"icon-paragraph-justify3\"></i></a></li>
            </ul>
        </div>

        <div class=\"navbar-collapse collapse\" id=\"navbar-mobile\">
            <ul class=\"nav navbar-nav\">
                <li><a class=\"sidebar-control sidebar-main-toggle hidden-xs\"><i class=\"icon-paragraph-justify3\"></i></a></li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-git-compare\"></i>
                        <span class=\"visible-xs-inline-block position-right\">Git updates</span>
                        <span class=\"badge bg-warning-400\">9</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-content\">
                        <div class=\"dropdown-content-heading\">
                            Git updates
                            <ul class=\"icons-list\">
                                <li><a href=\"#\"><i class=\"icon-sync\"></i></a></li>
                            </ul>
                        </div>

                        <ul class=\"media-list dropdown-content-body width-350\">
                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-pull-request\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    Drop the IE <a href=\"#\">specific hacks</a> for temporal inputs
                                    <div class=\"media-annotation\">4 minutes ago</div>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-commit\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    Add full font overrides for popovers and tooltips
                                    <div class=\"media-annotation\">36 minutes ago</div>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-info text-info btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-branch\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    <a href=\"#\">Chris Arney</a> created a new <span class=\"text-semibold\">Design</span> branch
                                    <div class=\"media-annotation\">2 hours ago</div>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-success text-success btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-merge\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    <a href=\"#\">Eugene Kopyov</a> merged <span class=\"text-semibold\">Master</span> and <span class=\"text-semibold\">Dev</span> branches
                                    <div class=\"media-annotation\">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-pull-request\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    Have Carousel ignore keyboard events
                                    <div class=\"media-annotation\">Dec 12, 05:46</div>
                                </div>
                            </li>
                        </ul>

                        <div class=\"dropdown-content-footer\">
                            <a href=\"#\" data-popup=\"tooltip\" title=\"All activity\"><i class=\"icon-menu display-block\"></i></a>
                        </div>
                    </div>
                </li>
            </ul>

            <p class=\"navbar-text\"><span class=\"label bg-success\">Online</span></p>

            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown language-switch\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/flags/gb.png"), "html", null, true);
        echo "\" class=\"position-left\" alt=\"\">
                        English
                        <span class=\"caret\"></span>
                    </a>

                    <ul class=\"dropdown-menu\">
                        <li><a class=\"deutsch\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/flags/de.png"), "html", null, true);
        echo "\" alt=\"\"> Deutsch</a></li>
                        <li><a class=\"ukrainian\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/flags/ua.png"), "html", null, true);
        echo "\" alt=\"\"> Українська</a></li>
                        <li><a class=\"english\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/flags/gb.png"), "html", null, true);
        echo "\" alt=\"\"> English</a></li>
                        <li><a class=\"espana\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/flags/es.png"), "html", null, true);
        echo "\" alt=\"\"> España</a></li>
                        <li><a class=\"russian\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/flags/ru.png"), "html", null, true);
        echo "\" alt=\"\"> Русский</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-bubbles4\"></i>
                        <span class=\"visible-xs-inline-block position-right\">Messages</span>
                        <span class=\"badge bg-warning-400\">2</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-content width-350\">
                        <div class=\"dropdown-content-heading\">
                            Messages
                            <ul class=\"icons-list\">
                                <li><a href=\"#\"><i class=\"icon-compose\"></i></a></li>
                            </ul>
                        </div>

                        <ul class=\"media-list dropdown-content-body\">
                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/demo/users/face10.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-sm\" alt=\"\">
                                    <span class=\"badge bg-danger-400 media-badge\">5</span>
                                </div>

                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">James Alexander</span>
                                        <span class=\"media-annotation pull-right\">04:58</span>
                                    </a>

                                    <span class=\"text-muted\">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/demo/users/face10.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-sm\" alt=\"\">
                                    <span class=\"badge bg-danger-400 media-badge\">4</span>
                                </div>

                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">Margo Baker</span>
                                        <span class=\"media-annotation pull-right\">12:16</span>
                                    </a>

                                    <span class=\"text-muted\">That was something he was unable to do because...</span>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\"><img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/demo/users/face10.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-sm\" alt=\"\"></div>
                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">Jeremy Victorino</span>
                                        <span class=\"media-annotation pull-right\">22:48</span>
                                    </a>

                                    <span class=\"text-muted\">But that would be extremely strained and suspicious...</span>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/demo/users/face10.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-sm\" alt=\"\"></div>
                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">Beatrix Diaz</span>
                                        <span class=\"media-annotation pull-right\">Tue</span>
                                    </a>

                                    <span class=\"text-muted\">What a strenuous career it is that I've chosen...</span>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/demo/users/face10.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-sm\" alt=\"\"></div>
                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">Richard Vango</span>
                                        <span class=\"media-annotation pull-right\">Mon</span>
                                    </a>

                                    <span class=\"text-muted\">Other travelling salesmen live a life of luxury...</span>
                                </div>
                            </li>
                        </ul>

                        <div class=\"dropdown-content-footer\">
                            <a href=\"#\" data-popup=\"tooltip\" title=\"All messages\"><i class=\"icon-menu display-block\"></i></a>
                        </div>
                    </div>
                </li>

                <li class=\"dropdown dropdown-user\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/demo/users/face10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <span>";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute(($context["users"] ?? $this->getContext($context, "users")), "name", array()), "html", null, true);
        echo "</span>
                        <i class=\"caret\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li><a href=\"#\"><i class=\"icon-user-plus\"></i> My profile</a></li>
                        <li><a href=\"#\"><i class=\"icon-coins\"></i> My balance</a></li>
                        <li><a href=\"#\"><span class=\"badge bg-teal-400 pull-right\">58</span> <i class=\"icon-comment-discussion\"></i> Messages</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\"><i class=\"icon-cog5\"></i> Account settings</a></li>
                        <li><a href=\"";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_logout");
        echo "\"><i class=\"icon-switch2\"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Common:top-header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  304 => 223,  291 => 213,  287 => 212,  264 => 192,  249 => 180,  234 => 168,  216 => 153,  197 => 137,  172 => 115,  168 => 114,  164 => 113,  160 => 112,  156 => 111,  147 => 105,  50 => 10,  44 => 6,  40 => 5,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block topheader %}
    <!-- Main navbar -->
    <div class=\"navbar navbar-inverse\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"{{ path('show_dashboard',{'itemType':'Dashboard'}) }}\">
                <img src=\"{{ asset('admin/material/assets/images/logo_light.png') }}\" alt=\"\">
            </a>

            {#<a class=\"navbar-brand\" href=\"index.html\"><img src=\"assets/images/logo_light.png\" alt=\"\"></a>#}

            <ul class=\"nav navbar-nav visible-xs-block\">
                <li><a data-toggle=\"collapse\" data-target=\"#navbar-mobile\"><i class=\"icon-tree5\"></i></a></li>
                <li><a class=\"sidebar-mobile-main-toggle\"><i class=\"icon-paragraph-justify3\"></i></a></li>
            </ul>
        </div>

        <div class=\"navbar-collapse collapse\" id=\"navbar-mobile\">
            <ul class=\"nav navbar-nav\">
                <li><a class=\"sidebar-control sidebar-main-toggle hidden-xs\"><i class=\"icon-paragraph-justify3\"></i></a></li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-git-compare\"></i>
                        <span class=\"visible-xs-inline-block position-right\">Git updates</span>
                        <span class=\"badge bg-warning-400\">9</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-content\">
                        <div class=\"dropdown-content-heading\">
                            Git updates
                            <ul class=\"icons-list\">
                                <li><a href=\"#\"><i class=\"icon-sync\"></i></a></li>
                            </ul>
                        </div>

                        <ul class=\"media-list dropdown-content-body width-350\">
                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-pull-request\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    Drop the IE <a href=\"#\">specific hacks</a> for temporal inputs
                                    <div class=\"media-annotation\">4 minutes ago</div>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-commit\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    Add full font overrides for popovers and tooltips
                                    <div class=\"media-annotation\">36 minutes ago</div>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-info text-info btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-branch\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    <a href=\"#\">Chris Arney</a> created a new <span class=\"text-semibold\">Design</span> branch
                                    <div class=\"media-annotation\">2 hours ago</div>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-success text-success btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-merge\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    <a href=\"#\">Eugene Kopyov</a> merged <span class=\"text-semibold\">Master</span> and <span class=\"text-semibold\">Dev</span> branches
                                    <div class=\"media-annotation\">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <a href=\"#\" class=\"btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm\"><i class=\"icon-git-pull-request\"></i></a>
                                </div>

                                <div class=\"media-body\">
                                    Have Carousel ignore keyboard events
                                    <div class=\"media-annotation\">Dec 12, 05:46</div>
                                </div>
                            </li>
                        </ul>

                        <div class=\"dropdown-content-footer\">
                            <a href=\"#\" data-popup=\"tooltip\" title=\"All activity\"><i class=\"icon-menu display-block\"></i></a>
                        </div>
                    </div>
                </li>
            </ul>

            <p class=\"navbar-text\"><span class=\"label bg-success\">Online</span></p>

            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown language-switch\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"{{ asset('admin/material/assets/images/flags/gb.png') }}\" class=\"position-left\" alt=\"\">
                        English
                        <span class=\"caret\"></span>
                    </a>

                    <ul class=\"dropdown-menu\">
                        <li><a class=\"deutsch\"><img src=\"{{ asset('admin/material/assets/images/flags/de.png') }}\" alt=\"\"> Deutsch</a></li>
                        <li><a class=\"ukrainian\"><img src=\"{{ asset('admin/material/assets/images/flags/ua.png') }}\" alt=\"\"> Українська</a></li>
                        <li><a class=\"english\"><img src=\"{{ asset('admin/material/assets/images/flags/gb.png') }}\" alt=\"\"> English</a></li>
                        <li><a class=\"espana\"><img src=\"{{ asset('admin/material/assets/images/flags/es.png') }}\" alt=\"\"> España</a></li>
                        <li><a class=\"russian\"><img src=\"{{ asset('admin/material/assets/images/flags/ru.png') }}\" alt=\"\"> Русский</a></li>
                    </ul>
                </li>

                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-bubbles4\"></i>
                        <span class=\"visible-xs-inline-block position-right\">Messages</span>
                        <span class=\"badge bg-warning-400\">2</span>
                    </a>

                    <div class=\"dropdown-menu dropdown-content width-350\">
                        <div class=\"dropdown-content-heading\">
                            Messages
                            <ul class=\"icons-list\">
                                <li><a href=\"#\"><i class=\"icon-compose\"></i></a></li>
                            </ul>
                        </div>

                        <ul class=\"media-list dropdown-content-body\">
                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"{{ asset('admin/material/assets/images/demo/users/face10.jpg') }}\" class=\"img-circle img-sm\" alt=\"\">
                                    <span class=\"badge bg-danger-400 media-badge\">5</span>
                                </div>

                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">James Alexander</span>
                                        <span class=\"media-annotation pull-right\">04:58</span>
                                    </a>

                                    <span class=\"text-muted\">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\">
                                    <img src=\"{{ asset('admin/material/assets/images/demo/users/face10.jpg') }}\" class=\"img-circle img-sm\" alt=\"\">
                                    <span class=\"badge bg-danger-400 media-badge\">4</span>
                                </div>

                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">Margo Baker</span>
                                        <span class=\"media-annotation pull-right\">12:16</span>
                                    </a>

                                    <span class=\"text-muted\">That was something he was unable to do because...</span>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\"><img src=\"{{ asset('admin/material/assets/images/demo/users/face10.jpg') }}\" class=\"img-circle img-sm\" alt=\"\"></div>
                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">Jeremy Victorino</span>
                                        <span class=\"media-annotation pull-right\">22:48</span>
                                    </a>

                                    <span class=\"text-muted\">But that would be extremely strained and suspicious...</span>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\"><img src=\"{{ asset('admin/material/assets/images/demo/users/face10.jpg') }}\" class=\"img-circle img-sm\" alt=\"\"></div>
                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">Beatrix Diaz</span>
                                        <span class=\"media-annotation pull-right\">Tue</span>
                                    </a>

                                    <span class=\"text-muted\">What a strenuous career it is that I've chosen...</span>
                                </div>
                            </li>

                            <li class=\"media\">
                                <div class=\"media-left\"><img src=\"{{ asset('admin/material/assets/images/demo/users/face10.jpg') }}\" class=\"img-circle img-sm\" alt=\"\"></div>
                                <div class=\"media-body\">
                                    <a href=\"#\" class=\"media-heading\">
                                        <span class=\"text-semibold\">Richard Vango</span>
                                        <span class=\"media-annotation pull-right\">Mon</span>
                                    </a>

                                    <span class=\"text-muted\">Other travelling salesmen live a life of luxury...</span>
                                </div>
                            </li>
                        </ul>

                        <div class=\"dropdown-content-footer\">
                            <a href=\"#\" data-popup=\"tooltip\" title=\"All messages\"><i class=\"icon-menu display-block\"></i></a>
                        </div>
                    </div>
                </li>

                <li class=\"dropdown dropdown-user\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"{{ asset('admin/material/assets/images/demo/users/face10.jpg') }}\" alt=\"\">
                        <span>{{ users.name }}</span>
                        <i class=\"caret\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li><a href=\"#\"><i class=\"icon-user-plus\"></i> My profile</a></li>
                        <li><a href=\"#\"><i class=\"icon-coins\"></i> My balance</a></li>
                        <li><a href=\"#\"><span class=\"badge bg-teal-400 pull-right\">58</span> <i class=\"icon-comment-discussion\"></i> Messages</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\"><i class=\"icon-cog5\"></i> Account settings</a></li>
                        <li><a href=\"{{ path('site_logout') }}\"><i class=\"icon-switch2\"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
{% endblock %}", "AdminBundle:Common:top-header.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Common/top-header.html.twig");
    }
}
