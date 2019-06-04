<?php

declare(strict_types=1);

namespace App\User\Entity;

use App\Common\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\ArraySerializableInterface;

/**
 * Class UserDetailEntity
 * @ORM\Entity()
 * @ORM\Table(name="user_detail")
 * @package App\User\Entity
 */
class UserDetailEntity extends AbstractEntity implements ArraySerializableInterface
{
    /**
     * @ORM\Column(name="firstname", type="string", length=255)
     * @var $firstname
     */
    protected $firstname;

    /**
     * @ORM\Column(name="lastname", type="string", length=255)
     * @var $lastname
     */
    protected $lastname;

    /**
     * UserDetailEntity constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Exchange internal values from provided array
     *
     * @param array $array
     * @return void
     */
    public function exchangeArray(array $array)
    {
        $this->setFirstname($array['firstname'])->setLastname($array['firstname']);
    }

    /**
     * Return an array representation of the object
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return [
            'firstname' => $this->getFirstname(),
            'lastname' => $this->getLastname(),
            'created' => $this->getCreated(),
            'updated' => $this->getUpdated()
        ];
    }
}
