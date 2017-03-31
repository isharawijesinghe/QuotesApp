<?php

use Illuminate\Database\Seeder;
use App\NiceAction;
use App\category;

class NiceActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category1=new category();
        $category1->name='cat 1';
        $category1->save();

        $category2=new category();
        $category2->name='cat 2';
        $category2->save();

        $nice_action=new NiceAction();
        $nice_action->name='Greet';
        $nice_action->niceness=3;
        $nice_action->save();

        $category1->nice_actions()->attach($nice_action);
        $category2 ->nice_actions()->attach($nice_action);

        $nice_action=new NiceAction();
        $nice_action->name='Hug';
        $nice_action->niceness=6;
        $nice_action->save();

        $category1->nice_actions()->attach($nice_action);

        $nice_action=new NiceAction();
        $nice_action->name='Kiss';
        $nice_action->niceness=9;
        $nice_action->save();
        $category2 ->nice_actions()->attach($nice_action);

        $nice_action=new NiceAction();
        $nice_action->name='Wave';
        $nice_action->niceness=2;
        $nice_action->save();

        $category1->nice_actions()->attach($nice_action);
        $category2 ->nice_actions()->attach($nice_action);

    }
}
