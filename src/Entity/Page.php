<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageRepository")
 */
class Page
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Template", inversedBy="pages")
     */
    private $templates;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $metaDescription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $metaAuthor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getTemplates(): ?Template
    {
        return $this->templates;
    }

    public function setTemplates(?Template $templates): self
    {
        $this->templates = $templates;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function getMetaAuthor(): ?string
    {
        return $this->metaAuthor;
    }

    public function setMetaAuthor(?string $metaAuthor): self
    {
        $this->metaAuthor = $metaAuthor;

        return $this;
    }
}
