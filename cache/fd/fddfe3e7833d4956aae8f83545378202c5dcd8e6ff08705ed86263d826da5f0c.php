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

/* qrcode.html.twig */
class __TwigTemplate_0ad4d69990c3ff77d22125147d14151e76be124e2297db073e891a3c3678d447 extends Template
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
    <title>QR code</title>
</head>
<body>
    ";
        // line 12
        if ((($context["error"] ?? null) != "")) {
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
                <a class=\"topnav__link\" href=\"#\">| Gestion des classes</a>
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
    <div align = center>
    <h1>";
        // line 41
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1> 
        <p>";
        // line 42
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</p>
        <img src=";
        // line 43
        echo twig_escape_filter($this->env, ($context["qrcode"] ?? null), "html", null, true);
        echo " alt=\"\">
    </main>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "qrcode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 43,  90 => 42,  86 => 41,  58 => 15,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "qrcode.html.twig", "C:\\self-feedback1\\templates\\qrcode.html.twig");
    }
}
