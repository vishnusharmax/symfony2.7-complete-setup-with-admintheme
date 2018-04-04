<?php

/* AdminBundle:Items:index.html.twig */
class __TwigTemplate_90f5906e4d75df78eefe6b7da7c81072b4e7390fe68e33eb7be84113110be893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle:Items:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Items:index.html.twig"));

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

    // line 7
    public function block_topheader($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topheader"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "AdminBundle:Common:top-header.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_leftmenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftmenu"));

        // line 12
        echo "    ";
        echo twig_include($this->env, $context, "AdminBundle:Common:leftmenu.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    ";
        echo twig_include($this->env, $context, "AdminBundle:Items:body.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 20
        echo "
    ";
        // line 21
        echo twig_include($this->env, $context, "AdminBundle:Common:footer.html.twig");
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "    ";
        echo twig_include($this->env, $context, "AdminBundle:Common:javascript.html.twig");
        echo "
    <script>
        function confirm_delete() {
            return confirm('are you sure?');
        }
        \$(document).ready(function () {

            var target = \$(this).attr(\"href\");

            // load the url and show modal on success
            \$(\"a[data-target=#myModal]\").click(function (ev) {
                ev.preventDefault();
                var target = \$(this).attr(\"href\");
                // load the url and show modal on success
                \$(\"#myModal .modal-content\").load(target, function () {
                    \$(\"#myModal\").modal(\"show\");
                    \$('#textarea').wysihtml5();

                });
            });
            \$('#myModal').on('hidden.bs.modal', function (ev) {
                ev.preventDefault();
                \$(\"#myModal .modal-body\").html('');
                \$(\"#myModal .modal-header\").hide();
                \$(\"#myModal .modal-footer\").hide();
                \$(\"#myModal\").modal(\"hide\");
                // load the url and show modal on success



            });
        });
        \$('#custommsg').delay(3000).fadeOut();


        \$(document).on('change','#yourid', function () {
            var value=\$('#yourid option:selected').val();
            if(value) {
                \$.ajax({
                    url: '";
        // line 65
        echo twig_escape_filter($this->env, ($context["baseurl"] ?? $this->getContext($context, "baseurl")), "html", null, true);
        echo "masterjson?mastername=Subcategory&findid=catid',
                    type: 'GET',
                    data: 'masterid=' + value,
                    success: function (data) {
                        var \$selectDropdown =
                            \$(\"#youridappendid\")
                                .empty()
                                .html(' ');

                        \$.each(data.commandResult.data.masters, function (key, value) {
                            var id = value.Id;
                            var name = value.Name;
                            \$selectDropdown.append(
                                \$(\"<option></option>\")
                                    .attr(\"value\", id)
                                    .text(name)
                            );
                        });
                    }
                });
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Items:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 65,  128 => 26,  122 => 25,  112 => 21,  109 => 20,  103 => 19,  93 => 16,  87 => 15,  77 => 12,  71 => 11,  61 => 8,  55 => 7,  45 => 4,  39 => 3,  11 => 1,);
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
    {{ include('AdminBundle:Items:body.html.twig') }}
{% endblock %}

{% block footer %}

    {{ include('AdminBundle:Common:footer.html.twig') }}

{% endblock %}

{% block javascripts %}
    {{ include('AdminBundle:Common:javascript.html.twig') }}
    <script>
        function confirm_delete() {
            return confirm('are you sure?');
        }
        \$(document).ready(function () {

            var target = \$(this).attr(\"href\");

            // load the url and show modal on success
            \$(\"a[data-target=#myModal]\").click(function (ev) {
                ev.preventDefault();
                var target = \$(this).attr(\"href\");
                // load the url and show modal on success
                \$(\"#myModal .modal-content\").load(target, function () {
                    \$(\"#myModal\").modal(\"show\");
                    \$('#textarea').wysihtml5();

                });
            });
            \$('#myModal').on('hidden.bs.modal', function (ev) {
                ev.preventDefault();
                \$(\"#myModal .modal-body\").html('');
                \$(\"#myModal .modal-header\").hide();
                \$(\"#myModal .modal-footer\").hide();
                \$(\"#myModal\").modal(\"hide\");
                // load the url and show modal on success



            });
        });
        \$('#custommsg').delay(3000).fadeOut();


        \$(document).on('change','#yourid', function () {
            var value=\$('#yourid option:selected').val();
            if(value) {
                \$.ajax({
                    url: '{{ baseurl }}masterjson?mastername=Subcategory&findid=catid',
                    type: 'GET',
                    data: 'masterid=' + value,
                    success: function (data) {
                        var \$selectDropdown =
                            \$(\"#youridappendid\")
                                .empty()
                                .html(' ');

                        \$.each(data.commandResult.data.masters, function (key, value) {
                            var id = value.Id;
                            var name = value.Name;
                            \$selectDropdown.append(
                                \$(\"<option></option>\")
                                    .attr(\"value\", id)
                                    .text(name)
                            );
                        });
                    }
                });
            }
        });
    </script>
{% endblock %}


", "AdminBundle:Items:index.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Items/index.html.twig");
    }
}
