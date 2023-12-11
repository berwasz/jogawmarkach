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
class __TwigTemplate_f78dbc5c461f0984c2ae8f1d58e54b9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hp.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hp.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hp.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " | Kasia Latek";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"main\">
        <div class=\"hpmenu container-fluid\">
            <nav class=\"navbar navbar-expand-md\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"#\"></a>
                    <button class=\"navbar-toggler ham\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                            aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
                        <a class=\"nav-link\" aria-current=\"page\" href=\"#omnie\">O mnie</a>
                        <a class=\"nav-link\" href=\"#oferta\">Oferta</a>
                        <a class=\"nav-link\" href=\"#grafik\">Grafik</a>
                        <a class=\"nav-link\" href=\"#rejestracja\">Rejestracja</a>
                        <a class=\"nav-link\" href=\"#cennik\">Cennik</a>
                        <a class=\"nav-link\" href=\"#kontakt\">Kontakt</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class=\"background\">

            <div id=\"omnie\"
                 class=\"container-fluid p-0\">
                ";
        // line 49
        echo "            </div>

            <div id=\"oferta\" class=\"container-fluid p-0\">

                ";
        // line 66
        echo "
                ";
        // line 86
        echo "            </div>

            <div id=\"oferta-pilates\" class=\"container-fluid p-0\">
                ";
        // line 109
        echo "            </div>

