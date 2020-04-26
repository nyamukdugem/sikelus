<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//load Spout Library
require_once APPPATH.'third_party/Spout/Autoloader/autoload.php';
 
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

class Import_semester extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        is_logged_in();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$this->load->view('import');

		//ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx|xls'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
       
            $this->load->library('upload', $config);
       
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
       
                $reader = ReaderFactory::create(Type::XLSX); //set Type file xlsx
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
 
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;
 
                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();
 
                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                        if ($numRow > 1)
                        {
                            $data = array(
                                'nisn'    => $row[0],
                                'agama_s' => $row[1],
                                'pkn_s'   => $row[2],
                                'bi_s'    => $row[3],
                                'mtk_s'   => $row[4],
                                'ipa_s'   => $row[5],
                                'ips_s'   => $row[6],
                                'sbk_s'   => $row[7],
                                'pjok_s'  => $row[8],
                                'bmr_s'   => $row[9],
                                'bing_s'  => $row[10]
                            );
 
                            //tambahkan array $data ke $save
                            array_push($save, $data);
                        }
                       
                        $numRow++;
                    }
                    //simpan data ke database
                    $this->m_admin->importSemester($save);
 
                    //tutup spout reader
                    $reader->close();
 
                    //hapus file yang sudah diupload
                    unlink('temp_doc/'.$file['file_name']);
 
                    //tampilkan pesan success dan redirect ulang ke index controller import
                    $this->session->set_flashdata('success', 'Berhasil Diimport');
                    redirect('admin/semester');
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }
    }
		
	}

/* End of file Import_semester7.php */
/* Location: ./application/controllers/Import_semester7.php */