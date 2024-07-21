<?php

// Array of employees with their details: [ID, Name, Department, Salary]
$employees = [
    [ 1, "HR",  10000],
    [ 2, "Marketing",  12000],
    [ 3, "Finance",  15000],
    [ 4, "Marketing",  12000],
    [ 5, "HR",  10000],
    [ 6, "HR",  12000],
    [ 7, "Finance",  15000],
    [ 8, "Marketing",  15000],
    [ 9, "Marketing",  18000],
    [ 10, "HR",  10000],
];

// Function to increment salaries based on department
function increment_salaries(&$employees) {
    foreach ($employees as &$employee) {
        if ($employee[2] == "Marketing") {
            $employee[3] *= 1.10;  // Increase by 10%
        } elseif ($employee[2] == "Finance") {
            $employee[3] *= 1.08;  // Increase by 8%
        } elseif ($employee[2] == "HR") {
            $employee[3] *= 1.09;  // Increase by 9%
        }
    }
}

// Increment the salaries
increment_salaries($employees);

// Print the updated employee details
foreach ($employees as $employee) {
    printf("ID: %d, Department: %s, Updated Salary: %.2f\n", $employee[0], $employee[1], $employee[2],);
}

?>