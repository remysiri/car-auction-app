<?php

use Illuminate\Database\Seeder;
use GTImports\Blog;

class BlogsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post1 = new Blog();
        $post1->title = 'Things are not looking good for Tesla';
        $post1->summary = 'For years, Tesla has been riding high on a combination of venture capital and good old fashioned borrowing, all while losing billions of dollars. But this week, as its stock nosedives and its credit gets downg';
        $post1->description = 'For years, Tesla has been riding high on a combination of venture capital and good old fashioned borrowing, all while losing billions of dollars. But this week, as its stock nosedives and its credit gets downg';
        $post1->save();

        $post2 = new Blog();
        $post2->title = "What's the next modern classic";
        $post2->summary = 'It’s been a somewhat bewildering week for cars I grew up admiring. First, an automatic (!!!) but super clean 1994 Toyota Supra Turbo seems poised to crack $70,000 when its Bring a Trailer auction ends tomorow';
        $post2->description = 'For years, Tesla has been riding high on a combination of venture capital and good old fashioned borrowing, all while losing billions of dollars. But this week, as its stock nosedives and its credit gets downg';
        $post2->save();

        $post3 = new Blog();
        $post3->title = 'Why the 2019 Toyota Corolla';
        $post3->summary = 'If you’d said a month ago that you had no reason to be excited about a Toyota Corolla, I’d understand. Not anymore. Not since we learned that the 2019 Corolla hatchback with a six-speed manual was coming.$post2';
        $post3->description = 'For years, Tesla has been riding high on a combination of venture capital and good old fashioned borrowing, all while losing billions of dollars. But this week, as its stock nosedives and its credit gets downg';
        $post3->save();

        $post4 = new Blog();
        $post4->title = 'Random Article 1';
        $post4->summary = 'For years, Tesla has been riding high on a combination of venture capital and good old fashioned borrowing, all while losing billions of dollars. But this week, as its stock nosedives and its credit gets downg';
        $post4->description = 'For years, Tesla has been riding high on a combination of venture capital and good old fashioned borrowing, all while losing billions of dollars. But this week, as its stock nosedives and its credit gets downg';
        $post4->save();

        $post5 = new Blog();
        $post5->title = "Another Random 2";
        $post5->summary = 'It’s been a somewhat bewildering week for cars I grew up admiring. First, an automatic (!!!) but super clean 1994 Toyota Supra Turbo seems poised to crack $70,000 when its Bring a Trailer auction ends tomorow';
        $post5->description = 'For years, Tesla has been riding high on a combination of venture capital and good old fashioned borrowing, all while losing billions of dollars. But this week, as its stock nosedives and its credit gets downg';
        $post5->save();

        $post6 = new Blog();
        $post6->title = 'Last one random$post4';
        $post6->summary = 'If you’d said a month ago that you had no reason to be excited about a Toyota Corolla, I’d understand. Not anymore. Not since we learned that the 2019 Corolla hatchback with a six-speed manual was coming.$post2';
        $post6->description = 'For years, Tesla has been riding high on a combination of venture capital and good old fashioned borrowing, all while losing billions of dollars. But this week, as its stock nosedives and its credit gets downg';
        $post6->save();
    }
}
