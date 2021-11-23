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

/* feedBack.html.twig */
class __TwigTemplate_27aaf8bc25196ab30ffc58d3a5509a7f83797ddc8bd071368e4a7750a9421935 extends Template
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
    </header>
    <main>

        <form method=\"POST\" >
            <h1 class=\"login_title\"> Donnez votre avis ! </h1>
            <label for=\"rating_repas\">Note repas :</label><br><br>
            <label>
                <input class=\"radio_inputs\" value=\"1\" type=\"radio\" name=\"rating_repas\" >
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"2\" type=\"radio\" name=\"rating_repas\" >
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"3\" type=\"radio\" name=\"rating_repas\" >
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"4\" type=\"radio\" name=\"rating_repas\" >
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"5\" type=\"radio\" name=\"rating_repas\" >
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <br>
            <br>
            <br>
            <label for=\"rating_env\">Note Environnement :</label> <br><br>
            <label>
                <input class=\"radio_inputs\" value=\"1\" type=\"radio\" name=\"rating_env\">
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <label>
            <input class=\"radio_inputs\" value=\"2\" type=\"radio\" name=\"rating_env\">
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <label>            
            <input class=\"radio_inputs\" value=\"3\" type=\"radio\" name=\"rating_env\">
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"4\" type=\"radio\" name=\"rating_env\">
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <label>
                <input class=\"radio_inputs\" value=\"5\" type=\"radio\" name=\"rating_env\">
                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                    width=\"31.543px\" height=\"30px\" viewBox=\"0 0 31.543 30\" enable-background=\"new 0 0 31.543 30\" xml:space=\"preserve\">
                <g>
                    <polygon class=\"rating__star-off\" fill=\"#2DAAE1\" points=\"20.646,9.875 31.543,11.458 23.656,19.145 25.518,29.996 15.771,24.873 6.024,30 7.886,19.145 
                        0,11.459 10.898,9.876 15.771,0 \t\"/>
                </g>
                </svg>
            </label>  
            <br>
            <br>
            <br>
            <label for=\"comment\">Commentaire :</label>
            <textarea rows=\"10\" cols=\"40\" name=\"comment\"></textarea>
            <label for=\"classe\">Votre classe :</label>
            <select name=\"classe\">
                <option value=\"\">--Please choose an option--</option>
                ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["classes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["classes"]) {
            // line 138
            echo "               <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_Id", [], "any", false, false, false, 138), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_Id", [], "any", false, false, false, 138), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classes"], "classe_libelle", [], "any", false, false, false, 138), "html", null, true);
            echo "</option>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "            </select><br><br>
            
            <input class=\"login_inputs\" id=\"btn5\" type=\"submit\">
        </form>   
    </main>
";
        // line 145
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "</body>
</html>";
    }

    // line 145
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "    <script src=\"script/star-rating.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "feedBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 146,  214 => 145,  209 => 148,  207 => 145,  200 => 140,  187 => 138,  183 => 137,  59 => 15,  53 => 13,  51 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "feedBack.html.twig", "C:\\Users\\noellor\\Documents\\feedback\\self-feedback1\\templates\\feedBack.html.twig");
    }
}
