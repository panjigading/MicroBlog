<?php
class MBlog_Controller extends Controller
{
    public function index()
    {
        $mblogModel = $this->loadModel('mblog_model');
        $mblogs = $mblogModel->getAll();

        $this->loadView('home', ['mblogs' => $mblogs]);
    }

    public function add() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $mblogModel = $this->loadModel("mblog_model");
            $mblogModel->add(nl2br($_POST["text"]));
            header("Location: index.php");
        } else {
            $this->loadView('add');
        }
    }

    public function edit() {
        $mblogModel = $this->loadModel("mblog_model");
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $mblogModel->update($_POST["id"], nl2br($_POST["text"]));
            header("Location: index.php");
        } else {
            $res = $mblogModel->getByID($_GET["id"])->fetch_object();
            $this->loadView('edit', ['res' => $res]);
        }
    }

    public function delete() {
        $mblogModel = $this->loadModel("mblog_model");
        $mblogModel->delete($_GET["id"]);
        header("Location: index.php");
    }
}
