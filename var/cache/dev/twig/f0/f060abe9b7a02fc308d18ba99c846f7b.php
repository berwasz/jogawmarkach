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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
 
 <div class=\"container-fluid d-flex flex-column p-0\">
 

    <button type=\"button\" class=\"btn shadow z-3\" id=\"btn-back-to-top\">
        <i style=\"color: #fef9f3 !important;\" class=\"bi bi-arrow-up h1\"></i>
    </button>

    <header>
        <nav class=\"navbar fixed-top navbar-expand-lg bg-light p-0 shadow\" style=\"min-height: 67.7px\">
            <div class=\"container-fluid d-flex flex-row\">
             
                    <a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
                    <img src=\"img/Kasia_logo_www.png\" alt=\"Logo\" width=\"60\" height=\"60\" class=\"d-inline-block align-text-top me-1\">
                    Kasia Latek | Pilates i joga
                    </a>
                    
                    <div class=\"d-flex justify-content-end\">
                        <div id=\"nav-icon3\" class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                
                <div class=\"collapse navbar-collapse flex-grow-1 text-center\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto flex-nowrap\">
                        ";
        // line 39
        echo "                        <li class=\"nav-item\">
                            <a href=\"#omnie\" class=\"nav-link\" >O mnie</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#oferta\" class=\"nav-link\">Oferta</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#grafik\" class=\"nav-link\">Grafik</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#cennik\" class=\"nav-link\">Cennik</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#rejestracja\" class=\"nav-link\">Rejestracja</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#kontakt\" class=\"nav-link\">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div id=\"intro\" class=\"bg-image shadow\"></div>
    </header>

    <main style=\"margin-top: 67.7px;\">
    <div class=\"container\">
    <!--Section: O mnie-->
      <section>
        <div id=\"omnie\" class=\"row\">
          <div data-aos=\"flip-up\" class=\"col-md-6 gx-5 mb-4\">
            <div class=\"bg-image\">
              <img src=\"img/kasia_omnie_1600x1000.webp\" class=\"img-fluid shadow rounded-3\" />
            </div>
          </div>

          <div data-aos=\"fade-up\" class=\"col-md-6 gx-5 mb-5\">
            <h2><strong>O mnie</strong></h2>
            <p class=\"lead\">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
              eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
              sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <p class=\"lead\">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
              nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
              alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
          </div>
        </div>

        <div id=\"miejsce\" class=\"row\">
          <div data-aos=\"fade-up\" class=\"col-md-6 gx-5\">
            <h2><strong>Miejsce</strong></h2>
            <p class=\"lead\">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
              eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
              sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <p class=\"lead\">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
              nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
              alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
          </div>
          <div data-aos=\"flip-up\" class=\"col-md-6 gx-5 mb-4\">
            <div class=\"bg-image\">
              <img src=\"img/pastelowy_gaj_1600X1000.webp\" class=\"img-fluid shadow rounded-3\" />
            </div>
          </div>
        </div>
      </section>
      <!--Section: O mnie-->

      <hr/>

      <!--Section: Oferta-->
      <section id=\"oferta\">
        <h4 data-aos=\"fade-up\" data-aos-offset=\"200\" class=\"display-2 mb-5 text-center\"><strong>Oferta</strong></h4>

        <div class=\"row justify-content-around\">
          <div data-aos=\"fade-right\" class=\"col-lg-6 col-md-12 mb-4\">
            <div class=\"card shadow\" style=\"border-radius: 10px;\">
              <div class=\"bg-image\">
                <img src=\"img/pexels-lucas-pezeta-9351349_1600x1000.webp\" class=\"img-fluid\" style=\"border-radius: 10px 10px 0 0;\"/>
              </div>
              <div class=\"card-body text-start\">
                <h1 data-aos=\"fade-up\">Joga</h1>
                <div data-aos=\"fade-up\">
                    <p class=\"lead\">
                    Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.
                    </p>
                    <p class=\"lead\">
                    Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.
                    </p>
                    <p class=\"lead\">
                    Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!
                    </p>
                </div>
                ";
        // line 140
        echo "              </div>
            </div>
          </div>

          <div data-aos=\"fade-left\" class=\"col-lg-6 col-md-12 mb-4\">
            <div class=\"card shadow\" style=\"border-radius: 10px;\">
              <div class=\"bg-image\">
                <img src=\"img/pexels-andrea-piacquadio-868483_1600x1000.webp\" class=\"img-fluid\" style=\"border-radius: 10px 10px 0 0;\"/>
              </div>
              <div class=\"card-body text-start\">
                <h1 data-aos=\"fade-up\">Pilates</h1>
                <div data-aos=\"fade-up\">
                    <p class=\"lead\">
                    Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.
                    </p>
                    <p class=\"lead\">
                    Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.
                    </p>
                    <p class=\"lead\">
                    Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!
                    </p>
                </div>
                ";
        // line 163
        echo "              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Oferta-->

      <hr/>

      <!--Section: Grafik-->
      <section id=\"grafik\">
        <h4 data-aos=\"fade-right\" class=\"display-2 mb-5 text-center\"><strong>Grafik</strong></h4>
        <div class=\"container-fluid d-flex flex-column align-items-center justify-content-center\">
            <div class=\"col-12 pb-5\">
                <div data-aos=\"fade-left\" id=\"calendar\" class=\"container-fluid mw-100\"></div>
            </div>
            </div>
        </div>
      </section>
      <!--Section: Grafik-->

      <hr/>

    <!--Section: Cennik-->
    <section id=\"cennik\">
        <div class=\"container-fluid d-flex flex-column align-items-center justify-content-center\">
            <h4 data-aos=\"fade-left\" class=\"display-2 mb-5 text-center\"><strong>Cennik</strong></h4>
            <div data-aos=\"fade-right\" class=\"container col-md-6\">
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
                <div class=\"table-color col-lg p-2\">UWAGA!!! Rozliczamy się na miejscu i tylko gotówką lub blikiem na numer telefonu.</div>
            </div>
        </div>
    </div>
