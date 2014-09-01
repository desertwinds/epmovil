<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'orders',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'orders',
                'action' => 'index'
            ),
            'flash' => array(
				'element' => 'alert',
				'key' => 'auth',
				'params' => array(
					'plugin' => 'BoostCake',
					'class' => 'alert-error'
				)
			),
            'authError' => 'No tienes permisos de ver esa área',
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish',
                    'fields' => array('username' => 'name'),
                ),
                //'Basic' => array(
                //    'passwordHasher' => 'Blowfish',
                //    'fields' => array('username' => 'name')
                //),
            ),
            'authorize' => array('Controller') // la funcion authorize trabaja en los controladores
        )
    );
    
    public $helpers = array(
		'Session',
		'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
		'Form' => array('className' => 'BoostCake.BoostCakeForm'),
		'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
	);

    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
        $this->check();
    }
    public function isAuthorized($user) {
    // Superusuario puede hacer lo que quiera
    if (isset($user['type']) && $user['type'] === 'Superusuario') {
        return true;
    }

    // Default deny
    //return false;
    $this->Session->setFlash(__('¿Cómo llegaste ahí? No deberías ver eso.'));
    return $this->redirect(array('controller' => 'orders','action' => 'index'));
}

public function check(){
            if (!$this->Auth->loggedIn()) {
                $this->set('logg', false);
            } 
            else{
                $this->set('logg', true);
                $this->set('name', $this->Auth->user('name'));
                $this->set('level', $this->Auth->user('type'));
                $this->set('id', $this->Auth->user('id'));
            }
            $this->set('pag', $usuario = $this->request->params['controller']);
        }
}
