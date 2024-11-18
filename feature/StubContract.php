<?php

namespace StubNamespace\Feature;

interface StubContract
{
    public function load(string $stubPath): self;

    public function registerExample(string $placeholder, string $example): self;
}
