<?php

/* AdminBundle:Common:stylesheet.html.twig */
class __TwigTemplate_7e92cc004d466962213ecd0cfded101845016e24c7f1628dd3a69f8242f884cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Common:stylesheet.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/css/icons/icomoon/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/css/colors.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/bootstrap-confirm-delete.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <style>
        .checker input[type=checkbox], .choice input[type=radio] {
            border: none;
            background: 0 0;
            display: -moz-inline-box;
            /* display: inline-block; */
            margin: 0;
            vertical-align: top;
            cursor: pointer;
            position: absolute;
            top: -1px;
             left: 0px;
             z-index: 2;
             opacity: 1;
        }

        #datatable-table_wrapper{
            padding: 15px !important;
        }
        .wysihtml5-toolbar {
            margin: 0;
            padding: 7px !important;
            padding-top: 0;
            display: block;
            background-color: #fff;
            border: 1px solid #ddd;
            border-bottom: 0;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Common:stylesheet.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('admin/material/assets/css/icons/icomoon/styles.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('admin/material/assets/css/bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('admin/material/assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('admin/material/assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('admin/material/assets/css/colors.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ asset('admin/material/assets/js/bootstrap-confirm-delete.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <style>
        .checker input[type=checkbox], .choice input[type=radio] {
            border: none;
            background: 0 0;
            display: -moz-inline-box;
            /* display: inline-block; */
            margin: 0;
            vertical-align: top;
            cursor: pointer;
            position: absolute;
            top: -1px;
             left: 0px;
             z-index: 2;
             opacity: 1;
        }

        #datatable-table_wrapper{
            padding: 15px !important;
        }
        .wysihtml5-toolbar {
            margin: 0;
            padding: 7px !important;
            padding-top: 0;
            display: block;
            background-color: #fff;
            border: 1px solid #ddd;
            border-bottom: 0;
            border-top-right-radius: 3px;
            border-top-left-radius: 3px;
        }
    </style>

{% endblock %}
", "AdminBundle:Common:stylesheet.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Common/stylesheet.html.twig");
    }
}
