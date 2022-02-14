<?php get_header(  ); ?>


    <h2>Résultat(s) de recherche</h2>

    <?php if(have_posts()) : ?>

    <?php while(have_posts(  )) : the_post(  ); ?>

        <article class="flex post">

            <div class="texte-article">
                <h2><?php the_title(  ) ?></h2>
                <p><?php the_excerpt(  ) ?> <a href="<?php the_permalink(  ); ?>">En savoir plus...</a>  </p>
            </div>

        </article>

    <?php endwhile; ?>

    <?php else : ?>

        <p>Aucun résultat pour cette requête...</p>

    <?php endif; ?>


<?php get_footer(  ); ?>