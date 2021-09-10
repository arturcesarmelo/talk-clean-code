<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\TellDontAskAndFailFast\Post\Post;
use App\TellDontAskAndFailFast\Post\Status;

class PostTest extends TestCase
{
	public function testPublish()
	{
		$post = new Post();
		$post->publish();

		self::assertTrue($post->status === Status::PUBLISHED);
	}
}