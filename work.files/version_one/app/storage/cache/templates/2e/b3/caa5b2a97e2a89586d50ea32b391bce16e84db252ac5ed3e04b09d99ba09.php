<?php

/* header.html */
class __TwigTemplate_2eb3caa5b2a97e2a89586d50ea32b391bce16e84db252ac5ed3e04b09d99ba09 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"assets/images/lupter-logo.png\">

    <title>Lupter - Dashboard</title>

";
        // line 13
        if ((isset($context["load_local_files"]) ? $context["load_local_files"] : null)) {
            // line 14
            echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <!-- Optional theme -->
    <!-- <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\"> -->
    <link rel=\"stylesheet\" href=\"assets/vendor/bootstrap-3.2.0/css/bootstrap-readable.min.css\">
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

";
        } else {
            // line 27
            echo "
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"assets/js/jquery.1.11.1.min.js\"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"assets/vendor/bootstrap-3.2.0/css/bootstrap.min.css\">
    <!-- Optional theme -->
    <!-- <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\"> -->
    <link rel=\"stylesheet\" href=\"assets/vendor/bootstrap-3.2.0/css/bootstrap-readable.min.css\">
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"assets/vendor/bootstrap-3.2.0/js/bootstrap.min.js\"></script>

";
        }
        // line 41
        echo "
    <script src=\"assets/js/docs.min.js\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"assets/js/ie10-viewport-bug-workaround.js\"></script>

    <!-- Custom styles for this template -->
    <link href=\"assets/css/dashboard.css\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"assets/js/ie-emulation-modes-warning.js\"></script>

    <script type=\"text/javascript\">
    document.addEventListener('DOMContentLoaded', function(){
      console.log('admin loaded');
    });
    //vendor\\bootstrap-3.2.0
    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>
";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 41,  50 => 27,  35 => 14,  33 => 13,  19 => 1,);
    }
}
