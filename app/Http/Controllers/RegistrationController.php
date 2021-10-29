<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller{

    // function signup(Request $request){
    //     // dd($request);
    //     return view('registration');
    // }

    // function showform(){
    //     print_r('Get Method...');
    //     return view('registration');
    // }
    // function signup(){
    //     print_r('Post Method...');
    //     return view('registration');
    // }
   
   
    // function showform(Request $request){
    //     // dd($request);
    //     print_r('Get Method...');
    //     return view('registration');
    // }

    // function signup(Request $request){
    //     dd($request);
    //     print_r('Post Method...');
    //     return view('registration');
    // }

    function showform(Request $request){
        // dd($request);
        print_r('Get Method...');
        return view('registration');
    }

    function signup(Request $request){
        // dd($request);
        // print_r('Post Method...');
        
        // View All Input Data
        // print_r($request->all());
        
        // Same As all() method 
        // print_r($request->input());
        
        // View Only one input or Name input data
        // print_r($request->input('name'));
        
        // if name input change
        // print_r($request->input('name1'));

        // same As input('name') Not Deferent
        // print_r($request->name);

        // if input have than Show Nahole view hobe na
        // if($request->has('name')){
        //     Print_r($request->input('name'));
        // }
        
        //if input have then show etar jonno multiple code show korar jonno  
        // if($request->has(['name','email'])){
        //     Print_r($request->input('name'));
        //     echo '<br>';
        //     Print_r($request->input('email'));
        // }

        // input filled then show massage if not do not show massage
        // if($request->filled('name')){
        //     Print_r('Inside Filled');
        //         echo '<br>';
        //     Print_r($request->input('name'));
        // }

        // Missing Any Input name then view
        // if($request->missing('username')){
        //     Print_r('username not Present');
        // }
        
        // jodi name input thake tahole name input view korbe
        // $request->whenHas('name', function($input){
        //     Print_r('Data Modified');
        // });

        // input jobi filled thake tahole massage view korbe
        // $request->whenfilled('name', function($input){
        //     Print_r('Data Modified');
        // });
        
        //input Data view
        // $request->flash();
        
        // Only view those input in view (array)
        // $request->flashOnly(['name', 'email']);

        // Only not view password input 
        // $request->flashExcept('password');

        // print_r($request->old('name'));
        // echo '<br>';
        // print_r($request->old('email'));
        // echo '<br>';
        // print_r($request->old('password'));
        
        //view input data other Page input 
        // return redirect('olddata')->withInput();
        // same as up this is only route name
        // return redirect()->route('old')->withInput();
        // view input data other Page input WITHOUT password input or other Input
        // return redirect('olddata')->withInput($request->except('password'));


        return view('registration');
    }
}
