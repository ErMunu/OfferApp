<?php

class PagesController
{

    /**
     * @throws Exception
     */
    public function login()
    {
        if(isset($_POST['login'])){

            $checkLogin = App::get('database')->checkCredentials($_POST['username'], $_POST['password']);

            if (null !== $checkLogin[0]->username){

                $_SESSION['username'] = $checkLogin[0]->username;

                $offers = App::get('database')->selectAll('offers');

                return view('index', compact('offers'));
            }
        }
        return view('login');
    }

    public function logout()
    {
        $_SESSION['username'] = null;

        header('Location: /');

        exit();
    }

    public function home()
    {
        $offers = App::get('database')->selectAll('offers');

        return view('index', compact('offers'));

    }

    public function view()
    {
        if(!isset($_POST['id']))
        {
            header("Location: /");

            exit();
        } else {
            $offer = App::get('database')->selectID('offers',$_POST['id']);

            return view('view', compact('offer'));
        }

    }

    public function create()
    {

        if(isset($_POST['newoffer']))
        {
           $saveData = App::get('database')->insert('offers',
                [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'amount' => $_POST['amount'],
                    'address' => $_POST['address'],
                    'start_date' =>$_POST['startDate'],
                    'offered_date' => $_POST['offeredDate'],
                    'comment' => $_POST['comment'],
                    'username' => $_SESSION['username']
                ]);
            }
        if(null !== $saveData){
            $offer = App::get('database')->selectID('offers',$saveData);

            return view('view', compact('offer'));
        }
            
        return view('create');

    }

    public function delete()
    {
        
        if(!isset($_POST['id'])){
        return redirect('');
      
        } else {
        App::get('database')->delete('offers','id',$_POST['id']);
        return redirect('');
        }
    }

    public function update()
    {
        if (!isset($_POST['id']))
        {
            header("Location: /");
            exit();
        } else if (isset($_POST['updateOffer']))
        {

            App::get('database')->update('offers',
                [
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'amount' => $_POST['amount'],
                    'address' => $_POST['address'],
                    'start_date' =>$_POST['startDate'],
                    'offered_date' => $_POST['offeredDate'],
                    'comment' => $_POST['comment'],
                    'username' => $_SESSION['username']
                ],$_POST['id']);

            echo "<script> alert('Data Updated Successfully');</script>";

            
        }

            $offer = App::get('database')->selectID('offers', $_POST['id']);

            return view('update', compact('offer'));
    }
}