</section>
    <!--Section: Cennik-->

      <hr/>
    <!--Section: Rejestracja-->
    <section>
        <div id=\"rejestracja\" class=\"container-fluid carousel slide\" data-bs-touch=\"true\" data-bs-wrap=\"false\">

                    

                    <div class=\"carousel-inner h-100\">

                        <div class=\"carousel-item active\">
                            <div id=\"rejestracja1\" class=\"slajd container d-flex flex-column align-items-center justify-content-center col-9\">
                                <h4 data-aos=\"fade-up\" data-aos-offset=\"240\" class=\"display-2 mb-5 text-center\"><strong>Rejestracja</strong></h4>
                                <div data-aos=\"fade-up\" data-aos-offset=\"200\" class=\"row align-items-center\">

                                    <div class=\"col-lg-6 d-inline lead\">
                                        <div class=\"text-center p-4\"><img class=\"efitness-logo rounded-3\"
                                                                    src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/efitnessapp_logo.webp"), "html", null, true);
        echo "\"></div>
                                        <p>Do rejestracji w klubie oraz rezerwacji miejsc na poszczególne zajęcia polecamy w
                                            pełni darmową aplikację eFitness App.</p>
                                    </div>

                                    <div class=\"col d-flex align-items-center justify-content-center flex-wrap\">

                                        <div class=\"d-flex flex-column\">
                                            <a href=\"https://play.google.com/store/apps/details?id=pl.efitness.mobile&hl=pl\"><img class=\"m-2 google-play\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/google_play.webp"), "html", null, true);
        echo "\"></a>
                                            <a href=\"https://itunes.apple.com/pl/app/efitnessapp/id1054978020?l=pl&mt=8\"><img class=\"m-2 app-store\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/appstore.webp"), "html", null, true);
        echo "\"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"carousel-item\">
                            <div id=\"rejestracja2\" class=\"slajd container d-flex flex-column align-items-center justify-content-center col-10\">

                                <h4 data-aos=\"fade-up\" data-aos-offset=\"240\" class=\"display-2 mb-5 text-center\"><strong>eFitness App to:</strong></h4>

                                <div data-aos=\"fade-up\" data-aos-offset=\"200\" class=\"row align-items-start\">
                                    <div class=\"col-lg pb-3\">
                                        <div class=\"text-center\"><i class=\"bi bi-calendar3-week h1\"></i></div>
                                        <div class=\"p-2 lead\">Łatwy dostęp do grafiku zajęć na każdy dzień.</div>
                                    </div>
                                    <div class=\"col-lg pb-3\">
                                        <div class=\"text-center\"><i class=\"bi bi-calendar-check h1\"></i></div>
                                        <div class=\"p-2 lead\">Szybki zapis na zajęcia, w zaledwie dwóch kliknięciach.</div>
                                    </div>
                                    <div class=\"col-lg pb-3\">
                                        <div class=\"text-center\"><i class=\"bi bi-x-square h1\"></i></div>
                                        <div class=\"p-2 lead\">Odwoływanie rezerwacji miejsca na zajęciach.</div>
                                    </div>
                                    <div class=\"col-lg pb-3\">
                                        <div class=\"text-center\"><i class=\"bi bi-arrow-left-right h1\"></i></div>
                                        <div class=\"p-2 lead\">Informacje o listach rezerwowych i zastępstwach.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"carousel-item\">
                            <div id=\"rejestracja3\" class=\"slajd container d-flex flex-column align-items-center justify-content-center col-10\">

                                <h4 data-aos=\"fade-up\" data-aos-offset=\"240\" class=\"display-2 mb-5 text-center\"><strong>Instalacja apki</strong></h4>

                                <div data-aos=\"fade-up\" class=\"row align-items-start\">
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
                
                    <div class=\"carousel-indicators\">
                        <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"0\" class=\"indi-btn indicator active\"
                                aria-current=\"true\" aria-label=\"Slide 1\"></button>
                        <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\" class=\"indi-btn\"></button>
                        <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\" class=\"indi-btn\"></button>
                    </div>

        </div>
        
    </section>
     
    </main>
    
    <footer data-aos=\"zoom-in\" data-aos-offset=\"200\" id=\"kontakt\"
        class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100 min-vw-100\">
        
        <span><img data-aos=\"fade-up\" style=\"width: 25rem\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Kasia_logo_ok_KONTRA_saddlebrown.png"), "html", null, true);
        echo "\"></span>
        
        <span data-aos=\"fade-right\" class=\"adres lead\">Pastelowa 19, Marki</span>
        
        <div class=\"social d-flex justify-content-around\">
            
            <span data-aos=\"zoom-out\" data-aos-delay=\"100\" class=\"m-1 text-center\"><a class=\"social-icon p-2 text-body-secondary\"
                                    href=\"https://www.facebook.com/KasiaLatekJoga\" title=\"facebook\"><i
                            class=\"bi bi-facebook\"></i></a></span>
            <span data-aos=\"zoom-out\" data-aos-delay=\"300\" class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                    href=\"https://www.instagram.com/kasia_latek\" title=\"instagram\"><i
                            class=\"bi bi-instagram\"></i></a></span>
            <span data-aos=\"zoom-out\" data-aos-delay=\"500\" class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                    href=\"https://www.m.me/101829889521117\" title=\"messenger\"><i
                            class=\"bi bi-messenger\"></i></a></span>
            <span data-aos=\"zoom-out\" data-aos-delay=\"700\" class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                    href=\"mailto:kasia@jogawmarkach.pl?subject=Zapytanie ze strony JogawMarkach.pl\"
                                    title=\"email\"><i class=\"bi bi-envelope\"></i></a></span>
        </div>
    

    </footer>


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
        return array (  425 => 331,  340 => 249,  336 => 248,  325 => 240,  246 => 163,  222 => 140,  120 => 39,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} | Kasia Latek{% endblock %}


