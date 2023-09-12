<?php
class View{
    private $model;
    private  $content;
    //contructor
    public  function  __construct(Model $model)
    {
        $this->model = $model;
    }
    public function  viewContent(){
        $this->content =$this->this->model->getContent();
        echo "<br> content is : $this->content ";
    }
}
