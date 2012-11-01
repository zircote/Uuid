<?php
namespace Uuid;

/**
 * @package     Uuid
 * @category    Uuid
 */
/**
 * @package     Uuid
 * @category    Uuid
 */
class Uuid {

    /**
     *
     * @var string
     */
    protected $uuid;
    /**
     *
     */
    public function __construct($value = null){
        $this->setUuid($value);
    }

    /**
     * @param null|string $chars
     *
     * @return Uuid
     * @throws \UnexpectedValueException
     */
    public function setUuid($chars = null){
        if (null === $chars && 32 != strlen($chars)) {
            $chars = md5 ( uniqid ( mt_rand (), true ) );
        } elseif ($chars !== null && 32 !== strlen($chars)){
            throw new \UnexpectedValueException('invalid characters for UUID generation provided');
        }
        $this->uuid =
            substr ( $chars, 0, 8 )  . '-' .
            substr ( $chars, 8, 4 )  . '-' .
            substr ( $chars, 12, 4 ) . '-' .
            substr ( $chars, 16, 4 ) . '-' .
            substr ( $chars, 20, 12 ) ;
        return $this;
    }

    /**
     * returns the uuid and creates one if none exists
     *
     * @return string
     *
     */
    public function getUuid(){
        return $this->uuid;
    }

    /**
     * string overload method
     */
    public function __toString(){
        return (string) $this->uuid;
    }

    /**
     * @static
     *
     * @param null $value
     *
     * @return string
     */
    public static function generate($value = null)
    {
        $uuid = new self($value);
        return $uuid->__toString();
    }
}
