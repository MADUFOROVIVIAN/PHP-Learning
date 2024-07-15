<?php
$employees =[
    ["ID" => "1", "department" => "HR", " salary" => 10000],
    ["ID" => "2", "department" => "Marketing", " salary" => 12000],
    ["ID" => "3", "department" => "Finance", " salary" => 15000],
    ["ID" => "4", "department" => "Marketing", " salary" => 12000],
    ["ID" => "5", "department" => "HR", " salary" => 10000],
    ["ID" => "6", "department" => "HR", " salary" => 12000],
    ["ID" => "7", "department" => "Finance", " salary" => 15000],
    ["ID" => "8", "department" => "Marketing", " salary" => 15000],
    ["ID" => "9", "department" => "Marketing", " salary" => 18000],
    ["ID" => "10", "department" => "HR", " salary" => 10000],
    ];

    $increments = [
        "Marketing" => 0.10,
        "Finance" => 0.08,
        "HR" => 0.09
    ];

    function increment_salaries(&$employees, $increments) {
        foreach ($employees as &$employee) {
            if (isset($increments[$employee["department"]])) {
                $increment = $increments[$employee["department"]];
                $employee["salary"] += $employee["salary"] * $increment;
            }
        }
    }

    increment_salaries($employees, $increments);

    echo "Updated employee salaries:\n";
foreach ($employees as $employee) {
    echo "ID: {$employee["ID"]}, Department: {$employee["department"]}, New Salary: " .
     number_format($employee["salary"], 2) . "\n";
}
?>