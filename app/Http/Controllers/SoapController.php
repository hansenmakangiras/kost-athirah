<?php
/**
 * Created by PhpStorm.
 * User: Hansen
 * Date: 01/01/2018
 * Time: 23.20
 */

namespace App\Http\Controllers;

use App\Soap\Request\GetConversionAmount;
use App\Soap\Response\GetConversionAmountResponse;
use Artisaninweb\SoapWrapper\SoapWrapper;

class SoapController extends Controller
{
    /**
     * @var SoapWrapper
     */
    protected $soapWrapper;

    /**
     * SoapController constructor.
     *
     * @param SoapWrapper $soapWrapper
     */
    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
    }

    /**
     * Use the SoapWrapper
     * @throws $soapWrapper
     */
    public function show()
    {
        $this->soapWrapper->add('Currency', function ($service) {
            $service
                ->wsdl('http://currencyconverter.kowabunga.net/converter.asmx?WSDL')
                ->trace(true)
                ->classmap([
                    GetConversionAmount::class,
                    GetConversionAmountResponse::class,
                ]);
        });

        // Without classmap
        $response = $this->soapWrapper->call('Currency.GetConversionAmount', [
            'CurrencyFrom' => 'USD',
            'CurrencyTo'   => 'EUR',
            'RateDate'     => '2014-06-05',
            'Amount'       => '1000',
        ]);

        d($response);

        // With classmap
        $response = $this->soapWrapper->call('Currency.GetConversionAmount', [
            new GetConversionAmount('USD', 'EUR', '2014-06-05', '1000')
        ]);

        d($response);
        exit;
    }

    public function sendService(){
        /*$this->soapWrapper->add('Currency', function ($service) {
            $service
                ->wsdl()                 // The WSDL url
                ->trace(true)            // Optional: (parameter: true/false)
                ->header()               // Optional: (parameters: $namespace,$name,$data,$mustunderstand,$actor)
                ->customHeader()         // Optional: (parameters: $customerHeader) Use this to add a custom SoapHeader or extended class
                ->cookie()               // Optional: (parameters: $name,$value)
                ->location()             // Optional: (parameter: $location)
                ->certificate()          // Optional: (parameter: $certLocation)
                ->cache(WSDL_CACHE_NONE) // Optional: Set the WSDL cache

                // Optional: Set some extra options
                ->options([
                    'login' => 'username',
                    'password' => 'password'
                ])

                // Optional: Classmap
                ->classmap([
                    GetConversionAmount::class,
                    GetConversionAmountResponse::class,
                ]);
        });*/
    }
}