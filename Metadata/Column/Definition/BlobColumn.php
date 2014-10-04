<?php
namespace Soluble\Db\Metadata\Column\Definition;

class BlobColumn extends AbstractColumnDefinition
{
    /**
     *
     * @var int
     */
    protected $characterOctetLength = null;

    /**
     * @return int|null the $characterOctetLength
     */
    public function getCharacterOctetLength()
    {
        return $this->characterOctetLength;
    }

    /**
     * @param int $characterOctetLength the $characterOctetLength to set
     * @return \Soluble\Db\Metadata\Column\BlobColumn
     */
    public function setCharacterOctetLength($characterOctetLength)
    {
        $this->characterOctetLength = $characterOctetLength;
        return $this;
    }
}
