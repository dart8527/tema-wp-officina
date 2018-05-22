<?php

get_header('no_cover');?>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 beer-image " >
              <figure>
                <?php the_post_thumbnail(); ?>
              </figure>

            </div>
             <div class="col-md-6 beer-content" >

               <?php if(have_posts()): ?>
                 <?php while(have_posts()): the_post() ?>
                   <header>
                      <h1><?php the_title() ?></h1>
                   </header>
                   <article class="beer-body">
                       <p><?php the_content() ?></p>
                   </article>
                  <table class="beer_detail">
                    <tbody>
                         <tr>
                        <td>
                            <h5>STILE</h5>
                        </td>
                            <td><?php the_field('stile') ?></td>
                        </tr>

                        <tr>
                        <td>
                            <h5>COLORE</h5>
                        </td>
                        <td><?php the_field('colore') ?></td>
                        </tr>

                        <tr>
                        <td>
                            <h5>GRADI</h5>
                        </td>
                            <td><?php the_field('gradi') ?></td>
                    </tr>

                    <tr>
                        <td>
                            <h5>FORMATI</h5>
                        </td>
                            <td><?php the_field('formati') ?></td>
                    </tr>

                    <tr>
                        <td>
                            <h5>TEMP. DI SERVIZIO</h5>
                        </td>
                    <td><?php the_field('temperatura_di_servizio') ?></td>
                    </tr>

                    <tr>
                        <td>
                            <h5>IBU</h5>
                        </td>
                            <td><?php the_field('ibu') ?></td>
                    </tr>

                    <tr>
                        <td>
                            <h5>EBC</h5>
                        </td>
                            <td>ebc</td>
                    </tr>
                    </tbody>
                    </table>
                    <h5>ABBINAMENTI</h5>
                    <P><?php the_field('abbinamenti') ?></P>
                 <?php endwhile; ?>
                 <?php endif; ?>

            </div>
        </div>
        <hr>



    </div>
</div>





<?php get_footer();?>
