<?php

namespace Fintecture\Api\Ais;

use Fintecture\Api\Api;
use Fintecture\Api\ApiResponse;
use Fintecture\Util\Http;

class Connect extends Api
{
    /**
     * Generate a Connect instance.
     *
     * @param string $redirectUri Redirect URI.
     * @param string $state State.
     * @param string $scope Scope.
     *
     * @return ApiResponse Generated connect.
     */
    public function generate(string $redirectUri, string $state, string $scope = null): ApiResponse
    {
        $params = Http::buildHttpQuery([
            'redirect_uri' => $redirectUri,
            'state' => $state,
            'scope' => $scope
        ]);
        $path = '/ais/v2/connect?' . $params;

        return $this->apiWrapper->get($path, null, 0);
    }
}
