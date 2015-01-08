<?php

/* index.html */
class __TwigTemplate_8ee6ca0c2ab29d0f37605551ebbf6b30df71fbcfdf4d20e09609d3fe31fdcd06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("header.html")->display($context);
        // line 2
        echo "
<script type=\"text/javascript\">
  jQuery(document).ready(function(\$){
    \$('.sidebar-btn-hider').click(function(e){
      e.preventDefault();
      \$('.sidebar .sb-text-link').toggleClass('hide');
      \$('.sidebar').toggleClass('col-sm-3 col-md-2');//.toggleClass('col-sm-1 col-md-1')
      \$(this).find('i').toggleClass('glyphicon-chevron-left glyphicon-chevron-right');
      \$('.main').toggleClass('col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2')
                .toggleClass('col-sm-11 col-sm-offset-1 col-md-11 col-md-offset-1');
      
    });

  });
</script>

    <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\" style=\"padding-top:10px;\">
            <!-- Grider -->
            <img src=\"assets/images/lupter-logo.png\" alt=\"Grider - Logo\" class=\"thumbnail img-rounded img-responsive\" style=\"height:130%;\">
          </a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">Dashboard</a></li>
            <li class=\"visible-sm-block visible-xs-block\"><a href=\"#\">Novo Post</a></li>
            <li class=\"visible-sm-block visible-xs-block\"><a href=\"#\">Nova Página</a></li>
            <li><a href=\"#\">Configurações</a></li>
            <li><a href=\"#\">Perfil</a></li>
          </ul>
          <form class=\"navbar-form navbar-right hide\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
          </form>
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-sm-3 col-md-2 sidebar\">
          <ul class=\"nav nav-sidebar\">
            <li><a href=\"#\" class=\"sidebar-btn-hider text-right\" style=\"padding-top:0px;padding-bottom:0px;\"><small><i class=\"glyphicon glyphicon-chevron-left\"></i></small> </a></li>
            <li class=\"active\"><a href=\"#\"><i class=\"glyphicon glyphicon-dashboard\"></i> <span class=\"sb-text-link\">Dashboard</span></a></li>
            <li class=\"\">
                <a href=\"#\">
                    <i class=\"glyphicon glyphicon-edit\"></i> 
                    <span class=\"sb-text-link\">Posts 
                        <small class=\"pull-right\" onclick=\"alert('add :)');\"><i class=\"glyphicon glyphicon-plus-sign\"></i></small>
                    </span>
                </a>
            </li>
            <li class=\"\">
                <a href=\"#\">
                    <i class=\"glyphicon glyphicon-book\"></i> 
                    <span class=\"sb-text-link\">Páginas 
                        <small class=\"pull-right\" onclick=\"alert('add :)');\"><i class=\"glyphicon glyphicon-plus-sign\"></i></small>
                    </span>
                </a>
            </li>
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-wrench\"></i> <span class=\"sb-text-link\">Configurações</span></a></li>
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-question-sign\"></i> <span class=\"sb-text-link\">Ajuda</span></a></li>
          </ul>
          <ul class=\"nav nav-sidebar hide\">
            <li><a href=\"\">Nav item</a></li>
            <li><a href=\"\">Nav item again</a></li>
            <li><a href=\"\">One more nav</a></li>
            <li><a href=\"\">Another nav item</a></li>
            <li><a href=\"\">More navigation</a></li>
          </ul>
          <ul class=\"nav nav-sidebar hide\">
            <li><a href=\"\">Nav item again</a></li>
            <li><a href=\"\">One more nav</a></li>
            <li><a href=\"\">Another nav item</a></li>
          </ul>
        </div>
        <div class=\"col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main\">
          <h1 class=\"page-header\">Dashboard</h1>

          <div class=\"row placeholders\">
            <div class=\"col-xs-6 col-sm-3 placeholder\">
              <img data-src=\"holder.js/200x200/auto/sky\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
              <h4>Label</h4>
              <span class=\"text-muted\">Something else</span>
            </div>
            <div class=\"col-xs-6 col-sm-3 placeholder\">
              <img data-src=\"holder.js/200x200/auto/vine\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
              <h4>Label</h4>
              <span class=\"text-muted\">Something else</span>
            </div>
            <div class=\"col-xs-6 col-sm-3 placeholder\">
              <img data-src=\"holder.js/200x200/auto/sky\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
              <h4>Label</h4>
              <span class=\"text-muted\">Something else</span>
            </div>
            <div class=\"col-xs-6 col-sm-3 placeholder\">
              <img data-src=\"holder.js/200x200/auto/vine\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">
              <h4>Label</h4>
              <span class=\"text-muted\">Something else</span>
            </div>
          </div>

          <h2 class=\"sub-header\">Section title</h2>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

";
        // line 243
        $this->env->loadTemplate("footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 243,  21 => 2,  19 => 1,);
    }
}
