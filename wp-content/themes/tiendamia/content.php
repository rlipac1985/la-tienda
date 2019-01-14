<main class="item  i-b  w-70  main">
    <?php 
        // logica de the_loop
        // si (hay entradas)
                // muestra la onfo de las entradas
            //si no 
                // noy ahy entradas que mostrar


        if (have_posts()):
            while (have_posts()):
                the_post(); 
               // echo '<p>Imprimiendo entradas</p>';
    ?>
            <article>
            
                <h1><?php the_title(); ?></h1>
                 <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a>
                 <p>
                    <?php

                     
                        the_time('d-M-Y');
                        
                    ?>
                 </p>
                 <p><?php the_excerpt(); ?></p>
                 <p><?php the_category(); ?></p>
                 <p><?php the_tags(); ?></p>
                 <p><?php the_author(); ?></p>
            </article>
            <hr>
              
    <?php
             
            endwhile;
        else:
            echo '<p class="error"> No hay entradas </p>';

        endif;
?>

</main>