<?php

namespace KakaoPay\Entities;

class Page
{
    private $current_page;
    private $total_pages;
    private $current_size;
    private $total_size;
    private $first;
    private $last;

    /**
     * @return mixed
     */
    public function getCurrentPage()
    {
        return $this->current_page;
    }

    /**
     * @param mixed $current_page
     * @return Page
     */
    public function setCurrentPage($current_page): Page
    {
        $this->current_page = $current_page;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalPages()
    {
        return $this->total_pages;
    }

    /**
     * @param mixed $total_pages
     * @return Page
     */
    public function setTotalPages($total_pages): Page
    {
        $this->total_pages = $total_pages;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrentSize()
    {
        return $this->current_size;
    }

    /**
     * @param mixed $current_size
     * @return Page
     */
    public function setCurrentSize($current_size): Page
    {
        $this->current_size = $current_size;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * @param mixed $total_size
     * @return Page
     */
    public function setTotalSize($total_size): Page
    {
        $this->total_size = $total_size;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param mixed $first
     * @return Page
     */
    public function setFirst($first): Page
    {
        $this->first = $first;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param mixed $last
     * @return Page
     */
    public function setLast($last): Page
    {
        $this->last = $last;
        return $this;
    }
}