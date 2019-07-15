<?php

namespace ctrl;

use models\MToDo;

class CToDo
{
    public $model;

    public function __construct()
    {
        $this->model = new MToDo();
    }

    public function actionCreate()
    {
        $this->model->create();
    }

    public function actionDelete()
    {
        $this->model->delete();
    }

    public function actionUpdate()
    {
        $id = $_GET['id'];
        $text = $_GET['text'];
        if(!empty($id) && !empty($text)){
            $this->model->update($id, $text);
        }
    }

    public function actionView()
    {
        $content = $this->model->view();
        echo json_encode( $content );
        exit;
    }
}
