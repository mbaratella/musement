<?php


class City
{
    protected $id, $name, $latitude, $longitude;
    protected $weather1, $weather2;

    /**
     * City constructor.
     * @param $id
     * @param $name
     * @param $latitude
     * @param $longitude
     */
    public function __construct($id, $name, $latitude, $longitude)
    {
        $this->id = $id;
        $this->name = $name;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getWeather1()
    {
        return $this->weather1;
    }

    /**
     * @param mixed $weather1
     */
    public function setWeather1($weather1): void
    {
        $this->weather1 = $weather1;
    }

    /**
     * @return mixed
     */
    public function getWeather2()
    {
        return $this->weather2;
    }

    /**
     * @param mixed $weather2
     */
    public function setWeather2($weather2): void
    {
        $this->weather2 = $weather2;
    }
}