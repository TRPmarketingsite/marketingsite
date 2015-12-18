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

    </div>
</section>

<? endwhile ?>