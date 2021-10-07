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
    <link rel=\"stylesheet\" href=\"/style/table.css\">
    <title>Document</title>
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
        <nav class=\"topnav\" id=\"myTopnav\">
          <span class=\"topnav__link\">Notre Dame de la Providence</span>
          <a class=\"topnav__link\" id=\"right\" href=\"connect.php\">| Login</a>
        </nav>
    </header>
    <main>
    <h1>FeedBack - ";
        // line 22
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
        <table>
            <tr>
                <th>id</th>
                <th>email</th>
            </tr>
            <tr>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "               <tr><th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</th> <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</th></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tr>
        </table>
        <a href=\"add.php\">Add users</a>
    </main>
    <footer>
        <nav id=\"footer-navbar\">
            <a class=\"nav-fo\" href=\"#\"> | Home </a>
            <a class=\"nav-fo\" href=\"#projet\"> | News </a>
            <a class=\"nav-fo\" href=\"#liens\"> | Contact </a>
        </nav>
    </footer>
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
        return array (  92 => 32,  81 => 30,  77 => 29,  67 => 22,  58 => 15,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "userList.html.twig", "C:\\Users\\legryan\\Documents\\php\\feedBack-self\\self-feedback1\\templates\\userList.html.twig");
    }
}
