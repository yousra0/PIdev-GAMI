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

/* admin/browse.html.twig */
class __TwigTemplate_fd930a37230b72777afa01e34f1b2271 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/browse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/browse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/browse.html.twig", 1);
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
        echo " <!-- ***** Preloader Start ***** -->
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
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\"> 
                        <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Home</a></li>
                        <li><a href=\"browse.html\" class=\"active\">Browse</a></li>
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
        echo "\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          <!-- ***** Featured Games Start ***** -->
          <div class=\"row\">
            <div class=\"col-lg-8\">
              <div class=\"featured-games header-text\">
                <div class=\"heading-section\">
                  <h4><em>Featured</em> Games</h4>
                </div>
                <div class=\"owl-features owl-carousel\">
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-01.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>CS-GO<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-02.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Gamezer<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-03.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Island Rusty<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-01.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>CS-GO<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-02.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Gamezer<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-03.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Island Rusty<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"top-downloaded\">
                <div class=\"heading-section\">
                  <h4><em>Top</em> Downloaded</h4>
                </div>
                <ul>
                  <li>
                    <img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\">
                    <h4>Fortnite</h4>
                    <h6>Sandbox</h6>
                    <span><i class=\"fa fa-star\" style=\"color: yellow;\"></i> 4.9</span>
                    <span><i class=\"fa fa-download\" style=\"color: #ec6090;\"></i> 2.2M</span>
                    <div class=\"download\">
                      <a href=\"#\"><i class=\"fa fa-download\"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\">
                    <h4>CS-GO</h4>
                    <h6>Legendary</h6>
                    <span><i class=\"fa fa-star\" style=\"color: yellow;\"></i> 4.9</span>
                    <span><i class=\"fa fa-download\" style=\"color: #ec6090;\"></i> 2.2M</span>
                    <div class=\"download\">
                      <a href=\"#\"><i class=\"fa fa-download\"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\">
                    <h4>PugG</h4>
                    <h6>Battle Royale</h6>
                    <span><i class=\"fa fa-star\" style=\"color: yellow;\"></i> 4.9</span>
                    <span><i class=\"fa fa-download\" style=\"color: #ec6090;\"></i> 2.2M</span>
                    <div class=\"download\">
                      <a href=\"#\"><i class=\"fa fa-download\"></i></a>
                    </div>
                  </li>
                </ul>
                <div class=\"text-button\">
                  <a href=\"profile.html\">View All Games</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured Games End ***** -->

          <!-- ***** Start Stream Start ***** -->
          <div class=\"start-stream\">
            <div class=\"col-lg-12\">
              <div class=\"heading-section\">
                <h4><em>How To Start Your</em> Live Stream</h4>
              </div>
              <div class=\"row\">
                <div class=\"col-lg-4\">
                  <div class=\"item\">
                    <div class=\"icon\">
                      <img src=\"assets/images/service-01.jpg\" alt=\"\" style=\"max-width: 60px; border-radius: 50%;\">
                    </div>
                    <h4>Go To Your Profile</h4>
                    <p>GAMI Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout.</p>
                  </div>
                </div>
                <div class=\"col-lg-4\">
                  <div class=\"item\">
                    <div class=\"icon\">
                      <img src=\"assets/images/service-02.jpg\" alt=\"\" style=\"max-width: 60px; border-radius: 50%;\">
                    </div>
                    <h4>Live Stream Button</h4>
                    <p>If you wish to support us, you can make a <a href=\"https://paypal.me/templatemo\" target=\"_blank\">small contribution via PayPal</a> to info [at] templatemo.com</p>
                  </div>
                </div>
                <div class=\"col-lg-4\">
                  <div class=\"item\">
                    <div class=\"icon\">
                      <img src=\"assets/images/service-03.jpg\" alt=\"\" style=\"max-width: 60px; border-radius: 50%;\">
                    </div>
                    <h4>You Are Live</h4>
                    <p>You are not allowed to redistribute this template's downloadable ZIP file on any other template collection website.</p>
                  </div>
                </div>
                <div class=\"col-lg-12\">
                  <div class=\"main-button\">
                    <a href=\"profile.html\">Go To Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Start Stream End ***** -->

          <!-- ***** Live Stream Start ***** -->
          <div class=\"live-stream\">
            <div class=\"col-lg-12\">
              <div class=\"heading-section\">
                <h4><em>Most Popular</em> Live Stream</h4>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-lg-3 col-sm-6\">
                <div class=\"item\">
                  <div class=\"thumb\">
                    <img src=\"assets/images/stream-01.jpg\" alt=\"\">
                    <div class=\"hover-effect\">
                      <div class=\"content\">
                        <div class=\"live\">
                          <a href=\"#\">Live</a>
                        </div>
                        <ul>
                          <li><a href=\"#\"><i class=\"fa fa-eye\"></i> 1.2K</a></li>
                          <li><a href=\"#\"><i class=\"fa fa-gamepad\"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"down-content\">
                    <div class=\"avatar\">
                      <img src=\"assets/images/avatar-01.jpg\" alt=\"\" style=\"max-width: 46px; border-radius: 50%; float: left;\">
                    </div>
                    <span><i class=\"fa fa-check\"></i> KenganC</span>
                    <h4>Just Talking With Fans</h4>
                  </div> 
                </div>
              </div>
              <div class=\"col-lg-3 col-sm-6\">
                <div class=\"item\">
                  <div class=\"thumb\">
                    <img src=\"assets/images/stream-02.jpg\" alt=\"\">
                    <div class=\"hover-effect\">
                      <div class=\"content\">
                        <div class=\"live\">
                          <a href=\"#\">Live</a>
                        </div>
                        <ul>
                          <li><a href=\"#\"><i class=\"fa fa-eye\"></i> 1.2K</a></li>
                          <li><a href=\"#\"><i class=\"fa fa-gamepad\"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"down-content\">
                    <div class=\"avatar\">
                      <img src=\"assets/images/avatar-02.jpg\" alt=\"\" style=\"max-width: 46px; border-radius: 50%; float: left;\">
                    </div>
                    <span><i class=\"fa fa-check\"></i> LunaMa</span>
                    <h4>CS-GO 36 Hours Live Stream</h4>
                  </div> 
                </div>
              </div>
              <div class=\"col-lg-3 col-sm-6\">
                <div class=\"item\">
                  <div class=\"thumb\">
                    <img src=\"assets/images/stream-03.jpg\" alt=\"\">
                    <div class=\"hover-effect\">
                      <div class=\"content\">
                        <div class=\"live\">
                          <a href=\"#\">Live</a>
                        </div>
                        <ul>
                          <li><a href=\"#\"><i class=\"fa fa-eye\"></i> 1.2K</a></li>
                          <li><a href=\"#\"><i class=\"fa fa-gamepad\"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"down-content\">
                    <div class=\"avatar\">
                      <img src=\"assets/images/avatar-03.jpg\" alt=\"\" style=\"max-width: 46px; border-radius: 50%; float: left;\">
                    </div>
                    <span><i class=\"fa fa-check\"></i> Areluwa</span>
                    <h4>Maybe Nathej Allnight Chillin'</h4>
                  </div> 
                </div>
              </div>
              <div class=\"col-lg-3 col-sm-6\">
                <div class=\"item\">
                  <div class=\"thumb\">
                    <img src=\"assets/images/stream-04.jpg\" alt=\"\">
                    <div class=\"hover-effect\">
                      <div class=\"content\">
                        <div class=\"live\">
                          <a href=\"#\">Live</a>
                        </div>
                        <ul>
                          <li><a href=\"#\"><i class=\"fa fa-eye\"></i> 1.2K</a></li>
                          <li><a href=\"#\"><i class=\"fa fa-gamepad\"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"down-content\">
                    <div class=\"avatar\">
                      <img src=\"assets/images/avatar-04.jpg\" alt=\"\" style=\"max-width: 46px; border-radius: 50%; float: left;\">
                    </div>
                    <span><i class=\"fa fa-check\"></i> GangTm</span>
                    <h4>Live Streaming Till Morning</h4>
                  </div> 
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"main-button\">
                  <a href=\"streams.html\">Discover All Streams</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Live Stream End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2036 <a href=\"#\">GAMI Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href=\"https://templatemo.com\" target=\"_blank\" title=\"free CSS templates\">TemplateMo</a> Distributed By <a href=\"https://themewagon.com\" target=\"_blank\" >ThemeWagon</a>
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
        return "admin/browse.html.twig";
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
        return array (  120 => 43,  116 => 42,  112 => 41,  107 => 39,  90 => 25,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
 <!-- ***** Preloader Start ***** -->
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
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"{{ path('app_index') }}\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\"> 
                        <li><a href=\"{{ path('app_index')}}\">Home</a></li>
                        <li><a href=\"browse.html\" class=\"active\">Browse</a></li>
                        <li><a href=\"{{ path('app_details') }}\">Details</a></li>
                        <li><a href=\"{{ path('app_streams') }}\">Streams</a></li>
                        <li><a href=\"{{ path('app_profile') }}\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          <!-- ***** Featured Games Start ***** -->
          <div class=\"row\">
            <div class=\"col-lg-8\">
              <div class=\"featured-games header-text\">
                <div class=\"heading-section\">
                  <h4><em>Featured</em> Games</h4>
                </div>
                <div class=\"owl-features owl-carousel\">
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-01.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>CS-GO<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-02.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Gamezer<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-03.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Island Rusty<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-01.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>CS-GO<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-02.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Gamezer<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                  <div class=\"item\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/featured-03.jpg\" alt=\"\">
                      <div class=\"hover-effect\">
                        <h6>2.4K Streaming</h6>
                      </div>
                    </div>
                    <h4>Island Rusty<br><span>249K Downloads</span></h4>
                    <ul>
                      <li><i class=\"fa fa-star\"></i> 4.8</li>
                      <li><i class=\"fa fa-download\"></i> 2.3M</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-4\">
              <div class=\"top-downloaded\">
                <div class=\"heading-section\">
                  <h4><em>Top</em> Downloaded</h4>
                </div>
                <ul>
                  <li>
                    <img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\">
                    <h4>Fortnite</h4>
                    <h6>Sandbox</h6>
                    <span><i class=\"fa fa-star\" style=\"color: yellow;\"></i> 4.9</span>
                    <span><i class=\"fa fa-download\" style=\"color: #ec6090;\"></i> 2.2M</span>
                    <div class=\"download\">
                      <a href=\"#\"><i class=\"fa fa-download\"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\">
                    <h4>CS-GO</h4>
                    <h6>Legendary</h6>
                    <span><i class=\"fa fa-star\" style=\"color: yellow;\"></i> 4.9</span>
                    <span><i class=\"fa fa-download\" style=\"color: #ec6090;\"></i> 2.2M</span>
                    <div class=\"download\">
                      <a href=\"#\"><i class=\"fa fa-download\"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\">
                    <h4>PugG</h4>
                    <h6>Battle Royale</h6>
                    <span><i class=\"fa fa-star\" style=\"color: yellow;\"></i> 4.9</span>
                    <span><i class=\"fa fa-download\" style=\"color: #ec6090;\"></i> 2.2M</span>
                    <div class=\"download\">
                      <a href=\"#\"><i class=\"fa fa-download\"></i></a>
                    </div>
                  </li>
                </ul>
                <div class=\"text-button\">
                  <a href=\"profile.html\">View All Games</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured Games End ***** -->

          <!-- ***** Start Stream Start ***** -->
          <div class=\"start-stream\">
            <div class=\"col-lg-12\">
              <div class=\"heading-section\">
                <h4><em>How To Start Your</em> Live Stream</h4>
              </div>
              <div class=\"row\">
                <div class=\"col-lg-4\">
                  <div class=\"item\">
                    <div class=\"icon\">
                      <img src=\"assets/images/service-01.jpg\" alt=\"\" style=\"max-width: 60px; border-radius: 50%;\">
                    </div>
                    <h4>Go To Your Profile</h4>
                    <p>GAMI Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout.</p>
                  </div>
                </div>
                <div class=\"col-lg-4\">
                  <div class=\"item\">
                    <div class=\"icon\">
                      <img src=\"assets/images/service-02.jpg\" alt=\"\" style=\"max-width: 60px; border-radius: 50%;\">
                    </div>
                    <h4>Live Stream Button</h4>
                    <p>If you wish to support us, you can make a <a href=\"https://paypal.me/templatemo\" target=\"_blank\">small contribution via PayPal</a> to info [at] templatemo.com</p>
                  </div>
                </div>
                <div class=\"col-lg-4\">
                  <div class=\"item\">
                    <div class=\"icon\">
                      <img src=\"assets/images/service-03.jpg\" alt=\"\" style=\"max-width: 60px; border-radius: 50%;\">
                    </div>
                    <h4>You Are Live</h4>
                    <p>You are not allowed to redistribute this template's downloadable ZIP file on any other template collection website.</p>
                  </div>
                </div>
                <div class=\"col-lg-12\">
                  <div class=\"main-button\">
                    <a href=\"profile.html\">Go To Profile</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Start Stream End ***** -->

          <!-- ***** Live Stream Start ***** -->
          <div class=\"live-stream\">
            <div class=\"col-lg-12\">
              <div class=\"heading-section\">
                <h4><em>Most Popular</em> Live Stream</h4>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-lg-3 col-sm-6\">
                <div class=\"item\">
                  <div class=\"thumb\">
                    <img src=\"assets/images/stream-01.jpg\" alt=\"\">
                    <div class=\"hover-effect\">
                      <div class=\"content\">
                        <div class=\"live\">
                          <a href=\"#\">Live</a>
                        </div>
                        <ul>
                          <li><a href=\"#\"><i class=\"fa fa-eye\"></i> 1.2K</a></li>
                          <li><a href=\"#\"><i class=\"fa fa-gamepad\"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"down-content\">
                    <div class=\"avatar\">
                      <img src=\"assets/images/avatar-01.jpg\" alt=\"\" style=\"max-width: 46px; border-radius: 50%; float: left;\">
                    </div>
                    <span><i class=\"fa fa-check\"></i> KenganC</span>
                    <h4>Just Talking With Fans</h4>
                  </div> 
                </div>
              </div>
              <div class=\"col-lg-3 col-sm-6\">
                <div class=\"item\">
                  <div class=\"thumb\">
                    <img src=\"assets/images/stream-02.jpg\" alt=\"\">
                    <div class=\"hover-effect\">
                      <div class=\"content\">
                        <div class=\"live\">
                          <a href=\"#\">Live</a>
                        </div>
                        <ul>
                          <li><a href=\"#\"><i class=\"fa fa-eye\"></i> 1.2K</a></li>
                          <li><a href=\"#\"><i class=\"fa fa-gamepad\"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"down-content\">
                    <div class=\"avatar\">
                      <img src=\"assets/images/avatar-02.jpg\" alt=\"\" style=\"max-width: 46px; border-radius: 50%; float: left;\">
                    </div>
                    <span><i class=\"fa fa-check\"></i> LunaMa</span>
                    <h4>CS-GO 36 Hours Live Stream</h4>
                  </div> 
                </div>
              </div>
              <div class=\"col-lg-3 col-sm-6\">
                <div class=\"item\">
                  <div class=\"thumb\">
                    <img src=\"assets/images/stream-03.jpg\" alt=\"\">
                    <div class=\"hover-effect\">
                      <div class=\"content\">
                        <div class=\"live\">
                          <a href=\"#\">Live</a>
                        </div>
                        <ul>
                          <li><a href=\"#\"><i class=\"fa fa-eye\"></i> 1.2K</a></li>
                          <li><a href=\"#\"><i class=\"fa fa-gamepad\"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"down-content\">
                    <div class=\"avatar\">
                      <img src=\"assets/images/avatar-03.jpg\" alt=\"\" style=\"max-width: 46px; border-radius: 50%; float: left;\">
                    </div>
                    <span><i class=\"fa fa-check\"></i> Areluwa</span>
                    <h4>Maybe Nathej Allnight Chillin'</h4>
                  </div> 
                </div>
              </div>
              <div class=\"col-lg-3 col-sm-6\">
                <div class=\"item\">
                  <div class=\"thumb\">
                    <img src=\"assets/images/stream-04.jpg\" alt=\"\">
                    <div class=\"hover-effect\">
                      <div class=\"content\">
                        <div class=\"live\">
                          <a href=\"#\">Live</a>
                        </div>
                        <ul>
                          <li><a href=\"#\"><i class=\"fa fa-eye\"></i> 1.2K</a></li>
                          <li><a href=\"#\"><i class=\"fa fa-gamepad\"></i> CS-GO</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"down-content\">
                    <div class=\"avatar\">
                      <img src=\"assets/images/avatar-04.jpg\" alt=\"\" style=\"max-width: 46px; border-radius: 50%; float: left;\">
                    </div>
                    <span><i class=\"fa fa-check\"></i> GangTm</span>
                    <h4>Live Streaming Till Morning</h4>
                  </div> 
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"main-button\">
                  <a href=\"streams.html\">Discover All Streams</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Live Stream End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2036 <a href=\"#\">GAMI Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href=\"https://templatemo.com\" target=\"_blank\" title=\"free CSS templates\">TemplateMo</a> Distributed By <a href=\"https://themewagon.com\" target=\"_blank\" >ThemeWagon</a>
        </div>
      </div>
    </div>
  </footer>

{% endblock %}", "admin/browse.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\GAMI\\web\\front\\templates\\admin\\browse.html.twig");
    }
}
