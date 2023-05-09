<?php
class Home extends CI_Controller {    

    function index (){
        $data['pagetitle'] = 'Home page';
        $data['module'] = 'frontpage';
        $data['submodule'] = ''; 
        $id = $this->session->userdata('uID');        
        $data['profile'] = $this->qry_retrieve->qry_profile($id);
       
        $this->load->view('header', $data);
        $this->load->view('frontpage');
        $this->load->view('footer');
    }
    
    function diarynew (){
        $data['pagetitle'] = 'New Diary';
        $data['module'] = 'diarynew';
        $data['submodule'] = 'newdiary'; 
        $data['uID'] = $this->session->userdata('uID');         
        $data['profile'] = $this->qry_retrieve->qry_profile($data['uID']);        

        // $a = $this->input->post();
        // print_r($a);
        // die();
        if($this->input->post('submit')){

            $insertid = $this->qry_insert->entry( $data['uID']);
            if ($insertid) {
                $this->session->set_flashdata('success', $this->input->post('title'));
				redirect('home/diaryentry/1');
			}
			else {
                $this->session->set_flashdata('fail', $this->input->post('title'));
				redirect('home/diaryentry/1');
			}
                        
        }

        $this->load->view('header', $data);
        $this->load->view('diarynew');
        $this->load->view('footer');
    }

    function diaryentry (){
        $data['pagetitle'] = 'Diary Entry';
        $data['module'] = 'diaryentry';
        $data['submodule'] = 'entrydiary';     
        $data['uID'] = $this->session->userdata('uID');       
        $data['profile'] = $this->qry_retrieve->qry_profile($data['uID']);  
        // $data['entrylist'] = $this->qry_retrieve->qry_listentry();    
        $this->load->model('qry_retrieve');

        $per_page        = 10;  
        $total_rows      = $this->qry_retrieve->get_count('entry');      
        $number_of_page  = ceil ($total_rows / $per_page);          
        $page            = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        if ($page == 0) {
            $page_first_result = 0;  
        } else {
            $page_first_result = ($page - 1) * $per_page;
        }

        $data['entrylist'] = $this->qry_retrieve->get_record($page_first_result, $per_page, $data['uID']);
        // print_r("<pre>");
        // print_r($page_first_result);
        // print_r($data['entrylist']);
        // die();

        $this->load->view('header', $data);
        $this->load->view('diaryentry');
        $this->load->view('footer');
    }

    function calendar (){
        $data['pagetitle'] = 'Mood Calendar';
        $data['module'] = 'calendar';
        $data['submodule'] = '';    
        $data['uID'] = $this->session->userdata('uID');     
        $data['moodlist'] = $this->qry_retrieve->get_mood($data['uID']);
               
        $data['profile'] = $this->qry_retrieve->qry_profile($data['uID']);  

        // print_r("<pre>");
        // print_r($data['entrylist']);   
        // print_r("<br>");     
        // die;

        $this->load->view('header', $data);
        $this->load->view('calendar');
        $this->load->view('footer');
    }

    function profile (){
        $data['pagetitle'] = 'Profile Page';
        $data['module'] = 'Profile';
        $data['submodule'] = 'profile';    
        $data['uID'] = $this->session->userdata('uID');        
        $data['profile'] = $this->qry_retrieve->qry_profile($data['uID']);  
        $this->load->library('encryption'); 
        
        if($this->input->post('submit')){

            $insertid      = $this->qry_insert->editprofile($data['uID']);
            $insertgallery = $this->qry_insert->editgallery($data['uID']);
            $insertgallery = $this->qry_insert->edithealth($data['uID']);
            if ($insertid && $insertgallery) {            
                $this->session->set_flashdata('success', $this->input->post('nickname'));
				redirect('home/index');
			}
			else {
                $this->session->set_flashdata('fail', $this->input->post('nickname'));
				redirect('home/index');
			}                        
        }

        // $a = $this->input->post();
        // print_r($a);
        // die();
        if($this->input->post('submit')){

            $insertid = $this->qry_insert->addprofile();
            if ($insertid) {
                $this->session->set_flashdata('success', $this->input->post('nickname'));
				redirect('home');
			}
			else {
                $this->session->set_flashdata('fail', $this->input->post('nickname'));
				redirect('home');
			}
                        
        }

        $this->load->view('header', $data);
        $this->load->view('profilepage');
        $this->load->view('footer');
    }

    function logout (){
        $this->session->sess_destroy();
		redirect('login/index');
    }

