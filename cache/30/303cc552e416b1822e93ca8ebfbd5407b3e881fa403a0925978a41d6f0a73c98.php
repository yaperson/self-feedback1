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

/* feedback.html.twig */
class __TwigTemplate_f55a4fe13532d1253bf6bc83955cbcf4cf1f544b324491cee6e1f8d14f0d2ec0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
    <link rel=\"stylesheet\" href=\"/style/feedBack.css\">
    <title>FeedBack - self</title>
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
          <span class=\"topnav__link\">FEEDBACK SELF</span>
        </nav>
        <h1>";
        // line 19
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
    </header>
    <main>

        <form method=\"POST\" >
            <h1 class=\"login_title\"> Donnez votre avis ! </h1>
            <label for=\"rating_repas\">Note repas :</label><br><br>
            <label>
                <input class=\"radio_inputs\" value=\"1\" type=\"radio\" name=\"rating_repas\" >
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"1\" >
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"1\">
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"2\" type=\"radio\" name=\"rating_repas\" >
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"2\">
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"2\">
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"3\" type=\"radio\" name=\"rating_repas\" >
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"3\">
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"3\">
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"4\" type=\"radio\" name=\"rating_repas\" >
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"4\">
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"4\">
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"5\" type=\"radio\" name=\"rating_repas\" >
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"5\">
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"5\">
            </label>  
            <br>
            <br>
            <br>
            <label for=\"rating_env\">Note Environnement :</label> <br><br>
            <label>
                <input class=\"radio_inputs\" value=\"1\" type=\"radio\" name=\"rating_env\">
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"5\">
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"5\">
            </label>  
            <label>
            <input class=\"radio_inputs\" value=\"2\" type=\"radio\" name=\"rating_env\">
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"5\">
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"5\">
            </label>  
            <label>            
            <input class=\"radio_inputs\" value=\"3\" type=\"radio\" name=\"rating_env\">
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"5\">
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"5\">
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"4\" type=\"radio\" name=\"rating_env\">
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"5\">
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"5\">
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"5\" type=\"radio\" name=\"rating_env\">
                <img src=\"/images/star.svg\" class=\"rating__star-off\" id=\"5\">
                <img src=\"/images/star2.svg\" class=\"rating__star-on\" id=\"5\">
            </label>  
            <br>
            <br>
            <br>
            <label for=\"comment\">Commentaire :</label>
            <textarea rows=\"10\" cols=\"30\" name=\"comment\"></textarea>
            <label for=\"classe\">Votre classe :</label>
            <select name=\"classe\">
                <option value=\"\">--Please choose an option--</option>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["classes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["classes"]) {
            // line 89
            echo "               <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_Id", [], "any", false, false, false, 89), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_Id", [], "any", false, false, false, 89), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_libelle", [], "any", false, false, false, 89), "html", null, true);
            echo "</option>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </select><br><br>
            
            <input class=\"login_inputs\" id=\"btn5\" type=\"submit\">
        </form>   
    </main>
";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "</body>
</html>";
    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "    <script src=\"script/star-rating.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "feedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 97,  168 => 96,  163 => 99,  161 => 96,  154 => 91,  141 => 89,  137 => 88,  65 => 19,  59 => 15,  53 => 13,  51 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "feedback.html.twig", "D:\\cours\\BTS SIO2\\feedback-main\\self-feedback1\\templates\\feedBack.html.twig");
    }
}
