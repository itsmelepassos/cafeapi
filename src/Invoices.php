<?php

namespace ItsMeLePassos\CafeApi;

/**
 * Class Invoices
 * @package ItsMeLePassos\CafeApi
 */
class Invoices extends CafeApi
{
    /**
     * Invoices constructor
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
     * @return Invoices
     */
    final public function index(?array $headers): Invoices
    {
        $this->request(
            "GET",
            "/invoices",
            null,
            $headers
        );

        return $this;
    }

    /**
     * @param array $fields
     * @return Invoices
     */
    final public function create(array $fields): Invoices
    {
        $this->request(
            "POST",
            "/invoices",
            $fields
        );

        return $this;
    }

    /**
     * @param int $invoiceId
     * @return Invoices
     */
    final public function read(int $invoiceId): Invoices
    {
        $this->request(
            "GET",
            "/invoices/{$invoiceId}"
        );

        return $this;
    }

    /**
     * @param int $invoiceId
     * @param array $fields
     * @return Invoices
     */
    final public function update(int $invoiceId, array $fields): Invoices
    {
        $this->request(
            "PUT",
            "/invoices/{$invoiceId}",
            $fields
        );

        return $this;
    }

    /**
     * @param int $invoiceId
     * @return Invoices
     */
    final public function delete(int $invoiceId): Invoices
    {
        $this->request(
            "DELETE",
            "/invoices/{$invoiceId}"
        );

        return $this;
    }
}