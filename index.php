<?php get_header(); ?>

    <!-- PORQUE ESCOLHER A ONEX -->
    <div class="uk-container container_filter">

      <div class="filters filter-button-group">

        <div class="resources-category-list-wrapper">
          <ul id="resources-category-list" class="resources-category-list">
            <li class="category-item active" data-category="*">All</li>
            <?php
              $terms = get_terms('resources-categories');
              foreach ($terms as  $term) { 
            ?>
              <li class="category-item" data-category="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></li>
            <?php 
              }
            ?>
          </ul>
          
          <div class="resources-order-wrapper">
            <label for="resources-order">Order By</label>
            <select name="resources-order" id="resources-order">
              <option value="title">List Order</option>
              <option value="date">Date</option>
              <option value="title">Alphabetical</option>
            </select>
          </div>
        </div>

      </div>

      <!-- filter post container -->
      <div id="filterResources" class="content uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s filter-field" uk-grid></div>

    </div>
<?php get_footer(); ?>