";
        // line 132
        echo "
            <div id=\"grafik\"
                 class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100\">
                <div class=\"container text-center display-4\">
                    <p class=\"fw-bold\">
                        Grafik
                    </p>
                </div>

                <div id=\"calendar\" class=\"container mh-100\"></div>

            </div>

            <div id=\"carousel\" class=\"container-fluid carousel slide\" data-bs-touch=\"true\" data-bs-wrap=\"false\">

                <div class=\"carousel-indicators\">
                    <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"0\" class=\"indicator active\"
                            aria-current=\"true\" aria-label=\"Slide 1\"></button>
                    <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                    <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                </div>

                <div class=\"carousel-inner\">

                    <div class=\"carousel-item active\">
                        <div id=\"rejestracja\" class=\"container d-flex flex-column align-items-center justify-content-center col-9 min-vh-100\">
                            <div class=\"text-center display-4\">
                                <p class=\"fw-bold\">
                                    Rejestracja
                                </p>
                            </div>
                            <div class=\"row align-items-center\">

                                <div class=\"col-lg-6 d-inline lead text-center\">
                                    <div class=\"text-center p-4\"><img class=\"efitness-logo rounded-3\"
                                                                  src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/efitnessapp_logo.webp"), "html", null, true);
        echo "\"></div>
                                    <p>Do rejestracji w klubie oraz rezerwacji miejsc na poszczególne zajęcia polecamy w
                                        pełni darmową aplikację eFitness App.</p>
                                </div>

                                <div class=\"col d-flex align-items-center justify-content-center flex-wrap\">

                                    <div class=\"d-flex flex-column\">
                                        <a href=\"https://play.google.com/store/apps/details?id=pl.efitness.mobile&hl=pl\"><img class=\"m-2 google-play\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/google_play.webp"), "html", null, true);
        echo "\"></a>
                                        <a href=\"https://itunes.apple.com/pl/app/efitnessapp/id1054978020?l=pl&mt=8\"><img class=\"m-2 app-store\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/appstore.webp"), "html", null, true);
        echo "\"></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"carousel-item\">
                        <div id=\"efitness\" class=\"container d-flex flex-column align-items-center justify-content-center col-10 min-vh-100\">
                            <div class=\"text-center mb-5 display-4\">
                                <p class=\"fw-bold\">
                                    eFitness App to:
                                </p>
                            </div>
                            <div class=\"row align-items-start\">
                                <div class=\"col-lg pb-3 text-center\">
                                    <div><i class=\"bi bi-calendar3-week h1\"></i></div>
                                    <div class=\"p-2 lead\">Łatwy dostęp do grafiku zajęć na każdy dzień.</div>
                                </div>
                                <div class=\"col-lg pb-3 text-center\">
                                    <div><i class=\"bi bi-calendar-check h1\"></i></div>
                                    <div class=\"p-2 lead\">Szybki zapis na zajęcia, w zaledwie dwóch kliknięciach.</div>
                                </div>
                                <div class=\"col-lg pb-3 text-center\">
                                    <div><i class=\"bi bi-x-square h1\"></i></div>
                                    <div class=\"p-2 lead\">Odwoływanie rezerwacji miejsca na zajęciach.</div>
                                </div>
                                <div class=\"col-lg pb-3 text-center\">
                                    <div><i class=\"bi bi-arrow-left-right h1\"></i></div>
                                    <div class=\"p-2 lead\">Informacje o listach rezerwowych i zastępstwach.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"carousel-item\">
                        <div id=\"instalacja\" class=\"container d-flex flex-column align-items-center justify-content-center col-10 min-vh-100\">
                            <div class=\"text-center mb-5 display-4\">
                                <p class=\"fw-bold\">
                                    Instalacja aplikacji
                                </p>
                            </div>
                            <div class=\"row align-items-start\">
                                <div class=\"col-lg pb-3\">
                                    <div class=\"text-center\"><i class=\"bi bi-fingerprint h1\"></i></div>
                                    <div class=\"p-2 lead\">Przy pierwszym uruchomieniu aplikacji trzeba potwierdzić tożsamość korzystając z konta Google lub Apple ID.</div>
                                </div>
                                <div class=\"col-lg pb-3\">
                                    <div class=\"text-center\"><i class=\"bi bi-door-open h1\"></i></div>
                                    <div class=\"p-2 lead\">Następnie z listy klubów wybieramy <span class=\"fw-bold\">Kasia Latek – Pilates i joga</span>. Klikamy Wejdź do klubu i rejestrujemy się.</div>
                                </div>
                                <div class=\"col-lg pb-3\">
                                    <div class=\"text-center\"><i class=\"bi bi-calendar3 h1\"></i></div>
                                    <div class=\"p-2 lead\">Żeby zapisać się na zajęcia w dolnym menu wyieramy <span class=\"fw-bold\">Grafik</span>. Obsługa karnetów dostępna jest w zakładce <span class=\"fw-bold\">Profil</span>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class=\"carousel-control-prev justify-content-start\" type=\"button\" data-bs-target=\"#carousel\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Previous</span>
                </button>

                <button class=\"carousel-control-next justify-content-end\" type=\"button\" data-bs-target=\"#carousel\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Next</span>
                </button>
            </div>

            <div id=\"cennik\"
                 class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100\">
                <div class=\"container text-center mb-5 display-4\">
                    <p class=\"fw-bold\">
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
                            <th class=\"table-color\" scope=\"row\">Joga/pilates - wejście jednorazowe</th>
                            <td class=\"table-color text-center\">35&nbspzł</td>
                        </tr>
                        <tr>
                            <th class=\"table-color\" scope=\"row\">Joga - 4&nbspwejścia / 30&nbspdni</th>
                            <td class=\"table-color text-center\">120&nbspzł</td>
                        </tr>
                        <tr>
                            <th class=\"table-color\" scope=\"row\">Joga - 8&nbspwejść / 30&nbspdni</th>
                            <td class=\"table-color text-center\">200&nbspzł</td>
                        </tr>
                        <tr>
                            <th class=\"table-color\" scope=\"row\">Pilates - 4&nbspwejścia / 45&nbspdni</th>
                            <td class=\"table-color text-center\">120&nbspzł</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class=\"col-lg p-2\">Rozliczamy się na miejscu i tylko gotówką lub blikiem na numer telefonu.</div>
                </div>
            </div>

            <footer id=\"kontakt\"
                    class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100 min-vw-100 z-3\">
                <span><img style=\"width: 25rem\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Kasia_logo_ok_KONTRA.png"), "html", null, true);
        echo "\"></span>
                <div class=\"social d-flex justify-content-around\">


                    <span class=\"m-1 text-center\"><a class=\"social-icon p-2 text-body-secondary\"
                                         href=\"https://www.facebook.com/KasiaLatekJoga\" title=\"facebook\"><i
                                    class=\"bi bi-facebook\"></i></a></span>
                    <span class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                         href=\"https://www.instagram.com/kasia_latek\" title=\"instagram\"><i
                                    class=\"bi bi-instagram\"></i></a></span>
                    <span class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                         href=\"https://www.m.me/101829889521117\" title=\"messenger\"><i
                                    class=\"bi bi-messenger\"></i></a></span>
                    <span class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                         href=\"mailto:kasia@jogawmarkach.pl?subject=Zapytanie ze strony JogawMarkach.pl\"
                                         title=\"email\"><i class=\"bi bi-envelope\"></i></a></span>
                </div>
                 ";
        // line 308
        echo "            </footer>

        </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  323 => 308,  303 => 288,  188 => 176,  184 => 175,  173 => 167,  136 => 132,  132 => 109,  127 => 86,  124 => 66,  118 => 49,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} | Kasia Latek{% endblock %}

