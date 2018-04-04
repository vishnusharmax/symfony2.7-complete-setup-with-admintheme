<?php

/* AdminBundle:Items/form:itemform.html.twig */
class __TwigTemplate_795700d969e8207074cd1b6524b38bec8854a1562be776450f308b2f8d539c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'popup' => array($this, 'block_popup'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Items/form:itemform.html.twig"));

        // line 1
        $this->displayBlock('popup', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_popup($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup"));

        // line 2
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/forms/styling/uniform.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/editors/wysihtml5/wysihtml5.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/editors/wysihtml5/toolbar.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/editors/wysihtml5/parsers.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/editors/wysihtml5/locales/bootstrap-wysihtml5.ua-UA.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/core/app.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/pages/editor_wysihtml5.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/material/assets/js/plugins/ui/ripple.min.js"), "html", null, true);
        echo "\"></script>
    <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Add / Edit ";
        // line 12
        echo twig_escape_filter($this->env, ($context["itemTitle"] ?? $this->getContext($context, "itemTitle")), "html", null, true);
        echo "</h4>
                </div><!--end modal-header-->
    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["itemform"] ?? $this->getContext($context, "itemform")), 'form_start', array("attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["itemform"] ?? $this->getContext($context, "itemform")), 'errors');
        echo "
    <div class=\"modal-body\">
                    <div class=\"example-box-wrapper\">
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["itemform"] ?? $this->getContext($context, "itemform")), 'widget');
        echo "
                    </div><!--end example-box-wrapper-->
                </div><!--end modal-body-->

                ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["itemform"] ?? $this->getContext($context, "itemform")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Items/form:itemform.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  85 => 18,  79 => 15,  75 => 14,  70 => 12,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block popup %}
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/forms/styling/uniform.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/editors/wysihtml5/wysihtml5.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/editors/wysihtml5/toolbar.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/editors/wysihtml5/parsers.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/editors/wysihtml5/locales/bootstrap-wysihtml5.ua-UA.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/core/app.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/pages/editor_wysihtml5.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('admin/material/assets/js/plugins/ui/ripple.min.js')}}\"></script>
    <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Add / Edit {{ itemTitle }}</h4>
                </div><!--end modal-header-->
    {{ form_start(itemform, { 'attr' : { 'class': 'form-horizontal',novalidate: 'novalidate' } }) }}
    {{ form_errors(itemform) }}
    <div class=\"modal-body\">
                    <div class=\"example-box-wrapper\">
                    {{form_widget(itemform)  }}
                    </div><!--end example-box-wrapper-->
                </div><!--end modal-body-->

                {{ form_end(itemform) }}

{% endblock %}", "AdminBundle:Items/form:itemform.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Items/form/itemform.html.twig");
    }
}
