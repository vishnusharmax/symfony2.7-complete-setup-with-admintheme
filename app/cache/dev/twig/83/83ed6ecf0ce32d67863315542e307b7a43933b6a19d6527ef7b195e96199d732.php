<?php

/* AdminBundle:Items/list:AdminUser.html.twig */
class __TwigTemplate_f2554081e94fdd8c9fd665948b88a1700dc959762e610d77f98167fc381c6ab7 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Items/list:AdminUser.html.twig"));

        // line 1
        $this->displayBlock('list', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_list($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 2
        echo "    <table class=\"table\" id=\"datatable-table\">
        <thead>
        <tr>
            <th>Sr.No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Mobile</th>
            <th>Status</th>
            <th class=\"text-center\">Action</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        if ((array_key_exists("items", $context) && (twig_length_filter($this->env, ($context["items"] ?? $this->getContext($context, "items"))) >= 0))) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 18
                echo "                <tr class=\"gradeX\">
                    <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "id", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "name", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "email", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["items"], "userrole", array()), "name", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "mobile", array()), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 25
                if (($this->getAttribute($context["items"], "status", array()) == 1)) {
                    // line 26
                    echo "                            <span class=\"label label-success\">Active</span>
                        ";
                } else {
                    // line 28
                    echo "                            <span class=\"label label-danger\">Inactive</span>
                        ";
                }
                // line 30
                echo "                    </td>
                    <td class=\"text-center\">
                        <ul class=\"icons-list\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"icon-menu9\"></i>
                                </a>

                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_item_details", array("itemType" => ($context["itemType"] ?? $this->getContext($context, "itemType")), "id" => $this->getAttribute($context["items"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyph-icon icon-pencil\" style=\"padding-left: 33px;\"></i></a></li>
                                    <li> <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("set_status", array("itemType" => ($context["itemType"] ?? $this->getContext($context, "itemType")), "id" => $this->getAttribute($context["items"], "id", array()))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"glyph-icon icon-power-off\" style=\"padding-left: 33px;\" ></i></a></li>
                                    <li><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("set_del", array("itemType" => ($context["itemType"] ?? $this->getContext($context, "itemType")), "id" => $this->getAttribute($context["items"], "id", array()))), "html", null, true);
                echo "\" class=\"delete\"><i class=\"glyph-icon icon-trash\" style=\"padding-left: 33px;\"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
        }
        // line 49
        echo "        </tbody>

    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Items/list:AdminUser.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  124 => 48,  111 => 41,  107 => 40,  103 => 39,  92 => 30,  88 => 28,  84 => 26,  82 => 25,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  58 => 18,  53 => 17,  51 => 16,  35 => 2,  23 => 1,);
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
    <table class=\"table\" id=\"datatable-table\">
        <thead>
        <tr>
            <th>Sr.No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Mobile</th>
            <th>Status</th>
            <th class=\"text-center\">Action</th>

        </tr>
        </thead>
        <tbody>
        {% if items is defined and items|length >= 0 %}
            {% for items in items %}
                <tr class=\"gradeX\">
                    <td>{{ items.id }}</td>
                    <td>{{ items.name }}</td>
                    <td>{{ items.email }}</td>
                    <td>{{ items.userrole.name }}</td>
                    <td>{{ items.mobile }}</td>
                    <td>
                        {% if items.status==1 %}
                            <span class=\"label label-success\">Active</span>
                        {% else %}
                            <span class=\"label label-danger\">Inactive</span>
                        {% endif %}
                    </td>
                    <td class=\"text-center\">
                        <ul class=\"icons-list\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"icon-menu9\"></i>
                                </a>

                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li><a href=\"{{ path('admin_item_details',{'itemType':itemType,'id': items.id}) }}\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"glyph-icon icon-pencil\" style=\"padding-left: 33px;\"></i></a></li>
                                    <li> <a href=\"{{ path('set_status',{'itemType':itemType,'id': items.id}) }}\" class=\"delete\"><i class=\"glyph-icon icon-power-off\" style=\"padding-left: 33px;\" ></i></a></li>
                                    <li><a href=\"{{ path('set_del',{'itemType':itemType,'id': items.id}) }}\" class=\"delete\"><i class=\"glyph-icon icon-trash\" style=\"padding-left: 33px;\"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
        {% endif %}
        </tbody>

    </table>

{% endblock %}
", "AdminBundle:Items/list:AdminUser.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Items/list/AdminUser.html.twig");
    }
}
