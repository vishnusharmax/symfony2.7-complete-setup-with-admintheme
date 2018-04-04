<?php

/* AdminBundle:Login:layout.html.twig */
class __TwigTemplate_20090ce15a4fe675cd15c1c64c6cd729946a1669d8dc3524f620abbb06479e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Login:layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    <body class=\"login-container\">

    <!-- Main navbar -->
    <div class=\"navbar navbar-inverse bg-indigo\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Userprofile/face11.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>

            <ul class=\"nav navbar-nav pull-right visible-xs-block\">
                <li><a data-toggle=\"collapse\" data-target=\"#navbar-mobile\"><i class=\"icon-tree5\"></i></a></li>
            </ul>
        </div>

        <div class=\"navbar-collapse collapse\" id=\"navbar-mobile\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"#\">
                        <i class=\"icon-display4\"></i> <span class=\"visible-xs-inline-block position-right\"> Go to website</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <i class=\"icon-user-tie\"></i> <span class=\"visible-xs-inline-block position-right\"> Contact admin</span>
                    </a>
                </li>

                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-cog3\"></i>
                        <span class=\"visible-xs-inline-block position-right\"> Options</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class=\"page-container\">

        <!-- Page content -->
        <div class=\"page-content\">

            <!-- Main content -->
            <div class=\"content-wrapper\">

                <!-- Content area -->
                <div class=\"content\">

                    <!-- Simple login form -->
                    <form action=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_login");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["loginform"] ?? $this->getContext($context, "loginform")), 'enctype');
        echo " method=\"POST\">
                        <div class=\"panel panel-body login-form\">
                            <div class=\"text-center\">
                                <div class=\"icon-object border-slate-300 text-slate-300\"><i class=\"icon-reading\"></i></div>
                                <h5 class=\"content-group\">Login to your account <small class=\"display-block\">Enter your credentials below

                                    </small></h5>
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flash_messages"]) {
            // line 61
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 62
                echo "                                        ";
                if (($context["type"] == "login")) {
                    // line 63
                    echo "
                                            <div class=\"tl-label bs-label label-info\"><strong>";
                    // line 64
                    echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                    echo "</strong></div>

                                        ";
                }
                // line 67
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                            </div>
    ";
        // line 70
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "email"), "method")) > 5)) {
            // line 71
            echo "                            <div class=\"form-group has-feedback has-feedback-left\">
                                <input type=\"email\" name=\"email\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "email"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"Username\">
                                <div class=\"form-control-feedback\">
                                    <i class=\"icon-user text-muted\"></i>
                                </div>
                            </div>
    ";
        } else {
            // line 78
            echo "        <div class=\"form-group has-feedback has-feedback-left\">
            <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Username\">
            <div class=\"form-control-feedback\">
                <i class=\"icon-user text-muted\"></i>
            </div>
        </div>
    ";
        }
        // line 85
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "password"), "method")) > 2)) {
            // line 86
            echo "                            <div class=\"form-group has-feedback has-feedback-left\">
                                <input type=\"password\" name=\"password\" value=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "password"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"Password\">
                                <div class=\"form-control-feedback\">
                                    <i class=\"icon-lock2 text-muted\"></i>
                                </div>
                            </div>
    ";
        } else {
            // line 93
            echo "        <div class=\"form-group has-feedback has-feedback-left\">
            <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
            <div class=\"form-control-feedback\">
                <i class=\"icon-lock2 text-muted\"></i>
            </div>
        </div>
        ";
        }
        // line 100
        echo "                            <div class=\"form-group login-options\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <label class=\"checkbox-inline\">

                                            <div class=\"checker\"><span class=\"\">
    ";
        // line 106
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "email"), "method")) > 5)) {
            // line 107
            echo "                                                    <input type=\"checkbox\" id=\"remember-me\" name=\"remember_me\"  class=\"styled\" checked=\"checked\">
            ";
        } else {
            // line 109
            echo "        <input type=\"checkbox\" id=\"remember-me\" name=\"remember_me\"  class=\"styled\" >

    ";
        }
        // line 112
        echo "        </span></div>
                                            Remember
                                        </label>
                                    </div>

                                    <div class=\"col-sm-6 text-right\">
                                        ";
        // line 119
        echo "                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn bg-pink-400 btn-block\">Sign in <i class=\"icon-circle-right2 position-right\"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- /simple login form -->


                    <!-- Footer -->
                    <div class=\"footer text-muted text-center\">
                        &copy; ";
        // line 133
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". <a href=\"#\">Symfony</a> by <a href=\"#\" target=\"_blank\">VS</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

    </body>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Login:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  229 => 133,  213 => 119,  205 => 112,  200 => 109,  196 => 107,  194 => 106,  186 => 100,  177 => 93,  168 => 87,  165 => 86,  162 => 85,  153 => 78,  144 => 72,  141 => 71,  139 => 70,  136 => 69,  130 => 68,  124 => 67,  118 => 64,  115 => 63,  112 => 62,  107 => 61,  103 => 60,  91 => 53,  42 => 7,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
    <body class=\"login-container\">

    <!-- Main navbar -->
    <div class=\"navbar navbar-inverse bg-indigo\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('Userprofile/face11.jpg') }}\" alt=\"\"></a>

            <ul class=\"nav navbar-nav pull-right visible-xs-block\">
                <li><a data-toggle=\"collapse\" data-target=\"#navbar-mobile\"><i class=\"icon-tree5\"></i></a></li>
            </ul>
        </div>

        <div class=\"navbar-collapse collapse\" id=\"navbar-mobile\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"#\">
                        <i class=\"icon-display4\"></i> <span class=\"visible-xs-inline-block position-right\"> Go to website</span>
                    </a>
                </li>

                <li>
                    <a href=\"#\">
                        <i class=\"icon-user-tie\"></i> <span class=\"visible-xs-inline-block position-right\"> Contact admin</span>
                    </a>
                </li>

                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"icon-cog3\"></i>
                        <span class=\"visible-xs-inline-block position-right\"> Options</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class=\"page-container\">

        <!-- Page content -->
        <div class=\"page-content\">

            <!-- Main content -->
            <div class=\"content-wrapper\">

                <!-- Content area -->
                <div class=\"content\">

                    <!-- Simple login form -->
                    <form action=\"{{ path('site_login') }}\" {{ form_enctype(loginform) }} method=\"POST\">
                        <div class=\"panel panel-body login-form\">
                            <div class=\"text-center\">
                                <div class=\"icon-object border-slate-300 text-slate-300\"><i class=\"icon-reading\"></i></div>
                                <h5 class=\"content-group\">Login to your account <small class=\"display-block\">Enter your credentials below

                                    </small></h5>
                                {% for type, flash_messages in app.session.flashBag.all %}
                                    {% for flash_message in flash_messages %}
                                        {% if type=='login' %}

                                            <div class=\"tl-label bs-label label-info\"><strong>{{ flash_message }}</strong></div>

                                        {% endif %}
                                    {% endfor %}
                                {% endfor %}
                            </div>
    {% if app.request.cookies.get('email')|length>5 %}
                            <div class=\"form-group has-feedback has-feedback-left\">
                                <input type=\"email\" name=\"email\" value=\"{{ app.request.cookies.get('email') }}\" class=\"form-control\" placeholder=\"Username\">
                                <div class=\"form-control-feedback\">
                                    <i class=\"icon-user text-muted\"></i>
                                </div>
                            </div>
    {% else %}
        <div class=\"form-group has-feedback has-feedback-left\">
            <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Username\">
            <div class=\"form-control-feedback\">
                <i class=\"icon-user text-muted\"></i>
            </div>
        </div>
    {% endif %}
    {% if app.request.cookies.get('password')|length>2 %}
                            <div class=\"form-group has-feedback has-feedback-left\">
                                <input type=\"password\" name=\"password\" value=\"{{  app.request.cookies.get('password') }}\" class=\"form-control\" placeholder=\"Password\">
                                <div class=\"form-control-feedback\">
                                    <i class=\"icon-lock2 text-muted\"></i>
                                </div>
                            </div>
    {% else %}
        <div class=\"form-group has-feedback has-feedback-left\">
            <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">
            <div class=\"form-control-feedback\">
                <i class=\"icon-lock2 text-muted\"></i>
            </div>
        </div>
        {% endif %}
                            <div class=\"form-group login-options\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <label class=\"checkbox-inline\">

                                            <div class=\"checker\"><span class=\"\">
    {% if app.request.cookies.get('email')|length>5 %}
                                                    <input type=\"checkbox\" id=\"remember-me\" name=\"remember_me\"  class=\"styled\" checked=\"checked\">
            {% else %}
        <input type=\"checkbox\" id=\"remember-me\" name=\"remember_me\"  class=\"styled\" >

    {% endif %}
        </span></div>
                                            Remember
                                        </label>
                                    </div>

                                    <div class=\"col-sm-6 text-right\">
                                        {#<a href=\"login_password_recover.html\">Forgot password?</a>#}
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn bg-pink-400 btn-block\">Sign in <i class=\"icon-circle-right2 position-right\"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- /simple login form -->


                    <!-- Footer -->
                    <div class=\"footer text-muted text-center\">
                        &copy; {{ \"now\"|date(\"Y\") }}. <a href=\"#\">Symfony</a> by <a href=\"#\" target=\"_blank\">VS</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

    </body>


{% endblock %}", "AdminBundle:Login:layout.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Login/layout.html.twig");
    }
}