    function date_data(){
        //Declare
        $dateid = $this->input->post('id');
        $tahun = date("Y");

        for ($i=1; $i <= 12; $i++){//Calculate month
            $bulan = str_pad($i, 2, 0, STR_PAD_LEFT); //Put "0" infront of num so that 1 become 01

            $d=cal_days_in_month(CAL_GREGORIAN,$bulan,$tahun); //Calculate how many days in month           
            for ($j=1; $j <= $d; $j++) { 
                $days = str_pad($j, 2, 0, STR_PAD_LEFT); //Put "0" infront of num so that 1 become 01        
                $arrdate[] = array(
                    "daymonthyear" => "$tahun-$bulan-$days"
                );
            }
        }
        $chkdate = $this->db->query("SELECT * FROM date_data WHERE YEAR(daymonthyear)='$tahun'")->num_rows();

        print_r($chkdate);
        die();
        if ($chkdate==0) {
            $this->db->insert_batch('date_data',$arrdate);            
        }  
        echo "<pre>";	
        print_r($arrdate);
        print_r($this->input->post());
        die();
        
    }

    function month_date() {
        //Original
        $dateid = $this->input->post('id');
        $tahun = date("Y");
        $bulan = date("F");        

        $nmonth = date("m", strtotime($bulan."-".$tahun)); //Get month as 01 format           
        print_r("Month:".$nmonth);
        echo '<br/>';                
        print_r("Year:".$tahun);
        echo '<br/>';

        $d=cal_days_in_month(CAL_GREGORIAN,$nmonth,$tahun); //Calculate how many days in month
        for ($i=1; $i <= $d; $i++) { 
            $days = str_pad($i, 2, 0, STR_PAD_LEFT); //Put "0" infront of num so that 1 become 01        
            $arrdate[] = array(
                "daymonthyear" => "$tahun-$nmonth-$days"
            );
        }
        //check if there is date in the database
        //num_rows() Give num of data in table
        $chkdate = $this->db->query("SELECT * FROM date_data WHERE YEAR(daymonthyear)='$tahun' AND MONTH(daymonthyear)='$nmonth'")->num_rows();
        
        if ($chkdate==0) {
            $this->db->insert_batch('date_data',$arrdate);            
        }  

        echo "There was $d days in $bulan $tahun";
        echo "<pre>";	
        print_r($arrdate);
        print_r($this->input->post());
        die();
    }

    function laporan_kehadiran() { //Coding En Zach
		// $this->d['module'] 		= 'modul_laporan';
		// $this->d['sub_module'] = 'laporan_perpustakaan';
		// $this->d['sub2_module'] = 'laporan_kehadiran';

		// $this->d['listperkhidmatan'] = $data1 = $this->retval_qry->User_info(); 
		

		for($m=1; $m<=12; ++$m){
			$montharr[date('F', mktime(0, 0, 0, $m, 1))] = date('F', mktime(0, 0, 0, $m, 1));
		}
		for($t=2019; $t<=date('Y'); ++$t){
			$yeararr[$t] = $t;
		}
		// echo "<pre>";
		// print_r($yeararr);
		// die();
		$this->d['listyear'] = $yeararr; 
		$this->d['listmonth'] = $montharr; 
        // if ($this->input->post('submit_btn') == 'submitbtn1') {
            // $jsonval = null;
			$userid = $this->input->post('id');
			$tahun = date("Y");
			$bulan = date("F");
			
			$nmonth = date("m", strtotime($bulan."-".$tahun));
            print_r($nmonth);
			$d=cal_days_in_month(CAL_GREGORIAN,$nmonth,$tahun);
			for ($i=1; $i <= $d; $i++) { 
				$days = str_pad($i, 2, 0, STR_PAD_LEFT);
				$arrdate[] = array(
					"tarikhsebulan" => "$tahun-$nmonth-$days"
				);
			}
			$chkdate = $this->db->query("SELECT * FROM datesebulan WHERE YEAR(tarikhsebulan)='$tahun' AND MONTH(tarikhsebulan)='$nmonth'")->num_rows();
			
			if ($chkdate==0) {
				$this->db->insert_batch('datesebulan',$arrdate);
				
			}
			
			// $kehadiran = $this->db->query("SELECT datesebulan.tarikhsebulan AS tarikh_daily, attendance2.id AS attendance_id, attendance2.tarikh AS attendance_tarikh, attendance2.masa_masuk AS masa_masuk, attendance2.masa_keluar AS masa_keluar, attendance2.keluar_sementara AS keluar_sementara, attendance2.masuk_sementara AS masuk_sementara, perkhidmatan.masa_perkhidmatan AS masa_perkhidmatan FROM datesebulan LEFT JOIN attendance2 ON datesebulan.tarikhsebulan = attendance2.tarikh AND attendance2.id = '$userid' LEFT JOIN perkhidmatan ON perkhidmatan.code_perkhidmatan=attendance2.perkhidmatan WHERE DATE_FORMAT(datesebulan.tarikhsebulan,'%Y-%m') = '$tahun-$nmonth' ORDER BY datesebulan.tarikhsebulan ASC")->result();

			echo "There was $d days in $bulan $tahun";
			echo "<pre>";
			// print_r($kehadiran);
			print_r($arrdate);
			print_r($this->input->post());
			die();
			// $this->d['kehadiran'] = $kehadiran;
			// $this->load->view('laporan/laporan_kehadiranperinci',$this->d);
		// }
        // else {
        //     $this->load->view('laporan/laporan_kehadiran',$this->d);
        // }

		

	}
}