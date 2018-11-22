<?php
	
	App::uses('Component', 'Controller');
	
	
	/**
	 *
	 * CakePHP (version 2) component to upload, resize, crop and
	 * add watermark to images.
	 *
	 * @author Angelito M. Goulart <ange.sap@hotmail.com>
	 *
	 */
	class SubirImagenComponent extends Component{

		public $components = array('Qimage');


		/**
		*
		*	$data['path'] = 'img/';
		*	$data['file'] = $this->request->data['Imagen']['archivo'];
		*
		*	@return image_id saved in table images.
		*/
		public function guardar_imagen($data){

			$datos['path'] = WWW_ROOT.$data['path'];
			$datos['file'] = $data['file'];
			$name = $this->Qimage->copy($data);

			$Image = ClassRegistry::init('Image');

			$datos_imagen['Image']['path'] = $data['path'];
			$datos_imagen['Image']['name'] = $name;
			$datos_imagen['Image']['mime'] = $data['file']['type'];

			$Image->create();
			$Image->save($datos_imagen);

			$imagen_id = $Image->getLastInsertID();

			return $imagen_id;

		}

		public function guardar_video($data){
			$datos['path'] = WWW_ROOT.$data['path'];
			$datos['file'] = $data['file'];
			$name = $this->Qimage->copy_video($data);

			$Video = ClassRegistry::init('Video');

			$datos_video['Video']['path'] = $data['path'];
			$datos_video['Video']['name'] = $name;
			$datos_video['Video']['mime'] = $data['file']['type'];

			$Video->create();
			$Video->save($datos_video);

			$video_id = $Video->getLastInsertID();

			return $video_id;
		}
		
	}

?>