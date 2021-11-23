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

/* userList.html.twig */
class __TwigTemplate_e28ca49b0456c0b3a30829db01ff09c822c40b5b013a47075cca63f0c5512869 extends Template
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
                <a class=\"topnav__link\" href=\"#\">| Gestion des utilisateurs</a>
            </div>
        </nav>
        
        <nav class=\"topnav\" id=\"myTopnav\">
          <div id=\"left\">
            <img class=\"topnav__link img\" src=\"/images/cropped-cropped-NDLP-3-min-e1544695116495.png\">
            <span class=\"topnav__link\">Notre Dame de la Providence</span>
          </div>
          <a class=\"topnav__link\" id=\"right\" href=\"connect.php\">| Logout</a>
        </nav>
    </header>
    <main>
    <div class=\"bloc_dashboard\">
    <h1>FeedBack - ";
        // line 41
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
        <table>
            <tr>
                <th>id</th>
                <th>email</th>
            </tr>
            <tr>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 49
            echo "               <tr><th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</th> <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</th></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tr>
        </table>
        <div class=\"btn_container\">
            <a href=\"add.php\"><button id=\"btn5\">Add users</button></a>
        </div>
    </div>
    </main>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "userList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 51,  100 => 49,  96 => 48,  86 => 41,  58 => 15,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "userList.html.twig", "C:\\Users\\legryan\\Documents\\php\\feedBack-self\\self-feedback1\\templates\\userList.html.twig");
    }
}
