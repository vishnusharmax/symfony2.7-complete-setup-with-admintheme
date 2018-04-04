<?php

/* VlabsMediaBundle:Form:vlabs_file.html.twig */
class __TwigTemplate_7671a4912faa2991428cc62afa199673f251892eeb5e59e1864570cc97f9d96c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vlabs_file_widget' => array($this, 'block_vlabs_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VlabsMediaBundle:Form:vlabs_file.html.twig"));

        // line 1
        $this->displayBlock('vlabs_file_widget', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_vlabs_file_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vlabs_file_widget"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    ";
        // line 4
        $context["file"] = $this->env->getExtension('Vlabs\MediaBundle\Extension\TwigExtension')->getBaseFile($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "data", array()));
        // line 5
        echo "
    ";
        // line 6
        if ( !(null === ($context["file"] ?? $this->getContext($context, "file")))) {
            // line 7
            echo "        ";
            if (twig_in_filter($this->getAttribute(($context["file"] ?? $this->getContext($context, "file")), "contentType", array()), array(0 => "image/jpeg", 1 => "image/png", 2 => "image/gif"))) {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vlabs\MediaBundle\Extension\TwigExtension')->displayTemplate($this->env->getExtension('Vlabs\MediaBundle\Extension\TwigExtension')->filter(($context["file"] ?? $this->getContext($context, "file")), "resize", array("width" => 90, "height" => 90)), "image"), "html", null, true);
                echo "
        ";
            } else {
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vlabs\MediaBundle\Extension\TwigExtension')->displayTemplate(($context["file"] ?? $this->getContext($context, "file")), "form_doc"), "html", null, true);
                echo "
        ";
            }
            // line 12
            echo "    ";
        }
        // line 13
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "VlabsMediaBundle:Form:vlabs_file.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  63 => 12,  57 => 10,  51 => 8,  48 => 7,  46 => 6,  43 => 5,  41 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vlabs_file_widget %}
    {{ form_widget(form) }}

    {% set file = getBaseFile(form.vars.name, form.parent.vars.data) %}

    {% if file is not null %}
        {% if file.contentType in ['image/jpeg', 'image/png', 'image/gif'] %}
            {{ file|vlabs_filter('resize', {'width': 90, 'height': 90 })|vlabs_media('image') }}
        {% else %}
            {{ file|vlabs_media('form_doc') }}
        {% endif %}
    {% endif %}

{% endblock %}
", "VlabsMediaBundle:Form:vlabs_file.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/vendor/vlabs/media-bundle/Vlabs/MediaBundle/Resources/views/Form/vlabs_file.html.twig");
    }
}
