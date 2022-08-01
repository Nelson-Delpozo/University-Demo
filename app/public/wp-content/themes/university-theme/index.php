<?php

//function sayHello($name, $color): void
//{
//    echo "<p>Hello, my name is $name, and my favorite color is $color</p>";
//}
//sayHello("bob", "red");
//
//?>
<!---->
<!--<h1>--><?php //bloginfo('description'); ?><!--</h1>-->
<!---->
<?php
//$names = array("Me", "You", "BooBoo", "Kitty");
//
//$count = 0;
//while($count < count($names)){
//    echo "<h2>Hello, $names[$count]</h2>";
//    $count++;
//}

    while(have_posts()){
        the_post(); ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
        <hr>
<?php


    }