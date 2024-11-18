<?php

namespace StubNamespace\Feature;

class StubService implements StubContract
{
	use GithubInteractions;

    /**
     * @var array<string, string>
     */
    protected $examples = [];

    /**
     * Load a stub file from the given path.
     *
     * @param string $stubPath
     * @return self
     */
    public function load(string $stubPath): self
    {
        // TODO: Implement stub file loading logic
        return $this;
    }

    /**
     * Register a single example placeholder and its replacement.
     *
     * @param string $placeholder
     * @param string $example
     * @return self
     */
    public function registerExample(string $placeholder, string $example): self
    {
        $this->examples[$placeholder] = $example;
        return $this;
    }

    /**
     * Register multiple example placeholders and their replacements.
     *
     * @param array<string, string> $examples
     * @return self
     */
    public function registerExamples(array $examples): self
    {
        foreach ($examples as $placeholder => $example) {
            $this->registerExample($placeholder, $example);
        }
        return $this;
    }

    /**
     * Get all registered examples.
     *
     * @return array<string, string>
     */
    public function getExamples(): array
    {
        return $this->examples;
    }
}
