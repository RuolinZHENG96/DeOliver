<?php

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig */
class __TwigTemplate_8e93ed6cec9c0ed4b5e8ac3c533e328ac8a919fa3382c2ba9b8940b9cad43e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">list</i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available fields", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block\">
        <div class=\"alert alert-info js-available-fields\" role=\"alert\">
        </div>

        <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("* Required field", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 36,  27 => 30,  22 => 27,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig", "/home/deolive1/public_html/cn/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_available_fields.html.twig");
    }
}
