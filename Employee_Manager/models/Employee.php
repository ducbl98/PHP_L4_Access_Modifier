<?php
namespace Models;

class Employee
{
    protected string $name;
    protected string $age;
    protected string $address;
    protected string $phone;
    protected string $position;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->age = $data['age'];
        $this->address = $data['address'];
        $this->phone = $data['phone'];
        $this->position = $data['position'];
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed|string $age
     */
    public function setAge(mixed $age): void
    {
        $this->age = $age;
    }

    /**
     * @param mixed|string $position
     */
    public function setPosition(mixed $position): void
    {
        $this->position = $position;
    }

    /**
     * @param mixed|string $phone
     */
    public function setPhone(mixed $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $address
     */
    public function setAddress(mixed $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }
}