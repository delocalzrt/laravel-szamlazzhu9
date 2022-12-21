<?php


namespace redmenta\SzamlazzHu\Internal\Support;


use Illuminate\Validation\Rule;
use redmenta\SzamlazzHu\Invoice;

trait InvoiceValidationRules
{

    /**
     * @return array
     */
    public function validationRulesForDeletingProformaInvoice()
    {
        return [
            'invoiceNumber' => ['required', 'string'],
        ];
    }

    /**
     * @return array
     */
    public function validationRulesForCancellingInvoice()
    {
        return [
            // The invoice is electric
            'isElectronic'              => ['required', 'boolean'],
            'invoiceNumber'             => ['required', 'string'],

            /* ----------------------------------------------------------
             * Merchant fields
             * -------------------------------------------------------- */
            'merchantReplyEmailAddress' => ['email'],

            /* ----------------------------------------------------------
             * Customer fields
             * -------------------------------------------------------- */
            'customerEmail'             => ['email'],
        ];
    }

    /**
     * @return array
     */
    public function validationRulesForSavingInvoice()
    {
        return [];
    }

}
