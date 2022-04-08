<?php

class Country
{
    //where the countries are bound to the table
    function getCountriesFormatted(): string
    {
        
        $result = $this->getCountries();
        $tableFill = "";
        
        foreach ($result as $country) {
            $pop = number_format($country->population, 0, ",", ".");
            $tableFill .= "<tr>
                            <td>$country->id</td>
                            <td>$country->name</td>
                            <td>$country->capitalCity</td>
                            <td>$country->continent</td>
                            <td>$pop</td>
                        </tr>";
        }
        return $tableFill;
    }

    //where the countries are selected
    function getCountries()
    {
        $conn = new Database();
        $conn->query('SELECT * FROM country');

        return $conn->resultSet();
    }
}