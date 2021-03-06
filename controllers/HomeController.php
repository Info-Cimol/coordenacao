<?php
/**
 * home - Controller de exemplo
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class HomeController extends MainController
{

	/**
	 * Carrega a página "/views/home/index.php"
	 */
    public function index() {
		// Título da página
		$this->title = 'Home';
		
		// Parametros da função
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();
	
		// Essa página não precisa de modelo (model)
		
		/** Carrega os arquivos do view **/
		require PATH . '/views/includes/header.php';
       			
        require PATH . '/views/includes/menu.php';
		
		require PATH . '/views/home/home.php';
		
		require PATH . '/views/includes/footer.php';
		
    } // index
	
} // class HomeController