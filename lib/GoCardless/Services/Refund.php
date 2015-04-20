<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;

/**
  *  Refunds
  *
  * @method \GoCardless\Core\ListResponse list() list(array $options = array(), array $headers = array()) gets a non-paginated list of models given finder options.
  *
  *  Refund objects represent (partial) refunds of a
  *  [payment](https://developer.gocardless.com/pro/#api-endpoints-payment) back
  *  to the
  *  [customer](https://developer.gocardless.com/pro/#api-endpoints-customers).

  *   *  
  *  The API allows you to create, show, list and update your
  *  refunds.
  *  
  *  GoCardless will notify you via a
  *  [webhook](https://developer.gocardless.com/pro/#webhooks) whenever a refund
  *  is created.
  *  
  *  _Note:_ A payment that has been (partially) refunded
  *  can still receive a late failure or chargeback from the banks.
  */
class Refund extends Base
{
  
  /**
    *  Create a refund
    *
    *  Creates a new refund object.
    *  
    *  This fails with:<a
    *  name="refund_payment_invalid_state"></a><a
    *  name="total_amount_confirmation_invalid"></a>
    *  
    *  -
    *  `refund_payment_invalid_state` error if the linked
    *  [payment](https://developer.gocardless.com/pro/#api-endpoints-payments)
    *  isn't either `confirmed` or `paid_out`.
    *  
    *  -
    *  `total_amount_confirmation_invalid` if the confirmation amount doesn't
    *  match the total amount refunded for the payment. This safeguard is there
    *  to prevent two processes from creating refunds without awareness of each
    *  other.
    *  
    *
    *  Example URL: /refunds
    *
    *
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return Refund
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function create($params = array(), $headers = array())
    {
        return $this->make_request('post', '/refunds', $params);
    }

  /**
    *  List refunds
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your refunds.
    *
    *  Example URL: /refunds
    *
    *
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return \GoCardless\Core\ListResponse
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function do_list($params = array(), $headers = array())
    {
        return $this->make_request('get', '/refunds', $params);
    }

  /**
    *  Get a single refund
    *
    *  Retrieves all details for a single refund
    *
    *  Example URL: /refunds/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "RF"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return Refund
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function get($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/refunds/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('get', $path, $params, $headers);
    }

  /**
    *  Update a refund
    *
    *  Updates a refund object.
    *
    *  Example URL: /refunds/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "RF"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return Refund
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function update($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/refunds/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('put', $path, $params, $headers);
    }



  /**
    *  List refunds
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/#overview-cursor-pagination)
    *  list of your refunds.
    *
    * Example URL: /refunds
    *
    * @param int $list_max The maximum number of records to return while paginating.
    * @param string[mixed] $params POST/URL parameters for the argument. Automatically wrapped.
    * @param string[string] $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return \GoCardless\Core\Paginator
    **/
    public function all($list_max, $params = array(), $headers = array())
    {
        return new \GoCardless\Core\Paginator($this, $list_max, $this->do_list($params), $params, $headers);
    }


   /**
    * Get the resource loading class.
    * Used internally to send http requests.
    *
    * @return string
    */
    protected function resourceClass()
    {
        return '\GoCardless\Resources\Refund';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'refunds';
    }
}
