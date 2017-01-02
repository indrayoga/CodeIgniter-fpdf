<?php

class pdfgen extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
        }

        //print hello world
	public function helloworld(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $this->mypdf->AddPage();
                $this->mypdf->SetFont('Arial','B',16);
                $this->mypdf->Cell(40,10,'Hello World!');
                $this->mypdf->Output();                
	}

        //print hello world with rotation 
        public function rotateHelloworld(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $this->mypdf->AddPage();
                $this->mypdf->SetFont('Arial','B',16);
                $this->mypdf->RotatedText(100,60,'Hello World!',45);
                $this->mypdf->Output();                
        }

        //print hello world as watermark 
        public function watermarkHelloworld(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $this->mypdf->AddPage();
                $this->mypdf->SetFont('Arial','B',50);
                $this->mypdf->SetTextColor(255,192,203);
                $this->mypdf->RotatedText(35,190,'Hello World!',45);
                $this->mypdf->Output();                
        }

        //print html 
        public function printHTML(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $this->mypdf->SetFont('Arial','',12);
                $this->mypdf->AddPage();
                $this->mypdf->WriteHTML('<font face="times">The </font><b><font color="#7070D0">FPDF</font></b><font face="times"> logo:</font>
<br><br><img src="http://www.fpdf.org/logo.gif" width="104">');
                $this->mypdf->Output();
        }

        //print basic table 
        public function basicTable(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
                $data   = array(array('Austria','Vienna','83859','8075'),array('Belgium','Brussels','30518','10192'));
                $this->mypdf->SetFont('Arial','',12);
                $this->mypdf->AddPage();
                $this->mypdf->BasicTable($header,$data);
                $this->mypdf->Output();
        }

        //print improved table 
        public function improvedTable(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
                $data   = array(array('Austria','Vienna','83859','8075'),array('Belgium','Brussels','30518','10192'));
                $this->mypdf->SetFont('Arial','',12);
                $this->mypdf->AddPage();
                $this->mypdf->ImprovedTable($header,$data);
                $this->mypdf->Output();
        }

        //print fancy table 
        public function fancyTable(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
                $data   = array(array('Austria','Vienna','83859','8075'),array('Belgium','Brussels','30518','10192'));
                $this->mypdf->SetFont('Arial','',12);
                $this->mypdf->AddPage();
                $this->mypdf->FancyTable($header,$data);
                $this->mypdf->Output();
        }

        //print EAN barcode
        public function eanBarcode(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $this->mypdf->AddPage();
                $this->mypdf->EAN13(80,40,'123456789012');
                $this->mypdf->Output();                
        }

        //print Code39 barcode
        public function code39(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $this->mypdf->AddPage();
                $this->mypdf->Code39(80,40,'CODE 39',1,10);
                $this->mypdf->Output();                
        }

        //print Code128 barcode
        public function code128(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $this->mypdf->AddPage();
                $code='CODE 128';
                $this->mypdf->SetFont('Arial','',12);
                $this->mypdf->Code128(50,20,$code,80,20);
                $this->mypdf->SetXY(50,45);
                $this->mypdf->Write(5,'A set: "'.$code.'"');
                $this->mypdf->Output();                
        }

        //protection of the page
        public function protectPage(){
                $config=array('orientation'=>'P','size'=>'A4');
                $this->load->library('mypdf',$config);
                $this->mypdf->AddPage();
                $code='CODE 128';
                $this->mypdf->SetFont('Arial','',12);
                $this->mypdf->SetProtection(array('print'));
                $this->mypdf->Write(10,'You can print me but not copy my text.');
                $this->mypdf->Output();                
        }

}