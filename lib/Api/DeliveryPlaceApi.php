<?php
/**
 * DeliveryPlaceApi
 * PHP version 7.4
 *
 * @category Class
 * @package  WebnessStudio\MPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MPL API
 *
 * <div style='width: 100%;margin: 0px auto;'>      <div style='float: left; width:47%'>          <h1>MPL API</h1>          <h2> - címiratok nyomtatása, riportok lekérése, fixpontok lekérdezése </h2>          <div>&nbsp;</div>          <p>A végpontok működését leíró dokumentációt lentebb találja.</p>          <p>A fejlesztéshez szükséges további információkat, így az integrációs javaslatot, technikai leírást (token kérés), példa json-öket, stb., a fenti Dokumentáció menüre kattintva érheti el.</p>          <p>A lentebbi dokumentációban a</p>          <ul>              <li>csak belföldi alapszolgáltatáshoz használható elemeket a leírás elején szereplő ►DOM◄,</li>              <li>csak nemzetközi vonatkozásban használható elemeket a leírás elején szereplő ►INT◄</li>          </ul>          <p>szöveg jelzi.</p>          <p>Ahol nem szerepel semmilyen jelölés, azok az elemek mindkét vonatkozásban használhatók.</p>      </div>      <div style='float:right; width:47%'>          <h1>MPL API</h1>          <h2> - query of fixed points, printing of address labels, request for reports </h2>          <div>&nbsp;</div>          <p>Specification describing the operation of endpoints can be found below.</p>          <p>Any further information necessary for the development, such as the integration suggestion, technical description (token request), example JSONs, etc., are available by clicking on the Documentation menu above.</p>          <p>In the specification below,</p>          <ul>              <li>the elements that may be used only for domestic basic service are indicated by the lettering ►DOM◄,</li>              <li>the elements that may be used only in international regard are indicated by the lettering ►INT◄</li>          </ul>          <p>at the beginning of the description.</p>          <p>Where no indication is provided, those elements can be used in both cases.</p>      </div>  </div>  <div id=\"mplapi_descriptionContainer_bottom\"></div><div style='clear: both;'>    ### Az API a következő URL-eken érhető el: / This API can be accessed at the following URLs: ###  <div><table><tr><td><b>Környezet / Environment</b></td><td><b>API URL</b></td><td><b>OAuth2 Token URL</b></td></tr><tr><td>Sandbox</td><td>https://sandbox.api.posta.hu/v2/mplapi</td><td>https://sandbox.api.posta.hu/oauth2/token</td></tr><tr><td>Production</td><td>https://core.api.posta.hu/v2/mplapi</td><td>https://core.api.posta.hu/oauth2/token</td></tr></table>  Az API ezen az oldalon a Sandbox környezetben tesztelhető. / You can test the API on this page in the Sandbox environment.
 *
 * The version of the OpenAPI document: v2
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WebnessStudio\MPL\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use WebnessStudio\MPL\ApiException;
use WebnessStudio\MPL\Configuration;
use WebnessStudio\MPL\HeaderSelector;
use WebnessStudio\MPL\ObjectSerializer;

/**
 * DeliveryPlaceApi Class Doc Comment
 *
 * @category Class
 * @package  WebnessStudio\MPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DeliveryPlaceApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'deliveryplacePost' => [
            'application/json',
            'text/json',
            'application/*+json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deliveryplacePost
     *
     * ►DOM◄ Fixponti kézbesítési helyek lekérdezése   /   Query pick-up delivery locations
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     * @param  \WebnessStudio\MPL\Model\DeliveryPlaceRequest $delivery_place_request  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deliveryplacePost'] to see the possible values for this operation
     *
     * @throws \WebnessStudio\MPL\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \WebnessStudio\MPL\Model\DeliveryPlaceResult[]|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse
     */
    public function deliveryplacePost($x_request_id, $x_accounting_code, $x_correlation_id = null, $delivery_place_request = null, string $contentType = self::contentTypes['deliveryplacePost'][0])
    {
        list($response) = $this->deliveryplacePostWithHttpInfo($x_request_id, $x_accounting_code, $x_correlation_id, $delivery_place_request, $contentType);
        return $response;
    }

    /**
     * Operation deliveryplacePostWithHttpInfo
     *
     * ►DOM◄ Fixponti kézbesítési helyek lekérdezése   /   Query pick-up delivery locations
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     * @param  \WebnessStudio\MPL\Model\DeliveryPlaceRequest $delivery_place_request  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deliveryplacePost'] to see the possible values for this operation
     *
     * @throws \WebnessStudio\MPL\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \WebnessStudio\MPL\Model\DeliveryPlaceResult[]|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse|\WebnessStudio\MPL\Model\ApiGatewayErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deliveryplacePostWithHttpInfo($x_request_id, $x_accounting_code, $x_correlation_id = null, $delivery_place_request = null, string $contentType = self::contentTypes['deliveryplacePost'][0])
    {
        $request = $this->deliveryplacePostRequest($x_request_id, $x_accounting_code, $x_correlation_id, $delivery_place_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\WebnessStudio\MPL\Model\DeliveryPlaceResult[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebnessStudio\MPL\Model\DeliveryPlaceResult[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebnessStudio\MPL\Model\DeliveryPlaceResult[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WebnessStudio\MPL\Model\ApiGatewayErrorResponse' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\WebnessStudio\MPL\Model\DeliveryPlaceResult[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebnessStudio\MPL\Model\DeliveryPlaceResult[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WebnessStudio\MPL\Model\ApiGatewayErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deliveryplacePostAsync
     *
     * ►DOM◄ Fixponti kézbesítési helyek lekérdezése   /   Query pick-up delivery locations
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     * @param  \WebnessStudio\MPL\Model\DeliveryPlaceRequest $delivery_place_request  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deliveryplacePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deliveryplacePostAsync($x_request_id, $x_accounting_code, $x_correlation_id = null, $delivery_place_request = null, string $contentType = self::contentTypes['deliveryplacePost'][0])
    {
        return $this->deliveryplacePostAsyncWithHttpInfo($x_request_id, $x_accounting_code, $x_correlation_id, $delivery_place_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deliveryplacePostAsyncWithHttpInfo
     *
     * ►DOM◄ Fixponti kézbesítési helyek lekérdezése   /   Query pick-up delivery locations
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     * @param  \WebnessStudio\MPL\Model\DeliveryPlaceRequest $delivery_place_request  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deliveryplacePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deliveryplacePostAsyncWithHttpInfo($x_request_id, $x_accounting_code, $x_correlation_id = null, $delivery_place_request = null, string $contentType = self::contentTypes['deliveryplacePost'][0])
    {
        $returnType = '\WebnessStudio\MPL\Model\DeliveryPlaceResult[]';
        $request = $this->deliveryplacePostRequest($x_request_id, $x_accounting_code, $x_correlation_id, $delivery_place_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deliveryplacePost'
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     * @param  \WebnessStudio\MPL\Model\DeliveryPlaceRequest $delivery_place_request  (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deliveryplacePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deliveryplacePostRequest($x_request_id, $x_accounting_code, $x_correlation_id = null, $delivery_place_request = null, string $contentType = self::contentTypes['deliveryplacePost'][0])
    {

        // verify the required parameter 'x_request_id' is set
        if ($x_request_id === null || (is_array($x_request_id) && count($x_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_request_id when calling deliveryplacePost'
            );
        }

        // verify the required parameter 'x_accounting_code' is set
        if ($x_accounting_code === null || (is_array($x_accounting_code) && count($x_accounting_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_accounting_code when calling deliveryplacePost'
            );
        }




        $resourcePath = '/deliveryplace';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($x_request_id !== null) {
            $headerParams['X-Request-Id'] = ObjectSerializer::toHeaderValue($x_request_id);
        }
        // header params
        if ($x_correlation_id !== null) {
            $headerParams['X-Correlation-Id'] = ObjectSerializer::toHeaderValue($x_correlation_id);
        }
        // header params
        if ($x_accounting_code !== null) {
            $headerParams['X-Accounting-Code'] = ObjectSerializer::toHeaderValue($x_accounting_code);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($delivery_place_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($delivery_place_request));
            } else {
                $httpBody = $delivery_place_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
