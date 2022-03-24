<?php

namespace ItsMeLePassos\CafeApi;

/**
 * Class Subscriptions
 * @package ItsMeLePassos\CafeApi
 */
class Subscriptions extends CafeApi
{

    /**
     * Subscriptions constructor.
     * @param string $apiUrl
     * @param string $email
     * @param string $password
     */
    public function __construct(string $apiUrl, string $email, string $password)
    {
        parent::__construct($apiUrl, $email, $password);
    }

    /**
     * @return Subscriptions
     */
    final public function index(): Subscriptions
    {
        $this->request(
            "GET",
            "/subscription"
        );

        return $this;
    }

    /**
     * @param array $fields
     * @return Subscriptions
     */
    final public function create(array $fields): Subscriptions
    {
        $this->request(
            "POST",
            "/subscription",
            $fields
        );

        return $this;
    }

    /**
     * @return Subscriptions
     */
    final public function read(): Subscriptions
    {
        $this->request(
            "GET",
            "/subscription/plans"
        );

        return $this;
    }

    /**
     * @param array $fields
     * @return Subscriptions
     */
    final public function update(array $fields): Subscriptions
    {
        $this->request(
            "PUT",
            "/subscription",
            $fields
        );

        return $this;
    }
}