<?php

namespace App\Http\Controllers;

use App\SupportOnline;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Session;

class SupportOnlineController extends Controller
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
        $params = array('cpm_amount' => '26000',
                        'cpm_currency' => 'CFA',
                        'cpm_site_id' => '113043',
                        'cpm_trans_id' => $temps,
                        'cpm_trans_date' => $time,
                        'cpm_payment_config' => 'SINGLE',
                        'cpm_page_action' => 'PAYMENT',
                        'cpm_version' => 'V1',
                        'cpm_language' => 'fr',
                        'cpm_designation' => 'Support Online',
                        'apikey' => '134714631658c289ed716950.86091611',
                        );
        $url = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
        //Appel de fonction postData()
        $resultat = postData($params, $url) ;
        $signature = json_decode($resultat, true);

        return view('supportOnlines.create',['signature' => str_replace('"',"",$resultat),
                                     'temps' => $temps,
                                     'time' => $time,
                                   ]);

    }

    public function achat()
    {
      $supportOnline=SupportOnline::create([
                        'date_coaching' => Session::get('date_coaching'),
                        'formation' => Session::get('formation'),
                        'email' => Session::get('email'),
                        'nom' => Session::get('nom'),
                        'prenoms' => Session::get('prenoms'),
                        'tel' => Session::get('tel')
                      ]);

     //envpi mail utilisateur
      Mail::send('mailsOnline.mail', ['supportOnline' => $supportOnline], function($message) use ($supportOnline){
        $message->to($supportOnline->email, 'Cher(ère) Etudiant(e)')->subject('Votre support Online Oschool est activé');
        $message->from('support@oschool.ci', 'Oschool');
      });

      //envoi mail admin
      Mail::send('mailsOnline.mail-admin', ['supportOnline' => $supportOnline], function($message) use ($supportOnline){
        $message->to('david@oschool.ci', 'A David')->subject('Notification pour nouvel achat de support Online');
        $message->from('support@oschool.ci', 'Oschool');
      });
      return redirect('/')->with('status', 'Achat validé ! Votre supportOnline a été envoyé dans votre boîte de réception. Merci de la consulter.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SupportOnline  $supportOnline
     * @return \Illuminate\Http\Response
     */
    public function show(SupportOnline $supportOnline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SupportOnline  $supportOnline
     * @return \Illuminate\Http\Response
     */
    public function edit(SupportOnline $supportOnline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SupportOnline  $supportOnline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupportOnline $supportOnline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SupportOnline  $supportOnline
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupportOnline $supportOnline)
    {
        //
    }
}
