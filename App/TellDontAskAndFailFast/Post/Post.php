<?php

namespace App\TellDontAskAndFailFast\Post;

use App\TellDontAskAndFailFast\Exception\PostAlreadyPublishedException;

class Post
{
	public $status = Status::DRAFT;

	public function publish()
	{
		if ($this->status === Status::DRAFT) {
			$this->status = Status::PUBLISHED;
		} else {
			throw new PostAlreadyPublishedException("POST_ALREADY_PUBLISHED");
		}
	}
}