<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\OpenServer\domains\KPCENTR/themes/rainlab-vanilla/pages/blog/post.htm */
class __TwigTemplate_40b5af493baf04bb13d611729e3ec5b6befec6d2114df914bfeb6573e0ab9cae extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<hr />
<h4>Comments</h4>
";
        // line 5
        if (($context["user"] ?? null)) {
            // line 6
            echo "    ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forumEmbedTopic"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
        } else {
            // line 8
            echo "    <p>Please <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
            echo "\">sign in</a> to comment!</p>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\KPCENTR/themes/rainlab-vanilla/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  50 => 6,  48 => 5,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'blogPost' %}

<hr />
<h4>Comments</h4>
{% if user %}
    {% component 'forumEmbedTopic' %}
{% else %}
    <p>Please <a href=\"{{ 'account'|page }}\">sign in</a> to comment!</p>
{% endif %}", "D:\\OpenServer\\domains\\KPCENTR/themes/rainlab-vanilla/pages/blog/post.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 1, "if" => 5);
        static $filters = array("page" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if'],
                ['page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
