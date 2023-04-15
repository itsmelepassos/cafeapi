<?php

namespace ItsMeLePassos\CafeApi;

use ItsMeLePassos\CafeApi\API\CafeApiController;

class SubscriptionController extends CafeApiController
{
    /**
     * SubscriptionController constructor.
     * @param string $apiUrl
     * @param string $email
     * @param string $password
     */
    public function __construct(string $apiUrl, string $email, string $password)
    {
        parent::__construct($apiUrl, $email, $password);
    }

    /**
     * @return SubscriptionController
     */
    public function index(): SubscriptionController
    {
        $this->request(
            "GET",
            "/subscription"
        );

        return $this;
    }

    /**
     * @param array $fields
     * @return SubscriptionController
     */
    public function create(array $fields): SubscriptionController
    {
        $this->request(
            "POST",
            "/subscription",
            $fields
        );

        return $this;
    }

    /**
     * @return SubscriptionController
     */
    public function read(): SubscriptionController
    {
        $this->request(
            "GET",
            "/subscription/plans"
        );

        return $this;
    }

    /**
     * @param array $fields
     * @return SubscriptionController
     */
    public function update(array $fields): SubscriptionController
    {
        $this->request(
            "PUT",
            "/subscription",
            $fields
        );

        return $this;
    }
}
