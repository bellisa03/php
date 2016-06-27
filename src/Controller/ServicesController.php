<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Services Controller
 *
 * @property \App\Model\Table\ServicesTable $Services
 */
class ServicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $services = $this->paginate($this->Services);

        $this->set(compact('services'));
        $this->set('_serialize', ['services']);

    }

    /**
     * View method
     *
     * @param string|null $id Service id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $service = $this->Services->get($id, [
            'contain' => ['Outputs']
        ]);

        $this->set('service', $service);
        $this->set('_serialize', ['service']);

    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $service = $this->Services->newEntity();
        if ($this->request->is('post')) {
            $service = $this->Services->patchEntity($service, $this->request->data);
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The service has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The service could not be saved. Please, try again.'));
            }
        }
        $outputs = $this->Services->Outputs->find('list', ['limit' => 200]);
        /**
         * Gestion pour le select dans la vue, fais par G²
         *
         * J'utilise juste TableRegistry, car j'ai mis le bonne ligne dans le use ligne 5
         *
         * Comme je n'ai besoin que de id et title je selectionne juste mon besoin (gain de temps)
         */

        //$r = TableRegistry::get('status')->find()->select('id','title');
        $r = TableRegistry::get('status')->find('all');
        /**
         * Je crée un tableau que je passe à ma vue.
         * 
         * Perso j'écrirais ceci $this->set(['status'=>$status]), mais je pense avec le compact ça passera aussi, je n'utilise jamais cette
         * fonction, donc je ne la connais pas très bien
         */
        foreach ($r as $value) {
            $status[$value->id] = $value->title;
        }
        //$this->set(['status'=>$status]);

        $this->set(compact('service', 'outputs','status'));
        $this->set('_serialize', ['service']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Service id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $service = $this->Services->get($id, [
            'contain' => ['Outputs']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $service = $this->Services->patchEntity($service, $this->request->data);
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The service has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The service could not be saved. Please, try again.'));
            }
        }
        $outputs = $this->Services->Outputs->find('list', ['limit' => 200]);
        $this->set(compact('service', 'outputs'));
        $this->set('_serialize', ['service']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Service id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $service = $this->Services->get($id);
        if ($this->Services->delete($service)) {
            $this->Flash->success(__('The service has been deleted.'));
        } else {
            $this->Flash->error(__('The service could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
