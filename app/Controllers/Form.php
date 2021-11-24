<?php namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
        helper(['form']);
        helper(['url']);

        $data = [];
        $data['categories'] = [
            'Student',
            'Teacher',
            'Principal'
        ];
        
        /* método php 
        if($_POST){
        echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        }
        */
        
        if($this->request->getmethod() == 'post') {
            $rules = [
              //'email' => 'required|valid_email',  Método 1 - regras
                
                /* 'email' => [                      //Método 2 - regras, rótulos e erros
                    'rules' => 'required|valid_email',
                    'label' => 'Email adress',
                    'errors' => [
                        'required' => 'Your Email adress is required.',
                        'valid_email' => 'Really?'
                    ]
                ],
                'password' => 'required|min_length[8]',
                'category' => 'in_list[Student, Teacher]',  // in_list é uma camada extra de proteção!
                'date' => [
                    'rules' => 'required|date_check',
                    'label' => 'Date',
                    'errors' => [
                        'date_check' => 'You cannot add a date before today'
                    ]
                ] */ //para validar a rule check_date é necessário ir até app/config/Validation e adicionar a rule nova!
                'theFile' => [
                    'rules' => 'uploaded[theFile.0]|max_size[theFile,1024]|is_image[theFile]',
                    'label' => 'The File'
                ]
            ];

            if($this->validate($rules)){

                /* $file = $this->request->getFile('theFile');
                if($file->isValid() && !$file->hasMoved()){
                    $file->move('./uploads/images', 'testName.'.$file->getExtension());
                } */

                $files = $this->request->getFiles();
                foreach ($files['theFile'] as $file) {
                    if($file->isValid() && !$file->hasMoved()){
                        echo $file->getName().' - Real name<br> ';
                        $file->move('./uploads/images/multiple');
                        echo $file->getName().' - New name <br> <hr> ';
                    }
                }

                exit();
                return redirect()->to('form/success');   // se as regras forem validadas...
            }else {
                $data['validation'] = $this->validator;
            }
        }

        return view('form', $data);
    }

    public function success(){
        return 'Congratulations!';  // REVISAR!!!
    }

}

?>