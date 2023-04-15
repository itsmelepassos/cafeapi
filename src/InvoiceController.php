<?php

namespace ItsMeLePassos\CafeApi;

use ItsMeLePassos\CafeApi\API\CafeApiController;

class InvoiceController extends CafeApiController
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
     * @return InvoiceController
     */
    public function index(?array $headers): InvoiceController
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
     * @return InvoiceController
     */
    public function create(array $fields): InvoiceController
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
     * @return InvoiceController
     */
    public function read(int $invoiceId): InvoiceController
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
     * @return InvoiceController
     */
    public function update(int $invoiceId, array $fields): InvoiceController
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
     * @return InvoiceController
     */
    public function delete(int $invoiceId): InvoiceController
    {
        $this->request(
            "DELETE",
            "/invoices/{$invoiceId}"
        );

        return $this;
    }
}
