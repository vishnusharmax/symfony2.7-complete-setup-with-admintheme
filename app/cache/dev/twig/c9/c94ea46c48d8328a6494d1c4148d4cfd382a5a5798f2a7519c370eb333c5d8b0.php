<?php

/* AdminBundle:Common:leftmenu.html.twig */
class __TwigTemplate_74d3d0928e952bde5ce8010d864dfbb93b819a5f9a78bb1ca76cfbe9a18aa4ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'leftmenu' => array($this, 'block_leftmenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Common:leftmenu.html.twig"));

        // line 1
        $this->displayBlock('leftmenu', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_leftmenu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftmenu"));

        // line 2
        echo "    <!-- Page container -->
    <div class=\"page-container\">

        <!-- Page content -->
        <div class=\"page-content\">
            <!-- Main sidebar -->
            <div class=\"sidebar sidebar-main\">
                <div class=\"sidebar-content\">

                    <!-- User menu -->
                    <div class=\"sidebar-user\">
                        <div class=\"category-content\">
                            <div class=\"media\">
                                <a href=\"#\" class=\"media-left\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/images/demo/users/face10.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-sm\" alt=\"\"></a>
                                <div class=\"media-body\">
                                    <span class=\"media-heading text-semibold\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["users"] ?? $this->getContext($context, "users")), "name", array()), "html", null, true);
        echo "</span>
                                    <div class=\"text-size-mini text-muted\">
                                        <i class=\"icon-pin text-size-small\"></i> &nbsp;";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["users"] ?? $this->getContext($context, "users")), "userrole", array()), "name", array()), "html", null, true);
        echo "
                                    </div>
                                </div>
                                <div class=\"media-right media-middle\">
                                    <ul class=\"icons-list\">
                                        <li>
                                            ";
        // line 26
        echo "                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class=\"sidebar-category sidebar-category-visible\">
                        <div class=\"category-content no-padding\">
                            <ul class=\"navigation navigation-main navigation-accordion\">

                                <!-- Main -->
                                <li class=\"navigation-header\"><span>Main</span> <i class=\"icon-menu\" title=\"Main pages\"></i></li>
                                <li id=\"2\" onclick=\"getdata(2)\" ";
        // line 42
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "activeid"), "method") == 2)) {
            echo "class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_dashboard", array("itemType" => "Dashboard"));
        echo "\"><i class=\"icon-home4\"></i> <span>Dashboard</span></a></li>
                                <li>
                                    <a href=\"#\"><i class=\"icon-stack2\"></i> <span>Masters</span></a>
                                    <ul>
                                        <li id=\"3\" onclick=\"getdata(3)\" ";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "activeid"), "method") == 3)) {
            echo "class=\"active\" ";
        }
        echo ">
                                            <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_item_list", array("itemType" => "AdminUser"));
        echo "\"><i class=\" icon-user-plus\"></i> <span>Admin</span></a>
                                        </li>
                                        <li id=\"4\" onclick=\"getdata(4)\" ";
        // line 49
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "activeid"), "method") == 4)) {
            echo "class=\"active\" ";
        }
        echo ">
                                            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_item_list", array("itemType" => "Userrole"));
        echo "\"><i class=\"icon-users4\"></i> <span>User role</span></a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Common:leftmenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 50,  109 => 49,  104 => 47,  98 => 46,  87 => 42,  69 => 26,  60 => 19,  55 => 17,  50 => 15,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block leftmenu %}
    <!-- Page container -->
    <div class=\"page-container\">

        <!-- Page content -->
        <div class=\"page-content\">
            <!-- Main sidebar -->
            <div class=\"sidebar sidebar-main\">
                <div class=\"sidebar-content\">

                    <!-- User menu -->
                    <div class=\"sidebar-user\">
                        <div class=\"category-content\">
                            <div class=\"media\">
                                <a href=\"#\" class=\"media-left\"><img src=\"{{ asset('admin/material/assets/images/demo/users/face10.jpg') }}\" class=\"img-circle img-sm\" alt=\"\"></a>
                                <div class=\"media-body\">
                                    <span class=\"media-heading text-semibold\">{{ users.name }}</span>
                                    <div class=\"text-size-mini text-muted\">
                                        <i class=\"icon-pin text-size-small\"></i> &nbsp;{{ users.userrole.name }}
                                    </div>
                                </div>
                                <div class=\"media-right media-middle\">
                                    <ul class=\"icons-list\">
                                        <li>
                                            {#<a href=\"#\"><i class=\"icon-cog3\"></i></a>#}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class=\"sidebar-category sidebar-category-visible\">
                        <div class=\"category-content no-padding\">
                            <ul class=\"navigation navigation-main navigation-accordion\">

                                <!-- Main -->
                                <li class=\"navigation-header\"><span>Main</span> <i class=\"icon-menu\" title=\"Main pages\"></i></li>
                                <li id=\"2\" onclick=\"getdata(2)\" {% if app.request.cookies.get('activeid')== 2  %}class=\"active\" {% endif %}><a href=\"{{ path('show_dashboard',{'itemType':'Dashboard'}) }}\"><i class=\"icon-home4\"></i> <span>Dashboard</span></a></li>
                                <li>
                                    <a href=\"#\"><i class=\"icon-stack2\"></i> <span>Masters</span></a>
                                    <ul>
                                        <li id=\"3\" onclick=\"getdata(3)\" {% if app.request.cookies.get('activeid')== 3  %}class=\"active\" {% endif %}>
                                            <a href=\"{{ path('admin_item_list',{'itemType':'AdminUser'}) }}\"><i class=\" icon-user-plus\"></i> <span>Admin</span></a>
                                        </li>
                                        <li id=\"4\" onclick=\"getdata(4)\" {% if app.request.cookies.get('activeid')== 4  %}class=\"active\" {% endif %}>
                                            <a href=\"{{ path('admin_item_list',{'itemType':'Userrole'}) }}\"><i class=\"icon-users4\"></i> <span>User role</span></a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->
{% endblock %}", "AdminBundle:Common:leftmenu.html.twig", "/Users/vishnu/Symfonydumystub/symfony2.7-complete-setup-with-admintheme/src/AdminBundle/Resources/views/Common/leftmenu.html.twig");
    }
}
