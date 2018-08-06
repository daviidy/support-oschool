<?php

namespace App\Http\Controllers;

use App\SupportTotal;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Session;

class SupportTotalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Session::put('name', $request['nom']);
      Session::put('prenoms', $request['prenoms']);
      Session::put('formation', $request['formation']);
      Session::put('date_coaching', $request['date_coaching']);
      Session::put('email', $request['email']);
      Session::put('tel', $request['tel']);
      function postData($params, $url)
          {
           try {
           $curl = curl_init();
           $postfield = '';
           foreach ($params as $index => $value) {
           $postfield .= $index . '=' . $value . "&";
           }
           $postfield = substr($postfield, 0, -1);
           curl_setopt_array($curl, array(
           CURLOPT_URL => $url,
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => "",
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 45,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_CUSTOMREQUEST => "POST",
           CURLOPT_POSTFIELDS => $postfield,
           CURLOPT_SSL_VERIFYPEER => false,
           CURLOPT_HTTPHEADER => array(
           "cache-control: no-cache",
           "content-type: application/x-www-form-urlencoded",
           ),
           ));
           $response = curl_exec($curl);
           $err = curl_error($curl);
           curl_close($curl);
           if ($err) {
           throw new Exception("cURL Error #:" . $err);
           return $err;
           } else {
           return $response;
           }
           } catch (Exception $e) {
           throw new Exception($e);
           }
          }
          $time = Carbon::now();
          $temps = date("YmdHis");
        $params = array('cpm_amount' => '72000',
                        'cpm_currency' => 'CFA',
                        'cpm_site_id' => '113043',
                        'cpm_trans_id' => $temps,
                        'cpm_trans_date' => $time,
                        'cpm_payment_config' => 'SINGLE',
                        'cpm_page_action' => 'PAYMENT',
                        'cpm_version' => 'V1',
                        'cpm_language' => 'fr',
                        'cpm_designation' => 'Support Total',
                        'apikey' => '134714631658c289ed716950.86091611',
                        );
        $url = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
        //Appel de fonction postData()
        $resultat = postData($params, $url) ;
        $signature = json_decode($resultat, true);

        return view('supportTotals.create',['signature' => str_replace('"',"",$resultat),
                                     'temps' => $temps,
                                     'time' => $time,
                                   ]);
    }

    public function achat()
    {
      $supportTotal=SupportTotal::create([
                        'date_coaching' => Session::get('date_coaching'),
                        'formation' => Session::get('formation'),
                        'email' => Session::get('email'),
                        'nom' => Session::get('nom'),
                        'prenoms' => Session::get('prenoms'),
                        'tel' => Session::get('tel')
                      ]);

        //envoi mail utilisateur
      Mail::send('mailsTotal.mail', ['supportTotal' => $supportTotal], function($message) use ($supportTotal){
        $message->to($supportTotal->email, 'Cher(ère) Etudiant(e)')->subject('Votre support Total Oschool est activé');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });

      //envoi mail admin
      Mail::send('mailsTotal.mail-admin', ['supportTotal' => $supportTotal], function($message) use ($supportTotal){
        $message->to('david@oschool.ci', 'A David')->subject('Notification pour nouvel achat de support Total');
        $message->from('eventsoschool@gmail.com', 'Oschool');
      });
      return redirect('ticket')->with('status', 'Achat validé ! Votre supportTotal a été envoyé dans votre boîte de réception. Merci de la consulter.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupportTotal  $supportTotal
     * @return \Illuminate\Http\Response
     */
    public function show(SupportTotal $supportTotal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupportTotal  $supportTotal
     * @return \Illuminate\Http\Response
     */
    public function edit(SupportTotal $supportTotal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupportTotal  $supportTotal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupportTotal $supportTotal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupportTotal  $supportTotal
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupportTotal $supportTotal)
    {
        //
    }
}
