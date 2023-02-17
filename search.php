<?php 
$per_page = 2;
$search_term = get_search_term("s");

$args = [
  'post_type' => ['post','page','solution','evento'],
  'posts_per_page' => $per_page,
  's' => $search_term,
  'paged' => $paged,
];

$the_query = new WP_Query( $args );
$count = $the_query->found_posts;
$total_pages = ceil($the_query->found_posts / $per_page);
$current_page = get_query_var('paged') ? get_query_var('paged') : 1;


?>

<?php get_header(); ?>

<main class="page-search">
  <div class="container">
    <h1>Resultado da busca</h1>

    <span>Foram encontrados <strong><?php echo $count; ?></strong> resultados com o termo <strong>"<?php echo $search_term; ?>"</strong></span>
  </div>

    <form action="<?php site_url(); ?>">
      <div class="container">
        <div class="search-bar">
          <img src="<?php echo get_img("icon-search.svg"); ?>" alt="Ícone de lupa">
          
          <input type="search" name="s" placeholder="Buscar no site">

          <button class="hidden" type="reset">
            <?php get_icon("close-form"); ?>
          </button>
          
          <button type="submit" class="btn-secondary">Buscar</button>
        </div>
      </div>
    </form>

    <div class="search-results-wrapper">
      <div class="container">
        <?php 
            if ($the_query->have_posts()):
                while ($the_query->have_posts()) :
                    $the_query->the_post();
        
            $content = summarize_content(get_the_content(), 500);
            $content = emphasize_word($content, $search_term);

            $post_type = translate_post_type($post->post_type);

          
        ?>
        <article class="search-result">
          <a href="">
            <h2><?php the_title(); ?> - <strong><?php echo $post_type; ?></strong></h2>

            <p><?php echo $content; ?></p>
          </a>
        </article>

        <?php endwhile; endif; wp_reset_postdata(); ?>

       <?php
          $prev_link = get_previous_posts_link("");
          $next_link = get_next_posts_link("", $the_query->max_num_pages);

          $links = paginate_links(array(
            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'format' => '?paged=%#%',
            'current' => max(1, $current_page),
            'total' => $total_pages,
            'prev_text' => $prev_link ? $prev_link : '&laquo; Anterior',
            'next_text' => $next_link ? $next_link : 'Próximo &raquo;',
          ));
        ?>

        <div class="pagination">
          <?php echo ($links) ?  $links : ""; ?>
        </div>
      </div>
    </div>
</main>

<?php get_footer(); ?>
