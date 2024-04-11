<?php
/**
 * ReportApi
 * PHP version 5
 *
 * @category Class
 * @package  WebnessStudio\MPL
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MPL API
 *
 * <div style='width: 100%;margin: 0px auto;'>      <div style='float: left; width:47%'>          <h1>MPL API</h1>          <h2> - címiratok nyomtatása, riportok lekérése, fixpontok lekérdezése </h2>          <div>&nbsp;</div>          <p>A végpontok működését leíró dokumentációt lentebb találja.</p>          <p>A fejlesztéshez szükséges további információkat, így az integrációs javaslatot, technikai leírást (token kérés), példa json-öket, stb., a fenti Dokumentáció menüre kattintva érheti el.</p>          <p>A lentebbi dokumentációban a</p>          <ul>              <li>csak belföldi alapszolgáltatáshoz használható elemeket a leírás elején szereplő ►DOM◄,</li>              <li>csak nemzetközi vonatkozásban használható elemeket a leírás elején szereplő ►INT◄</li>          </ul>          <p>szöveg jelzi.</p>          <p>Ahol nem szerepel semmilyen jelölés, azok az elemek mindkét vonatkozásban használhatók.</p>      </div>      <div style='float:right; width:47%'>          <h1>MPL API</h1>          <h2> - query of fixed points, printing of address labels, request for reports </h2>          <div>&nbsp;</div>          <p>Specification describing the operation of endpoints can be found below.</p>          <p>Any further information necessary for the development, such as the integration suggestion, technical description (token request), example JSONs, etc., are available by clicking on the Documentation menu above.</p>          <p>In the specification below,</p>          <ul>              <li>the elements that may be used only for domestic basic service are indicated by the lettering ►DOM◄,</li>              <li>the elements that may be used only in international regard are indicated by the lettering ►INT◄</li>          </ul>          <p>at the beginning of the description.</p>          <p>Where no indication is provided, those elements can be used in both cases.</p>      </div>  </div>  <div id=\"mplapi_descriptionContainer_bottom\"></div><div style='clear: both;'>    ### Az API a következő URL-eken érhető el: / This API can be accessed at the following URLs: ###  <div><table><tr><td><b>Környezet / Environment</b></td><td><b>API URL</b></td><td><b>OAuth2 Token URL</b></td></tr><tr><td>Sandbox</td><td>https://sandbox.api.posta.hu/v2/mplapi</td><td>https://sandbox.api.posta.hu/oauth2/token</td></tr><tr><td>Production</td><td>https://core.api.posta.hu/v2/mplapi</td><td>https://core.api.posta.hu/oauth2/token</td></tr></table>  Az API ezen az oldalon a Sandbox környezetben tesztelhető. / You can test the API on this page in the Sandbox environment.
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WebnessStudio\MPL\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use WebnessStudio\MPL\ApiException;
use WebnessStudio\MPL\Configuration;
use WebnessStudio\MPL\HeaderSelector;
use WebnessStudio\MPL\ObjectSerializer;

/**
 * ReportApi Class Doc Comment
 *
 * @category Class
 * @package  WebnessStudio\MPL
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation reportsPost
     *
     * Felvett csomagokról készült riportok lekérése.   /   Reports on dispatched packages.
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  \WebnessStudio\MPL\Model\ReportsQueryRequest $body body (optional)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     *
     * @throws \WebnessStudio\MPL\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \WebnessStudio\MPL\Model\ReportsQueryResult
     */
    public function reportsPost($x_request_id, $x_accounting_code, $body = null, $x_correlation_id = null)
    {
        list($response) = $this->reportsPostWithHttpInfo($x_request_id, $x_accounting_code, $body, $x_correlation_id);
        return $response;
    }

    /**
     * Operation reportsPostWithHttpInfo
     *
     * Felvett csomagokról készült riportok lekérése.   /   Reports on dispatched packages.
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  \WebnessStudio\MPL\Model\ReportsQueryRequest $body (optional)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     *
     * @throws \WebnessStudio\MPL\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \WebnessStudio\MPL\Model\ReportsQueryResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportsPostWithHttpInfo($x_request_id, $x_accounting_code, $body = null, $x_correlation_id = null)
    {
        $returnType = '\WebnessStudio\MPL\Model\ReportsQueryResult';
        $request = $this->reportsPostRequest($x_request_id, $x_accounting_code, $body, $x_correlation_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
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
                        '\WebnessStudio\MPL\Model\ReportsQueryResult',
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
     * Operation reportsPostAsync
     *
     * Felvett csomagokról készült riportok lekérése.   /   Reports on dispatched packages.
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  \WebnessStudio\MPL\Model\ReportsQueryRequest $body (optional)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportsPostAsync($x_request_id, $x_accounting_code, $body = null, $x_correlation_id = null)
    {
        return $this->reportsPostAsyncWithHttpInfo($x_request_id, $x_accounting_code, $body, $x_correlation_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportsPostAsyncWithHttpInfo
     *
     * Felvett csomagokról készült riportok lekérése.   /   Reports on dispatched packages.
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  \WebnessStudio\MPL\Model\ReportsQueryRequest $body (optional)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportsPostAsyncWithHttpInfo($x_request_id, $x_accounting_code, $body = null, $x_correlation_id = null)
    {
        $returnType = '\WebnessStudio\MPL\Model\ReportsQueryResult';
        $request = $this->reportsPostRequest($x_request_id, $x_accounting_code, $body, $x_correlation_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportsPost'
     *
     * @param  string $x_request_id A kérés egyedi azonosítója (UUID formátumban)   /   The unique request ID (UUID format) (required)
     * @param  string $x_accounting_code Vevőkód   /   The accounting code (required)
     * @param  \WebnessStudio\MPL\Model\ReportsQueryRequest $body (optional)
     * @param  string $x_correlation_id Korrelációs azonosító (UUID formátumban)   /   The request correlation ID (UUID format) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function reportsPostRequest($x_request_id, $x_accounting_code, $body = null, $x_correlation_id = null)
    {
        // verify the required parameter 'x_request_id' is set
        if ($x_request_id === null || (is_array($x_request_id) && count($x_request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_request_id when calling reportsPost'
            );
        }
        // verify the required parameter 'x_accounting_code' is set
        if ($x_accounting_code === null || (is_array($x_accounting_code) && count($x_accounting_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_accounting_code when calling reportsPost'
            );
        }

        $resourcePath = '/reports';
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


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
