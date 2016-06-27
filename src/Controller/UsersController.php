<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users->find('all')->contain(['Roles']));

        //$r = TableRegistry::get('roles')->find('all');
        /**
         * Tableau créé pour passer les 3 rôles stockés dans la table "roles" à la vue
         * (Et donc ne pas afficher simplement l'ID du rôle
         * 1= admin, 2= writer, 3= approver
         */
//        foreach ($r as $value) {
//            $roles[$value->id] = $value->title;
//        }

        $this->set(compact('users', 'roles'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $r = TableRegistry::get('roles')->find('all');
        /**
         * Tableau créé pour passer les 3 rôles stockés dans la table "roles" à la vue
         * 1= admin, 2= writer, 3= approver
         */
        foreach ($r as $value) {
            if($value->id == $user->id_roles)
            $role = $value->title;
        }

        $data['user'] = $user;
        $data['role'] = $role;

        //$this->set(compact($user, 'roles'));
        $this->set($data);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roles = TableRegistry::get('roles')->find('Roles');
        //debug($p);

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {

            $data = $this->request->data();
            $user->login = $data['login'];
            $user->password = $data['password'];
            $user->id_roles = $data['id_roles'];

            if ($this->Users->save($user)) {
                $this->Flash->success(__('L\'utilisateur a été sauvegardé.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('L\'utilisateur n\'a pu être sauvegardé. Veuillez essayer à nouveau.'));
            }
        }

//        $r = TableRegistry::get('roles')->find('all');
        /**
         * Tableau créé pour passer les 3 rôles stockés dans la table "roles" à la vue
         * 1= admin, 2= writer, 3= approver
         */
//        foreach ($r as $value) {
//            $roles[$value->id] = $value->title;
//        }


        $this->set(compact('user', 'roles'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $data = $this->request->data();
            $user->login = $data['login'];
            $user->password = $data['password'];
            $user->id_roles = $data['id_roles'];

            if ($this->Users->save($user)) {
                $this->Flash->success(__('L\'utilisateur a été sauvegardé.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('L\'utilisateur n\'a pu être sauvegardé. Veuillez essayer à nouveau.'));
            }
        }

        $r = TableRegistry::get('roles')->find('all');
        /**
         * Tableau créé pour passer les 3 rôles stockés dans la table "roles" à la vue
         * 1= admin, 2= writer, 3= approver
         */
        foreach ($r as $value) {
            $roles[$value->id] = $value->title;
        }
        $this->set(compact('user', 'roles'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('L\'utilisateur a été supprimé.'));
        } else {
            $this->Flash->error(__('L\'utilisateur n\'a pu être supprimé. Veuillez essayer à nouveau.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
