<?php

namespace StubNamespace\Feature\Concerns;

trait GithubInteractions
{
	public function hasGitPrefix(): bool
	{
		return str_starts_with($this->path, 'git:');
	}

    public function handleGitInteraction(): bool
    {
		if ($this->path != $this->hasGitPrefix()) {
			return false;
		}

		// TODO: Implement git interaction by path after git: prefix and translate it to the proper github url

		return true;
    }

	public function getGitClient()
	{
		return $this->client;
	}
}
