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

/* Noteadd.html.twig */
class __TwigTemplate_08f0e55d2ddf9ed5e88fb8d0e4c1f3bff86a48bf531280acb5e3f5743c4893a1 extends Template
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
    <link rel=\"stylesheet\" href=\"/style/login.css\">
    <title>nouvelle Note</title>
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
          <div id=\"left\">
            <img class=\"topnav__link img\" src=\"/images/cropped-cropped-NDLP-3-min-e1544695116495.png\">
            <span class=\"topnav__link\">Notre Dame de la Providence</span>
          </div>
          <a class=\"topnav__link\" id=\"right\" href=\"#\">| Login</a>
        </nav>
    </header>
    <main>
        <form method=\"POST\" class=\"login_form\">
            <h1 class=\"login_title\"> Donnez votre avis ! </h1>
            <label for=\"rating_repas\">Note repas :</label>
            <input class=\"login_inputs\" value=\"1\" type=\"radio\" name=\"rating_repas\" >
            <input class=\"login_inputs\" value=\"2\" type=\"radio\" name=\"rating_repas\" >
            <input class=\"login_inputs\" value=\"3\" type=\"radio\" name=\"rating_repas\" >
            <input class=\"login_inputs\" value=\"4\" type=\"radio\" name=\"rating_repas\" >
            <input class=\"login_inputs\" value=\"5\" type=\"radio\" name=\"rating_repas\" > <br>
            <label for=\"rating_env\">Note Environnement :</label>
            <input class=\"login_inputs\" value=\"1\" type=\"radio\" name=\"rating_env\">
            <input class=\"login_inputs\" value=\"2\" type=\"radio\" name=\"rating_env\" >
            <input class=\"login_inputs\" value=\"3\" type=\"radio\" name=\"rating_env\" >
            <input class=\"login_inputs\" value=\"4\" type=\"radio\" name=\"rating_env\" >
            <input class=\"login_inputs\" value=\"5\" type=\"radio\" name=\"rating_env\" > <br>
            <label for=\"comment\">Commentaire :</label>
            <textarea rows=\"10\" cols=\"30\" name=\"comment\"></textarea>
            <label for=\"classe\">Votre classe :</label>
            <select name=\"classe\">
                <option value=\"\">--Please choose an option--</option>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["classes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["classes"]) {
            // line 45
            echo "               <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_Id", [], "any", false, false, false, 45), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_Id", [], "any", false, false, false, 45), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_libelle", [], "any", false, false, false, 45), "html", null, true);
            echo "</option>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </select><br><br>
            
            <input class=\"login_inputs\" id=\"btn5\" type=\"submit\">
        </form>
    </main>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Noteadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  93 => 45,  89 => 44,  58 => 15,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Noteadd.html.twig", "C:\\Users\\luidj\\Documents\\cours bts\\2 année\\projet php poo\\self-feedback1\\templates\\Noteadd.html.twig");
    }
}
