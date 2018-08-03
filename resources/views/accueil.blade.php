@extends('layouts.menu')
@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home">
  <div class="container">
    <div class="row fullscreen d-flex align-items-center justify-content-end">
      <div class="banner-content col-lg-7 col-md-12" style="color: #fff; padding: 2rem;">
        <h4 class="text-uppercase" style="color: #fff;">Ne souffrez pas seul</h4>
        <h1 style="color: #fff;">
          Faites-vous accompagner
        </h1>
        <p style="color: #fff;">
          Il est souvent difficile de se former en ligne et tout seul. Oschool vous offre la possiblité
          de combiner auto-formation et accompagnement grâce à ses supports.
        </p>
        <a href="#offres" class="primary-btn header-btn text-uppercase">Voir nos offres</a>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area section-gap" id="feature">
  <div class="container">
    <div class="row">
      <div class="single-feature col-lg-4">
        <img class="img-fluid" src="/callcenter/img/f1.png" alt="">
        <h4>Support en ligne</h4>
        <p>Communiquez en ligne directement avec un coach formateur
        pour vous aider à mieux comprendre les projets de votre formation</p>
      </div>
      <div class="single-feature col-lg-4">
        <img class="img-fluid" src="/callcenter/img/f2.png" alt="">
        <h4>1 h par semaine</h4>
        <p>C'est le temps qu'un coach vous consacre par semaine.
        Bien sûr, vous pouvez d'un commun accord, échanger au-delà de ce temps</p>
      </div>
      <div class="single-feature col-lg-4">
        <img class="img-fluid" src="/callcenter/img/f3.png" alt="">
        <h4>1 problème. 1 solution</h4>
        <p>Nous vous aidons pas à pas à surmonter les obstacles qui apparaitront
        lors de votre apprentissage</p>
      </div>
    </div>
  </div>
</section>
<!-- End feature Area -->



<!-- Start offered Area -->
<section class="offered-area" id="weoffer">
  <div class="container">
    <div class="menu-content pb-60 col-lg-8">
      <div class="title text-center">
        <h1 class="mb-10">Nous voulons vous aider à apprendre, c'est tout.</h1>
        <p class="">Quel que soit votre niveau</p>
      </div>
    </div>
    <div class="row align-items-center justify-content-start">
      <div class="col-lg-6 offered-left">
        <div class="offer-wrap flex-row d-flex row">
          <div class="col-4">
            <div class="single-offer mb-30">
              <a href="#"></a><img class="img-fluid" src="/callcenter/img/o1.png" alt=""></d>
            </div>
          </div>
          <div class="col-4">
            <div class="single-offer mb-30">
              <a href="#"></a><img class="img-fluid" src="/callcenter/img/o2.png" alt=""></d>
            </div>
          </div>
          <div class="col-4">
            <div class="single-offer mb-30">
              <a href="#"></a><img class="img-fluid" src="/callcenter/img/o3.png" alt=""></d>
            </div>
          </div>
          <div class="col-4">
            <div class="single-offer">
              <a href="#"></a><img class="img-fluid" src="/callcenter/img/o4.png" alt=""></d>
            </div>
          </div>
          <div class="col-4">
            <div class="single-offer">
              <a href="#"></a><img class="img-fluid" src="/callcenter/img/o5.png" alt=""></d>
            </div>
          </div>
          <div class="col-4">
            <div class="single-offer">
              <a href="#"></a><img class="img-fluid" src="/callcenter/img/o6.png" alt=""></d>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 offered-right">
        <h4>Une offre qui répond à vos besoins</h4>
        <p class="pt-20 pb-20">
          Les offres d'accompagnement Oschool ont été pensés pour la population Africaine.
          Vous permettre d'obtenir l'aide d'experts de l'industrie à un prix abordable.
          Vous donner les meilleures chances d'atteindre vos objectifs en matière de formation.
        </p>
        <a href="#offres" class="primary-btn header-btn text-uppercase">Faites votre choix maintenant</a>
      </div>
    </div>
  </div>
</section>
<!-- End offered Area -->


<!-- Start service Area -->
<section class="service-area section-gap relative" id="offres">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-40 header-text">
        <h1>Choisissez ce qui vous convient le mieux</h1>
        <p>
          Support Online ou Support Total ?
        </p>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
