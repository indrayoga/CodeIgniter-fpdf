# CodeIgniter-fpdf
This is a pdf generator for codeigniter, based on fpdf and with some scripts extension from [fpdf.org] (www.fpdf.org)

#Installations
1. copy third-party folder to your application/third-party
2. copy libraries folder to your application/libraries
3. you can load the library using autoload file application/config/autoload.php or you can load with
```php
$config=array('orientation'=>'P','size'=>'A4');
$this->load->library('mypdf',$config);

```
#Example
```php
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
}
```
#Tutorial

# License

* The fpdf and the extension scripts are license under: FPDF, see [fpdf.org] www.fpdf.org.
* The library file are under: [MIT](license.md).
