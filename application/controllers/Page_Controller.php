<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page_Controller extends CI_Controller
{   
    public function index($page_name = 'index')
    {
        $data['page'] = 'partial/' . $page_name;
				$data['admin'] = 'http://127.0.0.1/cwp_admin/';
				$this->load->model('CwpModel');
        
        if(!file_exists(FCPATH."/application/views/partial/$page_name.php")) {
            show_404();
        }
        if($page_name === 'index') {	//---------------------------------------- index page
            $data['isIndex'] = true;    
					  $data['album_cover'] = $this->CwpModel->getAlbumCover();
            $this->load->view('common/body_light', $data);
        } else if($page_name === 'portfolio') { // -----------------------------portfolio page
            $data['page'] = 'partial/portfolio.php';
						$data['portfolio_data'] = $this->CwpModel->getPortfolioImage();
            $this->load->view('common/body_dark', $data);
        } else if($page_name === 'film') {// ------------------------------------film page
						$data['isIndex'] = false;  
            $data['page'] = 'partial/film.php';
						$data['film_data'] = $this->CwpModel->getFilm();
            $this->load->view('common/body_light', $data);
        }else if($page_name === 'album') {//--------------------------------------album page
            $this->album(null);
        } else {
             $data['isIndex'] = false;   
             $this->load->view('common/body_light', $data);
         }
    }
    public function album($album_id)
    {
        //$data['admin'] = 'http://admin.candidweddingphotography.co.in/';
        $data['admin'] = 'http://127.0.0.1/cwp_admin/';
				
        if (!empty($album_id)) { // if album id do exists
            $this->load->model('CwpModel');
            $data['image_data'] = $this->CwpModel->getImageByAlbumId($album_id); // getImageByAlbumId returns false if album id doesn't have data associated with it. if data exists it returns it.					
            if ($data['image_data'] !== false) { // if result exists
                $data['page'] = 'partial/album.php';       
							
                $this->load->view('common/body_dark', $data);
            } else {
                show_404();
            }
        } else {
            show_404();
        }
    }		
    public function feedback()
    {
        $this->load->library("Form_validation");
        $this->load->helper("form");
        // echo $this->input->post('name');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('date', 'Date', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        $this->form_validation->set_rules('service', 'Service', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('remark', 'Remark', 'trim');
        $url = base_url();
        if ($this->form_validation->run() == TRUE) {
            $this->load->library('recaptcha');
            if (!$this->recaptcha->is_valid()) {
                $data['message'] = array(
                    'type' => 'danger',
                    'message' => 'Form validation failed'
                );
                $this->session->set_flashdata('vErr', 'true');
                header('Location:'.$url.'contact');
		die();
            }
            //Other processing
            // echo $this->input->post('name'); exit;           	
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone= $this->input->post('phone');
            $date = $this->input->post('date');
            $type = $this->input->post('type');
            $service= $this->input->post('service');
            $location = $this->input->post('location');
            $remark = $this->input->post('remark');
            // $this->session->set_flashdata('succ', 'true');
            // header('Location:'.$url.'contact');
            // Email start
            $this->load->library('email');

		$subject = 'Query From Candid Wedding Photography';
		$message = '<table style="width:100%">
				  <tr>
				    <th>Field</th>
				    <th>Information</th> 
				  </tr>
				  <tr>
				    <td>Name</td>
				    <td>'.$name.'</td>
				  </tr>
				  <tr>
				    <td>Email</td>
				    <td>'.$email.'</td>
				  </tr>
				  <tr>
				    <td>Phone</td>
				    <td>'.$phone.'</td>
				  </tr>
				  <tr>
				    <td>Event Date</td>
				    <td>'.$date.'</td>
				  </tr>
				  <tr>
				    <td>Type of Event</td>
				    <td>'.$type.'</td>
				  </tr>
				  <tr>
				    <td>Interested Services</td>
				    <td>'.$service.'</td>
				  </tr>
				  <tr>
				    <td>Location</td>
				    <td>'.$location.'</td>
				  </tr>
				  <tr>
				    <td>Remark</td>
				    <td>'.$remark.'</td>
				  </tr>
				</table>';
		
		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
		    <title>' . html_escape($subject) . '</title>
		    <style type="text/css">
		        body {
		            font-family: Arial, Verdana, Helvetica, sans-serif;
		            font-size: 16px;
		        }
		        table, th, td {
			    border: 1px solid black;
			    border-collapse: collapse;
			}
		    </style>
		</head>
		<body>
		' . $message . '
		</body>
		</html>';
		// Also, for getting full html you may use the following internal method:
		//$body = $this->email->full_html($subject, $message);
		
		$result = $this->email
		    ->from('noreply@cwpkolkata.com')
		    ->reply_to($email)    // Optional, an account where a human being reads.
		    ->to('info.cwpkolkata@gmail.com')
		    ->subject($subject)
		    ->message($body)
		    ->send();
		
		// var_dump($result);
		// echo '<br />';
		   //echo $this->email->print_debugger();
		
		//  exit;
		if($result) {
			$this->session->set_flashdata('succ', 'true');
         		header('Location:'.$url.'contact');
		} else {
			$this->session->set_flashdata('vErr', 'true');
	                header('Location:'.$url.'contact');
			die(); 
		}
		
		exit;
            // Email end
        } else{
           $this->session->set_flashdata('vErr', 'true');
                header('Location:'.$url.'contact');
		die();           
        }
    }

    
}
