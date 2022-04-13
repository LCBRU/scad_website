<?php defined('AUTOMAD') or die('Direct access not permitted!');
  require_once(__DIR__.'/functions.php');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="/packages/scad_theme/css/site.css?v=2">

  <!-- Favicons -->
  <link rel="icon" href="/packages/scad_theme/images/favicon.png" sizes="32x32" />
  <link rel="apple-touch-icon-precomposed" href="/packages/scad_theme/images/favicon.png" />
  <meta name="msapplication-TileImage" content="/packages/scad_theme/images/favicon.png" />

  <title>@{ sitename } / @{ title | def('404') }</title>
</head>

<body>
  <div class="container-fluid">

    <@ snippet node @>
      <@~ if @{ :pagelistCount } @>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @{ title | stripTags }
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <@~ foreach in pagelist @>
              <a class="nav-link" href="@{ url }">@{ title | stripTags } <@ if @{ :current } @><span class="sr-only">(current)</span><@ end @></a>
            <@~ end @>
          </div>
        </li>
      <@~ else @>
        <li class="nav-item <@ if @{ :current } @>active<@ end @>">
          <a class="nav-link" href="@{ url }">@{ title | stripTags } <@ if @{ :current } @><span class="sr-only">(current)</span><@ end @></a>
        </li>
      <@~ end @>
    <@~ end ~@>

    <# Create new pagelist including all children adapting to the current context. #>
    <@~ newPagelist { type: 'children' } ~@>

    <nav class="navbar navbar-expand-lg navbar-light bg-light row">
      <a class="navbar-brand" href="/"><img src=@{ logo } alt="Home"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item>">
            <a class="nav-link" href="/">Home<a>
          </li>
          <# Change context to the homepage #>
          <@~ with "/" @>
            <@~ if @{ :pagelistCount } @>
              <@~ foreach in pagelist @>
                <@~ node @>
              <@~ end @>
            <@~ end @>
          <@~ end @>
        </ul>
      </div>
    </nav>
  </div>

  <div id="content" class="container-fluid">
