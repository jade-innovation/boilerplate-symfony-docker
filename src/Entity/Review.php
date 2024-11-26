<?php
// api/src/Entity/Review.php
namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Uid\Uuid;

/** A review of a book. */
#[ApiResource]
class Review
{
    /**
     * @var Uuid
     */
    #[ApiProperty(identifier: true)]
    private Uuid $id;

    /** The rating of this review (between 0 and 5). */
    public int $rating = 0;

    /** The body of the review. */
    public string $body = '';

    /** The author of the review. */
    public string $author = '';

    /** The date of publication of this review.*/
    public ?\DateTimeImmutable $publicationDate = null;

    /** The book this review is about. */
    public ?Book $book = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
