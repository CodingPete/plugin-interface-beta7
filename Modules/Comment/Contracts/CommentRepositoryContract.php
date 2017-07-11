<?php
namespace Plenty\Modules\Comment\Contracts;

use Illuminate\Support\Collection;
use Plenty\Modules\Comment\Models\Comment;
use Plenty\Repositories\Contracts\FilterableContract;
use Plenty\Repositories\Criteria\Contracts\CriteriableContract;

/**
 * Get, create and delete comments.
 */
interface CommentRepositoryContract 
{

	/**
	 * Get a comment
	 */
	public function getComment(
		int $commentId
	):Comment;

	/**
	 * List comments
	 */
	public function listComments(
	):Collection;

	/**
	 * Create a comment
	 */
	public function createComment(
		array $data
	):Comment;

	/**
	 * Delete a comment
	 */
	public function deleteComment(
		int $commentId
	);

	/**
	 * Sets the filter array.
	 */
	public function setFilters(
		array $filters = []
	);

	/**
	 * Returns the filter array.
	 */
	public function getFilters(
	);

	/**
	 * Clears the filter array.
	 */
	public function clearFilters(
	);

}