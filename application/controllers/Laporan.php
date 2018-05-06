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
}