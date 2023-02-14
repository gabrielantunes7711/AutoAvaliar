<?php 

$for_who = get_field("for_who");

if(!empty($for_who)): 

$title = $for_who['title'];
$description = $for_who['description'];
$for_who_item = $for_who['for_who_item'];

$count = 1;

?>

<section class="for-who">
    <div class="container">
      <h2><?php echo $title; ?></h2>
      
      <p><?php echo $description; ?></p>
    
      <div class="for-who-infos">
        <ul class="left">
          <?php foreach($for_who_item as $item) : ?>
          <li>  
            <a href="#forWhoCard<?php echo $count ?>" class="info-choice <?php echo $count == "1" ? "selected" : ''; ?>">
              <div class="container-icon">
                <?php if (!empty($item['icon'])): ?>
                <img src="<?php echo $item['icon']['url']; ?>" alt="<?php echo $item['icon']['alt']; ?>">
                <?php endif; ?>
              </div>
              
              <?php if (!empty($item['title'])): ?>
              <h3><?php echo $item['title']; ?></h3>
              <?php endif; ?>
            </a>
          </li>

          <?php $count++  ?>
          <?php endforeach; ?>
        </ul>

        <?php $count = 1  ?>

        <div class="right">
          <?php foreach($for_who_item as $item) : ?>
          <div class="for-who-card" id="forWhoCard<?php echo $count ?>">

            <?php if (!empty($item['image'])): ?>
            <figure>
              <img class="cover" src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>">
            </figure>
            <?php endif; ?>

            <div class="info-text">
              <?php if (!empty($item['description'])): ?>
              <p><?php echo $item['description']; ?></p>
              <?php endif; ?>
            
              <?php if (!empty($item['link'])): ?>
              <a href="<?php echo $item['link']['url']; ?>" class="btn-secondary" target="<?php echo $item['link']['target']; ?>">
                <?php echo $item['link']['title']; ?>
                <?php get_icon('arrow-right') ?>
              </a>
              <?php endif; ?>
            </div>
          </div>

          <?php $count++  ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>