<?php


class Article
{

    private $_id;
    private $_titre;
    private $_contenu;


    public function __construct(array $data){
        $this->hydrate($data);
    }


    public function hydrate(array $data){

        foreach ($data as $key =>$value){
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }

    }


    public function setId($id){


        $id = (int) $id;

        if ($id >0){
            $this->_id = $id;
        }
    }

    public function setTitre($titre){

        if (is_string($titre)){
            $this->_titre = $titre;
        }
    }


    public function setContenu($contenu){
        if (is_string($contenu)){
            $this->_contenu = $contenu;
        }
    }


    public function id(){
        return $this->_id;
    }

    public function titre(){
        return $this->_titre;
    }

    public function contenu(){
        return $this->_contenu;
    }


}