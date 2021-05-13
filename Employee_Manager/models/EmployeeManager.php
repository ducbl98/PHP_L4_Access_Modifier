<?php
namespace Models;

class EmployeeManager
{
    protected $filePath;

    /**
     * EmployeeManager constructor.
     * @param $filePath
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function getDataFromFile()
    {
        $jsonData=file_get_contents($this->filePath);
        return json_decode($jsonData,true);
    }

    public function saveDataToFile($arrData)
    {
        $jsonData=json_encode($arrData);
        file_put_contents($this->filePath,$jsonData);
    }
    function getAllEmployeeInformation(): array
    {
        $arrData=$this->getDataFromFile();
        $employees=[];
        foreach ($arrData as $arrDatum) {
            $employee=new Employee($arrDatum);
            $employees[]=$employee;
        }
        return $employees;
    }

    public function deleteEmployee($index)
    {
        $arrData=$this->getDataFromFile();
        array_splice($arrData,$index,1);
        $this->saveDataToFile($arrData);
    }
    public function addEmployee($arrDatum)
    {
        $arrData=$this->getDataFromFile();
        array_push($arrData,$arrDatum);
        $this->saveDataToFile($arrData);
    }

    public function editEmployee($index,$arrDatum)
    {
        $arrData=$this->getDataFromFile();
        $arrData[$index]=$arrDatum;
        $this->saveDataToFile($arrData);

    }
}