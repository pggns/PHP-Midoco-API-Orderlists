<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceVatPositionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InvoiceVatPositionDTO extends AbstractStructBase
{
    /**
     * The bookvat
     * @var bool|null
     */
    protected ?bool $bookvat = null;
    /**
     * The commenttext
     * @var string|null
     */
    protected ?string $commenttext = null;
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The isOwn
     * @var bool|null
     */
    protected ?bool $isOwn = null;
    /**
     * The isVoidPosition
     * @var bool|null
     */
    protected ?bool $isVoidPosition = null;
    /**
     * The isVoided
     * @var bool|null
     */
    protected ?bool $isVoided = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The originalVatAmount
     * @var float|null
     */
    protected ?float $originalVatAmount = null;
    /**
     * The originalVatBase
     * @var float|null
     */
    protected ?float $originalVatBase = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The vatAddress
     * @var string|null
     */
    protected ?string $vatAddress = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatBase
     * @var float|null
     */
    protected ?float $vatBase = null;
    /**
     * The vatDescription
     * @var string|null
     */
    protected ?string $vatDescription = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for InvoiceVatPositionDTO
     * @uses InvoiceVatPositionDTO::setBookvat()
     * @uses InvoiceVatPositionDTO::setCommenttext()
     * @uses InvoiceVatPositionDTO::setInvoiceId()
     * @uses InvoiceVatPositionDTO::setIsOwn()
     * @uses InvoiceVatPositionDTO::setIsVoidPosition()
     * @uses InvoiceVatPositionDTO::setIsVoided()
     * @uses InvoiceVatPositionDTO::setItemId()
     * @uses InvoiceVatPositionDTO::setOriginalCurrency()
     * @uses InvoiceVatPositionDTO::setOriginalVatAmount()
     * @uses InvoiceVatPositionDTO::setOriginalVatBase()
     * @uses InvoiceVatPositionDTO::setPosition()
     * @uses InvoiceVatPositionDTO::setVatAddress()
     * @uses InvoiceVatPositionDTO::setVatAmount()
     * @uses InvoiceVatPositionDTO::setVatBase()
     * @uses InvoiceVatPositionDTO::setVatDescription()
     * @uses InvoiceVatPositionDTO::setVatId()
     * @uses InvoiceVatPositionDTO::setVatPercent()
     * @param bool $bookvat
     * @param string $commenttext
     * @param int $invoiceId
     * @param bool $isOwn
     * @param bool $isVoidPosition
     * @param bool $isVoided
     * @param int $itemId
     * @param string $originalCurrency
     * @param float $originalVatAmount
     * @param float $originalVatBase
     * @param int $position
     * @param string $vatAddress
     * @param float $vatAmount
     * @param float $vatBase
     * @param string $vatDescription
     * @param string $vatId
     * @param float $vatPercent
     */
    public function __construct(?bool $bookvat = null, ?string $commenttext = null, ?int $invoiceId = null, ?bool $isOwn = null, ?bool $isVoidPosition = null, ?bool $isVoided = null, ?int $itemId = null, ?string $originalCurrency = null, ?float $originalVatAmount = null, ?float $originalVatBase = null, ?int $position = null, ?string $vatAddress = null, ?float $vatAmount = null, ?float $vatBase = null, ?string $vatDescription = null, ?string $vatId = null, ?float $vatPercent = null)
    {
        $this
            ->setBookvat($bookvat)
            ->setCommenttext($commenttext)
            ->setInvoiceId($invoiceId)
            ->setIsOwn($isOwn)
            ->setIsVoidPosition($isVoidPosition)
            ->setIsVoided($isVoided)
            ->setItemId($itemId)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalVatAmount($originalVatAmount)
            ->setOriginalVatBase($originalVatBase)
            ->setPosition($position)
            ->setVatAddress($vatAddress)
            ->setVatAmount($vatAmount)
            ->setVatBase($vatBase)
            ->setVatDescription($vatDescription)
            ->setVatId($vatId)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get bookvat value
     * @return bool|null
     */
    public function getBookvat(): ?bool
    {
        return $this->bookvat;
    }
    /**
     * Set bookvat value
     * @param bool $bookvat
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setBookvat(?bool $bookvat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookvat) && !is_bool($bookvat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookvat, true), gettype($bookvat)), __LINE__);
        }
        $this->bookvat = $bookvat;
        
        return $this;
    }
    /**
     * Get commenttext value
     * @return string|null
     */
    public function getCommenttext(): ?string
    {
        return $this->commenttext;
    }
    /**
     * Set commenttext value
     * @param string $commenttext
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setCommenttext(?string $commenttext = null): self
    {
        // validation for constraint: string
        if (!is_null($commenttext) && !is_string($commenttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commenttext, true), gettype($commenttext)), __LINE__);
        }
        $this->commenttext = $commenttext;
        
        return $this;
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get isOwn value
     * @return bool|null
     */
    public function getIsOwn(): ?bool
    {
        return $this->isOwn;
    }
    /**
     * Set isOwn value
     * @param bool $isOwn
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setIsOwn(?bool $isOwn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOwn) && !is_bool($isOwn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwn, true), gettype($isOwn)), __LINE__);
        }
        $this->isOwn = $isOwn;
        
        return $this;
    }
    /**
     * Get isVoidPosition value
     * @return bool|null
     */
    public function getIsVoidPosition(): ?bool
    {
        return $this->isVoidPosition;
    }
    /**
     * Set isVoidPosition value
     * @param bool $isVoidPosition
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setIsVoidPosition(?bool $isVoidPosition = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoidPosition) && !is_bool($isVoidPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoidPosition, true), gettype($isVoidPosition)), __LINE__);
        }
        $this->isVoidPosition = $isVoidPosition;
        
        return $this;
    }
    /**
     * Get isVoided value
     * @return bool|null
     */
    public function getIsVoided(): ?bool
    {
        return $this->isVoided;
    }
    /**
     * Set isVoided value
     * @param bool $isVoided
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setIsVoided(?bool $isVoided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoided) && !is_bool($isVoided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoided, true), gettype($isVoided)), __LINE__);
        }
        $this->isVoided = $isVoided;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get originalVatAmount value
     * @return float|null
     */
    public function getOriginalVatAmount(): ?float
    {
        return $this->originalVatAmount;
    }
    /**
     * Set originalVatAmount value
     * @param float $originalVatAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setOriginalVatAmount(?float $originalVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalVatAmount) && !(is_float($originalVatAmount) || is_numeric($originalVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalVatAmount, true), gettype($originalVatAmount)), __LINE__);
        }
        $this->originalVatAmount = $originalVatAmount;
        
        return $this;
    }
    /**
     * Get originalVatBase value
     * @return float|null
     */
    public function getOriginalVatBase(): ?float
    {
        return $this->originalVatBase;
    }
    /**
     * Set originalVatBase value
     * @param float $originalVatBase
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setOriginalVatBase(?float $originalVatBase = null): self
    {
        // validation for constraint: float
        if (!is_null($originalVatBase) && !(is_float($originalVatBase) || is_numeric($originalVatBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalVatBase, true), gettype($originalVatBase)), __LINE__);
        }
        $this->originalVatBase = $originalVatBase;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get vatAddress value
     * @return string|null
     */
    public function getVatAddress(): ?string
    {
        return $this->vatAddress;
    }
    /**
     * Set vatAddress value
     * @param string $vatAddress
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setVatAddress(?string $vatAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($vatAddress) && !is_string($vatAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatAddress, true), gettype($vatAddress)), __LINE__);
        }
        $this->vatAddress = $vatAddress;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatBase value
     * @return float|null
     */
    public function getVatBase(): ?float
    {
        return $this->vatBase;
    }
    /**
     * Set vatBase value
     * @param float $vatBase
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setVatBase(?float $vatBase = null): self
    {
        // validation for constraint: float
        if (!is_null($vatBase) && !(is_float($vatBase) || is_numeric($vatBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatBase, true), gettype($vatBase)), __LINE__);
        }
        $this->vatBase = $vatBase;
        
        return $this;
    }
    /**
     * Get vatDescription value
     * @return string|null
     */
    public function getVatDescription(): ?string
    {
        return $this->vatDescription;
    }
    /**
     * Set vatDescription value
     * @param string $vatDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setVatDescription(?string $vatDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($vatDescription) && !is_string($vatDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatDescription, true), gettype($vatDescription)), __LINE__);
        }
        $this->vatDescription = $vatDescription;
        
        return $this;
    }
    /**
     * Get vatId value
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param string $vatId
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setVatId(?string $vatId = null): self
    {
        // validation for constraint: string
        if (!is_null($vatId) && !is_string($vatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Orderlists\StructType\InvoiceVatPositionDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
