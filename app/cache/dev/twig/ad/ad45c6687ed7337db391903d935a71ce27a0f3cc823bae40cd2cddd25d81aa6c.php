<?php

/* AdminBundle:Error:list.html.twig */
class __TwigTemplate_339da20c0430c325e75f393b84817b10d484ce7d0bd16400d6b19ee8bfca1dc0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Error:list.html.twig"));

        // line 1
        $this->displayBlock('list', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_list($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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

                    <!-- Error title -->
                    <div class=\"text-center content-group\">
                        <h1 class=\"error-title\">404</h1>
                        <h5>Oops, an error has occurred. Page not found!</h5>
                        <p>";
        // line 31
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</p>
                    </div>
                    <!-- /error title -->


                    <!-- Error content -->
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3\">
                            <form action=\"#\" class=\"main-search panel panel-body\">
                                <div class=\"form-group has-feedback\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Search...\">
                                    <div class=\"form-control-feedback\">
                                        <i class=\"icon-search4 text-size-large text-muted\"></i>
                                    </div>
                                </div>

                                <div class=\"text-center\">
                                    <a href=\"#\" class=\"btn bg-pink-400\" onclick=\"goBack()\"><i class=\"icon-circle-left2 position-left\"></i> Back to dashboard</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /error wrapper -->


                    <!-- Footer -->
                    <div class=\"footer text-muted text-center\">
                        &copy; ";
        // line 58
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
        return "AdminBundle:Error:list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 58,  69 => 31,  42 => 7,  35 => 2,  23 => 1,);
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
    <body class=\"login-container\">

    <!-- Main navbar -->
    <div class=\"navbar navbar-inverse bg-indigo\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('Userprofile/face11.jpg') }}\" alt=\"\"></a>

            <ul class=\"nav navbar-nav pull-right visible-xs-block\">
                <li><a data-toggle=\"collapse\" data-target=\"#navbar-mobile\"><i class=\"icon-tree5\"></i></a></li>
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

                    <!-- Error title -->
                    <div class=\"text-center content-group\">
                        <h1 class=\"error-title\">404</h1>
                        <h5>Oops, an error has occurred. Page not found!</h5>
                        <p>{{ message }}</p>
                    </div>
                    <!-- /error title -->


                    <!-- Error content -->
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3\">
                            <form action=\"#\" class=\"main-search panel panel-body\">
                                <div class=\"form-group has-feedback\">
                                    <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Search...\">
                                    <div class=\"form-control-feedback\">
                                        <i class=\"icon-search4 text-size-large text-muted\"></i>
                                    </div>
                                </div>

                                <div class=\"text-center\">
                                    <a href=\"#\" class=\"btn bg-pink-400\" onclick=\"goBack()\"><i class=\"icon-circle-left2 position-left\"></i> Back to dashboard</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /error wrapper -->


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



{% endblock %}", "AdminBundle:Error:list.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Error/list.html.twig");
    }
}