{% block body %}

 
 <div class=\"container-fluid d-flex flex-column p-0\">
 

    <button type=\"button\" class=\"btn shadow z-3\" id=\"btn-back-to-top\">
        <i style=\"color: #fef9f3 !important;\" class=\"bi bi-arrow-up h1\"></i>
    </button>

    <header>
        <nav class=\"navbar fixed-top navbar-expand-lg bg-light p-0 shadow\" style=\"min-height: 67.7px\">
            <div class=\"container-fluid d-flex flex-row\">
             
                    <a class=\"navbar-brand d-flex align-items-center\" href=\"#\">
                    <img src=\"img/Kasia_logo_www.png\" alt=\"Logo\" width=\"60\" height=\"60\" class=\"d-inline-block align-text-top me-1\">
                    Kasia Latek | Pilates i joga
                    </a>
                    
                    <div class=\"d-flex justify-content-end\">
                        <div id=\"nav-icon3\" class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                
                <div class=\"collapse navbar-collapse flex-grow-1 text-center\" id=\"navbarNav\">
                    <ul class=\"navbar-nav ms-auto flex-nowrap\">
                        {# <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\"><i class=\"bi bi-house-door\"></i></a>
                        </li> #}
                        <li class=\"nav-item\">
                            <a href=\"#omnie\" class=\"nav-link\" >O mnie</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#oferta\" class=\"nav-link\">Oferta</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#grafik\" class=\"nav-link\">Grafik</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#cennik\" class=\"nav-link\">Cennik</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#rejestracja\" class=\"nav-link\">Rejestracja</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#kontakt\" class=\"nav-link\">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div id=\"intro\" class=\"bg-image shadow\"></div>
    </header>

    <main style=\"margin-top: 67.7px;\">
    <div class=\"container\">
    <!--Section: O mnie-->
      <section>
        <div id=\"omnie\" class=\"row\">
          <div data-aos=\"flip-up\" class=\"col-md-6 gx-5 mb-4\">
            <div class=\"bg-image\">
              <img src=\"img/kasia_omnie_1600x1000.webp\" class=\"img-fluid shadow rounded-3\" />
            </div>
          </div>

          <div data-aos=\"fade-up\" class=\"col-md-6 gx-5 mb-5\">
            <h2><strong>O mnie</strong></h2>
            <p class=\"lead\">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
              eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
              sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <p class=\"lead\">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
              nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
              alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
          </div>
        </div>

        <div id=\"miejsce\" class=\"row\">
          <div data-aos=\"fade-up\" class=\"col-md-6 gx-5\">
            <h2><strong>Miejsce</strong></h2>
            <p class=\"lead\">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
              eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
              sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
            </p>
            <p class=\"lead\">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
              nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
              alias, unde optio accusantium soluta, iusto molestiae adipisci et?
            </p>
          </div>
          <div data-aos=\"flip-up\" class=\"col-md-6 gx-5 mb-4\">
            <div class=\"bg-image\">
              <img src=\"img/pastelowy_gaj_1600X1000.webp\" class=\"img-fluid shadow rounded-3\" />
            </div>
          </div>
        </div>
      </section>
      <!--Section: O mnie-->

      <hr/>

      <!--Section: Oferta-->
      <section id=\"oferta\">
        <h4 data-aos=\"fade-up\" data-aos-offset=\"200\" class=\"display-2 mb-5 text-center\"><strong>Oferta</strong></h4>

        <div class=\"row justify-content-around\">
          <div data-aos=\"fade-right\" class=\"col-lg-6 col-md-12 mb-4\">
            <div class=\"card shadow\" style=\"border-radius: 10px;\">
              <div class=\"bg-image\">
                <img src=\"img/pexels-lucas-pezeta-9351349_1600x1000.webp\" class=\"img-fluid\" style=\"border-radius: 10px 10px 0 0;\"/>
              </div>
              <div class=\"card-body text-start\">
                <h1 data-aos=\"fade-up\">Joga</h1>
                <div data-aos=\"fade-up\">
                    <p class=\"lead\">
                    Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.
                    </p>
                    <p class=\"lead\">
                    Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.
                    </p>
                    <p class=\"lead\">
                    Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!
                    </p>
                </div>
                {# <a href=\"#!\" class=\"btn btn-primary\">Button</a> #}
              </div>
            </div>
          </div>

          <div data-aos=\"fade-left\" class=\"col-lg-6 col-md-12 mb-4\">
            <div class=\"card shadow\" style=\"border-radius: 10px;\">
              <div class=\"bg-image\">
                <img src=\"img/pexels-andrea-piacquadio-868483_1600x1000.webp\" class=\"img-fluid\" style=\"border-radius: 10px 10px 0 0;\"/>
              </div>
              <div class=\"card-body text-start\">
                <h1 data-aos=\"fade-up\">Pilates</h1>
                <div data-aos=\"fade-up\">
                    <p class=\"lead\">
                    Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.
                    </p>
                    <p class=\"lead\">
                    Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.
                    </p>
                    <p class=\"lead\">
                    Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!
                    </p>
                </div>
                {# <a href=\"#!\" class=\"btn btn-primary\">Button</a> #}
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Oferta-->

      <hr/>

      <!--Section: Grafik-->
      <section id=\"grafik\">
        <h4 data-aos=\"fade-right\" class=\"display-2 mb-5 text-center\"><strong>Grafik</strong></h4>
        <div class=\"container-fluid d-flex flex-column align-items-center justify-content-center\">
            <div class=\"col-12 pb-5\">
                <div data-aos=\"fade-left\" id=\"calendar\" class=\"container-fluid mw-100\"></div>
            </div>
            </div>
        </div>
      </section>
      <!--Section: Grafik-->

      <hr/>

    <!--Section: Cennik-->
    <section id=\"cennik\">
        <div class=\"container-fluid d-flex flex-column align-items-center justify-content-center\">
            <h4 data-aos=\"fade-left\" class=\"display-2 mb-5 text-center\"><strong>Cennik</strong></h4>
            <div data-aos=\"fade-right\" class=\"container col-md-6\">
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
                <div class=\"table-color col-lg p-2\">UWAGA!!! Rozliczamy się na miejscu i tylko gotówką lub blikiem na numer telefonu.</div>
            </div>
        </div>
    </div>
</section>
    <!--Section: Cennik-->

      <hr/>
    <!--Section: Rejestracja-->
    <section>
        <div id=\"rejestracja\" class=\"container-fluid carousel slide\" data-bs-touch=\"true\" data-bs-wrap=\"false\">

                    

                    <div class=\"carousel-inner h-100\">

                        <div class=\"carousel-item active\">
                            <div id=\"rejestracja1\" class=\"slajd container d-flex flex-column align-items-center justify-content-center col-9\">
                                <h4 data-aos=\"fade-up\" data-aos-offset=\"240\" class=\"display-2 mb-5 text-center\"><strong>Rejestracja</strong></h4>
                                <div data-aos=\"fade-up\" data-aos-offset=\"200\" class=\"row align-items-center\">

                                    <div class=\"col-lg-6 d-inline lead\">
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
                            <div id=\"rejestracja2\" class=\"slajd container d-flex flex-column align-items-center justify-content-center col-10\">

                                <h4 data-aos=\"fade-up\" data-aos-offset=\"240\" class=\"display-2 mb-5 text-center\"><strong>eFitness App to:</strong></h4>

                                <div data-aos=\"fade-up\" data-aos-offset=\"200\" class=\"row align-items-start\">
                                    <div class=\"col-lg pb-3\">
                                        <div class=\"text-center\"><i class=\"bi bi-calendar3-week h1\"></i></div>
                                        <div class=\"p-2 lead\">Łatwy dostęp do grafiku zajęć na każdy dzień.</div>
                                    </div>
                                    <div class=\"col-lg pb-3\">
                                        <div class=\"text-center\"><i class=\"bi bi-calendar-check h1\"></i></div>
                                        <div class=\"p-2 lead\">Szybki zapis na zajęcia, w zaledwie dwóch kliknięciach.</div>
                                    </div>
                                    <div class=\"col-lg pb-3\">
                                        <div class=\"text-center\"><i class=\"bi bi-x-square h1\"></i></div>
                                        <div class=\"p-2 lead\">Odwoływanie rezerwacji miejsca na zajęciach.</div>
                                    </div>
                                    <div class=\"col-lg pb-3\">
                                        <div class=\"text-center\"><i class=\"bi bi-arrow-left-right h1\"></i></div>
                                        <div class=\"p-2 lead\">Informacje o listach rezerwowych i zastępstwach.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"carousel-item\">
                            <div id=\"rejestracja3\" class=\"slajd container d-flex flex-column align-items-center justify-content-center col-10\">

                                <h4 data-aos=\"fade-up\" data-aos-offset=\"240\" class=\"display-2 mb-5 text-center\"><strong>Instalacja apki</strong></h4>

                                <div data-aos=\"fade-up\" class=\"row align-items-start\">
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
                
                    <div class=\"carousel-indicators\">
                        <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"0\" class=\"indi-btn indicator active\"
                                aria-current=\"true\" aria-label=\"Slide 1\"></button>
                        <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\" class=\"indi-btn\"></button>
                        <button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\" class=\"indi-btn\"></button>
                    </div>

        </div>
        
    </section>
     
    </main>
    
    <footer data-aos=\"zoom-in\" data-aos-offset=\"200\" id=\"kontakt\"
        class=\"container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100 min-vw-100\">
        
        <span><img data-aos=\"fade-up\" style=\"width: 25rem\" src=\"{{ asset('img/Kasia_logo_ok_KONTRA_saddlebrown.png') }}\"></span>
        
        <span data-aos=\"fade-right\" class=\"adres lead\">Pastelowa 19, Marki</span>
        
        <div class=\"social d-flex justify-content-around\">
            
            <span data-aos=\"zoom-out\" data-aos-delay=\"100\" class=\"m-1 text-center\"><a class=\"social-icon p-2 text-body-secondary\"
                                    href=\"https://www.facebook.com/KasiaLatekJoga\" title=\"facebook\"><i
                            class=\"bi bi-facebook\"></i></a></span>
            <span data-aos=\"zoom-out\" data-aos-delay=\"300\" class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                    href=\"https://www.instagram.com/kasia_latek\" title=\"instagram\"><i
                            class=\"bi bi-instagram\"></i></a></span>
            <span data-aos=\"zoom-out\" data-aos-delay=\"500\" class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                    href=\"https://www.m.me/101829889521117\" title=\"messenger\"><i
                            class=\"bi bi-messenger\"></i></a></span>
            <span data-aos=\"zoom-out\" data-aos-delay=\"700\" class=\"m-1\"><a class=\"social-icon p-2 text-body-secondary\"
                                    href=\"mailto:kasia@jogawmarkach.pl?subject=Zapytanie ze strony JogawMarkach.pl\"
                                    title=\"email\"><i class=\"bi bi-envelope\"></i></a></span>
        </div>
    

    </footer>


 </div>   

 

{% endblock %}", "hp.html.twig", "C:\\Projekty\\jogawmarkach\\templates\\hp.html.twig");
    }
}
