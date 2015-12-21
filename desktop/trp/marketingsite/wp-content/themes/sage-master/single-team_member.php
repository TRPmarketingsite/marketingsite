<?php

while ( have_posts() ) : the_post();

    $trp_team_member_bio = get_post_meta( $post->ID, 'trp-team-member-bio', true );
    $trp_team_member_title = get_post_meta( $post->ID, 'trp-team-member-title', true );

    ?>
    <section class="profile-page">
        <div class="trp-template-header">
            <div class="trp-template-header-content container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>
                            <? the_title() ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="trp-team-nav">
            <div class="container">
                <a href="#members">Team</a>
                <a href="#advisors">Advisors</a>
            </div>
        </div>
        <div class="trp-page-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="avatar-content">
                            <p>
                                <img src="<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> " alt="">
                            </p>
                            <span><? the_title() ?></span>
                            <p><?= $trp_team_member_title ?></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="text-area">
                            <h2>
                                <?= $trp_team_member_bio ?>
                            </h2>
                            <? the_content() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="trp-team-widget">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <h2>
                            Team
                        </h2>
                    </div>

                    <div class="col-md-9">
                        <div class="row">
                            <?php
                            $team_members = new WP_Query(
                                array(	'post_type' => 'team_member',
                                    'posts_per_page' => -1,
                                    'orderby' => 'menu_order',
                                    'order' => 'DESC'
                                )
                            );
                            while ($team_members->have_posts()) : $team_members->the_post();
                                $member_title = get_post_meta( $post->ID, 'trp-team-member-title', true);
                                $member_bio = get_post_meta( $post->ID, 'trp-team-member-bio', true );
                                $member_pic = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                ?>
                                <div class="col-md-4 col-sm-6 trp-team-member">
                                    <a href="<? the_permalink() ?>">
                                        <h4>
                                            <? the_title(); ?> >
                                        </h4>
                                    </a>
                                    <span>
                                        <?= $member_title ?>
                                    </span>
                                </div>
                                <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? endwhile ?>