{% block body %}

    <div class=\"main\">
        <div class=\"hpmenu container-fluid\">
            <nav class=\"navbar navbar-expand-md\">
                <div class=\"container\">
                    <a class=\"navbar-brand\" href=\"#\"></a>
                    <button class=\"navbar-toggler ham\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                            aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
                        <a class=\"nav-link\" aria-current=\"page\" href=\"#omnie\">O mnie</a>
                        <a class=\"nav-link\" href=\"#oferta\">Oferta</a>
                        <a class=\"nav-link\" href=\"#grafik\">Grafik</a>
                        <a class=\"nav-link\" href=\"#rejestracja\">Rejestracja</a>
                        <a class=\"nav-link\" href=\"#cennik\">Cennik</a>
                        <a class=\"nav-link\" href=\"#kontakt\">Kontakt</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class=\"background\">

            <div id=\"omnie\"
                 class=\"container-fluid p-0\">
                {#<div class=\"container text-center mb-5 display-4\">
                    <p class=\"fw-bold\">
                        O mnie
                    </p>
                </div>

                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4 text-center\">
                            <img width=\"75%\" src=\"{{ asset('img/kasiafot_okr_1.webp') }}\">
                        </div>
                        <div class=\"col-md-8 lead\">
                            <p>Instruktor fitness. Katarzyna Latek. Instruktorka pilates, entuzjastka jogi i strechingu, pasjonatka wielu form ćwiczeń z zakresu body&mind.</p>
                        </div>
                    </div>
                </div>#}
            </div>

            <div id=\"oferta\" class=\"container-fluid p-0\">

                {#<div class=\"card text-bg-dark border-0 rounded-0\">
                    <picture>
                        <source media=\"(max-width:767px)\" srcset=\"{{ asset('img/pexels-lucas-pezeta-9351349_800x800.webp') }}\">
                        <source media=\"(min-width:768px)\" srcset=\"{{ asset('img/pexels-lucas-pezeta-9351349_1600x1000.webp') }}\">
                        <img class=\"img-fluid\" src=\"{{ asset('img/pexels-lucas-pezeta-9351349_1600x1000.webp') }}\">
                    </picture>
                    <div class=\"col-md-6 card-img-overlay d-flex flex-column\" style=\"margin-left: 50%\">
                        <h5 class=\"display-4\">JOGA</h5>
                        <p class=\"lead\" style=\"text-indent: 2rem\">Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.</p>
                        <p class=\"lead\" style=\"text-indent: 2rem\">Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.</p>
                        <p class=\"lead\" style=\"text-indent: 2rem\">Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!</p>
                    </div>
                </div>#}

                {#<div class=\"card rounded-0 bg-transparent border-0\">
                    <div class=\"row g-0\">
                        <div class=\"col-md-6\">
                            <picture>
                                <source media=\"(max-width:767px)\" srcset=\"{{ asset('img/pexels-lucas-pezeta-9351349_800x800.webp') }}\">
                                <source media=\"(min-width:768px)\" srcset=\"{{ asset('img/pexels-lucas-pezeta-9351349_1600x1000.webp') }}\">
                                <img class=\"img-fluid\" src=\"{{ asset('img/pexels-lucas-pezeta-9351349_800x800.webp') }}\">
                            </picture>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card-body\">
                                <h5 class=\"display-4\">JOGA</h5>
                                <p class=\"lead\" style=\"text-indent: 2rem\">Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.</p>
                                <p class=\"lead\" style=\"text-indent: 2rem\">Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.</p>
                                <p class=\"lead\" style=\"text-indent: 2rem\">Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!</p>
                            </div>
                        </div>
                    </div>
                </div>#}
            </div>

            <div id=\"oferta-pilates\" class=\"container-fluid p-0\">
                {#<div class=\"card rounded-0 bg-transparent border-0\">
                    <div class=\"row g-0\">
                        <div class=\"col-md-6 order-md-1\">
                            <picture>
                                <source media=\"(max-width:767px)\" srcset=\"{{ asset('img/pexels-andrea-piacquadio-868483_800x800.webp') }}\">
                                <source media=\"(min-width:768px)\" srcset=\"{{ asset('img/pexels-andrea-piacquadio-868483_800x1000.webp') }}\">
                                <img class=\"img-fluid\" src=\"{{ asset('img/pexels-andrea-piacquadio-868483_800x1000.webp') }}\">
                            </picture>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"card-body\">
                                <h5 class=\"display-4\">PILATES</h5>
                                <p class=\"lead\" style=\"text-indent: 2rem\">Pilates wielu osobom kojarzy się głównie z maszynami. Tak,&nbspistnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.</p>
                                <p class=\"lead\" style=\"text-indent: 2rem\">Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.</p>
                                <p class=\"lead\" style=\"text-indent: 2rem\">Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!</p>
                            </div>
                        </div>

                    </div>
                </div>#}
            </div>

{#            <div id=\"oferta-pilates\"
                 class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100\">
                <div class=\"container text-center display-4\">
                    <p class=\"fw-bold\">
                        Pilates
                    </p>
                </div>

                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-8 lead\">
                            <p>Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.</p>
                            <p>Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.</p>
                            <p>Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!</p>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <img width=\"75%\" src=\"{{ asset('img/kasiafot_okr_1.webp') }}\">
                        </div>
                    </div>
                </div>
            </div>#}

            <div id=\"grafik\"
                 class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100\">
                <div class=\"container text-center display-4\">
                    <p class=\"fw-bold\">
                        Grafik
                    </p>
                </div>

                <div id=\"calendar\" class=\"container mh-100\"></div>

            </div>

            <div id=\"carousel\" class=\"container-fluid carousel slide\" data-bs-touch=\"true\" data-bs-wrap=\"false\">

                <div class=\"carousel-indicators\">
                    <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"0\" class=\"indicator active\"
                            aria-current=\"true\" aria-label=\"Slide 1\"></button>
                    <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                    <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                </div>

                <div class=\"carousel-inner\">

                    <div class=\"carousel-item active\">
                        <div id=\"rejestracja\" class=\"container d-flex flex-column align-items-center justify-content-center col-9 min-vh-100\">
                            <div class=\"text-center display-4\">
                                <p class=\"fw-bold\">
                                    Rejestracja
                                </p>
                            </div>
                            <div class=\"row align-items-center\">

                                <div class=\"col-lg-6 d-inline lead text-center\">
                                    <div class=\"text-center p-4\"><img class=\"efitness-logo rounded-3\"
                                                                  src=\"{{ asset('img/efitnessapp_logo.webp') }}\"></div>
                                    <p>Do rejestracji w klubie oraz rezerwacji miejsc na poszczególne zajęcia polecamy w
                                        pełni darmową aplikację eFitness App.</p>
                                </div>

                                <div class=\"col d-flex align-items-center justify-content-center flex-wrap\">

                                    <div class=\"d-flex flex-column\">
                                        <a href=\"https://play.google.com/store/apps/details?id=pl.efitness.mobile&hl=pl\"><img class=\"m-2 google-play\" src=\"{{ asset('img/google_play.webp') }}\"></a>
                                        <a href=\"https://itunes.apple.com/pl/app/efitnessapp/id1054978020?l=pl&mt=8\"><img class=\"m-2 app-store\" src=\"{{ asset('img/appstore.webp') }}\"></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"carousel-item\">
                        <div id=\"efitness\" class=\"container d-flex flex-column align-items-center justify-content-center col-10 min-vh-100\">
                            <div class=\"text-center mb-5 display-4\">
                                <p class=\"fw-bold\">
                                    eFitness App to:
                                </p>
                            </div>
                            <div class=\"row align-items-start\">
                                <div class=\"col-lg pb-3 text-center\">
                                    <div><i class=\"bi bi-calendar3-week h1\"></i></div>
                                    <div class=\"p-2 lead\">Łatwy dostęp do grafiku zajęć na każdy dzień.</div>
                                </div>
                                <div class=\"col-lg pb-3 text-center\">
                                    <div><i class=\"bi bi-calendar-check h1\"></i></div>
                                    <div class=\"p-2 lead\">Szybki zapis na zajęcia, w zaledwie dwóch kliknięciach.</div>
                                </div>
                                <div class=\"col-lg pb-3 text-center\">
                                    <div><i class=\"bi bi-x-square h1\"></i></div>
                                    <div class=\"p-2 lead\">Odwoływanie rezerwacji miejsca na zajęciach.</div>
                                </div>
                                <div class=\"col-lg pb-3 text-center\">
                                    <div><i class=\"bi bi-arrow-left-right h1\"></i></div>
                                    <div class=\"p-2 lead\">Informacje o listach rezerwowych i zastępstwach.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"carousel-item\">
                        <div id=\"instalacja\" class=\"container d-flex flex-column align-items-center justify-content-center col-10 min-vh-100\">
                            <div class=\"text-center mb-5 display-4\">
                                <p class=\"fw-bold\">
                                    Instalacja aplikacji
                                </p>
                            </div>
                            <div class=\"row align-items-start\">
                                <div class=\"col-lg pb-3\">
                                    <div class=\"text-center\"><i class=\"bi bi-fingerprint h1\"></i></div>
                                    <div class=\"p-2 lead\">Przy pierwszym uruchomieniu aplikacji trzeba potwierdzić tożsamość korzystając z konta Google lub Apple ID.</div>
                                </div>
                                <div class=\"col-lg pb-3\">
                                    <div class=\"text-center\"><i class=\"bi bi-door-open h1\"></i></div>
                                    <div class=\"p-2 lead\">Następnie z listy klubów wybieramy <span class=\"fw-bold\">Kasia Latek – Pilates i joga</span>. Klikamy Wejdź do klubu i rejestrujemy się.</div>
                                </div>
                                <div class=\"col-lg pb-3\">
                                    <div class=\"text-center\"><i class=\"bi bi-calendar3 h1\"></i></div>
                                    <div class=\"p-2 lead\">Żeby zapisać się na zajęcia w dolnym menu wyieramy <span class=\"fw-bold\">Grafik</span>. Obsługa karnetów dostępna jest w zakładce <span class=\"fw-bold\">Profil</span>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class=\"carousel-control-prev justify-content-start\" type=\"button\" data-bs-target=\"#carousel\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Previous</span>
                </button>

                <button class=\"carousel-control-next justify-content-end\" type=\"button\" data-bs-target=\"#carousel\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Next</span>
                </button>
            </div>

            <div id=\"cennik\"
                 class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100\">
                <div class=\"container text-center mb-5 display-4\">
                    <p class=\"fw-bold\">
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
                            <th class=\"table-color\" scope=\"row\">Joga/pilates - wejście jednorazowe</th>
                            <td class=\"table-color text-center\">35&nbspzł</td>
                        </tr>
                        <tr>
                            <th class=\"table-color\" scope=\"row\">Joga - 4&nbspwejścia / 30&nbspdni</th>
                            <td class=\"table-color text-center\">120&nbspzł</td>
                        </tr>
                        <tr>
                            <th class=\"table-color\" scope=\"row\">Joga - 8&nbspwejść / 30&nbspdni</th>
                            <td class=\"table-color text-center\">200&nbspzł</td>
                        </tr>
                        <tr>
                            <th class=\"table-color\" scope=\"row\">Pilates - 4&nbspwejścia / 45&nbspdni</th>
                            <td class=\"table-color text-center\">120&nbspzł</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class=\"col-lg p-2\">Rozliczamy się na miejscu i tylko gotówką lub blikiem na numer telefonu.</div>
                </div>
            </div>

            <footer id=\"kontakt\"
                    class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100 min-vw-100 z-3\">
                <span><img style=\"width: 25rem\" src=\"{{ asset('img/Kasia_logo_ok_KONTRA.png') }}\"></span>
                <div class=\"social d-flex justify-content-around\">


                    <span class=\"m-1 text-center\"><a class=\"social-icon p-2 text-body-secondary\"
                                         href=\"https://www.facebook.com/KasiaLatekJoga\" title=\"facebook\"><i
                                    class=\"bi bi-facebook\"></i></a></span>
                    <span class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                         href=\"https://www.instagram.com/kasia_latek\" title=\"instagram\"><i
                                    class=\"bi bi-instagram\"></i></a></span>
                    <span class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                         href=\"https://www.m.me/101829889521117\" title=\"messenger\"><i
                                    class=\"bi bi-messenger\"></i></a></span>
                    <span class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                         href=\"mailto:kasia@jogawmarkach.pl?subject=Zapytanie ze strony JogawMarkach.pl\"
                                         title=\"email\"><i class=\"bi bi-envelope\"></i></a></span>
                </div>
                 {#<div class=\"col-md-4 text-center\">
                    <span class=\"mb-3 mb-md-0 text-body-secondary\">&copy; 2023 BenMedia</span>
                </div>#}
            </footer>

        </div>

{% endblock %}", "hp.html.twig", "C:\\Projekty\\jogawmarkach\\templates\\hp.html.twig");
    }
}
