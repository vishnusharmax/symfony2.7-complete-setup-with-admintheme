<?php

/* AdminBundle:Dashboard:index.html.twig */
class __TwigTemplate_ca9814e34982729b5afeb1390f02a7eec430b193816c1c5b43eac2d528d6e8dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'topheader' => array($this, 'block_topheader'),
            'leftmenu' => array($this, 'block_leftmenu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "AdminBundle:Common:stylesheet.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_topheader($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topheader"));

        // line 9
        echo "    ";
        echo twig_include($this->env, $context, "AdminBundle:Common:top-header.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_leftmenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftmenu"));

        // line 13
        echo "    ";
        echo twig_include($this->env, $context, "AdminBundle:Common:leftmenu.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "AdminBundle:Dashboard:body.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "
    ";
        // line 22
        echo twig_include($this->env, $context, "AdminBundle:Common:footer.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "
    <!-- Core JS files -->
    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/loaders/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/core/libraries/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/core/libraries/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/loaders/blockui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    ";
        // line 37
        echo "    ";
        // line 38
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/forms/styling/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/forms/styling/uniform.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/ui/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/pickers/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme JS files -->

    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/core/app.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/pages/components_modals.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/ui/ripple.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/jquery.cookies.js"), "html", null, true);
        echo "\"></script>
    <script>
        function getdata(data){
            \$.cookie('activeid', data, { expires:1, path: '/' });
            \$(\"#\"+data).addClass('active');
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 49,  189 => 48,  185 => 47,  181 => 46,  177 => 45,  171 => 42,  167 => 41,  163 => 40,  159 => 39,  154 => 38,  152 => 37,  145 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 27,  123 => 26,  113 => 22,  110 => 21,  104 => 20,  94 => 17,  88 => 16,  78 => 13,  72 => 12,  62 => 9,  56 => 8,  45 => 4,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ include('AdminBundle:Common:stylesheet.html.twig') }}

{% endblock %}

{% block topheader %}
    {{ include('AdminBundle:Common:top-header.html.twig') }}
{% endblock %}

{% block leftmenu %}
    {{ include('AdminBundle:Common:leftmenu.html.twig') }}
{% endblock %}

{% block content %}
    {{ include('AdminBundle:Dashboard:body.html.twig') }}
{% endblock %}

{% block footer %}

    {{ include('AdminBundle:Common:footer.html.twig') }}

{% endblock %}

{% block javascripts %}

    <!-- Core JS files -->
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/loaders/pace.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/core/libraries/jquery.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/core/libraries/bootstrap.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/loaders/blockui.min.js')}}\"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    {#<script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/visualization/d3/d3.min.js')}}\"></script>#}
    {#<script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/visualization/d3/d3_tooltip.js')}}\"></script>#}
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/forms/styling/switchery.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/forms/styling/uniform.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/ui/moment/moment.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/pickers/daterangepicker.js')}}\"></script>
    <!-- Theme JS files -->

    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/core/app.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/pages/dashboard.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/pages/components_modals.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/ui/ripple.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/jquery.cookies.js')}}\"></script>
    <script>
        function getdata(data){
            \$.cookie('activeid', data, { expires:1, path: '/' });
            \$(\"#\"+data).addClass('active');
        }
    </script>
{% endblock %}


", "AdminBundle:Dashboard:index.html.twig", "/Users/vishnu/Symfonydumystub/symfony2.7-complete-setup-with-admintheme/src/AdminBundle/Resources/views/Dashboard/index.html.twig");
    }
}
