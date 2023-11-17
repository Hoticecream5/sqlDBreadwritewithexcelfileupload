<?php
session_start();
include('dbconfig.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {
            			 

                $Name = $row['1'];
                $Physical_Address_1 = $row['2'];
                $Physical_Address_2 = $row['3'];
                $Group_Description = $row['4'];
                $Email = $row['5'];
                $Telephone_Number = $row['6'];
                $Telephone_1 = $row['7'];
                $Telephone_2 = $row['8'];
                $Cellular_Phone = $row['9'];
                $Foreign_Balance = $row['10'];
                $Balance = $row['11'];
               

                $studentQuery = "INSERT INTO excelregistration (name, physicalAddress1, physicalAddress2, groupDescription, email, telephoneNumber, telephone1, telephone2, cellularPhone, foreignBalance, balance) VALUES ('$Name','$Physical_Address_1','$Physical_Address_2','$Group_Description','$Email','$Telephone_Number','$Telephone_1','$Telephone_2','$Cellular_Phone','$Foreign_Balance','$Balance')";
                $result = mysqli_query($con, $studentQuery);
                $msg = true;
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Imported";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Imported";
            header('Location: index.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: index.php');
        exit(0);
    }
}
?>