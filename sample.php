
<?php
class Sample extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('samplemodel');
		$data['query']=$this->samplemodel->bugsdata();
		$this->load->view('sampleview',$data);
		
		///// here is the rough branch code
		
		/*$data['name']='dale';
		//$data['color']='red';
		
		//$this->load->view('sampleview',$data);*/
	}
}
?>
