<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecipeRepository::class)
 */
class Recipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $areaCategory;

    /**
     * @ORM\Column(type="text")
     */
    private $instructions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageContent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ytLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tags;

    /**
     * @ORM\Column(type="text")
     */
    private $ingredientsMesures;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAreaCategory(): ?string
    {
        return $this->areaCategory;
    }

    public function setAreaCategory(string $areaCategory): self
    {
        $this->areaCategory = $areaCategory;

        return $this;
    }

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function setInstructions(string $instructions): self
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function getImageContent(): ?string
    {
        return $this->imageContent;
    }

    public function setImageContent(string $imageContent): self
    {
        $this->imageContent = $imageContent;

        return $this;
    }

    public function getYtLink(): ?string
    {
        return $this->ytLink;
    }

    public function setYtLink(?string $ytLink): self
    {
        $this->ytLink = $ytLink;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getIngredientsMesures(): ?string
    {
        return $this->ingredientsMesures;
    }

    public function setIngredientsMesures(string $ingredientsMesures): self
    {
        $this->ingredientsMesures = $ingredientsMesures;

        return $this;
    }
}
