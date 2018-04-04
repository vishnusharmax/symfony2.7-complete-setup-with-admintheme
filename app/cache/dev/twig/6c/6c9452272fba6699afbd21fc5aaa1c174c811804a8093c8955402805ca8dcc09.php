<?php

/* AdminBundle:Items:layout.html.twig */
class __TwigTemplate_0f40c4ab16ea075e9de4b8c4541dbab838e3e27812da8300bdc44ac2856df8b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'list' => array($this, 'block_list'),
            'popup' => array($this, 'block_popup'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Items:layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "    <!-- Main content -->
    <div class=\"content-wrapper\">

        <!-- Page header -->
        <div class=\"page-header\">
            <div class=\"page-header-content\">
                <div class=\"page-title\">
                    <h4><i class=\"icon-arrow-left52 position-left\"></i> <span
                                class=\"text-semibold\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["itemTitle"] ?? $this->getContext($context, "itemTitle")), "html", null, true);
        echo "</span></h4>
                </div>
            </div>

            <div class=\"breadcrumb-line breadcrumb-line-component\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_dashboard", array("itemType" => "Dashboard"));
        echo "\"><i
                                    class=\"icon-home2 position-left\"></i> Home</a></li>
                    <li class=\"active\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_item_list", array("itemType" => ($context["itemType"] ?? $this->getContext($context, "itemType")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["itemTitle"] ?? $this->getContext($context, "itemTitle")), "html", null, true);
        echo "</a>
                    </li>
                </ul>
                <ul class=\"breadcrumb-elements\">
                        <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_item_details", array("itemType" => ($context["itemType"] ?? $this->getContext($context, "itemType")), "id" => "-9999")), "html", null, true);
        echo "\"
                               data-target=\"#myModal\" data-toggle=\"modal\"><i
                                        class=\" icon-plus-circle2 position-left\"></i>Add ";
        // line 24
        echo twig_escape_filter($this->env, ($context["itemTitle"] ?? $this->getContext($context, "itemTitle")), "html", null, true);
        echo "</a></li>
                </ul>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class=\"content\">

            <!-- Page length options -->
            <div class=\"panel panel-flat\">
                <div class=\"panel-heading\">
                    <h5 class=\"panel-title\"></h5>
                    <div class=\"heading-elements\">
                        <ul class=\"icons-list\">
                            <li><a data-action=\"collapse\"></a></li>
                            <li><a data-action=\"reload\"></a></li>
                            <li><a data-action=\"close\"></a></li>
                        </ul>
                    </div>
                </div>

                <div class=\"panel-body\">
                </div>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flash_messages"]) {
            // line 50
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 51
                echo "                        ";
                if (($context["type"] == "Exit")) {
                    // line 52
                    echo "                            <div class=\"alert alert-close alert alert-notice\" id=\"custommsg\">
                                <a href=\"#\" title=\"Close\" class=\"glyph-icon alert-close-btn icon-remove\"></a>
                                <div class=\"bg-green alert-icon\">
                                    <i class=\"glyph-icon icon-check\"></i>
                                </div>
                                <div class=\"alert-content\">
                                    <h4 class=\"alert-title\">Notice</h4>
                                    <p>";
                    // line 59
                    echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                    echo "</p>
                                </div>
                            </div>
                        ";
                }
                // line 63
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                ";
        $this->displayBlock('list', $context, $blocks);
        // line 66
        echo "
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content animated bounceInRight\">
                ";
        // line 73
        $this->displayBlock('popup', $context, $blocks);
        // line 74
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_list($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_popup($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Items:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  179 => 73,  168 => 65,  157 => 74,  155 => 73,  146 => 66,  143 => 65,  137 => 64,  131 => 63,  124 => 59,  115 => 52,  112 => 51,  107 => 50,  103 => 49,  75 => 24,  70 => 22,  61 => 18,  56 => 16,  47 => 10,  37 => 2,  25 => 1,);
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
    <!-- Main content -->
    <div class=\"content-wrapper\">

        <!-- Page header -->
        <div class=\"page-header\">
            <div class=\"page-header-content\">
                <div class=\"page-title\">
                    <h4><i class=\"icon-arrow-left52 position-left\"></i> <span
                                class=\"text-semibold\">{{ itemTitle }}</span></h4>
                </div>
            </div>

            <div class=\"breadcrumb-line breadcrumb-line-component\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"{{ path('show_dashboard',{'itemType':'Dashboard'}) }}\"><i
                                    class=\"icon-home2 position-left\"></i> Home</a></li>
                    <li class=\"active\"><a href=\"{{ path('admin_item_list',{'itemType':itemType}) }}\">{{ itemTitle }}</a>
                    </li>
                </ul>
                <ul class=\"breadcrumb-elements\">
                        <li><a href=\"{{ path('admin_item_details',{'itemType': itemType, 'id':'-9999'}) }}\"
                               data-target=\"#myModal\" data-toggle=\"modal\"><i
                                        class=\" icon-plus-circle2 position-left\"></i>Add {{ itemTitle }}</a></li>
                </ul>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class=\"content\">

            <!-- Page length options -->
            <div class=\"panel panel-flat\">
                <div class=\"panel-heading\">
                    <h5 class=\"panel-title\"></h5>
                    <div class=\"heading-elements\">
                        <ul class=\"icons-list\">
                            <li><a data-action=\"collapse\"></a></li>
                            <li><a data-action=\"reload\"></a></li>
                            <li><a data-action=\"close\"></a></li>
                        </ul>
                    </div>
                </div>

                <div class=\"panel-body\">
                </div>
                {% for type, flash_messages in app.session.flashBag.all %}
                    {% for flash_message in flash_messages %}
                        {% if type=='Exit' %}
                            <div class=\"alert alert-close alert alert-notice\" id=\"custommsg\">
                                <a href=\"#\" title=\"Close\" class=\"glyph-icon alert-close-btn icon-remove\"></a>
                                <div class=\"bg-green alert-icon\">
                                    <i class=\"glyph-icon icon-check\"></i>
                                </div>
                                <div class=\"alert-content\">
                                    <h4 class=\"alert-title\">Notice</h4>
                                    <p>{{ flash_message }}</p>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                {% endfor %}
                {% block list %}{% endblock list %}

            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content animated bounceInRight\">
                {% block popup %}{% endblock %}
            </div>
        </div>
    </div>

{% endblock content %}", "AdminBundle:Items:layout.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Items/layout.html.twig");
    }
}
