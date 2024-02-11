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

/* Admin/index.html.twig */
class __TwigTemplate_d8cdc04884e2170fecbe6e07a327cb69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <!-- *** Preloader Start *** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- *** Preloader End *** -->

  <!-- *** Header Area Start *** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- *** Logo Start *** -->
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- *** Logo End *** -->
                    <!-- *** Search End *** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- *** Search End *** -->
                    <!-- *** Menu Start *** -->
                    <ul class=\"nav\"> 
                        <li><a href=\"index.html\" >Home</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
        echo "\">Browse</a></li>
                        <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_details");
        echo "\">Details</a></li>
                        <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_streams");
        echo "\">Streams</a></li>
                        <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\" class=\"active\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- *** Menu End *** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- *** Header Area End *** -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          <!-- *** Banner Start *** -->
          <div class=\"main-banner\">
            <div class=\"row\">
              <div class=\"col-lg-7\">
                <div class=\"header-text\">
                  <h6>Welcome To GAMI</h6>
                  <h4><em>Browse</em> Our Popular Games Here</h4>
                  <div class=\"main-button\">
                    <a href=\"browse.html\">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- *** Banner End *** -->

          <!-- *** Most Popular Start *** -->
          <div class=\"most-popular\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"heading-section\">
                  <h4><em>Most Popular</em> Right Now</h4>
                </div>
                <div class=\"row\">
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-01.jpg\" alt=\"\">
                      <h4>Fortnite<br><span>Sandbox</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-02.jpg\" alt=\"\">
                      <h4>PubG<br><span>Battle S</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-03.jpg\" alt=\"\">
                      <h4>Dota2<br><span>Steam-X</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-04.jpg\" alt=\"\">
                      <h4>CS-GO<br><span>Legendary</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-6\">
                    <div class=\"item\">
                      <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-6\">
                          <div class=\"item inner-item\">
                            <img src=\"assets/images/popular-05.jpg\" alt=\"\">
                            <h4>Mini Craft<br><span>Legendary</span></h4>
                            <ul>
                              <li><i class=\"fa fa-star\"></i> 4.8</li>
                              <li><i class=\"fa fa-download\"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-6\">
                          <div class=\"item\">
                            <img src=\"assets/images/popular-06.jpg\" alt=\"\">
                            <h4>Eagles Fly<br><span>Matrix Games</span></h4>
                            <ul>
                              <li><i class=\"fa fa-star\"></i> 4.8</li>
                              <li><i class=\"fa fa-download\"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-07.jpg\" alt=\"\">
                      <h4>Warface<br><span>Max 3D</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-08.jpg\" alt=\"\">
                      <h4>Warcraft<br><span>Legend</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-12\">
                    <div class=\"main-button\">
                      <a href=\"browse.html\">Discover Popular</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- *** Most Popular End *** -->

          <!-- *** Gaming Library Start *** -->
          <div class=\"gaming-library\">
            <div class=\"col-lg-12\">
              <div class=\"heading-section\">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class=\"item\">
                <ul>
                  <li><img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2022</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class=\"item\">
                <ul>
                  <li><img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2023</span></li>
                  <li><h4>Hours Played</h4><span>740 H 52 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button\"><a href=\"#\">Donwload</a></div></li>
                </ul>
              </div>
              <div class=\"item last-item\">
                <ul>
                  <li><img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2020</span></li>
                  <li><h4>Hours Played</h4><span>892 H 14 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button\">
                <a href=\"profile.html\">View Your Library</a>
              </div>
            </div>
          </div>
          <!-- *** Gaming Library End *** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2024 <a href=\"#\">GAMI </a> Company. All rights reserved. 
          
          <br> <a href=\"https://templatemo.com\" target=\"_blank\" title=\"free CSS templates\"></a></p>
        </div>
      </div>
    </div>
  </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/index.html.twig";
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
        return array (  120 => 43,  116 => 42,  112 => 41,  108 => 40,  90 => 25,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
 <!-- *** Preloader Start *** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- *** Preloader End *** -->

  <!-- *** Header Area Start *** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- *** Logo Start *** -->
                    <a href=\"{{ path('app_index') }}\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- *** Logo End *** -->
                    <!-- *** Search End *** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- *** Search End *** -->
                    <!-- *** Menu Start *** -->
                    <ul class=\"nav\"> 
                        <li><a href=\"index.html\" >Home</a></li>
                        <li><a href=\"{{ path('app_browse') }}\">Browse</a></li>
                        <li><a href=\"{{ path('app_details') }}\">Details</a></li>
                        <li><a href=\"{{ path('app_streams') }}\">Streams</a></li>
                        <li><a href=\"{{ path('app_profile') }}\" class=\"active\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- *** Menu End *** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- *** Header Area End *** -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          <!-- *** Banner Start *** -->
          <div class=\"main-banner\">
            <div class=\"row\">
              <div class=\"col-lg-7\">
                <div class=\"header-text\">
                  <h6>Welcome To GAMI</h6>
                  <h4><em>Browse</em> Our Popular Games Here</h4>
                  <div class=\"main-button\">
                    <a href=\"browse.html\">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- *** Banner End *** -->

          <!-- *** Most Popular Start *** -->
          <div class=\"most-popular\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"heading-section\">
                  <h4><em>Most Popular</em> Right Now</h4>
                </div>
                <div class=\"row\">
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-01.jpg\" alt=\"\">
                      <h4>Fortnite<br><span>Sandbox</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-02.jpg\" alt=\"\">
                      <h4>PubG<br><span>Battle S</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-03.jpg\" alt=\"\">
                      <h4>Dota2<br><span>Steam-X</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-04.jpg\" alt=\"\">
                      <h4>CS-GO<br><span>Legendary</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-6\">
                    <div class=\"item\">
                      <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-6\">
                          <div class=\"item inner-item\">
                            <img src=\"assets/images/popular-05.jpg\" alt=\"\">
                            <h4>Mini Craft<br><span>Legendary</span></h4>
                            <ul>
                              <li><i class=\"fa fa-star\"></i> 4.8</li>
                              <li><i class=\"fa fa-download\"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-6\">
                          <div class=\"item\">
                            <img src=\"assets/images/popular-06.jpg\" alt=\"\">
                            <h4>Eagles Fly<br><span>Matrix Games</span></h4>
                            <ul>
                              <li><i class=\"fa fa-star\"></i> 4.8</li>
                              <li><i class=\"fa fa-download\"></i> 2.3M</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-07.jpg\" alt=\"\">
                      <h4>Warface<br><span>Max 3D</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"item\">
                      <img src=\"assets/images/popular-08.jpg\" alt=\"\">
                      <h4>Warcraft<br><span>Legend</span></h4>
                      <ul>
                        <li><i class=\"fa fa-star\"></i> 4.8</li>
                        <li><i class=\"fa fa-download\"></i> 2.3M</li>
                      </ul>
                    </div>
                  </div>
                  <div class=\"col-lg-12\">
                    <div class=\"main-button\">
                      <a href=\"browse.html\">Discover Popular</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- *** Most Popular End *** -->

          <!-- *** Gaming Library Start *** -->
          <div class=\"gaming-library\">
            <div class=\"col-lg-12\">
              <div class=\"heading-section\">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class=\"item\">
                <ul>
                  <li><img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2022</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class=\"item\">
                <ul>
                  <li><img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2023</span></li>
                  <li><h4>Hours Played</h4><span>740 H 52 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button\"><a href=\"#\">Donwload</a></div></li>
                </ul>
              </div>
              <div class=\"item last-item\">
                <ul>
                  <li><img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2020</span></li>
                  <li><h4>Hours Played</h4><span>892 H 14 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class=\"main-border-button border-no-active\"><a href=\"#\">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button\">
                <a href=\"profile.html\">View Your Library</a>
              </div>
            </div>
          </div>
          <!-- *** Gaming Library End *** -->
        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2024 <a href=\"#\">GAMI </a> Company. All rights reserved. 
          
          <br> <a href=\"https://templatemo.com\" target=\"_blank\" title=\"free CSS templates\"></a></p>
        </div>
      </div>
    </div>
  </footer>
{% endblock %}", "Admin/index.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\web\\front\\GAMI\\templates\\admin\\index.html.twig");
    }
}
