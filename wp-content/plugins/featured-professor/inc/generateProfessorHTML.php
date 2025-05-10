<?php


function generateProfessorHTML($profId)
{
  $professor = new WP_Query([
    'post_type' => 'professor',
    'p' => $profId
  ]);

  ob_start();
  while ($professor->have_posts()) {
    $professor->the_post();
?>
    <div class="professor-callout">
      <div class="professor-callout__photo" style="background-image: url(<?php the_post_thumbnail_url(get_the_ID()); ?>)">
      </div>
      <div class="professor-callout__text">
        <h5><?php echo get_the_title(); ?></h5>
        <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>

        <?php
        $relatedPrograms = get_field('related_programs');
        if ($relatedPrograms && is_array($relatedPrograms) && count($relatedPrograms) > 0) {
          foreach ($relatedPrograms as $idx => $program) {

            if ($idx === 0) {
              echo '<p>Subject Teaches: ';
            }
            echo esc_html(get_the_title($program));
            if ($idx < count($relatedPrograms) - 1) {
              echo ', ';
            } else {
              echo '.' . '</p>';
            }
          }
        }
        ?>

        <p><strong><a href="<?php the_permalink() ?>">Learn more about <?php the_title() ?></a></strong></p>
      </div>
    </div>



<?php
    wp_reset_postdata();
    return ob_get_clean();
  }
}
?>