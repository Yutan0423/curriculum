<?php

class CustomersController extends AppController {
    public $components = array('Paginator');
    // public $paginate = array(
    //     'limit' => '10',
    //     'contain' => array('Customer'),
    //     'order' => array(
    //         'id' => 'desc'
    //     )
    // );

    public function add() {
        if($this->request->is('post')) {
            $this->Customer->create();
            $id = $this->Customer->save($this->request->data);
            $msg = sprintf('顧客 %s を登録しました。', $this->Customer->id);
            $this->Flash->set($msg);
            $this->redirect(['Controller' => 'customers', 'action' => 'index']);
            return;
        }
        $this->render('add');
    }

    public function index() {
        if($this->request->is('post')) {
            $cond_title = $this->request->data('Customer.cond_title');
            $contact_type =  $this->request->data('Customer.contact_type');
            $agency_id =  $this->request->data('Customer.agency_id');
            $status =  $this->request->data('Customer.status');
            $this->paginate = array(
                'limit' => '10',
                'page' => '1'
            );

            $conditions = array();
            if($cond_title) {
                $conditions['Customer.name LIKE'] = '%' . $cond_title . '%';
            }
            if($contact_type) {
                $conditons['Customer.contact_type'] = $contact_type;
            }
            if($agency_id) {
                $conditions['Customer.agency_id'] = $agency_id;
            }
            if($status) {
                $conditions['Customer.status'] = $status;
            }
            $customers_data = $this->Paginator->paginate('Customer', $conditions);
            $count = $this->Customer->find('count', array('conditions' => $conditions));
            // var_dump($cond_title);
            // var_dump($contact_type);
            // var_dump($agency_id);
            // var_dump($status);
            // var_dump($count);
            $this->set('customers_data', $customers_data);
            $this->set('count', $count);
            $this->render('index');
            // 検索条件をリセットする
            return;
        } else {
            // find関数のallもcountもタイプとして第一引数で指定する必要がある
            $this->paginate = array('limit' => '10');
            $customers_data = $this->Paginator->paginate('Customer');
            $count = $this->Customer->find('count');
            $this->set('customers_data', $customers_data);
            $this->set('count', $count);
            $this->render('index');
        }
    }

    public function edit() {
        if($this->request->is('post')) {
            $id = $this->request->pass[0];
            $this->Customer->id = $id;
            $this->Customer->save($this->request->data);
            $msg = sprintf('顧客 %s を編集しました。', $id);
            $this->Flash->set($msg);
            $this->redirect(['controller' => 'customers', 'action' => 'index']);
        }
    }
}