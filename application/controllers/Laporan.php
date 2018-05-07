<?php
Class Laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('Pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        //cetak gambar
        $pdf->Image('assets/img/img/logo/apple-icon-114x114.png',8,8);
        // mencetak string 
        $pdf->Cell(190,20,'Kwitansi Panenpangan',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,1,'Ini laporan',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(20,15,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'ID Pesan',1,0);
        $pdf->Cell(90,6,'Harga Total',1,0);
        $pdf->Cell(40,6,'Poin',1,0);
        $pdf->Cell(35,6,'Status',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('detil_pesan')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,$row->id_pesan,1,0);
            $pdf->Cell(90,6,$row->harga_total,1,0);
            $pdf->Cell(40,6,$row->poin,1,0);
            $pdf->Cell(35,6,$row->status,1,1); 
        }
        $pdf->Output();
    }


    public function bacaexcel()
    {
        $file = APPPATH.'wisudamhsw.xls';
        $this->load->library('excel');
     
        $objPHPExcel = PHPExcel_IOFactory::load($file);
     
        // Ambil koleksi cell saja
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
     
        // Copy ke array semua cell nya
        $data = array();
        foreach ($cell_collection as $cell) {
     
            $kolom = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $baris = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $isi   = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
     
            if ($baris == 1) {
                $header[$kolom] = $isi;
            } else if ($baris >= 1) {
                $data[$baris][$kolom] = $isi;
            }
     
        }
     
        // Untuk keperluan demo, saya tidak pakai view
        print "<table border='1' cellpadding='5'>";
        print "<tr>";
        foreach ($header as $h) {
            print "<td><b>$h</b></td>";
        }
        print "</tr>";
        foreach($data as $bar) {
            print "<tr>";
            foreach ($bar as $kol) {
                print "<td>$kol</td>";
            }
            print "</tr>";
        }
        print "</table>"; 
    }

    public function buatexcel()
    {
        $this->load->library('excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Worksheet1');
        $this->excel->getActiveSheet()->setCellValue('A1', 'Halo CodeIgniter Indonesia');
        $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
        $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setName("Calibri");
        $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
     
        $filename='wisudawan23.xls'; 
     
        // Header file Excel
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0'); 
     
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
     
        // Agar output didownload
        $objWriter->save('php://output');
    }


}