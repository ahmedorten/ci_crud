<?php


class User extends CI_Controller
{
    public function show($user_id)
    {
//        $this->load->model('user_model');
        $data['results'] = $this->user_model->get_users($user_id);
        $this->load->view('user_view',$data);

//        foreach ($result as $object){
//            echo $object->id;
//        }

    }

    public function insert(){
        $username = "Mohamed";
        $password = "secret";
        $this->user_model->create_users([
            'username' => $username,
            'password' => $password
        ]);
    }

    public function update(){
        $id = 2;
        $username = "Mohamed1";
        $password = "secret1";
        $this->user_model->update_users([
            'username' => $username,
            'password' => $password
        ],$id);
    }

    public function delete(){
        $id = 2;
        $this->user_model->delete_users($id);
    }

}


?>