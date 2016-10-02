<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Eddie Theme
 */

get_header(); ?>

<main class="page-content">
    <section class="content-book">
        <span  class="book-image">
            <figure>
                <img src=img/book.png alt="" />
            </figure>
        </span>
        <span class="book-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum cum, voluptatum repellat qui similique ipsum minima distinctio eaque quaerat inventore deleniti sequi eligendi, voluptatem molestiae, repellendus nostrum alias saepe earum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, error recusandae beatae commodi a ipsum velit tempore laboriosam quam autem, officiis natus architecto, numquam at ducimus odit distinctio consequatur accusantium!</p>
            <button>Get the Book!</button>
        </span>
    </section>
    <section class="content-lessons">
        <span class="lessons-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis debitis magnam, reiciendis beatae reprehenderit facilis. Eveniet repellendus ad mollitia doloribus distinctio corporis optio nihil hic est, ipsa, omnis quasi. Deserunt!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus sunt minima, nemo amet ullam laboriosam a. Debitis ea dolorum, ipsa eligendi, optio doloremque maxime sapiente necessitatibus magnam minima a, accusamus!</p>
        </span>
        <span class="lessons-image">
            <figure>
                <img src=media/intro.img alt="" />
            </figure>
        </span>
    </section>
</main>

<?php get_footer(); ?>
