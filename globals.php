<?php
$db = mysqli_connect('localhost', 'root', '', 'compani');
mysqli_set_charset($db, "UTF8");

/*Запрос к базе за названиями компаний*/
$company_name_query = "SELECT * FROM compani";
if ($company_name_query_result = mysqli_query($db, $company_name_query)) {
    $company_r = array();
    while ($row = mysqli_fetch_array($company_name_query_result)) {
        $company_r[] = $row;
    }
    mysqli_free_result($company_name_query_result);
}

/*Запрос имени и фамилии сотрудника*/
$staff_name_query = "SELECT * from staff";
$staff_name_query = "SELECT * from staff";
$staff_name_query = "SELECT * from staff";

if ($staff_name_result = mysqli_query($db, $staff_name_query)) {
    $staff_name_r = array();
    while ($row_Staff = mysqli_fetch_array($staff_name_result)) {
        $staff_name_r[] = $row_Staff;
    }
    mysqli_free_result($staff_name_result);
}
//Вывод клиента
$client_name_query = "SELECT * FROM client";
if ($client_name_result = mysqli_query($db, $client_name_query)) {

    $client_name_r = array();
    while ($row_Client = mysqli_fetch_array($client_name_result)) {
        $client_name_r[] = $$row_Client;
    }
    mysqli_free_result($client_name_result);
}
?>