<?php

/* AdminBundle:Common:javascript.html.twig */
class __TwigTemplate_d9debf02c5f7fff180fddec29e5de382cbe7a328e105130f8a95bd446d89f226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Common:javascript.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 2
        echo "
    <!-- Core JS files -->
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/loaders/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/core/libraries/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/core/libraries/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/loaders/blockui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    ";
        // line 12
        echo "    ";
        // line 13
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/forms/styling/switchery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/forms/styling/uniform.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/forms/selects/bootstrap_multiselect.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/ui/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/pickers/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Theme JS files -->
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/tables/datatables/datatables.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/core/app.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 23
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/pages/components_modals.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/ui/ripple.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/jquery.cookies.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/bootstrap-confirm-delete.js"), "html", null, true);
        echo "\"></script>
    <script>
        function getdata(data){
            \$.cookie('activeid', data, { expires:1, path: '/' });
            \$(\"#\"+data).addClass('active');
        }
        \$('#datatable-table').dataTable({
        });
        \$('#datatable-tablestore').dataTable({
            \"scrollX\": true
        });
        \$('.delete').bootstrap_confirm_delete({
            heading: 'Delete',
            message: 'Are you sure you want to delete this item?',
            data_type: null
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Common:javascript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  100 => 25,  96 => 24,  91 => 23,  87 => 21,  82 => 19,  77 => 17,  73 => 16,  69 => 15,  65 => 14,  60 => 13,  58 => 12,  51 => 7,  47 => 6,  43 => 5,  39 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascript %}

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
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/tables/datatables/datatables.min.js')}}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/core/app.js')}}\"></script>
    {#<script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/pages/datatables_advanced.js')}}\"></script>#}
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/pages/components_modals.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/ui/ripple.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/jquery.cookies.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/bootstrap-confirm-delete.js')}}\"></script>
    <script>
        function getdata(data){
            \$.cookie('activeid', data, { expires:1, path: '/' });
            \$(\"#\"+data).addClass('active');
        }
        \$('#datatable-table').dataTable({
        });
        \$('#datatable-tablestore').dataTable({
            \"scrollX\": true
        });
        \$('.delete').bootstrap_confirm_delete({
            heading: 'Delete',
            message: 'Are you sure you want to delete this item?',
            data_type: null
        });
    </script>
{% endblock %}
", "AdminBundle:Common:javascript.html.twig", "/Users/vishnu/Symfonydumystub/symfony2.7-complete-setup-with-admintheme/src/AdminBundle/Resources/views/Common/javascript.html.twig");
    }
}
