<?php
/**
 * Created by PhpStorm.
 * User: Hansen
 * Date: 01/01/2018
 * Time: 23.34
 */
namespace App\Soap\Response;


class GetConversionAmountResponse
{
    /**
     * @var string
     */
    protected $GetConversionAmountResult;

    /**
     * GetConversionAmountResponse constructor.
     *
     * @param string
     */
    public function __construct($GetConversionAmountResult)
    {
        $this->GetConversionAmountResult = $GetConversionAmountResult;
    }

    /**
     * @return string
     */
    public function getGetConversionAmountResult()
    {
        return $this->GetConversionAmountResult;
    }
}