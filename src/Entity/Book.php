<?php
// api/src/Entity/Book.php
namespace App\Entity;

use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Uid\Uuid;

/** A book. */
#[ApiResource]
class Book
{
    /**
     * @var Uuid
     */
    #[ApiProperty(identifier: true)]
    private Uuid $id;

    /** The ISBN of this book (or null if doesn't have one). */
    public ?string $isbn = null;

    /** The title of this book. */
    public string $title = '';

    /** The description of this book. */
    public string $description = '';

    /** The author of this book. */
    public string $author = '';

    /** The publication date of this book. */
    public ?\DateTimeImmutable $publicationDate = null;

    /** @var Review[] Available reviews for this book. */
    public iterable $reviews;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
