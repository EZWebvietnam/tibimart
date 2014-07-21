<?phpclass Upload extends CI_Controller {    public $view_data = array();    private $upload_config;     public function __construct() {        parent::__construct();    }    public function index() {        $this->load->library('myfunction');        $this->load->helper(array('url', 'form'));        $dir = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/post';        $file = $this->myfunction->getlastfile($dir);        $this->load->view('uploadify_v3', $this->view_data);    }    public function do_upload() {        $this->load->library('upload');        $image_upload_folder = PATH_FOLDER . ROT_DIR . 'file/uploads/product';        if (!file_exists($image_upload_folder)) {            mkdir($image_upload_folder, DIR_WRITE_MODE, true);        }        $this->upload_config = array(            'upload_path' => $image_upload_folder,            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',            'max_size' => 2048,            'remove_space' => TRUE,            'encrypt_name' => TRUE,        );        $this->upload->initialize($this->upload_config);        if (!$this->upload->do_upload()) {            $upload_error = $this->upload->display_errors();            echo json_encode($upload_error);        } else {            $file_info = $this->upload->data();			/*$SourceFile = PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$file_info['file_name'];			$DestinationFile = PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$file_info['file_name'];			$WaterMarkText = 'www.tibimart.com';			$this->watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);*/            echo json_encode($file_info);        }    }    public function do_congdung() {        $this->load->library('upload');        $image_upload_folder = PATH_FOLDER . ROT_DIR . 'file/uploads/congdung';        if (!file_exists($image_upload_folder)) {            mkdir($image_upload_folder, DIR_WRITE_MODE, true);        }        $this->upload_config = array(            'upload_path' => $image_upload_folder,            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',            'max_size' => 2048,            'remove_space' => TRUE,            'encrypt_name' => TRUE,        );        $this->upload->initialize($this->upload_config);        if (!$this->upload->do_upload()) {            $upload_error = $this->upload->display_errors();            echo json_encode($upload_error);        } else {            $file_info = $this->upload->data();			/*$SourceFile = PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$file_info['file_name'];			$DestinationFile = PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$file_info['file_name'];			$WaterMarkText = 'www.tibimart.com';			$this->watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);*/            echo json_encode($file_info);        }    }	public function do_saleoff() {        $this->load->library('upload');        $image_upload_folder = PATH_FOLDER . ROT_DIR . 'file/uploads/saleoff';        if (!file_exists($image_upload_folder)) {            mkdir($image_upload_folder, DIR_WRITE_MODE, true);        }        $this->upload_config = array(            'upload_path' => $image_upload_folder,            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',            'max_size' => 2048,            'remove_space' => TRUE,            'encrypt_name' => TRUE,        );        $this->upload->initialize($this->upload_config);        if (!$this->upload->do_upload()) {            $upload_error = $this->upload->display_errors();            echo json_encode($upload_error);        } else {            $file_info = $this->upload->data();			/*$SourceFile = PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$file_info['file_name'];			$DestinationFile = PATH_FOLDER.ROT_DIR.'file/uploads/product/'.$file_info['file_name'];			$WaterMarkText = 'www.tibimart.com';			$this->watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);*/            echo json_encode($file_info);        }    }    public function upload_logo() {        $this->load->library('upload');        $image_upload_folder = PATH_FOLDER . ROT_DIR . 'file/uploads/logo';        if (!file_exists($image_upload_folder)) {            mkdir($image_upload_folder, DIR_WRITE_MODE, true);        }        $this->upload_config = array(            'upload_path' => $image_upload_folder,            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',            'max_size' => 2048,            'remove_space' => TRUE,            'encrypt_name' => TRUE,        );        $this->upload->initialize($this->upload_config);        if (!$this->upload->do_upload()) {            $upload_error = $this->upload->display_errors();            echo json_encode($upload_error);        } else {            $file_info = $this->upload->data();            echo json_encode($file_info);        }    }	public function upload_image_slide() {        $this->load->library('upload');        $image_upload_folder = PATH_FOLDER . ROT_DIR . 'file/uploads/slide';        if (!file_exists($image_upload_folder)) {            mkdir($image_upload_folder, DIR_WRITE_MODE, true);        }        $this->upload_config = array(            'upload_path' => $image_upload_folder,            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',            'max_size' => 2048,            'remove_space' => TRUE,            'encrypt_name' => TRUE,        );        $this->upload->initialize($this->upload_config);        if (!$this->upload->do_upload()) {            $upload_error = $this->upload->display_errors();            echo json_encode($upload_error);        } else {            $file_info = $this->upload->data();			$SourceFile = PATH_FOLDER.ROT_DIR.'file/uploads/slide/'.$file_info['file_name'];			$DestinationFile = PATH_FOLDER.ROT_DIR.'file/uploads/slide/'.$file_info['file_name'];			$WaterMarkText = 'www.tibimart.com';			$this->watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile);            echo json_encode($file_info);        }    }    public function do_upload_new() {        $this->load->library('upload');        $image_upload_folder = PATH_FOLDER . ROT_DIR . 'file/uploads/new';        if (!file_exists($image_upload_folder)) {            mkdir($image_upload_folder, DIR_WRITE_MODE, true);        }        $this->upload_config = array(            'upload_path' => $image_upload_folder,            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',            'max_size' => 2048,            'remove_space' => TRUE,            'encrypt_name' => TRUE,        );        $this->upload->initialize($this->upload_config);        if (!$this->upload->do_upload()) {            $upload_error = $this->upload->display_errors();            echo json_encode($upload_error);        } else {            $file_info = $this->upload->data();            echo json_encode($file_info);        }    }    public function upload_file(){			$status = "";			$msg = "";			$tit = $this->input->post("title");			if($tit == NULL){				$status = "error";				$msg = "Please enter your title";				}			if($status != "error"){				$config['upload_path'] = '.\upload';				$config['allowed_types'] = 'gif|jpg|png|doc|txt';				$config['max_size']  = 1024 * 8;				$config['encrypt_name'] = TRUE;				$this->load->library("upload",$config);				if(!$this->upload->do_upload("ufile")){					$status = "error";					$msg = $this->upload->display_errors('<p>','</p>');					echo $msg;				}else{										$data = $this->upload->data();					$info = array("file_name" => $data['file_name'],								  "title"     => $_POST['title']);											$status = "Success";						$msg = "File successfully uploaded";										}			}			echo json_encode(array("status"    => $status,								   "msg"   => $msg));	}	 public function do_upload_bank() {        $this->load->library('upload');        $image_upload_folder = PATH_FOLDER . ROT_DIR . 'file/uploads/bank';        if (!file_exists($image_upload_folder)) {            mkdir($image_upload_folder, DIR_WRITE_MODE, true);        }        $this->upload_config = array(            'upload_path' => $image_upload_folder,            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',            'max_size' => 2048,            'remove_space' => TRUE,            'encrypt_name' => TRUE,        );        $this->upload->initialize($this->upload_config);        if (!$this->upload->do_upload()) {            $upload_error = $this->upload->display_errors();            echo json_encode($upload_error);        } else {            $file_info = $this->upload->data();            echo json_encode($file_info);        }    }	function watermarkImage ($SourceFile, $WaterMarkText, $DestinationFile) {	   list($width, $height) = getimagesize($SourceFile);	   $image_p = imagecreatetruecolor($width, $height);	   $image = imagecreatefromjpeg($SourceFile);	   imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width, $height);	   $black = imagecolorallocate($image_p,  0, 0, 255);	   $font = PATH_FOLDER.ROT_DIR.'file/uploads/fonts/arial.ttf';	   $font_size = 25;	   imagettftext($image_p, $font_size, 0, 10, 30, $black, $font, $WaterMarkText);	   if ($DestinationFile<>'') {	      imagejpeg ($image_p, $DestinationFile, 100);	   } else {	      header('Content-Type: image/jpeg');	      imagejpeg($image_p, null, 100);	   };	   imagedestroy($image);	   imagedestroy($image_p);	}}?>