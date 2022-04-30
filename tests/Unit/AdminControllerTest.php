<?php

namespace Tests\Unit;

use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_index()
        {
        $response=$this->get('/admin');
        $response->assertStatus(302);

        }
    public function test_profile()
        {
        $response=$this->get('/admin/profile');
        $response->assertStatus($response->status(),200);

        }
    public function test_settings()
        {
        $response=$this->get('/admin/settings');
        $response->assertStatus($response->status(),200);

        }
    public function test_profileUpdate()
    {
        $response=$this->call('post','/admin/profile/{id}',[
            'name',
             'email',
              'password',
              'role',
              'photo',
              'status',
              'provider',
              'provider_id'
                ]);


        $response->assertStatus($response->status(),200);
    }
    public function test_settingUpdate()
    {
        $response=$this->call('post','/admin/settings/update',[
            'description'=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem Excepteu

            sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspi deserunt mollit anim id est laborum. sed ut perspi.",
'short_des'=>"Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.",
'photo'=>"image.jpg",
'logo'=>'logo.jpg',
'address'=>"NO. 342 - North Goran, 012 Dhaka,Bnagladesh",
'email'=>"eshop@gmail.com",
'phone'=>"+8801675957109",
                ]);


        $response->assertStatus($response->status(),200);
    }
    public function test_changePassword()
        {
        $response=$this->get('/admin/change-passowrd');
        $response->assertStatus($response->status(),200);
        }
        public function test_changePasswordStore()
        {
            $response=$this->call('post','/admin/change-password',[
                'current_password' =>1111 ,
            'new_password' =>2222 ,
            'new_confirm_password' =>2222 ,
                    ]);
    
    
            $response->assertStatus($response->status(),200);
        }
}
