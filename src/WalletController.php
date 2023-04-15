<?php

namespace ItsMeLePassos\CafeApi;

use ItsMeLePassos\CafeApi\API\CafeApiController;

class WalletController extends CafeApiController
{
    /**
     * Wallets constructor.
     * @param string $apiUrl
     * @param string $email
     * @param string $password
     */
    public function __construct(string $apiUrl, string $email, string $password)
    {
        parent::__construct($apiUrl, $email, $password);
    }

    /**
     * @param array|null $headers
     * @return WalletController
     */
    public function index(?array $headers): WalletController
    {
        $this->request(
            "GET",
            "/wallets",
            null,
            $headers
        );

        return $this;
    }

    /**
     * @param array $fields
     * @return WalletController
     */
    public function create(array $fields): WalletController
    {
        $this->request(
            "POST",
            "/wallets",
            $fields
        );

        return $this;
    }

    /**
     * @param int $walletId
     * @return WalletController
     */
    public function read(int $walletId): WalletController
    {
        $this->request(
            "GET",
            "/wallets/{$walletId}"
        );

        return $this;
    }

    /**
     * @param int $walletId
     * @param array $fields
     * @return WalletController
     */
    public function update(int $walletId, array $fields): WalletController
    {
        $this->request(
            "PUT",
            "/wallets/{$walletId}",
            $fields
        );

        return $this;
    }

    /**
     * @param int $walletId
     * @return WalletController
     */
    public function delete(int $walletId): WalletController
    {
        $this->request(
            "DELETE",
            "/wallets/{$walletId}"
        );

        return $this;
    }
}
