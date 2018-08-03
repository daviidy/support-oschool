@extends('layouts.menu-login')
@section('title', 'Souscrivez au support total')

@section('content')


<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/formcreate/images/img-01.png" alt="IMG">
      </div>

      <form method="post" enctype="multipart/form-data" action="https://secure.cinetpay.com/" class="login100-form validate-form">
        <span class="login100-form-title">
          Le Support Total vous donne droit à :
        </span>
        <ul>
          <li>- 1 h de coaching par semaine</li>
          <li><strong>- 2 h de séance de renforcement en présentiel 2 samedis dans le mois</strong> </li>
          <li>- Support valable pour 12 mois</li>
          <li>- Accès au réseau privé Oschool</li>
        </ul><br>
        {{ csrf_field() }}

        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_id">
            <option value="{{$temps}}">trans id</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_amount">
            <option value="72000">montant</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_currency">
            <option value="CFA">currency</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_site_id">
            <option value="113043">Id site</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_language">
            <option value="fr">language</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_version">
            <option value="V1">version</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_payment_config">
            <option value="SINGLE">payment config</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_page_action">
            <option value="PAYMENT">page action</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_trans_date">
            <option value="{{$time}}">trans date</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="apikey">
            <option value="134714631658c289ed716950.86091611">api key</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="signature">
            <option value="{{$signature}}">Signature</option>
          </select>
        </div>
        <div style="display: none;" class="form-group">
          <select class="" name="cpm_designation">
            <option value="Support Total">Désignation</option>
          </select>
        </div>
        @if(Session::has('date_coaching') && Session::has('formation') && Session::has('email') && Session::has('nom') && Session::has('prenoms') && Session::has('tel'))
        <div style="display: none;" class="form-group">
          <select class="" name="return_url">
            <option value="{{ url('achattotal') }}">url retour</option>
          </select>
        </div>
        @endif
        <div style="display: none;" class="form-group">
          <select class="" name="cancel_url">
            <option value="https://support.oschool.ci">url cancel</option>
          </select>
        </div>
        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Confirmer la souscription
          </button>
        </div>


        <div class="text-center p-t-136">
          <a class="txt2" href="/">
            Allez à la page d'accueil
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



@endsection
