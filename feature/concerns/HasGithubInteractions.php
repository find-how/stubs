<?php

namespace StubNamespace\Feature\Concerns;

interface HasGithubInteractions
{
	/**
	 * Should be used to handle the github file stub interaction
	 *
	 * @return string
	 */
	public function handleGithubFileStubInteraction(): string;

	/**
	 * Should be used to handle the github folder stub interaction
	 *
	 * @return string
	 */
	public function handleGithubFolderStubInteraction(): string;

	/**
	 * Should be used to handle the github multiple file stub interaction
	 *
	 * @return string
	 */
	public function handleGithubMultipleFileStubInteraction(): string;

	/**
	 * Should be used to check if the stub path should be handled as a github interaction
	 *
	 * @return bool
	 */
	public function shouldBeGitInteraction(): bool;

	/**
	 * Should be used to check if the stub path should be handled as a github file interaction
	 *
	 * @return bool
	 */
	public function shouldBeGithubFileStubInteraction(): bool;

	/**
	 * Should be used to check if the stub path should be handled as a github folder interaction
	 *
	 * @return bool
	 */
	public function shouldBeGithubFolderStubInteraction(): bool;

	/**
	 * Should be used to check if the stub path should be handled as a github multiple file interaction
	 *
	 * @return bool
	 */
	public function shouldBeGithubMultipleFileStubInteraction(): bool;

}
