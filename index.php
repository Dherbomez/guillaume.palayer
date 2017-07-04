<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<header class="header">
      <div class="container-lrg">
        <div class="col-12 spread">
          <div>
            <a class="logo">
              <img src="wp-content/themes/twentyseventeen/assets/images/logo-onairtour.svg" width="200px"><br>
            </a>
          </div>
          <div>
            <a class="nav-link" href="#">
              Twitter
            </a>
            <a class="nav-link" href="#">
              Facebook
            </a>
          </div>
        </div>
      </div>
      <div class="container-lrg flex">
        <div class="col-6 centervertical">
          <h1 class="heading">
            Le divertissement vient à vous...
          </h1>
          <h2 class="paragraph ">
            Découvrez notre concept innovant qui proposera des cinémas et concerts en plein air au coeur de vos villes. Nous faisons de votre besoin de divertissement notte nouvelle priorité !
          </h2>
          <div class="ctas">
            <input class="ctas-input" type="text" placeholder="Votre adresse email">
            <button class="ctas-button">
              S'inscrire
            </button>
          </div>
        </div>
        <div class="col-6 sidedevices">
          <div class="computeriphone">
            <div class="computer">
              <div class="mask">
                <img class="mask-img" src="wp-content/themes/twentyseventeen/assets/images/tablette.jpeg">
              </div>
            </div>
            <div class="iphone">
              <div class="mask">
                <img class="mask-img" src="wp-content/themes/twentyseventeen/assets/images/mobile2.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="feature3" style="text-align:center;">
      <div class="container-lrg flex">
        <div class="col-4">
          <b class="emoji">
            📆
          </b>
          <h3 class="subheading">
            Notre planning
          </h3>
          <p class="paragraph">
            Découvrez toute notre programmation et trouvez le divertissement proche de chez vous !
          </p>
        </div>
        <div class="col-4">
          <b class="emoji">
            🎇
          </b>
          <h3 class="subheading">
            Vivez l'expérience
          </h3>
          <p class="paragraph">
            On Air Tour vous apporte le divertissement. Il ne vous reste qu'à profiter pleinement !
          </p>
        </div>
        <div class="col-4">
          <b class="emoji">
            ☎️
          </b>
          <h3 class="subheading">
            Contactez-nous
          </h3>
          <p class="paragraph">
            Besoin d'aide pour votre événement ? Une question ? Un avis ? Contactez-nous !
          </p>
        </div>
      </div>
    </div>
    <div class="socialproof" style="background:url('wp-content/themes/twentyseventeen/assets/images/micro.jpg')no-repeat;background-size:cover;">
      <div class="container-sml">
        <div class="flex text-center">
          <div class="col-12">
            <h4 class="subheading" style="color:#fff;">
              "On Air Tour vise à apporter le divertissement à ceux qui en ont besoin. Ce service est né grâce et pour les personnes qui un jour se sont senti frustrés d'avoir à parcourir une longue distance pour accéder à quelque chose d'aussi simple que le divertissement. Pour nous, personne ne devrait avoir tant de difficultés pour aller se divertir. "
            </h4>
            <p class="paragraph" style="color:#fff;">
              Bastien - JM - Anthony. Co-dirigeant du projet On Air Tour
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="container-sml text-center">
        <div class="col-12">
          <h5 class="heading">
            Si l'expérience vous intéresse n'hésitez plus et rejoignez l'aventure dès aujourd'hui !
          </h5>
          <div class="ctas">
            <a class="ctas-button" href="">
              S'inscrire
            </a>
          </div>
        </div>
      </div>
      <div class="container-sml footer-nav">
        <div class="col-12 text-center">
          <div>
            <a class="nav-link">
              Twitter
            </a>
            <a class="nav-link">
              Facebook
            </a>
            <a class="nav-link">
              Contact
            </a>
          </div>
          <br>
          <div>
            <span>
              © 2017 On Air Tour
            </span>
          </div>
        </div>
      </div>
    </div>

<?php get_footer();