<!--          <a href="{{ route('supportOnlines.create') }}"> -->
          <a href="#" data-toggle="modal" data-target="#myModal">
            <div class="single-service">
              <h4><span class="lnr lnr-user"></span>Support Online</h4>
              <p>
                Avec l'offre "Support Online", vous bénéficiez de <br>
                - 1 h de coaching par semaine <br>
                  - Support valable pour 12 mois <br>
                  - Accès au réseau privé Oschool <br>
                </ul>
                Vous choisissez le jour de la semaine où vous êtes le plus libre, et nous
                vous mettons en contact avec un coach formateur qui communiquera
                avec vous en ligne, via une plateforme que vous choisirez ensemble (Skype, Hangouts etc.)

              </p>
            </div>
          </a>

          <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Remplissez ce formulaire pour souscrire au Support Online</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="{{ route('supportOnlines.store') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="">Jour où vous êtes libre</label>
            <select name="date_coaching" class="form-control" style="">
              <option value="Lundi">Lundi</option>
              <option value="Mardi">Mardi</option>
              <option value="Mercredi">Mercredi</option>
              <option value="Jeudi">Jeudi</option>
              <option value="Vendredi">Vendredi</option>
              <option value="Samedi">Samedi</option>
              <option value="Dimanche">Dimanche</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Formation pour laquelle vous voulez un accompagnement</label>
            <select name="formation" class="form-control" style="">
              <option value="Développement web">Développement web</option>
              <option value="Développement de Jeux Vidéos">Développement de Jeux Vidéos</option>
              <option value="Community Management">Community Management</option>
              <option value="Booster son business avec Facebook">Booster son business avec Facebook</option>
              <option value="Photoshop">Photoshop</option>
              <option value="After effects">After effects</option>
              <option value="LABORATOIRE CCNA 200-125 2018">LABORATOIRE CCNA 200-125 2018</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Email de votre compte Oschool:</label>
            <input type="email" class="form-control" id="" placeholder="Email" name="email">
          </div>
          <div class="form-group">
            <label for="">Nom</label>
            <input type="text" class="form-control" id="" placeholder="Nom" name="nom">
          </div>
          <div class="form-group">
            <label for="">Prénoms</label>
            <input type="text" class="form-control" id="" placeholder="Prénoms" name="prenoms">
          </div>
          <div class="form-group">
            <label for="">Numéro de téléphone</label>
            <input type="text" class="form-control" id="" placeholder="Téléphone" name="tel">
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!--end modal-->






        </div>


        <div class="col-lg-6 col-md-6">
  <!--        <a href="{{ route('supportTotals.create') }}"> -->
          <a href="#" data-toggle="modal" data-target="#myModal2">
            <div class="single-service">
              <h4><span class="lnr lnr-phone"></span>Support Total</h4>
              <p>
                Avec l'offre "Support Total", vous bénéficiez de <br>
                - 1 h de coaching par semaine <br>
                - 2 h de séance de renforcement en présentiel 2 samedis dans le mois <br>
                  - Support valable pour 12 mois <br>
                  - Accès au réseau privé Oschool <br>
                </ul>
                Vous choisissez le jour de la semaine où vous êtes le plus libre, et nous
                vous mettons en contact avec un coach formateur qui communiquera
                avec vous en ligne, via une plateforme que vous choisirez ensemble (Skype, Hangouts etc.)<br>
                De plus, vous pouvez assister aux journées de formation organisées par Oschool,
                généralement les samedis en 15, dans une salle.

              </p>
            </div>
          </a>

          <!-- The Modal -->
<div class="modal fade" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Remplissez ce formulaire pour souscrire au Support Total</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="{{ route('supportTotals.store') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="">Jour où vous êtes libre</label>
            <select name="date_coaching" class="form-control" style="">
              <option value="Lundi">Lundi</option>
              <option value="Mardi">Mardi</option>
              <option value="Mercredi">Mercredi</option>
              <option value="Jeudi">Jeudi</option>
              <option value="Vendredi">Vendredi</option>
              <option value="Samedi">Samedi</option>
              <option value="Dimanche">Dimanche</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Formation pour laquelle vous voulez un accompagnement</label>
            <select name="formation" class="form-control" style="">
              <option value="Développement web">Développement web</option>
              <option value="Développement de Jeux Vidéos">Développement de Jeux Vidéos</option>
              <option value="Community Management">Community Management</option>
              <option value="Booster son business avec Facebook">Booster son business avec Facebook</option>
              <option value="Photoshop">Photoshop</option>
              <option value="After effects">After effects</option>
              <option value="LABORATOIRE CCNA 200-125 2018">LABORATOIRE CCNA 200-125 2018</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Email de votre compte Oschool:</label>
            <input type="email" class="form-control" id="" placeholder="Email" name="email">
          </div>
          <div class="form-group">
            <label for="">Nom</label>
            <input type="text" class="form-control" id="" placeholder="Nom" name="nom">
          </div>
          <div class="form-group">
            <label for="">Prénoms</label>
            <input type="text" class="form-control" id="" placeholder="Prénoms" name="prenoms">
          </div>
          <div class="form-group">
            <label for="">Numéro de téléphone</label>
            <input type="text" class="form-control" id="" placeholder="Téléphone" name="tel">
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
      </div>

    </div>
  </div>
</div>

<!--end modal-->





        </div>

    </div>
  </div>
</section>
<!-- End service Area -->







<!-- start contact Area -->
<section class="contact-area section-gap" id="contact">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="menu-content pb-30 col-lg-8">
        <div class="title text-center">
          <h1 class="mb-10">Avez vous des questions supplémentaires ?</h1>
          <p>Ecrivez à</p><br>
          <img width="400" src="/img/info.jpg" alt="">
        </div>
      </div>
    </div>


  </div>
</section>
<!-- end contact Area -->


@endsection
