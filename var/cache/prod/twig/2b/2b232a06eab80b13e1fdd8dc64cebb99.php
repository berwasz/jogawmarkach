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

/* hp.html.twig */
class __TwigTemplate_351a38ed6918291b401a69872ff4e43a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "hp.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Kasia Latek";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

    <div class=\"main\">
        <div class=\"hpmenu container-fluid\">
            <nav class=\"navbar navbar-expand-lg\">
                <div class=\"container min-vw-100 p-2 pe-5\">
                    <a class=\"navbar-brand\" href=\"#\"></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
                        <a class=\"nav-link\" aria-current=\"page\" href=\"#omnie\">O mnie</a>
                        <a class=\"nav-link\" href=\"#oferta\">Oferta</a>
                        <a class=\"nav-link\" href=\"#rejestracja\">Rejestracja</a>
                        <a class=\"nav-link\" href=\"#cennik\">Cennik</a>
                        <a class=\"nav-link\" href=\"#kontakt\">Kontakt</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class=\"background\">
            <div id=\"omnie\" class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100 border-bottom border-dark\">
                <div class=\"container text-center display-4\">
                    <p>
                        O mnie
                    </p>
                </div>

                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4 text-center\">
                            <img width=\"75%\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/kasiafot_okr_1.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-8 lead\">
                            <p class=\"h4\">Instruktor fitness. Katarzyna Latek. Instruktorka pilates, entuzjastka jogi i strechingu, pasjonatka wielu form ćwiczeń z zakresu body&mind.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id=\"oferta\" class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100 border-bottom border-dark\">
                <div class=\"container text-center display-4\">
                    <p>
                        Oferta
                    </p>
                </div>

                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-8 lead\">
                            <p class=\"h4\">Instruktor fitness. Katarzyna Latek. Instruktorka pilates, entuzjastka jogi i strechingu, pasjonatka wielu form ćwiczeń z zakresu body&mind.</p>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <img width=\"75%\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/kasiafot_okr_1.png"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                </div>
            </div>

            <div id=\"rejestracja\" class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100 border-bottom border-dark\">
                <div class=\"container text-center display-4\">
                    <p>
                        Rejestracja
                    </p>
                </div>

                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4 text-center\">
                            <img width=\"75%\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/efitnessapp_logo_okr.png"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-8 lead\">
                            <div class=\"container d-flex justify-content-center align-items-center flex-wrap\">
                                <span>Pobierz aplikację mobilną</span>
                                <div class=\"container d-flex justify-content-center align-items-center flex-wrap\">
                                    <a href=\"https://play.google.com/store/apps/details?id=pl.efitness.mobile&hl=pl\"><img class=\"google-play\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/google-play-pl-pl.png"), "html", null, true);
        echo "\" /></a>
                                    <a href=\"https://itunes.apple.com/pl/app/efitnessapp/id1054978020?l=pl&mt=8\"><img class=\"app-store\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/appstore.webp"), "html", null, true);
        echo "\" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div id=\"cennik\" class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100\">
                    <div class=\"container text-center display-4\">
                        <p>
                            Cennik
                        </p>
                    </div>

                    <div class=\"container col-md-6\">
                        <table class=\"table\">
                            <thead>
                            <tr class=\"\">
                                <th class=\"table-color\" scope=\"col\">Usługa</th>
                                <th class=\"table-color text-center\" scope=\"col\">Cena</th>
                            </tr>
                            </thead>
                            <tbody class=\"table-group-divider\">
                            <tr>
                                <th class=\"table-color\" scope=\"row\">Wejście jednorazowe</th>
                                <td class=\"table-color text-center\">35 zł</td>
                            </tr>
                            <tr>
                                <th class=\"table-color\" scope=\"row\">4 wejścia / 30 dni</th>
                                <td class=\"table-color text-center\">120 zł</td>
                            </tr>
                            <tr>
                                <th class=\"table-color\" scope=\"row\">8 wejść / 30 dni</th>
                                <td class=\"table-color text-center\">200 zł</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                    <div class=\"\">
                        <footer id=\"kontakt\" class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100 min-vw-100 z-3\">
                            <div class=\"d-flex justify-content-around\">
                                <span><a class=\"h1 p-2 text-body-secondary\" href=\"https://www.facebook.com/KasiaLatekJoga\" title=\"facebook\"><i class=\"bi bi-facebook\"></i></a></span>
                                <span><a class=\"h1 p-2 text-body-secondary\" href=\"https://www.instagram.com/kasia_latek\" title=\"instagram\"><i class=\"bi bi-instagram\"></i></a></span>
                                <span><a class=\"h1 p-2 text-body-secondary\" href=\"https://www.m.me/101829889521117\" title=\"messenger\"><i class=\"bi bi-messenger\"></i></a></span>
                                <span><a class=\"h1 p-2 text-body-secondary\" href=\"mailto:kasia@jogawmarkach.pl?subject=Zapytanie ze strony JogawMarkach.pl\"  title=\"email\"><i class=\"bi bi-envelope\"></i></a></span>
                            </div>
                            ";
        // line 135
        echo "                        </footer>
                    </div>
            </div>
        </div>
   </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "hp.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  202 => 135,  150 => 83,  146 => 82,  137 => 76,  118 => 60,  93 => 38,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hp.html.twig", "C:\\Projekty\\jogawmarkach\\templates\\hp.html.twig");
    }
}
