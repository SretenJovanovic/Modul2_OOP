<?php


class FailureReport implements Report
{
    private $id;
    private User $user;
    private Equipement $equipement;
    private $description;
    private $reportDate;
    private $status = false;
    private $fixedDate;

    public function __construct($id, User $user, Equipement $equipement, $description,$fixedDate=null)
    {
        $this->id = $id;
        $this->user = $user;
        $this->equipement = $equipement;
        $this->description = $description;
        $this->reportDate = date_timestamp_get(date_create());
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser(User $user)
    {
        $this->user = $user;
    }
    public function getEquipement()
    {
        return $this->equipement;
    }
    public function setEquipement(Equipement $equipement)
    {
        $this->equipement = $equipement;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescripton($description)
    {
        $this->description = $description;
    }
    public function getReportDate()
    {
        return $this->reportDate;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus()
    {
        $this->status = !$this->status;
    }
    public function getFixedDate()
    {
        return $this->fixedDate;
    }
    public function setFixedDate()
    {
        return $this->fixedDate = date_timestamp_get(date_create());
    }
}
