<?php

/* AdminBundle:Common:footer.html.twig */
class __TwigTemplate_274f6813ac8ec5b1235162ab171ec2a9491167404088ff7b6179db8f299a0483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Common:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "    <!-- Footer -->
    ";
        // line 4
        echo "                        ";
        // line 5
        echo "    ";
        // line 6
        echo "    <!-- /footer -->
    \t</div>
\t\t\t\t<!-- /content area -->

\t\t\t</div>
\t\t\t<!-- /main content -->

\t\t</div>
\t\t<!-- /page content -->

\t</div>
\t<!-- /page container -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Common:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  40 => 5,  38 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block footer %}
    <!-- Footer -->
    {#<div class=\"footer text-muted\">#}
                        {#&copy; {{ \"now\"|date(\"Y\") }}. <a href=\"#\">Fehype</a> by <a href=\"#\" target=\"_blank\">VS</a>#}
    {#</div>#}
    <!-- /footer -->
    \t</div>
\t\t\t\t<!-- /content area -->

\t\t\t</div>
\t\t\t<!-- /main content -->

\t\t</div>
\t\t<!-- /page content -->

\t</div>
\t<!-- /page container -->

{% endblock %}", "AdminBundle:Common:footer.html.twig", "/Users/vishnu/Symfonydumystub/sfstub27/src/AdminBundle/Resources/views/Common/footer.html.twig");
    }
}
