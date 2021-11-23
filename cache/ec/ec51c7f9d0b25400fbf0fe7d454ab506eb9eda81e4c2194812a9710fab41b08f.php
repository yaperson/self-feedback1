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

/* classeList.html.twig */
class __TwigTemplate_9b7251b19304635160fe4f31bd6836348d7bbe58634a29a2c8ebb0d424eddea3 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"/style/style.css\">
    <link rel=\"stylesheet\" href=\"/style/dashboard.css\">
    <title>dashboard</title>
</head>
<body>
    ";
        // line 12
        if ((0 !== twig_compare(($context["error"] ?? null), ""))) {
            // line 13
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</div>    
    ";
        }
        // line 15
        echo "    <header>

        <nav class=\"leftNav\" id=\"myTopnav\">
            <div class=\"leftnav__date\">
                <a class=\"topnav__link\">Rapports du \"date\" au \"date\"</a>
                <a class=\"topnav__link\">Rapports du \"date\" au \"date\"</a>
                <a class=\"topnav__link\">Rapports du \"date\" au \"date\"</a>
            </div>
            <span class=\"leftnav__separateBar\"></span>
            <div class=\"leftnav__param\">
                <a class=\"topnav__link\" href=\"dashboard.php\">| Rapports</a>
                <a class=\"topnav__link\" href=\"classeList.php\">| Gestion des classes</a>
                <a class=\"topnav__link\" href=\"userList.php\">| Gestion des utilisateurs</a>
            </div>
        </nav>
        
        <nav class=\"topnav\" id=\"myTopnav\">
          <div id=\"left\">
            <img class=\"topnav__link img\" src=\"/images/cropped-cropped-NDLP-3-min-e1544695116495.png\">
            <span class=\"topnav__link\">Notre Dame de la Providence</span>
          </div>
          <a class=\"topnav__link\" id=\"right\" href=\"index.html\">| Logout</a>
        </nav>
    </header>
    <main>
    <div class=\"bloc_dashboard\">
        <div class=\"btn_container\">
            <h1>FeedBack - ";
        // line 42
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1> 
            <a href=\"classeadd.php\"><button id=\"btn5\">Add classe</button></a>
        </div>
        <table>
            <tr class=\"table_title\">
                <th>id</th>
                <th>libellé</th>
            </tr>
            <tr>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["classes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["classes"]) {
            // line 52
            echo "               <tr><th class=\"table_id\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_Id", [], "any", false, false, false, 52), "html", null, true);
            echo "</th> <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_libelle", [], "any", false, false, false, 52), "html", null, true);
            echo "</th></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tr>
        </table>
    </div>
    </main>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "classeList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 54,  103 => 52,  99 => 51,  87 => 42,  58 => 15,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "classeList.html.twig", "C:\\Users\\legryan\\Documents\\php\\feedBack-self\\self-feedback1\\templates\\classeList.html.twig");
    }
}
