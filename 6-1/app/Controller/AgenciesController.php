<?php

class AgenciesController extends AppController {
    public function add() {
        if($this->request->is('post')) {
            $this->Agency->create();
            // $data = array('agency_name' => $this->request->data['agency_name']);
            $id = $this->Agency->save($this->request->data);
            $msg = sprintf('代理店 %s を登録しました。', $this->Agency->id);
            $this->Flash->set($msg);
            $this->redirect(['Controller' => 'agencies', 'action' => 'index']);
            return;
        }
        $this->render('add');
    }

    public function index() {
        $options = array('conditions' => array('Agency.deleted' => 0));
        //検索
        $agencies_data = $this->Agency->find('all', $options);
        //代理店情報をビューに渡す
        $this->set('agencies_data', $agencies_data);
        $this->render('index');
    }

    public function edit() {
        if($this->request->is('post')) {
            $id = $this->request->pass[0];
            $this->Agency->id = $id;
            $this->Agency->saveField('agency_name', $this->request->data('Agency.agency_name'));
            $msg = sprintf('代理店 %s を編集しました。', $id);
            $this->Flash->set($msg);
            $this->redirect(['controller' => 'agencies', 'action' => 'index']);
        }
        

    }

    public function delete() {
        // URLの末尾からタスクのIDを取得してメッセージを作成
        $id = $this->request->pass[0];
        $this->Agency->id = $id;
        $this->Agency->saveField('deleted', 1);
        $msg = sprintf('代理店 %s を削除しました。', $id);
        $this->Flash->set($msg);
        $this->redirect(['controller' => 'agencies', 'action' => 'index']);
        return;
    }
}