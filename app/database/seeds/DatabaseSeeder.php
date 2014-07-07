<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = Hash::make('adminPass123!');
        $user->save();

        $user = new User();
        $user->email = 'genaro@codeup.com';
        $user->password = Hash::make('adminPass123!');
        $user->save();




        for ($i=1; $i <= 10; $i++) 
        { 
	        $post = new Post();
	        $post->user_id = rand(1,2);
	        $post->title = "New post title " . $i;
	        $post->body = "New post body ". $i;
	        $post->save();
        }
		
    }
}

