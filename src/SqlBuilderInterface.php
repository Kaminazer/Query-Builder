<?php

namespace Builder;

interface SqlBuilderInterface extends BuilderInterface
{
    /**
     * @return string
     */
    public function getSql(): string;
}