<?php
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Helper\Sample;
    use PhpOffice\PhpSpreadsheet\IOFactory;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    require('model/connection.php');
    $query = "SELECT * FROM datos";
    $ejecutar = mysqli_query($conexion, $query);

    $fileName = 'datos.xlsx';  
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Id');
    $sheet->setCellValue('B1', 'Nombre');
    $sheet->setCellValue('C1', 'Correo');     
    $sheet->setCellValue('D1', 'Celular');     
    $sheet->setCellValue('E1', 'Producto');     
    $rows = 2;

    while($val = mysqli_fetch_assoc($ejecutar)){
        $sheet->setCellValue('A' . $rows, $val['id']);
        $sheet->setCellValue('B' . $rows, $val['nombre']);
        $sheet->setCellValue('C' . $rows, $val['correo']);
        $sheet->setCellValue('D' . $rows, $val['celular']);
        $sheet->setCellValue('E' . $rows, $val['producto']);
        $rows++;
    } 
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename='.$fileName);

    $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
    $writer->save('php://output');
    exit;
?>