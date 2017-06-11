<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
    //Title
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'CAFE ESTELA',0,1,'C');
    $this->Ln(10);
    

    
    
    
    //Ensure table header is output
    parent::Header();
}
}

//Connect to database
$con = mysqli_connect("localhost", "root", "", "test");
mysqli_connect("localhost", "root", "", "test");
mysqli_select_db($con, 'test');


$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,6,'Total Reports',0,1,'L');
$prop=array('HeaderColor'=>array(255,150,100),
		'color1'=>array(210,245,255),
		'color2'=>array(255,255,210),
		'padding'=>2);
$pdf->Table('select trans_no,date,total from tbl_report_total order by trans_no',$prop);


$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,6,'Restock Update',0,1,'L');
$prop=array('HeaderColor'=>array(255,150,100),
		'color1'=>array(210,245,255),
		'color2'=>array(255,255,210),
		'padding'=>2);
$pdf->Table('select * from tbl_restock_date order by date_time',$prop);
$pdf->Output();


?>