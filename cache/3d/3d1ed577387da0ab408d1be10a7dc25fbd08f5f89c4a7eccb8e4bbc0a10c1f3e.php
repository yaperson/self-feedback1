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

/* dashboard.html.twig */
class __TwigTemplate_b35025051ba2c05cd669b30c27d0ede2e74b02e81e35d9ecb830c1345e1284e4 extends Template
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
                <a class=\"topnav__link\" href=\"#\">| Rapports</a>
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
        echo " </h1>
            <a href=\"feedBack.php\"><button id=\"btn5\">Add note</button></a>
        </div>
        <table>
            <tr class=\"table_title\" id=\"table_title\">
                <th>id</th>
                <th>Note repas</th>
                <th>Note environnement</th>
                <th>Commentaire</th>
                <th>Classe</th>
                <th>Date</th>
            </tr>
            <tr>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["notes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["notes"]) {
            // line 56
            echo "               <tr><th class=\"table_id\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notes"], "note_Id", [], "any", false, false, false, 56), "html", null, true);
            echo " </th> <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notes"], "note_Valeur_Repas", [], "any", false, false, false, 56), "html", null, true);
            echo "<img src=\"/images/star.svg\" class=\"table_star\"></th> <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notes"], "note_Valeur_Environnement", [], "any", false, false, false, 56), "html", null, true);
            echo "<img src=\"/images/star.svg\" class=\"table_star\"></th> <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notes"], "note_Commentaire", [], "any", false, false, false, 56), "html", null, true);
            echo "</th> <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notes"], "classe_Id", [], "any", false, false, false, 56), "html", null, true);
            echo "</th><th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notes"], "note_date", [], "any", false, false, false, 56), "html", null, true);
            echo "</th></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </tr>
        </table>
    </main>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 58,  107 => 56,  103 => 55,  87 => 42,  58 => 15,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard.html.twig", "C:\\Users\\legryan\\Documents\\php\\feedBack-self\\self-feedback1\\templates\\dashboard.html.twig");
    }
}
