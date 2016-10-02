<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Eddie Theme
 */

get_header(); ?>

<main class="page-content">
    <section class="content-about">
        <span  class="about-image">
            <figure>
                <img src=img/ed.jpg alt="" />
            </figure>
        </span>
        <span class="about-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum cum, voluptatum repellat qui similique ipsum minima distinctio eaque quaerat inventore deleniti sequi eligendi, voluptatem molestiae, repellendus nostrum alias saepe earum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, error recusandae beatae commodi a ipsum velit tempore laboriosam quam autem, officiis natus architecto, numquam at ducimus odit distinctio consequatur accusantium!</p>
            <button>Get the Book!</button>
        </span>
    </section>
    <section class="about-book">
        <span class="book-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis debitis magnam, reiciendis beatae reprehenderit facilis. Eveniet repellendus ad mollitia doloribus distinctio corporis optio nihil hic est, ipsa, omnis quasi. Deserunt!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus sunt minima, nemo amet ullam laboriosam a. Debitis ea dolorum, ipsa eligendi, optio doloremque maxime sapiente necessitatibus magnam minima a, accusamus!</p>
        </span>
        <span class="book-image">
            <figure>
                <img src=img/book.png alt="" />
            </figure>
        </span>
    </section>
    <section class="about-lessons">
        <span class="lessons-info">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis debitis magnam, reiciendis beatae reprehenderit facilis. Eveniet repellendus ad mollitia doloribus distinctio corporis optio nihil hic est, ipsa, omnis quasi. Deserunt!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus sunt minima, nemo amet ullam laboriosam a. Debitis ea dolorum, ipsa eligendi, optio doloremque maxime sapiente necessitatibus magnam minima a, accusamus!</p>
        </span>
        <span class="lessons-image">
            <figure>
                <img src=media/lessons.img alt="" />
            </figure>
        </span>
    </section>
</main>
<?php
get_sidebar();
get_footer(); ?>
